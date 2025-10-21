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
<?php include '../src/connection.php'; ?>

<body class="position-relative" style="overflow-x: hidden; font-family: 'Poppins', sans-serif;">

    <div class="main min-vh-100 w-100">
        <?php include "./globals/header.php" ?>
        <?php include "./globals/banner.php" ?>


        <!-- background: #ff4C01; #FE904D-->
        <?php $bg = "linear-gradient(to right, #ff4C01, #FE904D)"; ?>
        <div class="row d-flex gs-1 mt-1 justify-content-center align-items-center " style="width: 100%; margin: 0 auto;">
            <div class=" col-lg-12  col-md-12 col-sm-12 d-flex align-items-center justify-start flex-column mx-auto mb-3" style="background:<?php echo $bg; ?>">
                <h1 class=" text-center text-white mt-2 p-2" style="font-weight: bolder; font-size: 4em">ORGANIZED PLANNING APPROACH</h1>
                <p class="text-white">Narrative Presentation</p>
            </div>
            <?php
            $sql = "SELECT * FROM files WHERE area = 'Planning' AND section = 'Narrative Presentation' and department='ce' ORDER BY id DESC";
            $result = $mysqli->query($sql);
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                    $fileName = basename($filePath);
                    $cleanPath = preg_replace('/^\.\.\//', '', $filePath);


                    echo '<div class="col-lg-7 mx-auto mt-3 p-0 border shadow">
                            <div class="col-lg-12 mx-auto my-3 p-0 m-0">
                                <div class="ratio ratio-16x9 p-0 m-0 w-100 h-100">
                                    <video class="w-100 h-100" style="object-fit: cover;" controls loop>
                                        <source src="' . $cleanPath . '" type="video/mp4">
                                       
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                        </div>';
                }
            } else {
                echo '<p class="alert p-1 alert-warning  text-center text-muted" style="font-size: 0.8em;">No video found under Narrative Presentation.</p>';
            }
            ?>

            <div class="mt-3 col-lg-12 col-md-12 col-sm-12 d-flex align-items-center justify-start flex-column mx-auto mb-3" style="background:<?php echo $bg; ?>">
                <h5 class="text-white p-3">Narrative Report</h5>
            </div>
            <?php
            $sql = "SELECT * FROM files WHERE area = 'Planning' AND section = 'Narrative Report' and department='ce' ORDER BY id DESC";
            $result = $mysqli->query($sql);
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                    $fileName = basename($filePath);

                    $cleanPath = preg_replace('/^\.\.\//', '', $filePath);
                    echo '
        <div class="col-lg-7 mx-auto mb-3 mt-3 p-0 row">
            <div class="col-lg-12 mx-auto my-3 p-0 m-0 text-center">
               
                <iframe 
                    src="' . htmlspecialchars($cleanPath) . '#toolbar=0&navpanes=0&scrollbar=0"
                    frameborder="0"
                    style="min-height: 500px; width: 100%; border-radius: 10px;">
                </iframe>
                 <a href="' . htmlspecialchars($cleanPath) . '" 
                   target="_blank" 
                   class="btn btn-sm btn-secondary mb-2">
                   View Fullscreen
                </a>
            </div>
        </div>';
                }
            } else {
                echo '<p class="alert p-1 alert-warning  text-center text-muted" style="font-size: 0.8em;">No report found under Narrative Report.</p>';
            }
            ?>

            <div class=" col-lg-12 col-md-12 col-sm-12 mt-3 mb-5 d-flex align-items-center justify-start flex-column mx-auto" style="background:<?php echo $bg; ?>">
                <h5 class=" text-start text-white mt-2 p-2" style="font-weight: bolder; ">Attachments</h5>
            </div>
            <div class="col-lg-11 mx-auto mb-3">
               

                <?php
                // adjust path as needed

                $sql = "SELECT * FROM files WHERE area = 'Planning' AND section = 'Attachments' and department='ce' ORDER BY id DESC";
                $result = $mysqli->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                        $fileName = basename($filePath);
                        $label = $row['label']; 
                        echo '
                        <div class="col-lg-11 mx-auto">
            <h6 class="text-start text-dark mt-2 mb-1" style="font-weight: bolder; ">'.htmlspecialchars($label).'</h6>
                        </div>

        <div class="col-lg-11 mx-auto mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 hover-container"
            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">

            <a href="../admin/handlers/' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 20px; width: 20px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name" style="font-size: 0.7em;">' . '' . htmlspecialchars($fileName) . '</span>
                </div>
            </a>
        </div>';
                    }
                } else {
                    echo '<p class="alert p-1 alert-warning  text-center text-muted" style="font-size: 0.8em;">No files found </p>';
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

    <script>
        const img = document.getElementById('n_report');

        img.addEventListener('click', () => {
            if (img.requestFullscreen) {
                img.requestFullscreen();
            } else if (img.webkitRequestFullscreen) { // Safari
                img.webkitRequestFullscreen();
            } else if (img.msRequestFullscreen) { // IE11
                img.msRequestFullscreen();
            }
        });
    </script>
    <script>
        function openFullscreen(id) {
            const iframe = document.getElementById(id);
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.webkitRequestFullscreen) { // Chrome, Safari, Opera
                iframe.webkitRequestFullscreen();
            } else if (iframe.msRequestFullscreen) { // IE/Edge
                iframe.msRequestFullscreen();
            }
        }
    </script>


</body>

</html>