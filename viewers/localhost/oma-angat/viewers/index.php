<!DOCTYPE html>
<html lang="en">

<head>
    <!--=====================================
                    META TAG PART START
        =======================================-->
    <!-- REQUIRE META -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- TEMPLATE META -->
    <meta name="name" content="Oma-Angat">
    <meta name="title" content="A Virtual Agri-Market for Local Farmers">
    <meta name="keywords" content="organic, food, shop, agri-market, market, html, agriculture, vegetables, farmers, farm, natural">
    <!--=====================================
                    META-TAG PART END
        =======================================-->
    <!-- WEBPAGE TITLE -->
    <title>Oma-Angat</title>

    <!--=====================================
                    CSS LINK PART START
        =======================================-->
    <!-- FAVICON -->
    <link rel="icon" href="images/single-logo.png">

    <!-- FONTS -->
    <link rel="stylesheet" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="fonts/icofont/icofont.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/fontawesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Font-awesome -->
    <script src="https://kit.fontawesome.com/34a0fb1f6d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">


    <!-- VENDOR -->
    <link rel="stylesheet" href="vendor/venobox/venobox.min.css">
    <link rel="stylesheet" href="vendor/slickslider/slick.min.css">
    <link rel="stylesheet" href="vendor/niceselect/nice-select.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">


    <!-- CUSTOM -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/user-auth.css">
    <link rel="stylesheet" href="css/home-grid.css">

    <!-- Additional CSS Files -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet"  href="css/animation/fullpage.min.css">
        <link rel="stylesheet"  href="css/animation/owl.carousel.css">
        <link rel="stylesheet"  href="css/animation/animate.css"> -->
    <!--=====================================
                    CSS LINK PART END
        =======================================-->
</head>

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

                <!-- <br />
<b>Warning</b>:  session_start(): Session cannot be started after headers have already been sent in <b>C:\xampp\htdocs\oma-angat\viewers\header-nav.php</b> on line <b>54</b><br />
<a href="login.php" class="header-widget" title="Join">
                                      <button>Get Started</button>
                                  </a> -->


                <form class="header-form">
                    <input type="text" placeholder="Search">
                    <button><i class="fas fa-search"></i></button>
                </form>

                <div class="header-widget-group">
                    <a href="notification.php" class="header-widget" title="Notifications">
                        <i class="fa-solid fa-bell"></i>
                        <sup>0</sup>
                    </a>
                    <a href="wishlist.php" class="header-widget" title="Wishlist">
                        <i class="fa-solid fa-heart"></i>
                        <sup>0</sup>
                    </a>
                    <button class="header-widget header-cart" title="Cartlist">
                        <i class="fa-solid fa-cart-shopping"></i>
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
                            <li class="navbar-item dropdown active">
                                <a href="#"><i class="fa-solid fa-house"></i></a>
                                <a class="navbar-link" href="index.php">Home</a>
                            </li>
                            <li class="navbar-item dropdown ">
                                <a href="#0"><i class="fa-solid fa-comments"></i></a>
                                <a class="navbar-link" href="blog-author.php">Feed</a>
                            </li>
                            <li class="navbar-item dropdown ">
                                <a href="#0"><i class="fa-solid fa-store"></i></a>
                                <a class="navbar-link dropdown-arrow" href="#">Shop</a>
                                <ul class="dropdown-position-list">
                                    <li><a href="faq.php">Farmer's Market</a></li>
                                    <li><a href="offer.php">Category</a></li>
                                    <li><a href="profile.php">Product</a></li>
                                </ul>
                            </li>
                        </ul>

                        <div class="navbar-info-group">
                            <div class="navbar-info">
                                <a href="#0"><i class="fa-regular fa-calendar"></i></i></a>
                                <p>
                                    <small><a href="#" title="Reserve Product">Harvesting Calendar</a></small>
                                </p>
                            </div>
                            <div class="navbar-info">
                                <a href="#0"><i class="fa-solid fa-hand-holding-heart"></i></a>
                                <p>
                                    <small><a href="#" title="Help a Farmer">Donation</a></small>
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
                CATEGORY SIDEBAR PART START
        =======================================-->
    <aside class="category-sidebar">
        <div class="category-header">
            <h4 class="category-title">
                <i class="fas fa-align-left"></i>
                <span>categories</span>
            </h4>
            <button class="category-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="category-list">
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-vegetable"></i>
                    <span>vegetables</span>
                </a>
                <ul class="dropdown-list">
                    <li><a href="#">asparagus</a></li>
                    <li><a href="#">broccoli</a></li>
                    <li><a href="#">carrot</a></li>
                </ul>
            </li>

            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-groceries"></i>
                    <span>groceries</span>
                </a>
                <ul class="dropdown-list">
                    <li><a href="#">Grains & Bread</a></li>
                    <li><a href="#">Dairy & Eggs</a></li>
                    <li><a href="#">Oil & Fat</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-fruit"></i>
                    <span>fruits</span>
                </a>
                <ul class="dropdown-list">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Orange</a></li>
                    <li><a href="#">Strawberry</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-dairy-products"></i>
                    <span>dairy farm</span>
                </a>
                <ul class="dropdown-list">
                    <li><a href="#">Egg</a></li>
                    <li><a href="#">milk</a></li>
                    <li><a href="#">butter</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-crab"></i>
                    <span>sea foods</span>
                </a>
                <ul class="dropdown-list">
                    <li><a href="#">Lobster</a></li>
                    <li><a href="#">Octopus</a></li>
                    <li><a href="#">Shrimp</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-salad"></i>
                    <span>diet foods</span>
                </a>
                <ul class="dropdown-list">
                    <li><a href="#">Salmon</a></li>
                    <li><a href="#">Potatoes</a></li>
                    <li><a href="#">Greens</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-dried-fruit"></i>
                    <span>dry foods</span>
                </a>
                <ul class="dropdown-list">
                    <li><a href="#">noodles</a></li>
                    <li><a href="#">Powdered milk</a></li>
                    <li><a href="#">nut & yeast</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-fast-food"></i>
                    <span>fast foods</span>
                </a>
                <ul class="dropdown-list">
                    <li><a href="#">mango</a></li>
                    <li><a href="#">plumsor</a></li>
                    <li><a href="#">raisins</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-cheers"></i>
                    <span>drinks</span>
                </a>
                <ul class="dropdown-list">
                    <li><a href="#">Wine</a></li>
                    <li><a href="#">Juice</a></li>
                    <li><a href="#">Water</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-beverage"></i>
                    <span>coffee</span>
                </a>
                <ul class="dropdown-list">
                    <li><a href="#">Cappuchino</a></li>
                    <li><a href="#">Espresso</a></li>
                    <li><a href="#">Latte</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-barbecue"></i>
                    <span>meats</span>
                </a>
                <ul class="dropdown-list">
                    <li><a href="#">Meatball</a></li>
                    <li><a href="#">Sausage</a></li>
                    <li><a href="#">Poultry</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-fish"></i>
                    <span>fishes</span>
                </a>
                <ul class="dropdown-list">
                    <li><a href="#">Agujjim</a></li>
                    <li><a href="#">saltfish</a></li>
                    <li><a href="#">pazza</a></li>
                </ul>
            </li>
        </ul>
        <div class="category-footer">
            <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
        </div>
    </aside>
    <!--=====================================
                CATEGORY SIDEBAR PART END
        =======================================-->


    <!--=====================================
                  CART SIDEBAR PART START
        =======================================-->
    <aside class="cart-sidebar">
        <div class="cart-header">
            <div class="cart-total">
                <i class="fas fa-shopping-basket"></i>
                <span>total item (5)</span>
            </div>
            <button class="cart-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="cart-list">
            <li class="cart-item">
                <div class="cart-media">
                    <a href="#"><img src="images/product/01.png" alt="product"></a>
                    <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.php">existing product name</a></h6>
                        <p>Unit Price - P8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                        </div>
                        <h6>P56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media">
                    <a href="#"><img src="images/product/02.png" alt="product"></a>
                    <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.php">existing product name</a></h6>
                        <p>Unit Price - P8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                        </div>
                        <h6>P56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media">
                    <a href="#"><img src="images/product/03.png" alt="product"></a>
                    <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.php">existing product name</a></h6>
                        <p>Unit Price - P8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                        </div>
                        <h6>P56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media">
                    <a href="#"><img src="images/product/04.png" alt="product"></a>
                    <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.php">existing product name</a></h6>
                        <p>Unit Price - P8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                        </div>
                        <h6>P56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media">
                    <a href="#"><img src="images/product/05.png" alt="product"></a>
                    <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.php">existing product name</a></h6>
                        <p>Unit Price - P8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                            <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                        </div>
                        <h6>P56.98</h6>
                    </div>
                </div>
            </li>
        </ul>
        <div class="cart-footer">
            <button class="coupon-btn">Do you have a coupon code?</button>
            <form class="coupon-form">
                <input type="text" placeholder="Enter your coupon code">
                <button type="submit"><span>apply</span></button>
            </form>
            <a class="cart-checkout-btn" href="checkout.php">
                <span class="checkout-label">Proceed to Checkout</span>
                <span class="checkout-price">P369.78</span>
            </a>
        </div>
    </aside>

    <!--=====================================
                    CART SIDEBAR PART END
        =======================================-->


    <!--=====================================
                  NAV SIDEBAR PART START
        =======================================-->
    <aside class="nav-sidebar">
        <div class="nav-header">
            <a href="#"><img src="images/logo.png" alt="logo"></a>
            <button class="nav-close"><i class="icofont-close"></i></button>
        </div>
        <div class="nav-content">
            <div class="nav-btn">
                <a href="login.php" class="btn btn-inline">
                    <i class="fa fa-unlock-alt"></i>
                    <span>Get Started</span>
                </a>
            </div>
            <!-- This commentable code show when user login or register -->
            <div class="nav-profile">
                <a class="nav-user" href="#"><img src="images/user.png" alt="user"></a>
                <h4 class="nav-name"><a href="profile.php">Account Name</a></h4>
            </div>
            <div class="nav-select-group">
                <div class="nav-select">
                    <i class="icofont-world"></i>
                    <select class="select">
                        <option value="english" selected>Followers</option>
                        <option value="bangali">Farmer</option>
                        <option value="arabic">Buyer</option>
                    </select>
                </div>
                <div class="nav-select">
                    <i class="icofont-money"></i>
                    <select class="select">
                        <option value="english" selected id="following-option">Following</option>
                        <option value="bangali">Farmer</option>
                        <option value="arabic">Buyer</option>
                    </select>
                </div>
            </div>
            <ul class="nav-list">
                <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                    <ul class="dropdown-list">
                        <li><a href="home-standard.php">Home standard</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                    <ul class="dropdown-list">
                        <li><a href="shop-1column.php">Market</a></li>
                        <li><a href="shop-2column.php">shop 2 column</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                    <ul class="dropdown-list">
                        <li><a href="profile.php">profile</a></li>
                        <li><a href="wallet.php">wallet</a></li>
                        <li><a href="wishlist.php">wishlist</a></li>
                        <li><a href="notification.php">Notification</a></li>
                        <li><a href="checkout.php">checkout</a></li>
                        <li><a href="orderlist.php">order history</a></li>
                        <li><a href="invoice.php">order invoice</a></li>
                        <li><a href="email-template.php">email template</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentication</a>
                    <ul class="dropdown-list">
                        <li><a href="login.php">login</a></li>
                        <li><a href="register.php">register</a></li>
                        <li><a href="reset-password.php">reset password</a></li>
                        <li><a href="change-password.php">change password</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                    <ul class="dropdown-list">
                        <li><a href="blog-grid.php">blog grid</a></li>
                        <li><a href="blog-standard.php">blog standard</a></li>
                        <li><a href="blog-details.php">blog details</a></li>
                        <li><a href="blog-author.php">blog author</a></li>
                    </ul>
                </li>
                <div class="nav-info-group">
                    <li><a class="nav-link" href="offer.php"><i class="icofont-sale-discount"></i>offers</a></li>
                    <li><a class="nav-link" href="about.php"><i class="icofont-info-circle"></i>about us</a></li>
                    <li><a class="nav-link" href="coming-soon.php"><i class="icofont-options"></i>coming soon</a></li>
                    <li><a class="nav-link" href="error.php"><i class="icofont-ui-block"></i>404 error</a></li>
                </div>
            </ul>
            <div class="nav-info-group-2">
                <a class="nav-link" href="#"></i>Settings</a>
                <a class="nav-link" href="faq.php"></i>Help Center</a>
                <a class="nav-link" href="privacy.php"></i>Terms & Conditions</a>
                <a class="nav-link" href="login.php"></i>logout</a>
            </div>

            <div class="nav-footer">
                <p>All rights reserved by <a href="index.php">Oma-Angat</a></p>
            </div>
        </div>
    </aside>
    <!--=====================================
                  NAV SIDEBAR PART END
        =======================================-->


    <!--=====================================
                    MOBILE-MENU PART START
        =======================================-->
    <div class="mobile-navbar-item">
        <a href="index.php" title="Home Page">
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
        <a href="wishlist.php" title="Wishlist">
            <i class="fas fa-heart"></i>
            <span>wishlist</span>
            <sup>0</sup>
        </a>
        <a href="notification.php" title="Notification List">
            <i class="fas fa-random"></i>
            <span>Notification</span>
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
                                    <li><img src="images/product/01.png" alt="product"></li>
                                    <li><img src="images/product/01.png" alt="product"></li>
                                    <li><img src="images/product/01.png" alt="product"></li>
                                    <li><img src="images/product/01.png" alt="product"></li>
                                    <li><img src="images/product/01.png" alt="product"></li>
                                    <li><img src="images/product/01.png" alt="product"></li>
                                    <li><img src="images/product/01.png" alt="product"></li>
                                </ul>
                                <ul class="thumb-slider">
                                    <li><img src="images/product/01.png" alt="product"></li>
                                    <li><img src="images/product/01.png" alt="product"></li>
                                    <li><img src="images/product/01.png" alt="product"></li>
                                    <li><img src="images/product/01.png" alt="product"></li>
                                    <li><img src="images/product/01.png" alt="product"></li>
                                    <li><img src="images/product/01.png" alt="product"></li>
                                    <li><img src="images/product/01.png" alt="product"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name">
                                    <a href="product-video.php">existing product name</a>
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
                                    <a href="product-video.php">(3 reviews)</a>
                                </div>
                                <h3 class="view-price">
                                    <del>P38.00</del>
                                    <span>P24.00<small>/per kilo</small></span>
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
                                    <a class="view-Notification" href="notification.php" title="Notification This Item">
                                        <i class="fas fa-random"></i>
                                        <span>Notification This</span>
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
    <section class="home-index-slider slider-arrow slider-dots">
        <div class="banner-part banner-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content-1">
                            <h1><span class="highlight">Shop Local and</span> Support Farmers <span class="highlight"></span> </h1>
                            <p>With our Virtual Agri-Market, you're not just buying food, you're investing in sustainable agriculture and empowering local farmers. Shop with us today to savor the taste of affordability and support the heart of our agricultural communities.</p>
                            <div class="banner-btn">
                                <a class="btn btn-banner" href="login.php">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img">
                            <img src="images/front-pic.svg" alt="index">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="banner-part banner-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img">
                            <img src="images/front-pic.svg" alt="index">

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content">
                            <h1><span class="highlight">Are you a Farmer? </span> <br> Join and watch your fields grow </h1>
                            <p>Our Virtual Agri-market ensures fair compensation for your dedication. Your hard work nourishes not just the land but also the community.</p>
                            <div class="banner-btn-1">
                                <a class="btn btn-banner" href="login.php">
                                    <i class="fa-solid fa-store"></i>
                                    <span>start selling</span>
                                </a>
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
                    BANNER PART START
        =======================================-->
    <section class="banner-part-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-1 order-lg-0 order-xl-0">
                    <div class="row">
                        <div class="col-sm-6 col-lg-12">
                            <div class="home-grid-promo">
                                <a href="#"><img src="images/promo/features/referral.svg" alt="referral"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <div class="home-grid-promo">
                                <a href="#"><img src="images/promo/features/donation.svg" alt="donate"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-0 order-lg-1 order-xl-1">
                    <div class="home-grid-slider slider-arrow slider-dots">
                        <a href="#"><img src="images/promo/features/messaging-system.svg" alt=""></a>
                        <a href="#"><img src="images/promo/features/harvesting-calendar.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <!--=====================================
                    SUGGEST PART START
        =======================================-->

    <section class="section suggest-part">
        <div class="container">
            <ul class="suggest-slider slider-arrow">
                <li>
                    <a class="suggest-card" href="shop-1column.php">
                        <img src="images/suggest/vegetables.svg">
                    </a>
                </li>
                <li>
                    <a class="suggest-card" href="shop-1column.php">
                        <img src="images/suggest/fruits.svg">
                    </a>
                </li>
                <li>
                    <a class="suggest-card" href="shop-1column.php">
                        <img src="images/suggest/grains.svg">
                    </a>
                </li>
                <li>
                    <a class="suggest-card" href="shop-1column.php">
                        <img src="images/suggest/eggs.svg">
                    </a>
                </li>
                <li>
                    <a class="suggest-card" href="shop-1column.php">
                        <img src="images/suggest/dried-fish.svg">
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!--=====================================
                    SUGGEST PART END
        =======================================-->


    <!--=====================================
                    RECENT PART START
        =======================================-->
    <section class="section recent-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Top Products</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <div class="product-label">
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.php">
                                <img src="images/product/1.png" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="notification" href="notification.php" class="fas fa-random"></a>
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
                                <a href="product-video.php">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.php">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                                <label class="label-text sale">sale</label>
                                <label class="label-text new">new</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.php">
                                <img src="images/product/20.png" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                <a href="product-video.php">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.php">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.php">
                                <img src="images/product/10.png" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                <a href="product-video.php">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.php">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.php">
                                <img src="images/product/21.png" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                <a href="product-video.php">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.php">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.php">
                                <img src="images/product/11.png" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                <a href="product-video.php">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.php">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.php">
                                <img src="images/product/12.png" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                <a href="product-video.php">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.php">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.php">
                                <img src="images/product/13.png" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                <a href="product-video.php">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.php">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.php">
                                <img src="images/product/14.png" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                <a href="product-video.php">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.php">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.php">
                                <img src="images/product/15.png" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                <a href="product-video.php">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.php">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                                <label class="label-text sale">sale</label>
                            </div>
                            <button class="product-wish wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <a class="product-image" href="product-video.php">
                                <img src="images/product/16.png" alt="product">
                            </a>
                            <div class="product-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                <a href="product-video.php">(3)</a>
                            </div>
                            <h6 class="product-name">
                                <a href="product-video.php">fresh green chilis</a>
                            </h6>
                            <h6 class="product-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                        <a href="shop-4column.php" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    RECENT PART END
        =======================================-->
    <!--=====================================
                    PROMOTION PART START
        =======================================-->
    <div class="section promo-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="promo-img">
                        <a href=""><img src="images/promo/home/01.jpg" alt="promo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================
                    PROMOTION PART END
        =======================================-->
    <!--=====================================
                    FEATURED PART START
        =======================================-->
    <section class="section feature-part">
        <div class="container featured">
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
                            <a class="feature-image" href="product-video.php">
                                <img src="images/product/62.png" alt="product">
                            </a>
                            <div class="feature-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name">
                                <a href="product-video.php">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.php">(3 Reviews)</a>
                            </div>
                            <h6 class="feature-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                            <a class="feature-image" href="product-video.php">
                                <img src="images/product/61.png" alt="product">
                            </a>
                            <div class="feature-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name">
                                <a href="product-video.php">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.php">(3 Reviews)</a>
                            </div>
                            <h6 class="feature-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                            <a class="feature-image" href="product-video.php">
                                <img src="images/product/55.png" alt="product">
                            </a>
                            <div class="feature-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name">
                                <a href="product-video.php">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.php">(3 Reviews)</a>
                            </div>
                            <h6 class="feature-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                            <a class="feature-image" href="product-video.php">
                                <img src="images/product/58.png" alt="product">
                            </a>
                            <div class="feature-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name">
                                <a href="product-video.php">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.php">(3 Reviews)</a>
                            </div>
                            <h6 class="feature-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                            <a class="feature-image" href="product-video.php">
                                <img src="images/product/36.png" alt="product">
                            </a>
                            <div class="feature-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name">
                                <a href="product-video.php">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.php">(3 Reviews)</a>
                            </div>
                            <h6 class="feature-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                            <a class="feature-image" href="product-video.php">
                                <img src="images/product/8.png" alt="product">
                            </a>
                            <div class="feature-widget">
                                <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
                                <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name">
                                <a href="product-video.php">fresh organic green chilis</a>
                            </h6>
                            <div class="feature-rating">
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="active icofont-star"></i>
                                <i class="icofont-star"></i>
                                <a href="product-video.php">(3 Reviews)</a>
                            </div>
                            <h6 class="feature-price">
                                <del>P34</del>
                                <span>P28<small>/piece</small></span>
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
                        <a href="shop-4column.php" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
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
                    COUNTDOWN PART START
        =======================================-->
    <section class="section countdown-part">
        <div class="container featured">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto">
                    <div class="countdown-content">
                        <h3>special discount offer for vegetable items</h3>
                        <p>Reprehenderit sed quod autem molestiae aut modi minus veritatis iste dolorum suscipit quis voluptatum fugiat mollitia quia minima</p>
                        <div class="countdown countdown-clock" data-countdown="2021/12/31">
                            <span class="countdown-time"><span>00</span><small>days</small></span>
                            <span class="countdown-time"><span>00</span><small>hours</small></span>
                            <span class="countdown-time"><span>00</span><small>minutes</small></span>
                            <span class="countdown-time"><span>00</span><small>seconds</small></span>
                        </div>
                        <a href="shop-4column.php" class="btn btn-outline">
                            <i class="fas fa-shopping-basket"></i>
                            <span>shop now</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="countdown-img">
                        <img src="images/suggest/vegetables-2.png" alt="countdown">
                        <div class="countdown-off">
                            <span>20%</span>
                            <span>off</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    COUNTDOWN PART END
        =======================================-->


    <!--=====================================
                    NEW ITEM PART START
        =======================================-->
    <section class="section newitem-part">
        <div class="container featured">
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
                                    <a class="product-image" href="product-video.php">
                                        <img src="images/product/49.png" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                        <a href="product-video.php">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.php">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>P34</del>
                                        <span>P28<small>/piece</small></span>
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
                                    <a class="product-image" href="product-video.php">
                                        <img src="images/product/5.png" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                        <a href="product-video.php">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.php">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>P34</del>
                                        <span>P28<small>/piece</small></span>
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
                                    <a class="product-image" href="product-video.php">
                                        <img src="images/product/50.png" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                        <a href="product-video.php">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.php">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>P34</del>
                                        <span>P28<small>/piece</small></span>
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
                                    <a class="product-image" href="product-video.php">
                                        <img src="images/product/56.png" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                        <a href="product-video.php">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.php">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>P34</del>
                                        <span>P28<small>/piece</small></span>
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
                                    <a class="product-image" href="product-video.php">
                                        <img src="images/product/61.png" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                        <a href="product-video.php">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.php">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>P34</del>
                                        <span>P28<small>/piece</small></span>
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
                                    <a class="product-image" href="product-video.php">
                                        <img src="images/product/20.png" alt="product">
                                    </a>
                                    <div class="product-widget">
                                        <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                        <a href="product-video.php">(3)</a>
                                    </div>
                                    <h6 class="product-name">
                                        <a href="product-video.php">fresh green chilis</a>
                                    </h6>
                                    <h6 class="product-price">
                                        <del>P34</del>
                                        <span>P28<small>/piece</small></span>
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
                        <a href="shop-4column.php" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
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
                    PROMOTION PART START
        =======================================-->
    <div class="section promo-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                    <div class="promo-img">
                        <a href=""><img src="images/promo/home/01.jpg" alt="promo"></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                    <div class="promo-img">
                        <a href=""><img src="images/promo/home/02.jpg" alt="promo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================
                    PROMOTION PART END
        =======================================-->


    <!--=====================================
                    NICHE PART START
        =======================================-->
    <section class="section niche-part">
        <div class="container featured">
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
                            <a href="#top-order" class="tab-link active" data-bs-toggle="tab">
                                <i class="icofont-price"></i>
                                <span>top order</span>
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
            <div class="tab-pane fade show active" id="top-order">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/01.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/02.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/03.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/04.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/05.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/06.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/07.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/08.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/09.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                    <label class="label-text order">314</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/10.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/11.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/12.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/13.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/14.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/15.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/16.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/17.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/18.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/19.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/20.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/06.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/07.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/08.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/09.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/10.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/11.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/12.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/13.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/14.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                                <a class="product-image" href="product-video.php">
                                    <img src="images/product/15.png" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a title="Product Notification" href="notification.php" class="fas fa-random"></a>
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
                                    <a href="product-video.php">(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href="product-video.php">fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>P34</del>
                                    <span>P28<small>/piece</small></span>
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
                        <a href="shop-4column.php" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
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
                    BRAND PART START
        =======================================-->
    <section class="section brand-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Farmer's Shop</h2>
                    </div>
                </div>
            </div>
            <div class="brand-slider slider-arrow">
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="images/brand/1.png" alt="brand">
                        <div class="brand-overlay">
                            <a href="brand-single.php"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>natural greeny</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="images/brand/2.png" alt="brand">
                        <div class="brand-overlay">
                            <a href="brand-single.php"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>vegan lover</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="images/brand/3.png" alt="brand">
                        <div class="brand-overlay">
                            <a href="brand-single.php"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>organic foody</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="images/brand/5.png" alt="brand">
                        <div class="brand-overlay">
                            <a href="brand-single.php"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>dairymilk</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="images/brand/4.png" alt="brand">
                        <div class="brand-overlay">
                            <a href="brand-single.php"><i class="fas fa-link"></i></a>
                        </div>
                    </div>
                    <div class="brand-meta">
                        <h4>fresh fortune</h4>
                        <p>(45 items)</p>
                    </div>
                </div>
                <div class="brand-wrap">
                    <div class="brand-media">
                        <img src="images/brand/6.png" alt="brand">
                        <div class="brand-overlay">
                            <a href="brand-single.php"><i class="fas fa-link"></i></a>
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
                        <a href="brand-list.php" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>all brands</span>
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
    <!-- <section class="section testimonial-part">
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
                                <img src="images/avatar/01.png" alt="testimonial">
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
                                <img src="images/avatar/02.png" alt="testimonial">
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
                                <img src="images/avatar/03.png" alt="testimonial">
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
                                <img src="images/avatar/04.png" alt="testimonial">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!--=====================================
                   TESTIMONIAL PART END
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
                            <img src="images/oma-angat-logo-solo.svg" alt="logo">
                        </a>
                        <p class="footer-desc">A Virtual Agri-Market</p>
                        <ul class="footer-social">
                            <li><a class="icofont-facebook" href="#"></a></li>
                            <li><a class="icofont-instagram" href="#"></a></li>
                            <li><a class="fa-regular fa-envelope"></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="footer-widget contact">
                        <h3 class="footer-title">contact us</h3>
                        <ul class="footer-contact">
                            <li>
                                <i class="fa-solid fa-envelope" href="#"></i>
                                <p>
                                    <span>oma-angat@gmail.com</span>
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-phone" href="#"> </i>
                                <p>
                                    <span>(+63) 912 022 5970</span>
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-location-dot" href="#"></i>
                                <p>CSB2, Bicol University Main Campus, Legazpi, Philippines </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">About Oma-Angat</h3>
                        <div class="footer-links">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Oma-Angat Team</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Donation for Farmers</a></li>
                                <li><a href="#">Harvesting Calendar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Customer Service</h3>
                        <div class="footer-links">
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Return & Refund</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">Download App</h3>
                            <p class="footer-desc">Lorem ipsum dolor sit amet tenetur dignissimos ipsum eligendi autem obcaecati minus ducimus totam reprehenderit exercitationem!</p>
                            <div class="footer-app">
                                <a href="#"><img src="images/google-store.png" alt="google"></a>
                                <a href="#"><img src="images/app-store.png" alt="app"></a>
                            </div>
                        </div>
                    </div> -->
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="col-sm-12">
                    <p class="footer-copytext">Copyright &copy; 2023 - <a target="_blank" href="index.php">Oma-Angat, Virtual Agri-Market</a></p>
                </div>
            </div>
        </div>

    </footer>
    <!--=====================================
                      FOOTER PART END
        =======================================--> <!--=====================================
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
    <!-- additional js -->
    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/fullpage.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/scrolloverflow.js"></script>
    <script src="js/form.js"></script>
    <script src="js/custom.js"></script>

    <!--=====================================
                    JS LINK PART END
        =======================================-->
</body>
</php>