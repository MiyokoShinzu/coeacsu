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
<?php
include '../src/connection.php';

/*
 * PAGE CONFIGURATION
 * Change this value when reusing this page for another department.
 * Examples: 'ce', 'ee', 'me' (use the exact value stored in your database).
 */
$department = 'ce';
$departmentSql = $mysqli->real_escape_string($department);
?>

<body class="position-relative mt-5" style="overflow-x: hidden; font-family: 'Poppins', sans-serif;">

    <div class="main min-vh-100 w-100">
        <?php include "./globals/header.php"; ?>

        <?php
        $bannerTitle = 'Research';
        $bannerSubtitle = 'Research Research';
        $bannerKicker = 'COEA Reasearch';

        $bannerImage = '../assets/ce_faculty.jfif';

        $bannerColor = '#0056B3';
        $bannerTextColor = '#FFFFFF';
        $bannerOverlayColor = '#0056B3';
        $bannerOverlayOpacity = 0.5;

        include './globals/banner.php';
        ?>



        <!-- Narrative Presentation video, using the same video-card format as the CE page -->
        <?php $bg = "linear-gradient(to right, #ff4C01, #FE904D)"; ?>
        <section class="coea-narrative-section container-fluid" aria-labelledby="narrativePresentationTitle">
            <header class="coea-narrative-heading" data-aos="fade-up">
                <span class="narrative-kicker"><i class="bi bi-play-circle me-2" aria-hidden="true"></i>COEA PRESENTATION</span>
                <h2 id="narrativePresentationTitle">Narrative <span>Presentation</span></h2>
                <p>Watch the College of Engineering and Architecture narrative presentation.</p>
            </header>

            <div class="video-stack" id="video-section">
                <div class="row g-4 justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-9 video-card" id="narrative-video-card" data-aos="fade-up">
                        <div class="video-card-heading">
                            <span class="video-card-icon"><i class="bi bi-play-btn-fill" aria-hidden="true"></i></span>
                            <div>
                                <span class="video-kicker">Discover COEA</span>
                                <h2>COEA Narrative Presentation</h2>
                                <p>An overview of the college, its programs, and its commitment to engineering and architecture education.</p>
                            </div>
                        </div>
                        <div class="video-frame-wrap youtube-frame-wrap">
                            <iframe
                                src="https://www.youtube-nocookie.com/embed/-IEsr6XLenc?playsinline=1"
                                title="COEA Narrative Presentation"
                                loading="eager"
                                referrerpolicy="strict-origin-when-cross-origin"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .coea-narrative-section {
                padding: 28px 0 12px;
            }

            .coea-narrative-heading {
                text-align: center;
                padding: 10px 16px 8px;
            }

            .coea-narrative-heading .narrative-kicker {
                display: inline-block;
                color: #ff4c01;
                font-size: .76rem;
                font-weight: 700;
                letter-spacing: .12em;
            }

            .coea-narrative-heading h2 {
                margin: 10px 0;
                color: #202938;
                font-size: clamp(1.7rem, 3vw, 2.35rem);
                font-weight: 800;
            }

            .coea-narrative-heading h2 span {
                color: #ff4c01;
            }

            .coea-narrative-heading p {
                color: #626873;
                margin: 0 auto;
                max-width: 680px;
            }

            .video-stack {
                padding: 12px clamp(12px, 3vw, 36px) 36px;
            }

            .video-card {
                width: 100%;
                padding: clamp(16px, 2vw, 24px);
                border: 1px solid #e5e7eb;
                border-radius: 18px;
                background: #fff;
                box-shadow: 0 12px 34px rgba(0, 0, 0, .06);
                transition: transform .3s ease, box-shadow .3s ease;
            }

            .video-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 18px 42px rgba(0, 0, 0, .09);
            }

            .video-card-heading {
                display: flex;
                align-items: flex-start;
                gap: 14px;
                min-height: 100px;
                margin-bottom: 16px;
            }

            .video-card-icon {
                display: flex;
                flex: 0 0 48px;
                width: 48px;
                height: 48px;
                align-items: center;
                justify-content: center;
                border-radius: 13px;
                background: #ff4c01;
                color: #fff;
                font-size: 1.35rem;
            }

            .video-kicker {
                display: block;
                margin-bottom: 4px;
                color: #ff4c01;
                font-size: .72rem;
                font-weight: 700;
                letter-spacing: .08em;
                text-transform: uppercase;
            }

            .video-card-heading h2 {
                margin: 0 0 6px;
                color: #202938;
                font-size: clamp(1.2rem, 2vw, 1.6rem);
                font-weight: 750;
            }

            .video-card-heading p {
                margin: 0;
                color: #5b616a;
                line-height: 1.65;
                font-size: .92rem;
            }

            .video-frame-wrap {
                position: relative;
                overflow: hidden;
                width: 100%;
                aspect-ratio: 16/9;
                border-radius: 12px;
                background: #111;
            }

            .video-frame-wrap iframe {
                position: absolute;
                inset: 0;
                width: 100%;
                height: 100%;
                border: 0;
            }

            @keyframes coeaNarrativeFadeUp {
                from {
                    opacity: 0;
                    transform: translateY(22px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .coea-narrative-heading:not([data-aos]),
            .video-card:not([data-aos]) {
                animation: coeaNarrativeFadeUp .75s ease both;
            }

            @media(max-width:575.98px) {
                .coea-narrative-section {
                    padding-top: 18px;
                }

                .video-card {
                    border-radius: 14px;
                }

                .video-card-heading {
                    min-height: 0;
                }
            }

            @media(prefers-reduced-motion:reduce) {
                .video-card {
                    transition: none;
                }

                .video-card:hover {
                    transform: none;
                }
            }
        </style>

        <div class="mt-3 col-lg-12 col-md-12 col-sm-12 d-flex align-items-center justify-start flex-column mx-auto mb-3" style="background:<?php echo $bg; ?>">
            <h5 class="text-white p-3">Narrative Report</h5>
        </div>
        <?php
        $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Narrative Report' and department = '$departmentSql' ORDER BY id DESC";
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
            <h5 class=" text-start text-white mt-2" style="font-weight: bolder; ">Attachments</h5>
        </div>
        <div class="col-lg-10 mx-auto mb-3">
            <h5 class=" text-dark mb-3">Administration Support for Research</h5>

            <?php
            // adjust path as needed

            $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Administration Support for Research' and department = '$departmentSql' ORDER BY id DESC";
            $result = $mysqli->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                    $fileName = basename($filePath);

                    echo '
        <div class="col-lg-11 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 hover-container"
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
                echo '<p class="alert p-1 alert-warning  text-center text-muted" style="font-size: 0.8em;">No files found under Research & Administration Support.</p>';
            }
            ?>

        </div>

        <div class="col-lg-10 mx-auto mb-3">
            <h5 class=" text-dark mb-3">Campus and College RDE Agenda</h5>

            <?php

            $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Campus and College RDE Agenda' and department = '$departmentSql' ORDER BY id DESC";
            $result = $mysqli->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                    $fileName = basename($filePath);

                    echo '
                        <div class="col-lg-11 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 hover-container"
                            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">

                <a href="../admin/handlers/' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 20px; width: 20px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name" style="font-size: 0.7em">' . '' . htmlspecialchars($fileName) . '</span>
                </div>
                    </a>
                    </div>';
                }
            } else {
                echo '<p class="alert p-1 alert-warning text-center text-muted " style="font-size: 0.8em;">No files found under Campus and College RDE Agenda.</p>';
            }
            ?>

        </div>

        <div class="col-lg-10 mx-auto mb-3">
            <h5 class=" text-dark mb-3">Intellectual Property Rights</h5>

            <?php
            // adjust path as needed

            $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Copyrights AVP' and department = '$departmentSql' ORDER BY id DESC";
            $result = $mysqli->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                    $fileName = basename($filePath);

                    echo '
                        <div class="col-lg-11 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 hover-container"
                            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
        
                <a href="../admin/handlers/' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 20px; width: 20px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name" style="font-size: 0.7em">' . '' . htmlspecialchars($fileName) . '</span>
                </div>
                    </a>
                    </div>';
                }
            } else {
                echo '<p class="alert p-1 alert-warning  text-center text-muted" style="font-size: 0.8em;">No files found under Copyrights AVP.</p>';
            }
            ?>

        </div>
        <div class="col-lg-10 mx-auto mb-3">
            <h5 class=" text-dark mb-3">Faculty Research Awards</h5>

            <?php
            // adjust path as needed

            $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Faculty Research Awards' and department = '$departmentSql' ORDER BY id DESC";
            $result = $mysqli->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                    $fileName = basename($filePath);

                    echo '
                        <div class="col-lg-11 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 hover-container"
                            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
        
                <a href="../admin/handlers/' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 20px; width: 20px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name" style="font-size: 0.7em">' . '' . htmlspecialchars($fileName) . '</span>
                </div>
                    </a>
                    </div>';
                }
            } else {
                echo '<p class="alert p-1 alert-warning  text-center text-muted" style="font-size: 0.8em;">No files found under Faculty Research Awards.</p>';
            }
            ?>

        </div>
        <div class="col-lg-10 mx-auto mb-3">
            <h5 class=" text-dark mb-3">Student Research Awards</h5>

            <?php
            // adjust path as needed

            $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Student Research Awards' and department = '$departmentSql' ORDER BY id DESC";
            $result = $mysqli->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                    $fileName = basename($filePath);

                    echo '
                        <div class="col-lg-11 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 hover-container"
                            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
        
                <a href="../admin/handlers/' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 20px; width: 20px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name" style="font-size: 0.7em">' . '' . htmlspecialchars($fileName) . '</span>
                </div>
                    </a>
                    </div>';
                }
            } else {
                echo '<p class="alert p-1 alert-warning  text-center text-muted" style="font-size: 0.8em;">No files found under Student Research Awards.</p>';
            }
            ?>

        </div>
        <div class="col-lg-10 mx-auto mb-3">
            <h5 class=" text-dark mb-3">Special Order On Institutionally Funded Research</h5>

            <?php
            // adjust path as needed

            $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Special Order On Institutionally Funded Research' and department = '$departmentSql' ORDER BY id DESC";
            $result = $mysqli->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                    $fileName = basename($filePath);

                    echo '
                        <div class="col-lg-11 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 hover-container"
                            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
        
                <a href="../admin/handlers/' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 20px; width: 20px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name" style="font-size: 0.7em">' . '' . htmlspecialchars($fileName) . '</span>
                </div>
                    </a>
                    </div>';
                }
            } else {
                echo '<p class="alert p-1 alert-warning  text-center text-muted" style="font-size: 0.8em;">No files found under Special Order On Institutionally Funded Research.</p>';
            }
            ?>

        </div>
        <div class="col-lg-10 mx-auto mb-3">
            <h5 class=" text-dark mb-3">Others</h5>

            <?php
            // adjust path as needed

            $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Others' and department = '$departmentSql' ORDER BY id DESC";
            $result = $mysqli->query($sql);



            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                    $fileName = basename($filePath);

                    echo '
                        <div class="col-lg-11 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-1 hover-container"
                            style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
        
                <a href="../admin/handlers/' . htmlspecialchars($filePath) . '" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                <div class="drive-preview d-flex align-items-center">
                    <img src="../assets/pdf.svg" style="height: 20px; width: 20px; margin-right: 10px;" alt="Drive Icon">
                    <span class="file-name" style="font-size: 0.7em">' . '' . htmlspecialchars($fileName) . '</span>
                </div>
                    </a>
                    </div>';
                }
            } else {
                echo '<p class="alert p-1 alert-warning  text-center text-muted" style="font-size: 0.8em;">No files found under Others.</p>';
            }
            $mysqli->close();
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
        if (img) {
            img.addEventListener('click', () => {
                if (img.requestFullscreen) img.requestFullscreen();
                else if (img.webkitRequestFullscreen) img.webkitRequestFullscreen();
                else if (img.msRequestFullscreen) img.msRequestFullscreen();
            });
        }
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


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        (function() {
            function initNarrativeAnimations() {
                document.querySelectorAll('.coea-narrative-heading, #narrative-video-card').forEach(function(el) {
                    if (!el.hasAttribute('data-aos')) el.setAttribute('data-aos', 'fade-up');
                    el.setAttribute('data-aos-duration', '750');
                });
                if (window.AOS && typeof window.AOS.init === 'function') {
                    window.AOS.init({
                        disable: false,
                        duration: 750,
                        easing: 'ease-out-cubic',
                        once: true,
                        offset: 35,
                        mirror: false
                    });
                    window.addEventListener('load', function() {
                        if (window.AOS && typeof window.AOS.refreshHard === 'function') window.AOS.refreshHard();
                    }, {
                        once: true
                    });
                    window.addEventListener('resize', function() {
                        if (window.AOS && typeof window.AOS.refresh === 'function') window.AOS.refresh();
                    }, {
                        passive: true
                    });
                } else {
                    document.querySelectorAll('[data-aos]').forEach(function(el) {
                        el.style.opacity = '1';
                        el.style.transform = 'none';
                        el.style.animation = 'coeaNarrativeFadeUp .75s ease both';
                    });
                }
            }
            if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', initNarrativeAnimations);
            else initNarrativeAnimations();
        })();
    </script>

</body>

</html>