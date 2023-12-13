<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<body>
    <?php include('header-nav.php'); ?>
    <?php include('category-sidebar.php'); ?>
    <?php include('product-view.php'); ?>



    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="home-index-slider slider-arrow slider-dots">
        <div class="banner-part banner-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content-1">
                            <h1><span class="highlight">Shop Local and</span><br> Support Farmers <span
                                    class="highlight"></span> </h1>
                            <p>Shop directly from farmers! Get healthy and locally grown produce right at your doorstep.
                            </p>
                            <div class="banner-btn">
                                <a class="btn btn-banner" href="#">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img">
                            <img src="images/front-buyer.svg" alt="index">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-part banner-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img">
                            <img src="images/front-seller.svg" alt="index">

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content">
                            <h1><span class="highlight">Are you a Farmer? </span> <br> Join and watch your fields grow
                            </h1>
                            <p>We ensure your fair compensation for your dedication. <br> Your hard work nourishes not
                                just the land but also the community.</p>
                            <div class="banner-btn-1">
                                <a class="btn btn-banner" href="../farmerside/index.php">
                                    <i class="fa-solid fa-store"></i>
                                    <span>start selling</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="promo-part">
        <div class="col-lg-12">
            <div class="promo-img">
                <a><img src="images/banner11.svg" alt="promo"></a>
            </div>
        </div>
    </div>

    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="banner-part-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Why and How to Support Farmers?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 order-1 order-lg-0 order-xl-0">
                    <div class="row">
                        <div class="col-sm-6 col-lg-12">
                            <div class="home-grid-promo">
                                <a href="all-farmer-shop.php"><img src="images/promo/features/referral.svg"
                                        alt="referral"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <div class="home-grid-promo">
                                <a href="all-farmer-shop.php"><img src="images/promo/features/donation.svg"
                                        alt="donate"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-0 order-lg-1 order-xl-1">
                    <div class="home-grid-slider slider-arrow slider-dots">
                        <!-- <a href="chat.php"><img src="images/promo/features/messaging-system.svg" alt=""></a>
                        <a href="#"><img src="images/promo/features/harvesting-calendar.svg" alt=""></a> -->
                        <iframe width="1263" height="480" src="https://www.youtube.com/embed/owXzG8gFfXI"
                            title="Support Family Farming - Help Local Farmers, Achieve Zero Hunger [Advocacy Video]"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <iframe width="auto" height="auto" src="https://www.youtube.com/embed/jzx3M7G9bns"
                            title="Support Filipino Farmers" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <?php
    include("../connection/connect.php");
    error_reporting(0);
    session_start();

    // Your SQL query to retrieve store information
    $sql = "SELECT users_table.*, user_details.profileimage FROM users_table 
       INNER JOIN user_details ON users_table.user_id = user_details.user_id 
       WHERE users_table.usertype= 'SELLER'";
    $result = mysqli_query($connection, $sql);

    $Pitems = [];

    // Check if the query was successful
    if ($result) {
        // Fetch the result row by row
        while ($row = mysqli_fetch_assoc($result)) {
            // Retrieve the image filename from the database
            $imageFilename = $row['profileimage'];

            $Pitem = [
                "name" => $row['username'],
                "img" => "../OmaangatImages/ProfileImage/{$imageFilename}", // Use the image filename from the database
                "url" => "shop-1column.php", // You may want to customize this based on your requirements
                "title" => $row['username'],
                // Add more fields as needed
            ];

            // Add the store item to the array
            $Pitems[] = $Pitem;
        }

        // Free the result set
        mysqli_free_result($result);
    } else {
        // Handle the case where the query was not successful
        echo 'Error executing query: ' . mysqli_error($connection);
    }

    ?>




    <!-- By Farmer's Market -->
    <section class="section suggest-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Shop By Farmer's Market</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container suggest">
            <ul class="suggest-slider slider-arrow">
                <?php foreach ($Pitems as $Pitem) : ?>
                <li>
                    <a class="suggest-card" href="<?php echo $Pitem['url'] ?>">
                        <img src="<?php echo $Pitem['img'] ?>">
                    </a>
                    <div class="suggest-info" style="text-align: center; font-weight:500; ">
                        <p><?php echo $Pitem['title'] ?></p>
                    </div>
                </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </section>


    <?php
    // Your SQL query to retrieve store information
    $sql = "SELECT * FROM categories";

    $result = $connection->query($sql);

    $Pitems = array();

    if ($result->num_rows > 0) {
        // Loop through each row of the result set
        while ($row = $result->fetch_assoc()) {
            // Retrieve image data
            $imgData = $row['image']; // Replace 'image_column' with the actual column name storing the image

            // Convert blob data to base64 encoding
            $imgBase64 = base64_encode($imgData);

            // Create an array for each row of data and append it to $Pitems
            $item = array(
                "name" => $row['categoryname'],
                "img" => 'data:image/svg+xml;base64,' . $imgBase64, // Modify the MIME type according to your image type
                "url" => "per-category.php", // Replace with the appropriate URL for the category
                "title" => $row['categoryname'],
            );
            $Pitems[] = $item;
        }
    } else {
        echo "0 results";
    }

    // Close the database connection
    $connection->close();

    // Now $Pitems contains the data retrieved from the database, including the count of products for each category
    ?>



    <section class="section suggest-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Shop by Category</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container suggest">
            <ul class="suggest-slider slider-arrow">
                <?php foreach ($Pitems as $Pitem) : ?>
                <li>
                    <a class="suggest-card" href="<?php echo $Pitem['url'] ?>">
                        <img src="<?php echo $Pitem['img'] ?>">
                    </a>
                    <div class="suggest-info" style="text-align: center; font-weight:500; ">
                        <p><?php echo $Pitem['title'] ?></p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>


    <!--=====================================
                    NICHE PART START
        =======================================-->


    <div class="promo-part">
        <div class="col-lg-12">
            <div class="promo-img">
                <a><img src="images/4.svg" alt="promo"></a>
            </div>
        </div>
    </div>

    <section class="section niche-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Shop By Top Picks</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <ul class="nav nav-tabs">
                        <li>
                            <a href="#top-order" class="tab-link active" data-bs-toggle="tab">
                                <i class="icofont-price"></i>
                                <span>top orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="#top-rate" class="tab-link" data-bs-toggle="tab">
                                <i class="icofont-star"></i>
                                <span>top ratings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-pane fade show active" id="top-order">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="top-rate">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="shop-4column.php" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!--=====================================
                    NICHE PART END
        =======================================-->

    <div class="promo-part">
        <div class="col-lg-12">
            <div class="promo-img">
                <a><img src="images/5.svg" alt="promo"></a>
            </div>
        </div>
    </div>

    <!--=====================================
                    NEW ITEM PART START
        =======================================-->
    <section class="section newitem-part">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-heading">
                        <h2>Newly Harvested Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="new-slider slider-arrow">
                        <li>
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col" style="display: flex; align-items:center">
                                            <h6 class="product-name">
                                                <a>Avocado</a>
                                            </h6>
                                        </div>
                                        <h6 class="product-price">
                                            <span><small>Starts at ₱ 29</small></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col" style="display: flex; align-items:center">
                                            <h6 class="product-name">
                                                <a>Avocado</a>
                                            </h6>
                                        </div>
                                        <h6 class="product-price">
                                            <span><small>Starts at ₱ 29</small></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col" style="display: flex; align-items:center">
                                            <h6 class="product-name">
                                                <a>Avocado</a>
                                            </h6>
                                        </div>
                                        <h6 class="product-price">
                                            <span><small>Starts at ₱ 29</small></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col" style="display: flex; align-items:center">
                                            <h6 class="product-name">
                                                <a>Avocado</a>
                                            </h6>
                                        </div>
                                        <h6 class="product-price">
                                            <span><small>Starts at ₱ 29</small></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    NEW ITEM PART END
        =======================================-->


    <div class="promo-part">
        <div class="col-lg-12">
            <div class="promo-img">
                <a><img src="images/market-day.svg" alt="promo"></a>
            </div>
        </div>
    </div>

    <!--=====================================
                    FEATURED PART START
        =======================================-->
    <section class="section feature-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>PAUBUSAN SALE</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="new-slider slider-arrow">
                        <li>
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col" style="display: flex; align-items:center">
                                            <h6 class="product-name">
                                                <a>Avocado</a>
                                            </h6>
                                        </div>
                                        <h6 class="product-price">
                                            <span><small>Starts at ₱ 29</small></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col" style="display: flex; align-items:center">
                                            <h6 class="product-name">
                                                <a>Avocado</a>
                                            </h6>
                                        </div>
                                        <h6 class="product-price">
                                            <span><small>Starts at ₱ 29</small></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col" style="display: flex; align-items:center">
                                            <h6 class="product-name">
                                                <a>Avocado</a>
                                            </h6>
                                        </div>
                                        <h6 class="product-price">
                                            <span><small>Starts at ₱ 29</small></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text order">314</label>
                                    </div>
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col" style="display: flex; align-items:center">
                                            <h6 class="product-name">
                                                <a>Avocado</a>
                                            </h6>
                                        </div>
                                        <h6 class="product-price">
                                            <span><small>Starts at ₱ 29</small></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!--=====================================
                    FEATURE PART END
        =======================================-->



    <!--=====================================
                    PROMOTION PART START
        =======================================-->

    <!--=====================================
                    PROMOTION PART END
        =======================================-->

    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
</body>
</php>