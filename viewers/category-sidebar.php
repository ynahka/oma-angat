<!--=====================================
                CATEGORY SIDEBAR PART START
        =======================================-->

<!--=====================================
                CATEGORY SIDEBAR PART END
        =======================================-->

<!--=====================================
                  CART SIDEBAR PART START
        =======================================-->
<!-- <aside class="cart-sidebar">
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
                <a href="#"><img src="images/product/1.png" alt="product"></a>
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
                <a href="#"><img src="images/product/1.png" alt="product"></a>
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
                <a href="#"><img src="images/product/1.png" alt="product"></a>
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
                <a href="#"><img src="images/product/1.png" alt="product"></a>
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
                <a href="#"><img src="images/product/1.png" alt="product"></a>
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
        <a class="cart-checkout-btn" href="checkout.php">
            <span class="checkout-label">Proceed to Checkout</span>
            <span class="checkout-price">P369.78</span>
        </a>
    </div>
</aside> -->
<!--=====================================
                    CART SIDEBAR PART END
        =======================================-->

<!--=====================================
                  NAV SIDEBAR PART START
        =======================================-->
<aside class="nav-sidebar">
    <div class="nav-header">
        <a href="#"><img src="images/oma-angat-logo.svg" alt="logo"></a>
        <button class="nav-close"><i class="icofont-close"></i></button>
    </div>
    <div class="nav-content">
        <?php
        // Check if the user is logged in (replace this condition with your actual login check)
        if (isset($_SESSION['user_id'])) {
            // Assuming you have a variable $username containing the logged-in user's username
            $username = $_SESSION['username'];
        ?>
            <div class="nav-btn">
                <a href="javascript:void(0)">
                    <i class="fa fa-person-alt"></i>
                    <span style="color: #39404a;">WELCOME, <?php echo $username; ?>!</span>
                </a>
            </div>
        <?php
        } else {
            // Display the "Get Started" button if the user is not logged in
        ?>
            <div class="nav-btn">
                <a href="get-started.php" class="btn btn-inline">
                    <i class="fa fa-unlock-alt"></i>
                    <span>Get Started</span>
                </a>
            </div>
        <?php
        }
        ?>


        <ul class="nav-list">
            <li>
                <a class="nav-link" href="products.php"><i class="fa-solid fa-store"></i>shop</a>
            </li>
            <li>
                <a class="nav-link" href="profile.php"><i class="icofont-ui-user"></i>my account</a>
            </li>
            <li>
                <a class="nav-link" href="purchases.php"><i class="fas fa-shopping-basket"></i>My Purchases</a>
            </li>
            <div class="nav-info-group">
                <li><a class="nav-link" href="about.php"><i class="icofont-info-circle"></i>about us</a></li>
                <li><a class="nav-link" href="faq.php"><i class="icofont-support-faq"></i>FAQs</a></li>
                <li><a class="nav-link" href="contact.php"><i class="icofont-contacts"></i>Contact</a></li>
            </div>
        </ul>
        <div class="nav-info-group-2">
            <!-- <a class="nav-link" href="#"></i>Settings</a> -->
            <a class="nav-link" href="privacy.php"></i>Privacy Policy</a>
            <a class="nav-link" href="terms-and-conditions.php"></i>Terms & Conditions</a>
            <a class="nav-link" href="../buyer/logout.php"></i>log out</a>
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
    <a href="community.php" title="community">
        <i class="fa-solid fa-comments"></i>
        <span>Community</span>
    </a>
    <a href="chat.php" title="chat">
        <i class="fas fa-paper-plane"></i>
        <span>Chat</span>
    </a>
    <a href="chat.php" title="cart">
        <i class="fas fa-shopping-basket"></i>
        <span>Cart</span>
    </a>
    <a onclick="profile.php" class="header-user-1" title="profile">
        <i class="fas fa-user"></i>
        <span>Account</span>
    </a>
</div>
<!--=====================================
                    MOBILE-MENU PART END
        =======================================-->