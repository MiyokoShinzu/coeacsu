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
            <div data-aos="fade-down" data-aos-delay="600" class="col-lg-10 col-md-10 col-sm-12 p-4 mt-4 mx-auto intro-container">
                <p class="intro-text text-dark">
                    Welcome to the accreditation portal of the <strong>Bachelor of Science in Civil Engineering (BSCE)</strong> program. <br>
                    This section is thoughtfully curated to assist our esteemed accreditors in navigating key areas of our academic and institutional performance. Here, you will find essential information about our program’s <strong>Home</strong> profile, ongoing <strong>Research</strong> and development initiatives, the achievements of our <strong>Graduates</strong>, community-engaged <strong>Extension</strong> activities, strategic <strong>International Linkages</strong>, forward-looking <strong>Planning</strong> efforts, and our documented <strong>Compliance Reports</strong>. Each link provides relevant data and documentation that reflect the BSCE program’s commitment to excellence, continuous improvement, and adherence to accreditation standards.
                </p>
            </div>

            <style>
                .intro-container {
                    border-bottom: 3px solid #FE904D;
                    /* underline color and thickness */
                    padding-bottom: 1rem;
                    margin-bottom: 2rem;
                }

                .intro-text {
                    letter-spacing: 1px;
                    line-height: 1.8;
                    font-size: 0.9em;
                    text-align: justify;
                }

                .intro-text::first-letter {
                    font-size: 1.6em;
                    font-weight: bold;
                    color: #FE904D;
                }
            </style>




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