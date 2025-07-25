<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COEA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href=".././globals/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="position-relative" style="overflow-x: hidden; font-family: 'Poppins', sans-serif;">

    <div class="main min-vh-100 ">
        <?php include "./globals/header.php" ?>
        <?php include "./globals/banner.php" ?>


        <!-- background: #ff4C01; #FE904D-->
        <div class="row d-flex gs-1 justify-content-center align-items-center">
            <div class=" col-lg-12 col-md-12 col-sm-12 d-flex align-items-center justify-start flex-column mx-auto" style="background:rgb(174,14,14)">
                <h3 class=" text-start text-white mt-2" style="font-weight: bolder; ">Research</h3>

                <p class="text-white">Narrative Report</p>
            </div>
            <div class="col-lg-6 mx-auto mt-3">
                <div class="ratio ratio-16x9">
                    <iframe
                        src="https://www.youtube.com/embed/U6fC4Ij608A?si=rRFliXd3VlQqzL6l"
                        title="YouTube video"
                        allowfullscreen>
                    </iframe>
                </div>

            </div>
            <div class=" col-lg-12 col-md-12 col-sm-12 mt-3 mb-3 d-flex align-items-center justify-start flex-column mx-auto" style="background:rgb(174,14,14)">
                <h3 class=" text-start text-white mt-2" style="font-weight: bolder; ">Attachments</h3>
            </div>
            <div class="col-lg-11 mx-auto">
                <h5 class="ms-5 text-dark mb-3">Administration Support for Research</h5>

                <?php
                include '../src/connection.php'; // adjust path as needed

                $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Administration Support for Research' and department='ce' ORDER BY id DESC";
                $result = $mysqli->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                        $fileName = basename($filePath);
                        echo '
        <div class="col-lg-8 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 mx-auto hover-container"
            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">

            <a href="../' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 30px; width: 30px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name">' . htmlspecialchars($fileName) . '</span>
                </div>
            </a>
        </div>';
                    }
                } else {
                    echo '<p class="text-center text-muted">No files found under Research & Administration Support.</p>';
                }
                ?>

            </div>





            <div class="col-lg-11 mx-auto">
                <h5 class="ms-5 text-dark mb-3">Campus and College RDE Agenda</h5>

                <?php
                include '../src/connection.php'; // adjust path as needed

                $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Campus and College RDE Agenda' and department= 'ce' ORDER BY id DESC";
                $result = $mysqli->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                        $fileName = basename($filePath);
                        echo '
                        <div class="col-lg-8 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 mx-auto hover-container"
                            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">

                <a href="../' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 30px; width: 30px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name">' . htmlspecialchars($fileName) . '</span>
                </div>
                    </a>
                    </div>';
                    }
                } else {
                    echo '<p class="text-center text-muted">No files found under Campus and College RDE Agenda.</p>';
                }
                ?>

            </div>
            
            <div class="col-lg-11 mx-auto">
                <h5 class="ms-5 text-dark mb-3">Copyrights AVP</h5>
        
                <?php
                include '../src/connection.php'; // adjust path as needed
        
                $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Copyrights AVP' and department= 'ce' ORDER BY id DESC";
                $result = $mysqli->query($sql);
        
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                        $fileName = basename($filePath);
                        echo '
                        <div class="col-lg-8 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 mx-auto hover-container"
                            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
        
                <a href="../' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 30px; width: 30px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name">' . htmlspecialchars($fileName) . '</span>
                </div>
                    </a>
                    </div>';
                    }
                } else {
                    echo '<p class="text-center text-muted">No files found under Copyrights AVP.</p>';
                }
                ?>
        
            </div>
            <div class="col-lg-11 mx-auto">
                <h5 class="ms-5 text-dark mb-3">Faculty Research Awards</h5>
        
                <?php
                include '../src/connection.php'; // adjust path as needed
        
                $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Faculty Research Awards' and department= 'ce' ORDER BY id DESC";
                $result = $mysqli->query($sql);
        
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                        $fileName = basename($filePath);
                        echo '
                        <div class="col-lg-8 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 mx-auto hover-container"
                            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
        
                <a href="../' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 30px; width: 30px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name">' . htmlspecialchars($fileName) . '</span>
                </div>
                    </a>
                    </div>';
                    }
                } else {
                    echo '<p class="text-center text-muted">No files found under Faculty Research Awards.</p>';
                }
                ?>
        
            </div>
            <div class="col-lg-11 mx-auto">
                <h5 class="ms-5 text-dark mb-3">Student Research Awards</h5>
        
                <?php
                include '../src/connection.php'; // adjust path as needed
        
                $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Student Research Awards' and department= 'ce' ORDER BY id DESC";
                $result = $mysqli->query($sql);
        
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                        $fileName = basename($filePath);
                        echo '
                        <div class="col-lg-8 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 mx-auto hover-container"
                            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
        
                <a href="../' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 30px; width: 30px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name">' . htmlspecialchars($fileName) . '</span>
                </div>
                    </a>
                    </div>';
                    }
                } else {
                    echo '<p class="text-center text-muted">No files found under Student Research Awards.</p>';
                }
                ?>
        
            </div>
            <div class="col-lg-11 mx-auto">
                <h5 class="ms-5 text-dark mb-3">Special Order On Institutionally Funded Research</h5>
        
                <?php
                include '../src/connection.php'; // adjust path as needed
        
                $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Special Order On Institutionally Funded Research' and department= 'ce' ORDER BY id DESC";
                $result = $mysqli->query($sql);
        
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                        $fileName = basename($filePath);
                        echo '
                        <div class="col-lg-8 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 mx-auto hover-container"
                            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
        
                <a href="../' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 30px; width: 30px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name">' . htmlspecialchars($fileName) . '</span>
                </div>
                    </a>
                    </div>';
                    }
                } else {
                    echo '<p class="text-center text-muted">No files found under Special Order On Institutionally Funded Research.</p>';
                }
                ?>
        
            </div>
            <div class="col-lg-11 mx-auto">
                <h5 class="ms-5 text-dark mb-3">Others</h5>
        
                <?php
                include '../src/connection.php'; // adjust path as needed
        
                $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Others' and department= 'ce' ORDER BY id DESC";
                $result = $mysqli->query($sql);
        
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                        $fileName = basename($filePath);
                        echo '
                        <div class="col-lg-8 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 mx-auto hover-container"
                            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
        
                <a href="../' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 30px; width: 30px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name">' . htmlspecialchars($fileName) . '</span>
                </div>
                    </a>
                    </div>';
                    }
                } else {
                    echo '<p class="text-center text-muted">No files found under Others.</p>';
                }
                ?>
        
            </div>


            

        </div>
    </div>
    </div>



    <?php include "../globals/footer.php"; ?>

    <style>
        .image-container {
            position: relative;
            overflow: hidden;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(5deg, rgba(254, 145, 77, 0.67) 1px, rgba(0, 0, 0, 0.7));

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease, visibility 0.5s ease;
            z-index: 2;
        }

        .image-container:hover .overlay {
            opacity: 1;
            visibility: visible;
        }

        .image {
            width: 100%;
            height: 100%;
            transition: filter 0.5s ease;
        }

        .image-container:hover .image {
            filter: blur(4px);
        }
    </style>

</body>

</html>