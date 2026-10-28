<?php
// Start the session and validate access before sending any HTML.
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (empty($_SESSION['department'])) {
    header('Location: ../api/logout.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <title>COEA Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/dt/jszip-3.10.1/dt-2.0.8/af-2.7.0/b-3.0.2/b-colvis-3.0.2/b-html5-3.0.2/b-print-3.0.2/cr-2.0.3/date-1.5.2/fc-5.0.1/fh-4.0.1/kt-2.12.1/r-3.0.2/rg-1.5.0/rr-1.0.0/sc-2.4.3/sb-1.7.1/sp-2.3.1/sl-2.0.3/sr-1.4.1/datatables.min.css" rel="stylesheet">

    <style>
        :root {
            --coea-orange: #ff4c01;
            --coea-orange-light: #fe904d;
            --coea-orange-pale: #fff3ed;
            --coea-text: #292929;
            --coea-muted: #6b7280;
            --coea-border: #eeeeee;
            --coea-surface: #ffffff;
            --coea-page: #ffffff;
            --coea-shadow: 0 4px 18px rgba(30, 30, 30, .06);
            --coea-sidebar-width: 248px;
            --coea-topbar-height: 64px;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: var(--coea-page);
            color: var(--coea-text);
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
        }

        a {
            color: var(--coea-orange);
            transition: color .2s ease, background .2s ease;
        }

        a:hover {
            color: #d93f00;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: var(--coea-text);
            font-weight: 700;
            letter-spacing: -.02em;
        }

        /* Sidebar styles are matched to sidebar.php */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            z-index: 1045;
            width: var(--coea-sidebar-width);
            height: 100dvh;
            /* Extend the sidebar background behind the topbar, but keep its content below it. */
            padding-top: var(--coea-topbar-height);
            overflow-x: hidden;
            overflow-y: auto;
            background: #fff;
            color: var(--coea-text);
            border-right: 1px solid var(--coea-border);
            box-shadow: var(--coea-shadow);
            transition: transform .25s ease;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            gap: 10px;
            min-height: 76px;
            padding: 14px 16px;
            border-bottom: 1px solid var(--coea-border);
            color: var(--coea-text);
            font-size: .84rem;
            font-weight: 700;
            letter-spacing: .2px;
            overflow-wrap: anywhere;
        }

        .sidebar-header img {
            width: 40px;
            height: 40px;
            flex: 0 0 auto;
            object-fit: contain;
        }

        .sidebar .nav {
            gap: 5px;
            padding: 18px 12px 22px;
        }

        .sidebar .nav-link {
            display: flex;
            align-items: center;
            gap: 9px;
            min-height: 43px;
            padding: 10px 13px;
            border-radius: 10px;
            color: #5b514c;
            font-size: .88rem;
            font-weight: 500;
            text-decoration: none;
        }

        .sidebar .nav-link i {
            width: 20px;
            flex: 0 0 20px;
            text-align: center;
            font-size: 1rem;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link:focus-visible {
            color: var(--coea-orange);
            background: var(--coea-orange-pale);
        }

        .sidebar .nav-link.active {
            color: #fff;
            background: linear-gradient(110deg, var(--coea-orange), var(--coea-orange-light));
            box-shadow: 0 5px 12px rgba(255, 76, 1, .16);
        }

        /* Topbar styles are matched to navbar.php */
        .navbar-custom {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            width: 100%;
            z-index: 1050;
            display: flex;
            align-items: center;
            gap: 12px;
            height: var(--coea-topbar-height);
            padding: 0 22px;
            background: rgba(255, 255, 255, .98);
            border-bottom: 1px solid var(--coea-border);
            box-shadow: 0 2px 12px rgba(0, 0, 0, .025);
            transition: left .25s ease;
        }

        .navbar-custom .university-name {
            margin: 0;
            color: #39312d;
            font-size: .9rem;
            font-weight: 600;
        }

        .navbar-custom .csu-logo {
            width: 36px;
            height: 36px;
            object-fit: contain;
            flex: 0 0 auto;
        }

        .sidebar-toggle {
            display: inline-grid;
            flex: 0 0 auto;
            place-items: center;
            width: 38px;
            height: 38px;
            padding: 0;
            border: 1px solid #ffd4c2;
            border-radius: 10px;
            color: var(--coea-orange);
            background: #fff7f2;
            font-size: 1.25rem;
            cursor: pointer;
        }

        .sidebar-toggle:hover,
        .sidebar-toggle:focus-visible {
            color: #fff;
            border-color: var(--coea-orange);
            background: var(--coea-orange);
        }

        /* Main page content */
        #main {
            display: block;
            width: calc(100% - var(--coea-sidebar-width));
            max-width: none;
            min-width: 0;
            min-height: 100vh;
            margin-left: var(--coea-sidebar-width);
            padding: calc(var(--coea-topbar-height) + 20px) 22px 24px;
            transition: width .25s ease, margin-left .25s ease;
        }

        /* Let page containers use all available space instead of Bootstrap's fixed max-width. */
        #main>.container,
        #main>.container-sm,
        #main>.container-md,
        #main>.container-lg,
        #main>.container-xl,
        #main>.container-xxl {
            width: 100%;
            max-width: none;
        }

        /* Support the class names used by both versions of navbar.php. */
        body.sidebar-collapsed #main,
        #main.shrink,
        #main.shift {
            width: 100%;
            max-width: none;
            margin-left: 0 !important;
        }

        body.sidebar-collapsed .navbar-custom,
        .navbar-custom.shrink,
        .navbar-custom.shift {
            left: 0 !important;
            right: 0 !important;
            width: 100% !important;
        }

        .sidebar-backdrop {
            display: none;
        }

        .text-primary {
            color: var(--coea-orange) !important;
        }

        .bg-primary {
            background-color: var(--coea-orange) !important;
        }

        .border-primary {
            border-color: var(--coea-orange) !important;
        }

        .btn-primary,
        .btn-main {
            border: 0;
            border-radius: 9px;
            color: #fff;
            background: linear-gradient(110deg, var(--coea-orange), var(--coea-orange-light));
        }

        .btn-primary:hover,
        .btn-main:hover {
            color: #fff;
            filter: brightness(.96);
        }

        .btn-outline-primary {
            color: var(--coea-orange);
            border-color: var(--coea-orange);
            border-radius: 9px;
        }

        .btn-outline-primary:hover {
            color: #fff;
            border-color: var(--coea-orange);
            background: var(--coea-orange);
        }

        .card {
            border: 1px solid var(--coea-border);
            border-radius: 14px;
            background: var(--coea-surface);
            box-shadow: var(--coea-shadow);
        }

        .form-control,
        .form-select {
            min-height: 40px;
            border-color: #e8ddd6;
            border-radius: 9px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--coea-orange-light);
            box-shadow: 0 0 0 .2rem rgba(255, 76, 1, .12);
        }

        .table-responsive {
            max-width: 100%;
            border-radius: 10px;
        }

        table.dataTable {
            width: 100% !important;
            border-collapse: separate !important;
            border-spacing: 0;
        }

        table.dataTable thead th {
            background: #fff3ed;
            color: #66321d;
            border-bottom: 1px solid #f1ded3 !important;
        }

        table.dataTable tbody td {
            vertical-align: middle;
            font-size: .84rem;
        }

        .dt-container {
            max-width: 100%;
        }

        .dt-layout-row {
            gap: 10px;
        }

        .dt-search,
        div.dt-container .dt-length {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
        }

        .dt-search input,
        div.dt-container .dt-search input,
        .dt-length select,
        div.dt-container .dt-length select {
            max-width: 100%;
            padding: 6px 9px;
            border: 1px solid #e8ddd6;
            border-radius: 8px;
            outline: none;
        }

        .dt-search input:focus,
        div.dt-container .dt-search input:focus {
            border-color: var(--coea-orange);
        }

        .dt-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
        }

        .dt-buttons .dt-button,
        .dt-buttons button {
            margin: 4px 0 !important;
            padding: 7px 12px !important;
            border: 0 !important;
            border-radius: 8px !important;
            color: #fff !important;
            background: linear-gradient(110deg, var(--coea-orange), var(--coea-orange-light)) !important;
            font-family: inherit;
            font-size: .8rem;
        }

        .dt-buttons .buttons-excel {
            background: #198754 !important;
        }

        .dt-buttons .buttons-pdf {
            background: #dc3545 !important;
        }

        .dt-buttons .buttons-print {
            background: #475569 !important;
        }

        .dt-buttons .buttons-colvis {
            background: #b45309 !important;
        }

        .pagination,
        .dt-info {
            margin-top: 10px;
        }

        @media (min-width: 992px) {

            body.sidebar-collapsed .sidebar,
            .sidebar.hide {
                transform: translateX(-100%);
            }

            body.sidebar-collapsed #main,
            #main.shrink,
            #main.shift {
                width: 100%;
                margin-left: 0 !important;
            }
        }

        @media (max-width: 991.98px) {
            .sidebar {
                top: 0;
                height: 100dvh;
                padding-top: var(--coea-topbar-height);
                transform: translateX(-100%);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .navbar-custom {
                left: 0;
                right: 0;
                width: 100%;
                padding: 0 14px;
            }

            #main {
                width: 100%;
                margin-left: 0 !important;
                padding: calc(var(--coea-topbar-height) + 16px) 14px 20px;
            }

            .sidebar-backdrop.show {
                display: block;
                position: fixed;
                inset: 0;
                z-index: 1040;
                width: 100%;
                height: 100%;
                border: 0;
                background: rgba(17, 24, 39, .35);
            }

            .navbar-custom .university-name {
                font-size: .82rem;
            }

            .dt-layout-row {
                row-gap: 10px;
            }

            .dt-search,
            div.dt-container .dt-length {
                justify-content: flex-start;
            }
        }

        @media (max-width: 420px) {
            .sidebar {
                width: min(var(--coea-sidebar-width), 86vw);
            }

            :root {
                --coea-topbar-height: 60px;
            }

            .navbar-custom {
                height: var(--coea-topbar-height);
                gap: 8px;
            }

            .sidebar {
                top: 0;
                height: 100dvh;
                padding-top: var(--coea-topbar-height);
            }

            #main {
                padding-top: 76px;
                padding-right: 10px;
                padding-left: 10px;
            }

            .navbar-custom .university-name {
                font-size: .75rem;
            }

            .navbar-custom .csu-logo {
                width: 32px;
                height: 32px;
            }

            .sidebar-toggle {
                width: 36px;
                height: 36px;
            }

            .dt-buttons .dt-button,
            .dt-buttons button {
                font-size: .72rem;
                padding: 6px 8px !important;
            }
        }
    </style>
</head>

<body>