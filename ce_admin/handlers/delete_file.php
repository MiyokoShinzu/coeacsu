
<?php
header('Content-Type: application/json');

include '../../src/connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    if (!isset($_GET['url']) || empty($_GET['url'])) {
        echo json_encode([
            'success' => false,
            'error' => 'URL parameter missing'
        ]);
        exit;
    }

    $file_url = $_GET['url'];

    // Validate the URL and restrict deletion to your website
    $parsed_url = parse_url($file_url);

    if (
        !$parsed_url ||
        strtolower($parsed_url['host'] ?? '') !== 'csucpe.com' ||
        ($parsed_url['scheme'] ?? '') !== 'https' ||
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

    // Get the filename from the URL
    $filename = basename(rawurldecode($parsed_url['path']));

    if (
        $filename === '' ||
        $filename === '.' ||
        $filename === '..' ||
        strpos($filename, '\\') !== false
    ) {
        echo json_encode([
            'success' => false,
            'error' => 'Invalid filename'
        ]);
        exit;
    }

    // Physical folder on Hostinger
    $upload_dir = rtrim($_SERVER['DOCUMENT_ROOT'], '/\\')
        . '/accre_standalone_folder/ee_uploads/';

    $real_dir = realpath($upload_dir);

    if ($real_dir === false) {
        echo json_encode([
            'success' => false,
            'error' => 'Upload directory not found'
        ]);
        exit;
    }

    // Resolve the physical file path
    $physical_path = realpath(
        $real_dir . DIRECTORY_SEPARATOR . $filename
    );

    // Ensure the file belongs directly to the upload directory
    if (
        $physical_path === false ||
        dirname($physical_path) !== $real_dir ||
        !is_file($physical_path)
    ) {
        echo json_encode([
            'success' => false,
            'error' => 'File not found'
        ]);
        exit;
    }

    // Check that the URL exists in the database
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
            'error' => 'File record not found'
        ]);
        exit;
    }

    $stmt->close();

    // Delete the actual file from Hostinger
    if (!unlink($physical_path)) {
        echo json_encode([
            'success' => false,
            'error' => 'Failed to delete physical file'
        ]);
        exit;
    }

    // Delete the database record
    $stmt = $mysqli->prepare(
        'DELETE FROM files WHERE path = ?'
    );

    if (!$stmt) {
        echo json_encode([
            'success' => false,
            'error' => 'File deleted, but database deletion failed'
        ]);
        exit;
    }

    $stmt->bind_param('s', $file_url);
    $result = $stmt->execute();
    $stmt->close();

    if ($result) {
        echo json_encode([
            'success' => true,
            'message' => 'File deleted successfully'
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'error' => 'File deleted, but database deletion failed'
        ]);
    }
} else {
    echo json_encode([
        'success' => false,
        'error' => 'Invalid request method'
    ]);
}
?>
