         
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
                                <style>
                                    .navbar-item.active {
                                        background-color: #F5F5F5; /* You can replace the color with your own */
                                        color: #000; /* You can replace the color with your own */
                                    }
                                </style>

                                <li class="navbar-item dropdown active">
                                    <a href="#"><i class="fa-solid fa-house"></i></a>
                                    <a class="navbar-link" href="index.php">Home</a>
                                </li>
                                <li class="navbar-item dropdown">
                                    <a href="#"><i class="fa-solid fa-comments"></i></a>
                                    <a class="navbar-link" href="blog-author.php" >Feed</a>
                                </li>
                                <li class="navbar-item dropdown">
                                    <a href="#"><i class="fa-solid fa-store"></i></a>
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
                                    <a href="#"><i class="fa-solid fa-calendar-days"></i></a>
                                    <p>
                                        <small><a href="#" title="Reserve Product">Harvesting Calendar</a></small>
                                    </p>
                                </div>
                                <div class="navbar-info">
                                    <a href="#"><i class="fa-solid fa-hand-holding-heart"></i></a>
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
