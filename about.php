<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSFW</title>
    <?php require("./includes/links.php"); ?>
    <link rel="stylesheet" href="./css/about.css">
    <script src="https://unpkg.com/scrollreveal"></script>


</head>

<body class="bg-light">



    <!-- nav-bar -->
    <?php include("./includes/header.php"); ?>
    <!-- nav-bar-end  -->

    <!-- hero section  -->
    <div class="container hero">
        <div class="about-card">
            <div class=" my-lg-5 my-3 px-lg-4 px-2">
                <h2 class="fw-bold about-h-fonts">OUR VISION</h2>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5   mb-4 order-lg-1 order-md-1 order-2">
                    <p>We aim to help underprivileged women from rural area or housewife suffering from domestic violence and torture get support in terms of <span>livelihood, shelter , welfare </span>  and help them achieve financial independence, OSFW can help to <span> reduce </span> the barriers that prevent women from seeking help.
                    </p>
                </div>
                <div class="col-lg-5   mb-4 order-lg-2 order-md-1 order-1 L">

                    <img src="./images/vision.jpg" class="w-100 d-block" />


                </div>
            </div>
        </div>
        <div class="about-card">
            <div class=" my-lg-5 my-3 px-lg-4 px-2">
                <h2 class="fw-bold about-h-fonts text-end">OUR APPROACH </h2>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5   mb-4 order-lg-2 order-md-1 order-2">
                    <p>we provide a centralized platform where women can access opportunities of wide range including <span> health education , legal rights , employment opportunities , financial literacy </span> and many more</p>
                </div>
                <div class="col-lg-5   mb-4 order-lg-1 order-md-1 order-1 R">
                    <img src="./images/APPROACH.jpg" class="w-100 d-block" />
                </div>
            </div>
        </div>
        <div class="about-card">
            <div class=" my-lg-5 my-3 px-lg-4 px-2">
                <h2 class="fw-bold about-h-fonts">OUR PROCESS</h2>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5   mb-4 order-lg-1 order-md-1 order-2">
                    <p>Some women don't have the right skill to get the required job. OSFW provides them good opportunities of jobs.
                        We Collaborate with <span> local community leaders, NGOs, and government agencies </span> to facilitate workshops, training sessions, and information sessions in rural areas.
                    </p>
                </div>
                <div class="col-lg-5   mb-4 order-lg-2 order-md-1 order-1 L">

                    <img src="./images/hero.png" class="w-100 d-block" />


                </div>
            </div>
        </div>

    </div>

    <!-- hero section end -->



    <!--Footer-->
    <?php include("./includes/footer.php"); ?>
    <!--Footer end-->


    <!-- js -->
    <script>
      ScrollReveal({
        reset: true,
        distance: '80px',
        duration: 2500,
        delay: 40,
        scale    : 1.1
      });

      ScrollReveal().reveal('.R', { delay: 50, origin: 'left'});
      ScrollReveal().reveal('.L', { delay: 50, origin: 'right'});
    </script>



</body>

</html>