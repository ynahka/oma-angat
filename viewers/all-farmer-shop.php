<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';
include('connect.php') ?>
<link rel="stylesheet" href="css/all-category.css">

<body>
    <?php include('header-nav.php'); ?>
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