<?php
include("connect.php");
session_start();
?>

<head>
    <?php include 'header.php'; ?>
    <?php include 'community/header.php'; ?>
    <link rel="manifest" href="manifest.json" />
    <link href="/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/privacy.css">

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
            <h2>Privacy Policy</h2>
        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <!--=====================================
                    PRIVACY PART START
        =======================================-->
    <section class="inner-section privacy-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 sidebar">
                    <nav class="nav nav-pills flex-column" id="scrollspy">
                        <a class="nav-link" href="#item-1">How to contact with Customer Service?</a>
                        <a class="nav-link" href="#item-2">App installation failed, how to update system information?</a>
                        <a class="nav-link" href="#item-3">Website reponse taking time, how to improve?</a>
                        <a class="nav-link" href="#item-4">How do I create a account?</a>
                        <a class="nav-link" href="#item-5">I cannot find an answer to my question!</a>
                    </nav>
                </div>
                <div class="col-lg-9">
                    <div data-bs-spy="scroll" data-bs-target="#scrollspy" data-bs-offset="0" tabindex="0">
                        <div class="scrollspy-content" id="item-1">
                            <h3>How to contact with Customer Service?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam officia expedita beatae tempore facilis ex maiores, assumenda nostrum minus. Autem nemo corrupti consequuntur incidunt quibusdam dicta. Quasi atque deserunt totam hic voluptatibus veritatis. Ducimus dicta esse praesentium tenetur obcaecati reprehenderit, recusandae ab explicabo maxime deserunt mollitia. Aliquid distinctio tenetur dolore!</p>
                        </div>
                        <div class="scrollspy-content" id="item-2">
                            <h3>App installation failed, how to update system information?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam officia expedita beatae tempore facilis ex maiores, assumenda nostrum minus. Autem nemo corrupti consequuntur incidunt quibusdam dicta. Quasi atque deserunt totam hic voluptatibus veritatis. Ducimus dicta esse praesentium tenetur obcaecati reprehenderit, recusandae ab explicabo maxime deserunt mollitia. Aliquid distinctio tenetur dolore!</p>
                        </div>
                        <div class="scrollspy-content" id="item-3">
                            <h3>Website reponse taking time, how to improve?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam officia expedita beatae tempore facilis ex maiores, assumenda nostrum minus. Autem nemo corrupti consequuntur incidunt quibusdam dicta. Quasi atque deserunt totam hic voluptatibus veritatis. Ducimus dicta esse praesentium tenetur obcaecati reprehenderit, recusandae ab explicabo maxime deserunt mollitia. Aliquid distinctio tenetur dolore!</p>
                        </div>
                        <div class="scrollspy-content" id="item-4">
                            <h3>How do I create a account?</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam officia expedita beatae tempore facilis ex maiores, assumenda nostrum minus. Autem nemo corrupti consequuntur incidunt quibusdam dicta. Quasi atque deserunt totam hic voluptatibus veritatis. Ducimus dicta esse praesentium tenetur obcaecati reprehenderit, recusandae ab explicabo maxime deserunt mollitia. Aliquid distinctio tenetur dolore!</p>
                        </div>
                        <div class="scrollspy-content" id="item-5">
                            <h3>I cannot find an answer to my question!</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam officia expedita beatae tempore facilis ex maiores, assumenda nostrum minus. Autem nemo corrupti consequuntur incidunt quibusdam dicta. Quasi atque deserunt totam hic voluptatibus veritatis. Ducimus dicta esse praesentium tenetur obcaecati reprehenderit, recusandae ab explicabo maxime deserunt mollitia. Aliquid distinctio tenetur dolore!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    PRIVACY PART END
        =======================================-->

    <!--=====================================
                    JS LINK PART START
        =======================================-->

    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
    <!--=====================================
                    JS LINK PART END
        =======================================-->
</body>