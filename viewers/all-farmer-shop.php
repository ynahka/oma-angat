<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';
include('connect.php');
session_start();
?>

<link rel="stylesheet" href="css/all-category.css">

<body>
    <?php
    // Check if the user is logged in
    $isLoggedIn = !empty($_SESSION['user_id']) && $_SESSION['usertype'] === 'CUSTOMER';
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
            <h2>Shop by Farmer's Market</h2>
        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <!--=====================================
                    CATEGORY PART START
        =======================================-->

    <?php
    error_reporting(0);
    session_start();

    $sql = "SELECT users_table.*, user_details.profileimage, user_details.barangay, user_details.city FROM users_table
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
                "brgy" => $row['barangay'],
                "cy" => $row['city'],
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
    <div class="container suggest">
        <ul class="suggest-slider slider-arrow">
            <?php foreach ($Pitems as $Pitem) : ?>
                <li>
                    <div class="product-card" style="height: 230px;">
                        <a class="product-media" href="<?php echo $Pitem['url'] . '?id=' . $Pitem['id']; ?>">
                            <img src="<?php echo $Pitem['img'] ?>">
                        </a>
                        <div class="product-content" style=" font-weight:500; ">
                            <h6 class="product-name">
                                <p><?php echo $Pitem['title'] ?></p>
                                <p style="font-size: 12px; font-weight: 400;"> <i class=" fas fa-map-marker-alt"></i> <span><?php echo $Pitem['brgy'] ?></span>, <?php echo  $Pitem['cy'] ?> </p>
                                <!-- <p style="font-size: 12px; font-weight: 400; margin-left:13px"></i> <?php echo  $Pitem['cy'] ?></p> -->
                            </h6>


                        </div>

                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <!--=====================================
                    CATEGORY PART END
        =======================================-->


    <section class="section countdown-part">
        <div class="container featured">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto">
                    <div class="countdown-img">
                        <img src="images/front-seller.svg" alt="countdown">
                    </div>
                </div>
                <div class="col-lg-6 mx-auto">
                    <div class="countdown-content">
                        <h2>Are you a Farmer?</h2>
                        <p>Join and watch your fields grow to ensures fair compensation for your dedication. Your hard
                            work nourishes not just the land but also the community.</p>
                        <a href="../seller/login.php" class="btn btn-outline">
                            <i class="fa-solid fa-store"></i>
                            <span>Start Selling</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>

</body>

</html>