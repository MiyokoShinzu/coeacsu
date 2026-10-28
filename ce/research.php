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
        $bannerSubtitle = 'Advancing Research Excellence Through Innovation, Collaboration, and Academic Development.';
        $bannerKicker = 'Bachelor of Science in Civil Engineering';

        $bannerImage = '../assets/ce_faculty.jfif';

        $bannerColor = '#ff4C01';
        $bannerTextColor = '#FFFFFF';
        $bannerOverlayColor = '#ff4C01';
        $bannerOverlayOpacity = 0.2;

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

        <section class="coea-document-heading" data-aos="fade-up" aria-labelledby="narrativeReportTitle">
            <span class="document-kicker"><i class="bi bi-file-earmark-pdf-fill me-2" aria-hidden="true"></i>OFFICIAL DOCUMENT</span>
            <h2 id="narrativeReportTitle">Narrative <span>Report</span></h2>
            <p>Read or download the College of Engineering and Architecture narrative report.</p>
        </section>
        <style>
            /* Match the Narrative Presentation section's typography, spacing, and orange accents. */
            .coea-document-heading {
                text-align: center;
                padding: 18px 16px 8px;
                margin: 0 auto;
            }

            .coea-document-heading .document-kicker {
                display: inline-block;
                color: #ff4c01;
                font-size: .76rem;
                font-weight: 700;
                letter-spacing: .12em;
            }

            .coea-document-heading h2 {
                margin: 10px 0;
                color: #202938;
                font-size: clamp(1.7rem, 3vw, 2.35rem);
                font-weight: 800;
            }

            .coea-document-heading h2 span {
                color: #ff4c01;
            }

            .coea-document-heading p {
                max-width: 680px;
                margin: 0 auto;
                color: #626873;
            }

            .attachments-heading {
                margin-top: 18px;
            }

            .coea-attachments-heading {
                text-align: center;
                padding: 22px 16px 10px;
                margin: 12px auto 18px;
            }

            .coea-attachments-heading .attachments-kicker {
                display: inline-block;
                color: #ff4c01;
                font-size: .76rem;
                font-weight: 700;
                letter-spacing: .12em;
            }

            .coea-attachments-heading h2 {
                margin: 10px 0;
                color: #202938;
                font-size: clamp(1.7rem, 3vw, 2.35rem);
                font-weight: 800;
            }

            .coea-attachments-heading h2 span {
                color: #ff4c01;
            }

            .coea-attachments-heading p {
                max-width: 680px;
                margin: 0 auto;
                color: #626873;
            }

            .attachment-group {
                padding: 8px clamp(14px, 2.5vw, 28px) 18px;
                border: 1px solid #e5e7eb;
                border-radius: 18px;
                background: #fff;
                box-shadow: 0 12px 34px rgba(0, 0, 0, .045);
            }

            .attachment-group>h5 {
                display: flex;
                align-items: center;
                gap: 10px;
                padding-bottom: 12px;
                border-bottom: 1px solid #f0e5df;
            }

            .attachment-group>h5::before {
                content: "";
                display: inline-block;
                flex: 0 0 4px;
                width: 4px;
                height: 25px;
                border-radius: 99px;
                background: #ff4c01;
            }

            .narrative-report-area {
                width: min(1180px, calc(100% - 32px));
            }

            .narrative-report-card {
                border-color: #e5e7eb;
                border-radius: 18px;
                box-shadow: 0 12px 34px rgba(0, 0, 0, .06);
                transition: transform .3s ease, box-shadow .3s ease;
            }

            .narrative-report-card:hover {
                transform: translateY(-3px);
                box-shadow: 0 18px 42px rgba(0, 0, 0, .09);
            }

            .narrative-report-toolbar {
                background: linear-gradient(115deg, #fff7f2, #fff 72%);
            }

            .narrative-report-viewer {
                background: #f4f5f7;
            }

            .narrative-report-hint {
                background: #fff;
            }

            /* Keep PDF attachment cards in one clean, responsive column. */
            .col-lg-10.mx-auto.mb-3:has(> h5) {
                display: grid;
                grid-template-columns: minmax(0, 1fr);
                align-items: stretch;
                column-gap: 0;
                row-gap: 0;
            }

            .col-lg-10.mx-auto.mb-3>h5 {
                grid-column: 1 / -1;
                margin: 22px 0 14px !important;
                color: #202938 !important;
                font-size: 1.08rem;
                font-weight: 750;
            }

            .col-lg-10.mx-auto.mb-3>.alert {
                grid-column: 1 / -1;
            }

            .hover-container {
                width: 100% !important;
                min-width: 0;
                min-height: 66px;
                margin: 0 0 12px !important;
                padding: 13px 16px !important;
                border: 1px solid #e5e7eb !important;
                border-radius: 14px !important;
                background: #fff !important;
                box-shadow: 0 8px 24px rgba(0, 0, 0, .045) !important;
                text-align: left !important;
                transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
            }

            .hover-container:hover {
                transform: translateY(-3px);
                border-color: #ffb18f !important;
                box-shadow: 0 14px 30px rgba(241, 90, 36, .10) !important;
            }

            .hover-container>a {
                display: block;
                color: #202938 !important;
            }

            .hover-container .drive-preview {
                gap: 12px;
                min-width: 0;
            }

            .hover-container .drive-preview img {
                flex: 0 0 38px;
                width: 38px !important;
                height: 38px !important;
                margin-right: 0 !important;
                padding: 8px;
                border-radius: 11px;
                background: #fff0e8;
                object-fit: contain;
            }

            .hover-container .file-name {
                color: #303947;
                font-size: .88rem !important;
                font-weight: 650;
                overflow-wrap: anywhere;
                line-height: 1.5;
            }

            .hover-container .drive-preview::after {
                content: "Open file  ↗";
                flex: 0 0 auto;
                margin-left: auto;
                color: #f15a24;
                font-size: .78rem;
                font-weight: 700;
            }

            @media (max-width: 640px) {

                .coea-document-heading,
                .coea-attachments-heading {
                    padding: 16px 14px 6px;
                }

                .attachment-group {
                    padding: 8px 12px 14px;
                    border-radius: 14px;
                }

                .narrative-report-area {
                    width: calc(100% - 20px);
                }

                .hover-container {
                    padding: 12px !important;
                }

                .hover-container .drive-preview::after {
                    content: "↗";
                }
            }

            @media (prefers-reduced-motion: reduce) {

                .narrative-report-card,
                .hover-container {
                    transition: none;
                }

                .narrative-report-card:hover,
                .hover-container:hover {
                    transform: none;
                }
            }
        </style>

        <style>
            /* Narrative report PDF viewer */
            .narrative-report-area {
                width: min(1180px, calc(100% - 32px));
                margin: 28px auto 48px;
            }

            .narrative-report-card {
                overflow: hidden;
                border: 1px solid #e7eaf0;
                border-radius: 20px;
                background: #fff;
                box-shadow: 0 16px 45px rgba(25, 39, 58, .10);
            }

            .narrative-report-toolbar {
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-wrap: wrap;
                gap: 16px;
                padding: 18px 22px;
                background: linear-gradient(115deg, #fff7f2, #fff 72%);
                border-bottom: 1px solid #eceff3;
            }

            .narrative-report-fileinfo {
                display: flex;
                align-items: center;
                gap: 13px;
                min-width: 0;
            }

            .narrative-report-pdficon {
                display: grid;
                place-items: center;
                flex: 0 0 46px;
                width: 46px;
                height: 46px;
                border-radius: 14px;
                background: #fff0e8;
                color: #f15a24;
                font-size: 1.45rem;
            }

            .narrative-report-fileinfo h3 {
                margin: 0 0 4px;
                color: #202938;
                font-size: 1rem;
                font-weight: 750;
                overflow-wrap: anywhere;
            }

            .narrative-report-fileinfo p {
                margin: 0;
                color: #737b88;
                font-size: .8rem;
            }

            .narrative-report-actions {
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                gap: 8px;
            }

            .narrative-report-actions a,
            .narrative-report-actions button {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 7px;
                min-height: 39px;
                padding: 8px 13px;
                border: 1px solid #e0e4ea;
                border-radius: 10px;
                background: #fff;
                color: #303947;
                font-size: .82rem;
                font-weight: 650;
                text-decoration: none;
                cursor: pointer;
                transition: background .2s ease, border-color .2s ease, transform .2s ease;
            }

            .narrative-report-actions a:hover,
            .narrative-report-actions button:hover {
                border-color: #ff7b43;
                background: #fff6f1;
                color: #d94b13;
                transform: translateY(-1px);
            }

            .narrative-report-actions .report-open-btn {
                border-color: #f15a24;
                background: #f15a24;
                color: #fff;
            }

            .narrative-report-actions .report-open-btn:hover {
                background: #d94b13;
                color: #fff;
            }

            .narrative-report-viewer {
                position: relative;
                padding: 14px;
                background: #edf0f4;
            }

            .narrative-report-viewer iframe {
                display: block;
                width: 100%;
                height: clamp(560px, 78vh, 980px);
                border: 0;
                border-radius: 12px;
                background: #fff;
            }

            .narrative-report-hint {
                display: flex;
                align-items: center;
                gap: 8px;
                padding: 11px 18px;
                border-top: 1px solid #e9edf2;
                color: #6d7582;
                font-size: .78rem;
            }

            .narrative-report-hint i {
                color: #f15a24;
            }

            @media (max-width: 640px) {
                .narrative-report-area {
                    width: calc(100% - 20px);
                    margin: 20px auto 34px;
                }

                .narrative-report-card {
                    border-radius: 15px;
                }

                .narrative-report-toolbar {
                    padding: 15px;
                }

                .narrative-report-actions {
                    width: 100%;
                }

                .narrative-report-actions a,
                .narrative-report-actions button {
                    flex: 1 1 auto;
                    padding: 8px 10px;
                }

                .narrative-report-viewer {
                    padding: 7px;
                }

                .narrative-report-viewer iframe {
                    height: 72vh;
                    min-height: 460px;
                    border-radius: 9px;
                }
            }

            @media (prefers-reduced-motion: reduce) {

                .narrative-report-actions a,
                .narrative-report-actions button {
                    transition: none;
                }
            }
        </style>

        <?php
        $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Narrative Report' AND department = '$departmentSql' ORDER BY id DESC";
        $result = $mysqli->query($sql);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $filePath = $row['path'];
                $fileName = pathinfo(preg_replace('/^\d+_/', '', basename($filePath)), PATHINFO_FILENAME);
                $cleanPath = preg_replace('/^\.\.\//', '', $filePath);
                $pdfUrl = htmlspecialchars($cleanPath, ENT_QUOTES, 'UTF-8');
                $viewerId = 'narrative-pdf-' . (int)$row['id'];
                echo '
                <section class="narrative-report-area" aria-label="Narrative report PDF">
                    <div class="narrative-report-card" data-aos="fade-up">
                        <div class="narrative-report-toolbar">
                            <div class="narrative-report-fileinfo">
                                <span class="narrative-report-pdficon"><i class="bi bi-file-earmark-pdf-fill" aria-hidden="true"></i></span>
                                <div>
                                    <h3>' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '</h3>
                                    <p>Official narrative report <span aria-hidden="true">·</span> PDF document</p>
                                </div>
                            </div>
                            <div class="narrative-report-actions">
                                <button type="button" onclick="toggleNarrativePdfFullscreen(\'' . $viewerId . '\')" aria-label="Toggle PDF viewer fullscreen">
                                    <i class="bi bi-arrows-fullscreen" aria-hidden="true"></i> Fullscreen
                                </button>
                                <a href="' . $pdfUrl . '" download>
                                    <i class="bi bi-download" aria-hidden="true"></i> Download
                                </a>
                                <a class="report-open-btn" href="' . $pdfUrl . '" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i> Open PDF
                                </a>
                            </div>
                        </div>
                        <div class="narrative-report-viewer" id="' . $viewerId . '">
                            <iframe
                                src="' . $pdfUrl . '#toolbar=1&navpanes=0&view=FitH"
                                title="PDF viewer: ' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '"
                                loading="lazy"
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="narrative-report-hint">
                            <i class="bi bi-info-circle-fill" aria-hidden="true"></i>
                            If the preview does not load in your browser, use Open PDF to view it in a new tab.
                        </div>
                    </div>
                </section>';
            }
        } else {
            echo '<div class="narrative-report-area"><p class="alert alert-warning text-center mb-0">No report found under Narrative Report.</p></div>';
        }
        ?>

        <section class="coea-attachments-heading" data-aos="fade-up" aria-labelledby="attachmentsTitle">
            <span class="attachments-kicker"><i class="bi bi-folder2-open me-2" aria-hidden="true"></i>SUPPORTING DOCUMENTS</span>
            <h2 id="attachmentsTitle">Research <span>Attachments</span></h2>
            <p>Browse supporting documents, research awards, agendas, and intellectual property records.</p>
        </section>
        <div class="col-lg-10 mx-auto mb-3">
            <h5 class=" text-dark mb-3">Administration Support for Research</h5>

            <?php
            // adjust path as needed

            $sql = "SELECT * FROM files WHERE area = 'Research' AND section = 'Administration Support for Research' and department = '$departmentSql' ORDER BY id DESC";
            $result = $mysqli->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $filePath = $row['path']; // assuming this contains relative path like: uploads/ce/basic.pdf
                    $fileName = pathinfo(preg_replace('/^\d+_/', '', basename($filePath)), PATHINFO_FILENAME);

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
                    $fileName = pathinfo(preg_replace('/^\d+_/', '', basename($filePath)), PATHINFO_FILENAME);

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
                    $fileName = pathinfo(preg_replace('/^\d+_/', '', basename($filePath)), PATHINFO_FILENAME);

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
                    $fileName = pathinfo(preg_replace('/^\d+_/', '', basename($filePath)), PATHINFO_FILENAME);

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
                    $fileName = pathinfo(preg_replace('/^\d+_/', '', basename($filePath)), PATHINFO_FILENAME);

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
                    $fileName = pathinfo(preg_replace('/^\d+_/', '', basename($filePath)), PATHINFO_FILENAME);

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
                    $fileName = pathinfo(preg_replace('/^\d+_/', '', basename($filePath)), PATHINFO_FILENAME);

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
        function toggleNarrativePdfFullscreen(id) {
            const viewer = document.getElementById(id);
            if (!viewer) return;
            if (document.fullscreenElement) {
                document.exitFullscreen?.();
            } else if (viewer.requestFullscreen) {
                viewer.requestFullscreen();
            } else if (viewer.webkitRequestFullscreen) {
                viewer.webkitRequestFullscreen();
            }
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