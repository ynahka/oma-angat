<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/notification.css">

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
                <li><a class="nav-link" href="../buyeraccount/logout.php"><i class="icofont-logout"></i>logout</a></li>
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
                                <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora
                                    magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos
                                    reprehenderit fuga</p>
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
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                            value="1">
                                        <button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button>
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
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>compare list</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="shop-4column.html">shop grid</a></li>
                <li class="breadcrumb-item active" aria-current="page">compare</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <!--=====================================
                    COMPARE PART START
        =======================================-->
    <section class="inner-section compare-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-scroll">
                        <table class="table-list">
                            <thead>
                                <tr>
                                    <th scope="col">Serial</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">vendor</th>
                                    <th scope="col">status</th>
                                    <th scope="col">shopping</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-serial">
                                        <h6>01</h6>
                                    </td>
                                    <td class="table-image"><img src="images/product/01.jpg" alt="product"></td>
                                    <td class="table-name">
                                        <h6>product name</h6>
                                    </td>
                                    <td class="table-price">
                                        <h6>$19<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-vendor"><a href="#">fresh greeny</a></td>
                                    <td class="table-status">
                                        <h6 class="stock-out">stock out</h6>
                                    </td>
                                    <td class="table-shop">
                                        <button class="product-add" title="Add to Cart">add to cart</button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i
                                                    class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i
                                                    class="icofont-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="table-action">
                                        <a class="view" href="#" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#product-view"><i class="fas fa-eye"></i></a>
                                        <a class="wish" href="#" title="Add to Wishlist"><i
                                                class="icofont-heart"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-serial">
                                        <h6>02</h6>
                                    </td>
                                    <td class="table-image"><img src="images/product/02.jpg" alt="product"></td>
                                    <td class="table-name">
                                        <h6>product name</h6>
                                    </td>
                                    <td class="table-price">
                                        <h6>$78<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-vendor"><a href="#">fresh greeny</a></td>
                                    <td class="table-status">
                                        <h6 class="stock-in">stock in</h6>
                                    </td>
                                    <td class="table-shop">
                                        <button class="product-add" title="Add to Cart">add to cart</button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i
                                                    class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i
                                                    class="icofont-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="table-action">
                                        <a class="view" href="#" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#product-view"><i class="fas fa-eye"></i></a>
                                        <a class="wish" href="#" title="Add to Wishlist"><i
                                                class="icofont-heart"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-serial">
                                        <h6>03</h6>
                                    </td>
                                    <td class="table-image"><img src="images/product/03.jpg" alt="product"></td>
                                    <td class="table-name">
                                        <h6>product name</h6>
                                    </td>
                                    <td class="table-price">
                                        <h6>$68<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-vendor"><a href="#">fresh greeny</a></td>
                                    <td class="table-status">
                                        <h6 class="stock-out">stock out</h6>
                                    </td>
                                    <td class="table-shop">
                                        <button class="product-add" title="Add to Cart">add to cart</button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i
                                                    class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i
                                                    class="icofont-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="table-action">
                                        <a class="view" href="#" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#product-view"><i class="fas fa-eye"></i></a>
                                        <a class="wish" href="#" title="Add to Wishlist"><i
                                                class="icofont-heart"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-serial">
                                        <h6>04</h6>
                                    </td>
                                    <td class="table-image"><img src="images/product/04.jpg" alt="product"></td>
                                    <td class="table-name">
                                        <h6>product name</h6>
                                    </td>
                                    <td class="table-price">
                                        <h6>$24<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-vendor"><a href="#">fresh greeny</a></td>
                                    <td class="table-status">
                                        <h6 class="stock-in">stock in</h6>
                                    </td>
                                    <td class="table-shop">
                                        <button class="product-add" title="Add to Cart">add to cart</button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i
                                                    class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i
                                                    class="icofont-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="table-action">
                                        <a class="view" href="#" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#product-view"><i class="fas fa-eye"></i></a>
                                        <a class="wish" href="#" title="Add to Wishlist"><i
                                                class="icofont-heart"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-serial">
                                        <h6>05</h6>
                                    </td>
                                    <td class="table-image"><img src="images/product/05.jpg" alt="product"></td>
                                    <td class="table-name">
                                        <h6>product name</h6>
                                    </td>
                                    <td class="table-price">
                                        <h6>$34<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-vendor"><a href="#">fresh greeny</a></td>
                                    <td class="table-status">
                                        <h6 class="stock-out">stock out</h6>
                                    </td>
                                    <td class="table-shop">
                                        <button class="product-add" title="Add to Cart">add to cart</button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i
                                                    class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i
                                                    class="icofont-plus"></i></button>
                                        </div>
                                    </td>
                                    <td class="table-action">
                                        <a class="view" href="#" title="Quick View" data-bs-toggle="modal"
                                            data-bs-target="#product-view"><i class="fas fa-eye"></i></a>
                                        <a class="wish" href="#" title="Add to Wishlist"><i
                                                class="icofont-heart"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-5">
                        <button class="btn btn-outline">
                            Load more items
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    COMPARE PART END
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
                        <p class="footer-desc">Adipisci asperiores ipsum ipsa repellat consequatur repudiandae quisquam
                            assumenda dolor perspiciatis sit ipsum dolor amet.</p>
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
                        <p class="footer-desc">Lorem ipsum dolor sit amet tenetur dignissimos ipsum eligendi autem
                            obcaecati minus ducimus totam reprehenderit exercitationem!</p>
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
                        <p class="footer-copytext">&copy; All Copyrights Reserved by <a target="_blank"
                                href="https://themeforest.net/user/mironcoder">Mironcoder</a></p>
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