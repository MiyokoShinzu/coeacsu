<?php
session_start();
include '../../src/connection.php';

date_default_timezone_set('Asia/Manila');
$d = date('Y-m-d H:i:s');

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => '0', 'error' => 'Invalid request method']);
    exit;
}

// Physical server directory.
// Adjust this path if ee_uploads is not located two levels above this handler.
$upload_dir = '../../accre_standalone_folder/ee_uploads/';
$public_url = 'https://csucpe.com/accre_standalone_folder/ee_uploads/';

$section = $_POST['section'] ?? '';
$department = $_POST['department'] ?? ($_SESSION['department'] ?? 'ee');
$area = $_POST['area'] ?? '';
$label = $_POST['label'] ?? '';
$file_type = $_POST['file_type'] ?? '';

if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
    echo json_encode(['success' => '0', 'error' => 'File upload failed']);
    exit;
}

if (!in_array($file_type, ['pdf', 'video'], true)) {
    echo json_encode(['success' => '0', 'error' => 'Invalid file type']);
    exit;
}

$tmp_file = $_FILES['file']['tmp_name'];
$original_name = basename($_FILES['file']['name']);

// Verify actual MIME type on the server.
$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($tmp_file);

$allowed = [
    'pdf' => ['application/pdf'],
    'video' => ['video/mp4', 'video/webm', 'video/ogg']
];

$extensions = [
    'application/pdf' => 'pdf',
    'video/mp4' => 'mp4',
    'video/webm' => 'webm',
    'video/ogg' => 'ogv'
];

if (!in_array($mime, $allowed[$file_type], true)) {
    echo json_encode(['success' => '0', 'error' => 'File content does not match the selected type']);
    exit;
}

// Enforce upload limits.
$max_size = ($file_type === 'pdf')
    ? 20 * 1024 * 1024
    : 100 * 1024 * 1024;

if ($_FILES['file']['size'] > $max_size) {
    echo json_encode(['success' => '0', 'error' => 'File exceeds the allowed size limit']);
    exit;
}

// Ensure the destination directory exists and is writable.
if (!is_dir($upload_dir) || !is_writable($upload_dir)) {
    error_log('EE upload directory missing or not writable: ' . $upload_dir);
    http_response_code(500);
    echo json_encode(['success' => '0', 'error' => 'Upload directory is unavailable']);
    exit;
}

// Generate a safe, unique filename.
$extension = $extensions[$mime];
$stored_name = bin2hex(random_bytes(16)) . '_' . time() . '.' . $extension;
$target_file = $upload_dir . $stored_name;
$file_path = $public_url . $stored_name;

// Save file.
if (!move_uploaded_file($tmp_file, $target_file)) {
    echo json_encode(['success' => '0', 'error' => 'Could not save uploaded file']);
    exit;
}

// Insert using the existing database schema.
$stmt = $mysqli->prepare(
    'INSERT INTO files (path, section, area, department, datetime_update, label)
     VALUES (?, ?, ?, ?, ?, ?)'
);

if (!$stmt) {
    @unlink($target_file);
    error_log('File insert prepare failed: ' . $mysqli->error);
    http_response_code(500);
    echo json_encode(['success' => '0', 'error' => 'Database operation failed']);
    exit;
}

$stmt->bind_param(
    'ssssss',
    $file_path,
    $section,
    $area,
    $department,
    $d,
    $label
);

if ($stmt->execute()) {
    echo json_encode(['success' => '1', 'path' => $file_path]);
} else {
    @unlink($target_file);
    error_log('File insert failed: ' . $stmt->error);
    http_response_code(500);
    echo json_encode(['success' => '0', 'error' => 'Database insert failed']);
}

$stmt->close();
