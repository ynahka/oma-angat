         
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
                                    <a class="navbar-link dropdown-arrow" href="#">Shop</a>
                                    <ul class="dropdown-position-list">
                                        <li><a href="home-standard.php">Home Standard</a></li>
                                    </ul>
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
                                    <a href="#"><i class="icofont-calendar"></i></a>
                                    <p>
                                        <small><a href="#" title="Reserve Product">Harvesting Calendar</a></small>
                                    </p>
                                </div>
                                <div class="navbar-info">
                                    <a href="#"><i class="icofont-exchange"></i></a>
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
