<!DOCTYPE html>
<html lang="en">
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="css/blog-author.css">

    <body>
    <?php include('header-nav.php'); ?>

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
                        <a href="#"><img src="images/product/01.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li> 
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="images/product/02.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="images/product/03.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="images/product/04.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-media">
                        <a href="#"><img src="images/product/05.jpg" alt="product"></a>
                        <button class="cart-delete"><i class="far fa-trash-alt"></i></button>
                    </div>
                    <div class="cart-info-group">
                        <div class="cart-info">
                            <h6><a href="product-single.html">existing product name</a></h6>
                            <p>Unit Price - $8.75</p>
                        </div>
                        <div class="cart-action-group">
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                            <h6>$56.98</h6>
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
                <a class="cart-checkout-btn" href="checkout.html">
                    <span class="checkout-label">Proceed to Checkout</span>
                    <span class="checkout-price">$369.78</span>
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
                    <a href="login.html" class="btn btn-inline">
                        <i class="fa fa-unlock-alt"></i>
                        <span>join here</span>
                    </a>
                </div>
                <!-- This commentable code show when user login or register -->
                <!-- <div class="nav-profile">
                    <a class="nav-user" href="#"><img src="images/user.png" alt="user"></a>
                    <h4 class="nav-name"><a href="profile.html">Miron Mahmud</a></h4>
                </div> -->
                <div class="nav-select-group">
                    <div class="nav-select">
                        <i class="icofont-world"></i>
                        <select class="select">
                            <option value="english" selected>English</option>
                            <option value="bangali">Bangali</option>
                            <option value="arabic">Arabic</option>
                        </select>
                    </div>
                    <div class="nav-select">
                        <i class="icofont-money"></i>
                        <select class="select">
                            <option value="english" selected>Doller</option>
                            <option value="bangali">Pound</option>
                            <option value="arabic">Taka</option>
                        </select>
                    </div>
                </div>
                <ul class="nav-list">
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                        <ul class="dropdown-list">
                            <li><a href="home-grid.html">Home grid</a></li>
                            <li><a href="index.html">Home index</a></li>
                            <li><a href="home-classic.html">Home classic</a></li>
                            <li><a href="home-standard.html">Home standard</a></li>
                            <li><a href="home-category.html">Home category</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                        <ul class="dropdown-list">
                            <li><a href="shop-5column.html">shop 5 column</a></li>
                            <li><a href="shop-4column.html">shop 4 column</a></li>
                            <li><a href="shop-3column.html">shop 3 column</a></li>
                            <li><a href="shop-2column.html">shop 2 column</a></li>
                            <li><a href="shop-1column.html">shop 1 column</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                        <ul class="dropdown-list">
                            <li><a href="product-tab.html">product tab</a></li>
                            <li><a href="product-grid.html">product grid</a></li>
                            <li><a href="product-video.html">product video</a></li>
                            <li><a href="product-simple.html">product simple</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                        <ul class="dropdown-list">
                            <li><a href="profile.html">profile</a></li>
                            <li><a href="wallet.html">wallet</a></li>
                            <li><a href="wishlist.html">wishlist</a></li>
                            <li><a href="compare.html">compare</a></li>
                            <li><a href="checkout.html">checkout</a></li>
                            <li><a href="orderlist.html">order history</a></li>
                            <li><a href="invoice.html">order invoice</a></li>
                            <li><a href="email-template.html">email template</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentic</a>
                        <ul class="dropdown-list">
                            <li><a href="login.html">login</a></li>
                            <li><a href="register.html">register</a></li>
                            <li><a href="reset-password.html">reset password</a></li>
                            <li><a href="change-password.html">change password</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                        <ul class="dropdown-list">
                            <li><a href="blog-grid.html">blog grid</a></li>
                            <li><a href="blog-standard.html">blog standard</a></li>
                            <li><a href="blog-details.html">blog details</a></li>
                            <li><a href="blog-author.html">blog author</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link" href="offer.html"><i class="icofont-sale-discount"></i>offers</a></li>
                    <li><a class="nav-link" href="about.html"><i class="icofont-info-circle"></i>about us</a></li>
                    <li><a class="nav-link" href="faq.html"><i class="icofont-support-faq"></i>need help</a></li>
                    <li><a class="nav-link" href="contact.html"><i class="icofont-contacts"></i>contact us</a></li>
                    <li><a class="nav-link" href="privacy.html"><i class="icofont-warning"></i>privacy policy</a></li>
                    <li><a class="nav-link" href="coming-soon.html"><i class="icofont-options"></i>coming soon</a></li>
                    <li><a class="nav-link" href="error.html"><i class="icofont-ui-block"></i>404 error</a></li>
                    <li><a class="nav-link" href="login.html"><i class="icofont-logout"></i>logout</a></li>
                </ul>
                <div class="nav-info-group">
                    <div class="nav-info">
                        <i class="icofont-ui-touch-phone"></i>
                        <p>
                            <small>call us</small>
                            <span>(+880) 183 8288 389</span>
                        </p>
                    </div>
                    <div class="nav-info">
                        <i class="icofont-ui-email"></i>
                        <p>
                            <small>email us</small>
                            <span>support@greeny.com</span>
                        </p>
                    </div>
                </div>
                <div class="nav-footer">
                    <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
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
                    BANNER PART START
        =======================================-->
        <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
            <div class="container">
                <h2>blog author</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog-grid.html">Blog grid</a></li>
                    <li class="breadcrumb-item"><a href="blog-details.html">Blog details</a></li>
                    <li class="breadcrumb-item active" aria-current="page">blog author</li>
                </ol>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                AUTHOR SINGLE PART START
        =======================================-->
        <section class="inner-section blog-grid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="author-single">
                                    <div class="author-content">
                                        <a href="#" class="author-image">
                                            <img src="images/avatar/01.jpg" alt="avatar">
                                        </a>
                                        <div class="author-info">
                                            <h3 class="author-name">miron mahmud</h3>
                                            <h6 class="author-mail">mironcoder@gmail.com</h6>
                                            <ul class="author-social">
                                                <li><a href="#" class="icofont-facebook"></a></li>
                                                <li><a href="#" class="icofont-twitter"></a></li>
                                                <li><a href="#" class="icofont-linkedin"></a></li>
                                                <li><a href="#" class="icofont-pinterest"></a></li>
                                                <li><a href="#" class="icofont-instagram"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="author-bio">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea deserunt nisi, tempore eveniet pariatur natus delectus commodi, totam est culpa ducimus rem reprehenderit suscipit veritatis assumenda. Delectus, saepe. Explicabo, quos magnam fuga porro
                                    </p>
                                    <ul class="author-meta">
                                        <li title="Total Blog">
                                            <i class="fab fa-readme"></i>
                                            <span>Total Blog 25</span>
                                        </li>
                                        <li title="Total Comment">
                                            <i class="fas fa-comments"></i>
                                            <span>Total Comment 130</span>
                                        </li>
                                        <li title="Total Share">
                                            <i class="fas fa-share-alt"></i>
                                            <span>Total Share 45</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="top-filter">
                                    <div class="filter-show">
                                        <label class="filter-label">Show :</label>
                                        <select class="form-select filter-select">
                                            <option value="1">12</option>
                                            <option value="2">24</option>
                                            <option value="3">36</option>
                                        </select>
                                    </div>
                                    <div class="filter-short">
                                        <label class="filter-label">Short by :</label>
                                        <select class="form-select filter-select">
                                            <option selected>default</option>
                                            <option value="3">recent</option>
                                            <option value="1">featured</option>
                                            <option value="2">recommend</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
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
                            </div>
                            <div class="col-md-6 col-lg-6">
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
                            </div>
                            <div class="col-md-6 col-lg-6">
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
                            </div>
                            <div class="col-md-6 col-lg-6">
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
                            <div class="col-md-6 col-lg-6">
                                <div class="blog-card">
                                    <div class="blog-media">
                                        <a class="blog-img" href="#">
                                            <img src="images/blog/05.jpg" alt="blog">
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
                            <div class="col-md-6 col-lg-6">
                                <div class="blog-card">
                                    <div class="blog-media">
                                        <a class="blog-img" href="#">
                                            <img src="images/blog/06.jpg" alt="blog">
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
                            <div class="col-md-6 col-lg-6">
                                <div class="blog-card">
                                    <div class="blog-media">
                                        <a class="blog-img" href="#">
                                            <img src="images/blog/07.jpg" alt="blog">
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
                            <div class="col-md-6 col-lg-6">
                                <div class="blog-card">
                                    <div class="blog-media">
                                        <a class="blog-img" href="#">
                                            <img src="images/blog/08.jpg" alt="blog">
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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="bottom-paginate">
                                    <p class="page-info">Showing 12 of 60 Results</p>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="fas fa-long-arrow-alt-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">...</li>
                                        <li class="page-item"><a class="page-link" href="#">60</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="fas fa-long-arrow-alt-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-4">
                        <div class="blog-widget">
                            <h3 class="blog-widget-title">Find blogs</h3>
                            <form class="blog-widget-form">
                                <input type="text" placeholder="Search blogs">
                                <button class="icofont-search-1"></button>
                            </form>
                        </div>
                        <div class="blog-widget">
                            <h3 class="blog-widget-title">popular feeds</h3>
                            <ul class="blog-widget-feed">
                                <li>
                                    <a class="blog-widget-media" href="#">
                                        <img src="images/blog-widget/01.jpg" alt="blog-widget">
                                    </a>
                                    <h6 class="blog-widget-text">
                                        <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                        <span>february 02, 2021</span>
                                    </h6>
                                </li>
                                <li>
                                    <a class="blog-widget-media" href="#">
                                        <img src="images/blog-widget/02.jpg" alt="blog-widget">
                                    </a>
                                    <h6 class="blog-widget-text">
                                        <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                        <span>february 02, 2021</span>
                                    </h6>
                                </li>
                                <li>
                                    <a class="blog-widget-media" href="#">
                                        <img src="images/blog-widget/03.jpg" alt="blog-widget">
                                    </a>
                                    <h6 class="blog-widget-text">
                                        <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                        <span>february 02, 2021</span>
                                    </h6>
                                </li>
                                <li>
                                    <a class="blog-widget-media" href="#">
                                        <img src="images/blog-widget/04.jpg" alt="blog-widget">
                                    </a>
                                    <h6 class="blog-widget-text">
                                        <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                        <span>february 02, 2021</span>
                                    </h6>
                                </li>
                                <li>
                                    <a class="blog-widget-media" href="#">
                                        <img src="images/blog-widget/05.jpg" alt="blog-widget">
                                    </a>
                                    <h6 class="blog-widget-text">
                                        <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                        <span>february 02, 2021</span>
                                    </h6>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-widget">
                            <h3 class="blog-widget-title">top categories</h3>
                            <ul class="blog-widget-category">
                                <li><a href="#">farming <span>22</span></a></li>
                                <li><a href="#">agriculture <span>14</span></a></li>
                                <li><a href="#">organic food <span>35</span></a></li>
                                <li><a href="#">vegetables <span>67</span></a></li>
                                <li><a href="#">healthy life <span>89</span></a></li>
                            </ul>
                        </div>
                        <div class="blog-widget">
                            <h3 class="blog-widget-title">popular tags</h3>
                            <ul class="blog-widget-tag">
                                <li><a href="#">farming</a></li>
                                <li><a href="#">organic</a></li>
                                <li><a href="#">food</a></li>
                                <li><a href="#">healthy</a></li>
                                <li><a href="#">agriculture</a></li>
                                <li><a href="#">vegetables</a></li>
                                <li><a href="#">grocery</a></li>
                                <li><a href="#">vegan</a></li>
                                <li><a href="#">life</a></li>
                                <li><a href="#">enjoy</a></li>
                            </ul>
                        </div>
                        <div class="blog-widget">
                            <h3 class="blog-widget-title">follow us</h3>
                            <ul class="blog-widget-social">
                                <li><a href="#" class="icofont-facebook"></a></li>
                                <li><a href="#" class="icofont-twitter"></a></li>
                                <li><a href="#" class="icofont-linkedin"></a></li>
                                <li><a href="#" class="icofont-pinterest"></a></li>
                                <li><a href="#" class="icofont-instagram"></a></li>
                            </ul>
                        </div>
                        <div class="blog-widget">
                            <a href="#"><img class="img-fluid" src="images/promo/blog/01.jpg" alt="promo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                  AUTHOR SINGLE PART END
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
                    INTRO PART START
        =======================================-->
        <section class="intro-part">
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

        <?php include('footer.php'); ?>
        <?php include('js-vendor.php'); ?>

    </body>
</html>






