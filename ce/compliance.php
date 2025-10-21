<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COEA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href=".././globals/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<?php include '../src/connection.php'; ?>

<body class="position-relative" style="overflow-x: hidden; font-family: 'Poppins', sans-serif;">

    <div class="main min-vh-100 w-100">
        <?php include "./globals/header.php" ?>
        <?php include "./globals/banner.php" ?>


        <!-- background: #ff4C01; #FE904D-->
        <?php $bg = "linear-gradient(to right, #ff4C01, #FE904D)"; ?>
        <div class="row d-flex gs-1 mt-1 justify-content-center align-items-center " style="width: 100%; margin: 0 auto;">
            <div class=" col-lg-12  col-md-12 col-sm-12 d-flex align-items-center justify-start flex-column mx-auto mb-3" style="background:<?php echo $bg; ?>">
                <h1 class=" text-start text-white mt-2 p-2" style="font-weight: bolder; font-size: 4em">Compliance Report</h1>

            </div>
            <div class="col-lg-4 mx-auto d-flex align-items-center justify-content-center flex-row mb-5 border shadow p-3">
                <img src="../assets/drive_logo.svg" alt="" style="height: 50px; width: 50px;" class="mb-2 me-2">
                <a href="https://drive.google.com/drive/folders/19BRVF18g-7isSF8t74jfj73EXspiblwt?usp=sharing" target="_blank" >Compliance Report Link</a>
            </div>



        </div>






    </div>
    </div>
    </div>



    <?php include "../globals/footer.php"; ?>

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
    </style>

    <script>
        const img = document.getElementById('n_report');

        img.addEventListener('click', () => {
            if (img.requestFullscreen) {
                img.requestFullscreen();
            } else if (img.webkitRequestFullscreen) { // Safari
                img.webkitRequestFullscreen();
            } else if (img.msRequestFullscreen) { // IE11
                img.msRequestFullscreen();
            }
        });
    </script>
    <script>
        function openFullscreen(id) {
            const iframe = document.getElementById(id);
            if (iframe.requestFullscreen) {
                iframe.requestFullscreen();
            } else if (iframe.webkitRequestFullscreen) { // Chrome, Safari, Opera
                iframe.webkitRequestFullscreen();
            } else if (iframe.msRequestFullscreen) { // IE/Edge
                iframe.msRequestFullscreen();
            }
        }
    </script>


</body>

</html>