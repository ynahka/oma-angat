<?php
include("connect.php");
session_start();
?>
<?php
// Check if the user is logged in
$isLoggedIn = !empty($_SESSION['user_id']) && $_SESSION['usertype'] === 'CUSTOMER';
if ($isLoggedIn) {
    include 'header-nav-buyer.php'; // Include the file for logged-in users
} else {
    include 'header-nav.php'; // Include the file for non-logged-in users
}
?>

<head>
    <?php include 'header.php'; ?>
    <?php include 'community/header.php'; ?>
    <link rel="manifest" href="manifest.json" />
    <link href="/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/contact.css">
</head>
<style>
    .loadload {
        width: 100%;
        height: 100%;
        top: 0px;
        position: fixed;
        z-index: 99999;
        background: rgba(255, 255, 255, 0.5);
        transition: all 0.2s;
    }

    .spinner-border {
        height: 50px;
        transform-origin: center center;
        width: 50px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }
</style>

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
    <?php include('category-sidebar.php'); ?>



    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
        <div class="container">
            <h2>contact us</h2>

        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <!--=====================================
                    CONTACT PART START
        =======================================-->
    <section class="inner-section contact-part">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card">
                        <i class="icofont-location-pin"></i>
                        <h4>College of Science </h4>
                        <p>CSB2, Bicol University Main Campus</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card active">
                        <i class="icofont-phone"></i>
                        <h4>phone number</h4>
                        <p>
                            <a href="#">(+63) 912 022 5970</a>
                            <a href="#">(+63) 912 022 5970</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="contact-card">
                        <i class="icofont-email"></i>
                        <h4>Support mail</h4>
                        <p>
                            <a href="#">
                                oma-angat@gmail.com</a>
                            <a href="#">info@example.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-lg-6">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31083.161119313027!2d123.70171859351804!3d13.137457306777062!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a103e420c01fbb%3A0x98886975fb5a21ef!2sBicol%20University%20College%20of%20Science%20(BUCS)!5e0!3m2!1sen!2sph!4v1700639706067!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <form class="contact-form">
                        <h4>Drop Your Thoughts</h4>
                        <div class="form-group">
                            <div class="form-input-group">
                                <input class="form-control" type="text" placeholder="Your Name">
                                <i class="icofont-user-alt-3"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-input-group">
                                <input class="form-control" type="text" placeholder="Your Email">
                                <i class="icofont-email"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-input-group">
                                <input class="form-control" type="text" placeholder="Your Subject">
                                <i class="icofont-book-mark"></i>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-input-group">
                                <textarea class="form-control" placeholder="Your Message"></textarea>
                                <i class="icofont-paragraph"></i>
                            </div>
                        </div>
                        <button type="submit" class="form-btn-group">
                            <i class="fas fa-envelope"></i>
                            <span>send message</span>
                        </button>
                    </form>
                </div> -->
            </div>
        </div>
    </section>
    <!--=====================================
                    CONTACT PART END
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