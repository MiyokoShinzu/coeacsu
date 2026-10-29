
<?php
session_start();
include '../../src/connection.php';
date_default_timezone_set('Asia/Manila');
$d = date('Y-m-d H:i:s');
$unit = $_SESSION['department'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Physical directory where uploaded files are stored
    $upload_dir = '../../../accre_standalone_folder/ce_uploads/';

    // Public URL saved in the database
    $upload_url = 'https://csucpe.com/accre_standalone_folder/ce_uploads/';

    $file_path = '';
    $upload_success = false;

    $section = isset($_POST['section'])
        ? mysqli_real_escape_string($mysqli, $_POST['section']) : '';

    $department = isset($_POST['department'])
        ? mysqli_real_escape_string($mysqli, $_POST['department']) : '';

    $area = isset($_POST['area'])
        ? mysqli_real_escape_string($mysqli, $_POST['area']) : '';

    if (
        isset($_FILES['file']) &&
        $_FILES['file']['error'] == UPLOAD_ERR_OK
    ) {

        // Generate a safe, unique filename
        $original_name = basename($_FILES['file']['name']);
        $timestamp = time();
        $file_name = $timestamp . '_' . $original_name;

        // Physical server path for uploading
        $target_file = $upload_dir . $file_name;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {

            // Public URL stored in the database
            $file_path = $upload_url . $file_name;
            $upload_success = true;
        }
    }

    if ($upload_success) {

        $sql = "INSERT INTO files (path, section, area, department, datetime_update)
                VALUES ('$file_path', '$section', '$area', '$department', '$d')";

        $result = $mysqli->query($sql);

        if ($result) {
            echo json_encode(['success' => '1']);
        } else {
            echo json_encode([
                'success' => '0',
                'error' => 'Database insert failed'
            ]);
        }
    } else {
        echo json_encode([
            'success' => '0',
            'error' => 'File upload failed'
        ]);
    }
}
?>
