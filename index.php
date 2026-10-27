<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COEA | College of Engineering and Architecture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href="./globals/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">




</head>

<body class="position-relative" style="overflow-x: hidden; font-family: 'Poppins', sans-serif;">

    <div class="main min-vh-100 ">

        <nav class="coea-dot-navigation" aria-label="Section navigation">
            <a href="#home" class="coea-dot-link is-active" aria-label="Home" aria-current="location"><span></span></a>
            <a href="#accreditation-links" class="coea-dot-link" aria-label="Accreditation links"><span></span></a>
            <a href="#video-section" class="coea-dot-link" aria-label="Videos"><span></span></a>
            <a href="#topnotchers" class="coea-dot-link" aria-label="Topnotchers"><span></span></a>
            <a href="#college-history" class="coea-dot-link" aria-label="College history"><span></span></a>
        </nav>
        <img src="./assets/coea_pub.png" class="coea-main-banner" alt="College of Engineering and Architecture banner" data-aos="fade-in">
        <div class="row w-100">

            <div class="banner row mx-auto mt-2" id="home">
                <div class="col-lg-6 mx-auto d-flex align-items-center justify-content-center flex-column mb-4 banner-image-column" data-aos="fade-up" data-aos-delay="100">
                    <img src="./assets/accreditation_header2.jpg" alt="COEA accreditation banner" class="img-fluid coea-secondary-banner">
                </div>
                <div class="col-lg-6 mx-auto d-flex align-items-center justify-content-center flex-column mb-4 banner-image-column" data-aos="fade-up" data-aos-delay="180">
                    <img src="./assets/accreditors_header.png" alt="Welcome to our accreditors" class="img-fluid coea-secondary-banner">
                </div>
                <section class="col-12 welcome-accreditors" aria-labelledby="welcomeAccreditorsTitle" data-aos="fade-up" data-aos-delay="250">
                    <div class="welcome-copy">
                        <div class="welcome-layout">
                            <div class="welcome-content-column">
                                <span class="welcome-eyebrow"><i class="bi bi-mortarboard-fill me-2"></i>College of Engineering and Architecture</span>
                                <h1 id="welcomeAccreditorsTitle">Welcome, Accreditors</h1>
                                <p>We warmly welcome you to the virtual accreditation room of the College of Engineering and Architecture of Cagayan State University – Carig Campus. This page brings together an overview of our college, its history, achievements, academic programs, and institutional resources. We are pleased to share our continuing commitment to quality education, professional excellence, research, and service to our communities.</p>
                                <p class="welcome-thanks">Thank you for taking the time to learn more about our college.</p>
                                <div class="welcome-actions" id="accreditation-links" aria-label="College links">
                                    <a href="./ce" class="welcome-action welcome-action-primary"><span class="action-icon"><i class="bi bi-building-gear" aria-hidden="true"></i></span><span class="action-copy"><strong>BSCE Accreditation</strong><small>Level IV accreditation portal</small></span><i class="bi bi-arrow-up-right ms-auto"></i></a>
                                    <a href="./ee" class="welcome-action"><span class="action-icon"><i class="bi bi-lightning-charge-fill" aria-hidden="true"></i></span><span class="action-copy"><strong>BSEE Accreditation</strong><small>Electrical Engineering</small></span><i class="bi bi-arrow-up-right ms-auto"></i></a>
                                    <a href="#comingSoonDialog" class="welcome-action" data-coming-soon><span class="action-icon"><i class="bi bi-cpu-fill" aria-hidden="true"></i></span><span class="action-copy"><strong>BSECE Accreditation</strong><small>Electronics Engineering</small></span><i class="bi bi-arrow-up-right ms-auto"></i></a>
                                    <a href="#comingSoonDialog" class="welcome-action" data-coming-soon><span class="action-icon"><i class="bi bi-droplet-half" aria-hidden="true"></i></span><span class="action-copy"><strong>BSCHE Accreditation</strong><small>Chemical Engineering</small></span><i class="bi bi-arrow-up-right ms-auto"></i></a>
                                    <a href="#comingSoonDialog" class="welcome-action" data-coming-soon><span class="action-icon"><i class="bi bi-pc-display-horizontal" aria-hidden="true"></i></span><span class="action-copy"><strong>BSCpE Accreditation</strong><small>Computer Engineering</small></span><i class="bi bi-arrow-up-right ms-auto"></i></a>
                                    <a href="#comingSoonDialog" class="welcome-action" data-coming-soon><span class="action-icon"><i class="bi bi-globe-asia-australia" aria-hidden="true"></i></span><span class="action-copy"><strong>BSGE Accreditation</strong><small>Geodetic Engineering</small></span><i class="bi bi-arrow-up-right ms-auto"></i></a>
                                    <a href="#comingSoonDialog" class="welcome-action" data-coming-soon><span class="action-icon"><i class="bi bi-rulers" aria-hidden="true"></i></span><span class="action-copy"><strong>BS Architecture Accreditation</strong><small>Architecture program</small></span><i class="bi bi-arrow-up-right ms-auto"></i></a>
                                    <a href="https://csu.edu.ph" class="welcome-action" target="_blank" rel="noopener noreferrer"><span class="action-icon"><img src="./assets/csu_logo.png" alt=""></span><span class="action-copy"><strong>CSU Official Website</strong><small>University information and updates</small></span><i class="bi bi-arrow-up-right ms-auto"></i></a>
                                    <a href="https://www.facebook.com/csucarigcoea" class="welcome-action" target="_blank" rel="noopener noreferrer"><span class="action-icon"><img src="./assets/facebook_logo.svg" alt=""></span><span class="action-copy"><strong>COEA Official Facebook</strong><small>News, events, and announcements</small></span><i class="bi bi-arrow-up-right ms-auto"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <dialog id="comingSoonDialog" class="coea-coming-dialog" aria-labelledby="comingSoonTitle">
                    <div class="coming-soon-icon"><i class="bi bi-hourglass-split" aria-hidden="true"></i></div>
                    <h2 id="comingSoonTitle">Coming Soon</h2>
                    <p>This accreditation portal is being prepared. Please check back soon for updates.</p>
                    <button type="button" class="coming-soon-close" id="closeComingSoon">Okay</button>
                </dialog>
                <div class="wrapper w-100 d-flex align-items-center justify-content-center ">
                    <hr style="height: 2px; background-color: black; width: 800px; " class="mt-4 mb-4">

                </div>
                <div class="col-lg-12 mx-auto mt-2 video-stack" id="video-section">
                    <div class="row g-4 justify-content-center">
                        <div class="col-12 col-lg-6 video-card" id="institutional-video" data-aos="fade-up">
                            <div class="video-card-heading">
                                <span class="video-card-icon"><i class="bi bi-play-btn-fill" aria-hidden="true"></i></span>
                                <div><span class="video-kicker">Discover our university</span>
                                    <h2>Institutional Video</h2>
                                    <p>An introduction to the university, its mission, and community.</p>
                                </div>
                            </div>
                            <div class="video-frame-wrap youtube-frame-wrap">
                                <iframe
                                    src="https://www.youtube-nocookie.com/embed/ApiXx87lKqY"
                                    title="Cagayan State University Institutional Video"
                                    loading="lazy"
                                    referrerpolicy="strict-origin-when-cross-origin"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 video-card" id="campus-tour" data-aos="fade-up">
                            <div class="video-card-heading">
                                <span class="video-card-icon"><i class="bi bi-geo-alt-fill" aria-hidden="true"></i></span>
                                <div><span class="video-kicker">Explore our campus</span>
                                    <h2>Campus Tour</h2>
                                    <p>Take a closer look at our campus facilities and learning environment.</p>
                                </div>
                            </div>
                            <div class="video-frame-wrap">
                                <video controls preload="metadata" poster="./assets/template_iv.jfif" aria-label="Campus Tour Video">
                                    <source src="./assets/campus_tour.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- Topnotchers is a separate, full-width news section directly before College History -->
        <section class="coea-section topnotchers-news-section" id="topnotchers" aria-labelledby="topnotchersTitle">
            <div class="topnotchers-news-wrapper">
                <header class="coea-topnotchers-heading" data-aos="fade-up">
                    <span class="news-section-kicker">COEA ACHIEVEMENT NEWS</span>
                    <h2 id="topnotchersTitle">Topnotchers</h2>
                    <p>Celebrating the achievements and excellence of our graduates.</p>
                </header>
                <article class="topnotchers-card" data-aos="fade-up" aria-label="Topnotchers news slideshow">
                    <div class="top-news-masthead">
                        <div class="top-news-label"><span class="news-live-dot"></span> COEA ACHIEVEMENT NEWS</div>
                        <div class="top-news-copy"><strong>Celebrating our topnotchers</strong><span>Recognizing the excellence and achievements of our graduates</span></div>
                        <span class="top-news-mark"><i class="bi bi-mortarboard-fill" aria-hidden="true"></i></span>
                    </div>
                    <!-- Automatically advancing achievement-news carousel -->
                    <div id="topNotchersCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4500" data-bs-pause="hover" data-bs-touch="true">
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
                </article>
            </div>
        </section>

        <section class="coea-section college-history-section" id="college-history" aria-labelledby="collegeHistoryTitle">
            <div class="college-history-wrapper">
                <div class="college-history-heading" data-aos="fade-up">
                    <span class="history-kicker"><i class="bi bi-clock-history me-2"></i>Our Background</span>
                    <h2 id="collegeHistoryTitle">College <span>History</span></h2>
                    <p>Discover the growth of the College of Engineering and Architecture and its continuing contribution to engineering and technology education in Region II.</p>
                </div>

                <div class="history-card college-history-card" data-aos="fade-up">
                    <div class="history-intro">
                        <div class="history-intro-icon"><i class="bi bi-book-half" aria-hidden="true"></i></div>
                        <div>
                            <h3>Establishment and Purpose</h3>
                            <p>The College of Engineering of Cagayan State University was conceived in 1981 to help meet the country's manpower needs, particularly in Region II, through science and technology. It provides access to quality engineering education for students with an aptitude for mathematics and science, regardless of race, sex, socioeconomic status, religion, or political affiliation.</p>
                        </div>
                    </div>

                    <div class="college-history-content">
                        <div class="college-history-image-wrap">
                            <img src="./assets/program_faculty_pic.png" alt="College of Engineering and Architecture faculty" class="college-history-image" loading="lazy">
                            <div class="history-image-caption"><i class="bi bi-building me-2"></i>College of Engineering and Architecture</div>
                        </div>

                        <div class="history-timeline" aria-label="College history milestones">
                            <article class="history-item">
                                <span class="history-year">1981</span>
                                <div>
                                    <h3><i class="bi bi-building me-2"></i>First Academic Program</h3>
                                    <p>Under University President Dr. Manuel T. Corpuz and pioneer Dean Engr. Jose Borja, Bachelor of Science in Civil Engineering became the college's first program.</p>
                                </div>
                            </article>
                            <article class="history-item">
                                <span class="history-year">1988–1990</span>
                                <div>
                                    <h3><i class="bi bi-lightning-charge me-2"></i>Expansion of Engineering Programs</h3>
                                    <p>Under Dean Dominador T. Agatep, Electrical Engineering and Agricultural Engineering were introduced in 1988, followed by Electronics and Communications Engineering and Computer Engineering in 1990.</p>
                                </div>
                            </article>
                            <article class="history-item">
                                <span class="history-year">1997</span>
                                <div>
                                    <h3><i class="bi bi-gear-wide-connected me-2"></i>Chemical Engineering</h3>
                                    <p>Under Dean Diosdado Dimalanta, Bachelor of Science in Chemical Engineering was added to the college's program offerings.</p>
                                </div>
                            </article>
                            <article class="history-item">
                                <span class="history-year">2019–2022</span>
                                <div>
                                    <h3><i class="bi bi-buildings me-2"></i>Architecture and Geodetic Engineering</h3>
                                    <p>Bachelor of Science in Architecture was offered in 2019, followed by Bachelor of Science in Geodetic Engineering in 2022. These additions expanded the college's academic offerings in response to the evolving development needs of the region.</p>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="history-facts" aria-label="College history highlights">
                        <div class="history-fact"><i class="bi bi-calendar-event-fill" aria-hidden="true"></i>
                            <div><strong>Established in 1981</strong><span>The college began with the Civil Engineering program.</span></div>
                        </div>
                        <div class="history-fact"><i class="bi bi-mortarboard-fill" aria-hidden="true"></i>
                            <div><strong>Growing Program Portfolio</strong><span>Engineering and architecture programs were added over time.</span></div>
                        </div>
                        <div class="history-fact"><i class="bi bi-cpu-fill" aria-hidden="true"></i>
                            <div><strong>Science and Technology</strong><span>Supporting regional manpower and development needs.</span></div>
                        </div>
                        <div class="history-fact"><i class="bi bi-people-fill" aria-hidden="true"></i>
                            <div><strong>Access to Education</strong><span>Providing opportunities for students with aptitude in mathematics and science.</span></div>
                        </div>
                    </div>

                    <div class="history-closing">
                        <i class="bi bi-buildings-fill" aria-hidden="true"></i>
                        <h3>Continuing Commitment</h3>
                        <p>From its beginnings in 1981 to its expanded academic offerings, the college continues to support quality education in engineering and architecture and to respond to the development needs of the region.</p>
                    </div>
                </div>
            </div>
        </section>

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

        /* COEA-wide visual refresh: preserve original content and image paths */
        :root {
            --coea-orange: #c62828;
            --coea-light-orange: #ff8a1f;
            --coea-bg: #e4e6e8;
            --coea-surface: #f5f6f7;
            --coea-surface-soft: #e9ecef;
            --coea-text: #202832;
            --coea-muted: #56616d;
            --coea-border: #cbd0d5;
            --coea-shadow: rgba(20, 32, 44, .09);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: var(--coea-bg);
            color: var(--coea-text);
            transition: background-color .25s ease, color .25s ease;
        }

        .main {
            background: linear-gradient(180deg, var(--coea-bg) 0%, var(--coea-surface) 58%, color-mix(in srgb, var(--coea-bg) 78%, var(--coea-light-orange) 22%) 100%);
        }

        .main .border,
        .main .border.shadow,
        .welcome-copy,
        .welcome-action,
        .college-history-card {
            background-color: var(--coea-surface);
            border-color: var(--coea-border) !important;
            box-shadow: 0 12px 32px var(--coea-shadow) !important;
        }

        .welcome-copy h1,
        .college-history-heading h2 {
            color: var(--coea-text);
        }

        .welcome-copy>p,
        .welcome-copy .welcome-thanks,
        .welcome-action,
        .history-intro p,
        .history-milestone p,
        .college-history-text {
            color: var(--coea-muted);
        }

        .welcome-action {
            background: var(--coea-surface-soft);
        }

        .welcome-action:hover,
        .welcome-action:focus-visible {
            color: var(--coea-text);
        }

        .welcome-action-primary,
        .welcome-action-primary:hover,
        .welcome-action-primary:focus-visible {
            color: #fff;
            background: linear-gradient(135deg, var(--coea-orange), var(--coea-light-orange));
        }

        .history-intro {
            border-bottom-color: var(--coea-border);
        }

        .college-history-image-wrap {
            background: var(--coea-surface-soft);
        }

        #topNotchersCarousel .carousel-inner,
        #topNotchersCarousel img {
            background: var(--coea-surface-soft);
        }

        .main {
            max-width: 100%;
        }

        .main>img {
            display: block;
            width: 100%;
            max-height: 420px;
            object-fit: cover;
        }

        .banner {
            width: min(1320px, 100%);
            padding: clamp(14px, 3vw, 36px);
            row-gap: 22px;
        }

        .banner img {
            border-radius: 12px;
        }

        .banner .border,
        .main .border.shadow {
            border: 1px solid #e9edf1 !important;
            border-radius: 16px;
            box-shadow: 0 12px 32px rgba(28, 39, 49, .08) !important;
            background: #fff;
        }

        h4,
        h5 {
            letter-spacing: .1px;
        }

        .main h4.text-center.text-white {
            width: 100%;
            padding: 15px 12px;
            border-radius: 0;
            letter-spacing: .6px;
        }

        .main p {
            line-height: 1.85;
        }

        .main .btn {
            border-radius: 10px;
            font-weight: 600;
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .main .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(198, 40, 40, .16);
        }

        .main video {
            width: 100%;
            max-height: 380px;
            object-fit: contain;
            border-radius: 10px;
            background: #171717;
        }

        .video-stack {
            max-width: 1120px;
        }

        .video-card {
            width: 100%;
            border-bottom: 5px solid var(--coea-orange) !important;
        }

        .video-card video {
            width: 100%;
            max-height: 560px;
        }

        .welcome-action .action-icon>.bi {
            font-size: 1.35rem;
            color: var(--coea-orange);
        }

        .welcome-action-primary .action-icon>.bi {
            color: #fff;
        }

        .image-container {
            border-radius: 16px;
        }

        .overlay {
            background: linear-gradient(135deg, rgba(198, 40, 40, .78), rgba(20, 20, 20, .82));
        }

        #topNotchersCarousel {
            overflow: hidden;
            border-radius: 12px;
        }

        #topNotchersCarousel img {
            max-height: 560px;
            object-fit: contain;
            background: #f6f7f8;
        }

        @media (max-width:767px) {
            .banner {
                padding: 14px;
            }

            .welcome-copy {
                padding: 24px 18px 20px 22px;
                border-radius: 17px;
            }

            .welcome-actions {
                grid-template-columns: 1fr;
            }

            .welcome-action {
                padding: 12px;
            }

            .history-milestone {
                grid-template-columns: 1fr;
                gap: 7px;
            }

            .history-year {
                justify-self: start;
            }

            .history-image-caption {
                font-size: .8rem;
            }

            .main p {
                font-size: .96rem !important;
                letter-spacing: .1px !important;
            }

            .main .col-md-5,
            .main .col-lg-5 {
                margin-bottom: 16px;
            }
        }


        /* College-wide accreditor welcome panel and redesigned link cards */
        .welcome-accreditors {
            padding: clamp(10px, 2vw, 24px) 0 12px;
        }

        .welcome-copy {
            max-width: 1120px;
            margin: 0 auto;
            padding: clamp(22px, 4vw, 48px);
            background: #f5f6f7;
            border: 1px solid #d7dadd;
            border-radius: 24px;
            box-shadow: 0 18px 45px rgba(42, 35, 31, .08);
            position: relative;
            overflow: hidden;
        }

        .welcome-coea-logo {
            display: block;
            width: clamp(76px, 10vw, 112px);
            height: auto;
            object-fit: contain;
            margin: 0 0 18px;
        }

        .welcome-copy::before {
            content: "";
            position: absolute;
            inset: 0 auto 0 0;
            width: 7px;
            background: linear-gradient(180deg, var(--coea-orange), var(--coea-light-orange));
        }

        .welcome-eyebrow {
            display: inline-flex;
            align-items: center;
            color: var(--coea-orange);
            font-size: .82rem;
            font-weight: 800;
            letter-spacing: .08em;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .welcome-copy h1 {
            font-size: clamp(1.9rem, 4vw, 3.1rem);
            line-height: 1.12;
            font-weight: 850;
            color: #202832;
            margin: 0 0 18px;
        }

        .welcome-copy>p {
            max-width: 900px;
            color: #505963;
            font-size: clamp(.98rem, 1.3vw, 1.1rem) !important;
            line-height: 1.85;
            margin-bottom: 12px;
        }

        .welcome-copy .welcome-thanks {
            font-weight: 700;
            color: #343b43;
            margin-bottom: 24px;
        }

        .welcome-actions {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
        }

        .welcome-action {
            min-width: 0;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px;
            border: 1px solid #e9edf1;
            border-radius: 15px;
            text-decoration: none;
            color: #27313b;
            background: #eceff1;
            transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
        }

        .welcome-action:hover,
        .welcome-action:focus-visible {
            color: #202832;
            transform: translateY(-3px);
            border-color: rgba(198, 40, 40, .45);
            box-shadow: 0 12px 24px rgba(198, 40, 40, .12);
        }

        .welcome-action-primary {
            color: #fff;
            border-color: transparent;
            background: linear-gradient(135deg, var(--coea-orange), var(--coea-light-orange));
        }

        .welcome-action-primary:hover,
        .welcome-action-primary:focus-visible {
            color: #fff;
            border-color: transparent;
            box-shadow: 0 12px 26px rgba(198, 40, 40, .25);
        }

        .action-icon {
            width: 44px;
            height: 44px;
            flex: 0 0 44px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: rgba(198, 40, 40, .09);
        }

        .welcome-action-primary .action-icon {
            background: rgba(255, 255, 255, .2);
        }

        .action-icon img {
            width: 27px;
            height: 27px;
            object-fit: contain;
        }

        .action-copy {
            display: flex;
            flex-direction: column;
            gap: 3px;
            min-width: 0;
        }

        .action-copy strong {
            font-size: .91rem;
            line-height: 1.35;
        }

        .action-copy small {
            font-size: .74rem;
            line-height: 1.4;
            opacity: .78;
        }

        .welcome-action>.bi {
            font-size: 1rem;
            flex: 0 0 auto;
        }

        .history-image-wrap {
            position: relative;
        }

        .history-image-caption {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 14px 16px;
            color: #fff;
            font-size: .88rem;
            font-weight: 700;
            background: linear-gradient(transparent, rgba(18, 25, 32, .82));
        }

        .history-intro {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            padding-bottom: 18px;
            border-bottom: 1px solid #edf0f2;
            margin-bottom: 18px;
        }

        .history-intro p {
            margin: 0;
            color: #3c4248;
            font-size: clamp(.92rem, 1.1vw, 1rem);
            line-height: 1.85;
        }

        .history-dropcap {
            flex: 0 0 auto;
            font-size: 3.2rem;
            line-height: .95;
            font-weight: 850;
            color: var(--coea-orange);
        }

        .history-timeline {
            display: grid;
            gap: 14px;
        }

        .history-milestone {
            display: grid;
            grid-template-columns: 105px minmax(0, 1fr);
            gap: 14px;
            align-items: start;
        }

        .history-year {
            display: inline-flex;
            justify-content: center;
            padding: 7px 10px;
            border-radius: 9px;
            color: #fff;
            font-size: .78rem;
            font-weight: 800;
            text-align: center;
            background: linear-gradient(135deg, var(--coea-orange), var(--coea-light-orange));
        }

        .history-milestone p {
            margin: 2px 0 0;
            color: #4a525a;
            font-size: .9rem;
            line-height: 1.75;
        }


        /* Responsive college-wide program buttons */
        .coea-programs-section {
            width: min(1180px, calc(100% - 32px));
            margin: clamp(28px, 5vw, 64px) auto;
        }

        .coea-programs-heading {
            text-align: center;
            max-width: 760px;
            margin: 0 auto 24px;
        }

        .programs-kicker {
            display: inline-block;
            color: var(--coea-orange);
            font-size: .8rem;
            font-weight: 800;
            letter-spacing: .1em;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        .coea-programs-heading h2 {
            color: var(--coea-text);
            font-size: clamp(1.65rem, 3vw, 2.4rem);
            font-weight: 850;
            margin-bottom: 10px;
        }

        .coea-programs-heading p {
            color: var(--coea-muted);
            line-height: 1.7;
            margin: 0;
        }

        .coea-program-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
        }

        .coea-program-card {
            min-width: 0;
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 18px;
            border: 1px solid var(--coea-border);
            border-radius: 17px;
            background: var(--coea-surface);
            color: var(--coea-text);
            text-decoration: none;
            box-shadow: 0 8px 24px var(--coea-shadow);
            transition: transform .2s ease, border-color .2s ease, box-shadow .2s ease;
        }

        .coea-program-card:hover,
        .coea-program-card:focus-visible {
            color: var(--coea-text);
            transform: translateY(-3px);
            border-color: var(--coea-light-orange);
            box-shadow: 0 14px 28px rgba(198, 40, 40, .14);
            outline: none;
        }

        .coea-program-card-featured {
            border-color: rgba(198, 40, 40, .5);
        }

        .program-icon {
            display: grid;
            place-items: center;
            flex: 0 0 48px;
            width: 48px;
            height: 48px;
            border-radius: 14px;
            background: linear-gradient(135deg, rgba(198, 40, 40, .13), rgba(255, 138, 31, .22));
            color: var(--coea-orange);
            font-size: 1.35rem;
        }

        .program-card-copy {
            display: flex;
            flex-direction: column;
            gap: 4px;
            min-width: 0;
        }

        .program-card-copy strong {
            font-size: 1rem;
            font-weight: 850;
        }

        .program-card-copy small {
            color: var(--coea-muted);
            font-size: .77rem;
            line-height: 1.45;
        }

        .program-arrow {
            margin-left: auto;
            color: var(--coea-orange);
            flex: 0 0 auto;
        }

        @media (max-width: 900px) {
            .coea-program-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 575.98px) {
            .coea-programs-section {
                width: calc(100% - 24px);
            }

            .coea-program-grid {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .coea-program-card {
                padding: 14px;
            }

            .program-icon {
                flex-basis: 44px;
                width: 44px;
                height: 44px;
            }
        }

        /* College History — styled to match the accreditation history layout */
        .college-history-section {
            padding: clamp(22px, 4vw, 48px) 0;
        }

        .college-history-wrapper {
            width: min(1180px, calc(100% - 32px));
            margin: 0 auto;
        }

        .college-history-heading {
            max-width: 820px;
            text-align: center;
            margin: 0 auto 26px;
            padding: 0 12px;
        }

        .college-history-heading .history-kicker {
            display: inline-block;
            color: var(--coea-orange);
            font-size: .8rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: .12em;
            margin-bottom: 8px;
        }

        .college-history-heading h2 {
            color: var(--coea-text);
            font-size: clamp(1.8rem, 3.4vw, 2.55rem);
            font-weight: 850;
            margin: 0 0 10px;
        }

        .college-history-heading h2 span {
            color: var(--coea-orange);
        }

        .college-history-heading p {
            max-width: 760px;
            margin: 0 auto;
            color: var(--coea-muted);
            font-size: clamp(.92rem, 1.5vw, 1.02rem);
            line-height: 1.75;
        }

        .college-history-card {
            display: block;
            padding: clamp(16px, 3vw, 30px);
            border: 1px solid var(--coea-border);
            border-radius: 22px;
            background: var(--coea-surface);
            box-shadow: 0 14px 38px var(--coea-shadow);
        }

        .history-intro {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 0 0 22px;
            margin: 0 0 24px;
            border-bottom: 1px solid var(--coea-border);
        }

        .history-intro-icon {
            flex: 0 0 52px;
            width: 52px;
            height: 52px;
            display: grid;
            place-items: center;
            border-radius: 15px;
            color: var(--coea-orange);
            background: rgba(198, 40, 40, .11);
            font-size: 1.4rem;
        }

        .history-intro h3 {
            margin: 0 0 8px;
            color: var(--coea-text);
            font-size: clamp(1.05rem, 2vw, 1.25rem);
            font-weight: 800;
        }

        .history-intro p {
            margin: 0;
            color: var(--coea-muted);
            font-size: clamp(.92rem, 1.1vw, 1rem);
            line-height: 1.85;
        }

        .college-history-content {
            display: grid;
            grid-template-columns: minmax(0, .85fr) minmax(0, 1.3fr);
            gap: clamp(22px, 3.5vw, 38px);
            align-items: start;
        }

        .college-history-image-wrap {
            position: relative;
            min-width: 0;
            overflow: hidden;
            border-radius: 17px;
            background: var(--coea-surface-soft);
            box-shadow: 0 8px 24px var(--coea-shadow);
        }

        .college-history-image {
            display: block;
            width: 100%;
            height: clamp(280px, 35vw, 470px);
            object-fit: cover;
        }

        .history-image-caption {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 24px 16px 15px;
            color: #fff;
            font-size: .88rem;
            font-weight: 750;
            background: linear-gradient(transparent, rgba(18, 25, 32, .86));
        }

        .history-timeline {
            display: grid;
            gap: 0;
        }

        .history-item {
            position: relative;
            display: grid;
            grid-template-columns: 94px minmax(0, 1fr);
            gap: 15px;
            padding: 0 0 22px;
        }

        .history-item:not(:last-child)::after {
            content: "";
            position: absolute;
            left: 46px;
            top: 38px;
            bottom: 0;
            width: 2px;
            background: linear-gradient(var(--coea-light-orange), var(--coea-border));
        }

        .history-year {
            position: relative;
            z-index: 1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 34px;
            padding: 7px 9px;
            border-radius: 10px;
            color: #fff;
            font-size: .76rem;
            font-weight: 850;
            text-align: center;
            background: linear-gradient(135deg, var(--coea-orange), var(--coea-light-orange));
            box-shadow: 0 5px 12px rgba(198, 40, 40, .16);
        }

        .history-item h3 {
            margin: 2px 0 7px;
            color: var(--coea-text);
            font-size: clamp(.98rem, 1.5vw, 1.08rem);
            font-weight: 800;
            line-height: 1.4;
        }

        .history-item h3 .bi {
            color: var(--coea-orange);
        }

        .history-item p {
            margin: 0;
            color: var(--coea-muted);
            font-size: .91rem;
            line-height: 1.8;
        }

        .history-facts {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            margin-top: 10px;
        }

        .history-fact {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            min-width: 0;
            padding: 16px;
            border: 1px solid var(--coea-border);
            border-radius: 15px;
            background: var(--coea-surface-soft);
        }

        .history-fact>i {
            flex: 0 0 auto;
            color: var(--coea-orange);
            font-size: 1.25rem;
        }

        .history-fact div {
            display: flex;
            flex-direction: column;
            gap: 4px;
            min-width: 0;
        }

        .history-fact strong {
            color: var(--coea-text);
            font-size: .9rem;
            font-weight: 800;
        }

        .history-fact span {
            color: var(--coea-muted);
            font-size: .82rem;
            line-height: 1.6;
        }

        .history-closing {
            margin-top: 18px;
            padding: clamp(18px, 3vw, 26px);
            border-radius: 17px;
            text-align: center;
            background: linear-gradient(135deg, rgba(198, 40, 40, .09), rgba(255, 138, 31, .15));
            border: 1px solid rgba(198, 40, 40, .17);
        }

        .history-closing>i {
            display: inline-grid;
            place-items: center;
            width: 46px;
            height: 46px;
            margin-bottom: 9px;
            border-radius: 14px;
            color: var(--coea-orange);
            background: var(--coea-surface);
            font-size: 1.25rem;
        }

        .history-closing h3 {
            color: var(--coea-text);
            font-size: 1.08rem;
            font-weight: 850;
            margin: 0 0 7px;
        }

        .history-closing p {
            max-width: 780px;
            margin: 0 auto;
            color: var(--coea-muted);
            font-size: .92rem;
            line-height: 1.8;
        }

        .topnotchers-card {
            width: min(1000px, calc(100% - 24px));
            padding: clamp(10px, 2vw, 20px) !important;
            margin-bottom: 36px;
        }

        #topNotchersCarousel {
            width: 100%;
        }

        #topNotchersCarousel .carousel-inner {
            background: #f6f7f8;
        }

        #topNotchersCarousel img {
            width: 100%;
            height: clamp(360px, 58vw, 680px);
            max-height: 680px;
            object-fit: contain;
            background: #f6f7f8;
        }

        #topNotchersCarousel .carousel-control-prev,
        #topNotchersCarousel .carousel-control-next {
            width: 9%;
        }

        #topNotchersCarousel .carousel-control-prev-icon,
        #topNotchersCarousel .carousel-control-next-icon {
            filter: drop-shadow(0 1px 3px rgba(0, 0, 0, .65));
        }

        @media (max-width: 767.98px) {
            .college-history-wrapper {
                width: calc(100% - 24px);
            }

            .college-history-content {
                grid-template-columns: 1fr;
            }

            .college-history-image {
                height: clamp(240px, 65vw, 360px);
                object-fit: cover;
            }

            .history-facts {
                grid-template-columns: 1fr;
            }

            .topnotchers-card {
                width: calc(100% - 20px);
            }

            #topNotchersCarousel img {
                height: clamp(300px, 90vw, 520px);
            }
        }

        @media (max-width: 480px) {
            .college-history-wrapper {
                width: calc(100% - 20px);
            }

            .college-history-card {
                padding: 14px;
                border-radius: 16px;
            }

            .history-intro {
                gap: 11px;
            }

            .history-intro-icon {
                flex-basis: 42px;
                width: 42px;
                height: 42px;
                border-radius: 12px;
            }

            .history-item {
                grid-template-columns: 78px minmax(0, 1fr);
                gap: 10px;
            }

            .history-item:not(:last-child)::after {
                left: 38px;
            }

            .history-year {
                font-size: .68rem;
                padding: 7px 5px;
            }

            .history-item p {
                font-size: .86rem;
            }

            #topNotchersCarousel img {
                height: 300px;
            }
        }


        .welcome-action .action-icon>.bi {
            font-size: 1.35rem;
            color: var(--coea-orange);
        }

        .welcome-action-primary .action-icon>.bi {
            color: #fff;
        }

        .coea-coming-dialog {
            width: min(420px, calc(100% - 32px));
            border: 1px solid var(--coea-border);
            border-radius: 22px;
            padding: 30px 26px 24px;
            color: var(--coea-text);
            background: var(--coea-surface);
            box-shadow: 0 24px 80px rgba(0, 0, 0, .28);
            text-align: center;
        }

        .coea-coming-dialog::backdrop {
            background: rgba(13, 20, 28, .62);
            backdrop-filter: blur(3px);
        }

        .coming-soon-icon {
            width: 64px;
            height: 64px;
            display: grid;
            place-items: center;
            margin: 0 auto 16px;
            border-radius: 20px;
            background: rgba(198, 40, 40, .12);
            color: var(--coea-orange);
            font-size: 1.8rem;
        }

        .coea-coming-dialog h2 {
            margin: 0 0 10px;
            font-size: 1.55rem;
            font-weight: 850;
        }

        .coea-coming-dialog p {
            color: var(--coea-muted);
            line-height: 1.7;
            margin: 0 0 22px;
        }

        .coming-soon-close {
            border: 0;
            border-radius: 12px;
            padding: 11px 28px;
            color: #fff;
            background: linear-gradient(135deg, var(--coea-orange), var(--coea-light-orange));
            font-weight: 750;
        }

        /* Refined two-column welcome and media presentation */
        .welcome-copy {
            max-width: 1240px;
            padding: clamp(22px, 3.4vw, 44px);
            border: 0 !important;
            outline: 0;
        }

        .welcome-layout {
            display: grid;
            grid-template-columns: minmax(180px, .72fr) minmax(0, 2fr);
            gap: clamp(24px, 4vw, 52px);
            align-items: center;
        }

        .welcome-logo-column {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            min-width: 0;
        }

        .welcome-logo-frame {
            width: clamp(150px, 19vw, 245px);
            aspect-ratio: 1;
            display: grid;
            place-items: center;
            padding: clamp(15px, 2vw, 25px);
            border-radius: 28px;
            background: linear-gradient(145deg, #fff, #e8ebee);
            border: 1px solid #d7dce1;
            box-shadow: 0 16px 34px rgba(26, 37, 48, .12), inset 0 1px 0 #fff;
        }

        .welcome-coea-logo {
            width: 100%;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            margin: 0;
        }

        .welcome-logo-caption {
            margin-top: 14px;
            color: var(--coea-muted);
            font-size: .78rem;
            line-height: 1.65;
            font-weight: 700;
            letter-spacing: .03em;
        }

        .welcome-content-column {
            min-width: 0;
        }

        .welcome-content-column .welcome-actions {
            margin-top: 22px;
        }

        /* Responsive accreditation and external-link buttons */
        .welcome-actions {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
            width: 100%;
        }

        .welcome-action {
            min-width: 0;
            width: 100%;
            min-height: 78px;
            box-sizing: border-box;
            overflow-wrap: anywhere;
        }

        .welcome-action .action-copy {
            flex: 1 1 auto;
            min-width: 0;
        }

        .welcome-action .action-copy strong {
            overflow-wrap: anywhere;
        }

        .welcome-action .action-copy small {
            overflow-wrap: anywhere;
        }

        .welcome-action>.bi {
            margin-left: auto;
        }

        .video-stack {
            max-width: 1180px;
            margin: 18px auto 46px;
        }

        .video-stack>.row {
            row-gap: 24px !important;
        }

        .video-card {
            padding: clamp(16px, 2.5vw, 28px);
            border: 1px solid #d5dbe0 !important;
            border-bottom: 5px solid var(--coea-orange) !important;
            border-radius: 22px;
            background: linear-gradient(145deg, #fff, #f0f2f4) !important;
            box-shadow: 0 16px 38px rgba(26, 37, 48, .11) !important;
            overflow: hidden;
        }

        .video-card-heading {
            display: flex;
            align-items: center;
            gap: 15px;
            width: 100%;
            margin-bottom: 18px;
        }

        .video-card-icon {
            display: grid;
            place-items: center;
            flex: 0 0 52px;
            width: 52px;
            height: 52px;
            border-radius: 16px;
            color: #fff;
            font-size: 1.4rem;
            background: linear-gradient(135deg, var(--coea-orange), var(--coea-light-orange));
            box-shadow: 0 8px 18px rgba(198, 40, 40, .2);
        }

        .video-kicker {
            display: block;
            color: var(--coea-orange);
            font-size: .72rem;
            font-weight: 800;
            letter-spacing: .11em;
            text-transform: uppercase;
            margin-bottom: 3px;
        }

        .video-card-heading h2 {
            color: var(--coea-text);
            font-size: clamp(1.15rem, 2vw, 1.55rem);
            font-weight: 800;
            margin: 0 0 4px;
        }

        .video-card-heading p {
            margin: 0;
            color: var(--coea-muted);
            font-size: .88rem !important;
            line-height: 1.6;
        }

        .video-frame-wrap {
            position: relative;
            width: 100%;
            overflow: hidden;
            border-radius: 15px;
            background: #111820;
            box-shadow: 0 10px 26px rgba(12, 20, 28, .18);
        }

        .video-frame-wrap video {
            display: block;
            width: 100%;
            max-height: none;
            aspect-ratio: 16 / 9;
            object-fit: contain;
            border-radius: 15px;
            background: #111820;
        }

        .banner>div>img {
            width: 100%;
            max-height: 360px;
            object-fit: contain;
            padding: 8px;
            background: linear-gradient(145deg, #fff, #f0f2f4);
            border: 1px solid #dce1e5;
            border-radius: 18px;
            box-shadow: 0 12px 28px rgba(26, 37, 48, .09);
        }

        #topNotchersCarousel {
            background: #e9ecef;
            padding: 8px;
            border: 1px solid #d8dde2;
            box-shadow: 0 14px 34px rgba(26, 37, 48, .12);
        }

        #topNotchersCarousel img {
            border-radius: 9px;
        }

        @media (min-width: 768px) and (max-width: 1050px) {
            .welcome-actions {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .welcome-action {
                padding: 12px;
                gap: 9px;
            }

            .action-icon {
                width: 40px;
                height: 40px;
                flex-basis: 40px;
            }
        }

        @media (max-width: 767px) {
            .welcome-layout {
                grid-template-columns: 1fr;
                gap: 22px;
            }

            .welcome-actions {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
            }

            .welcome-action {
                padding: 11px;
                gap: 8px;
                min-height: 76px;
                border-radius: 12px;
            }

            .welcome-action .action-copy strong {
                font-size: .82rem;
            }

            .welcome-action .action-copy small {
                font-size: .68rem;
            }

            .welcome-action>.bi {
                display: none;
            }

            .action-icon {
                width: 36px;
                height: 36px;
                flex-basis: 36px;
                border-radius: 10px;
            }

            .action-icon img {
                width: 23px;
                height: 23px;
            }

            .welcome-logo-frame {
                width: 142px;
                border-radius: 22px;
            }

            .welcome-logo-caption {
                margin-top: 8px;
            }

            .welcome-content-column {
                text-align: left;
            }

            .video-card-heading {
                align-items: flex-start;
            }

            .video-card-icon {
                flex-basis: 44px;
                width: 44px;
                height: 44px;
                border-radius: 13px;
            }

            .video-card {
                border-radius: 17px;
            }
        }

        @media (max-width: 420px) {
            .welcome-actions {
                grid-template-columns: 1fr;
            }

            .welcome-action {
                min-height: 68px;
                padding: 12px;
            }

            .welcome-action>.bi {
                display: block;
            }

            .welcome-action .action-copy strong {
                font-size: .9rem;
            }

            .welcome-action .action-copy small {
                font-size: .74rem;
            }
        }


        /* Permanent dark-only COEA visual system */
        :root {
            color-scheme: dark;
            --coea-orange: #ff5a1f;
            --coea-light-orange: #ffad66;
            --coea-bg: #0a0d12;
            --coea-surface: #111720;
            --coea-surface-soft: #171f2a;
            --coea-text: #f3f5f8;
            --coea-muted: #aeb8c5;
            --coea-border: #2a3543;
            --coea-shadow: rgba(0, 0, 0, .34);
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            background: #0a0d12;
            scroll-padding-top: 84px;
        }

        body,
        .main {
            background: #0a0d12 !important;
            color: #f3f5f8 !important;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        p {
            color: #b6c0cd;
        }

        a {
            transition: color .2s ease, border-color .2s ease, background .2s ease, transform .2s ease, box-shadow .2s ease;
        }

        .main>img {
            display: block;
            width: 100%;
            max-height: 520px;
            object-fit: cover;
            border-bottom: 1px solid #2a3543;
        }

        .banner {
            width: min(1320px, 100%);
            padding: clamp(16px, 3vw, 38px);
            row-gap: 26px;
        }

        .banner>.col-lg-6 img {
            width: 100%;
            max-height: 360px;
            object-fit: contain;
            border-radius: 18px;
            background: #111720;
            padding: 10px;
            border: 1px solid #2a3543;
        }

        .welcome-copy,
        .college-history-card,
        .video-card,
        .topnotchers-card,
        .main .border,
        .main .border.shadow {
            color: #f3f5f8 !important;
            background: #111720 !important;
            border: 1px solid #2a3543 !important;
            border-radius: 22px !important;
            box-shadow: 0 22px 55px rgba(0, 0, 0, .25) !important;
        }

        .welcome-copy {
            overflow: hidden;
            padding: clamp(22px, 3vw, 42px) !important;
        }

        .welcome-copy::before {
            width: 5px !important;
            background: linear-gradient(180deg, #ff5a1f, #ffad75) !important;
        }

        .welcome-logo-frame {
            background: #f8fafc !important;
            border: 1px solid rgba(255, 255, 255, .18) !important;
            box-shadow: 0 14px 36px rgba(0, 0, 0, .25) !important;
        }

        .welcome-logo-caption,
        .welcome-eyebrow,
        .history-kicker,
        .video-kicker {
            color: #ffad66 !important;
        }

        .welcome-copy h1,
        .college-history-heading h2,
        .history-intro h3,
        .history-item h3,
        .history-closing h3,
        .video-card-heading h2,
        .main h2,
        .main h3,
        .main h4,
        .main h5 {
            color: #f6f7f9;
        }

        .welcome-copy h1 {
            font-size: clamp(2rem, 4vw, 3.3rem);
            font-weight: 800;
            letter-spacing: -.045em;
            line-height: 1.12;
        }

        .welcome-copy>p {
            color: #b6c0cd !important;
            max-width: 78ch;
        }

        .welcome-thanks {
            color: #f3f5f8 !important;
            font-weight: 600;
        }

        .welcome-actions {
            gap: 12px !important;
        }

        .welcome-action {
            min-height: 76px;
            color: #e8edf3 !important;
            background: #171f2a !important;
            border: 1px solid #2c3948 !important;
            border-radius: 15px !important;
            box-shadow: none !important;
        }

        .welcome-action:hover,
        .welcome-action:focus-visible {
            color: #fff !important;
            background: #202b38 !important;
            border-color: #ff7846 !important;
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(255, 90, 31, .12) !important;
        }

        .welcome-action .action-copy strong {
            color: #f5f7fa !important;
            font-weight: 700;
        }

        .welcome-action .action-copy small {
            color: #9eabba !important;
        }

        .action-icon {
            background: #26303d !important;
            color: #ffad66 !important;
        }

        .welcome-action-primary,
        .welcome-action-primary:hover,
        .welcome-action-primary:focus-visible {
            color: #fff !important;
            background: linear-gradient(135deg, #f4511e, #ff8a50) !important;
            border-color: transparent !important;
        }

        .welcome-action-primary .action-copy strong,
        .welcome-action-primary .action-copy small {
            color: #fff !important;
        }

        .wrapper hr {
            border: 0;
            height: 1px !important;
            width: min(900px, 80%) !important;
            background: #34404e !important;
            opacity: 1;
        }

        .video-stack {
            width: min(1120px, 100%);
            max-width: 1120px;
        }

        .video-card {
            padding: clamp(16px, 2.5vw, 28px) !important;
            border-bottom: 1px solid #34404e !important;
        }

        .video-card-heading {
            margin-bottom: 18px;
        }

        .video-card-heading h2 {
            font-weight: 750;
            letter-spacing: -.025em;
        }

        .video-card-heading p {
            margin-bottom: 0;
            color: #aeb8c5 !important;
        }

        .video-card-icon {
            background: linear-gradient(135deg, #f4511e, #ffad66) !important;
        }

        .video-frame-wrap {
            overflow: hidden;
            border: 1px solid #2a3543;
            border-radius: 16px;
            background: #05070a;
        }

        .video-card video {
            display: block;
            width: 100%;
            max-height: 600px;
            border-radius: 15px;
            background: #05070a;
        }

        .college-history-section {
            background: #0a0d12 !important;
            padding: clamp(38px, 6vw, 82px) 18px !important;
        }

        .college-history-wrapper {
            width: min(1240px, 100%);
            margin: 0 auto;
        }

        .college-history-heading {
            max-width: 820px;
            margin: 0 auto 28px;
            text-align: center;
        }

        .college-history-heading h2 {
            font-weight: 800;
            letter-spacing: -.04em;
            font-size: clamp(2rem, 4vw, 3.2rem);
        }

        .college-history-heading h2 span {
            color: #ff824b;
        }

        .college-history-heading p {
            color: #aeb8c5 !important;
        }

        .college-history-card {
            padding: clamp(18px, 3vw, 38px) !important;
        }

        .history-intro {
            border-bottom: 1px solid #2a3543 !important;
        }

        .history-intro-icon,
        .history-fact>i {
            color: #ff925c !important;
        }

        .history-intro p,
        .history-item p,
        .history-fact span,
        .history-closing p {
            color: #b1bdca !important;
        }

        .college-history-image-wrap {
            background: #171f2a !important;
            border: 1px solid #2a3543;
            border-radius: 18px;
            overflow: hidden;
        }

        .college-history-image {
            width: 100%;
            display: block;
            object-fit: cover;
        }

        .history-image-caption {
            color: #d7dee7 !important;
            background: #171f2a !important;
        }

        .history-item {
            border-color: #2b3745 !important;
        }

        .history-item h3 {
            font-weight: 700;
        }

        .history-year {
            background: linear-gradient(135deg, #f4511e, #ffad66) !important;
            color: white !important;
        }

        .history-item:not(:last-child)::after {
            background: linear-gradient(#ff824b, #2a3543) !important;
        }

        .history-fact {
            background: #171f2a !important;
            border: 1px solid #2a3543 !important;
            border-radius: 15px !important;
        }

        .history-fact strong {
            color: #f3f5f8 !important;
        }

        .history-closing {
            background: linear-gradient(135deg, #201a19, #171f2a) !important;
            border: 1px solid #563426 !important;
            border-radius: 17px !important;
        }

        .main h4.text-center.text-white {
            margin: 26px auto 20px !important;
            width: min(1240px, calc(100% - 32px));
            padding: 18px !important;
            border: 1px solid #5b3528;
            border-radius: 16px !important;
            background: linear-gradient(100deg, #201713, #151b23) !important;
            color: #ffad66 !important;
            font-size: 1.45rem;
            letter-spacing: .04em;
        }

        .topnotchers-card {
            max-width: min(1100px, calc(100% - 28px));
            padding: 14px !important;
            margin-bottom: 55px !important;
        }

        #topNotchersCarousel,
        #topNotchersCarousel .carousel-inner {
            overflow: hidden;
            border-radius: 15px;
            background: #111720 !important;
        }

        #topNotchersCarousel img {
            object-fit: contain;
            background: #111720 !important;
        }

        #topNotchersCarousel .carousel-control-prev,
        #topNotchersCarousel .carousel-control-next {
            width: 10%;
        }

        .coea-coming-dialog {
            color: #f3f5f8 !important;
            background: #111720 !important;
            border: 1px solid #364252 !important;
            border-radius: 22px !important;
            box-shadow: 0 25px 90px rgba(0, 0, 0, .6);
        }

        .coea-coming-dialog::backdrop {
            background: rgba(1, 4, 9, .78);
            backdrop-filter: blur(5px);
        }

        .coea-coming-dialog p {
            color: #b6c0cd !important;
        }

        .coming-soon-close {
            background: linear-gradient(135deg, #f4511e, #ffad66) !important;
        }

        .main .btn:not(.carousel-control-prev):not(.carousel-control-next) {
            color: #fff;
            background: #f4511e;
            border-color: #f4511e;
        }

        .main .btn:hover {
            box-shadow: 0 10px 25px rgba(255, 90, 31, .2) !important;
        }

        /* Make common header/nav patterns dark, including the separately included header file. */
        header,
        nav,
        .navbar,
        .navbar-expand,
        .navbar-collapse,
        .dropdown-menu,
        .offcanvas,
        .topbar,
        .header,
        .coea-header,
        .navbar-nav {
            background-color: #0d1219 !important;
        }

        header,
        nav,
        .navbar,
        .topbar,
        .header,
        .coea-header {
            border-color: #27313e !important;
        }

        .navbar .nav-link,
        nav a,
        header a,
        .navbar-brand,
        .navbar-toggler {
            color: #e9eef5 !important;
        }

        .navbar .nav-link:hover,
        nav a:hover,
        header a:hover {
            color: #ffad66 !important;
        }

        .dropdown-menu {
            border: 1px solid #2a3543 !important;
        }

        .dropdown-item {
            color: #e9eef5 !important;
        }

        .dropdown-item:hover,
        .dropdown-item:focus {
            background: #202b38 !important;
            color: #ffad66 !important;
        }

        footer,
        .footer {
            background: #0d1219 !important;
            color: #b6c0cd !important;
            border-color: #27313e !important;
        }

        @media (max-width: 767px) {
            .main>img {
                max-height: 280px;
                object-fit: cover;
            }

            .banner {
                padding: 14px;
            }

            .welcome-copy {
                border-radius: 18px !important;
            }

            .college-history-section {
                padding-left: 12px !important;
                padding-right: 12px !important;
            }

            .college-history-card {
                border-radius: 18px !important;
            }

            .history-item {
                gap: 12px;
            }
        }

        @media (prefers-color-scheme: light) {

            html,
            body,
            .main,
            .college-history-section {
                background: #0a0d12 !important;
                color: #f3f5f8 !important;
            }
        }


        /* Final visual direction: clean white surfaces with soft orange gradients */
        :root {
            --coea-bg: #ffffff !important;
            --coea-surface: #ffffff !important;
            --coea-surface-soft: #fff7f2 !important;
            --coea-text: #202832 !important;
            --coea-muted: #586473 !important;
            --coea-border: #e8e0db !important;
            --coea-shadow: rgba(53, 39, 30, .09) !important;
        }

        html,
        body {
            background: #fff !important;
            color: #202832 !important;
        }

        body {
            background-image: linear-gradient(135deg, #ffffff 0%, #fffaf7 45%, #fff0e6 100%) !important;
        }

        .main,
        main,
        .college-history-section {
            background: linear-gradient(180deg, #fff 0%, #fffaf7 58%, #fff0e6 100%) !important;
            color: #202832 !important;
        }

        .main .border,
        .main .border.shadow,
        .welcome-copy,
        .welcome-action,
        .college-history-card,
        .history-fact,
        .video-card,
        .banner .border,
        .main .border.shadow {
            background: #fff !important;
            color: #202832 !important;
            border-color: #eadfd7 !important;
            box-shadow: 0 14px 36px rgba(58, 39, 27, .08) !important;
        }

        .welcome-copy {
            background: linear-gradient(135deg, #fff 0%, #fffaf7 68%, #fff0e6 100%) !important;
        }

        .welcome-copy h1,
        .welcome-copy h2,
        .welcome-copy h3,
        .video-card-heading h2,
        .college-history-heading h2,
        .history-item h3,
        .history-fact strong,
        .main h1,
        .main h2,
        .main h3,
        .main h4,
        .main h5 {
            color: #202832 !important;
        }

        .welcome-copy>p,
        .welcome-copy .welcome-thanks,
        .welcome-action,
        .history-intro p,
        .history-milestone p,
        .college-history-text,
        .history-fact p,
        .video-card-heading p,
        .welcome-logo-caption {
            color: #586473 !important;
        }

        .welcome-action {
            background: linear-gradient(135deg, #fff 0%, #fff6f0 100%) !important;
        }

        .welcome-action:hover,
        .welcome-action:focus-visible {
            color: #202832 !important;
            border-color: #ffad66 !important;
        }

        .history-intro {
            border-bottom-color: #eadfd7 !important;
        }

        .college-history-image-wrap,
        #topNotchersCarousel,
        #topNotchersCarousel .carousel-inner,
        #topNotchersCarousel img {
            background: #fff8f3 !important;
        }

        .history-fact {
            background: linear-gradient(135deg, #fff 0%, #fff5ee 100%) !important;
        }

        .history-closing {
            background: linear-gradient(120deg, #fff0e6 0%, #fff 100%) !important;
            border-color: #f4d2bf !important;
        }

        .main h4.text-center.text-white {
            background: linear-gradient(100deg, #fff0e6, #ffffff 72%) !important;
            color: #d94308 !important;
            border: 1px solid #f1d7c8 !important;
        }

        .topnotchers-card {
            background: transparent !important;
        }

        .coea-coming-dialog {
            color: #202832 !important;
            background: #fff !important;
            border-color: #eadfd7 !important;
        }

        .coea-coming-dialog p {
            color: #586473 !important;
        }

        header,
        nav,
        .navbar,
        .navbar-expand,
        .navbar-collapse,
        .dropdown-menu,
        .offcanvas,
        .topbar,
        .header,
        .coea-header,
        .navbar-nav {
            background: linear-gradient(100deg, #ffffff 0%, #fff8f3 100%) !important;
        }

        header,
        nav,
        .navbar,
        .topbar,
        .header,
        .coea-header {
            border-color: #eadfd7 !important;
        }

        .navbar .nav-link,
        nav a,
        header a,
        .navbar-brand,
        .navbar-toggler,
        .dropdown-item {
            color: #27313b !important;
        }

        .navbar .nav-link:hover,
        nav a:hover,
        header a:hover,
        .dropdown-item:hover,
        .dropdown-item:focus {
            color: #c62828 !important;
            background: #fff0e6 !important;
        }

        .dropdown-menu {
            border: 1px solid #eadfd7 !important;
            box-shadow: 0 12px 30px rgba(53, 39, 30, .1) !important;
        }

        footer,
        .footer {
            background: linear-gradient(110deg, #fff3eb 0%, #ffffff 100%) !important;
            color: #586473 !important;
            border-color: #eadfd7 !important;
        }

        @media (prefers-color-scheme: dark) {

            html,
            body,
            .main,
            .college-history-section {
                background: #fff !important;
                color: #202832 !important;
            }
        }

        /* Final requested theme: white surfaces with subtle orange gradients */
        :root {
            color-scheme: light;
            --coea-orange: #ff4c01;
            --coea-light-orange: #FE904D;
        }

        html {
            background: #fff !important;
            color-scheme: light !important;
        }

        body,
        .main,
        .college-history-section {
            background: linear-gradient(180deg, #ffffff 0%, #fffaf7 58%, #fff0e6 100%) !important;
            color: #202832 !important;
        }

        p,
        .welcome-copy>p,
        .welcome-copy .welcome-thanks,
        .history-intro p,
        .history-milestone p,
        .college-history-text {
            color: #56616d !important;
        }

        .welcome-copy,
        .college-history-card,
        .video-card,
        .topnotchers-card,
        .main .border,
        .main .border.shadow,
        .history-card,
        .history-facts,
        .history-intro,
        .history-item,
        .history-closing {
            color: #202832 !important;
            background: linear-gradient(145deg, #ffffff 0%, #fffaf7 100%) !important;
            border-color: #eadfd7 !important;
            box-shadow: 0 14px 36px rgba(53, 39, 30, .08) !important;
        }

        .welcome-copy h1,
        .college-history-heading h2,
        .history-intro h3,
        .history-item h3,
        .history-closing h3,
        .video-card-heading h2,
        .main h2,
        .main h3,
        .main h4,
        .main h5 {
            color: #202832 !important;
        }

        .welcome-action {
            color: #27313b !important;
            background: linear-gradient(135deg, #fff7f1, #ffffff) !important;
            border-color: #eadfd7 !important;
        }

        .welcome-action:hover,
        .welcome-action:focus-visible {
            background: #fff0e6 !important;
            color: #c62828 !important;
        }

        .welcome-logo-frame,
        .banner>.col-lg-6 img,
        .banner>div>img {
            background: linear-gradient(145deg, #ffffff, #fff0e6) !important;
            border-color: #eadfd7 !important;
        }

        .video-frame-wrap,
        .video-frame-wrap video,
        .main video {
            background: #f2f4f6 !important;
        }

        /* Responsive YouTube institutional video */
        .youtube-frame-wrap {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            background: #111;
        }

        .youtube-frame-wrap iframe {
            position: absolute;
            inset: 0;
            display: block;
            width: 100%;
            height: 100%;
            border: 0;
            border-radius: 15px;
        }

        .coea-coming-dialog {
            color: #202832 !important;
            background: #fff !important;
            border-color: #eadfd7 !important;
        }

        .coea-coming-dialog p {
            color: #586473 !important;
        }

        header,
        nav,
        .navbar,
        .navbar-expand,
        .navbar-collapse,
        .dropdown-menu,
        .offcanvas,
        .topbar,
        .header,
        .coea-header,
        .navbar-nav {
            background: linear-gradient(100deg, #ffffff 0%, #fff8f3 100%) !important;
        }

        header,
        nav,
        .navbar,
        .topbar,
        .header,
        .coea-header {
            border-color: #eadfd7 !important;
        }

        .navbar .nav-link,
        nav a,
        header a,
        .navbar-brand,
        .navbar-toggler,
        .dropdown-item {
            color: #27313b !important;
        }

        .navbar .nav-link:hover,
        nav a:hover,
        header a:hover,
        .dropdown-item:hover,
        .dropdown-item:focus {
            color: #c62828 !important;
            background: #fff0e6 !important;
        }

        .dropdown-menu {
            border: 1px solid #eadfd7 !important;
            box-shadow: 0 12px 30px rgba(53, 39, 30, .1) !important;
        }

        footer,
        .footer {
            background: linear-gradient(110deg, #fff3eb 0%, #ffffff 100%) !important;
            color: #586473 !important;
            border-color: #eadfd7 !important;
        }

        @media (prefers-color-scheme: dark) {

            html,
            body,
            .main,
            .college-history-section {
                background: linear-gradient(180deg, #ffffff 0%, #fffaf7 58%, #fff0e6 100%) !important;
                color: #202832 !important;
            }
        }


        /* Mailchimp-inspired layout: bold editorial hero, spacious sections,
           rounded blocks, playful orange accents; all original content/assets retained. */
        :root {
            --coea-orange: #f45b27;
            --coea-light-orange: #ffb36b;
            --coea-cream: #fff8f1;
            --coea-ink: #241f1c;
            --coea-border: #eaded3;
            --coea-shadow: 0 18px 48px rgba(58, 38, 25, .09);
        }

        body {
            background: #fff;
            color: var(--coea-ink);
        }

        .main {
            background: linear-gradient(180deg, #fff 0%, #fffaf6 52%, #fff 100%);
        }

        .main>img {
            max-height: 500px;
            object-fit: cover;
        }

        .banner {
            width: min(1240px, 100%);
            padding: clamp(18px, 4vw, 56px) clamp(16px, 3vw, 38px);
            row-gap: clamp(24px, 4vw, 52px);
        }

        .banner>.col-lg-6 {
            align-items: stretch !important;
        }

        .banner>.col-lg-6 img {
            width: 100%;
            height: 100%;
            max-height: 330px;
            object-fit: cover;
            border-radius: 22px;
            box-shadow: var(--coea-shadow);
        }

        .welcome-accreditors {
            margin-top: clamp(10px, 2vw, 24px);
        }

        .welcome-copy {
            background: #fff !important;
            border: 1px solid var(--coea-border) !important;
            border-radius: 28px !important;
            box-shadow: var(--coea-shadow) !important;
            padding: clamp(26px, 5vw, 64px) !important;
        }

        .welcome-layout {
            gap: clamp(26px, 5vw, 66px) !important;
            align-items: center;
        }

        .welcome-logo-frame {
            border-radius: 26px !important;
            background: linear-gradient(145deg, #fff0df, #fffaf5) !important;
            border: 0 !important;
            padding: 24px !important;
        }

        .welcome-eyebrow,
        .history-kicker,
        .video-kicker {
            color: #b7431b !important;
            font-size: .78rem !important;
            font-weight: 800 !important;
            letter-spacing: .13em !important;
            text-transform: uppercase;
        }

        .welcome-copy h1 {
            color: var(--coea-ink) !important;
            font-size: clamp(2.5rem, 5.5vw, 5.25rem) !important;
            font-weight: 800 !important;
            line-height: .98 !important;
            letter-spacing: -.065em !important;
            margin: 16px 0 24px !important;
            max-width: 760px;
        }

        .welcome-copy>p {
            color: #5f554e !important;
            font-size: clamp(1rem, 1.25vw, 1.13rem) !important;
            line-height: 1.85 !important;
            max-width: 760px;
        }

        .welcome-thanks {
            font-weight: 700;
            color: var(--coea-ink) !important;
        }

        .welcome-actions {
            gap: 12px !important;
            margin-top: 28px !important;
        }

        .welcome-action {
            background: #fff !important;
            border: 1px solid var(--coea-border) !important;
            border-radius: 16px !important;
            box-shadow: none !important;
            padding: 15px 16px !important;
            color: var(--coea-ink) !important;
            transition: transform .2s ease, border-color .2s ease, box-shadow .2s ease;
        }

        .welcome-action:hover {
            transform: translateY(-3px);
            border-color: #f4a17b !important;
            box-shadow: 0 12px 24px rgba(244, 91, 39, .10) !important;
        }

        .welcome-action-primary,
        .welcome-action-primary:hover,
        .welcome-action-primary:focus-visible {
            background: var(--coea-orange) !important;
            border-color: var(--coea-orange) !important;
            color: #fff !important;
        }

        .welcome-action .action-copy strong {
            font-size: .95rem;
            font-weight: 750;
        }

        .welcome-action .action-copy small {
            color: inherit;
            opacity: .76;
        }

        .action-icon {
            border-radius: 12px !important;
            background: #fff0e7 !important;
        }

        .welcome-action-primary .action-icon {
            background: rgba(255, 255, 255, .17) !important;
        }

        .welcome-action-primary .action-icon img {
            background: transparent !important;
        }

        .wrapper {
            display: none !important;
        }

        .video-stack {
            max-width: 1240px !important;
            margin: 12px auto 64px !important;
            padding: 0 clamp(16px, 3vw, 38px);
        }

        .video-card {
            background: #fff !important;
            border: 1px solid var(--coea-border) !important;
            border-bottom: 1px solid var(--coea-border) !important;
            border-radius: 24px !important;
            padding: clamp(18px, 3vw, 30px) !important;
            box-shadow: var(--coea-shadow) !important;
            overflow: hidden;
        }

        .video-card-heading {
            margin-bottom: 20px !important;
        }

        .video-card-heading h2 {
            color: var(--coea-ink) !important;
            font-size: clamp(1.5rem, 2.6vw, 2.2rem) !important;
            font-weight: 800 !important;
            letter-spacing: -.04em;
        }

        .video-card-heading p {
            color: #71665e !important;
            margin-bottom: 0;
        }

        .video-card-icon {
            background: #fff0e7 !important;
            color: var(--coea-orange) !important;
            border-radius: 14px !important;
        }

        .video-frame-wrap {
            overflow: hidden;
            border-radius: 16px !important;
            background: #211b17 !important;
        }

        .college-history-section {
            background: linear-gradient(180deg, #fff8f1 0%, #fff 100%) !important;
            padding: clamp(52px, 8vw, 100px) 18px !important;
        }

        .college-history-wrapper {
            width: min(1240px, 100%) !important;
        }

        .college-history-heading {
            max-width: 780px;
            margin: 0 auto 36px !important;
            text-align: center;
        }

        .college-history-heading h2 {
            color: var(--coea-ink) !important;
            font-size: clamp(2.4rem, 5vw, 4.3rem) !important;
            font-weight: 800 !important;
            line-height: 1 !important;
            letter-spacing: -.06em !important;
        }

        .college-history-heading h2 span {
            color: var(--coea-orange) !important;
        }

        .college-history-heading p {
            color: #6a5e55 !important;
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .college-history-card,
        .history-card {
            background: #fff !important;
            border: 1px solid var(--coea-border) !important;
            border-radius: 26px !important;
            box-shadow: var(--coea-shadow) !important;
            padding: clamp(20px, 4vw, 42px) !important;
        }

        .history-intro {
            background: #fff4e9 !important;
            border: 0 !important;
            border-radius: 18px;
            padding: 24px !important;
            margin-bottom: 28px;
        }

        .history-intro h3,
        .history-item h3 {
            color: var(--coea-ink) !important;
            font-weight: 800 !important;
            letter-spacing: -.02em;
        }

        .history-intro p,
        .history-item p,
        .history-fact span {
            color: #6a5e55 !important;
            line-height: 1.8;
        }

        .history-year {
            background: var(--coea-orange) !important;
            color: #fff !important;
            border-radius: 999px !important;
            padding: 9px 15px !important;
            font-weight: 800 !important;
        }

        .history-item {
            border-color: #f0dfd2 !important;
        }

        .history-fact {
            background: #fffaf6 !important;
            border: 1px solid var(--coea-border) !important;
            border-radius: 16px !important;
            padding: 18px !important;
        }

        .history-fact>i {
            color: var(--coea-orange) !important;
        }

        .history-fact strong {
            color: var(--coea-ink) !important;
        }

        .image-container {
            border-radius: 22px !important;
        }

        .main .btn,
        .coming-soon-close {
            border-radius: 999px !important;
            background: var(--coea-orange);
            border-color: var(--coea-orange);
        }

        footer,
        .footer {
            background: #251f1b !important;
            color: #fff8f1 !important;
        }

        @media (min-width:992px) {
            .welcome-actions {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }

            .welcome-copy h1 {
                max-width: 720px;
            }
        }

        @media (max-width:767px) {
            .main>img {
                max-height: 260px;
            }

            .banner {
                padding: 16px !important;
            }

            .welcome-copy {
                padding: 25px 20px !important;
                border-radius: 22px !important;
            }

            .welcome-copy h1 {
                font-size: clamp(2.45rem, 12vw, 3.8rem) !important;
            }

            .welcome-actions {
                grid-template-columns: 1fr !important;
            }

            .video-card {
                border-radius: 18px !important;
            }

            .college-history-card,
            .history-card {
                border-radius: 20px !important;
            }
        }


        /* Professional institutional redesign — clean white, CSU orange, clear hierarchy */
        :root {
            --coea-orange: #e94b0c;
            --coea-light-orange: #ff8a45;
            --coea-bg: #ffffff;
            --coea-surface: #ffffff;
            --coea-surface-soft: #fff7f2;
            --coea-text: #20252b;
            --coea-muted: #626b75;
            --coea-border: #e7e9ec;
            --coea-shadow: rgba(25, 35, 45, .065);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #fff !important;
            color: var(--coea-text);
        }

        .main {
            background: #fff !important;
        }

        .main>.row {
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .banner {
            width: min(1240px, 100%);
            padding: clamp(18px, 3vw, 38px) clamp(12px, 2vw, 24px);
            row-gap: 26px;
        }

        .welcome-accreditors {
            padding: 8px 0 20px;
        }

        .welcome-copy {
            max-width: 1160px;
            padding: clamp(24px, 5vw, 58px);
            border: 1px solid #eceef0;
            border-radius: 22px;
            background: linear-gradient(135deg, #fff 0%, #fff 68%, #fff7f2 100%);
            box-shadow: 0 18px 55px rgba(24, 34, 44, .07) !important;
        }

        .welcome-copy::before {
            width: 6px;
        }

        .welcome-layout {
            display: grid;
            grid-template-columns: 150px minmax(0, 1fr);
            gap: clamp(22px, 4vw, 46px);
            align-items: start;
        }

        .welcome-logo-column {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding-top: 8px;
        }

        .welcome-logo-frame {
            display: grid;
            place-items: center;
            width: 124px;
            height: 124px;
            border-radius: 24px;
            border: 1px solid #f0e3dc;
            background: #fff;
            box-shadow: 0 10px 28px rgba(25, 35, 45, .06);
        }

        .welcome-coea-logo {
            width: 92px;
            max-height: 96px;
            object-fit: contain;
            margin: 0;
        }

        .welcome-logo-caption {
            display: block;
            margin-top: 13px;
            color: #69727b;
            font-size: .72rem;
            line-height: 1.65;
            font-weight: 600;
        }

        .welcome-eyebrow {
            color: var(--coea-orange);
            font-size: .76rem;
            letter-spacing: .13em;
            margin-bottom: 14px;
        }

        .welcome-copy h1 {
            font-size: clamp(2.1rem, 4.8vw, 3.6rem);
            letter-spacing: -.045em;
            line-height: 1.05;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .welcome-copy>p {
            max-width: 850px;
            color: #5b646e;
            font-size: 1rem !important;
            line-height: 1.9;
        }

        .welcome-copy .welcome-thanks {
            margin-top: 18px;
            color: #333a42;
            font-weight: 650;
        }

        .welcome-actions {
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
            margin-top: 28px;
        }

        .welcome-action {
            min-height: 82px;
            padding: 15px;
            border: 1px solid #e9ebed;
            border-radius: 13px;
            background: #fff;
            box-shadow: 0 4px 14px rgba(25, 35, 45, .025) !important;
        }

        .welcome-action:hover,
        .welcome-action:focus-visible {
            border-color: #f3a27e;
            box-shadow: 0 10px 24px rgba(233, 75, 12, .09) !important;
            transform: translateY(-2px);
        }

        .welcome-action-primary,
        .welcome-action-primary:hover,
        .welcome-action-primary:focus-visible {
            background: #e94b0c;
            color: #fff;
        }

        .action-icon {
            width: 42px;
            height: 42px;
            flex-basis: 42px;
            border-radius: 12px;
            background: #fff1e9;
        }

        .action-copy strong {
            font-size: .88rem;
            font-weight: 750;
        }

        .action-copy small {
            font-size: .72rem;
        }

        .wrapper {
            max-width: 1160px;
            margin: 0 auto;
        }

        .wrapper hr {
            width: 100% !important;
            height: 1px !important;
            border: 0;
            background: #e7e9ec !important;
            opacity: 1;
        }

        .video-stack {
            max-width: 1160px;
            padding: 0 12px;
        }

        .video-card {
            padding: clamp(18px, 3vw, 32px);
            border: 1px solid #e7e9ec !important;
            border-bottom: 3px solid var(--coea-orange) !important;
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 14px 38px rgba(25, 35, 45, .055);
        }

        .video-card-heading h2 {
            color: #20252b;
            font-size: clamp(1.45rem, 3vw, 2rem);
            font-weight: 800;
            letter-spacing: -.025em;
        }

        .video-card-heading p {
            color: #68717b;
        }

        .video-frame-wrap {
            overflow: hidden;
            border-radius: 13px;
            background: #111;
        }

        .main .border,
        .main .border.shadow,
        .college-history-card,
        .topnotchers-card {
            border: 1px solid #e7e9ec !important;
            border-radius: 18px;
            background: #fff !important;
            box-shadow: 0 12px 36px rgba(25, 35, 45, .055) !important;
        }

        .coea-programs-section {
            margin-top: 48px;
            margin-bottom: 48px;
        }

        .coea-programs-heading h2,
        .college-history-heading h2 {
            color: #20252b;
            letter-spacing: -.03em;
        }

        .coea-program-card {
            background: #fff;
            border-color: #e7e9ec;
            border-radius: 14px;
            box-shadow: 0 6px 20px rgba(25, 35, 45, .035);
        }

        .program-icon {
            border-radius: 12px;
        }

        .college-history-section {
            background: #fff;
        }

        .college-history-card {
            padding: clamp(18px, 3vw, 34px);
        }

        .history-fact {
            background: #fffaf7;
            border-color: #f0e4dd;
        }

        #topNotchersCarousel {
            border-radius: 12px;
            overflow: hidden;
        }

        #topNotchersCarousel .carousel-inner,
        #topNotchersCarousel img {
            background: #f8f8f8;
        }

        .main h4.text-center.text-white {
            background: #e94b0c !important;
        }

        .main .btn {
            border-radius: 9px;
        }

        @media(max-width:900px) {
            .welcome-actions {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .welcome-layout {
                grid-template-columns: 110px minmax(0, 1fr);
                gap: 24px;
            }

            .welcome-logo-frame {
                width: 100px;
                height: 100px;
            }

            .welcome-coea-logo {
                width: 76px;
            }
        }

        @media(max-width:600px) {
            .banner {
                padding: 12px 8px;
            }

            .welcome-copy {
                padding: 25px 19px 22px 24px;
                border-radius: 16px;
            }

            .welcome-layout {
                grid-template-columns: 1fr;
                gap: 22px;
            }

            .welcome-logo-column {
                align-items: flex-start;
                text-align: left;
                flex-direction: row;
                gap: 14px;
            }

            .welcome-logo-frame {
                width: 72px;
                height: 72px;
                border-radius: 15px;
                flex: 0 0 72px;
            }

            .welcome-coea-logo {
                width: 55px;
            }

            .welcome-logo-caption {
                margin-top: 0;
                align-self: center;
            }

            .welcome-copy h1 {
                font-size: 2.2rem;
            }

            .welcome-actions {
                grid-template-columns: 1fr;
                gap: 9px;
            }

            .welcome-action {
                min-height: 72px;
            }

            .video-card {
                padding: 16px;
            }
        }

        @media(prefers-reduced-motion:reduce) {

            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition: none !important;
            }
        }


        /* Banner, welcome-first two-column layout, and main page navigation */
        .coea-main-banner {
            display: block;
            width: 100%;
            height: auto;
            max-height: 300px;
            object-fit: cover;
            object-position: center;
        }

        .coea-top-nav {
            position: sticky;
            top: 0;
            z-index: 1020;
            background: rgba(255, 255, 255, .96);
            border-bottom: 1px solid #e4e7eb;
            box-shadow: 0 6px 20px rgba(24, 34, 44, .07);
            backdrop-filter: blur(12px);
        }

        .coea-top-nav-inner {
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 clamp(14px, 3vw, 32px);
            display: flex;
            align-items: center;
            gap: clamp(14px, 2.2vw, 30px);
            min-height: 58px;
            overflow-x: auto;
            scrollbar-width: thin;
        }

        .coea-top-nav a {
            flex: 0 0 auto;
            color: #313943;
            font-size: .82rem;
            font-weight: 650;
            text-decoration: none;
            padding: 18px 0 16px;
            border-bottom: 3px solid transparent;
            transition: color .2s ease, border-color .2s ease;
        }

        .coea-top-nav a:hover,
        .coea-top-nav a:focus-visible {
            color: var(--coea-orange);
            border-bottom-color: var(--coea-orange);
        }

        .coea-top-nav .coea-nav-brand {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1rem;
            font-weight: 850;
            color: var(--coea-orange);
            margin-right: auto;
        }

        .coea-top-nav .coea-nav-brand i {
            font-size: 1.15rem;
        }

        .banner-image-column {
            padding: clamp(8px, 1.4vw, 18px);
        }

        .coea-secondary-banner {
            display: block;
            width: 100%;
            height: clamp(150px, 20vw, 270px);
            object-fit: contain;
            padding: 8px;
            background: #fff;
            border: 1px solid #e2e6ea;
            border-radius: 16px;
            box-shadow: 0 12px 28px rgba(25, 36, 47, .08);
        }

        .welcome-layout {
            grid-template-columns: minmax(0, 1.7fr) minmax(180px, .8fr) !important;
        }

        .welcome-content-column {
            grid-column: 1;
            grid-row: 1;
        }

        .welcome-logo-column {
            grid-column: 2;
            grid-row: 1;
        }

        #institutional-video,
        #campus-tour,
        #college-history,
        #topnotchers,
        #accreditation-links {
            scroll-margin-top: 82px;
        }

        @media(max-width:767px) {
            .coea-main-banner {
                max-height: 180px;
            }

            .coea-top-nav-inner {
                gap: 18px;
                min-height: 52px;
            }

            .coea-top-nav a {
                font-size: .78rem;
                padding: 16px 0 13px;
            }

            .coea-top-nav .coea-nav-brand {
                margin-right: 0;
            }

            .welcome-layout {
                grid-template-columns: 1fr !important;
            }

            .welcome-content-column {
                grid-column: 1;
                grid-row: 2;
            }

            .welcome-logo-column {
                grid-column: 1;
                grid-row: 1;
            }

            .coea-secondary-banner {
                height: auto;
                max-height: 220px;
            }
        }

        /* Final COEA visual corrections: readable text, red-to-orange gradient, prominent logo */
        :root {
            --coea-orange: #c62828;
            --coea-light-orange: #ff8a1f;
            --coea-text: #202633;
            --coea-muted: #4b5563;
            --coea-border: #d8dde4;
            --coea-bg: #f7f8fa;
            --coea-surface: #ffffff;
            --coea-surface-soft: #f1f3f6;
        }

        .main {
            color: #202633 !important;
            background: linear-gradient(180deg, #ffffff 0%, #fffaf7 55%, #fff1e8 100%) !important;
        }

        .main p,
        .main li,
        .main label,
        .main .text-muted,
        .welcome-copy>p,
        .welcome-copy .welcome-thanks,
        .history-intro p,
        .history-item p,
        .history-fact span,
        .college-history-heading p,
        .coea-programs-heading p,
        .video-card-heading p,
        .welcome-logo-caption {
            color: #4b5563 !important;
        }

        .main h1,
        .main h2,
        .main h3,
        .main h4,
        .main h5,
        .welcome-copy h1,
        .college-history-heading h2,
        .coea-programs-heading h2,
        .video-card-heading h2,
        .history-intro h3,
        .history-item h3,
        .history-closing h3,
        .program-card-copy strong,
        .welcome-action strong {
            color: #202633 !important;
        }

        .welcome-copy,
        .welcome-action,
        .college-history-card,
        .coea-program-card,
        .video-card,
        .topnotchers-card {
            background-color: #fff !important;
            border-color: #e0e3e8 !important;
        }

        .welcome-copy::before,
        .history-year,
        .welcome-action-primary,
        .welcome-action-primary:hover,
        .welcome-action-primary:focus-visible,
        .video-card-icon,
        .coming-soon-close,
        .main h4.text-center.text-white {
            background: linear-gradient(120deg, #c62828 0%, #e64a19 52%, #ff8a1f 100%) !important;
            color: #fff !important;
        }

        .welcome-eyebrow,
        .programs-kicker,
        .college-history-heading .history-kicker,
        .video-kicker,
        .history-dropcap,
        .history-intro-icon,
        .history-item h3 .bi,
        .history-fact>i,
        .program-arrow,
        .welcome-action .action-icon>.bi {
            color: #c62828 !important;
        }

        .coea-top-nav {
            background: rgba(255, 255, 255, .98) !important;
            border-bottom: 1px solid #e4e7eb !important;
        }

        .coea-top-nav a,
        .coea-top-nav .coea-nav-brand {
            color: #293241 !important;
        }

        .coea-top-nav a:hover,
        .coea-top-nav a:focus-visible,
        .coea-top-nav .coea-nav-brand:hover {
            color: #c62828 !important;
            border-bottom-color: #ff8a1f !important;
        }

        .coea-top-nav .coea-nav-brand {
            background: linear-gradient(120deg, #c62828, #ff8a1f);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .welcome-layout {
            grid-template-columns: minmax(0, 1.55fr) minmax(260px, .85fr) !important;
            align-items: center;
        }

        .welcome-logo-column {
            min-width: 0;
            padding: 10px;
        }

        .welcome-logo-frame {
            width: clamp(230px, 26vw, 360px) !important;
            height: auto !important;
            aspect-ratio: 1 / 1;
            padding: clamp(18px, 3vw, 34px) !important;
            border-radius: 30px !important;
            background: linear-gradient(145deg, #fff 0%, #fff5ed 100%) !important;
            border: 2px solid rgba(198, 40, 40, .18) !important;
            box-shadow: 0 22px 48px rgba(115, 35, 28, .15), 0 0 0 8px rgba(255, 138, 31, .07) !important;
        }

        .welcome-coea-logo {
            width: 100% !important;
            max-width: 100% !important;
            height: auto !important;
            max-height: none !important;
            object-fit: contain;
        }

        .welcome-logo-caption {
            font-size: .9rem !important;
            font-weight: 750 !important;
            text-align: center;
        }

        .coea-main-banner {
            object-fit: contain !important;
            background: #fff !important;
        }

        .coea-secondary-banner {
            border-color: #e3e6eb !important;
        }

        .welcome-action {
            color: #293241 !important;
        }

        .welcome-action:hover,
        .welcome-action:focus-visible {
            border-color: rgba(198, 40, 40, .45) !important;
        }

        .welcome-action-primary strong,
        .welcome-action-primary small,
        .welcome-action-primary .bi {
            color: #fff !important;
        }

        .video-card {
            border-bottom: 4px solid transparent !important;
            border-image: linear-gradient(90deg, #c62828, #ff8a1f) 1 !important;
        }

        .history-fact {
            background: #fff8f3 !important;
            border-color: #f3dfd3 !important;
        }

        .program-icon {
            background: linear-gradient(135deg, rgba(198, 40, 40, .11), rgba(255, 138, 31, .2)) !important;
            color: #c62828 !important;
        }

        @media(max-width: 900px) {
            .welcome-layout {
                grid-template-columns: minmax(0, 1.35fr) minmax(220px, .8fr) !important;
            }

            .welcome-logo-frame {
                width: clamp(210px, 28vw, 280px) !important;
            }
        }

        @media(max-width: 767px) {
            .welcome-layout {
                grid-template-columns: 1fr !important;
            }

            .welcome-content-column {
                grid-column: 1 !important;
                grid-row: 2 !important;
            }

            .welcome-logo-column {
                grid-column: 1 !important;
                grid-row: 1 !important;
                align-items: center !important;
                text-align: center !important;
                flex-direction: column !important;
            }

            .welcome-logo-frame {
                width: min(76vw, 270px) !important;
            }

            .welcome-logo-caption {
                text-align: center !important;
            }
        }

        /* Reference-inspired clean white layout: gradient is reserved for accents only. */
        html,
        body,
        .main,
        .college-history-section,
        .college-history-card,
        .welcome-copy,
        .welcome-action,
        .coea-program-card,
        .video-card,
        .topnotchers-card,
        .history-fact,
        .history-item,
        .history-intro,
        .coea-top-nav,
        .coea-main-banner,
        .banner {
            background: #ffffff !important;
            background-color: #ffffff !important;
        }

        .welcome-copy {
            box-shadow: 0 10px 34px rgba(20, 28, 40, .045) !important;
        }

        .welcome-logo-frame {
            background: #ffffff !important;
            border: 1px solid #e6e8ec !important;
            box-shadow: 0 12px 34px rgba(20, 28, 40, .08) !important;
        }

        .history-fact {
            border-color: #e7e9ed !important;
        }

        .coea-top-nav {
            box-shadow: 0 1px 0 rgba(20, 28, 40, .05) !important;
        }

        .welcome-copy::before,
        .history-year,
        .welcome-action-primary,
        .welcome-action-primary:hover,
        .welcome-action-primary:focus-visible,
        .video-card-icon,
        .coming-soon-close,
        .main h4.text-center.text-white {
            background: linear-gradient(110deg, #c62828 0%, #e64a19 52%, #ff8a1f 100%) !important;
        }

        .coea-top-nav .coea-nav-brand {
            background: linear-gradient(110deg, #c62828 0%, #ff8a1f 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }


        /* Achievement news carousel: editorial styling on a clean white surface */
        .topnotchers-card {
            padding: 0 !important;
            max-width: min(900px, calc(100% - 28px));
            border-radius: 14px !important;
        }

        .top-news-masthead {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 17px 20px;
            border-bottom: 1px solid #e8e8e8;
            background: #fff;
        }

        .top-news-label {
            flex: 0 0 auto;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid #d9d9d9;
            border-radius: 4px;
            padding: 5px 8px;
            color: #b52222;
            font-size: .68rem;
            font-weight: 800;
            letter-spacing: .08em;
        }

        .news-live-dot {
            width: 7px;
            height: 7px;
            display: inline-block;
            border-radius: 50%;
            background: #c62828;
            animation: newsPulse 1.7s infinite;
        }

        .top-news-copy {
            display: flex;
            flex-direction: column;
            gap: 2px;
            min-width: 0;
        }

        .top-news-copy strong {
            color: #171717;
            font-size: 1rem;
            font-weight: 800;
        }

        .top-news-copy span {
            color: #666;
            font-size: .78rem;
        }

        .top-news-mark {
            margin-left: auto;
            color: #c62828;
            font-size: 1.55rem;
        }

        #topNotchersCarousel {
            border-radius: 0 0 14px 14px;
            overflow: hidden;
        }

        #topNotchersCarousel .carousel-inner {
            background: #fff !important;
        }

        #topNotchersCarousel .carousel-item {
            transition: transform .75s ease-in-out;
        }

        #topNotchersCarousel img {
            width: 100%;
            height: clamp(260px, 42vw, 510px);
            object-fit: contain;
            background: #fff !important;
            padding: 8px;
        }

        #topNotchersCarousel .carousel-indicators {
            margin-bottom: 10px;
        }

        #topNotchersCarousel .carousel-indicators button {
            width: 7px;
            height: 7px;
            border: 0;
            border-radius: 50%;
            background: #c62828;
        }

        #topNotchersCarousel .carousel-control-prev-icon,
        #topNotchersCarousel .carousel-control-next-icon {
            filter: invert(20%) sepia(80%) saturate(2500%) hue-rotate(340deg);
        }

        /* Timeline years are compact labels, not oversized blocks */
        .history-year {
            display: inline-flex !important;
            align-items: center;
            justify-content: center;
            width: max-content;
            min-height: 0 !important;
            padding: 3px 8px !important;
            border: 1px solid #e2baba !important;
            border-radius: 5px !important;
            background: #fff !important;
            color: #a91f24 !important;
            box-shadow: none !important;
            font-size: .68rem !important;
            line-height: 1.35 !important;
            font-weight: 800 !important;
            letter-spacing: .01em;
        }

        .history-item {
            align-items: start;
        }

        @keyframes newsPulse {

            0%,
            100% {
                opacity: 1;
                box-shadow: 0 0 0 0 rgba(198, 40, 40, .2);
            }

            50% {
                opacity: .65;
                box-shadow: 0 0 0 5px rgba(198, 40, 40, 0);
            }
        }

        @media (max-width:600px) {
            .top-news-masthead {
                padding: 13px 12px;
                gap: 10px;
                flex-wrap: wrap;
            }

            .top-news-copy {
                flex: 1 1 65%;
            }

            .top-news-copy span {
                font-size: .72rem;
            }

            #topNotchersCarousel img {
                height: clamp(230px, 70vw, 390px);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .news-live-dot {
                animation: none;
            }

            #topNotchersCarousel .carousel-item {
                transition: none;
            }
        }
    </style>
    <script>
        // Show a friendly dialog for accreditation portals that are not available yet.
        const comingSoonDialog = document.getElementById('comingSoonDialog');
        document.querySelectorAll('[data-coming-soon]').forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                if (comingSoonDialog && typeof comingSoonDialog.showModal === 'function') {
                    comingSoonDialog.showModal();
                } else {
                    alert('Coming soon! This accreditation portal is being prepared.');
                }
            });
        });
        const closeComingSoon = document.getElementById('closeComingSoon');
        if (closeComingSoon && comingSoonDialog) {
            closeComingSoon.addEventListener('click', function() {
                comingSoonDialog.close();
            });
            comingSoonDialog.addEventListener('click', function(event) {
                if (event.target === comingSoonDialog) comingSoonDialog.close();
            });
        }

        const myCarousel = document.querySelector('#topNotchersCarousel');
        const carousel = new bootstrap.Carousel(myCarousel, {
            interval: 3000, // 3 seconds
            ride: 'carousel'
        });
    </script>


    <style id="coea-clean-white-red-orange-redesign">
        :root {
            --coea-red: #c62828;
            --coea-orange: #ff8a1f;
            --coea-accent: linear-gradient(115deg, #c62828 0%, #e64a19 52%, #ff8a1f 100%);
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 88px;
        }

        html,
        body,
        .main,
        .main .row,
        .banner,
        section,
        .wrapper,
        .video-stack,
        .video-card,
        .college-history-card,
        .topnotchers-section,
        .campus-tour-section,
        .welcome-accreditors {
            background: #fff !important;
        }

        body {
            color: #171717 !important;
            font-family: 'Poppins', Arial, sans-serif !important;
        }

        .main {
            width: 100%;
            overflow-x: clip;
        }

        .coea-top-nav {
            position: sticky !important;
            top: 0;
            z-index: 1050;
            width: 100%;
            background: rgba(255, 255, 255, .97) !important;
            border-bottom: 1px solid #ececec;
            box-shadow: 0 4px 18px rgba(0, 0, 0, .045) !important;
            backdrop-filter: blur(12px);
            margin: 0 !important;
        }

        .coea-top-nav-inner {
            max-width: 1240px;
            min-height: 68px;
            margin: 0 auto;
            padding: 10px clamp(16px, 3vw, 34px);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: clamp(12px, 2vw, 28px);
            flex-wrap: wrap;
        }

        .coea-top-nav a {
            color: #242424 !important;
            font-size: .88rem;
            font-weight: 600;
            text-decoration: none !important;
            padding: 9px 0;
            transition: color .2s ease;
        }

        .coea-top-nav a:hover,
        .coea-top-nav a:focus-visible {
            color: var(--coea-red) !important;
        }

        .coea-top-nav .coea-nav-brand {
            margin-right: auto;
            display: inline-flex;
            align-items: center;
            gap: 9px;
            font-size: 1.15rem;
            font-weight: 850;
            letter-spacing: -.04em;
        }

        .coea-nav-brand i {
            color: var(--coea-red);
        }

        .coea-main-banner {
            display: block;
            width: 100%;
            max-height: 250px;
            object-fit: cover;
            object-position: center;
            margin: 0 auto 22px;
        }

        .banner {
            max-width: 1240px;
            margin: 0 auto !important;
            padding: 0 clamp(16px, 3vw, 34px) 45px;
        }

        .banner-image-column {
            padding: 12px !important;
        }

        .coea-secondary-banner {
            display: block;
            width: 100%;
            max-height: 210px;
            object-fit: contain;
            border-radius: 0 !important;
            box-shadow: none !important;
        }

        .welcome-accreditors {
            padding: 26px 0 36px !important;
        }

        .welcome-copy {
            max-width: 1100px !important;
            margin: 0 auto !important;
            padding: clamp(26px, 5vw, 58px) !important;
            background: #fff !important;
            border: 1px solid #ededed !important;
            border-radius: 22px !important;
            box-shadow: 0 14px 48px rgba(0, 0, 0, .055) !important;
            text-align: center;
        }

        .welcome-copy::before {
            width: 100% !important;
            height: 4px;
            inset: 0 0 auto 0 !important;
            background: var(--coea-accent) !important;
        }

        .welcome-layout {
            display: flex !important;
            flex-direction: column-reverse !important;
            align-items: center !important;
            gap: 24px !important;
        }

        .welcome-content-column {
            width: 100%;
            max-width: 920px;
        }

        .welcome-logo-column {
            width: 100%;
            display: flex !important;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .welcome-logo-frame {
            width: clamp(190px, 24vw, 280px) !important;
            min-height: 0 !important;
            padding: 16px !important;
            margin: 0 auto !important;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff !important;
            border: 1px solid #eee !important;
            border-radius: 24px !important;
            box-shadow: 0 12px 32px rgba(0, 0, 0, .07) !important;
        }

        .welcome-coea-logo {
            width: 100% !important;
            max-width: 250px !important;
            height: auto !important;
            margin: 0 auto !important;
            object-fit: contain;
        }

        .welcome-logo-caption {
            display: block;
            margin-top: 12px;
            color: #555 !important;
            font-size: .88rem;
            font-weight: 600;
            line-height: 1.7;
        }

        .welcome-eyebrow {
            justify-content: center;
            color: var(--coea-red) !important;
            font-size: .78rem !important;
            letter-spacing: .12em !important;
        }

        .welcome-copy h1 {
            color: #111 !important;
            font-size: clamp(2.2rem, 5vw, 4rem) !important;
            font-weight: 850 !important;
            letter-spacing: -.055em;
            line-height: 1.08 !important;
            margin-bottom: 20px !important;
        }

        .welcome-copy h1::after {
            content: '';
            display: block;
            width: 82px;
            height: 4px;
            margin: 18px auto 0;
            border-radius: 20px;
            background: var(--coea-accent);
        }

        .welcome-copy>p {
            margin-left: auto !important;
            margin-right: auto !important;
            max-width: 820px !important;
            color: #4a4a4a !important;
            line-height: 1.85 !important;
        }

        .welcome-copy .welcome-thanks {
            color: #222 !important;
        }

        .welcome-actions {
            margin-top: 28px;
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
            text-align: left;
        }

        .welcome-action {
            background: #fff !important;
            color: #222 !important;
            border: 1px solid #e9e9e9 !important;
            border-radius: 14px !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, .025) !important;
        }

        .welcome-action:hover,
        .welcome-action:focus-visible {
            border-color: rgba(198, 40, 40, .45) !important;
            box-shadow: 0 10px 25px rgba(198, 40, 40, .09) !important;
        }

        .welcome-action-primary,
        .welcome-action-primary:hover,
        .welcome-action-primary:focus-visible {
            color: #fff !important;
            background: var(--coea-accent) !important;
            border-color: transparent !important;
        }

        .welcome-action .action-copy strong {
            color: inherit !important;
        }

        .welcome-action .action-copy small {
            color: #666 !important;
        }

        .welcome-action-primary .action-copy small {
            color: rgba(255, 255, 255, .88) !important;
        }

        .welcome-action .action-icon>.bi {
            color: var(--coea-red) !important;
        }

        .welcome-action-primary .action-icon>.bi {
            color: #fff !important;
        }

        .video-stack,
        .video-card {
            background: #fff !important;
        }

        .video-card {
            border: 1px solid #ededed !important;
            border-radius: 20px !important;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .045) !important;
        }

        h2,
        h3,
        .college-history-heading h2,
        .video-card-heading h2 {
            color: #171717 !important;
        }

        p,
        .history-intro p,
        .history-milestone p,
        .college-history-text {
            color: #4b4b4b;
        }

        .college-history-card,
        .video-card,
        .topnotchers-card,
        .campus-tour-card {
            border-color: #ededed !important;
            box-shadow: 0 10px 35px rgba(0, 0, 0, .045) !important;
        }

        a:focus-visible,
        button:focus-visible {
            outline: 3px solid rgba(255, 138, 31, .55);
            outline-offset: 3px;
        }

        @media (max-width: 768px) {
            .coea-main-banner {
                display: none !important;
            }

            .coea-top-nav-inner {
                justify-content: center;
                gap: 7px 16px;
                padding: 10px 14px;
            }

            .coea-top-nav .coea-nav-brand {
                width: 100%;
                justify-content: center;
                margin: 0;
                padding-bottom: 2px;
            }

            .coea-top-nav a:not(.coea-nav-brand) {
                font-size: .76rem;
                padding: 5px 0;
            }

            .banner {
                padding-left: 14px;
                padding-right: 14px;
                padding-top: 12px;
            }

            .banner-image-column {
                margin-bottom: 8px !important;
            }

            .coea-secondary-banner {
                max-height: 150px;
            }

            .welcome-accreditors {
                padding: 16px 0 24px !important;
            }

            .welcome-copy {
                padding: 28px 18px 22px !important;
                border-radius: 16px !important;
            }

            .welcome-actions {
                grid-template-columns: 1fr !important;
            }
        }

        @media (max-width: 420px) {
            .coea-top-nav-inner {
                gap: 5px 12px;
            }

            .coea-top-nav a:not(.coea-nav-brand) {
                font-size: .71rem;
            }

            .welcome-copy h1 {
                font-size: 2.1rem !important;
            }

            .welcome-eyebrow {
                font-size: .68rem !important;
                letter-spacing: .06em !important;
            }
        }
    </style>

    <style id="coea-pure-white-logo-emphasis">
        /* Pure white surfaces only: red/orange are limited to text and fine borders. */
        html,
        body,
        .main,
        .main .row,
        .banner,
        section,
        .wrapper,
        .video-stack,
        .video-card,
        .college-history-card,
        .topnotchers-section,
        .campus-tour-section,
        .welcome-accreditors,
        .welcome-copy,
        .welcome-actions,
        .welcome-action,
        .topnotchers-card,
        .campus-tour-card,
        .banner-image-column {
            background-color: #fff !important;
            background-image: none !important;
        }

        .welcome-copy::before {
            background: #fff !important;
            height: 0 !important;
        }

        .welcome-copy h1::after {
            background: #c62828 !important;
            height: 3px !important;
        }

        .welcome-eyebrow,
        .welcome-copy a,
        .college-history-heading .bi,
        .video-card-heading .bi,
        .welcome-action .action-icon>.bi {
            color: #c62828 !important;
        }

        .welcome-action-primary,
        .welcome-action-primary:hover,
        .welcome-action-primary:focus-visible {
            color: #171717 !important;
            background: #fff !important;
            border: 1px solid #c62828 !important;
            box-shadow: 0 5px 18px rgba(0, 0, 0, .06) !important;
        }

        .welcome-action-primary .action-copy small,
        .welcome-action-primary .action-copy strong,
        .welcome-action-primary .action-icon>.bi {
            color: #171717 !important;
        }

        .welcome-copy {
            border-color: #e7e7e7 !important;
        }

        .welcome-logo-column {
            align-items: center !important;
            text-align: center !important;
        }

        .welcome-logo-frame {
            width: clamp(250px, 32vw, 350px) !important;
            padding: 22px !important;
            background: #fff !important;
            background-image: none !important;
            border: 2px solid #c62828 !important;
            border-bottom: 5px solid #ff8a1f !important;
            border-radius: 22px !important;
            box-shadow: 0 16px 42px rgba(0, 0, 0, .11) !important;
        }

        .welcome-coea-logo {
            max-width: 310px !important;
            width: 100% !important;
        }

        .welcome-logo-caption {
            color: #333 !important;
        }

        .coea-top-nav,
        .coea-top-nav-inner {
            background: #fff !important;
            background-image: none !important;
        }

        .coea-top-nav {
            border-bottom: 1px solid #e8e8e8 !important;
        }

        .video-card,
        .college-history-card,
        .topnotchers-card,
        .campus-tour-card,
        .welcome-action {
            border-color: #e7e7e7 !important;
        }

        .video-card {
            border-top: 2px solid #c62828 !important;
        }

        @media (max-width: 768px) {
            .welcome-logo-frame {
                width: min(78vw, 300px) !important;
            }
        }


        /* COEA clean white layout polish */
        :root {
            --coea-red: #c62828;
            --coea-orange: #ff8a1f;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 92px;
        }

        body,
        .main,
        .banner,
        .video-stack,
        .coea-section,
        .college-history-section,
        .welcome-copy,
        .video-card,
        .topnotchers-card,
        .history-card,
        .welcome-action,
        .coea-top-nav,
        .coea-top-nav-inner {
            background-color: #fff !important;
        }

        .welcome-accreditors {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .welcome-copy {
            width: min(1120px, calc(100% - 32px));
            max-width: 1120px;
            margin: 0 auto;
            text-align: center;
            background: #fff !important;
            border: 1px solid #e5e7eb;
            border-radius: 22px;
            box-shadow: 0 16px 42px rgba(0, 0, 0, .07) !important;
            padding: clamp(24px, 4vw, 52px);
        }

        .welcome-layout {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 24px;
        }

        .welcome-content-column {
            width: 100%;
            max-width: 900px;
            order: 2;
        }

        .welcome-logo-column {
            order: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
        }

        .welcome-logo-frame {
            display: grid;
            place-items: center;
            width: clamp(210px, 28vw, 330px);
            aspect-ratio: 1;
            padding: 20px;
            border-radius: 50%;
            background: #fff !important;
            border: 2px solid #f0b6a7;
            box-shadow: 0 14px 38px rgba(198, 40, 40, .13), 0 0 0 9px #fff, 0 0 0 10px #f2f2f2;
            animation: coea-logo-float 5s ease-in-out infinite;
        }

        .welcome-coea-logo {
            width: 100% !important;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            margin: 0 !important;
        }

        .welcome-logo-caption {
            display: block;
            margin-top: 22px;
            color: #333 !important;
            font-weight: 600;
            line-height: 1.7;
        }

        .welcome-eyebrow,
        .video-kicker,
        .history-kicker {
            color: var(--coea-red) !important;
            letter-spacing: .09em;
            text-transform: uppercase;
            font-size: .78rem;
            font-weight: 750;
        }

        .welcome-copy h1,
        .college-history-heading h2,
        .video-card h2,
        .coea-topnotchers-heading h2 {
            color: #171717 !important;
            font-weight: 800;
            letter-spacing: -.035em;
        }

        .welcome-copy h1 {
            font-size: clamp(2rem, 4vw, 3.25rem);
            margin: 12px 0 18px;
        }

        .welcome-copy>p,
        .welcome-content-column>p {
            color: #4b5563 !important;
            line-height: 1.8;
            margin-left: auto;
            margin-right: auto;
            max-width: 850px;
        }

        .welcome-copy::before {
            display: none !important;
        }

        .welcome-actions {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
            text-align: left;
            margin-top: 28px;
        }

        .welcome-action {
            background: #fff !important;
            border: 1px solid #e5e7eb !important;
            color: #222 !important;
            border-radius: 13px;
            transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
        }

        .welcome-action:hover,
        .welcome-action:focus-visible {
            transform: translateY(-4px);
            border-color: #e7a18f !important;
            box-shadow: 0 12px 26px rgba(0, 0, 0, .07) !important;
        }

        .welcome-action-primary,
        .welcome-action-primary:hover,
        .welcome-action-primary:focus-visible {
            background: #fff !important;
            color: #222 !important;
            border-color: #e7a18f !important;
        }

        .welcome-action-primary .action-icon>.bi {
            color: var(--coea-red) !important;
        }

        .video-stack {
            padding: 12px clamp(12px, 3vw, 36px) 44px;
        }

        .video-stack>.row {
            align-items: stretch;
        }

        .video-card {
            width: 100%;
            padding: clamp(16px, 2vw, 24px);
            border: 1px solid #e5e7eb;
            border-radius: 18px;
            box-shadow: 0 12px 34px rgba(0, 0, 0, .06);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 42px rgba(0, 0, 0, .09);
        }

        .video-card-heading {
            min-height: 100px;
        }

        .video-card-heading h2 {
            font-size: clamp(1.25rem, 2vw, 1.65rem);
        }

        .video-card-heading p {
            color: #5b616a !important;
        }

        .video-frame-wrap {
            overflow: hidden;
            border-radius: 12px;
            background: #fff !important;
        }

        .coea-topnotchers-heading {
            text-align: center;
            padding: 18px 12px 0;
            background: #fff !important;
        }

        .coea-topnotchers-heading h2 {
            position: relative;
            display: inline-block;
            padding-bottom: 12px;
        }

        .coea-topnotchers-heading h2::after {
            content: '';
            display: block;
            width: 76px;
            height: 3px;
            margin: 10px auto 0;
            border-radius: 99px;
            background: linear-gradient(90deg, var(--coea-red), var(--coea-orange));
        }

        .coea-topnotchers-heading p {
            color: #626873;
        }

        .topnotchers-card {
            width: min(100%, 1100px);
            border: 1px solid #e5e7eb !important;
            border-radius: 18px;
            background: #fff !important;
            box-shadow: 0 16px 42px rgba(0, 0, 0, .08) !important;
            overflow: hidden;
        }

        #topNotchersCarousel .carousel-item img {
            transition: transform .65s cubic-bezier(.2, .75, .25, 1);
        }

        #topNotchersCarousel .carousel-item.active img {
            animation: coea-image-enter .85s ease both;
        }

        #topNotchersCarousel .carousel-indicators button {
            background-color: var(--coea-red);
        }

        .college-history-section {
            padding-top: 32px;
        }

        .college-history-heading {
            text-align: center;
            max-width: 850px;
            margin: 0 auto 26px;
        }

        .college-history-heading p {
            color: #5b616a !important;
            line-height: 1.8;
        }

        .college-history-card {
            background: #fff !important;
            border: 1px solid #e5e7eb !important;
        }

        [data-aos] {
            will-change: transform, opacity;
        }

        .coea-reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .7s ease, transform .7s cubic-bezier(.2, .7, .2, 1);
        }

        .coea-reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes coea-logo-float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-7px);
            }
        }

        @keyframes coea-image-enter {
            from {
                opacity: .55;
                transform: scale(1.035);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @media (max-width: 767.98px) {
            .welcome-actions {
                grid-template-columns: 1fr;
            }

            .welcome-copy {
                width: calc(100% - 22px);
                padding: 24px 16px;
            }

            .welcome-logo-frame {
                width: min(72vw, 250px);
            }

            .video-card {
                margin-bottom: 8px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
                scroll-behavior: auto !important;
            }

            .coea-reveal {
                opacity: 1;
                transform: none;
            }
        }

        /* Corrected layout: centered welcome, separate topnotchers news section, two-column media */
        html {
            scroll-behavior: smooth;
        }

        body,
        .main,
        .banner,
        .coea-section,
        .topnotchers-news-section,
        .college-history-section,
        .welcome-copy,
        .welcome-action,
        .video-card,
        .video-card-heading,
        .video-frame-wrap,
        .topnotchers-card,
        #topNotchersCarousel,
        #topNotchersCarousel .carousel-inner,
        #topNotchersCarousel .carousel-item,
        #topNotchersCarousel img,
        .college-history-card,
        .history-item,
        .history-fact,
        .history-intro,
        .history-closing {
            background-color: #fff !important;
        }

        .welcome-copy {
            text-align: center !important;
            max-width: 1180px;
            margin: 0 auto !important;
            border: 1px solid #ededed !important;
            box-shadow: 0 12px 36px rgba(0, 0, 0, .055) !important;
        }

        .welcome-layout {
            display: flex !important;
            flex-direction: column-reverse !important;
            align-items: center !important;
            gap: 26px !important;
        }

        .welcome-content-column {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .welcome-copy h1,
        .welcome-copy p,
        .welcome-copy .welcome-thanks {
            text-align: center !important;
            margin-left: auto;
            margin-right: auto;
        }

        .welcome-copy>p {
            max-width: 900px;
        }

        .welcome-eyebrow {
            justify-content: center;
        }

        .welcome-actions {
            width: 100%;
            text-align: left;
        }

        .welcome-logo-column {
            width: 100%;
        }

        .welcome-logo-frame {
            width: clamp(190px, 24vw, 300px) !important;
            padding: 22px !important;
            border: 2px solid #c62828 !important;
            background: #fff !important;
            box-shadow: 0 18px 42px rgba(0, 0, 0, .13), 0 0 0 8px rgba(198, 40, 40, .045) !important;
            animation: coea-logo-float 5s ease-in-out infinite;
        }

        .welcome-coea-logo {
            width: 100% !important;
            max-width: 100% !important;
        }

        .welcome-logo-caption {
            color: #333 !important;
            margin-top: 14px;
            font-weight: 600;
        }

        .welcome-action,
        .welcome-action-primary {
            color: #202020 !important;
            background: #fff !important;
            border: 1px solid #e6e6e6 !important;
        }

        .welcome-action-primary {
            border-left: 3px solid #c62828 !important;
        }

        .welcome-action:hover,
        .welcome-action:focus-visible {
            background: #fff !important;
            border-color: #c62828 !important;
        }

        .video-stack {
            max-width: 1400px;
            margin-left: auto;
            margin-right: auto;
        }

        .video-stack>.row {
            display: grid !important;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px !important;
            margin: 0 !important;
        }

        .video-stack .video-card {
            width: auto !important;
            max-width: none !important;
            padding: 22px !important;
            border: 1px solid #e8e8e8 !important;
            border-radius: 18px;
            box-shadow: 0 10px 28px rgba(0, 0, 0, .055);
        }

        .video-card-heading {
            align-items: flex-start;
        }

        .video-card-heading h2 {
            color: #171717 !important;
        }

        .video-card-heading p {
            color: #555 !important;
        }

        .video-frame-wrap {
            width: 100%;
        }

        .topnotchers-news-section {
            display: block !important;
            width: 100% !important;
            clear: both;
            margin: 34px auto 0 !important;
            padding: 38px 20px 42px !important;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }

        .topnotchers-news-wrapper {
            width: min(1180px, 100%);
            margin: 0 auto;
        }

        .coea-topnotchers-heading {
            display: flex !important;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin: 0 auto 22px !important;
            width: 100%;
        }

        .news-section-kicker {
            display: inline-block;
            font-size: .72rem;
            font-weight: 800;
            letter-spacing: .13em;
            color: #c62828;
            border: 1px solid #c62828;
            background: #fff;
            border-radius: 999px;
            padding: 5px 11px;
            margin-bottom: 10px;
        }

        .coea-topnotchers-heading h2 {
            color: #151515;
            font-size: clamp(1.8rem, 3vw, 2.5rem);
            font-weight: 800;
            margin: 0 0 8px !important;
        }

        .coea-topnotchers-heading p {
            color: #555 !important;
            margin: 0;
        }

        .topnotchers-card {
            display: block;
            width: 100% !important;
            max-width: 1000px;
            margin: 0 auto !important;
            padding: 18px !important;
            border: 1px solid #e8e8e8 !important;
            border-radius: 18px;
            background: #fff !important;
            box-shadow: 0 12px 32px rgba(0, 0, 0, .06) !important;
        }

        .top-news-masthead {
            background: #fff !important;
            border-bottom: 1px solid #eee;
        }

        .top-news-copy strong {
            color: #161616 !important;
        }

        .top-news-copy span {
            color: #555 !important;
        }

        #topNotchersCarousel .carousel-inner,
        #topNotchersCarousel .carousel-item,
        #topNotchersCarousel img {
            background: #fff !important;
        }

        #topNotchersCarousel img {
            object-fit: contain !important;
        }

        .history-year {
            display: inline-flex !important;
            align-items: center;
            justify-content: center;
            min-height: 25px;
            padding: 3px 9px !important;
            width: max-content;
            border: 1px solid #c62828 !important;
            border-radius: 999px !important;
            background: #fff !important;
            color: #b71c1c !important;
            font-size: .72rem !important;
            font-weight: 800;
            line-height: 1.2;
        }

        .coea-reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .7s ease, transform .7s cubic-bezier(.2, .7, .2, 1);
        }

        .coea-reveal.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes coea-logo-float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }

        @media (max-width: 767.98px) {
            .video-stack>.row {
                grid-template-columns: 1fr !important;
            }

            .welcome-copy {
                width: calc(100% - 22px);
            }

            .welcome-logo-frame {
                width: min(68vw, 260px) !important;
            }

            .topnotchers-news-section {
                padding: 28px 12px !important;
            }

            .topnotchers-card {
                padding: 10px !important;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
                scroll-behavior: auto !important;
            }

            .coea-reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const targets = document.querySelectorAll('.coea-main-banner, .coea-secondary-banner, .welcome-copy, .welcome-logo-frame, .welcome-action, .video-card, .coea-topnotchers-heading, .topnotchers-card, .college-history-heading, .college-history-card, .history-item, .history-fact, .history-closing');
            if (!('IntersectionObserver' in window) || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                targets.forEach(el => el.classList.add('is-visible'));
                return;
            }
            targets.forEach((el, index) => {
                el.classList.add('coea-reveal');
                if (el.matches('.history-item, .history-fact')) el.style.transitionDelay = (Math.min(index % 5, 4) * 70) + 'ms';
            });
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) entry.target.classList.add('is-visible');
                    else entry.target.classList.remove('is-visible');
                });
            }, {
                threshold: 0.12,
                rootMargin: '0px 0px -35px 0px'
            });
            targets.forEach(el => observer.observe(el));
            // Re-trigger reveal animations when a user navigates with the side dots.
            document.querySelectorAll('.coea-dot-link').forEach(link => {
                link.addEventListener('click', () => {
                    const selector = link.getAttribute('href');
                    const section = document.querySelector(selector);
                    if (!section) return;
                    const animated = section.matches('.coea-reveal') ? [section] : Array.from(section.querySelectorAll('.coea-reveal'));
                    animated.forEach(el => el.classList.remove('is-visible'));
                    requestAnimationFrame(() => requestAnimationFrame(() => {
                        animated.forEach(el => {
                            const rect = el.getBoundingClientRect();
                            if (rect.bottom > 0 && rect.top < window.innerHeight) el.classList.add('is-visible');
                        });
                    }));
                });
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Final navigation overrides: use the correct COEA class names and compact height */
        .coea-top-nav {
            position: sticky !important;
            top: 0;
            z-index: 1020;
            text-align: center !important;
            background: linear-gradient(110deg, #b71c1c 0%, #e64a19 52%, #ff8a1f 100%) !important;
            background-color: #e64a19 !important;
            border: 0 !important;
            box-shadow: 0 4px 14px rgba(120, 25, 15, .18) !important;
            backdrop-filter: none !important;
        }

        .coea-top-nav-inner {
            justify-content: center !important;
            align-items: center !important;
            width: 100%;
            gap: clamp(20px, 4vw, 52px) !important;
            min-height: 42px !important;
            height: 42px !important;
            padding: 0 14px !important;
            overflow: visible !important;
        }

        .coea-top-nav .coea-nav-link {
            display: inline-flex;
            align-items: center;
            height: 42px !important;
            flex: 0 0 auto;
            color: #fff !important;
            -webkit-text-fill-color: #fff !important;
            text-decoration: none !important;
            font-weight: 750;
            letter-spacing: .035em;
            font-size: .76rem;
            padding: 0 !important;
            margin: 0;
            border: 0 !important;
            border-bottom: 2px solid transparent !important;
            white-space: nowrap;
            transition: border-color .2s ease, opacity .2s ease;
        }

        .coea-top-nav .coea-nav-link:hover,
        .coea-top-nav .coea-nav-link:focus-visible {
            color: #fff !important;
            -webkit-text-fill-color: #fff !important;
            border-bottom-color: #fff !important;
            opacity: .92;
        }

        /* Remove the top navigation completely; retain the side-dot navigation. */
        .coea-top-nav {
            display: none !important;
        }

        /* The two images directly beneath the main banner should sit cleanly on white. */
        .banner-image-column {
            background: transparent !important;
            border: 0 !important;
            box-shadow: none !important;
            padding: 0 !important;
        }

        .banner-image-column .coea-secondary-banner {
            display: block;
            width: 100%;
            max-width: 100%;
            height: auto;
            max-height: 210px;
            object-fit: contain;
            background: transparent !important;
            border: 0 !important;
            outline: 0 !important;
            border-radius: 0 !important;
            box-shadow: none !important;
        }

        .banner-image-column:before,
        .banner-image-column:after {
            display: none !important;
            content: none !important;
        }

        /* The extra COEA logo beside the welcome content is intentionally removed. */
        .welcome-logo-column,
        .welcome-logo-frame,
        .welcome-logo-caption {
            display: none !important;
        }

        /* Side navigation: transparent hit areas and dots only */
        .coea-dot-navigation {
            position: fixed;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1100;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 13px;
            padding: 10px 7px;
            background: transparent !important;
            background-color: transparent !important;
            border: 0 !important;
            box-shadow: none !important;
        }

        .coea-dot-link,
        .coea-dot-link:hover,
        .coea-dot-link:focus,
        .coea-dot-link:active {
            width: 14px;
            height: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            text-decoration: none;
            outline-offset: 5px;
            background: transparent !important;
            background-color: transparent !important;
            border: 0 !important;
            box-shadow: none;
        }

        .coea-dot-link span {
            width: 8px;
            height: 8px;
            display: block;
            border-radius: 50%;
            background: #ff8a1f;
            border: 1px solid #ff8a1f;
            transition: width .2s ease, height .2s ease, background .2s ease, box-shadow .2s ease;
        }

        .coea-dot-link:hover span,
        .coea-dot-link:focus-visible span,
        .coea-dot-link.is-active span {
            width: 12px;
            height: 12px;
            background: #ff8a1f;
            border-color: #ff8a1f;
            box-shadow: 0 0 0 3px rgba(255, 138, 31, .18);
        }

        /* Keep all BS program-link text black for readability */
        .welcome-actions .welcome-action,
        .welcome-actions .welcome-action .action-copy,
        .welcome-actions .welcome-action .action-copy strong,
        .welcome-actions .welcome-action .action-copy small {
            color: #111 !important;
            -webkit-text-fill-color: #111 !important;
        }

        .welcome-actions .welcome-action .action-icon .bi,
        .welcome-actions .welcome-action>.bi {
            color: #111 !important;
        }

        #video-section {
            scroll-margin-top: 52px;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 50px;
        }

        @media (max-width:600px) {
            .coea-top-nav-inner {
                gap: clamp(14px, 4vw, 24px) !important;
                padding-inline: 10px !important;
                min-height: 40px !important;
                height: 40px !important;
            }

            .coea-top-nav .coea-nav-link {
                height: 40px !important;
                font-size: .64rem;
                letter-spacing: .01em;
            }

            .coea-dot-navigation {
                right: 5px;
                gap: 10px;
                padding: 5px 2px;
                background: transparent !important;
            }

            .coea-dot-link {
                width: 12px;
                height: 12px;
            }

            .coea-dot-link span {
                width: 7px;
                height: 7px;
            }

            .coea-dot-link.is-active span,
            .coea-dot-link:hover span {
                width: 10px;
                height: 10px;
                background: #ff8a1f !important;
                border-color: #ff8a1f !important;
            }

            body {
                padding-right: 10px;
            }
        }

        @media (prefers-reduced-motion:reduce) {
            html {
                scroll-behavior: auto;
            }

            .coea-dot-link span,
            .coea-top-nav .coea-nav-link {
                transition: none;
            }
        }
    </style>
    <script>
        (() => {
            const links = Array.from(document.querySelectorAll('.coea-dot-link'));
            const targets = links.map(link => document.querySelector(link.getAttribute('href'))).filter(Boolean);
            const activate = (targetId) => {
                links.forEach(link => {
                    const active = link.getAttribute('href') === '#' + targetId;
                    link.classList.toggle('is-active', active);
                    if (active) link.setAttribute('aria-current', 'location');
                    else link.removeAttribute('aria-current');
                });
            };
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver(entries => {
                    const visible = entries.filter(entry => entry.isIntersecting).sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];
                    if (visible) activate(visible.target.id);
                }, {
                    rootMargin: '-20% 0px -55% 0px',
                    threshold: [0, .15, .35, .6]
                });
                targets.forEach(target => observer.observe(target));
            }
            links.forEach(link => link.addEventListener('click', () => activate(link.getAttribute('href').slice(1))));
        })();
    </script>


    <style id="coea-final-scroll-animation-and-hidden-scrollbar">
        /* Hide scrollbar chrome while preserving mouse, touch, keyboard and dot navigation scrolling. */
        html,
        body,
        * {
            scrollbar-width: none !important;
            -ms-overflow-style: none !important;
        }

        html::-webkit-scrollbar,
        body::-webkit-scrollbar,
        *::-webkit-scrollbar {
            width: 0 !important;
            height: 0 !important;
            display: none !important;
            background: transparent !important;
        }

        html {
            scroll-behavior: smooth !important;
        }

        /* Scroll reveal animation for page sections and content blocks. */
        .coea-reveal {
            opacity: 0;
            transform: translateY(28px) scale(.99);
            transition: opacity .72s ease, transform .72s cubic-bezier(.2, .7, .2, 1);
            will-change: opacity, transform;
        }

        .coea-reveal.is-visible {
            opacity: 1 !important;
            transform: translateY(0) scale(1) !important;
        }

        /* Small lift on hover for clickable program links and media cards. */
        .welcome-action,
        .video-card,
        .topnotchers-card,
        .college-history-card {
            transition: transform .28s ease, box-shadow .28s ease, border-color .28s ease;
        }

        .welcome-action:hover,
        .video-card:hover,
        .topnotchers-card:hover,
        .college-history-card:hover {
            transform: translateY(-4px);
        }

        .coea-dot-link span {
            animation: coea-dot-breathe 2.2s ease-in-out infinite;
        }

        .coea-dot-link.is-active span {
            animation: coea-dot-active .95s ease-in-out infinite alternate;
        }

        @keyframes coea-dot-breathe {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.12);
            }
        }

        @keyframes coea-dot-active {
            from {
                transform: scale(1);
            }

            to {
                transform: scale(1.18);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto !important;
            }

            *,
            *::before,
            *::after {
                animation: none !important;
                transition: none !important;
            }

            .coea-reveal {
                opacity: 1 !important;
                transform: none !important;
            }
        }
    </style>
    <script id="coea-final-scroll-reveal">
        document.addEventListener('DOMContentLoaded', function() {
            const selectors = [
                '.coea-main-banner', '.coea-secondary-banner', '.banner-image-column',
                '.welcome-copy', '.welcome-action', '.video-card', '.coea-topnotchers-heading',
                '.topnotchers-card', '.college-history-heading', '.college-history-card',
                '.history-item', '.history-fact', '.history-intro', '.history-closing',
                '#institutional-video', '#campus-tour', '#video-section', '#topnotchers',
                '#college-history', '#accreditation-links'
            ];
            const nodes = new Set();
            selectors.forEach(selector => document.querySelectorAll(selector).forEach(node => nodes.add(node)));
            const elements = Array.from(nodes);
            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            elements.forEach((el, index) => {
                el.classList.add('coea-reveal');
                if (el.matches('.history-item, .history-fact, .welcome-action, .video-card')) {
                    el.style.transitionDelay = (index % 5) * 65 + 'ms';
                }
            });
            if (reduceMotion || !('IntersectionObserver' in window)) {
                elements.forEach(el => el.classList.add('is-visible'));
                return;
            }
            const revealObserver = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) entry.target.classList.add('is-visible');
                    else entry.target.classList.remove('is-visible');
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -28px 0px'
            });
            elements.forEach(el => revealObserver.observe(el));

            // Dot clicks replay the reveal for the destination section and its contents.
            document.querySelectorAll('.coea-dot-link').forEach(link => {
                link.addEventListener('click', function() {
                    const selector = this.getAttribute('href');
                    if (!selector || selector.charAt(0) !== '#') return;
                    const section = document.querySelector(selector);
                    if (!section) return;
                    const animated = [section, ...section.querySelectorAll('.coea-reveal')];
                    animated.forEach(el => el.classList.remove('is-visible'));
                    requestAnimationFrame(() => requestAnimationFrame(() => {
                        animated.forEach(el => {
                            const rect = el.getBoundingClientRect();
                            if (rect.bottom > 0 && rect.top < window.innerHeight) el.classList.add('is-visible');
                        });
                    }));
                });
            });
        });
    </script>

</body>

</html>