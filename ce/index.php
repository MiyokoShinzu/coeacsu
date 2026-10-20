<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#12304a">
    <title>BSCE Accreditation Portal | COEA - CSU</title>

    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../globals/global.css">

    <style>
        :root {
            --navy: #12304a;
            --navy-deep: #0b2236;
            --blue: #245b78;
            --red: #a62932;
            --gold: #c49a48;
            --ink: #243342;
            --muted: #5e6e7d;
            --canvas: #f4f7fa;
            --line: #dce4eb;
            --shadow: 0 14px 36px rgba(18, 48, 74, .09);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            color: var(--ink);
            background: var(--canvas);
            font-family: "DM Sans", Arial, sans-serif;
            line-height: 1.7;
            overflow-x: clip;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            color: var(--navy-deep);
            font-family: "Libre Baskerville", Georgia, serif;
            line-height: 1.3;
        }

        .page-wrap {
            width: min(1180px, calc(100% - 2rem));
            margin-inline: auto;
        }

        .portal-section {
            padding: clamp(2rem, 5vw, 4.5rem) 0;
        }

        .portal-grid {
            display: grid;
            grid-template-columns: minmax(0, .9fr) minmax(0, 1.1fr);
            gap: clamp(1.25rem, 3vw, 2.5rem);
            align-items: stretch;
        }

        .video-card,
        .intro-card {
            min-width: 0;
            overflow: hidden;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 18px;
            box-shadow: var(--shadow);
        }

        .video-card {
            padding: .85rem;
            display: flex;
            flex-direction: column;
        }

        .video-topline {
            display: flex;
            align-items: center;
            gap: .65rem;
            color: var(--red);
            font-size: .74rem;
            font-weight: 700;
            letter-spacing: .13em;
            text-transform: uppercase;
            padding: .35rem .35rem .8rem;
        }

        .video-topline .bi {
            font-size: 1.1rem;
        }

        .overview-video {
            display: block;
            width: 100%;
            aspect-ratio: 16 / 9;
            object-fit: contain;
            background: #0b2236;
            border-radius: 11px;
        }

        .video-caption {
            color: var(--muted);
            font-size: .88rem;
            padding: .9rem .35rem .25rem;
            margin: 0;
        }

        .intro-card {
            position: relative;
            padding: clamp(1.4rem, 3.5vw, 2.8rem);
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .intro-card::before {
            content: "";
            position: absolute;
            inset: 0 auto 0 0;
            width: 5px;
            background: var(--gold);
        }

        .eyebrow {
            color: var(--red);
            font-size: .76rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
            margin-bottom: .7rem;
        }

        .intro-card h1 {
            font-size: clamp(1.65rem, 3vw, 2.35rem);
            margin-bottom: 1rem;
        }

        .intro-text {
            color: #405161;
            font-size: 1rem;
            line-height: 1.85;
            margin: 0;
            text-align: left;
        }

        .intro-text strong {
            color: var(--navy);
            font-weight: 700;
        }

        .focus-list {
            display: flex;
            flex-wrap: wrap;
            gap: .5rem;
            margin-top: 1.25rem;
        }

        .focus-chip {
            display: inline-flex;
            align-items: center;
            gap: .4rem;
            padding: .38rem .7rem;
            border-radius: 999px;
            color: var(--navy);
            background: #edf3f7;
            border: 1px solid #dce7ee;
            font-size: .8rem;
            font-weight: 600;
        }

        .focus-chip .bi {
            color: var(--red);
        }

        .bottom-rule {
            width: min(1180px, calc(100% - 2rem));
            height: 1px;
            margin: 0 auto;
            border: 0;
            background: var(--line);
        }

        :focus-visible {
            outline: 3px solid var(--gold);
            outline-offset: 3px;
        }

        @media (max-width: 991.98px) {
            .portal-grid {
                grid-template-columns: minmax(0, 1fr);
            }

            .video-card {
                max-width: 760px;
                width: 100%;
                margin-inline: auto;
            }
        }

        @media (max-width: 575.98px) {

            .page-wrap,
            .bottom-rule {
                width: calc(100% - 1.25rem);
            }

            .portal-section {
                padding: 1.25rem 0 2rem;
            }

            .video-card,
            .intro-card {
                border-radius: 14px;
            }

            .intro-card {
                padding: 1.35rem 1.2rem 1.4rem 1.45rem;
            }

            .intro-text {
                font-size: .96rem;
                line-height: 1.75;
            }

            .focus-chip {
                font-size: .76rem;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
                animation-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>
    <div class="main min-vh-100">
        <?php include "./globals/header.php"; ?>
        <?php include "./globals/banner.php"; ?>

        <main>
            <section class="portal-section" aria-labelledby="portal-heading">
                <div class="page-wrap">
                    <div class="portal-grid">
                        <article class="video-card">
                            <div class="video-topline">
                                <i class="bi bi-play-circle" aria-hidden="true"></i>
                                <span>Program Overview</span>
                            </div>
                            <video
                                src="../assets/overview_video.mp4"
                                class="overview-video"
                                controls
                                preload="none"
                                playsinline
                                poster="../assets/template_csu.jfif"
                                aria-label="Bachelor of Science in Civil Engineering program overview video">
                                Your browser does not support the video tag.
                            </video>
                            <p class="video-caption">Discover the Bachelor of Science in Civil Engineering program at Cagayan State University.</p>
                        </article>

                        <article class="intro-card">
                            <div class="eyebrow">Accreditation Portal</div>
                            <h1 id="portal-heading">Bachelor of Science in Civil Engineering</h1>
                            <p class="intro-text">
                                Welcome to the accreditation portal of the <strong>Bachelor of Science in Civil Engineering (BSCE)</strong> program. This section is designed to help our esteemed accreditors navigate key areas of academic and institutional performance.
                                <br><br>
                                Explore information about the program’s <strong>Home</strong> profile, ongoing <strong>Research</strong> and development initiatives, the achievements of our <strong>Graduates</strong>, community-engaged <strong>Community Service</strong> activities, strategic <strong>International Linkages</strong>, forward-looking <strong>Planning</strong> efforts, and documented <strong>Compliance Reports</strong>.
                                <br><br>
                                Each section provides relevant information and documentation reflecting the BSCE program’s commitment to academic excellence, continuous improvement, and compliance with accreditation standards.
                            </p>

                            <div class="focus-list" aria-label="Accreditation areas">
                                <span class="focus-chip"><i class="bi bi-house-door" aria-hidden="true"></i>Home</span>
                                <span class="focus-chip"><i class="bi bi-search" aria-hidden="true"></i>Research</span>
                                <span class="focus-chip"><i class="bi bi-mortarboard" aria-hidden="true"></i>Graduates</span>
                                <span class="focus-chip"><i class="bi bi-people" aria-hidden="true"></i>Community Service</span>
                                <span class="focus-chip"><i class="bi bi-globe2" aria-hidden="true"></i>International Linkages</span>
                                <span class="focus-chip"><i class="bi bi-diagram-3" aria-hidden="true"></i>Planning</span>
                                <span class="focus-chip"><i class="bi bi-file-earmark-check" aria-hidden="true"></i>Compliance Reports</span>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <hr class="bottom-rule">
        </main>
    </div>

    <?php include "../globals/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
</body>

</html>