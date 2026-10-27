<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COEA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href="./globals/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<<<<<<< HEAD
    <style>
        :root {
            --navy: #12304a;
            --navy-deep: #0b2236;
            --blue: #245b78;
            --red: #a62932;
            --gold: #c49a48;
            --ink: #243342;
            --muted: #617181;
            --paper: #ffffff;
            --canvas: #f4f7fa;
            --line: #dce4eb;
            --radius: 18px;
            --shadow: 0 12px 34px rgba(18, 48, 74, .09);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
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
        h5,
        .academic-heading {
            font-family: "Libre Baskerville", Georgia, serif;
            color: var(--navy-deep);
            line-height: 1.3;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        a {
            text-underline-offset: 3px;
        }

        .page-wrap {
            width: min(1200px, calc(100% - 2rem));
            margin-inline: auto;
        }

        .site-banner {
            display: block;
            width: 100%;
            height: auto;
            max-height: 430px;
            object-fit: cover;
            object-position: center;
            background: #e8edf2;
        }

        .intro-section {
            padding: clamp(2rem, 5vw, 4.5rem) 0;
        }

        .eyebrow {
            color: var(--red);
            font-size: .76rem;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .section-heading {
            text-align: center;
            margin: 0 0 .8rem;
            font-size: clamp(1.55rem, 3vw, 2.15rem);
        }

        .section-lead {
            max-width: 720px;
            margin: 0 auto 2rem;
            color: var(--muted);
            text-align: center;
        }

        .content-card {
            background: var(--paper);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .image-frame {
            overflow: hidden;
            background: #e9eef3;
            border-radius: 12px;
        }

        .image-frame img {
            display: block;
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .intro-copy {
            padding: clamp(1.3rem, 3vw, 2.4rem);
        }

        .intro-copy p,
        .history-copy p {
            color: #405161;
            text-align: left;
        }

        .intro-copy p {
            font-size: 1.03rem;
        }

        .action-link {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: .7rem;
            width: 100%;
            min-height: 48px;
            padding: .75rem 1rem;
            margin-top: .7rem;
            border: 1px solid transparent;
            border-radius: 10px;
            font-weight: 700;
            text-decoration: none;
            transition: transform .2s ease, background-color .2s ease, box-shadow .2s ease;
        }

        .action-link:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 18px rgba(18, 48, 74, .13);
        }

        .action-link img {
            width: 25px;
            height: 25px;
            object-fit: contain;
        }

        .action-primary {
            color: #fff;
            background: var(--red);
        }

        .action-primary:hover {
            color: #fff;
            background: #861f28;
        }

        .action-outline {
            color: var(--navy);
            background: #fff;
            border-color: var(--line);
        }

        .action-outline:hover {
            color: var(--navy-deep);
            background: #edf3f7;
        }

        .heading-band {
            padding: 1.5rem 1rem;
            color: #fff;
            background: var(--navy);
            border-top: 4px solid var(--gold);
        }

        .heading-band h2 {
            margin: 0;
            color: #fff;
            text-align: center;
            font-size: clamp(1.45rem, 3vw, 2rem);
        }

        .history-section {
            padding: 3rem 0;
        }

        .history-copy {
            padding: clamp(1.3rem, 3vw, 2.5rem);
        }

        .history-copy p {
            margin-bottom: 1rem;
        }

        .video-card {
            height: 100%;
            padding: 1rem;
        }

        .video-card video {
            display: block;
            width: 100%;
            aspect-ratio: 16 / 9;
            background: #0b2236;
            border-radius: 10px;
        }

        .video-card h3 {
            font-size: 1.1rem;
            margin: 1rem 0 .25rem;
            text-align: center;
        }

        .department-card {
            position: relative;
        }

        .department-card img {
            display: block;
            width: 100%;
            max-height: 520px;
            object-fit: cover;
        }

        .department-overlay {
            position: absolute;
            inset: auto 0 0;
            padding: 2rem 1.5rem 1.5rem;
            color: #fff;
            background: linear-gradient(transparent, rgba(8, 28, 45, .94));
        }

        .department-overlay h3 {
            color: #fff;
            font-size: clamp(1.2rem, 2.4vw, 1.65rem);
            margin-bottom: .8rem;
        }

        .department-overlay .btn {
            background: var(--red);
            border: 0;
            font-weight: 700;
        }

        .department-overlay .btn:hover {
            background: #861f28;
        }

        .carousel-shell {
            max-width: 900px;
            margin: auto;
            padding: .75rem;
        }

        .achievement-carousel img {
            display: block;
            width: 100%;
            height: clamp(250px, 55vw, 560px);
            object-fit: contain;
            background: #f0f3f6;
            border-radius: 10px;
        }

        .carousel-indicators [data-bs-target] {
            background-color: var(--gold);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: drop-shadow(0 1px 3px rgba(0, 0, 0, .65));
        }

        footer {
            margin-top: 2rem;
        }

        :focus-visible {
            outline: 3px solid var(--gold);
            outline-offset: 3px;
        }


        /* Animated image gallery */
        .image-frame,
        .content-card figure,
        figure.content-card,
        .department-card {
            position: relative;
        }

        .image-frame img,
        figure.content-card img,
        .history-section figure img,
        .department-card>img {
            transition: transform .55s cubic-bezier(.2, .7, .2, 1), filter .4s ease;
            will-change: transform;
        }

        .image-frame:hover img,
        figure.content-card:hover img,
        .history-section figure:hover img,
        .department-card:hover>img {
            transform: scale(1.045);
            filter: saturate(1.08);
        }

        /* Gallery-like presentation for the first accreditation image row */
        .intro-section .row.g-4.align-items-stretch.mb-4>div {
            min-width: 0;
        }

        .intro-section .row.g-4.align-items-stretch.mb-4 .image-frame {
            position: relative;
            isolation: isolate;
            height: 100%;
            min-height: 220px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(18, 48, 74, .10);
            border: 1px solid var(--line);
        }

        .intro-section .row.g-4.align-items-stretch.mb-4 .image-frame img {
            width: 100%;
            height: 100%;
            min-height: 220px;
            object-fit: cover;
            transition: transform .65s cubic-bezier(.2, .7, .2, 1), filter .45s ease;
        }

        .intro-section .row.g-4.align-items-stretch.mb-4 .image-frame::after {
            content: "View image";
            position: absolute;
            inset: auto 0 0;
            z-index: 1;
            padding: 2.5rem 1rem 1rem;
            color: #fff;
            font-weight: 700;
            letter-spacing: .03em;
            opacity: 0;
            transform: translateY(8px);
            background: linear-gradient(transparent, rgba(8, 28, 45, .82));
            transition: opacity .35s ease, transform .35s ease;
            pointer-events: none;
        }

        .intro-section .row.g-4.align-items-stretch.mb-4 .image-frame:hover img {
            transform: scale(1.06);
            filter: brightness(.82) saturate(1.08);
        }

        .intro-section .row.g-4.align-items-stretch.mb-4 .image-frame:hover::after {
            opacity: 1;
            transform: translateY(0);
        }

        .content-card,
        .image-frame,
        .history-section figure,
        .department-card {
            transition: box-shadow .35s ease, border-color .35s ease, transform .35s ease;
        }

        .content-card:hover,
        .image-frame:hover,
        .history-section figure:hover {
            box-shadow: 0 18px 38px rgba(18, 48, 74, .15);
        }

        .achievement-carousel img {
            transition: transform .5s ease, filter .5s ease;
        }

        .achievement-carousel .carousel-item.active:hover img {
            transform: scale(1.015);
            filter: saturate(1.06);
        }

        @media (hover: none) {
            .intro-section .row.g-4.align-items-stretch.mb-4 .image-frame::after {
                opacity: .85;
                transform: none;
            }
        }

        @media (max-width: 767.98px) {
            .page-wrap {
                width: min(100% - 1.25rem, 1200px);
            }

            .site-banner {
                max-height: 280px;
            }

            .intro-section {
                padding: 1.5rem 0 2.5rem;
            }

            .content-card {
                border-radius: 14px;
            }

            .intro-copy p {
                font-size: .98rem;
            }

            .history-section {
                padding: 2rem 0;
            }

            .department-overlay {
                padding: 2.5rem 1rem 1rem;
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
=======
>>>>>>> parent of 707dac2 (Update index.php)
</head>

<body class="position-relative" style="overflow-x: hidden; font-family: 'Poppins', sans-serif;">

    <div class="main min-vh-100 ">
        <?php include "./globals/coea_header_nav.php" ?>
        <img src="./assets/coea_pub.png" class="mx-auto" alt="COEA Banner"
            style="width: 100vw; height: auto; " data-aos="fade-up">

            <section class="intro-section">
                <div class="page-wrap">
                    <div class="row g-4 align-items-stretch mb-4">
                        <div class="col-12 col-lg-6">
                            <div class="image-frame h-100 d-flex align-items-center justify-content-center">
                                <img src="./assets/accreditation_header2.jpg" alt="Accreditation information" width="900" height="500" fetchpriority="high" decoding="async" title="Accreditation Information">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="image-frame h-100 d-flex align-items-center justify-content-center">
                                <img src="./assets/accreditors_header.png" alt="Accreditation team and evaluation" width="900" height="500" fetchpriority="high" decoding="async" title="Accreditation Team and Evaluation">
                            </div>
                        </div>
                    </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 mb-5  d-flex align-items-center mt-3 justify-content-center flex-column mx-auto" style="background:rgb(174,14,14)">
                <h4 class="text-center text-white mt-3 p-1" style="font-weight: bolder; ">Topnotchers</h4>
            </div>
            <div class="col-lg-12 mx-auto d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-md-6 mx-auto border shadow p-2" data-aos="zoom-in">
                        <!-- Carousel -->
                        <div id="topNotchersCarousel" class="carousel slide" data-bs-ride="carousel">
                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="0" class="active"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="1"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="2"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="3"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="4"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="5"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="6"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="7"></button>
                            </div>

                            <!-- Inner -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./assets/performing_school.jfif" class="d-block w-100 img-fluid" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/top_notchers4.jfif" class="d-block w-100 img-fluid" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/top_notchers2.jfif" class="d-block w-100 img-fluid" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/top_notchers3.jfif" class="d-block w-100 img-fluid" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/top_notchers1.jfif" class="d-block w-100 img-fluid" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/top_notchers5.jfif" class="d-block w-100 img-fluid" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/top_notchers6.jfif" class="d-block w-100 img-fluid" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="./assets/top_notchers8.jfif" class="d-block w-100 img-fluid" alt="">
                                </div>
                            </div>

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#topNotchersCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#topNotchersCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- background: #ff4C01; #FE904D-->

    </div>




    <?php include "globals/footer.php"; ?>

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
        const myCarousel = document.querySelector('#topNotchersCarousel');
        const carousel = new bootstrap.Carousel(myCarousel, {
            interval: 3000, // 3 seconds
            ride: 'carousel'
        });
    </script>
</body>

</html>