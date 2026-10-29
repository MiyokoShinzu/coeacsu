<?php
// Keep your existing shared head and navigation includes.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$departmentCode = strtoupper(trim((string)($_SESSION['department'] ?? '')));
$departmentCode = preg_replace('/[^A-Z0-9]/', '', $departmentCode);
$programName = 'BS' . ($departmentCode !== '' ? $departmentCode : 'PROGRAM');
?>
<?php include "./globals/head.php" ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ff4c01">
    <style>
        :root {
            --portal-orange: #ff4c01;
            --portal-orange-light: #ff8a45;
            --portal-orange-pale: #fff0e7;
            --portal-ink: #20232b;
            --portal-muted: #6e7480;
            --portal-bg: #fffaf7;
            --portal-line: rgba(255, 76, 1, .13);
            --portal-shadow: 0 18px 48px rgba(74, 39, 20, .09);
            --portal-ease: cubic-bezier(.2, .75, .25, 1);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            color: var(--portal-ink);
            font-family: 'Poppins', sans-serif;
            background:
                radial-gradient(ellipse at 12% 8%, rgba(255, 138, 69, .12), transparent 28rem),
                radial-gradient(ellipse at 95% 45%, rgba(255, 76, 1, .055), transparent 25rem),
                var(--portal-bg);
            overflow-x: hidden;
        }

        #main {
            position: relative;
            min-height: calc(100vh - 75px);
            padding: clamp(18px, 3vw, 36px) clamp(12px, 2.4vw, 30px) 52px;
            transition: margin-left .35s var(--portal-ease), width .35s var(--portal-ease), transform .35s var(--portal-ease);
        }

        .portal-shell {
            width: 100%;
            max-width: 1220px;
            margin: 0 auto;
        }

        .portal-hero {
            position: relative;
            isolation: isolate;
            overflow: hidden;
            min-height: 285px;
            padding: clamp(28px, 5vw, 58px);
            border-radius: 28px;
            color: #fff;
            background: linear-gradient(118deg, #e94300 0%, var(--portal-orange) 47%, var(--portal-orange-light) 100%);
            box-shadow: 0 22px 48px rgba(255, 76, 1, .20);
            animation: portalRise .75s var(--portal-ease) both;
        }

        .portal-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -2;
            opacity: .22;
            background-image: linear-gradient(rgba(255, 255, 255, .17) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, .17) 1px, transparent 1px);
            background-size: 34px 34px;
            mask-image: linear-gradient(110deg, #000, transparent 82%);
        }

        .portal-hero::after {
            content: "";
            position: absolute;
            width: 390px;
            height: 390px;
            right: -105px;
            top: -180px;
            z-index: -1;
            border: 1px solid rgba(255, 255, 255, .24);
            border-radius: 50%;
            box-shadow: 0 0 0 28px rgba(255, 255, 255, .045), 0 0 0 58px rgba(255, 255, 255, .035), 0 0 0 90px rgba(255, 255, 255, .025);
        }

        .hero-orbit {
            position: absolute;
            right: 8%;
            bottom: 20px;
            width: 150px;
            height: 150px;
            border: 1px solid rgba(255, 255, 255, .25);
            border-radius: 50%;
            animation: orbitSpin 24s linear infinite;
            pointer-events: none;
        }

        .hero-orbit::before,
        .hero-orbit::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, .85);
            box-shadow: 0 0 18px rgba(255, 255, 255, .55);
        }

        .hero-orbit::before {
            width: 9px;
            height: 9px;
            left: 16px;
            top: 20px;
        }

        .hero-orbit::after {
            width: 6px;
            height: 6px;
            right: 5px;
            bottom: 38px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 760px;
        }

        .portal-kicker {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 18px;
            padding: 8px 13px;
            border: 1px solid rgba(255, 255, 255, .34);
            border-radius: 999px;
            background: rgba(255, 255, 255, .13);
            color: #fff;
            font-size: .73rem;
            font-weight: 750;
            letter-spacing: 1.35px;
            text-transform: uppercase;
            backdrop-filter: blur(8px);
        }

        .kicker-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #fff;
            box-shadow: 0 0 0 5px rgba(255, 255, 255, .15);
            animation: dotPulse 2s ease-in-out infinite;
        }

        .portal-hero h1 {
            margin: 0 0 14px;
            max-width: 780px;
            color: #fff;
            font-size: clamp(2rem, 4.5vw, 3.45rem);
            font-weight: 850;
            letter-spacing: -1.2px;
            line-height: 1.12;
        }

        .portal-hero h1 span {
            display: block;
            color: #fff2e9;
        }

        .portal-hero p {
            max-width: 680px;
            margin: 0;
            color: rgba(255, 255, 255, .93);
            font-size: clamp(.93rem, 1.5vw, 1.05rem);
            line-height: 1.85;
        }

        .hero-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 9px;
            margin-top: 24px;
        }

        .hero-chip {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 8px 12px;
            border: 1px solid rgba(255, 255, 255, .25);
            border-radius: 10px;
            background: rgba(255, 255, 255, .12);
            color: #fff;
            font-size: .78rem;
            font-weight: 600;
        }

        .hero-chip i {
            font-size: .95rem;
        }

        .portal-section-heading {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 16px;
            margin: 32px 2px 16px;
            animation: portalRise .7s .08s var(--portal-ease) both;
        }

        .portal-overline {
            display: block;
            margin-bottom: 7px;
            color: var(--portal-orange);
            font-size: .7rem;
            font-weight: 850;
            letter-spacing: 1.6px;
            text-transform: uppercase;
        }

        .portal-section-heading h2 {
            margin: 0;
            color: var(--portal-ink);
            font-size: clamp(1.35rem, 2.5vw, 1.85rem);
            font-weight: 820;
            letter-spacing: -.5px;
        }

        .portal-section-heading p {
            margin: 6px 0 0;
            color: var(--portal-muted);
            font-size: .9rem;
        }

        .section-decoration {
            display: flex;
            gap: 5px;
            padding-bottom: 5px;
        }

        .section-decoration span {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--portal-orange);
            opacity: .25;
        }

        .section-decoration span:nth-child(2) {
            opacity: .5;
        }

        .section-decoration span:nth-child(3) {
            opacity: .85;
        }

        .portal-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr);
            gap: 20px;
            align-items: stretch;
        }

        .portal-card {
            position: relative;
            min-width: 0;
            overflow: hidden;
            padding: clamp(22px, 3.2vw, 34px);
            border: 1px solid var(--portal-line);
            border-radius: 23px;
            background: rgba(255, 255, 255, .92);
            box-shadow: var(--portal-shadow);
            transition: transform .32s var(--portal-ease), box-shadow .32s var(--portal-ease), border-color .32s ease;
            animation: portalRise .72s var(--portal-ease) both;
        }

        .portal-card:nth-child(2) {
            animation-delay: .13s;
        }

        .portal-card:hover {
            transform: translateY(-5px);
            border-color: rgba(255, 76, 1, .28);
            box-shadow: 0 25px 58px rgba(74, 39, 20, .14);
        }

        .portal-card::after {
            content: "";
            position: absolute;
            width: 150px;
            height: 150px;
            right: -90px;
            bottom: -95px;
            border: 1px solid rgba(255, 76, 1, .12);
            border-radius: 50%;
            transition: transform .5s var(--portal-ease);
            pointer-events: none;
        }

        .portal-card:hover::after {
            transform: scale(1.5);
        }

        .portal-brand-row {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 25px;
        }

        .portal-logo-frame {
            position: relative;
            display: grid;
            flex: 0 0 82px;
            width: 82px;
            height: 82px;
            place-items: center;
            padding: 12px;
            border: 1px solid rgba(255, 76, 1, .14);
            border-radius: 23px;
            background: linear-gradient(145deg, #fff0e7, #fffaf6);
            box-shadow: inset 0 1px 0 #fff;
        }

        .portal-logo-frame::before {
            content: "";
            position: absolute;
            inset: -5px;
            border: 1px dashed rgba(255, 76, 1, .2);
            border-radius: 27px;
            animation: orbitSpin 32s linear infinite;
        }

        .portal-logo {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .portal-logo-fallback {
            display: none;
            color: var(--portal-orange);
            font-size: 2rem;
        }

        .portal-card h2,
        .portal-card h3 {
            color: var(--portal-ink);
            font-weight: 820;
        }

        .portal-card h2 {
            margin: 0 0 10px;
            font-size: clamp(1.45rem, 2.6vw, 1.9rem);
            letter-spacing: -.6px;
        }

        .portal-card h2 span {
            color: var(--portal-orange);
        }

        .portal-card p {
            color: #626873;
            font-size: .92rem;
            line-height: 1.85;
        }

        .portal-card strong {
            color: #333842;
        }

        .portal-card .portal-description {
            margin-bottom: 18px;
        }

        .portal-divider {
            height: 1px;
            margin: 22px 0;
            background: linear-gradient(90deg, rgba(255, 76, 1, .2), rgba(255, 76, 1, .02));
        }

        .portal-quote {
            position: relative;
            margin: 0;
            padding: 16px 18px 16px 45px;
            border: 1px solid rgba(255, 76, 1, .1);
            border-left: 3px solid var(--portal-orange);
            border-radius: 0 14px 14px 0;
            background: #fff8f3;
            color: #6f727a;
            font-size: .9rem;
            font-style: italic;
            line-height: 1.7;
        }

        .portal-quote::before {
            content: "“";
            position: absolute;
            left: 15px;
            top: 7px;
            color: var(--portal-orange-light);
            font-family: Georgia, serif;
            font-size: 2.2rem;
            line-height: 1;
        }

        .guide-heading {
            display: flex;
            align-items: center;
            gap: 13px;
            margin-bottom: 22px;
        }

        .guide-heading-icon {
            display: grid;
            flex: 0 0 48px;
            width: 48px;
            height: 48px;
            place-items: center;
            border-radius: 15px;
            background: var(--portal-orange-pale);
            color: var(--portal-orange);
            font-size: 1.35rem;
            transition: transform .3s var(--portal-ease);
        }

        .portal-card:hover .guide-heading-icon {
            transform: rotate(-7deg) scale(1.06);
        }

        .guide-heading h3 {
            margin: 0 0 4px;
            font-size: 1.15rem;
        }

        .guide-heading p {
            margin: 0;
            font-size: .8rem;
        }

        .guide-list {
            display: grid;
            gap: 12px;
        }

        .guide-item {
            display: flex;
            align-items: flex-start;
            gap: 13px;
            padding: 14px;
            border: 1px solid rgba(255, 76, 1, .09);
            border-radius: 15px;
            background: #fffaf7;
            transition: transform .25s var(--portal-ease), background .25s ease, border-color .25s ease;
        }

        .guide-item:hover {
            transform: translateX(4px);
            border-color: rgba(255, 76, 1, .22);
            background: #fff3eb;
        }

        .guide-icon {
            display: grid;
            flex: 0 0 40px;
            width: 40px;
            height: 40px;
            place-items: center;
            border-radius: 12px;
            background: linear-gradient(145deg, var(--portal-orange), var(--portal-orange-light));
            color: #fff;
            font-size: 1.05rem;
            box-shadow: 0 6px 14px rgba(255, 76, 1, .18);
        }

        .guide-item strong {
            display: block;
            margin: 1px 0 4px;
            font-size: .88rem;
        }

        .guide-item p {
            margin: 0;
            font-size: .79rem;
            line-height: 1.65;
        }

        .portal-feature-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
            margin-top: 20px;
        }

        .portal-feature {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            min-width: 0;
            padding: 20px;
            border: 1px solid var(--portal-line);
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 10px 28px rgba(74, 39, 20, .045);
            transition: transform .3s var(--portal-ease), box-shadow .3s ease, border-color .3s ease;
            animation: portalRise .7s .18s var(--portal-ease) both;
        }

        .portal-feature:nth-child(2) {
            animation-delay: .25s;
        }

        .portal-feature:nth-child(3) {
            animation-delay: .32s;
        }

        .portal-feature:hover {
            transform: translateY(-4px);
            border-color: rgba(255, 76, 1, .25);
            box-shadow: 0 18px 38px rgba(74, 39, 20, .09);
        }

        .feature-icon {
            display: grid;
            flex: 0 0 44px;
            width: 44px;
            height: 44px;
            place-items: center;
            border-radius: 14px;
            background: var(--portal-orange-pale);
            color: var(--portal-orange);
            font-size: 1.2rem;
            transition: transform .35s var(--portal-ease), background .25s ease, color .25s ease;
        }

        .portal-feature:hover .feature-icon {
            transform: rotate(8deg) scale(1.08);
            background: var(--portal-orange);
            color: #fff;
        }

        .portal-feature h3 {
            margin: 2px 0 6px;
            color: var(--portal-ink);
            font-size: .91rem;
            font-weight: 800;
        }

        .portal-feature p {
            margin: 0;
            color: var(--portal-muted);
            font-size: .79rem;
            line-height: 1.7;
        }

        .portal-footer-note {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 9px;
            margin-top: 26px;
            color: #8a8d95;
            font-size: .76rem;
            text-align: center;
            animation: portalRise .7s .35s var(--portal-ease) both;
        }

        .portal-footer-note i {
            color: var(--portal-orange);
        }

        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity .65s var(--portal-ease), transform .65s var(--portal-ease);
        }

        .reveal-on-scroll.is-visible {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes portalRise {
            from {
                opacity: 0;
                transform: translateY(22px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes orbitSpin {
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes dotPulse {

            0%,
            100% {
                box-shadow: 0 0 0 4px rgba(255, 255, 255, .12);
            }

            50% {
                box-shadow: 0 0 0 8px rgba(255, 255, 255, .04);
            }
        }

        @media (max-width: 900px) {
            .portal-grid {
                grid-template-columns: 1fr;
            }

            .portal-feature-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .hero-orbit {
                right: 2%;
                opacity: .55;
            }
        }

        @media (max-width: 575.98px) {
            #main {
                padding: 16px 11px 30px;
            }

            .portal-hero {
                min-height: auto;
                padding: 27px 22px;
                border-radius: 21px;
            }

            .portal-hero::after {
                right: -180px;
            }

            .hero-orbit {
                width: 90px;
                height: 90px;
                right: 10px;
                bottom: 10px;
                opacity: .3;
            }

            .portal-hero h1 {
                max-width: 100%;
                font-size: 2rem;
                letter-spacing: -.8px;
            }

            .portal-hero p {
                font-size: .88rem;
            }

            .portal-section-heading {
                align-items: flex-start;
                margin-top: 26px;
            }

            .portal-card {
                padding: 21px 18px;
                border-radius: 19px;
            }

            .portal-brand-row {
                align-items: flex-start;
                gap: 15px;
            }

            .portal-logo-frame {
                flex-basis: 66px;
                width: 66px;
                height: 66px;
                border-radius: 19px;
            }

            .portal-feature-grid {
                grid-template-columns: 1fr;
                gap: 11px;
            }

            .portal-feature {
                padding: 17px;
            }

            .hero-chip {
                font-size: .72rem;
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
            }

            .reveal-on-scroll {
                opacity: 1;
                transform: none;
            }
        }
    </style>
</head>

<body>
    <?php include "./globals/navbar.php"; ?>

    <main id="main">
        <div class="portal-shell">
            <section class="portal-hero" aria-labelledby="portal-title">
                <div class="hero-orbit" aria-hidden="true"></div>
                <div class="hero-content">
                    <div class="portal-kicker"><span class="kicker-dot" aria-hidden="true"></span> College of Engineering and Architecture</div>
                    <h1 id="portal-title">BSCE <span>Accreditation Portal</span></h1>
                    <p>Your central workspace for organizing, maintaining, and reviewing accreditation documents and program evidence for the <strong style="color:#fff;"><?php echo htmlspecialchars($programName, ENT_QUOTES, 'UTF-8'); ?> Program</strong>.</p>
                    <div class="hero-chips" aria-label="Portal features">
                        <span class="hero-chip"><i class="bi bi-folder2-open" aria-hidden="true"></i> Organized Records</span>
                        <span class="hero-chip"><i class="bi bi-file-earmark-check" aria-hidden="true"></i> Accreditation Evidence</span>
                        <span class="hero-chip"><i class="bi bi-shield-check" aria-hidden="true"></i> Program Workspace</span>
                    </div>
                </div>
            </section>

            <div class="portal-section-heading">
                <div>
                    <span class="portal-overline">Your accreditation workspace</span>
                    <h2>Welcome back, Admin</h2>
                    <p>Everything starts with well-organized evidence and clear documentation.</p>
                </div>
                <div class="section-decoration" aria-hidden="true"><span></span><span></span><span></span></div>
            </div>

            <div class="portal-grid">
                <section class="portal-card" aria-labelledby="program-heading">
                    <div class="portal-brand-row">
                        <div class="portal-logo-frame">
                            <img src="../assets/coea_logo.png" alt="College of Engineering and Architecture logo" class="portal-logo" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';">
                            <i class="bi bi-mortarboard-fill portal-logo-fallback" aria-hidden="true"></i>
                        </div>
                        <div>
                            <span class="portal-overline">Program dashboard</span>
                            <h2 id="program-heading">Welcome to <span><?php echo htmlspecialchars($programName, ENT_QUOTES, 'UTF-8'); ?></span></h2>
                            <p class="mb-0" style="font-size:.82rem;">College of Engineering and Architecture</p>
                        </div>
                    </div>
                    <p class="portal-description">You are in the digital workspace for the <strong>College of Engineering and Architecture — <?php echo htmlspecialchars($programName, ENT_QUOTES, 'UTF-8'); ?> Program</strong>, bringing together your program's accreditation records and supporting documentation.</p>
                    <p class="portal-description">Keep reports, attachments, and evidence files consistent, current, and easy for your team to locate when preparing for accreditation reviews.</p>
                    <div class="portal-divider"></div>
                    <blockquote class="portal-quote">Excellence is built one well-documented step at a time.</blockquote>
                </section>

            </div>

            <div class="portal-feature-grid">
                <article class="portal-feature reveal-on-scroll">
                    <div class="feature-icon"><i class="bi bi-journal-richtext" aria-hidden="true"></i></div>
                    <div>
                        <h3>Structured documentation</h3>
                        <p>Keep program files grouped by the appropriate section for easier retrieval and review.</p>
                    </div>
                </article>
                <article class="portal-feature reveal-on-scroll">
                    <div class="feature-icon"><i class="bi bi-diagram-3" aria-hidden="true"></i></div>
                    <div>
                        <h3>Connected program records</h3>
                        <p>Use the portal navigation to move between the areas available to your department.</p>
                    </div>
                </article>
                <article class="portal-feature reveal-on-scroll">
                    <div class="feature-icon"><i class="bi bi-check2-circle" aria-hidden="true"></i></div>
                    <div>
                        <h3>Quality-focused workflow</h3>
                        <p>Support a smoother accreditation process through careful organization and regular checking.</p>
                    </div>
                </article>
            </div>

            <div class="portal-footer-note"><i class="bi bi-stars" aria-hidden="true"></i><span>BSCE Accreditation Portal · College of Engineering and Architecture</span><i class="bi bi-stars" aria-hidden="true"></i></div>
        </div>
    </main>

    <?php include "./globals/scripts.php"; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('toggleSidebar');
            const sidebar = document.getElementById('sidebar');
            const main = document.getElementById('main');
            const topbar = document.getElementById('topbar');

            if (toggleBtn && sidebar && main && topbar) {
                toggleBtn.addEventListener('click', function() {
                    const isSmallScreen = window.innerWidth < 992;
                    if (isSmallScreen) {
                        sidebar.classList.toggle('show');
                        main.classList.toggle('shift');
                        topbar.classList.toggle('shift');
                    } else {
                        sidebar.classList.toggle('hide');
                        main.classList.toggle('shrink');
                        topbar.classList.toggle('shrink');
                    }
                });
            }

            const revealItems = document.querySelectorAll('.reveal-on-scroll');
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver(function(entries, obs) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            obs.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.12
                });
                revealItems.forEach(function(item) {
                    observer.observe(item);
                });
            } else {
                revealItems.forEach(function(item) {
                    item.classList.add('is-visible');
                });
            }
        });
    </script>
</body>

</html>