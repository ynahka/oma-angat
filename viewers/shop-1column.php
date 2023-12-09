<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/brand-single.css">
<link rel="stylesheet" href="css/blog-author.css">

<body>
    <?php include('header-nav.php'); ?>
    <?php include('category-sidebar.php'); ?>
    <?php include('product-view.php'); ?>


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
                                <a href="#" class="author-image">
                                    <img src="images/brand/1.svg" alt="avatar">
                                </a>
                                <div class="author-info">
                                    <h3 class="author-name">Oma-angat</h3>
                                    <h6 class="author-mail">mironcoder@gmail.com</h6>
                                    <ul class="author-meta">
                                        <li><a href="chat.php"><a href="chat.php" class="fas fa-comments"></a>Message Farmer</a></li>
                                    </ul>
                                    <!-- <a href="chat.php" class="author-meta">
                                        <i class="fas fa-comments"></i> Message Farmer
                                    </a> -->
                                </div>
                            </div>
                            <p class="author-bio">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea deserunt nisi, tempore eveniet pariatur natus delectus commodi, totam est culpa ducimus rem reprehenderit suscipit veritatis assumenda. Delectus, saepe. Explicabo, quos magnam fuga porro
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shop-widget-promo">
                        <a><img src="images/promo/features/referral.svg" alt="promo"></a>
                        <div class="offer-div">
                            <!-- <h5 class="offer-select">Click to copylink</h5> -->
                            <button class="offer-select">Click to copylink</button>
                        </div>
                    </div>


                    <div class="shop-widget-promo">
                        <a><img src="images/promo/features/donation.svg" alt="promo"></a>
                        <div class="offer-div">
                            <!-- <h5 class="offer-select">Click to copylink</h5> -->
                            <button class="offer-select">Click to copylink</button>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-filter">
                                <div class="filter-short">
                                    <label class="filter-label">Sort by Category :</label>
                                    <select class="form-select filter-select">
                                        <option selected>All</option>
                                        <option value="1">Vegetables</option>
                                        <option value="2">Fruits</option>
                                        <option value="3">Grains</option>
                                        <option value="4">Dairies & Eggs</option>
                                        <option value="5">Fats & Oils</option>
                                        <option value="6">Processed Goods</option>
                                        <option value="7">Dried Fish</option>
                                    </select>
                                </div>
                                <div class="filter-short">
                                    <label class="filter-label">Price Range :</label>
                                    <select class="form-select filter-select">
                                        <option selected>price range</option>
                                        <option value="3">Lowest to Highest</option>
                                        <option value="1">Highest to Lowest</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                        <div class="col" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-card">
                                <div class="product-media">
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h6 class="product-name">
                                        <a>fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>

                                </div>
                                <div class="product-content">
                                    <h6 class="product-name">
                                        <a>fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>

                                </div>
                                <div class="product-content">
                                    <h6 class="product-name">
                                        <a>fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h6 class="product-name">
                                        <a>fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>

                                </div>
                                <div class="product-content">
                                    <h6 class="product-name">
                                        <a>fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>

                                </div>
                                <div class="product-content">
                                    <h6 class="product-name">
                                        <a>fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>

                                </div>
                                <div class="product-content">
                                    <h6 class="product-name">
                                        <a>fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                                <div class="product-media">

                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>

                                </div>
                                <div class="product-content">
                                    <h6 class="product-name">
                                        <a>fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">

                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>

                                </div>
                                <div class="product-content">
                                    <h6 class="product-name">
                                        <a>fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <a class="product-image">
                                        <img src="images/product/1.png" alt="product">
                                    </a>

                                </div>
                                <div class="product-content">
                                    <h6 class="product-name">
                                        <a>fresh green chilis</a>
                                    </h6>
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
    <!--=====================================
                    SHOP PART END
        =======================================-->
    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
</body>

</html>