<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<body>
    <?php include('header-nav-buyer.php'); ?>
    <?php include('category-sidebar.php'); ?>
    <?php include('product-view.php'); ?>




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
                                <a href="all-farmer-shop.php"><img src="images/promo/features/referral.svg" alt="referral"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <div class="home-grid-promo">
                                <a href="all-farmer-shop.php"><img src="images/promo/features/donation.svg" alt="donate"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-0 order-lg-1 order-xl-1">
                    <div class="home-grid-slider slider-arrow slider-dots">
                        <!-- <a href="chat.php"><img src="images/promo/features/messaging-system.svg" alt=""></a>
                        <a href="#"><img src="images/promo/features/harvesting-calendar.svg" alt=""></a> -->
                        <iframe width="1263" height="480" src="https://www.youtube.com/embed/owXzG8gFfXI" title="Support Family Farming - Help Local Farmers, Achieve Zero Hunger [Advocacy Video]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <iframe width="auto" height="auto" src="https://www.youtube.com/embed/jzx3M7G9bns" title="Support Filipino Farmers" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>





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

    // Close the database connection
    mysqli_close($connection);

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
    $Pitems = [
        [
            "name" => "vegetables",
            "img" => "images/suggest/Vegetables.svg",
            "url" => "shop-1column.php",
            "title" => "Vegetables",

        ],
        [
            "name" => "fruits",
            "img" => "images/suggest/Fruits.svg",
            "total_items" => 89,
            "url" => "shop-1column.php",
            "title" => "Fruits",

        ],
        [
            "name" => "Grains",
            "img" => "images/suggest/Grains.svg",

            "url" => "shop-1column.php",
            "title" => "Grains",

        ],
        [
            "name" => "eggs",
            "img" => "images/suggest/dairies.svg",

            "url" => "shop-1column.php",
            "title" => "Dairies & Eggs",

        ],
        [
            "name" => "oils",
            "img" => "images/suggest/oils.svg",
            "url" => "shop-1column.php",
            "title" => "Fats & Oils",

        ],
        [
            "name" => "oils",
            "img" => "images/suggest/processed.svg",
            "url" => "shop-1column.php",
            "title" => "Processed Goods",

        ],
        [
            "name" => "dry fish",
            "img" => "images/suggest/dried.svg",
            "total_items" => 23,
            "url" => "shop-1column.php",
            "title" => "Dried Fish",

        ]
    ];
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


    <section class="section niche-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Shop By Products</h2>
                    </div>
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
        </div>
    </section>



    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
</body>
</php>