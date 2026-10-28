<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>COEA | Civil Engineering Accreditation Portal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">

    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href=".././globals/global.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css"
        integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --coea-orange: #ff4c01;
            --coea-light-orange: #FE904D;
            --coea-dark: #252525;
            --coea-muted: #686868;
            --coea-border: #eeeeee;
            --coea-white: #ffffff;
            --coea-orange-tint: #fff5ef;
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
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background: var(--coea-white);
            color: var(--coea-dark);
        }

        .main {
            background: #f4f6f8;
        }

        .coea-section {
            background: transparent;
        }

        .overview-section {
            background: linear-gradient(180deg, #f4f6f8 0%, #fff8f3 100%);
        }

        #civil-engineering-faculty {
            background: #ffffff;
        }

        .history-section {
            background: linear-gradient(180deg, #f7f8fa 0%, #fff3eb 100%);
        }

        /* General sections */
        .coea-section {
            position: relative;
            padding: clamp(42px, 6vw, 78px) 0;
        }

        .coea-wrapper {
            width: 100%;
            max-width: 1320px;
            padding: 0 24px;
            margin: 0 auto;
        }

        .section-label {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 8px 14px;
            border: 1px solid #ffe0ce;
            border-radius: 50px;
            background: var(--coea-orange-tint);
            color: var(--coea-orange);
            font-size: 0.76rem;
            font-weight: 700;
            letter-spacing: 0.7px;
            text-transform: uppercase;
        }

        .section-heading {
            margin: 18px 0;
            color: var(--coea-dark);
            font-size: clamp(1.9rem, 4vw, 3.15rem);
            font-weight: 800;
            line-height: 1.25;
            letter-spacing: -1px;
        }

        .section-heading span {
            color: var(--coea-orange);
        }

        .section-subtitle {
            max-width: 760px;
            margin: 0 auto;
            color: var(--coea-muted);
            font-size: 0.93rem;
            line-height: 1.9;
        }

        /* Shared cards */
        .overview-card,
        .faculty-card,
        .history-card {
            overflow: hidden;
            border: 1px solid var(--coea-border);
            border-radius: 22px;
            background: #ffffff;
            box-shadow: 0 16px 42px rgba(31, 41, 55, 0.075);
        }

        /* Overview video */
        .video-panel {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            padding: clamp(18px, 3vw, 32px);
            background: #ffffff;
        }

        .video-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 18px;
        }

        .video-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 46px;
            height: 46px;
            flex-shrink: 0;
            border-radius: 13px;
            background: var(--coea-orange);
            color: #ffffff;
            font-size: 1.3rem;
        }

        .video-heading h2 {
            margin: 0 0 4px;
            font-size: 1rem;
            font-weight: 700;
        }

        .video-heading p {
            margin: 0;
            color: var(--coea-muted);
            font-size: 0.78rem;
        }

        .video-frame {
            width: 100%;
            overflow: hidden;
            border: 1px solid #eeeeee;
            border-radius: 15px;
            background: #111111;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.09);
        }

        .video-frame iframe {
            display: block;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .video-note {
            display: flex;
            align-items: flex-start;
            gap: 9px;
            margin-top: 15px;
            color: var(--coea-muted);
            font-size: 0.77rem;
            line-height: 1.8;
        }

        .video-note i {
            flex-shrink: 0;
            color: var(--coea-orange);
        }

        /* Program introduction */
        .intro-panel {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            padding: clamp(24px, 4vw, 45px);
            background: #ffffff;
        }

        .intro-panel h2 {
            margin: 20px 0 16px;
            font-size: clamp(1.55rem, 2.5vw, 2.2rem);
            font-weight: 800;
            line-height: 1.4;
        }

        .intro-panel h2 span {
            color: var(--coea-orange);
        }

        .intro-text {
            margin-bottom: 22px;
            color: #606060;
            font-size: 0.88rem;
            line-height: 2;
        }

        .portal-highlights {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 11px;
        }

        .highlight-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            min-width: 0;
            padding: 13px 11px;
            border: 1px solid #eeeeee;
            border-radius: 13px;
            background: #ffffff;
            transition: border-color 0.25s ease,
                transform 0.25s ease,
                box-shadow 0.25s ease;
        }

        .highlight-item:hover {
            transform: translateY(-3px);
            border-color: var(--coea-light-orange);
            box-shadow: 0 7px 20px rgba(255, 76, 1, 0.07);
        }

        .highlight-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            flex-shrink: 0;
            border-radius: 10px;
            background: var(--coea-orange-tint);
            color: var(--coea-orange);
            font-size: 1.05rem;
        }

        .highlight-item h3 {
            margin: 2px 0 5px;
            font-size: 0.78rem;
            font-weight: 700;
        }

        .highlight-item p {
            margin: 0;
            color: var(--coea-muted);
            font-size: 0.69rem;
            line-height: 1.6;
        }

        /* Faculty section */
        .faculty-card {
            margin-top: 35px;
        }

        .faculty-image-wrapper {
            width: 100%;
            height: 100%;
            min-height: 320px;
            overflow: hidden;
            background: #ffffff;
        }

        .faculty-image {
            display: block;
            width: 100%;
            height: 100%;
            min-height: 320px;
            object-fit: contain;
            transition: transform 0.4s ease;
        }

        .faculty-card:hover .faculty-image {
            transform: scale(1.015);
        }

        .faculty-content {
            padding: clamp(25px, 4vw, 45px);
        }

        .faculty-badge {
            display: inline-flex;
            align-items: center;
            padding: 8px 13px;
            border: 1px solid #ffe0ce;
            border-radius: 30px;
            background: var(--coea-orange-tint);
            color: var(--coea-orange);
            font-size: 0.76rem;
            font-weight: 700;
        }

        .faculty-content h3 {
            margin: 20px 0 14px;
            font-size: clamp(1.45rem, 2.5vw, 2rem);
            font-weight: 800;
            line-height: 1.4;
        }

        .faculty-content h3 span {
            color: var(--coea-orange);
        }

        .faculty-content>p {
            color: var(--coea-muted);
            font-size: 0.88rem;
            line-height: 1.9;
        }

        .faculty-feature {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 16px;
            color: #444444;
            font-size: 0.83rem;
        }

        .faculty-feature i {
            color: var(--coea-orange);
            font-size: 1rem;
        }

        /* Program history */
        .history-card {
            padding: clamp(23px, 4vw, 48px);
            margin-top: 34px;
        }

        .history-intro {
            padding: 22px;
            margin-bottom: 30px;
            border: 1px solid #ffe3d3;
            border-left: 4px solid var(--coea-orange);
            border-radius: 0 14px 14px 0;
            background: #ffffff;
        }

        .history-intro h3 {
            margin: 0 0 10px;
            font-size: 1.1rem;
            font-weight: 800;
        }

        .history-intro h3 i {
            color: var(--coea-orange);
        }

        .history-intro p {
            margin: 0;
            color: #5e5e5e;
            font-size: 0.88rem;
            line-height: 1.9;
        }

        .history-timeline {
            position: relative;
            padding-left: 30px;
        }

        .history-timeline::before {
            position: absolute;
            top: 7px;
            bottom: 10px;
            left: 7px;
            width: 2px;
            background: #ffd8c2;
            content: "";
        }

        .history-item {
            position: relative;
            margin-bottom: 28px;
        }

        .history-item:last-child {
            margin-bottom: 0;
        }

        .history-item::before {
            position: absolute;
            top: 6px;
            left: -29px;
            width: 14px;
            height: 14px;
            border: 3px solid #ffffff;
            border-radius: 50%;
            background: var(--coea-orange);
            box-shadow: 0 0 0 2px #ffd8c2;
            content: "";
        }

        .history-item h3 {
            margin: 0 0 10px;
            font-size: 1rem;
            font-weight: 800;
        }

        .history-item h3 i {
            color: var(--coea-orange);
        }

        .history-item p {
            margin: 0;
            color: #626262;
            font-size: 0.87rem;
            line-height: 2;
        }

        /* History fact cards */
        .history-facts {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
            margin-top: 32px;
        }

        .history-fact {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 17px;
            border: 1px solid #eeeeee;
            border-radius: 14px;
            background: #ffffff;
            transition: border-color 0.2s ease,
                box-shadow 0.2s ease;
        }

        .history-fact:hover {
            border-color: #ffd2bb;
            box-shadow: 0 5px 16px rgba(255, 76, 1, 0.045);
        }

        .history-fact>i {
            color: var(--coea-orange);
            font-size: 1.25rem;
        }

        .history-fact strong {
            display: block;
            margin-bottom: 5px;
            font-size: 0.82rem;
        }

        .history-fact span {
            display: block;
            color: var(--coea-muted);
            font-size: 0.75rem;
            line-height: 1.7;
        }

        /* Final statement */
        .history-closing {
            padding: 23px;
            margin-top: 30px;
            border: 1px solid #ffe0ce;
            border-radius: 14px;
            background: var(--coea-orange-tint);
        }

        .history-closing>i {
            color: var(--coea-orange);
            font-size: 1.5rem;
        }

        .history-closing h3 {
            margin: 10px 0;
            font-size: 1rem;
            font-weight: 800;
        }

        .history-closing p {
            margin: 0;
            color: #555555;
            font-size: 0.86rem;
            line-height: 1.9;
        }


        /* Welcome Accreditors Section */
        .accreditors-welcome {
            /* Keep the welcome section clear of fixed/sticky navigation. */
            position: relative;
            z-index: 1;
            clear: both;
            padding: clamp(30px, 4vw, 54px) 0;
            padding-top: clamp(88px, 9vw, 112px);
            background: #ffffff;
            width: 100%;
            min-width: 0;
        }

        .accreditors-welcome-card {
            display: grid;
            grid-template-columns: minmax(0, 1.05fr) minmax(0, 0.95fr);
            align-items: center;
            gap: clamp(12px, 2vw, 26px);
            overflow: hidden;
            border: 0;
            border-radius: 24px;
            background: #ffffff;
            box-shadow: 0 12px 36px rgba(37, 37, 37, 0.055);
        }

        .accreditors-welcome-visual {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            min-width: 0;
            min-height: 100%;
            padding: clamp(10px, 1.6vw, 20px);
            overflow: hidden;
            isolation: isolate;
            background-color: #fff8f3;
            background-image:
                linear-gradient(rgba(255, 76, 1, 0.055) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 76, 1, 0.055) 1px, transparent 1px);
            background-size: 24px 24px;
        }

        /* Subtle animated drafting line inspired by engineering blueprints */
        .accreditors-welcome-visual::before {
            position: absolute;
            z-index: -1;
            top: 12%;
            left: -25%;
            width: 150%;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(255, 76, 1, 0.55), transparent);
            content: "";
            animation: engineering-draft-sweep 7s ease-in-out infinite;
        }

        .accreditors-welcome-visual::after {
            position: absolute;
            z-index: -1;
            right: 7%;
            bottom: 7%;
            width: clamp(48px, 7vw, 84px);
            aspect-ratio: 1;
            border: 2px solid rgba(255, 76, 1, 0.22);
            border-radius: 50%;
            box-shadow: 0 0 0 8px rgba(255, 76, 1, 0.035), 0 0 0 16px rgba(255, 76, 1, 0.025);
            content: "";
            animation: engineering-mark-pulse 5s ease-in-out infinite;
        }

        .accreditors-welcome-image {
            display: block;
            width: 100%;
            height: auto;
            max-height: none;
            object-fit: contain;
            border-radius: 12px;
            animation: welcome-image-enter 0.8s ease-out both;
        }

        .accreditors-welcome-caption {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            width: 100%;
            min-width: 0;
            padding: clamp(20px, 3vw, 42px);
            text-align: left;
            border: 0;
            animation: welcome-copy-enter 0.75s ease-out both;
        }

        .accreditors-welcome-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 13px;
            margin-bottom: 18px;
            border: 1px solid #ffe0ce;
            border-radius: 50px;
            background: var(--coea-orange-tint);
            color: var(--coea-orange);
            font-size: 0.73rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .accreditors-welcome-caption h2 {
            margin: 0 0 16px;
            color: var(--coea-dark);
            font-size: clamp(1.55rem, 2.5vw, 2.55rem);
            font-weight: 800;
            line-height: 1.2;
            letter-spacing: -0.8px;
            overflow-wrap: anywhere;
        }

        .accreditors-welcome-caption h2 span {
            color: var(--coea-orange);
        }

        .accreditors-welcome-caption p {
            margin: 0 0 22px;
            color: var(--coea-muted);
            font-size: clamp(0.82rem, 1.1vw, 0.92rem);
            line-height: 1.9;
        }

        .accreditors-welcome-signoff {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--coea-dark);
            font-size: 0.83rem;
            font-weight: 700;
        }

        .accreditors-welcome-signoff i {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            flex-shrink: 0;
            border-radius: 12px;
            background: var(--coea-orange-tint);
            color: var(--coea-orange);
            font-size: 1.1rem;
        }

        @keyframes engineering-draft-sweep {

            0%,
            100% {
                transform: translateY(0) rotate(-8deg);
                opacity: 0.35;
            }

            50% {
                transform: translateY(220px) rotate(-8deg);
                opacity: 0.8;
            }
        }

        @keyframes engineering-mark-pulse {

            0%,
            100% {
                transform: scale(0.94);
                opacity: 0.55;
            }

            50% {
                transform: scale(1.06);
                opacity: 1;
            }
        }

        @keyframes welcome-image-enter {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes welcome-copy-enter {
            from {
                opacity: 0;
                transform: translateX(10px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @media (max-width: 767.98px) {
            .accreditors-welcome {
                padding-top: 84px;
                padding-bottom: 28px;
            }

            .accreditors-welcome-card {
                grid-template-columns: minmax(0, 1fr);
                gap: 0;
                border-radius: 18px;
            }

            .accreditors-welcome-visual {
                padding: 12px;
            }

            .accreditors-welcome-caption {
                padding: 24px 20px 28px;
            }

            .accreditors-welcome-caption h2 {
                font-size: clamp(1.55rem, 6.5vw, 2.15rem);
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .accreditors-welcome {
                padding-top: 96px;
            }

            .accreditors-welcome-card {
                grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
                gap: 8px;
            }

            .accreditors-welcome-caption {
                padding: 20px 16px;
            }

            .accreditors-welcome-eyebrow {
                font-size: 0.66rem;
                padding: 7px 10px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .accreditors-welcome-visual::before,
            .accreditors-welcome-visual::after,
            .accreditors-welcome-image,
            .accreditors-welcome-caption {
                animation: none !important;
            }
        }

        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .coea-wrapper {
                padding: 0 18px;
            }

            .faculty-image-wrapper {
                min-height: 0;
            }

            .faculty-image {
                height: auto;
                min-height: 0;
                max-height: 520px;
            }
        }

        @media (max-width: 575.98px) {
            .coea-section {
                padding: 40px 0;
            }

            .coea-wrapper {
                padding: 0 13px;
            }

            .section-heading {
                letter-spacing: -0.5px;
            }

            .section-subtitle {
                font-size: 0.84rem;
            }

            .overview-card,
            .faculty-card,
            .history-card {
                border-radius: 16px;
            }

            .video-panel,
            .intro-panel {
                padding: 19px 15px;
            }

            .intro-text {
                font-size: 0.83rem;
            }

            .portal-highlights {
                gap: 8px;
            }

            .highlight-item {
                gap: 7px;
                padding: 11px 8px;
            }

            .highlight-icon {
                width: 30px;
                height: 30px;
                font-size: 0.95rem;
            }

            .highlight-item h3 {
                font-size: 0.72rem;
            }

            .highlight-item p {
                font-size: 0.66rem;
            }

            .faculty-content {
                padding: 22px 17px;
            }

            .history-card {
                padding: 21px 16px;
            }

            .history-intro {
                padding: 16px;
            }

            .history-timeline {
                padding-left: 25px;
            }

            .history-item::before {
                left: -24px;
            }

            .history-item p {
                font-size: 0.82rem;
                line-height: 1.9;
            }

            .history-facts {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .history-fact {
                padding: 14px;
            }

            .history-closing {
                padding: 18px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                scroll-behavior: auto !important;
                transition-duration: 0.01ms !important;
                animation-duration: 0.01ms !important;
            }
        }
    </style>
</head>

<body class="position-relative">

    <div class="main min-vh-100">

        <!-- Existing navigation: unchanged -->
        <?php include "./globals/header.php"; ?>

        <!-- ==========================================
             WELCOME ACCREDITORS SECTION
        =========================================== -->
        <section class="accreditors-welcome">
            <div class="coea-wrapper">
                <div class="accreditors-welcome-card" data-aos="fade-up">
                    <div class="accreditors-welcome-visual">
                        <img
                            src="../assets/accreditors.jfif"
                            alt="Welcome to our Civil Engineering Program Accreditors"
                            class="accreditors-welcome-image"
                            loading="eager">
                    </div>

                    <div class="accreditors-welcome-caption">
                        <div class="accreditors-welcome-eyebrow">
                            <i class="bi bi-stars"></i>
                            BSCE Accreditation Portal
                        </div>
                        <h2>
                            Welcome, <span>Esteemed Accreditors!</span>
                        </h2>
                        <p>
                            It is our honor to welcome you to our Civil Engineering
                            program. We sincerely appreciate your time, expertise,
                            and valuable insights as we continue our pursuit of
                            academic excellence, quality engineering education,
                            and continuous improvement.
                        </p>
                        <div class="accreditors-welcome-signoff">
                            <i class="bi bi-buildings-fill"></i>
                            <span>Together, building excellence in engineering.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- ==========================================
             SECTION 1: PROGRAM OVERVIEW
        =========================================== -->
        <section class="coea-section overview-section">

            <div class="coea-wrapper">

                <div class="text-center mb-4 mb-lg-5" data-aos="fade-up">

                    <div class="section-label">
                        <i class="bi bi-mortarboard-fill"></i>
                        BSCE Accreditation Portal
                    </div>

                    <h1 class="section-heading">
                        Excellence in <span>Civil Engineering</span>
                    </h1>

                    <p class="section-subtitle">
                        Explore our academic achievements, research initiatives,
                        community engagement, and commitment to continuous
                        institutional improvement.
                    </p>

                </div>

                <div class="overview-card" data-aos="fade-up">

                    <div class="row g-0 align-items-stretch">

                        <!-- YouTube video: placed on the right on desktop -->
                        <div class="col-lg-6 order-1 order-lg-2">

                            <div class="video-panel">

                                <div class="video-heading">

                                    <div class="video-icon">
                                        <i class="bi bi-play-circle-fill"></i>
                                    </div>

                                    <div>
                                        <h2>Program Overview</h2>
                                        <p>Discover our academic program</p>
                                    </div>

                                </div>

                                <div class="ratio ratio-16x9 video-frame">

                                    <iframe
                                        src="https://www.youtube-nocookie.com/embed/yRgSFguROO0"
                                        title="COEA Civil Engineering Program Overview"
                                        loading="eager"
                                        allow="encrypted-media; picture-in-picture; fullscreen"
                                        referrerpolicy="strict-origin-when-cross-origin"
                                        allowfullscreen>
                                    </iframe>

                                </div>

                                <div class="video-note">
                                    <i class="bi bi-info-circle-fill"></i>
                                    <span>
                                        Watch the program overview to learn more
                                        about our academic environment and
                                        institutional initiatives.
                                    </span>
                                </div>

                            </div>

                        </div>

                        <!-- Introduction: placed on the left on desktop -->
                        <div class="col-lg-6 order-2 order-lg-1">

                            <div class="intro-panel">

                                <div class="section-label align-self-start">
                                    <i class="bi bi-building-check"></i>
                                    About the Program
                                </div>

                                <h2>
                                    Welcome to the
                                    <span>BSCE Accreditation Portal</span>
                                </h2>

                                <p class="intro-text">
                                    Welcome to the accreditation portal of the
                                    <strong>Bachelor of Science in Civil
                                        Engineering (BSCE)</strong> program.
                                    This portal is designed to assist our
                                    esteemed accreditors in exploring the
                                    program's academic and institutional
                                    performance.

                                    Here, you can access essential information
                                    about our program profile, research and
                                    development initiatives, graduate
                                    achievements, community service activities,
                                    international linkages, strategic planning,
                                    and compliance reports.

                                    Each section provides relevant information
                                    and documentation demonstrating our
                                    commitment to academic excellence,
                                    continuous improvement, and adherence to
                                    accreditation standards.
                                </p>

                                <div class="portal-highlights">

                                    <div class="highlight-item">
                                        <div class="highlight-icon">
                                            <i class="bi bi-journal-richtext"></i>
                                        </div>
                                        <div>
                                            <h3>Academic Profile</h3>
                                            <p>Program information and academic records.</p>
                                        </div>
                                    </div>

                                    <div class="highlight-item">
                                        <div class="highlight-icon">
                                            <i class="bi bi-search"></i>
                                        </div>
                                        <div>
                                            <h3>Research</h3>
                                            <p>Research outputs and development initiatives.</p>
                                        </div>
                                    </div>

                                    <div class="highlight-item">
                                        <div class="highlight-icon">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <div>
                                            <h3>Community Service</h3>
                                            <p>Outreach and community engagement.</p>
                                        </div>
                                    </div>

                                    <div class="highlight-item">
                                        <div class="highlight-icon">
                                            <i class="bi bi-globe2"></i>
                                        </div>
                                        <div>
                                            <h3>International Linkages</h3>
                                            <p>Partnerships and collaboration.</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- ==========================================
             SECTION 2: CIVIL ENGINEERING FACULTY
        =========================================== -->
        <section class="coea-section" id="civil-engineering-faculty">

            <div class="coea-wrapper">

                <div class="text-center" data-aos="fade-up">

                    <div class="section-label">
                        <i class="bi bi-people-fill"></i>
                        Our Faculty
                    </div>

                    <h2 class="section-heading">
                        Civil Engineering <span>Faculty</span>
                    </h2>

                    <p class="section-subtitle">
                        Dedicated educators supporting quality engineering
                        education, research, professional development, and
                        student success.
                    </p>

                </div>

                <div class="faculty-card" data-aos="fade-up">

                    <div class="row g-0 align-items-center">

                        <div class="col-lg-7">

                            <div class="faculty-image-wrapper">

                                <img
                                    src="../assets/ce_faculty.jfif"
                                    alt="Civil Engineering Faculty"
                                    class="faculty-image"
                                    loading="lazy">

                            </div>

                        </div>

                        <div class="col-lg-5">

                            <div class="faculty-content">

                                <span class="faculty-badge">
                                    <i class="bi bi-mortarboard-fill me-2"></i>
                                    Bachelor of Science in Civil Engineering
                                </span>

                                <h3>
                                    Dedicated to Engineering
                                    <span>Excellence</span>
                                </h3>

                                <p>
                                    The Civil Engineering faculty provides
                                    academic instruction and guidance to help
                                    students develop the technical knowledge,
                                    practical skills, and professional
                                    competencies required in the engineering
                                    profession.
                                </p>

                                <div class="faculty-feature">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Quality Engineering Education
                                </div>

                                <div class="faculty-feature">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Research and Innovation
                                </div>

                                <div class="faculty-feature">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Professional Development
                                </div>

                                <div class="faculty-feature">
                                    <i class="bi bi-check-circle-fill"></i>
                                    Community Engagement
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- ==========================================
             SECTION 3: CIVIL ENGINEERING PROGRAM HISTORY
        =========================================== -->
        <section class="coea-section history-section" id="program-history">

            <div class="coea-wrapper">

                <div class="text-center" data-aos="fade-up">

                    <div class="section-label">
                        <i class="bi bi-clock-history"></i>
                        Our Background
                    </div>

                    <h2 class="section-heading">
                        Civil Engineering <span>Program History</span>
                    </h2>

                    <p class="section-subtitle">
                        Discover the program's role in regional development,
                        academic achievements, curriculum, and continuing
                        commitment to engineering education.
                    </p>

                </div>

                <div class="history-card" data-aos="fade-up">

                    <div class="history-intro">

                        <h3>
                            <i class="bi bi-book-half me-2"></i>
                            Establishment and Purpose
                        </h3>

                        <p>
                            The Civil Engineering program was opened in
                            response to the labor demand of the region for
                            infrastructure development, an essential factor
                            to spur regional socioeconomic growth and
                            development. The program prepares graduates to
                            contribute to the region's infrastructure needs
                            and the wider engineering profession.
                        </p>

                    </div>

                    <div class="history-timeline">

                        <article class="history-item">

                            <h3>
                                <i class="bi bi-person-workspace me-2"></i>
                                Faculty and Academic Excellence
                            </h3>

                            <p>
                                Competent instructors and professors with
                                graduate degrees earned locally and abroad
                                staff the program. Their academic preparation
                                and professional expertise support the
                                delivery of quality instruction and the
                                development of competent Civil Engineering
                                graduates.
                            </p>

                        </article>

                        <article class="history-item">

                            <h3>
                                <i class="bi bi-trophy me-2"></i>
                                Licensure Examination Performance
                            </h3>

                            <p>
                                The department produces quality graduates,
                                as demonstrated by its performance in the
                                Civil Engineering Licensure Examination,
                                which is consistently higher than the
                                national passing percentage.

                                Based on its performance, the department
                                was adjudged No. 5 among the top Civil
                                Engineering schools in the Philippines
                                offering the program for a minimum of
                                ten years. The department has also received
                                commendations for producing licensure
                                examination topnotchers and for becoming
                                a Center of Development.
                            </p>

                        </article>

                        <article class="history-item">

                            <h3>
                                <i class="bi bi-patch-check me-2"></i>
                                Program Compliance and Recognition
                            </h3>

                            <p>
                                The program was granted a Certificate of
                                Program Compliance (COPC 053, s. 2015) by
                                the Commission on Higher Education (CHED),
                                in accordance with the pertinent provisions
                                of Republic Act No. 7722, otherwise known as
                                the Higher Education Act of 1994, and CHED
                                Memorandum Order No. 028, s. 2007, containing
                                policies, standards, and guidelines for the
                                Civil Engineering program.
                            </p>

                        </article>

                        <article class="history-item">

                            <h3>
                                <i class="bi bi-journal-check me-2"></i>
                                Curriculum Development
                            </h3>

                            <p>
                                The curriculum is designed to meet or even
                                exceed CHED's minimum requirements and
                                incorporate recent developments and
                                technologies in Civil Engineering, locally
                                and globally.

                                It is continuously updated to provide breadth
                                of knowledge across Civil Engineering fields
                                through core courses, while ensuring depth
                                and focus through areas of specialization
                                and recommended specialization tracks.

                                The curriculum develops fundamental
                                engineering tools for solving complex
                                Civil Engineering problems and prepares
                                graduates for a wide range of careers.
                                Elective courses provide further
                                specialization and allow the institution
                                to strengthen areas in which it has
                                developed expertise.
                            </p>

                        </article>

                        <article class="history-item">

                            <h3>
                                <i class="bi bi-lightbulb me-2"></i>
                                Research and Community Extension
                            </h3>

                            <p>
                                Beyond instruction as its major thrust,
                                the college engages in research and
                                extension activities in support of
                                community needs.

                                Research serves as a thematic instrument
                                for generating knowledge, while community
                                extension provides a practical means of
                                applying that knowledge to community
                                activities. These complementary functions
                                connect classroom learning with real-world
                                challenges and contribute to the institution's
                                educational and social responsibilities.
                            </p>

                        </article>

                        <article class="history-item">

                            <h3>
                                <i class="bi bi-graph-up-arrow me-2"></i>
                                Accreditation and Continuing Development
                            </h3>

                            <p>
                                The college engages in accreditation
                                initiatives to assess and strengthen its
                                educational quality and institutional
                                development. Today, it continues to reinforce
                                its commitment to instruction, research,
                                community extension, and continuous
                                improvement in response to emerging
                                millennium trends and developments.
                            </p>

                        </article>

                    </div>

                    <!-- Key facts -->
                    <div class="history-facts">

                        <div class="history-fact">
                            <i class="bi bi-award-fill"></i>
                            <div>
                                <strong>Licensure Examination</strong>
                                <span>
                                    Reported performance consistently above
                                    the national passing percentage.
                                </span>
                            </div>
                        </div>

                        <div class="history-fact">
                            <i class="bi bi-patch-check-fill"></i>
                            <div>
                                <strong>Program Compliance</strong>
                                <span>
                                    COPC 053, s. 2015, as stated in the
                                    supplied program history.
                                </span>
                            </div>
                        </div>

                        <div class="history-fact">
                            <i class="bi bi-mortarboard-fill"></i>
                            <div>
                                <strong>Curriculum Development</strong>
                                <span>
                                    Core courses, electives, specializations,
                                    and current engineering technologies.
                                </span>
                            </div>
                        </div>

                        <div class="history-fact">
                            <i class="bi bi-people-fill"></i>
                            <div>
                                <strong>Community Engagement</strong>
                                <span>
                                    Research and extension activities
                                    connecting education with community needs.
                                </span>
                            </div>
                        </div>

                    </div>

                    <!-- Closing statement -->
                    <div class="history-closing">

                        <i class="bi bi-buildings-fill"></i>

                        <h3>Continuing Commitment</h3>

                        <p>
                            The Civil Engineering program continues to pursue
                            quality engineering education, relevant research,
                            meaningful community engagement, and continuous
                            institutional improvement to prepare graduates
                            for the evolving demands of the profession.
                        </p>

                    </div>

                </div>

            </div>

        </section>

    </div>

    <!-- Existing footer: unchanged -->
    <?php include "../globals/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 700,
            once: true,
            offset: 40
        });
    </script>

</body>

</html>