<!DOCTYPE html>
<html lang="en">
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="css/about.css">
    
    <body>
    <?php include('header-nav.php'); ?>

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
        <div class="mobile-menu">
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
                <h2>about our company</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">about</li>
                </ol>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                     ABOUT PART START
        =======================================-->
        <section class="inner-section about-company">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2>Our Motive is to Provide Best for Those Who Deserve</h2>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis exercitationem commodi aliquam necessitatibus vero reiciendis quaerat illo est fuga ea temporibus natus doloremque ipsum voluptas quod deserunt expedita reprehenderit pariatur quidem quisquam, recusandae animi non! Voluptas totam repudiandae rerum molestiae possimus quis numquam sapiente sunt architecto quisquam Aliquam odio optio</p>
                        </div>
                        <ul class="about-list">
                            <li>
                                <h3>34785</h3>
                                <h6>registered users</h6>
                            </li>
                            <li>
                                <h3>2623</h3>
                                <h6>per day visitors</h6>
                            </li>
                            <li>
                                <h3>189</h3>
                                <h6>total products</h6>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="images/about/01.jpg" alt="about">
                            <img src="images/about/02.jpg" alt="about">
                            <img src="images/about/03.jpg" alt="about">
                            <img src="images/about/04.jpg" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    ABOUT PART END
        =======================================-->


        <!--=====================================
                   TESTIMONIAL PART START
        =======================================-->
        <section class="inner-section about-testimonial">
            <div class="container">
                <ul class="testi-slider slider-arrow">
                    <li>
                        <div class="testi-content">
                            <a class="testi-img" href="#">
                                <img src="images/testimonial/01.jpg" alt="testimonial">
                            </a>
                            <div class="testi-quote">
                                <i class="icofont-quote-left"></i>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam doloribus magni provident ab ipsam sint dolores repellat inventore sequi temporibus natus.</p>
                                <h4>tahmina labonno</h4>
                                <h6>Former MD - joomtech.com</h6>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="testi-content">
                            <a class="testi-img" href="#">
                                <img src="images/testimonial/02.jpg" alt="testimonial">
                            </a>
                            <div class="testi-quote">
                                <i class="icofont-quote-left"></i>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit neque earum sapiente vitae obcaecati magnam doloribus magni provident ab ipsam sint dolores repellat inventore sequi temporibus natus.</p>
                                <h4>miron mahmud</h4>
                                <h6>Senior Accountant - farmfresh.com</h6>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--=====================================
                   TESTIMONIAL PART END
        =======================================-->


        <!--=====================================
                    CHOOSE PART START
        =======================================-->
        <section class="about-choose">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-md-9 col-lg-7 col-xl-6 mx-auto">
                        <div class="section-heading">
                            <h2>Why People Choose Their Daily Organic Life With Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="choose-card">
                            <div class="choose-icon">
                                <i class="icofont-fruits"></i>
                            </div>
                            <div class="choose-text">
                                <h4>100% fresh organic food</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error dignissimo cumque minus facere dolores cupiditate debitis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-card">
                            <div class="choose-icon">
                                <i class="icofont-vehicle-delivery-van"></i>
                            </div>
                            <div class="choose-text">
                                <h4>Delivery within one hour</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error dignissimo cumque minus facere dolores cupiditate debitis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-card">
                            <div class="choose-icon">
                                <i class="icofont-loop"></i>
                            </div>
                            <div class="choose-text">
                                <h4>quickly return policy</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error dignissimo cumque minus facere dolores cupiditate debitis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-card">
                            <div class="choose-icon">
                                <i class="icofont-support"></i>
                            </div>
                            <div class="choose-text">
                                <h4>instant support team</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing tempora pariatur provident animi error dignissimo cumque minus facere dolores cupiditate debitis</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    CHOOSE PART END
        =======================================-->


        <!--=====================================
                     TEAM PART START
        =======================================-->
        <section class="inner-section about-team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>our team members</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="team-slider slider-arrow">
                            <li>
                                <figure class="team-media">
                                    <img src="images/team/01.jpg" alt="team">
                                    <div class="team-overlay">
                                        <a href="#" class="icofont-facebook facebook"></a>
                                        <a href="#" class="icofont-twitter twitter"></a>
                                        <a href="#" class="icofont-linkedin linkedin"></a>
                                    </div>
                                </figure>
                                <div class="team-meta">
                                    <h5><a href="#">Jhonson Hononr</a></h5>
                                    <p>Founder & CEO</p>
                                </div>
                            </li>
                            <li>
                                <figure class="team-media">
                                    <img src="images/team/02.jpg" alt="team">
                                    <div class="team-overlay">
                                        <a href="#" class="icofont-facebook facebook"></a>
                                        <a href="#" class="icofont-twitter twitter"></a>
                                        <a href="#" class="icofont-linkedin linkedin"></a>
                                    </div>
                                </figure>
                                <div class="team-meta">
                                    <h5><a href="#">Jhonson Hononr</a></h5>
                                    <p>Web developer</p>
                                </div>
                            </li>
                            <li>
                                <figure class="team-media">
                                    <img src="images/team/03.jpg" alt="team">
                                    <div class="team-overlay">
                                        <a href="#" class="icofont-facebook facebook"></a>
                                        <a href="#" class="icofont-twitter twitter"></a>
                                        <a href="#" class="icofont-linkedin linkedin"></a>
                                    </div>
                                </figure>
                                <div class="team-meta">
                                    <h5><a href="#">Jhonson Hononr</a></h5>
                                    <p>graphics designer</p>
                                </div>
                            </li>
                            <li>
                                <figure class="team-media">
                                    <img src="images/team/04.jpg" alt="team">
                                    <div class="team-overlay">
                                        <a href="#" class="icofont-facebook facebook"></a>
                                        <a href="#" class="icofont-twitter twitter"></a>
                                        <a href="#" class="icofont-linkedin linkedin"></a>
                                    </div>
                                </figure>
                                <div class="team-meta">
                                    <h5><a href="#">Jhonson Hononr</a></h5>
                                    <p>digital marketer</p>
                                </div>
                            </li>
                            <li>
                                <figure class="team-media">
                                    <img src="images/team/05.jpg" alt="team">
                                    <div class="team-overlay">
                                        <a href="#" class="icofont-facebook facebook"></a>
                                        <a href="#" class="icofont-twitter twitter"></a>
                                        <a href="#" class="icofont-linkedin linkedin"></a>
                                    </div>
                                </figure>
                                <div class="team-meta">
                                    <h5><a href="#">Jhonson Hononr</a></h5>
                                    <p>article writer</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                     TEAM PART END
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






