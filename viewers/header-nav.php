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
                             <li><a href="about.php">About Us</a></li>
                             <li><a href="faq.php">FAQs</a></li>
                             <li><a href="contact.php">Contact</a></li>
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
                         <button class="header-user"> <i class="far fa-user"></i></button>
                         <a href="index.php"><img src="images/Oma-Angat-Logo-text.svg" alt="logo"></a>
                         <button class="header-src"><i class="fas fa-search"></i></button>
                     </div>

                     <a href="index.php" class="header-logo">
                         <img src="images/Oma-Angat-Logo-text.svg" alt="logo">
                     </a>

                     <button class="header-widget header-user-1" title="Account">
                         <i class="icofont-ui-user"></i>
                         <span>Account</span>
                     </button>

                     <form class="header-form">
                         <button><i class="fas fa-search"></i></button>
                         <input type="text" placeholder="Search for markets & products">
                     </form>

                     <div class="header-widget-group">
                         <!-- LOGIN PAGE -->
                         <!-- LOGIN PAGE -->
                         <?php if (!isset($_SESSION['Email_Session'])) : ?>
                             <a href="get-started.php" class="header-widget" title="Join">
                                 <button>Get Started</button>
                             </a>
                         <?php endif; ?>


                         <button class="header-widget header-cart" title="Cartlist">
                             <i class="fas fa-shopping-basket"></i>
                         </button>

                         <a href="#" class="header-widget" title="chat">
                             <i class="fas fa-paper-plane"></i>
                         </a>


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
                                     <a href="#0"><i class="fa fa-house"></i></a>
                                     <a class="navbar-link" href="index.php">Home</a>
                                 </li>
                                 <li class="navbar-item dropdown ">
                                     <a href="#0"><i class="fa-solid fa-comments"></i></a>
                                     <a class="navbar-link" href="blog-author.php">Community</a>
                                 </li>
                                 <li class="navbar-item dropdown">
                                     <a href=""><i class="fa-solid fa-store"></i></a>
                                     <a class="navbar-link dropdown-arrow" href="faq.php">Shop</a>
                                     <ul class="dropdown-position-list">
                                         <li><a href="faq.php">Farmer's Market</a></li>
                                         <li><a href="offer.php">Category</a></li>
                                         <li><a href="profile.php">Product</a></li>
                                     </ul>
                                 </li>
                             </ul>
                             <!-- <div class="navbar-info-group">
                                 <div class="navbar-info">
                                     <a href="#0"><i class="fas fa-calendar-check"></i></a>
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
                             </div> -->
                         </div>
                     </div>
                 </div>
             </div>
         </nav>
         <!--=====================================
                    NAVBAR PART END
        =======================================-->