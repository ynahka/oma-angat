<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/brand-single.css">

<body>
    <?php include('header-nav.php'); ?>
    <?php include('category-sidebar.php'); ?>

    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
        <div class="brand-single">
            <a href="#"><img src="images/brand/1.svg" alt="brand"></a>
            <a href="#">
                <h3>vegan lovers</h3>
            </a>
        </div>
        </div>
    </section>


    <!--=====================================BANNER PART END=======================================-->


    <!--=====================================
                    SHOP PART START
        =======================================-->
    <section class="inner-section shop-part">
        <div class="container">
            <div class="row content-reverse">
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
                    <div class="row">
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label off">-15%</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label new">new</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label sale">sale</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label feat">feature</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label off">-15%</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label rate">4.8</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label new">new</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
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