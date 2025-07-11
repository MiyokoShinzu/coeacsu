<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COEA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link rel="stylesheet" href="./globals/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css" integrity="sha512-t7Few9xlddEmgd3oKZQahkNI4dS6l80+eGEzFQiqtyVYdvcSG2D3Iub77R20BdotfRPA9caaRkg1tyaJiPmO0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body class="position-relative" style="overflow-x: hidden; font-family: 'Poppins', sans-serif;">

    <div class="main min-vh-100 ">
        <?php include "./globals/coea_header_nav.php" ?>
        <img src="./assets/coea_pub.png" class="mx-auto" alt="COEA Banner"
            style="width: 100vw; height: auto; ">

        <div class="row w-100">
            <div class="col-lg-12 mx-auto bg-white p-4">
                <div class="banner row mx-auto">
                    <div class="col-sm-11 col-lg-8 mx-auto">
                        <h5 class="text-start" style="font-weight: bolder;">WELCOME, ACCREDITORS</h5>
                        <p class="text-start mt-1" style="font-size: 0.9em; letter-spacing: 1.5px;">This is the virtual room for the College of Engineering and Architecture. You're currently in its landing page. For you to proceed to different pages of this site, scroll down to see every departments below and click it.</p>
                        <p class="text-start" style="font-size: 0.9em; letter-spacing: 1.5px;">We wish you a great experience navigating this site. Thank you and God bless.</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- background: #ff4C01; #FE904D-->
        <div class="row d-flex  justify-content-center align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12 mb-5  d-flex align-items-center mt-3 justify-content-center flex-column mx-auto" style="background:rgb(174,14,14)">
                <h4 class="text-center text-white mt-3" style="font-weight: bolder; ">DEPARTMENTS</h4>
                <p class="text-center text-white" style="font-size: 0.9em; letter-spacing: 1.5px; ">Click the department you want to visit.</p>
            </div>
            <div   class="col-sm-12 col-lg-8 mb-4 mt-3   mx-auto shadow bg-white m-2 image-container" style="position: relative; overflow: hidden;">

                <img src="./assets/pubmat/ce.png" alt="" style="height: 100%; width: 100%;" />
                <div class="overlay">
                    <h4 class="text-white">Civil Engineering Department</h4>
                    <a href="./ce" style="text-decoration: hidden; "><button style="background: rgb(174,14,14)" class="btn mt-2 mb-2 w-100 btn-sm  text-white"><i class="bi bi-link me-2"></i>VISIT</button></a>
                </div>

            </div>
            <div  class="col-lg-8 mb-4 mt-3   mx-auto shadow bg-white m-2 image-container" style="position: relative; overflow: hidden;">

                <img src="./assets/pubmat/cpe.png" alt="" style="height: 100%; width: 100%;" />
                <div class="overlay w-100 text-center">
                    <h4 class="text-white">Computer Engineering Department</h4>
                    <a href="./ge" style="text-decoration: hidden;"><button style="background: rgb(174,14,14)" class="btn btn-sm  text-white text-end"><i class="bi bi-link me-2"></i>VISIT</button></a>
                </div>

            </div>
            <div  class="col-lg-8 mb-4 mt-3  mx-auto   shadow bg-white m-2 image-container" style="position: relative; overflow: hidden;">

                <img src="./assets/pubmat/abe.png" alt="" style="height: 100%; width: 100%;" />
                <div class="overlay w-100 text-center">
                    <h4 class="text-white">Agricultural and Biosystems Engineering Department</h4>
                    <a href="./ge" style="text-decoration: hidden;"><button style="background: rgb(174,14,14)" class="btn btn-sm  text-white text-end"><i class="bi bi-link me-2"></i>VISIT</button></a>
                </div>

            </div>
            <div  class="col-lg-8 mb-4 mt-3  mx-auto   shadow bg-white m-2 image-container" style="position: relative; overflow: hidden;">

                <img src="./assets/pubmat/ece.png" alt="" style="height: 100%; width: 100%;" />
                <div class="overlay w-100 text-center">
                    <h4 class="text-white">Electronics Engineering Department</h4>
                    <a href="./ece" style="text-decoration: hidden;"><button style="background: rgb(174,14,14)" class="btn btn-sm  text-white text-end"><i class="bi bi-link me-2"></i>VISIT</button></a>
                </div>

            </div>


        </div>
    </div>
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
    </style>

</body>

</html>