<?php
include '../src/connection.php';
$bannerTitle = 'PLANNING';
$bannerSubtitle = 'Explore planning presentations, narrative reports, and supporting documents for COEA.';
$bannerKicker = 'Bachelor of Science in Civil Engineering';
$bannerImage = '../assets/ce_faculty.jfif';
$bannerColor = '#ff4c01';
$bannerTextColor = '#FFFFFF';
$bannerOverlayColor = '#ff4c01';
$bannerOverlayOpacity = 0.2;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning | COEA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href=".././globals/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="position-relative" style="overflow-x:hidden;font-family:'Poppins',sans-serif;">
    <div class="main min-vh-100 w-100">
        <?php include "./globals/header.php"; ?>
        <?php include "./globals/banner.php"; ?>
        <main>
            <section class="coea-section" aria-labelledby="planningVideoTitle">
                <header class="section-heading" data-aos="fade-up">
                    <span class="section-kicker"><i class="bi bi-calendar2-check-fill me-2" aria-hidden="true"></i>INSTITUTIONAL DEVELOPMENT</span>
                    <h2 id="planningVideoTitle">Planning <span>Overview</span></h2>
                    <p>Watch the planning narrative presentation and explore reports and supporting documents for COEA.</p>
                </header>
                <div class="video-grid video-grid-single">
                    <article class="video-card" data-aos="fade-up">
                        <div class="video-card-heading">
                            <span class="video-icon"><i class="bi bi-play-circle-fill" aria-hidden="true"></i></span>
                            <div><span class="video-kicker">Narrative Presentation</span>
                                <h3>Planning</h3>
                                <p>A presentation highlighting planning initiatives and supporting institutional documents.</p>
                            </div>
                        </div>
                        <div class="video-frame-wrap">
                            <iframe src="https://www.youtube-nocookie.com/embed/oDFCNe5_dPo?playsinline=1" title="Planning Narrative Presentation" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </article>
                </div>
            </section>
            <section class="section-heading document-heading" data-aos="fade-up" aria-labelledby="reportTitle">
                <span class="section-kicker"><i class="bi bi-file-earmark-pdf-fill me-2" aria-hidden="true"></i>OFFICIAL DOCUMENT</span>
                <h2 id="reportTitle">Narrative <span>Report</span></h2>
                <p>Read, open, or download the planning narrative report.</p>
            </section>
            <?php
            $sql = "SELECT * FROM files WHERE area = 'Planning' AND section = 'Narrative Report' AND department = 'ce' ORDER BY id DESC";
            $result = $mysqli->query($sql);
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $filePath = (string)$row['path'];
                    $fileName = pathinfo(preg_replace('/^\d+_/', '', basename($filePath)), PATHINFO_FILENAME);
                    $cleanPath = preg_replace('/^(\.\.\/)+/', '', $filePath);
                    $pdfUrl = htmlspecialchars('../admin/handlers/' . ltrim($cleanPath, '/'), ENT_QUOTES, 'UTF-8');
                    $viewerId = 'planning-report-' . (int)$row['id'];
                    echo '<section class="document-area" aria-label="Planning narrative report PDF"><div class="document-card" data-aos="fade-up">
        <div class="document-toolbar"><div class="document-fileinfo"><span class="pdf-icon"><i class="bi bi-file-earmark-pdf-fill" aria-hidden="true"></i></span><div><h3>' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '</h3><p>Planning report · PDF document</p></div></div>
        <div class="document-actions"><button type="button" onclick="togglePdfFullscreen(&quot;' . $viewerId . '&quot;)"><i class="bi bi-arrows-fullscreen" aria-hidden="true"></i> Fullscreen</button><a href="' . $pdfUrl . '" download><i class="bi bi-download" aria-hidden="true"></i> Download</a><a class="primary-action" href="' . $pdfUrl . '" target="_blank" rel="noopener noreferrer"><i class="bi bi-box-arrow-up-right" aria-hidden="true"></i> Open PDF</a></div></div>
        <div class="document-viewer" id="' . $viewerId . '"><iframe src="' . $pdfUrl . '#toolbar=1&navpanes=0&view=FitH" title="PDF viewer: ' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '" loading="lazy" allowfullscreen></iframe></div>
        <div class="document-hint"><i class="bi bi-info-circle-fill" aria-hidden="true"></i> If the preview does not load, choose Open PDF to view it in a new tab.</div></div></section>';
                }
            } else {
                echo '<div class="document-area"><p class="alert alert-warning text-center">No report found under Narrative Report.</p></div>';
            }
            ?>
            <section class="section-heading document-heading" data-aos="fade-up" aria-labelledby="attachmentsTitle">
                <span class="section-kicker"><i class="bi bi-folder2-open me-2" aria-hidden="true"></i>SUPPORTING DOCUMENTS</span>
                <h2 id="attachmentsTitle">Planning <span>Attachments</span></h2>
                <p>Browse planning documents organized by institutional level and best practices.</p>
            </section>
            <?php
            $attachmentSections = [
                'University Level' => 'University Level',
                'Campus Level' => 'Campus Level',
                'College Level' => 'College Level',
                'Department Level' => 'Department Level',
                'Best Practices' => 'Best Practices'
            ];
            foreach ($attachmentSections as $label => $displayTitle) {
                echo '<section class="attachment-section" aria-label="' . htmlspecialchars($displayTitle, ENT_QUOTES, 'UTF-8') . '"><div class="attachment-section-heading"><h3>' . htmlspecialchars($displayTitle, ENT_QUOTES, 'UTF-8') . '</h3></div><div class="attachments-list">';
                $safeLabel = $mysqli->real_escape_string($label);
                $sql = "SELECT * FROM files WHERE area = 'Planning' AND section = 'Attachments' AND department = 'ce' AND label = '$safeLabel' ORDER BY id ASC";
                $result = $mysqli->query($sql);
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $filePath = (string)$row['path'];
                        $fileName = pathinfo(preg_replace('/^\d+_/', '', basename($filePath)), PATHINFO_FILENAME);
                        $attachmentPath = ltrim(preg_replace('/^(\.\.\/)+/', '', $filePath), '/');
                        $attachmentUrl = '../admin/handlers/' . $attachmentPath;
                        echo '<div class="attachment-item" data-aos="fade-up"><a href="' . htmlspecialchars($attachmentUrl, ENT_QUOTES, 'UTF-8') . '" target="_blank" rel="noopener noreferrer" class="attachment-link"><span class="attachment-icon"><i class="bi bi-file-earmark-pdf-fill" aria-hidden="true"></i></span><span class="file-name">' . htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8') . '</span><span class="attachment-action">Open file <i class="bi bi-arrow-up-right" aria-hidden="true"></i></span></a></div>';
                    }
                } else {
                    echo '<p class="empty-state">No files found in this section.</p>';
                }
                echo '</div></section>';
            }
            $mysqli->close();
            ?>
        </main>
        <?php include "../globals/footer.php"; ?>
    </div>
    <style>
        :root {
            --coea-orange: #ff4c01;
            --coea-orange-light: #fe904d;
            --coea-ink: #202938;
            --coea-muted: #626873;
            --coea-border: #e5e7eb
        }

        html,
        body {
            max-width: 100%;
            overflow-x: hidden
        }

        .coea-section {
            padding: 28px 0 14px
        }

        .section-heading {
            text-align: center;
            padding: 18px 16px 8px;
            margin: 0 auto
        }

        .section-kicker {
            display: inline-block;
            color: var(--coea-orange);
            font-size: .76rem;
            font-weight: 750;
            letter-spacing: .12em
        }

        .section-heading h2 {
            margin: 10px 0;
            color: var(--coea-ink);
            font-size: clamp(1.7rem, 3vw, 2.35rem);
            font-weight: 800
        }

        .section-heading h2 span {
            color: var(--coea-orange)
        }

        .section-heading p {
            max-width: 720px;
            margin: 0 auto;
            color: var(--coea-muted);
            line-height: 1.7
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
            width: min(1180px, calc(100% - 32px));
            margin: 24px auto 36px
        }

        .video-grid-single {
            grid-template-columns: minmax(0, 900px);
            justify-content: center
        }

        .video-card {
            min-width: 0;
            padding: clamp(16px, 2vw, 24px);
            border: 1px solid var(--coea-border);
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 12px 34px rgba(0, 0, 0, .06);
            transition: transform .25s ease, box-shadow .25s ease
        }

        .video-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 42px rgba(0, 0, 0, .09)
        }

        .video-card-heading {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            min-height: 112px;
            margin-bottom: 16px
        }

        .video-icon {
            display: flex;
            flex: 0 0 48px;
            width: 48px;
            height: 48px;
            align-items: center;
            justify-content: center;
            border-radius: 13px;
            background: var(--coea-orange);
            color: #fff;
            font-size: 1.35rem
        }

        .video-kicker {
            display: block;
            margin-bottom: 4px;
            color: var(--coea-orange);
            font-size: .72rem;
            font-weight: 750;
            letter-spacing: .08em;
            text-transform: uppercase
        }

        .video-card h3 {
            margin: 0 0 6px;
            color: var(--coea-ink);
            font-size: clamp(1.15rem, 2vw, 1.45rem);
            font-weight: 750
        }

        .video-card p {
            margin: 0;
            color: #5b616a;
            line-height: 1.65;
            font-size: .9rem
        }

        .video-frame-wrap {
            position: relative;
            overflow: hidden;
            width: 100%;
            aspect-ratio: 16/9;
            border-radius: 12px;
            background: #111
        }

        .video-frame-wrap iframe {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: 0
        }

        .document-heading {
            padding-top: 24px
        }

        .document-area {
            width: min(1180px, calc(100% - 32px));
            margin: 24px auto 42px
        }

        .document-card {
            overflow: hidden;
            border: 1px solid var(--coea-border);
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 16px 45px rgba(25, 39, 58, .09)
        }

        .document-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
            padding: 18px 22px;
            background: linear-gradient(115deg, #fff7f2, #fff 72%);
            border-bottom: 1px solid #eceff3
        }

        .document-fileinfo {
            display: flex;
            align-items: center;
            gap: 13px;
            min-width: 0
        }

        .pdf-icon {
            display: grid;
            place-items: center;
            flex: 0 0 46px;
            width: 46px;
            height: 46px;
            border-radius: 14px;
            background: #fff0e8;
            color: var(--coea-orange);
            font-size: 1.45rem
        }

        .document-fileinfo h3 {
            margin: 0 0 4px;
            color: var(--coea-ink);
            font-size: 1rem;
            font-weight: 750;
            overflow-wrap: anywhere
        }

        .document-fileinfo p {
            margin: 0;
            color: #737b88;
            font-size: .8rem
        }

        .document-actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px
        }

        .document-actions a,
        .document-actions button {
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
            transition: background .2s ease, border-color .2s ease
        }

        .document-actions a:hover,
        .document-actions button:hover {
            border-color: #ff7b43;
            background: #fff6f1;
            color: #d94b13
        }

        .document-actions .primary-action {
            border-color: var(--coea-orange);
            background: var(--coea-orange);
            color: #fff
        }

        .document-actions .primary-action:hover {
            background: #d94300;
            color: #fff
        }

        .document-viewer {
            position: relative;
            padding: 14px;
            background: #edf0f4
        }

        .document-viewer iframe {
            display: block;
            width: 100%;
            height: clamp(500px, 75vh, 900px);
            border: 0;
            border-radius: 12px;
            background: #fff
        }

        .document-hint {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 11px 18px;
            border-top: 1px solid #e9edf2;
            color: #6d7582;
            font-size: .78rem
        }

        .document-hint i {
            color: var(--coea-orange)
        }

        .attachment-section {
            width: min(1180px, calc(100% - 32px));
            margin: 0 auto 32px
        }

        .attachment-section-heading {
            padding: 0 2px 10px;
            border-bottom: 2px solid #ffe0d2;
            margin-bottom: 14px
        }

        .attachment-section-heading h3 {
            margin: 0;
            color: var(--coea-ink);
            font-size: 1.1rem;
            font-weight: 750
        }

        .attachments-list {
            display: grid;
            grid-template-columns: minmax(0, 1fr);
            gap: 12px;
            width: 100%;
            margin: 22px auto 44px
        }

        .attachment-item {
            width: 100%;
            min-width: 0;
            border: 1px solid #f2d5c8;
            border-radius: 14px;
            background: #fff;
            box-shadow: 0 8px 24px rgba(0, 0, 0, .045);
            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease
        }

        .attachment-item:hover {
            transform: translateY(-2px);
            border-color: #ffb18f;
            box-shadow: 0 14px 30px rgba(241, 90, 36, .1)
        }

        .attachment-link {
            display: flex;
            align-items: center;
            gap: 12px;
            width: 100%;
            min-width: 0;
            padding: 14px 16px;
            color: #292929;
            text-decoration: none
        }

        .attachment-icon {
            display: grid;
            place-items: center;
            flex: 0 0 40px;
            width: 40px;
            height: 40px;
            border-radius: 11px;
            background: #fff0e8;
            color: var(--coea-orange);
            font-size: 1.35rem
        }

        .file-name {
            min-width: 0;
            flex: 1;
            overflow-wrap: anywhere;
            color: #303947;
            font-size: .92rem;
            font-weight: 650;
            line-height: 1.5;
            text-align: left
        }

        .attachment-action {
            flex: 0 0 auto;
            display: flex;
            align-items: center;
            gap: 6px;
            color: var(--coea-orange);
            font-size: .8rem;
            font-weight: 700;
            white-space: nowrap
        }

        .empty-state {
            grid-column: 1/-1;
            padding: 18px;
            border: 1px dashed #f0b79e;
            border-radius: 12px;
            background: #fff9f5;
            color: #777;
            text-align: center
        }

        @media(max-width:767.98px) {
            .video-grid {
                grid-template-columns: minmax(0, 1fr);
                gap: 18px;
                width: calc(100% - 24px);
                margin-top: 18px
            }

            .video-card {
                border-radius: 15px
            }

            .video-card-heading {
                min-height: 0
            }

            .document-area,
            .attachment-section,
            .video-grid-single {
                width: calc(100% - 24px)
            }

            .document-card {
                border-radius: 15px
            }

            .document-toolbar {
                padding: 15px
            }

            .document-actions {
                width: 100%
            }

            .document-actions a,
            .document-actions button {
                flex: 1 1 auto;
                padding: 8px 10px
            }

            .document-viewer {
                padding: 7px
            }

            .document-viewer iframe {
                height: 70vh;
                min-height: 420px;
                border-radius: 9px
            }

            .attachment-link {
                gap: 9px;
                padding: 12px
            }

            .attachment-action {
                font-size: .74rem
            }
        }

        @media(max-width:420px) {
            .attachment-action {
                font-size: 0
            }

            .attachment-action i {
                font-size: 1rem
            }

            .video-icon {
                flex-basis: 42px;
                width: 42px;
                height: 42px
            }
        }

        @media(prefers-reduced-motion:reduce) {

            .video-card,
            .attachment-item,
            .document-actions a,
            .document-actions button {
                transition: none
            }

            .video-card:hover,
            .attachment-item:hover {
                transform: none
            }
        }
    </style>
    <script>
        function togglePdfFullscreen(id) {
            const viewer = document.getElementById(id);
            if (!viewer) return;
            if (document.fullscreenElement) {
                document.exitFullscreen?.();
                return;
            }
            if (viewer.requestFullscreen) viewer.requestFullscreen();
            else if (viewer.webkitRequestFullscreen) viewer.webkitRequestFullscreen();
        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        if (window.AOS) {
            window.AOS.init({
                duration: 750,
                easing: 'ease-out-cubic',
                once: true,
                offset: 35
            });
        }
    </script>
</body>

</html>