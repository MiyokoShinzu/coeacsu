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
    <style>
        :root {
            --coea-orange: #ff4c01;
            --coea-orange-light: #fe904d;
            --coea-ink: #252525;
            --coea-muted: #6b7280;
            --coea-bg: #fff8f4;
            --coea-border: rgba(255, 76, 1, .13);
            --coea-radius: 22px;
            --coea-shadow: 0 18px 48px rgba(91, 42, 16, .10);
            --coea-transition: .25s ease;
        }

        body {
            color: var(--coea-ink);
            font-family: 'Poppins', sans-serif;
            background:
                radial-gradient(circle at 8% 10%, rgba(254, 144, 77, .13), transparent 28rem),
                var(--coea-bg);
            overflow-x: hidden;
        }

        #main {
            min-height: calc(100vh - 80px);
            padding: 28px 18px 42px;
            transition: margin-left var(--coea-transition), width var(--coea-transition);
        }

        .welcome-shell {
            width: 100%;
            max-width: 1100px;
            margin: 0 auto;
        }

        .welcome-banner {
            position: relative;
            overflow: hidden;
            padding: clamp(26px, 5vw, 48px);
            border-radius: var(--coea-radius);
            color: #fff;
            background: linear-gradient(115deg, var(--coea-orange), var(--coea-orange-light));
            box-shadow: 0 16px 35px rgba(255, 76, 1, .20);
            isolation: isolate;
        }

        .welcome-banner::before,
        .welcome-banner::after {
            content: "";
            position: absolute;
            z-index: -1;
            border: 1px solid rgba(255, 255, 255, .23);
            border-radius: 50%;
        }

        .welcome-banner::before {
            width: 280px;
            height: 280px;
            right: -75px;
            top: -150px;
        }

        .welcome-banner::after {
            width: 200px;
            height: 200px;
            right: 65px;
            bottom: -145px;
        }

        .welcome-kicker {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 14px;
            padding: 7px 12px;
            border: 1px solid rgba(255, 255, 255, .34);
            border-radius: 999px;
            background: rgba(255, 255, 255, .13);
            font-size: .78rem;
            font-weight: 600;
            letter-spacing: 1.3px;
            text-transform: uppercase;
        }

        .welcome-banner h1 {
            margin: 0 0 12px;
            color: #fff;
            font-size: clamp(1.8rem, 4vw, 2.8rem);
            font-weight: 800;
            letter-spacing: -.7px;
            line-height: 1.2;
        }

        .welcome-banner p {
            max-width: 700px;
            margin: 0;
            color: rgba(255, 255, 255, .94);
            font-size: clamp(.95rem, 2vw, 1.08rem);
            line-height: 1.8;
        }

        .welcome-content {
            display: grid;
            grid-template-columns: minmax(0, 1.25fr) minmax(240px, .75fr);
            gap: 22px;
            margin-top: 24px;
        }

        .welcome-card {
            min-width: 0;
            padding: clamp(22px, 3.5vw, 34px);
            border: 1px solid var(--coea-border);
            border-radius: var(--coea-radius);
            background: #fff;
            box-shadow: var(--coea-shadow);
            transition: transform var(--coea-transition), box-shadow var(--coea-transition);
        }

        .welcome-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 22px 52px rgba(91, 42, 16, .13);
        }

        .welcome-logo-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 82px;
            height: 82px;
            margin-bottom: 22px;
            padding: 10px;
            border-radius: 22px;
            background: linear-gradient(145deg, #fff0e7, #fff9f5);
            border: 1px solid var(--coea-border);
        }

        .welcome-logo {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .welcome-card h2,
        .welcome-card h3 {
            color: var(--coea-orange);
            font-weight: 800;
        }

        .welcome-card h2 {
            margin-bottom: 12px;
            font-size: clamp(1.35rem, 2.5vw, 1.8rem);
        }

        .welcome-card p {
            color: #555b63;
            line-height: 1.85;
        }

        .welcome-card strong {
            color: #333;
        }

        .section-label {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 16px;
            color: var(--coea-orange);
            font-size: .78rem;
            font-weight: 800;
            letter-spacing: 1.3px;
            text-transform: uppercase;
        }

        .section-label::before {
            content: "";
            width: 28px;
            height: 3px;
            border-radius: 5px;
            background: linear-gradient(90deg, var(--coea-orange), var(--coea-orange-light));
        }

        .quick-tip {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            padding: 15px;
            border-radius: 15px;
            background: #fff7f1;
            border: 1px solid rgba(255, 76, 1, .10);
        }

        .quick-tip-icon {
            display: flex;
            flex: 0 0 42px;
            align-items: center;
            justify-content: center;
            width: 42px;
            height: 42px;
            border-radius: 13px;
            color: #fff;
            background: linear-gradient(135deg, var(--coea-orange), var(--coea-orange-light));
            font-size: 1.15rem;
        }

        .quick-tip p {
            margin: 0;
            font-size: .92rem;
        }

        .welcome-quote {
            margin: 22px 0 0;
            padding: 15px 18px;
            border-left: 4px solid var(--coea-orange-light);
            border-radius: 0 12px 12px 0;
            color: var(--coea-muted);
            background: #fffaf7;
            font-size: .92rem;
            font-style: italic;
            line-height: 1.7;
        }

        @media (max-width: 767.98px) {
            #main {
                padding: 18px 12px 30px;
            }

            .welcome-content {
                grid-template-columns: 1fr;
                gap: 16px;
                margin-top: 16px;
            }

            .welcome-banner {
                border-radius: 18px;
            }

            .welcome-card {
                border-radius: 18px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                transition: none !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>

<body>
    <?php include "./globals/navbar.php"; ?>

    <main id="main">
        <div class="welcome-shell">
            <section class="welcome-banner" aria-labelledby="welcome-title">
                <div class="welcome-kicker"><i class="bi bi-grid-1x2-fill" aria-hidden="true"></i> COEA ADMIN PORTAL</div>
                <h1 id="welcome-title">Welcome, Admin!</h1>
                <p>Your central workspace for managing the <strong style="color:#fff;"><?php echo htmlspecialchars($programName, ENT_QUOTES, 'UTF-8'); ?> Program</strong> of the College of Engineering and Architecture.</p>
            </section>

            <div class="welcome-content">
                <section class="welcome-card" aria-labelledby="program-heading">
                    <div class="welcome-logo-wrap">
                        <img src="../assets/coea_logo.png" alt="College of Engineering and Architecture logo" class="welcome-logo">
                    </div>
                    <div class="section-label">Your Dashboard</div>
                    <h2 id="program-heading">Welcome to <?php echo htmlspecialchars($programName, ENT_QUOTES, 'UTF-8'); ?></h2>
                    <p>You have entered the virtual dashboard for the <strong>College of Engineering and Architecture — <?php echo htmlspecialchars($programName, ENT_QUOTES, 'UTF-8'); ?> Program</strong>.</p>
                    <p>Use the sidebar to access and manage the different sections of your department, including <strong>Research, Graduates, Extension, Planning</strong>, and other program records.</p>
                    <blockquote class="welcome-quote">“Success is the sum of small efforts, repeated day in and day out.”</blockquote>
                </section>

                <aside class="welcome-card" aria-labelledby="quick-guide-heading">
                    <div class="section-label">Getting Started</div>
                    <h3 id="quick-guide-heading" class="h4 mb-3">Your workspace, at a glance</h3>
                    <div class="quick-tip mb-3">
                        <div class="quick-tip-icon"><i class="bi bi-list-task" aria-hidden="true"></i></div>
                        <div><strong>Navigate sections</strong>
                            <p class="mt-1">Open the sidebar to find the records and tools available to your program.</p>
                        </div>
                    </div>
                    <div class="quick-tip mb-3">
                        <div class="quick-tip-icon"><i class="bi bi-folder2-open" aria-hidden="true"></i></div>
                        <div><strong>Manage documentation</strong>
                            <p class="mt-1">Keep your program's reports, attachments, and supporting documents organized.</p>
                        </div>
                    </div>
                    <div class="quick-tip">
                        <div class="quick-tip-icon"><i class="bi bi-shield-check" aria-hidden="true"></i></div>
                        <div><strong>Work carefully</strong>
                            <p class="mt-1">Review information before saving changes to your department's records.</p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>

    <?php include "./globals/scripts.php"; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('toggleSidebar');
            const sidebar = document.getElementById('sidebar');
            const main = document.getElementById('main');
            const topbar = document.getElementById('topbar');

            // Avoid a JavaScript error on layouts where the sidebar toggle is not present.
            if (!toggleBtn || !sidebar || !main || !topbar) return;

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
        });
    </script>
</body>

</html>