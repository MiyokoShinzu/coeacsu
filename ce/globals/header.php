<!-- Full-width, fixed top navbar -->
<div class="position-fixed top-0 start-0 end-0 bg-transparent z-3" style="width: 100%; margin: 0; padding: 0;">
    <nav class="navbar navbar-expand-lg shadow-sm w-100">

        <!-- Logo and Title -->
        <a class="navbar-brand d-flex align-items-center ms-3" href="../">
            <img src="../assets/coea_logo.png" alt="Logo" style="height: 30px; width: 30px;">
            <span class="ms-2 fw-bold subtitle_n" style="font-size: 0.7em; color: #000;">COEA - BSCE</span>
        </a>

        <!-- Hamburger toggler -->
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 fw-bold">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="research.php">Research</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="graduates.php">Graduates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Extension</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">International Linkages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Planning</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="compliance.php">Compliance Report</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <style>
        :root {
            --bs-bg: #FF904C;
        }

        /* Make all nav list items smaller */
        .offcanvas-body .nav-item {
            font-size: 0.7em;
        }

        /* Default link styling */
        .nav-link {
            position: relative;
            text-decoration: none;
            transition: color 0.3s ease;
            color: #000;
            /* default black */
        }

        .nav-link::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 2px;
            width: 0%;
            background-color: var(--bs-bg);
            /* updated underline color */
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: var(--bs-bg);
            /* updated hover text color */
        }

        /* === When navbar turns orange === */
        .navbar-orange {
            background-color: #eee !important;
            transition: all #fff 0.4s ease;
        }

        .navbar-orange .nav-link {
            color: #000 !important;
        }

        .subtitle {
            color: #000 !important;
            transition: background-color 0.4s ease;
        }



        .navbar-orange .nav-link::after {
            background-color: var(--bs-bg);
        }

        .navbar-orange .nav-link:hover {
            color: var(--bs-bg) !important;
        }
    </style>



    <script>
        window.addEventListener("scroll", function() {
            const navbar = document.querySelector(".navbar");
            const subtitle = document.querySelector(".subtitle_n");
            if (window.scrollY > 100) {
                navbar.classList.add("navbar-orange");
                subtitle.classList.add("subtitle");
            } else {
                navbar.classList.remove("navbar-orange");
                subtitle.classList.remove("subtitle");
            }
        });
    </script>


</div>