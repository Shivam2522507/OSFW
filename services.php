<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSFW</title>
    <?php require("./includes/links.php"); ?>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="./css/services.css">




</head>

<body class="bg-light">



    <!-- nav-bar -->
    <?php include("./includes/header.php"); ?>
    <!-- nav-bar-end  -->

    <!-- hero sec  -->
    <div class="container hero">
        <h1 class="text-center services-h-fonts mt-4 mb-4">Services We Provide</h1>
        <div class="services-card mt-3">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5   mb-4 order-lg-1 order-md-1 order-2">
                    <h2 class="fw-bold">Job Opportunities
                        for Skilled Women</h2>
                    <p>We lead skilled women to job opportunities like:
                        Fitness instructor
                        Teaching jobs
                        Photographer
                        Event management
                        Content writer
                        Graphic designer
                        Content marketing
                    </p>
                </div>
                <div class="col-lg-5   mb-4 order-lg-2 order-md-1 order-1 L">

                    <img src="./images/sev1.png" class="w-100 d-block" />


                </div>
            </div>
        </div>
        <div class="services-card mt-3">

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5   mb-4 order-lg-2 order-md-1 order-2">
                    <h2 class="fw-bold">Job Opportunities for Unschooled Women</h2>
                    <p>For underprivileged women who have not received proper schooling we provide job opportunities like:
                        Making handicrafts
                        Knitting
                        Sewing
                        Cooking
                        Community service at childcares or elderly care
                        Painting</p>
                </div>
                <div class="col-lg-5   mb-4 order-lg-1 order-md-1 order-1 R">
                    <img src="./images/sev2.png" class="w-100 d-block" />
                </div>
            </div>
        </div>
        <div class="services-card mt-3">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5   mb-4 order-lg-1 order-md-1 order-2">
                    <h2 class="fw-bold">Providing Skills</h2>
                    <p>We provide training and sessions on various skills so that women get eligible for job opportunities. We provide career guidance, development resources and information on entrepreneurship opportunities. Also we Provide information on personal safety, self-defense techniques and resources for reporting incidents of harassment or violence.
                    </p>
                </div>
                <div class="col-lg-5   mb-4 order-lg-2 order-md-1 order-1 L">

                    <img src="./images/sev3.png" class="w-100 d-block" />


                </div>
            </div>
        </div>
        <div class="services-card mt-3">

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5   mb-4 order-lg-2 order-md-1 order-2">
                    <h2 class="fw-bold">Reward System</h2>
                    <p>Apart from providing Economic stability we have a reward system for women who take up our Tutoring sessions and Accomplish
                        the skills get rewards coupons and vouchers.</p>
                </div>
                <div class="col-lg-5   mb-4 order-lg-1 order-md-1 order-1 R">
                    <img src="./images/sev4.png" class="w-100 d-block" />
                </div>
            </div>
        </div>


    </div>
    <!-- hero sec end -->

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