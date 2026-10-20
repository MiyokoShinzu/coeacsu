<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#12304a">
    <title>College of Engineering and Architecture | CSU</title>

    <!-- Preconnect improves first-load performance for CDN assets. -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./globals/global.css">

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
</head>

<body>
    <div class="main min-vh-100">
        <?php include "./globals/coea_header_nav.php"; ?>

        <main>
            <!-- Keep the main banner eager/high priority so it appears quickly. -->
            <img
                src="./assets/coea_pub.png"
                class="site-banner"
                alt="College of Engineering and Architecture"
                fetchpriority="high"
                decoding="async"
                width="1920"
                height="520">

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

                    <div class="row g-4 align-items-center">
                        <div class="col-12 col-lg-5">
                            <div class="content-card p-2">
                                <img src="./assets/accreditors.jfif" class="img-fluid rounded-3" alt="Accreditors visiting the college" width="900" height="650" fetchpriority="high" decoding="async">
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="content-card intro-copy h-100">
                                <span class="eyebrow">College of Engineering and Architecture</span>
                                <h1 class="mt-2 mb-3">Welcome, Accreditors</h1>
                                <p>We extend our warmest welcome and sincere appreciation for visiting the virtual room of the College of Engineering and Architecture. As you explore this site, we hope you gain a meaningful and enriching experience while navigating through its various sections and resources. May this platform provide you with valuable insights into the college’s academic excellence, institutional achievements, and commitment to quality education.</p>

                                <a href="./ce" class="action-link action-primary">
                                    <img src="./assets/logos/pices.png" alt="" width="25" height="25" loading="eager" decoding="async">
                                    <span>BSCE Level IV Accreditation</span>
                                    <i class="bi bi-arrow-up-right" aria-hidden="true"></i>
                                </a>
                                <a href="https://csu.edu.ph" class="action-link action-outline" target="_blank" rel="noopener noreferrer">
                                    <img src="./assets/csu_logo.png" alt="" width="25" height="25" loading="lazy" decoding="async">
                                    <span>CSU Official Website</span>
                                    <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.facebook.com/csucarigcoea" class="action-link action-outline" target="_blank" rel="noopener noreferrer">
                                    <img src="./assets/facebook_logo.svg" alt="" width="25" height="25" loading="lazy" decoding="async">
                                    <span>COEA Official Facebook Page</span>
                                    <i class="bi bi-box-arrow-up-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="py-4" aria-labelledby="institutional-video-title">
                <div class="page-wrap">
                    <div class="row g-4">
                        <div class="col-12 col-md-6">
                            <article class="content-card video-card">
                                <video controls preload="none" poster="./assets/template_csu.jfif" playsinline aria-label="Institutional video">
                                    <source src="./assets/institutional_video.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <h3 id="institutional-video-title">Institutional Video</h3>
                            </article>
                        </div>
                        <div class="col-12 col-md-6">
                            <article class="content-card video-card">
                                <video controls preload="none" poster="./assets/template_iv.jfif" playsinline aria-label="Campus tour video">
                                    <source src="./assets/campus_tour.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <h3>Campus Tour</h3>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section class="history-section" aria-labelledby="college-history-heading">
                <div class="heading-band">
                    <h2 id="college-history-heading">College History</h2>
                </div>
                <div class="page-wrap pt-4">
                    <figure class="content-card p-2 mb-4">
                        <img src="./assets/program_faculty_pic.png" alt="College faculty and academic community" class="img-fluid rounded-3" width="1400" height="700" loading="lazy" decoding="async">
                    </figure>
                    <div class="content-card history-copy">
                        <p>The College of Engineering of the Cagayan State University was conceived in 1981 pursuant to the national development goal of providing the manpower requirements of the country, particularly Region 02, in rural development through Science and Technology. It provides avenues to quality Engineering education to all students who have the propensity to Mathematics and Science regardless of race, sex, socio-economic status, religion and political affiliation or ideology.</p>
                        <p>In 1981, with Dr. Manuel T. Corpuz as the University President and under the pioneer Dean, Engr. Jose Borja, Bachelor of Science in Civil Engineering was the lone course offering. In 1988, six years later, under Dean Dominador T. Agatep, Bachelor of Science in Electrical Engineering and Bachelor of Science in Agricultural Engineering were offered. The offering of the latter in Tuguegarao Campus closed the same program in Lallo Campus and Piat Campus. In 1990, two years later, Bachelor of Science in Electronics and Communications Engineering and Bachelor of Science in Computer Engineering. Then in 1997, under Dean Diosdado Dimalanta, Bachelor of Science in Chemical Engineering followed suit. In 2019, Bachelor of Science in Architecture was offered. Lastly, in 2022, Bachelor of Science in Geodetic Engineering was added to the roster of programs being offered by the College.</p>
                        <p class="mb-0">The gradual expansion of course offerings has made the University more responsive to regional development.</p>
                    </div>
                </div>
            </section>

            <section class="history-section pt-0" aria-labelledby="program-history-heading">
                <div class="heading-band">
                    <h2 id="program-history-heading">Program History</h2>
                </div>
                <div class="page-wrap pt-4">
                    <div class="row g-4 align-items-start">
                        <div class="col-12 col-lg-5">
                            <div class="d-grid gap-3">
                                <figure class="content-card p-2 mb-0">
                                    <img src="./assets/coea_faculty_pic.png" alt="College of Engineering and Architecture faculty" class="img-fluid rounded-3" width="900" height="650" loading="lazy" decoding="async">
                                </figure>
                                <figure class="content-card p-2 mb-0">
                                    <img src="./assets/ce_faculty.jfif" alt="Civil Engineering faculty" class="img-fluid rounded-3" width="900" height="650" loading="lazy" decoding="async">
                                </figure>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7">
                            <article class="content-card history-copy">
                                <p>The program was opened in response to the labor demand of the region for infrastructure development, an essential factor to spur regional socio-economic growth and development.</p>
                                <p>Competent instructors and professors with graduate degrees, locally and abroad, staff this program.</p>
                                <p>The department produces quality graduates, as demonstrated by its performance in the Civil Engineering Licensure Examination, which is consistently higher than the national passing percentage. The department was adjudged No. 5 among the top civil engineering schools in the Philippines offering the program for a minimum of ten years. It has also received commendations for producing licensure examination topnotchers and became a Center of Development.</p>
                                <p>The program is granted a Certificate of Program Compliance (COPC 053 s. 2015) by the Commission on Higher Education in accordance with pertinent provisions of RA 7722, otherwise known as the “Higher Education Act of 1994,” and CHED Memorandum Order No. 028, s. 2007, Policies, Standards and Guidelines for Civil Engineering programs.</p>
                                <p>The curriculum is designed to meet or exceed CHED minimum requirements and reflect developments and technologies in civil engineering, locally and globally. It is continuously updated to ensure breadth of knowledge through core courses and depth through areas of specialization. Recommended specialization tracks help students develop the tools needed to solve complex civil engineering problems and prepare them for a wide range of careers.</p>
                                <p>Electives provide opportunities for specialization, allowing the institution to develop strengths in areas where it has established expertise.</p>
                                <p>Beyond instruction, the college engages in research and extension activities that support communities. Research informs its work, while community extension applies knowledge to local needs.</p>
                                <p class="mb-0">The college participates in accreditation activities to assess progress and continuously strengthen its role as a learning institution. It continues to develop its programs in response to emerging trends and professional needs.</p>
                            </article>
                        </div>
                    </div>

                    <div class="content-card department-card mt-4">
                        <img src="./assets/pubmat/ce.png" alt="Civil Engineering Department" width="1600" height="800" loading="lazy" decoding="async">
                        <div class="department-overlay">
                            <h3>Civil Engineering Department</h3>
                            <a href="./ce" class="btn text-white px-4">
                                <i class="bi bi-link-45deg me-2" aria-hidden="true"></i>Visit Department
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="history-section pt-0" aria-labelledby="topnotchers-heading">
                <div class="heading-band">
                    <h2 id="topnotchers-heading">Topnotchers &amp; Achievements</h2>
                </div>
                <div class="page-wrap pt-4">
                    <div class="content-card carousel-shell">
                        <div id="topNotchersCarousel" class="carousel slide achievement-carousel" data-bs-ride="carousel" data-bs-interval="5000">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Achievement image 1"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="1" aria-label="Achievement image 2"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="2" aria-label="Achievement image 3"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="3" aria-label="Achievement image 4"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="4" aria-label="Achievement image 5"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="5" aria-label="Achievement image 6"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="6" aria-label="Achievement image 7"></button>
                                <button type="button" data-bs-target="#topNotchersCarousel" data-bs-slide-to="7" aria-label="Achievement image 8"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active"><img src="./assets/performing_school.jfif" alt="College performance recognition" width="1200" height="800" fetchpriority="high" decoding="async"></div>
                                <div class="carousel-item"><img src="./assets/top_notchers4.jfif" alt="Licensure examination achievers" width="1200" height="800" loading="lazy" decoding="async"></div>
                                <div class="carousel-item"><img src="./assets/top_notchers2.jfif" alt="Civil Engineering topnotchers" width="1200" height="800" loading="lazy" decoding="async"></div>
                                <div class="carousel-item"><img src="./assets/top_notchers3.jfif" alt="College academic achievement" width="1200" height="800" loading="lazy" decoding="async"></div>
                                <div class="carousel-item"><img src="./assets/top_notchers1.jfif" alt="Licensure examination recognition" width="1200" height="800" loading="lazy" decoding="async"></div>
                                <div class="carousel-item"><img src="./assets/top_notchers5.jfif" alt="College award and recognition" width="1200" height="800" loading="lazy" decoding="async"></div>
                                <div class="carousel-item"><img src="./assets/top_notchers6.jfif" alt="Engineering student achievement" width="1200" height="800" loading="lazy" decoding="async"></div>
                                <div class="carousel-item"><img src="./assets/top_notchers8.jfif" alt="Academic excellence recognition" width="1200" height="800" loading="lazy" decoding="async"></div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#topNotchersCarousel" data-bs-slide="prev" aria-label="Previous achievement">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#topNotchersCarousel" data-bs-slide="next" aria-label="Next achievement">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <?php include "./globals/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
</body>

</html>