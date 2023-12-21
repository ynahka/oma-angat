<!DOCTYPE html>
<html lang="en">
<?php include("connect.php");
$pid = $_GET['id'];
?>
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/brand-single.css">
<link rel="stylesheet" href="css/blog-author.css">

<body>
    <?php include('header-nav.php'); ?>
    <?php include('category-sidebar.php'); ?>


    <!--=====================================BANNER PART END=======================================-->


    <!--=====================================
                    SHOP PART START
        =======================================-->
    <section class="inner-section shop-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="author-single">
                            <div class="author-content">
                                <?php
                                // Retrieve author details from user_details
                                $sellerQuery = mysqli_query($connection, "SELECT ud.*, u.username 
                                                            FROM users_table u
                                                            INNER JOIN user_details ud ON u.user_id = ud.user_id
                                                            WHERE u.user_id='$pid'");
                                $sellerDetails = mysqli_fetch_assoc($sellerQuery);
                                ?>
                                <a href="#" class="author-image">
                                    <img src="../OmaangatImages/ProfileImage/<?= $sellerDetails['profileimage'] ?>" alt="avatar">
                                    <div class="author-info">
                                        <h3 class="author-name"><?= $sellerDetails['username'] ?></h3>
                                        <h6 class="author-mail"><?= $sellerDetails['email'] ?></h6>
                                        <h6 class="author-mail"><i class="fas fa-map-marker-alt"></i>
                                            <?= $sellerDetails['address'] ?></h6>
                                        <ul class="author-meta">
                                            <li><a href="chat.php"><a href="chat.php" class="fas fa-comments"></a>Message
                                                    Farmer</a></li>
                                        </ul>
                                        <!-- <a href="chat.php" class="author-meta">
                                        <i class="fas fa-comments"></i> Message Farmer
                                    </a> -->
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-widget-promo">
                        <a><img src="images/promo/features/referral.svg" alt="promo"></a>
                        <div class="offer-div">
                            <!-- <h5 class="offer-select">Click to copylink</h5> -->
                            <button class="offer-select" id="copyLinkBtn" onclick="copyToClipboard()">Click to copy
                                link</button>
                        </div>
                    </div>



                    <div class="shop-widget-promo">
                        <a><img src="images/promo/features/donation.svg" alt="promo"></a>
                        <div class="offer-div">
                            <!-- <button class="offer-select"><a href="chat.php">Click to Chat Farmer</a></button> -->
                            <a class="blog-btn" href="chat.php">
                                <span>Click here to Chat Farmer</span>
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </div>

                    </div>


                    <!-- <div class="shop-widget">
                        <h6 class="shop-widget-title">Price Range</h6>
                        <form>
                            <div class="shop-widget-group">
                                <input type="text" placeholder="Min - 00">
                                <input type="text" placeholder="Max - 5k">
                            </div>
                            <button class="shop-widget-btn">
                                <i class="fas fa-search"></i>
                                <span>search</span>
                            </button>
                        </form>
                    </div> -->
                </div>

                <div class="col-lg-9">

                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                        <?php
                        include('product-view.php');
                        $ret = mysqli_query($connection, "SELECT p.id as id, p.productname AS names, pi.imagename AS imahe, p.price AS presyo FROM products AS p
    INNER JOIN user_details AS ud ON p.seller_id = ud.user_id
    INNER JOIN products_image AS pi ON p.product_id = pi.product_id
    WHERE ud.user_id='$pid'  GROUP BY p.product_id");
                        $num = mysqli_num_rows($ret);
                        if ($num > 0) {
                            while ($row = mysqli_fetch_array($ret)) {
                        ?>
                                <div class="col" data-bs-toggle="modal" data-bs-target="#product-view<?php echo $row['id'] ?>">
                                    <div class="product-card">
                                        <div class="product-media">
                                            <a class="product-image">
                                                <img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>" alt="product">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h6 class="product-name">
                                                <a><?php echo htmlentities($row['names']); ?></a>
                                            </h6>
                                            <h6 class="product-price">
                                                <span><small>Starts at ₱
                                                        <?php echo htmlentities($row['presyo']); ?></small></span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    SHOP PART END
        =======================================-->
    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
    <script>
        function copyToClipboard() {
            // Get the text content you want to copy
            var linkToCopy =
                "http://localhost/oma-angat/viewers/shop-1column.php?id=<?= $pid ?>";

            // Create a temporary input element
            var tempInput = document.createElement("input");
            tempInput.value = linkToCopy;

            // Append the input element to the document
            document.body.appendChild(tempInput);

            // Select the text inside the input element
            tempInput.select();
            tempInput.setSelectionRange(0, 99999); /* For mobile devices */

            // Copy the selected text
            document.execCommand("copy");

            // Remove the temporary input element
            document.body.removeChild(tempInput);

            // Optionally, provide user feedback (e.g., alert or change button text)
            alert("Link copied to clipboard!");
        }
    </script>

</body>

</html>