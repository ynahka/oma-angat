<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/profile.css">

<body>
    <?php include('header-nav.php'); ?>
    <?php include('category-sidebar.php'); ?>



    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>my profile</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">profile</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <!--=====================================
                    PROFILE PART START
        =======================================-->
    <section class="inner-section profile-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>Your Profile</h4>
                            <button data-bs-toggle="modal" data-bs-target="#profile-edit">edit profile</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="profile-image">
                                        <a href="#"><img src="images/user.png" alt="user"></a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">name</label>
                                        <input class="form-control" type="text" value="Miron Mahmud">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input class="form-control" type="email" value="mironcoder@gmail.com">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="profile-btn">
                                        <a href="change-password.html">change pass.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>contact number</h4>
                            <button data-bs-toggle="modal" data-bs-target="#contact-add">add contact</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card contact active">
                                        <h6>primary</h6>
                                        <p>+8801838288389</p>
                                        <ul>
                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#contact-edit"></button></li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card contact">
                                        <h6>secondary</h6>
                                        <p>+8801941101915</p>
                                        <ul>
                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#contact-edit"></button></li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card contact">
                                        <h6>secondary</h6>
                                        <p>+8801747875727</p>
                                        <ul>
                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#contact-edit"></button></li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card">
                        <div class="account-title">
                            <h4>delivery address</h4>
                            <button data-bs-toggle="modal" data-bs-target="#address-add">add address</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address active">
                                        <h6>Home</h6>
                                        <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
                                        <ul class="user-action">
                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address">
                                        <h6>Office</h6>
                                        <p>east tejturi bazar, dhaka-1200. word no-04, road no-13/c, house no-4/b</p>
                                        <ul class="user-action">
                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="profile-card address">
                                        <h6>Bussiness</h6>
                                        <p>kawran bazar, dhaka-1100. word no-02, road no-13/d, house no-7/m</p>
                                        <ul class="user-action">
                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                            <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="account-card mb-0">
                        <div class="account-title">
                            <h4>payment option</h4>
                            <button data-bs-toggle="modal" data-bs-target="#payment-add">add card</button>
                        </div>
                        <div class="account-content">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card payment active">
                                        <img src="images/payment/png/01.png" alt="payment">
                                        <h4>card number</h4>
                                        <p>
                                            <span>****</span>
                                            <span>****</span>
                                            <span>****</span>
                                            <sup>1876</sup>
                                        </p>
                                        <h5>miron mahmud</h5>
                                        <button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card payment">
                                        <img src="images/payment/png/02.png" alt="payment">
                                        <h4>card number</h4>
                                        <p>
                                            <span>****</span>
                                            <span>****</span>
                                            <span>****</span>
                                            <sup>1876</sup>
                                        </p>
                                        <h5>miron mahmud</h5>
                                        <button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 alert fade show">
                                    <div class="payment-card payment">
                                        <img src="images/payment/png/03.png" alt="payment">
                                        <h4>card number</h4>
                                        <p>
                                            <span>****</span>
                                            <span>****</span>
                                            <span>****</span>
                                            <sup>1876</sup>
                                        </p>
                                        <h5>miron mahmud</h5>
                                        <button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button>
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
                    PROFILE PART END
        =======================================-->


    <!--=====================================
                    MODAL ADD FORM START
        =======================================-->
    <!-- contact add form -->
    <div class="modal fade" id="contact-add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>add new contact</h3>
                    </div>
                    <div class="form-group">
                        <label class="form-label">title</label>
                        <select class="form-select">
                            <option selected>choose title</option>
                            <option value="primary">primary</option>
                            <option value="secondary">secondary</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">number</label>
                        <input class="form-control" type="text" placeholder="Enter your number">
                    </div>
                    <button class="form-btn" type="submit">save contact info</button>
                </form>
            </div>
        </div>
    </div>

    <!-- address add form -->
    <div class="modal fade" id="address-add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>add new address</h3>
                    </div>
                    <div class="form-group">
                        <label class="form-label">title</label>
                        <select class="form-select">
                            <option selected>choose title</option>
                            <option value="home">home</option>
                            <option value="office">office</option>
                            <option value="Bussiness">Bussiness</option>
                            <option value="academy">academy</option>
                            <option value="others">others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">address</label>
                        <textarea class="form-control" placeholder="Enter your address"></textarea>
                    </div>
                    <button class="form-btn" type="submit">save address info</button>
                </form>
            </div>
        </div>
    </div>

    <!-- payment add form -->
    <div class="modal fade" id="payment-add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>add new payment</h3>
                    </div>
                    <div class="form-group">
                        <label class="form-label">card number</label>
                        <input class="form-control" type="text" placeholder="Enter your card number">
                    </div>
                    <button class="form-btn" type="submit">save card info</button>
                </form>
            </div>
        </div>
    </div>
    <!--=====================================
                    MODAL ADD FORM END
        =======================================-->


    <!--=====================================
                    MODAL EDIT FORM START
        =======================================-->
    <!-- profile edit form -->
    <div class="modal fade" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>edit profile info</h3>
                    </div>
                    <div class="form-group">
                        <label class="form-label">profile image</label>
                        <input class="form-control" type="file">
                    </div>
                    <div class="form-group">
                        <label class="form-label">name</label>
                        <input class="form-control" type="text" value="Miron Mahmud">
                    </div>
                    <div class="form-group">
                        <label class="form-label">email</label>
                        <input class="form-control" type="text" value="mironcoder@gmail.com">
                    </div>
                    <button class="form-btn" type="submit">save profile info</button>
                </form>
            </div>
        </div>
    </div>

    <!-- contact edit form -->
    <div class="modal fade" id="contact-edit">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>edit contact info</h3>
                    </div>
                    <div class="form-group">
                        <label class="form-label">title</label>
                        <select class="form-select">
                            <option value="primary" selected>primary</option>
                            <option value="secondary">secondary</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">number</label>
                        <input class="form-control" type="text" value="+8801838288389">
                    </div>
                    <button class="form-btn" type="submit">save contact info</button>
                </form>
            </div>
        </div>
    </div>

    <!-- address edit form -->
    <div class="modal fade" id="address-edit">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                <form class="modal-form">
                    <div class="form-title">
                        <h3>edit address info</h3>
                    </div>
                    <div class="form-group">
                        <label class="form-label">title</label>
                        <select class="form-select">
                            <option value="home" selected>home</option>
                            <option value="office">office</option>
                            <option value="Bussiness">Bussiness</option>
                            <option value="academy">academy</option>
                            <option value="others">others</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">address</label>
                        <textarea class="form-control" placeholder="jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A"></textarea>
                    </div>
                    <button class="form-btn" type="submit">save address info</button>
                </form>
            </div>
        </div>
    </div>
    <!--=====================================
                    MODAL EDIT FORM END
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