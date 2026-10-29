
<?php
session_start();

header('Content-Type: application/json');

require_once __DIR__ . '/../../src/connection.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    http_response_code(405);

    echo json_encode([
        'success' => false,
        'error' => 'Invalid request method'
    ]);
    exit;
}

// Get and validate the URL parameter
if (empty($_GET['url'])) {
    echo json_encode([
        'success' => false,
        'error' => 'URL parameter missing'
    ]);
    exit;
}

$file_url = $_GET['url'];

// Validate that the URL belongs to your website
$parsed_url = parse_url($file_url);

if (
    $parsed_url === false ||
    strtolower($parsed_url['host'] ?? '') !== 'csucpe.com' ||
    strtolower($parsed_url['scheme'] ?? '') !== 'https' ||
    !isset($parsed_url['path']) ||
    strpos(
        $parsed_url['path'],
        '/accre_standalone_folder/ee_uploads/'
    ) !== 0
) {
    echo json_encode([
        'success' => false,
        'error' => 'Invalid file URL'
    ]);
    exit;
}

// Extract the filename from the URL
$filename = basename(
    rawurldecode($parsed_url['path'])
);

if (
    $filename === '' ||
    $filename === '.' ||
    $filename === '..' ||
    strpos($filename, '/') !== false ||
    strpos($filename, '\\') !== false
) {
    echo json_encode([
        'success' => false,
        'error' => 'Invalid filename'
    ]);
    exit;
}

// Physical upload directory relative to this PHP file
$upload_dir = __DIR__
    . '/../../../accre_standalone_folder/ee_uploads/';

$real_upload_dir = realpath($upload_dir);

if ($real_upload_dir === false || !is_dir($real_upload_dir)) {
    echo json_encode([
        'success' => false,
        'error' => 'Upload directory not found',
        'checked_path' => $upload_dir
    ]);
    exit;
}

// Resolve the physical file path
$physical_path = realpath(
    $real_upload_dir . DIRECTORY_SEPARATOR . $filename
);

// Ensure the file is directly inside the upload directory
if (
    $physical_path === false ||
    dirname($physical_path) !== $real_upload_dir ||
    !is_file($physical_path)
) {
    echo json_encode([
        'success' => false,
        'error' => 'Physical file not found',
        'checked_path' => $real_upload_dir
            . DIRECTORY_SEPARATOR . $filename
    ]);
    exit;
}

// Confirm that the exact URL exists in the database
$stmt = $mysqli->prepare(
    'SELECT path FROM files WHERE path = ?'
);

if (!$stmt) {
    echo json_encode([
        'success' => false,
        'error' => 'Database query failed'
    ]);
    exit;
}

$stmt->bind_param('s', $file_url);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    $stmt->close();

    echo json_encode([
        'success' => false,
        'error' => 'File record not found in database'
    ]);
    exit;
}

$stmt->close();

// Delete the physical file from Hostinger
clearstatcache(true, $physical_path);

if (!is_writable($physical_path)) {
    echo json_encode([
        'success' => false,
        'error' => 'File is not writable or permissions prevent deletion',
        'directory_writable' => is_writable($real_upload_dir)
    ]);
    exit;
}

if (!unlink($physical_path)) {
    $last_error = error_get_last();

    echo json_encode([
        'success' => false,
        'error' => 'Failed to delete physical file',
        'php_error' => $last_error['message'] ?? 'Unknown error'
    ]);
    exit;
}

// Delete the database record only after file deletion succeeds
$stmt = $mysqli->prepare(
    'DELETE FROM files WHERE path = ?'
);

if (!$stmt) {
    echo json_encode([
        'success' => false,
        'error' => 'Physical file deleted, but database deletion failed'
    ]);
    exit;
}

$stmt->bind_param('s', $file_url);

$success = $stmt->execute() && $stmt->affected_rows > 0;

$stmt->close();

if ($success) {
    echo json_encode([
        'success' => true,
        'message' => 'File and database record deleted successfully'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'error' => 'Physical file deleted, but database deletion failed'
    ]);
}
?>
