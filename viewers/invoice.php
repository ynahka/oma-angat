<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/invoice.css">

<body>
    <?php include('header-nav.php'); ?>
    <?php include('category-sidebar.php'); ?>


    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>Order invoice</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="shop-4column.html">shop grid</a></li>
                <li class="breadcrumb-item"><a href="product-video.html">product details</a></li>
                <li class="breadcrumb-item"><a href="checkout.html">checkout</a></li>
                <li class="breadcrumb-item active" aria-current="page">invoice</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <!--=====================================
                    INVOICE PART START
        =======================================-->
    <section class="inner-section invoice-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert-info">
                        <p>Thank you! We have recieved your order.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>order recieved</h4>
                        </div>
                        <div class="account-content">
                            <div class="invoice-recieved">
                                <h6>order number <span>1665</span></h6>
                                <h6>order date <span>february 02, 2021</span></h6>
                                <h6>total amount <span>$24,176.00</span></h6>
                                <h6>payment method <span>Cash on delivery</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Order Details</h4>
                        </div>
                        <div class="account-content">
                            <ul class="invoice-details">
                                <li>
                                    <h6>Total Item</h6>
                                    <p>6 Items</p>
                                </li>
                                <li>
                                    <h6>Order Time</h6>
                                    <p>1.00pm 10-12-2021</p>
                                </li>
                                <li>
                                    <h6>Delivery Time</h6>
                                    <p>90 Minute Express Delivery</p>
                                </li>
                                <li>
                                    <h6>Delivery Location</h6>
                                    <p>House 17/A, West Jalkuri, Dhaka.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Amount Details</h4>
                        </div>
                        <div class="account-content">
                            <ul class="invoice-details">
                                <li>
                                    <h6>Sub Total</h6>
                                    <p>$10,864.00</p>
                                </li>
                                <li>
                                    <h6>discount</h6>
                                    <p>$20.00</p>
                                </li>
                                <li>
                                    <h6>Payment Method</h6>
                                    <p>Cash On Delivery</p>
                                </li>
                                <li>
                                    <h6>Total<small>(Incl. VAT)</small></h6>
                                    <p>$10,874.00</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-scroll">
                        <table class="table-list">
                            <thead>
                                <tr>
                                    <th scope="col">Serial</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">brand</th>
                                    <th scope="col">quantity</th>
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
                                    <td class="table-brand">
                                        <h6>Fresh Company</h6>
                                    </td>
                                    <td class="table-quantity">
                                        <h6>3</h6>
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
                                        <h6>$19<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-brand">
                                        <h6>Radhuni Masala</h6>
                                    </td>
                                    <td class="table-quantity">
                                        <h6>5</h6>
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
                                        <h6>$19<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-brand">
                                        <h6>Pran Prio</h6>
                                    </td>
                                    <td class="table-quantity">
                                        <h6>2</h6>
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
                                        <h6>$19<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-brand">
                                        <h6>Real Food</h6>
                                    </td>
                                    <td class="table-quantity">
                                        <h6>3</h6>
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
                                        <h6>$19<small>/kilo</small></h6>
                                    </td>
                                    <td class="table-brand">
                                        <h6>Rdhuni Company</h6>
                                    </td>
                                    <td class="table-quantity">
                                        <h6>7</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center mt-5">
                    <a class="btn btn-inline" href="#">
                        <i class="icofont-download"></i>
                        <span>download invoice</span>
                    </a>
                    <div class="back-home">
                        <a href="index.html">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    INVOICE PART END
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
                        <p class="footer-copytext">&copy; All Copyrights Reserved by <a target="_blank" href="https://themeforest.net/user/mironcoder">Mironcoder</a></p>
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