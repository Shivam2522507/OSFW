<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSFW</title>
    <?php require("./includes/links.php"); ?>
    <link rel="stylesheet" href="./css/index.css">
    <!-- Fancybox CSS library -->
    <link rel="stylesheet" href="./fancybox/jquery.fancybox.css">

    <!-- jQuery library -->
    <script src="./scripts/jquery.min.js"></script>

    <!-- Fancybox JS library -->
    <script src="./fancybox/jquery.fancybox.js"></script>

    <script>
        $("[data-fancybox]").fancybox();
    </script>



</head>

<body class="bg-light">



    <!-- nav-bar -->
    <?php include("./includes/header.php"); ?>
    <!-- nav-bar-end  -->

    <!-- hero section  -->
    <div class="container-fluid hero-sec p-0 m-0 mb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-md-1 order-2">
                    <h1 class="text-light">Learn anything and <br> everything <br>
                        anytime with one step for <br> women</h1>
                    <p class="text-light">When women support women <br>
                        incredible things happen</p>
                    <div class="row align-items-center">
                        <div class="col-lg-2"><button type="button" class="hero-btn">Sign Up</button></div>
                        <div class="col-lg-6">
                            <input type="email" name="email" class="form-control shadow-none" placeholder="EMAIL" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-md-1 order-1">
                    <img src="./images/hero.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- hero section end -->

    <!-- second section  -->
    <section class="section section-work-data mb-4">
        <h1 class="text-center py-3 h-fonts mb-4">Our Survey Data Details</h1>

        <div class="container">
            <div class="row ">
                <div class="col-lg-4 text-center">
                    <h2 class="counter-numbers ">1000+</h2>
                    <p>women are under privileged with zero opportunity</p>
                </div>
                <div class="col-lg-4 text-center">
                    <h2 class="counter-numbers ">700+</h2>
                    <p>women have least access and minimal knowledge how they can help themselves in terms of financial support</p>
                </div>
                <div class="col-lg-4 text-center">
                    <h2 class="counter-numbers ">70% +</h2>
                    <p>women are unaware about how they can change their life <br>Through financial independence</p>
                </div>
            </div>

        </div>
    </section>

    <!-- second section end -->

    <!-- third section  -->

    <div class="container-fluid third-sec mb-4">
        <div class="container">



            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 order-md-2 order-2">
                    <h3 class="text-dark mb-4">An One Stop Platform <br>Practice makes <span> Women </span> Perfect ...<br>
                    </h3>

                    <h2 class="mb-1 h-fonts">JOIN US TO BE UNSTOPABLE</h2>
                    <p>For Beginners and Pro Learners</p>
                    <a href="./services.php" class=" mt-2">Explore >></a>




                </div>
                <div class="col-lg-6 order-lg-1 order-md-1 order-1">
                    <img src="./images/index-3rd.jpg" alt="">
                </div>
            </div>
        </div>

    </div>

    <!-- third section end -->

    <!-- 4th sec  -->

    <div class="container mt-4">
        <h2 class="my-4 text-center">Images of Women <span> Working, Learning </span> & <span>Earning </span><br> Making Herself & Her Family Proude</h2>
        <div class="women-img row">
            <a href="./images/women-img4.png" class="col-lg-4" data-fancybox="gallery" data-caption="1">
                <img src="./images/women-img4.png" alt="" />
            </a>
            <a href="./images/women-img2.png" class="col-lg-4" data-fancybox="gallery" data-caption="2">
                <img src="./images/women-img2.png" alt="" />
            </a>
            <a href="./images/women-img3.png" class="col-lg-4" data-fancybox="gallery" data-caption="2">
                <img src="./images/women-img3.png" alt="" />
            </a>
            <a href="./images/women-img1.png" class="col-lg-4" data-fancybox="gallery" data-caption="2">
                <img src="./images/women-img1.png" alt="" />
            </a>
            <a href="./images/women-img5.png" class="col-lg-4" data-fancybox="gallery" data-caption="2">
                <img src="./images/women-img5.png" alt="" />
            </a>
        </div>
    </div>

    <!-- 4th sec end -->



    <!--Footer-->
    <?php include("./includes/footer.php"); ?>
    <!--Footer end-->


    <!-- js -->



</body>

</html>
