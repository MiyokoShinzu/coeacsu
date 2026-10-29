
<?php
session_start();
header('Content-Type: application/json');

require_once __DIR__ . '/../../src/connection.php';

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    echo json_encode([
        'success' => false,
        'error' => 'Invalid request method'
    ]);
    exit;
}

if (empty($_GET['url'])) {
    echo json_encode([
        'success' => false,
        'error' => 'File URL is missing'
    ]);
    exit;
}

$file_url = $_GET['url'];

// Validate the URL
$parsed_url = parse_url($file_url);

if (
    !$parsed_url ||
    strtolower($parsed_url['host'] ?? '') !== 'csucpe.com' ||
    strtolower($parsed_url['scheme'] ?? '') !== 'https' ||
    strpos(
        $parsed_url['path'] ?? '',
        '/accre_standalone_folder/ee_uploads/'
    ) !== 0
) {
    echo json_encode([
        'success' => false,
        'error' => 'Invalid file URL'
    ]);
    exit;
}

// Get filename
$filename = basename(rawurldecode($parsed_url['path']));

if ($filename === '' || $filename === '.' || $filename === '..') {
    echo json_encode([
        'success' => false,
        'error' => 'Invalid filename'
    ]);
    exit;
}

// Physical upload directory
$upload_dir = __DIR__
    . '/../../../accre_standalone_folder/ee_uploads/';

$real_dir = realpath($upload_dir);

if ($real_dir === false) {
    echo json_encode([
        'success' => false,
        'error' => 'Upload directory not found',
        'path_checked' => $upload_dir
    ]);
    exit;
}

$physical_path = realpath(
    $real_dir . DIRECTORY_SEPARATOR . $filename
);

if (
    $physical_path === false ||
    dirname($physical_path) !== $real_dir ||
    !is_file($physical_path)
) {
    echo json_encode([
        'success' => false,
        'error' => 'Physical file not found'
    ]);
    exit;
}

// Verify that the record exists
$stmt = $mysqli->prepare(
    'SELECT path FROM files WHERE path = ?'
);
$stmt->bind_param('s', $file_url);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    $stmt->close();

    echo json_encode([
        'success' => false,
        'error' => 'Database record not found'
    ]);
    exit;
}
$stmt->close();

// Delete the physical file
if (!unlink($physical_path)) {
    echo json_encode([
        'success' => false,
        'error' => 'Failed to delete physical file'
    ]);
    exit;
}

// Delete the matching database record
$stmt = $mysqli->prepare(
    'DELETE FROM files WHERE path = ?'
);
$stmt->bind_param('s', $file_url);

if (!$stmt->execute()) {
    echo json_encode([
        'success' => false,
        'error' => 'File deleted, but database deletion failed'
    ]);
    $stmt->close();
    exit;
}

$deleted_rows = $stmt->affected_rows;
$stmt->close();

if ($deleted_rows > 0) {
    echo json_encode([
        'success' => true,
        'message' => 'File and database record deleted successfully'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'error' => 'Physical file deleted, but no database record was removed'
    ]);
}
?>
