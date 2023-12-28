<!DOCTYPE html>
<html lang="en">
<?php
include("connect.php");
session_start();
$pid = $_GET['id'];
?>
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/brand-single.css">
<link rel="stylesheet" href="css/blog-author.css">
<link rel="stylesheet" href="css/home-standard.css">


<body>
    <?php
    // Check if the user is logged in
    $isLoggedIn = !empty($_SESSION['user_id']);;
    if ($isLoggedIn) {
        include 'header-nav-buyer.php'; // Include the file for logged-in users
    } else {
        include 'header-nav.php'; // Include the file for non-logged-in users
    }
    ?>
    <?php include('product-view.php'); ?>



    <!--=====================================BANNER PART END=======================================-->
    <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
        <div class="container">
            <h2>Shop by Category</h2>
        </div>
    </section>

    <!--=====================================
                    SHOP PART START
        =======================================-->
    <section class="inner-section shop-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="banner-category">
                        <div class="banner-category-head"><i class="fas fa-bars"></i><span>Sort by categories</span>
                        </div>
                        <ul class="banner-category-list">
                            <li class="banner-category-item"><a href="#"><i class="flaticon-vegetable"></i><span>vegetables</span></a>

                            </li>
                            <li class="banner-category-item"><a href="#"><i class="flaticon-fruit"></i><span>fruits</span></a>

                            </li>
                            <li class="banner-category-item"><a href="#"><i class="flaticon-dried-fruit"></i><span>Grains</span></a>

                            </li>

                            <li class="banner-category-item"><a href="#"><i class="flaticon-dairy-products"></i><span>dairy & eggs</span></a>

                            </li>

                            <li class="banner-category-item"><a href="#"><i class="flaticon-dairy-products"></i><span>fats & Oils</span></a>

                            </li>

                            <li class="banner-category-item"><a href="#"><i class="flaticon-groceries"></i><span>Processed Foods</span></a>
                            </li>
                            <li class="banner-category-item"><a href="#"><i class="flaticon-fish"></i><span>Dried
                                        Fish</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <?php
                    session_start();
                    $query = "SELECT p.id as id, pc.*, p.*, MAX(pi.image) as image FROM products_category pc INNER JOIN  products p ON pc.product_id = p.product_id INNER JOIN products_image pi ON p.product_id = pi.product_id  WHERE pc.category_id= '$pid' GROUP BY pc.product_id, pc.category_id";

                    $result = mysqli_query($connection, $query);
                    $productsCategories = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    ?>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                        <?php
                        foreach ($productsCategories as $productCategory) : ?>
                            <div class="col" data-bs-toggle="modal" data-bs-target="#product-view<?= $productCategory['id'] ?>">
                                <div class="product-card">
                                    <div class="product-media">
                                        <a class="product-image">
                                            <img src="../<?= $productCategory['image'] ?>" alt="product">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <h6 class="product-name">
                                            <a><?= $productCategory['productname'] ?></a>
                                        </h6>
                                        <h6 class="product-price">
                                            <span><small>Starts at ₱ <?= $productCategory['price'] ?></small></span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
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
</body>

</html>