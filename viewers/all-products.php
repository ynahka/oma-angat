<!DOCTYPE html>
<html lang="en">
<?php include 'connect.php'; ?>
<?php include 'header.php'; ?>

<body>
    <?php include('header-nav.php'); ?>
    <?php include('category-sidebar.php'); ?>
    <?php include('product-view.php'); ?>




    <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
        <div class="container">
            <h2>Shop by Products</h2>
        </div>
    </section>

    <section class="section niche-part">
        <div class="container">
            <div class="tab-pane fade show active" id="top-order">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <?php
                    $ret = mysqli_query($connection, "SELECT p.id AS id, p.productdesc AS descrip, p.productname AS names, p.price AS presyo, p.quantity AS quantity, MAX(pi.imagename) AS imahe 
                                    FROM products AS p 
                                    INNER JOIN products_image AS pi ON p.product_id = pi.product_id 
                                    GROUP BY p.id;");

                    $num = mysqli_num_rows($ret);
                    if ($num > 0) {
                        while ($row = mysqli_fetch_array($ret)) {
                    ?>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal"
                            data-bs-target="#product-view<?php echo $row['id'] ?>">
                            <div class="product-media">
                                <div class="product-label">
                                    <label
                                        class="label-text order"><?php echo htmlentities($row['quantity']); ?></label>
                                </div>
                                <a class="product-image">
                                    <img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                        alt="product">
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
            </div>
        </div>
    </section>


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
                        <a href="login.php" class="btn btn-outline">
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