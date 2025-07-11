<?php include "./globals/head.php" ?>

<body>
  


    <?php include "./globals/navbar.php"; ?>
    <!-- Main content -->
    <div id="main">
        <div class="container py-1 mt-5">
            <div class="text-left">
                <div class="wrapper w-100 text-center mb-2"> <img src="../assets/coea_logo.png" alt="" class="mb-3" style="height: 140px; width: 140px;">
                </div>
                <h2 class="fw-bold mb-3 text-center text-uppercase">Welcome, Admin!</h2>

                <p class="lead">
                    You have entered the virtual dashboard for the <strong>College of Engineering and Architecture - BSCE Program</strong>.
                </p>
                <p>
                    Use the <strong>sidebar on the left</strong> to access different sections including <em>Research</em>, <em>Graduates</em>, <em>Extension</em>, and more.
                </p>
                <p>
                    Each section contains relevant documents, reports, and statistics tailored to help you assess the program's performance and compliance.
                </p>
                <hr class="my-4">
                <p class="fw-semibold">
                    We hope you have a smooth and productive visit. Thank you and God bless.
                </p>
            </div>
        </div>



    </div>

    <!-- Bootstrap JS -->
    <?php include "./globals/scripts.php"; ?>

    <!-- Sidebar Toggle Script -->
    <script>
        const toggleBtn = document.getElementById("toggleSidebar");
        const sidebar = document.getElementById("sidebar");
        const main = document.getElementById("main");
        const topbar = document.getElementById("topbar");

        toggleBtn.addEventListener("click", () => {
            const isSmallScreen = window.innerWidth < 992;

            if (isSmallScreen) {
                sidebar.classList.toggle("show");
                main.classList.toggle("shift");
                topbar.classList.toggle("shift");
            } else {
                sidebar.classList.toggle("hide");
                main.classList.toggle("shrink");
                topbar.classList.toggle("shrink");
            }
        });
    </script>

</body>

</html>