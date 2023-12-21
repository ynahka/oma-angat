<!DOCTYPE html>
<html lang="en">
<?php
include("connect.php");
session_start();
if (empty($_SESSION['user_id'])) {
    echo "<script> window.location = '../buyer/login.php';</script>";
} else {
?>
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
        // Your SQL query to retrieve store information
        $sql = "SELECT users_table.*, user_details.profileimage FROM users_table 
       INNER JOIN user_details ON users_table.user_id = user_details.user_id 
       WHERE users_table.usertype= 'SELLER' AND users_table.status= 'APPROVED'";
        $result = mysqli_query($connection, $sql);

        $Pitems = [];

        // Check if the query was successful
        if ($result) {
            // Fetch the result row by row
            while ($row = mysqli_fetch_assoc($result)) {
                // Retrieve the image filename from the database
                $imageFilename = $row['profileimage'];

                $Pitem = [
                    "id" => $row['user_id'],
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
                            <a class="suggest-card" href="<?php echo $Pitem['url'] . '?id=' . $Pitem['id']; ?>">
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
                   SHOP BY CATEGORIES
        =======================================-->
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
                    "id" => $row['category_id'],
                    "name" => $row['categoryname'],
                    "img" => 'data:image/png;base64,' . $imgBase64, // Modify the MIME type according to your image type
                    "url" => "per-category.php", // Replace with the appropriate URL for the category
                    "title" => $row['categoryname'],
                );
                $Pitems[] = $item;
            }
        } else {
            echo "0 results";
        }

        // Close the database connection

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
                            <a class="suggest-card" href="<?php echo $Pitem['url'] . '?id=' . $Pitem['id']; ?>">
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
                    S H O P BY P R O D U C T S
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

                        <?php
                        $ret = mysqli_query($connection, "SELECT p.id AS id, p.productdesc AS descrip, p.productname AS names, p.price AS presyo, pi.imagename AS imahe FROM products AS p INNER JOIN products_image AS pi ON p.product_id = pi.product_id;");
                        $num = mysqli_num_rows($ret);
                        if ($num > 0) {
                            while ($row = mysqli_fetch_array($ret)) {
                        ?>

                                <div class="col">
                                    <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view<?php echo $row['id'] ?>">

                                        <div class="product-media">
                                            <div class="product-label">
                                                <label class="label-text order"></label>
                                            </div>
                                            <a class="product-image">
                                                <img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>" alt="product">
                                            </a>
                                        </div>

                                        <div class="product-content">
                                            <div class="row">
                                                <div class="col" style="display: flex; align-items:center">
                                                    <h6 class="product-name">
                                                        <a><?php echo htmlentities($row['names']); ?></a>
                                                    </h6>
                                                </div>
                                                <h6 class="product-price">
                                                    <span><small>Starts at ₱
                                                            <?php echo htmlentities($row['presyo']); ?></small></span>
                                                </h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
        </section>
        <?php include('footer.php'); ?>
        <?php include('js-vendor.php'); ?>
    </body>
    </php>
<?php
}
?>