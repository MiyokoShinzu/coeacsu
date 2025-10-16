    <!-- Sidebar -->
    <div id="sidebar" class="sidebar">
        <div class="sidebar-header d-flex align-items-center justify-content-start px-3 py-2">
            <img src="../assets/coea_logo.png" alt="" class="me-2" style="height: 40px; width: 40px;">
            <span>COEA-BS<?php echo strtoupper($_SESSION['department']); ?></span>
        </div>
        <nav class="nav flex-column px-3 mt-4">
            <a class="nav-link" href="index.php"><i class="bi bi-house me-2"></i>Home</a>
            <a class="nav-link" href="research.php"><i class="bi bi-journal-text me-2"></i> Research</a>
            <a class="nav-link" href="graduates.php"><i class="bi bi-mortarboard me-2"></i> Graduates</a>
            <a class="nav-link" href="extension.php"><i class="bi bi-people-fill me-2"></i> Extension</a>
            <a class="nav-link" href="linkages.php"><i class="bi bi-globe2 me-2"></i> International Linkages</a>
            <a class="nav-link" href="planning.php"><i class="bi bi-diagram-3-fill me-2"></i> Planning</a>
            <a class="nav-link" href="compliance.php"><i class="bi bi-check2-square me-2"></i> Compliance Report</a>
            <a class="nav-link" href="../api/logout.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
        </nav>

    </div>

    <!-- Top Navbar -->
    <nav id="topbar" class="navbar navbar-expand navbar-custom px-3">
        <button id="toggleSidebar" class="btn btn-outline-light me-3">
            <i class="bi bi-list"></i>
        </button>
        <img src="../assets/csu_logo.png" alt="" style="height: 35px; width: 35px;" class="me-2">
        <h6 class="text-white">Cagayan State University</h6>
        
    </nav>