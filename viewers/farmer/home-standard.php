<!DOCTYPE html>
<html lang="en">
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="css/home-standard.css">
 
    <body>
             
    <div class="backdrop"></div>
        <a class="backtop fas fa-arrow-up" href="#"></a>
        
        <!--=====================================
                    HEADER TOP PART START
        =======================================-->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-8">
                        <div class="header-top-welcome">
                            <p>Welcome to Agri-Market for Local Farmers!</p>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-4">
                        <ul class="header-top-list">
                            <li><a href="offer.php">offers</a></li>
                            <li><a href="faq.php">FAQs</a></li>
                            <li><a href="contact.php">contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--=====================================
                    HEADER TOP PART END 
        =======================================-->



        <!--=====================================
                    HEADER PART START
        =======================================-->
        <header class="header-part">
            <div class="container">
                <div class="header-content">
                    <div class="header-media-group">
                        <button class="header-user"><img src="images/user.jpg" alt="user"></button>
                        <a href="index.php"><img src="images/oma-angat-logo.svg" alt="logo"></a>
                        <button class="header-src"><i class="fas fa-search"></i></button>
                    </div>

                    <a href="index.php" class="header-logo">
                        <img src="images/oma-angat-logo.svg" alt="logo">
                    </a>

                    <!-- LOGIN PAGE -->
                    <a href="login.php" class="header-widget" title="Join">
                        <button>Get Started</button>
                    </a>

                    <!-- <?php
                        session_start();
                        if(isset($_SESSION['user_id'])) {
                            echo '<div class="header-media-group">
                                      <button class="header-user"><img src="images/user.jpg" alt="user"></button>
                                      <a href="index.php"><img src="images/oma-angat-logo.svg" alt="logo"></a>
                                      <button class="header-src"><i class="fas fa-search"></i></button>
                                  </div>';
                        } else {
                            echo '<a href="login.php" class="header-widget" title="Join">
                                      <button>Get Started</button>
                                  </a>';
                        }
                    ?> -->

                    
                    <form class="header-form">
                        <input type="text" placeholder="Search">
                        <button><i class="fas fa-search"></i></button>
                    </form>

                    <div class="header-widget-group">
                        <a href="notification.php" class="header-widget" title="Notifications">
                            <i class="icofont-tasks-alt"></i>
                            <sup>0</sup>
                        </a>
                        <a href="wishlist.php" class="header-widget" title="Wishlist">
                            <i class="fas fa-heart"></i>
                            <sup>0</sup>
                        </a>
                        <button class="header-widget header-cart" title="Cartlist">
                            <i class="fas fa-shopping-basket"></i>
                            <sup>9+</sup>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <!--=====================================
                    HEADER PART END
        =======================================-->


        <!--=====================================
                    NAVBAR PART START
        =======================================-->
        <nav class="navbar-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-content">
                            <ul class="navbar-list">
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="index.php">home</a>
                                </li>
                                <li class="navbar-item dropdown-megamenu">
                                    <a class="navbar-link dropdown-arrow" href="#">shop</a>
                                    <div class="megamenu">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">shop pages</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="shop-1column.php">shop 1 column</a></li>
                                                            <li><a href="shop-2column.php">shop 2 column</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">product pages</h5>
                                                        <ul class="megamenu-list">
                                                            <!-- <li><a href="product-tab.php">product single tab</a></li>
                                                            <li><a href="product-grid.php">product single grid</a></li>
                                                            <li><a href="product-video.php">product single video</a></li> -->
                                                            <li><a href="product-simple.php">product single simple</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">user action</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="wishlist.php">wishlist</a></li>
                                                            <li><a href="compare.php">compare</a></li>
                                                            <li><a href="checkout.php">checkout</a></li>
                                                            <li><a href="orderlist.php">order history</a></li>
                                                            <li><a href="invoice.php">order invoice</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="megamenu-wrap">
                                                        <h5 class="megamenu-title">other pages</h5>
                                                        <ul class="megamenu-list">
                                                            <li><a href="all-category.php">all Category</a></li>
                                                            <li><a href="brand-list.php">brand list</a></li>
                                                            <li><a href="brand-single.php">brand single</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">pages</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="faq.php">faqs</a></li>
                                        <li><a href="offer.php">offers</a></li>
                                        <li><a href="profile.php">my profile</a></li>
                                        <li><a href="wallet.php">my wallet</a></li>
                                        <li><a href="about.php">about us</a></li>
                                        <li><a href="contact.php">contact us</a></li>
                                        <li><a href="privacy.php">privacy policy</a></li>
                                        <li><a href="coming-soon.php">coming soon</a></li>
                                        <li><a href="blank-page.php">blank page</a></li>
                                        <li><a href="error.php">404 Error</a></li>
                                        <li><a href="email-template.php">email template</a></li>
                                    </ul>
                                </li>
                                <!-- <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">authentic</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="login.php">login</a></li>
                                        <li><a href="register.php">register</a></li>
                                        <li><a href="reset-password.php">reset password</a></li>
                                        <li><a href="change-password.php">change password</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown-arrow" href="#">blogs</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="blog-grid.php">blog grid</a></li>
                                        <li><a href="blog-standard.php">blog standard</a></li>
                                        <li><a href="blog-details.php">blog details</a></li>
                                        <li><a href="blog-author.php">blog author</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                            <div class="navbar-info-group">
                                <div class="navbar-info">
                                    <a href="#"><i class="icofont-exchange"></i></a>
                                    <p>
                                        <small><a href="#">Donation</a></small>
                                    </p>
                                </div>
                                <div class="navbar-info">
                                    <a href="#"><i class="icofont-calendar"></i></a>
                                    <p>
                                        <small><a href="#">Harvesting Calendar</a></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--=====================================
                    NAVBAR PART END
        =======================================-->

    
        <!--=====================================
                    MOBILE-MENU PART START
        =======================================-->
        <div class="mobile-navbar-item">
            <a href="index.html" title="Home Page">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
            <button class="cate-btn" title="Category List">
                <i class="fas fa-list"></i>
                <span>category</span>
            </button>
            <button class="cart-btn" title="Cartlist">
                <i class="fas fa-shopping-basket"></i>
                <span>cartlist</span>
                <sup>9+</sup>
            </button>
            <a href="wishlist.html" title="Wishlist">
                <i class="fas fa-heart"></i>
                <span>wishlist</span>
                <sup>0</sup>
            </a>
            <a href="compare.html" title="Compare List">
                <i class="fas fa-random"></i>
                <span>compare</span>
                <sup>0</sup>
            </a>
        </div>
        <!--=====================================
                    MOBILE-MENU PART END
        =======================================-->


        <!--=====================================
                    PRODUCT VIEW START
        =======================================-->
        <div class="modal fade" id="product-view">
            <div class="modal-dialog"> 
                <div class="modal-content">
                    <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                    <div class="product-view">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="view-gallery">
                                    <div class="view-label-group">
                                        <label class="view-label new">new</label>
                                        <label class="view-label off">-10%</label>
                                    </div>
                                    <ul class="preview-slider slider-arrow"> 
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                    </ul>
                                    <ul class="thumb-slider">
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                        <li><img src="images/product/01.jpg" alt="product"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="view-details">
                                    <h3 class="view-name">
                                        <a href="product-video.html">existing product name</a>
                                    </h3>
                                    <div class="view-meta">
                                        <p>SKU:<span>1234567</span></p>
                                        <p>BRAND:<a href="#">radhuni</a></p>
                                    </div>
                                    <div class="view-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3 reviews)</a>
                                    </div>
                                    <h3 class="view-price">
                                        <del>$38.00</del>
                                        <span>$24.00<small>/per kilo</small></span>
                                    </h3>
                                    <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit fuga</p>
                                    <div class="view-list-group">
                                        <label class="view-list-title">tags:</label>
                                        <ul class="view-tag-list">
                                            <li><a href="#">organic</a></li>
                                            <li><a href="#">vegetable</a></li>
                                            <li><a href="#">chilis</a></li>
                                        </ul>
                                    </div>
                                    <div class="view-list-group">
                                        <label class="view-list-title">Share:</label>
                                        <ul class="view-share-list">
                                            <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                            <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                            <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                            <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                        </ul>
                                    </div>
                                    <div class="view-add-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                    <div class="view-action-group">
                                        <a class="view-wish wish" href="#" title="Add Your Wishlist">
                                            <i class="icofont-heart"></i>
                                            <span>add to wish</span>
                                        </a>
                                        <a class="view-compare" href="compare.html" title="Compare This Item">
                                            <i class="fas fa-random"></i>
                                            <span>Compare This</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
        <!--=====================================
                    PRODUCT VIEW END
        =======================================-->


        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="banner-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="banner-category">
                            <div class="banner-category-head">
                                <i class="fas fa-bars"></i>
                                <span>top categories</span>
                            </div>
                            <ul class="banner-category-list">
                                <li class="banner-category-item">
                                    <a href="#">
                                        <i class="flaticon-vegetable"></i>
                                        <span>vegetables</span>
                                    </a>
                                    <div class="banner-category-dropdown">
                                        <h5>vegetables item</h5>
                                        <div class="banner-sub-category">
                                            <ul>
                                                <li><a href="#">carrot</a></li>
                                                <li><a href="#">broccoli</a></li>
                                                <li><a href="#">asparagus</a></li>
                                                <li><a href="#">cauliflower</a></li>
                                                <li><a href="#">cucumber</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#">eggplant</a></li>
                                                <li><a href="#">green pepper</a></li>
                                                <li><a href="#">lettuce</a></li>
                                                <li><a href="#">mushrooms</a></li>
                                                <li><a href="#">onion</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#">potato</a></li>
                                                <li><a href="#">pumpkin</a></li>
                                                <li><a href="#">tomato</a></li>
                                                <li><a href="#">beetroot</a></li>
                                                <li><a href="#">zucchini</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#">radish</a></li>
                                                <li><a href="#">artichoke</a></li>
                                                <li><a href="#">cabbage</a></li>
                                                <li><a href="#">celery</a></li>
                                                <li><a href="#">parsley</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="banner-category-item">
                                    <a href="#">
                                        <i class="flaticon-groceries"></i>
                                        <span>groceries</span>
                                    </a>
                                    <div class="banner-category-dropdown">
                                        <h5>groceries item</h5>
                                        <div class="banner-sub-category">
                                            <ul>
                                                <li><a href="#">Butter</a></li>
                                                <li><a href="#">Rice</a></li>
                                                <li><a href="#">Bread</a></li>
                                                <li><a href="#">Pasta</a></li>
                                                <li><a href="#">Cooking oil</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#">Cheese</a></li>
                                                <li><a href="#">Yogurt</a></li>
                                                <li><a href="#">Onions</a></li>
                                                <li><a href="#">Garlic</a></li>
                                                <li><a href="#">Pulses</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#">Soup</a></li>
                                                <li><a href="#">Salt</a></li>
                                                <li><a href="#">Pepper</a></li>
                                                <li><a href="#">Herbs</a></li>
                                                <li><a href="#">Sugar</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="banner-category-item">
                                    <a href="#">
                                        <i class="flaticon-fruit"></i>
                                        <span>fruits</span>
                                    </a>
                                    <div class="banner-category-dropdown">
                                        <h5>fruits item</h5>
                                        <div class="banner-sub-category">
                                            <ul>
                                                <li><a href="#">Apple</a></li>
                                                <li><a href="#">Orange</a></li>
                                                <li><a href="#">Watermelon</a></li>
                                                <li><a href="#">Pear</a></li>
                                                <li><a href="#">Cherry</a></li>
                                            </ul>
                                            <ul>
                                                <li><a href="#">Strawberry</a></li>
                                                <li><a href="#">Nectarine</a></li>
                                                <li><a href="#">Grape</a></li>
                                                <li><a href="#">Mango</a></li>
                                                <li><a href="#">Blueberry</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="banner-category-item">
                                    <a href="#">
                                        <i class="flaticon-dairy-products"></i>
                                        <span>dairy farms</span>
                                    </a>
                                    <div class="banner-category-dropdown">
                                        <h5>dairy items</h5>
                                        <div class="banner-sub-category">
                                            <ul>
                                                <li><a href="#">Eggs</a></li>
                                                <li><a href="#">milk</a></li>
                                                <li><a href="#">Cheese</a></li>
                                                <li><a href="#">Butter</a></li>
                                                <li><a href="#">Shore</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="banner-category-item">
                                    <a href="#">
                                        <i class="flaticon-crab"></i>
                                        <span>sea foods</span>
                                    </a>
                                    <div class="banner-category-dropdown">
                                        <h5>sea food items</h5>
                                        <div class="banner-sub-category">
                                            <ul>
                                                <li><a href="#">Lobster</a></li>
                                                <li><a href="#">Octopus</a></li>
                                                <li><a href="#">Shrimp</a></li>
                                                <li><a href="#">Oyster</a></li>
                                                <li><a href="#">Squid</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="banner-category-item">
                                    <a href="#">
                                        <i class="flaticon-salad"></i>
                                        <span>diet foods</span>
                                    </a>
                                    <div class="banner-category-dropdown">
                                        <h5>diet food items</h5>
                                        <div class="banner-sub-category">
                                            <ul>
                                                <li><a href="#">Peanuts</a></li>
                                                <li><a href="#">Yogurt</a></li>
                                                <li><a href="#">vinegar</a></li>
                                                <li><a href="#">seeds</a></li>
                                                <li><a href="#">Coconuts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="banner-category-item">
                                    <a href="#">
                                        <i class="flaticon-dried-fruit"></i>
                                        <span>dry foods</span>
                                    </a>
                                    <div class="banner-category-dropdown">
                                        <h5>dry food items</h5>
                                        <div class="banner-sub-category">
                                            <ul>
                                                <li><a href="#">Almond</a></li>
                                                <li><a href="#">Peanut</a></li>
                                                <li><a href="#">Raisin</a></li>
                                                <li><a href="#">Walnut</a></li>
                                                <li><a href="#">Pistachio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="banner-category-item">
                                    <a href="#">
                                        <i class="flaticon-fast-food"></i>
                                        <span>fast foods</span>
                                    </a>
                                    <div class="banner-category-dropdown">
                                        <h5>fast food items</h5>
                                        <div class="banner-sub-category">
                                            <ul>
                                                <li><a href="#">burgar</a></li>
                                                <li><a href="#">pizza</a></li>
                                                <li><a href="#">Fries</a></li>
                                                <li><a href="#">chiken</a></li>
                                                <li><a href="#">dessert</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="banner-category-item">
                                    <a href="#">
                                        <i class="flaticon-cheers"></i>
                                        <span>drinks</span>
                                    </a>
                                    <div class="banner-category-dropdown">
                                        <h5>drinks item</h5>
                                        <div class="banner-sub-category">
                                            <ul>
                                                <li><a href="#">Wine</a></li>
                                                <li><a href="#">Coffee</a></li>
                                                <li><a href="#">Lemonade</a></li>
                                                <li><a href="#">chocolate</a></li>
                                                <li><a href="#">Milkshake</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="banner-category-item">
                                    <a href="#">
                                        <i class="flaticon-barbecue"></i>
                                        <span>meats</span>
                                    </a>
                                    <div class="banner-category-dropdown">
                                        <h5>meats item</h5>
                                        <div class="banner-sub-category">
                                            <ul>
                                                <li><a href="#">Pork</a></li>
                                                <li><a href="#">Beef</a></li>
                                                <li><a href="#">Mutton</a></li>
                                                <li><a href="#">Chicken</a></li>
                                                <li><a href="#">Turkey</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="banner-category-item">
                                    <a href="#">
                                        <i class="flaticon-fish"></i>
                                        <span>fishes</span>
                                    </a>
                                    <div class="banner-category-dropdown">
                                        <h5>fishes item</h5>
                                        <div class="banner-sub-category">
                                            <ul>
                                                <li><a href="#">Blue Marlin</a></li>
                                                <li><a href="#">Flounder</a></li>
                                                <li><a href="#">Hogfish</a></li>
                                                <li><a href="#">Mako Shark</a></li>
                                                <li><a href="#">pompano</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-grid-slider slider-dots">
                                    <div class="banner-wrap bg1">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 col-lg-6">
                                                <div class="banner-content">
                                                    <h2>we are delivered organic foods item within 24 hours.</h2>
                                                    <a href="#" class="btn btn-inline">
                                                        <i class="fas fa-shopping-basket"></i>
                                                        <span>shop now</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="banner-image">
                                                    <img src="images/home/index/01.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-wrap bg2">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 col-lg-6">
                                                <div class="banner-content">
                                                    <h2>get your organic healthy foods item online today.</h2>
                                                    <a href="#" class="btn btn-inline">
                                                        <i class="fas fa-shopping-basket"></i>
                                                        <span>shop now</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="banner-image">
                                                    <img src="images/home/index/02.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="banner-wrap bg3">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 col-lg-6">
                                                <div class="banner-content">
                                                    <h2>we are delivered organic foods item within 24 hours.</h2>
                                                    <a href="#" class="btn btn-inline">
                                                        <i class="fas fa-shopping-basket"></i>
                                                        <span>shop now</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <div class="banner-image">
                                                    <img src="images/home/index/03.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-promo">
                                    <a href="#"><img src="images/promo/home/04.jpg" alt="promo"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="banner-promo">
                                    <a href="#"><img src="images/promo/home/05.jpg" alt="promo"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    INTRO PART START
        =======================================-->
        <section class="section intro-part">
            <div class="container">
                <div class="row intro-content">
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div class="intro-content">
                                <h5>free home delivery</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <div class="intro-content">
                                <h5>instant return policy</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="intro-content">
                                <h5>quick support system</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="intro-wrap">
                            <div class="intro-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="intro-content">
                                <h5>secure payment way</h5>
                                <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    INTRO PART END
        =======================================-->


        <!--=====================================
                    DEALS PART START
        =======================================-->
        <section class="section deals-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>best deals on items</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="countdown deals-clock" data-countdown="2021/12/31">
                            <span class="countdown-time"><span>00</span><small>days</small></span>
                            <span class="countdown-time"><span>00</span><small>hours</small></span>
                            <span class="countdown-time"><span>00</span><small>minutes</small></span>
                            <span class="countdown-time"><span>00</span><small>seconds</small></span>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-10%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/01.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-5%</label>
                                    <label class="label-text new">new</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/02.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/kilo</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-20%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/03.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/dozen</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-35%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/04.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/4 piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-15%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/05.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/kilo</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-18%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/06.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/12 piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-30%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/07.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text off">-25%</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.html">
                                    <img src="images/product/08.jpg" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.html">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/6 piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="shop-4column.html" class="btn btn-inline">
                                <i class="fas fa-eye"></i>
                            <span>view all deals</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    DEALS PART END
        =======================================-->


        <!--=====================================
                    FEATURED PART START
        =======================================-->
        <section class="section feature-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>our featured items</h2>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">feature</label>
                                </div>
                                <button class="feature-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="feature-image" href="product-video.html">
                                    <img src="images/product/09.jpg" alt="product">
                                </a>
                                <div class="feature-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="product-video.html">fresh organic green chilis</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 Reviews)</a>
                                </div>
                                <h6 class="feature-price">
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">feature</label>
                                </div>
                                <button class="feature-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="feature-image" href="product-video.html">
                                    <img src="images/product/10.jpg" alt="product">
                                </a>
                                <div class="feature-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="product-video.html">fresh organic green chilis</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 Reviews)</a>
                                </div>
                                <h6 class="feature-price">
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">feature</label>
                                </div>
                                <button class="feature-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="feature-image" href="product-video.html">
                                    <img src="images/product/11.jpg" alt="product">
                                </a>
                                <div class="feature-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="product-video.html">fresh organic green chilis</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 Reviews)</a>
                                </div>
                                <h6 class="feature-price">
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">feature</label>
                                </div>
                                <button class="feature-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="feature-image" href="product-video.html">
                                    <img src="images/product/12.jpg" alt="product">
                                </a>
                                <div class="feature-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="product-video.html">fresh organic green chilis</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 Reviews)</a>
                                </div>
                                <h6 class="feature-price">
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">feature</label>
                                </div>
                                <button class="feature-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="feature-image" href="product-video.html">
                                    <img src="images/product/13.jpg" alt="product">
                                </a>
                                <div class="feature-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="product-video.html">fresh organic green chilis</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 Reviews)</a>
                                </div>
                                <h6 class="feature-price">
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label">
                                    <label class="label-text feat">feature</label>
                                </div>
                                <button class="feature-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="feature-image" href="product-video.html">
                                    <img src="images/product/14.jpg" alt="product">
                                </a>
                                <div class="feature-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name">
                                    <a href="product-video.html">fresh organic green chilis</a>
                                </h6>
                                <div class="feature-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-video.html">(3 Reviews)</a>
                                </div>
                                <h6 class="feature-price">
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet olor ut eveniet commodi...</p>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="shop-4column.html" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>view all feature</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    FEATURE PART END
        =======================================-->


        <!--=====================================
                    PROMO PART START
        =======================================-->
        <section class="section promo-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="promo-content" style="background: url(images/promo/home/09.jpg) no-repeat center;">
                            <h3>only <span>$45</span> per kilogram</h3>
                            <h2>fresh Blueberries</h2>
                            <a href="shop-4column.html" class="btn btn-inline">
                                <i class="fas fa-shopping-basket"></i>
                                <span>shop now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    PROMO PART END
        =======================================-->


        <!--=====================================
                    NEW ITEM PART START
        =======================================-->
        <section class="section newitem-part">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-heading">
                            <h2>collected new items</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <ul class="new-slider slider-arrow">
                            <li>
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            <label class="label-text new">new</label>
                                        </div>
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <a class="product-image" href="product-video.html">
                                            <img src="images/product/15.jpg" alt="product">
                                        </a>
                                        <div class="product-widget">
                                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                            <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <a href="product-video.html">(3)</a>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="product-video.html">fresh green chilis</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <span>$28<small>/piece</small></span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            <label class="label-text new">new</label>
                                        </div>
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <a class="product-image" href="product-video.html">
                                            <img src="images/product/16.jpg" alt="product">
                                        </a>
                                        <div class="product-widget">
                                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                            <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <a href="product-video.html">(3)</a>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="product-video.html">fresh green chilis</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <span>$28<small>/piece</small></span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            <label class="label-text new">new</label>
                                        </div>
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <a class="product-image" href="product-video.html">
                                            <img src="images/product/17.jpg" alt="product">
                                        </a>
                                        <div class="product-widget">
                                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                            <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <a href="product-video.html">(3)</a>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="product-video.html">fresh green chilis</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <span>$28<small>/piece</small></span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            <label class="label-text new">new</label>
                                        </div>
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <a class="product-image" href="product-video.html">
                                            <img src="images/product/18.jpg" alt="product">
                                        </a>
                                        <div class="product-widget">
                                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                            <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <a href="product-video.html">(3)</a>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="product-video.html">fresh green chilis</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <span>$28<small>/piece</small></span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            <label class="label-text new">new</label>
                                        </div>
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <a class="product-image" href="product-video.html">
                                            <img src="images/product/19.jpg" alt="product">
                                        </a>
                                        <div class="product-widget">
                                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                            <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <a href="product-video.html">(3)</a>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="product-video.html">fresh green chilis</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <span>$28<small>/piece</small></span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label">
                                            <label class="label-text new">new</label>
                                        </div>
                                        <button class="product-wish wish">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <a class="product-image" href="product-video.html">
                                            <img src="images/product/20.jpg" alt="product">
                                        </a>
                                        <div class="product-widget">
                                            <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                            <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                            <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-rating">
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="active icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <a href="product-video.html">(3)</a>
                                        </div>
                                        <h6 class="product-name">
                                            <a href="product-video.html">fresh green chilis</a>
                                        </h6>
                                        <h6 class="product-price">
                                            <span>$28<small>/piece</small></span>
                                        </h6>
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="section-btn-25">
                            <a href="shop-4column.html" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>view all new item</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!--=====================================
                    NEW ITEM PART END
        =======================================-->


        <!--=====================================
                    NICHE PART START
        =======================================-->
        <section class="section niche-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Browse by Top Niche</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#top-sales" class="tab-link active" data-bs-toggle="tab">
                                    <i class="icofont-price"></i>
                                    <span>top sales</span>
                                </a>
                            </li>
                            <li>
                                <a href="#top-rate" class="tab-link" data-bs-toggle="tab">
                                    <i class="icofont-star"></i>
                                    <span>top rating</span>
                                </a>
                            </li>
                            <li>
                                <a href="#top-disc" class="tab-link" data-bs-toggle="tab">
                                    <i class="icofont-sale-discount"></i>
                                    <span>top discount</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="top-sales">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text sale">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/01.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text sale">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/02.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text sale">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/03.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text sale">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/04.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text sale">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/05.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text sale">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/06.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card product-disable">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text sale">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/07.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text sale">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/08.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text sale">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/09.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text sale">314</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/10.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="top-rate">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/11.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/12.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/13.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/14.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/15.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/16.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card product-disable">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/17.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/18.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/19.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text rate">4.8</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/20.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="top-disc">
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/06.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/07.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/08.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/09.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/10.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/11.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/12.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/13.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/14.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label">
                                        <label class="label-text off">-10%</label>
                                    </div>
                                    <button class="product-wish wish">
                                        <i class="fas fa-heart"></i>
                                    </button>
                                    <a class="product-image" href="product-video.html">
                                        <img src="images/product/15.jpg" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h6>
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                        <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="shop-4column.html" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>view all niche</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    NICHE PART END
        =======================================-->


        <!--=====================================
                    CATEGORY PART START
        =======================================-->
        <section class="section category-part">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2>shop by categories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="category-slider slider-arrow">
                            <div class="category-wrap">
                                <div class="category-media">
                                    <img src="images/category/dairy.jpg" alt="category">
                                    <div class="category-overlay">
                                        <a href="shop-4column.html"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="category-meta">
                                    <h4>dairy items</h4>
                                    <p>(25 items)</p>
                                </div>
                            </div>
                            <div class="category-wrap">
                                <div class="category-media">
                                    <img src="images/category/vegetables.jpg" alt="category">
                                    <div class="category-overlay">
                                        <a href="shop-4column.html"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="category-meta">
                                    <h4>vegetable items</h4>
                                    <p>(25 items)</p>
                                </div>
                            </div>
                            <div class="category-wrap">
                                <div class="category-media">
                                    <img src="images/category/drinks.jpg" alt="category">
                                    <div class="category-overlay">
                                        <a href="shop-4column.html"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="category-meta">
                                    <h4>coffe & drinks</h4>
                                    <p>(25 items)</p>
                                </div>
                            </div>
                            <div class="category-wrap">
                                <div class="category-media">
                                    <img src="images/category/fish.jpg" alt="category">
                                    <div class="category-overlay">
                                        <a href="shop-4column.html"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="category-meta">
                                    <h4>fish items</h4>
                                    <p>(25 items)</p>
                                </div>
                            </div>
                            <div class="category-wrap">
                                <div class="category-media">
                                    <img src="images/category/groceries.jpg" alt="category">
                                    <div class="category-overlay">
                                        <a href="shop-4column.html"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="category-meta">
                                    <h4>grocery items</h4>
                                    <p>(25 items)</p>
                                </div>
                            </div>
                            <div class="category-wrap">
                                <div class="category-media">
                                    <img src="images/category/meat.jpg" alt="category">
                                    <div class="category-overlay">
                                        <a href="shop-4column.html"><i class="fas fa-link"></i></a>
                                    </div>
                                </div>
                                <div class="category-meta">
                                    <h4>meat items</h4>
                                    <p>(25 items)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-50">
                            <a href="all-category.html" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>view all category</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    CATEGORY PART END
        =======================================-->


        <!--=====================================
                    BRAND PART START
        =======================================-->
        <section class="section brand-part">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2>shop by brands</h2>
                        </div>
                    </div>
                </div>
                <div class="brand-slider slider-arrow">
                    <div class="brand-wrap">
                        <div class="brand-media">
                            <img src="images/brand/01.jpg" alt="brand">
                            <div class="brand-overlay">
                                <a href="brand-single.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="brand-meta">
                            <h4>natural greeny</h4>
                            <p>(45 items)</p>
                        </div>
                    </div>
                    <div class="brand-wrap">
                        <div class="brand-media">
                            <img src="images/brand/02.jpg" alt="brand">
                            <div class="brand-overlay">
                                <a href="brand-single.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="brand-meta">
                            <h4>vegan lover</h4>
                            <p>(45 items)</p>
                        </div>
                    </div>
                    <div class="brand-wrap">
                        <div class="brand-media">
                            <img src="images/brand/03.jpg" alt="brand">
                            <div class="brand-overlay">
                                <a href="brand-single.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="brand-meta">
                            <h4>organic foody</h4>
                            <p>(45 items)</p>
                        </div>
                    </div>
                    <div class="brand-wrap">
                        <div class="brand-media">
                            <img src="images/brand/04.jpg" alt="brand">
                            <div class="brand-overlay">
                                <a href="brand-single.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="brand-meta">
                            <h4>ecomart limited</h4>
                            <p>(45 items)</p>
                        </div>
                    </div>
                    <div class="brand-wrap">
                        <div class="brand-media">
                            <img src="images/brand/05.jpg" alt="brand">
                            <div class="brand-overlay">
                                <a href="brand-single.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="brand-meta">
                            <h4>fresh fortune</h4>
                            <p>(45 items)</p>
                        </div>
                    </div>
                    <div class="brand-wrap">
                        <div class="brand-media">
                            <img src="images/brand/06.jpg" alt="brand">
                            <div class="brand-overlay">
                                <a href="brand-single.html"><i class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="brand-meta">
                            <h4>econature</h4>
                            <p>(45 items)</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-50">
                            <a href="brand-list.html" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>view all brands</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    BRAND PART END
        =======================================-->


        <!--=====================================
                  TESTIMONIAL PART START
        =======================================-->
        <section class="section testimonial-part">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2>client's feedback</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-slider slider-arrow">
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam doloribus magni provident ipsam</p>
                                <h5>mahmud hasan</h5>
                                <ul>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <img src="images/avatar/01.jpg" alt="testimonial">
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam doloribus magni provident ipsam</p>
                                <h5>mahmud hasan</h5>
                                <ul>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <img src="images/avatar/02.jpg" alt="testimonial">
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam doloribus magni provident ipsam</p>
                                <h5>mahmud hasan</h5>
                                <ul>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <img src="images/avatar/03.jpg" alt="testimonial">
                            </div>
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left"></i>
                                <p>Lorem ipsum dolor consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam doloribus magni provident ipsam</p>
                                <h5>mahmud hasan</h5>
                                <ul>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                </ul>
                                <img src="images/avatar/04.jpg" alt="testimonial">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                   TESTIMONIAL PART END
        =======================================-->


        <!--=====================================
                      BLOG PART START
        =======================================-->
        <section class="section blog-part">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading">
                            <h2>Read our articles</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-slider slider-arrow">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="images/blog/01.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#">
                                        <span>read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="images/blog/02.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#">
                                        <span>read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="images/blog/03.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#">
                                        <span>read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="images/blog/04.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.html">Voluptate blanditiis provident Lorem ipsum dolor sit amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="#">
                                        <span>read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="blog-grid.html" class="btn btn-outline">
                                <i class="fas fa-eye"></i>
                                <span>view all blog</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                      BLOG PART END
        =======================================-->


        <!--=====================================
                    NEWSLETTER PART START
        =======================================-->
        <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 col-xl-7">
                        <div class="news-text">
                            <h2>Get 20% Discount for Subscriber</h2>
                            <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-5">
                        <form class="news-form">
                            <input type="text" placeholder="Enter Your Email Address">
                            <button><span><i class="icofont-ui-email"></i>Subscribe</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    NEWSLETTER PART END
        =======================================-->


        <!--=====================================
                     FOOTER PART START
        =======================================-->
        <footer class="footer-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <a class="footer-logo" href="#">
                                <img src="images/logo.png" alt="logo">
                            </a>
                            <p class="footer-desc">Adipisci asperiores ipsum ipsa repellat consequatur repudiandae quisquam assumenda dolor perspiciatis sit ipsum dolor amet.</p>
                            <ul class="footer-social">
                                <li><a class="icofont-facebook" href="#"></a></li>
                                <li><a class="icofont-twitter" href="#"></a></li>
                                <li><a class="icofont-linkedin" href="#"></a></li>
                                <li><a class="icofont-instagram" href="#"></a></li>
                                <li><a class="icofont-pinterest" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget contact">
                            <h3 class="footer-title">contact us</h3>
                            <ul class="footer-contact">
                                <li>
                                    <i class="icofont-ui-email"></i>
                                    <p>
                                        <span>support@greeny.com</span>
                                        <span>carrer@greeny.com</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-ui-touch-phone"></i>
                                    <p>
                                        <span>+120 279 532 13</span>
                                        <span>+120 279 532 14</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <p>1Hd- 50, 010 Avenue, NY 90001 United States</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">quick Links</h3>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Best Seller</a></li>
                                    <li><a href="#">New Arrivals</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Location</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Carrer</a></li>
                                    <li><a href="#">Faq</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">Download App</h3>
                            <p class="footer-desc">Lorem ipsum dolor sit amet tenetur dignissimos ipsum eligendi autem obcaecati minus ducimus totam reprehenderit exercitationem!</p>
                            <div class="footer-app">
                                <a href="#"><img src="images/google-store.png" alt="google"></a>
                                <a href="#"><img src="images/app-store.png" alt="app"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom">
                            <p class="footer-copytext">&copy;  All Copyrights Reserved by <a target="_blank" href="https://themeforest.net/user/mironcoder">Mironcoder</a></p>
                            <div class="footer-card">
                                <a href="#"><img src="images/payment/jpg/01.jpg" alt="payment"></a>
                                <a href="#"><img src="images/payment/jpg/02.jpg" alt="payment"></a>
                                <a href="#"><img src="images/payment/jpg/03.jpg" alt="payment"></a>
                                <a href="#"><img src="images/payment/jpg/04.jpg" alt="payment"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=====================================
                      FOOTER PART END
        =======================================-->
        

        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- VENDOR -->
        <script src="vendor/bootstrap/jquery-1.12.4.min.js"></script>
        <script src="vendor/bootstrap/popper.min.js"></script>
        <script src="vendor/bootstrap/bootstrap.min.js"></script>
        <script src="vendor/countdown/countdown.min.js"></script>
        <script src="vendor/niceselect/nice-select.min.js"></script>
        <script src="vendor/slickslider/slick.min.js"></script>
        <script src="vendor/venobox/venobox.min.js"></script>

        <!-- CUSTOM -->
        <script src="js/nice-select.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/accordion.js"></script>
        <script src="js/venobox.js"></script>
        <script src="js/slick.js"></script>
        <script src="js/main.js"></script> 
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>






