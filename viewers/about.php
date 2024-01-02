<?php
include("connect.php");
session_start();
?>

<head>
    <?php include 'header.php'; ?>
    <?php include 'community/header.php'; ?>
    <link rel="manifest" href="manifest.json" />
    <link href="/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/about.css">
</head>


<body>

    <div class="loadload">
        <div class="spinner-border text-secondary" role="status"></div>
    </div>

    <script type="text/javascript">
        $(function() {
            setTimeout(function() {
                $(".loadload").hide();
            }, 300);
        })
    </script>
    <script>
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.register("service-worker.js");
        }
    </script>
    <script src="/script.js"></script>
    <!--breadcrumbs area start-->
    <?php
    // Check if the user is logged in
    $isLoggedIn = !empty($_SESSION['user_id']);;
    if ($isLoggedIn) {
        include 'header-nav-buyer.php'; // Include the file for logged-in users
    } else {
        include 'header-nav.php'; // Include the file for non-logged-in users
    }
    ?>
    <?php include('category-sidebar.php'); ?>


    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
        <div class="container">
            <h2>about Oma-Angat</h2>
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">about</li>
            </ol> -->
        </div>
    </section>
    <!-- 
    <div class="examp container">
        <div class="row gy-4 mt-5 mx-2 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-4 col-md-4 col-sm-4">
                <a href="photos.html">
                    <div class="icon-box">
                        <i class="bx bx-photo-album"></i>
                        <h3>Photo Highlights</h3>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-4 justify-content-center">
                <a href="videos.html">
                    <div class="icon-box">
                        <i class="bx bx-video"></i>
                        <h3>Video Highlights</h3>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-4 col-sm-4 justify-content-center">
                <a href="inarihan-river.html">
                    <div class="icon-box">
                        <i class="bx bx-water"></i>
                        <h3>Inahiran River</h3>
                    </div>
                </a>
            </div>
        </div>
    </div> -->



    <!--=====================================
                    BANNER PART END
        =======================================-->


    <!--=====================================
                     ABOUT PART START
        =======================================-->
    <section class="inner-section about-company">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Our Motive is to build more sustainable future for local farmers and consumers</h2>
                        <p>Welcome to OMA-ANGAT, your premier destination for fresh, locally sourced agricultural products from the heart of Albay. <br>An all-in-one platform where farmers can receive direct orders from buyers, sell their produce online, and ship their goods at a lower cost.
                            <br>While buyers can find direct suppliers offering competitive prices — and enjoy higher quality and fresher products to grow their business.
                        </p>
                    </div>
                    <!-- <ul class="about-list">
                        <li>
                            <h3>34785</h3>
                            <h6>registered users</h6>
                        </li>
                        <li>
                            <h3>2623</h3>
                            <h6>per day visitors</h6>
                        </li>
                        <li>
                            <h3>189</h3>
                            <h6>total products</h6>
                        </li>
                    </ul> -->
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="images/about/01.png" alt="about">
                        <img src="images/about/02.png" alt="about">
                        <img src="images/about/03.png" alt="about">
                        <img src="images/about/04.png" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    ABOUT PART END
        =======================================-->

    <!--=====================================
                        INTRO PART START
            =======================================-->
    <section class="intro-part">
        <div class="container">
            <div class="row intro-content">
                <div class="col-sm-6 col-lg-3">
                    <div class=" intro-wrap">
                        <!-- <div class="intro-icon">
                            <i class="fas fa-truck"></i>
                        </div> -->
                        <div class="intro-content">
                            <h3>Empower Local Farmers</h3>
                            <p> Provide a digital marketplace where farmers in the Albay Area and the Bicol Region can directly showcase and sell their produce to a diverse consumer base.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <!-- <div class="intro-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div> -->
                        <div class="intro-content">
                            <h3>Enhance Accessibility</h3>
                            <p>Create a seamless and reliable online platform that enables consumers to easily browse and purchase fresh agricultural products based on geography and categories.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <!-- <div class="intro-icon">
                            <i class="fas fa-headset"></i>
                        </div> -->
                        <div class="intro-content">
                            <h3>Eliminate Middlemen</h3>
                            <p>Facilitate direct transactions between farmers and consumers, cutting out unnecessary intermediaries and ensuring that farmers receive fair compensation for their hard work.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <!-- <div class="intro-icon">
                            <i class="fas fa-lock"></i>
                        </div> -->
                        <div class="intro-content">
                            <h3>Promote Sustainable Agriculture</h3>
                            <p>Encourage and support practices that contribute to the long-term health of the environment and the local agricultural industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                        INTRO PART END
            =======================================-->



    <!--=====================================
                   TESTIMONIAL PART START
        =======================================-->
    <!-- <section class="inner-section about-testimonial">
        <div class="container">
            <ul class="testi-slider slider-arrow">
                <li>
                    <div class="testi-content">
                        <a class="testi-img" href="#">
                            <img src="images/testimonial/01.jpg" alt="testimonial">
                        </a>
                        <div class="testi-quote">
                            <i class="icofont-quote-left"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam doloribus magni provident ab ipsam sint dolores repellat inventore sequi temporibus natus.</p>
                            <h4>tahmina labonno</h4>
                            <h6>Former MD - joomtech.com</h6>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testi-content">
                        <a class="testi-img" href="#">
                            <img src="images/testimonial/02.jpg" alt="testimonial">
                        </a>
                        <div class="testi-quote">
                            <i class="icofont-quote-left"></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam doloribus magni provident ab ipsam sint dolores repellat inventore sequi temporibus natus.</p>
                            <h4>miron mahmud</h4>
                            <h6>Senior Accountant - farmfresh.com</h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section> -->
    <!--=====================================
                   TESTIMONIAL PART END
        =======================================-->


    <!--=====================================
                    CHOOSE PART START
        =======================================-->
    <section class="about-choose">
        <div class="container">
            <div class="row">
                <div class="m-card col-lg-6 ">
                    <div class="about content" style="text-align: center;">
                        <h2>Mission</h2>
                    </div>
                    <div class="choose-card">
                        <!-- <div class="choose-icon">
                            <i class="icofont-fruits"></i>
                        </div> -->
                        <div class="choose-text">

                            <p>At OMA-ANGAT, our mission is to develop a user-friendly Web-based Agri-Market tailored for the unique needs of local farmers in the Bicol Region. We aim to streamline the process of selling and buying agricultural products by eliminating unnecessary intermediaries. Through our platform, we seek to empower farmers, enhance consumer access to fresh produce, and contribute to the growth of a sustainable and resilient local food ecosystem.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="m-card col-lg-6 ">
                    <div class="about-content" style="text-align: center;">
                        <h2>Vision</h2>
                    </div>
                    <div class="choose-card">
                        <!-- <div class="choose-icon">
                            <i class="icofont-vehicle-delivery-van"></i>
                        </div> -->
                        <div class="choose-text">

                            <p>Our vision at OMA-ANGAT is to create a thriving online community that empowers local farmers in the Albay Area and the Bicol Region, providing them with a dynamic platform to showcase and sell their produce directly to consumers. We aspire to bridge the gap between farmers and buyers, promoting sustainable agriculture and fostering a deeper connection between the people who cultivate our food and those who enjoy it.</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon">
                            <i class="icofont-loop"></i>
                        </div>
                        <div class="choose-text">
                            <h4>quickly return policy</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-lg-6">
                    <div class="choose-card">
                        <div class="choose-icon">
                            <i class="icofont-support"></i>
                        </div>
                        <div class="choose-text">
                            <h4>instant support team</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error dignissimo cumque minus facere dolores cupiditate debitis</p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!--=====================================
                    CHOOSE PART END
        =======================================-->


    <!--=====================================
                     TEAM PART START
        =======================================-->
    <section class="inner-section about-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <h2>Meet our team members</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="team-slider slider-arrow">
                        <li>
                            <figure class="team-media">
                                <img src="images/team/LOTERTE.png" alt="team">
                                <div class="team-overlay">
                                    <a href="#" class="icofont-facebook"></a>
                                    <a href="#" class="icofont-instagram"></a>
                                    <a href="#" class="fa-regular fa-envelope"></a>
                                </div>
                            </figure>
                            <div class="team-meta">
                                <h5><a href="#">Ann Joyce Ll. Loterte</a></h5>
                                <p>Back - End developer</p>
                            </div>
                        </li>
                        <li>
                            <figure class="team-media">
                                <img src="images/team/AGUILAR.png" alt="team">
                                <div class="team-overlay">
                                    <a href="#" class="icofont-facebook"></a>
                                    <a href="#" class="icofont-instagram"></a>
                                    <a href="#" class="fa-regular fa-envelope"></a>
                                </div>
                            </figure>
                            <div class="team-meta">
                                <h5><a href="#">Gerryminah S. Aguilar</a></h5>
                                <p>Front - End developer</p>
                            </div>
                        </li>
                        <li>
                            <figure class="team-media">
                                <img src="images/team/ALA.png" alt="team">
                                <div class="team-overlay">
                                    <a href="#" class="icofont-facebook"></a>
                                    <a href="#" class="icofont-instagram"></a>
                                    <a href="#" class="fa-regular fa-envelope"></a>
                                </div>
                            </figure>
                            <div class="team-meta">
                                <h5><a href="#">Mary Grace Ala</a></h5>
                                <p>UI designer & Manuscript</p>
                            </div>
                        </li>
                        <li>
                            <figure class="team-media">
                                <img src="images/team/BORBE.png" alt="team">
                                <div class="team-overlay">
                                    <a href="#" class="icofont-facebook"></a>
                                    <a href="#" class="icofont-instagram"></a>
                                    <a href="#" class="fa-regular fa-envelope"></a>
                                </div>
                            </figure>
                            <div class="team-meta">
                                <h5><a href="#">Beverly Grace G. Borbe </a></h5>
                                <p>UI designer & Manuscript</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                     TEAM PART END
        =======================================-->


    <!--=====================================
                    NEWSLETTER PART START
        =======================================-->
    <!-- <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 col-xl-7">
                    <div class="section-heading">
                        <h2>Are you a Farmer?</h2>
                        <p> Join and watch your fields grow to ensures fair compensation for your dedication. Your hard work nourishes not just the land but also the community</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <form class="news-form">
                        <input type="text" placeholder="Enter Your Email Address">
                        <button><span><i class="icofont-ui-email"></i>Start Selling</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
    <!--=====================================
                    NEWSLETTER PART END
        =======================================-->


    <!--=====================================
                     FOOTER PART START
        =======================================-->
    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
    <!--=====================================
                      FOOTER PART END
        =======================================-->



</body>

</html>