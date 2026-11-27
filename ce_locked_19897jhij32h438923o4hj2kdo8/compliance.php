<?php
include '../src/connection.php';
$bannerTitle = 'COMPLIANCE REPORTS';
$bannerSubtitle = 'Browse compliance reports, supporting documents, and institutional records for COEA.';
$bannerKicker = 'Bachelor of Science in Civil Engineering';
$bannerImage = '../assets/ce_faculty.jfif';
$bannerColor = '#ff4c01';
$bannerTextColor = '#FFFFFF';
$bannerOverlayColor = '#ff4c01';
$bannerOverlayOpacity = 0.2;
$driveFolderId = '19BRVF18g-7isSF8t74jfj73EXspiblwt';
$driveFolderUrl = 'https://drive.google.com/drive/folders/' . $driveFolderId . '?usp=sharing';
$driveEmbedUrl = 'https://drive.google.com/embeddedfolderview?id=' . $driveFolderId . '#list';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compliance Reports | COEA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href=".././globals/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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

        .compliance-main {
            padding: 24px 0 42px
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
            max-width: 760px;
            margin: 0 auto;
            color: var(--coea-muted);
            line-height: 1.7
        }

        .folder-area {
            width: min(1180px, calc(100% - 32px));
            margin: 24px auto 0
        }

        .folder-card {
            overflow: hidden;
            border: 1px solid var(--coea-border);
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 16px 45px rgba(25, 39, 58, .09)
        }

        .folder-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
            padding: 18px 22px;
            background: linear-gradient(115deg, #fff7f2, #fff 72%);
            border-bottom: 1px solid #eceff3
        }

        .folder-info {
            display: flex;
            align-items: center;
            gap: 13px;
            min-width: 0
        }

        .folder-icon {
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

        .folder-info h3 {
            margin: 0 0 4px;
            color: var(--coea-ink);
            font-size: 1rem;
            font-weight: 750
        }

        .folder-info p {
            margin: 0;
            color: #737b88;
            font-size: .8rem;
            line-height: 1.5
        }

        .folder-actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px
        }

        .folder-actions a,
        .folder-actions button {
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

        .folder-actions a:hover,
        .folder-actions button:hover {
            border-color: #ff7b43;
            background: #fff6f1;
            color: #d94b13
        }

        .folder-actions .primary-action {
            border-color: var(--coea-orange);
            background: var(--coea-orange);
            color: #fff
        }

        .folder-actions .primary-action:hover {
            background: #d94300;
            color: #fff
        }

        .folder-frame-wrap {
            padding: 14px;
            background: #edf0f4
        }

        .folder-frame {
            display: block;
            width: 100%;
            height: clamp(520px, 75vh, 900px);
            border: 1px solid #e1e5eb;
            border-radius: 12px;
            background: #fff
        }

        .folder-hint {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            padding: 13px 18px;
            border-top: 1px solid #e9edf2;
            color: #6d7582;
            font-size: .8rem;
            line-height: 1.65
        }

        .folder-hint i {
            flex: 0 0 auto;
            color: var(--coea-orange);
            margin-top: 2px
        }

        @media(max-width:767.98px) {
            .folder-area {
                width: calc(100% - 24px)
            }

            .folder-card {
                border-radius: 15px
            }

            .folder-toolbar {
                padding: 15px
            }

            .folder-actions {
                width: 100%
            }

            .folder-actions a,
            .folder-actions button {
                flex: 1 1 auto;
                padding: 8px 10px
            }

            .folder-frame-wrap {
                padding: 7px
            }

            .folder-frame {
                height: 72vh;
                min-height: 480px;
                border-radius: 9px
            }
        }

        @media(max-width:420px) {
            .folder-info {
                align-items: flex-start
            }

            .folder-icon {
                flex-basis: 40px;
                width: 40px;
                height: 40px
            }

            .folder-frame {
                height: 72vh;
                min-height: 440px
            }

            .folder-actions a {
                font-size: .77rem
            }
        }

        @media(prefers-reduced-motion:reduce) {

            .folder-actions a,
            .folder-actions button {
                transition: none
            }
        }
    </style>
</head>

<body class="position-relative" style="overflow-x:hidden;font-family:'Poppins',sans-serif;">
    <div class="main min-vh-100 w-100">
        <?php include "./globals/header.php"; ?>
        <?php include "./globals/banner.php"; ?>
        <main class="compliance-main">
            <section class="section-heading" data-aos="fade-up" aria-labelledby="complianceHeading">
                <span class="section-kicker"><i class="bi bi-shield-check-fill me-2" aria-hidden="true"></i>OFFICIAL DOCUMENTATION</span>
                <h2 id="complianceHeading">Compliance <span>Reports</span></h2>
                <p>Browse the files and folders shared for COEA compliance. Open individual folders and view available documents within this page where Google Drive permits embedded browsing.</p>
            </section>
            <section class="folder-area" aria-label="Compliance report folder" data-aos="fade-up" data-aos-delay="80">
                <div class="folder-card">
                    <div class="folder-toolbar">
                        <div class="folder-info">
                            <span class="folder-icon"><i class="bi bi-folder2-open" aria-hidden="true"></i></span>
                            <div>
                                <h3>COEA Compliance Documents</h3>
                                <p>Browse folders and files from the shared Google Drive directory.</p>
                            </div>
                        </div>
                        <div class="folder-actions">
                            <button type="button" onclick="reloadDriveFolder()"><i class="bi bi-arrow-clockwise" aria-hidden="true"></i> Refresh</button>
                            <a class="primary-action" href="<?php echo htmlspecialchars($driveFolderUrl, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer"><i class="bi bi-google" aria-hidden="true"></i> Open in Google Drive <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="folder-frame-wrap">
                        <iframe id="complianceDriveFrame" class="folder-frame" title="COEA Compliance Reports Google Drive folder browser" src="<?php echo htmlspecialchars($driveEmbedUrl, ENT_QUOTES, 'UTF-8'); ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allow="fullscreen"></iframe>
                    </div>
                    <div class="folder-hint"><i class="bi bi-info-circle-fill" aria-hidden="true"></i>
                        <div><strong>Browsing folders:</strong> Select a folder in the embedded Google Drive view to browse its contents in the frame. The folder must be shared as <em>Anyone with the link — Viewer</em>. Google controls the embedded interface, so if it blocks in-page navigation or preview in a browser, use “Open in Google Drive.”</div>
                    </div>
                </div>
            </section>
        </main>
        <?php include "../globals/footer.php"; ?>
    </div>
    <script>
        function reloadDriveFolder() {
            const frame = document.getElementById('complianceDriveFrame');
            if (frame) {
                frame.src = frame.src;
            }
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