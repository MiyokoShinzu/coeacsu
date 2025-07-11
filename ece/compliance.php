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

<body class="position-relative" style="overflow-x: hidden; font-family: 'Poppins', sans-serif;">

    <div class="main min-vh-100 ">
        <?php include "./globals/header.php" ?>
        <?php include "./globals/banner.php" ?>


        <!-- background: #ff4C01; #FE904D-->
        <div class="row d-flex gs-1 justify-content-center align-items-center">
            <div data-aos="fade-down" data-aos-delay="600" class=" col-lg-12  col-md-12 col-sm-12 d-flex align-items-center justify-content-center flex-column mx-auto" style="">
                <i class="bi bi-journal-check" style="font-size: 3em;"></i>
                <h2 class="text-center " style="font-weight: bolder; ">COMPLIANCE REPORT</h2>

                <hr class="w-75 mx-auto" style="border: 3px solid #FE904D;">
            </div>

            <div class="col-lg-5">
                <div class="card shadow-sm border rounded-4 overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <iframe
                            src="../uploads/ce/basic.pdf"
                            type="application/pdf"
                            title="BSCE Basic PDF Preview"
                            class="border">
                        </iframe>
                    </div>
                    <div class="card-body bg-light text-center">
                        <h5 class="card-title fw-semibold text-dark">Compliance Report</h5>
                        <p class="card-text text-muted mb-0">
                            You can preview the PDF document directly on this page.
                            <a href="../uploads/ce/basic.pdf" target="_blank" class="text-decoration-underline fw-bold">Open in new tab</a> if needed.
                        </p>
                    </div>
                </div>
            </div>
            <div class=" col-lg-12  col-md-12 col-sm-12 d-flex align-items-center justify-content-center flex-column mx-auto mt-3" style="">
                <div class="row w-100">
                    <div class="mx-auto col-lg-8 text-start">
                        <p style="font-weight: bolder;">COLLEGE RDE AGENDA</p>
                    </div>
                   
                    <div class="col-lg-8 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-2 mx-auto hover-container"
                        style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
                        <a href="../uploads/ce/basic.pdf" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                            <div class="drive-preview d-flex align-items-center">
                                <img src="../assets/pdf.svg" style="height: 30px; width: 30px; margin-right: 10px;" alt="Drive Icon">
                                <span class="file-name">Published Research.pdf</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-8 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-2 mx-auto hover-container"
                        style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
                        <a href="../uploads/ce/basic.pdf" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                            <div class="drive-preview d-flex align-items-center">
                                <img src="../assets/pdf.svg" style="height: 30px; width: 30px; margin-right: 10px;" alt="Drive Icon">
                                <span class="file-name">Published Research.pdf</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-8 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-2 mx-auto hover-container"
                        style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
                        <a href="../uploads/ce/basic.pdf" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                            <div class="drive-preview d-flex align-items-center">
                                <img src="../assets/pdf.svg" style="height: 30px; width: 30px; margin-right: 10px;" alt="Drive Icon">
                                <span class="file-name">Published Research.pdf</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-8 mb-3 d-flex align-items-center text-start text-center border shadow-sm p-2 mx-auto hover-container"
                        style="background:rgba(241, 241, 241, 0.58); border-radius: 6px;">
                        <a href="../uploads/ce/basic.pdf" target="_blank" class="text-decoration-none text-dark w-100 hover-link">
                            <div class="drive-preview d-flex align-items-center">
                                <img src="../assets/pdf.svg" style="height: 30px; width: 30px; margin-right: 10px;" alt="Drive Icon">
                                <span class="file-name">Published Research.pdf</span>
                            </div>
                        </a>
                    </div>

                    <style>
                        .hover-container:hover {
                            background-color: rgba(254, 144, 77, 0.15);
                            /* subtle orange tint on hover */
                            transition: background-color 0.3s ease;
                        }

                        .hover-link:hover .file-name {
                            color: #FE904D !important;
                            font-weight: 500;
                        }

                        .file-name {
                            font-size: 0.9em;
                            transition: color 0.3s ease;
                        }
                    </style>
                   
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

</body>

</html>