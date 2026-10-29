<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
$departmentCode = strtoupper(trim((string)($_SESSION['department'] ?? '')));
?>
<style>
    :root {
        --coea-orange: #ff4c01;
        --coea-orange-light: #fe904d;
        --coea-text: #292929;
        --coea-muted: #6b7280;
        --coea-border: #eeeeee;
        --coea-topbar-height: 68px;
    }

    /* Topbar-only navigation: no sidebar or sidebar offset. */
    .sidebar,
    #sidebar,
    #sidebarBackdrop,
    #toggleSidebar {
        display: none !important;
    }

    .navbar-custom {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        z-index: 1050;
        display: flex;
        align-items: center;
        gap: 12px;
        width: 100% !important;
        min-height: var(--coea-topbar-height);
        height: auto;
        margin: 0 !important;
        padding: 10px 20px;
        background: #fff;
        color: var(--coea-text);
        border-bottom: 1px solid var(--coea-border);
        box-shadow: 0 2px 12px rgba(0, 0, 0, .045);
    }

    .navbar-custom .csu-logo {
        width: 36px;
        height: 36px;
        object-fit: contain;
        flex: 0 0 auto;
    }

    .navbar-custom .university-name {
        flex: 0 0 auto;
        margin: 0;
        color: var(--coea-text);
        font-size: .94rem;
        font-weight: 700;
        white-space: nowrap;
    }

    .navbar-custom .department-label {
        color: var(--coea-muted);
        font-size: .76rem;
        font-weight: 600;
        white-space: nowrap;
    }

    .topbar-menu-toggle {
        display: none;
        align-items: center;
        justify-content: center;
        flex: 0 0 auto;
        width: 40px;
        height: 40px;
        margin-left: auto;
        border: 1px solid #ffd4c2;
        border-radius: 10px;
        color: var(--coea-orange);
        background: #fff7f2;
        font-size: 1.35rem;
    }

    .topbar-links {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 4px;
        margin-left: auto;
        min-width: 0;
    }

    .topbar-links a {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 10px 11px;
        border-radius: 9px;
        color: #4b5563;
        text-decoration: none;
        font-size: .82rem;
        font-weight: 600;
        white-space: nowrap;
        transition: color .2s ease, background .2s ease;
    }

    .topbar-links a i {
        font-size: .98rem;
    }

    .topbar-links a:hover {
        color: var(--coea-orange);
        background: #fff3ed;
    }

    .topbar-links a.active {
        color: var(--coea-orange);
        background: #fff0e8;
    }

    .topbar-links a.logout-link {
        color: #b42318;
    }

    .topbar-links a.logout-link:hover {
        background: #fff0ef;
    }

    /* Main page content always uses the full viewport width. */
    #main,
    #main.shrink,
    #main.shift {
        display: flow-root;
        width: 100% !important;
        max-width: 100% !important;
        min-width: 0;
        margin-left: 0 !important;
        padding-top: calc(var(--coea-topbar-height) + 14px) !important;
        transition: none;
    }

    #main>.container,
    #main>.container-fluid,
    #main .container-fluid {
        width: 100%;
        max-width: 100%;
    }

    body {
        overflow-x: hidden;
    }

    @media (max-width: 1199.98px) {
        .navbar-custom {
            gap: 8px;
            padding-inline: 14px;
        }

        .topbar-links a {
            padding: 9px 8px;
            font-size: .77rem;
            gap: 5px;
        }

        .navbar-custom .university-name {
            font-size: .87rem;
        }

        .navbar-custom .department-label {
            display: none;
        }
    }

    @media (max-width: 991.98px) {
        .navbar-custom {
            flex-wrap: wrap;
            padding: 10px 14px;
        }

        .topbar-menu-toggle {
            display: inline-flex;
        }

        .topbar-links {
            display: none;
            order: 10;
            flex: 0 0 100%;
            width: 100%;
            margin: 2px 0 0;
            padding-top: 8px;
            border-top: 1px solid var(--coea-border);
            flex-direction: column;
            align-items: stretch;
            gap: 3px;
        }

        .topbar-links.open {
            display: flex;
        }

        .topbar-links a {
            width: 100%;
            padding: 11px 12px;
            font-size: .9rem;
        }

        .topbar-links a i {
            width: 22px;
            text-align: center;
        }

        #main,
        #main.shrink,
        #main.shift {
            padding-top: calc(var(--coea-topbar-height) + 14px) !important;
        }
    }

    @media (max-width: 480px) {
        :root {
            --coea-topbar-height: 60px;
        }

        .navbar-custom {
            gap: 8px;
            padding: 8px 10px;
        }

        .navbar-custom .csu-logo {
            width: 31px;
            height: 31px;
        }

        .navbar-custom .university-name {
            font-size: .8rem;
            white-space: normal;
            line-height: 1.2;
        }

        .topbar-menu-toggle {
            width: 36px;
            height: 36px;
        }
    }
</style>

<nav id="topbar" class="navbar navbar-custom" aria-label="Main navigation">
    <img src="../assets/csu_logo.png" alt="CSU logo" class="csu-logo">
    <div class="d-flex flex-column">
        <h6 class="university-name">Cagayan State University</h6>
        <span class="department-label">COEA-BS<?= htmlspecialchars($departmentCode, ENT_QUOTES, 'UTF-8') ?></span>
    </div>

    <button id="topbarMenuToggle" class="topbar-menu-toggle" type="button"
        aria-label="Toggle navigation links" aria-controls="topbarLinks" aria-expanded="false">
        <i class="bi bi-list"></i>
    </button>

    <nav id="topbarLinks" class="topbar-links" aria-label="Admin pages">
        <a href="index.php"><i class="bi bi-house-door-fill"></i><span>Home</span></a>
        <a href="research.php"><i class="bi bi-journal-text"></i><span>Research</span></a>
        <a href="graduates.php"><i class="bi bi-mortarboard-fill"></i><span>Graduates</span></a>
        <a href="extension.php"><i class="bi bi-people-fill"></i><span>Extension</span></a>
        <a href="linkages.php"><i class="bi bi-globe2"></i><span>Linkages</span></a>
        <a href="planning.php"><i class="bi bi-diagram-3-fill"></i><span>Planning</span></a>
        <a class="logout-link" href="../api/logout.php"><i class="bi bi-box-arrow-right"></i><span>Logout</span></a>
    </nav>
</nav>

<script>
    (() => {
        const toggle = document.getElementById('topbarMenuToggle');
        const links = document.getElementById('topbarLinks');
        if (!toggle || !links) return;

        toggle.addEventListener('click', () => {
            const open = links.classList.toggle('open');
            toggle.setAttribute('aria-expanded', String(open));
            const icon = toggle.querySelector('i');
            if (icon) icon.className = open ? 'bi bi-x-lg' : 'bi bi-list';
        });

        const currentFile = window.location.pathname.split('/').pop();
        links.querySelectorAll('a').forEach(link => {
            const linkFile = link.getAttribute('href')?.split('/').pop();
            if (linkFile && linkFile === currentFile) {
                link.classList.add('active');
                link.setAttribute('aria-current', 'page');
            }
            link.addEventListener('click', () => {
                if (window.matchMedia('(max-width: 991.98px)').matches) {
                    links.classList.remove('open');
                    toggle.setAttribute('aria-expanded', 'false');
                    const icon = toggle.querySelector('i');
                    if (icon) icon.className = 'bi bi-list';
                }
            });
        });
    })();
</script>