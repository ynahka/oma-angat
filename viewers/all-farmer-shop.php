<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
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
    <section class="inner-section">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
                <div class="col">
                    <div class="category-wrap">
                        <div class="category-media">
                            <img src="images/category/dairy.jpg" alt="category">
                            <div class="category-overlay">
                                <a href="shop-3column.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="category-meta">
                            <h4>dairy items</h4>
                            <p>(25 items)</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-wrap">
                        <div class="category-media">
                            <img src="images/category/drinks.jpg" alt="category">
                            <div class="category-overlay">
                                <a href="shop-3column.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="category-meta">
                            <h4>coffe & drinks</h4>
                            <p>(25 items)</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-wrap">
                        <div class="category-media">
                            <img src="images/category/fish.jpg" alt="category">
                            <div class="category-overlay">
                                <a href="shop-3column.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="category-meta">
                            <h4>fish items</h4>
                            <p>(25 items)</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-wrap">
                        <div class="category-media">
                            <img src="images/category/groceries.jpg" alt="category">
                            <div class="category-overlay">
                                <a href="shop-3column.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="category-meta">
                            <h4>grocery items</h4>
                            <p>(25 items)</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-wrap">
                        <div class="category-media">
                            <img src="images/category/meat.jpg" alt="category">
                            <div class="category-overlay">
                                <a href="shop-3column.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="category-meta">
                            <h4>meat items</h4>
                            <p>(25 items)</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-wrap">
                        <div class="category-media">
                            <img src="images/category/fruits.jpg" alt="category">
                            <div class="category-overlay">
                                <a href="shop-3column.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="category-meta">
                            <h4>fresh fruits</h4>
                            <p>(25 items)</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-wrap">
                        <div class="category-media">
                            <img src="images/category/seafoods.jpg" alt="category">
                            <div class="category-overlay">
                                <a href="shop-3column.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="category-meta">
                            <h4>seafoods</h4>
                            <p>(25 items)</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-wrap">
                        <div class="category-media">
                            <img src="images/category/fastfoods.jpg" alt="category">
                            <div class="category-overlay">
                                <a href="shop-3column.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="category-meta">
                            <h4>fastfoods</h4>
                            <p>(25 items)</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="category-wrap">
                        <div class="category-media">
                            <img src="images/category/fastfoods.jpg" alt="category">
                            <div class="category-overlay">
                                <a href="shop-3column.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="category-meta">
                            <h4>fastfoods</h4>
                            <p>(25 items)</p>
                        </div>
                    </div>
                </div>
            </div>
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
                        <p>Join and watch your fields grow to ensures fair compensation for your dedication. Your hard work nourishes not just the land but also the community.</p>
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