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
            <a class="category-link dropdown-link" href="faq.php">
                <i class="flaticon-vegetable"></i>
                <span>vegetables</span>
            </a>
            <!-- <ul class="dropdown-list">
                        <li><a href="#">Sitaw</a></li>
                        <li><a href="#">Cabbage</a></li>
                        <li><a href="#">Potato</a></li>
                    </ul> -->
        </li>

        <li class="category-item">
            <a class="category-link dropdown-link" href="#">
                <i class="flaticon-fruit"></i>
                <span>fruits</span>
            </a>
            <!-- <ul class="dropdown-list">
                        <li><a href="#">Berries</a></li>
                        <li><a href="#">Banana</a></li>
                        <li><a href="#">Mango</a></li>
                        <li><a href="#">Coconut</a></li>
                    </ul> -->
        </li>
        <li class="category-item">
            <a class="category-link dropdown-link" href="#">
                <i class="flaticon-dairy-products"></i>
                <span>Dairy farm</span>
            </a>
            <!-- <ul class="dropdown-list">
                        <li><a href="#">Eggs</a></li>
                        <li><a href="#">Itlog na Pula</a></li>
                        <li><a href="#">Organic Eggs</a></li>
                    </ul> -->
        </li>


        <li class="category-item">
            <a class="category-link dropdown-link" href="#">
                <i class="flaticon-dried-fruit"></i>
                <span>dried fish</span>
            </a>
            <!-- <ul class="dropdown-list">
                        <li><a href="#">Tuyo</a></li>
                        <li><a href="#">Dilis</a></li>
                        <li><a href="#">Danggit</a></li>
                    </ul> -->
        </li>

    </ul>
    <div class="category-footer">
        <p>All rights reserved by <a href="index.php">Oma-Angat</a></p>
    </div>
</aside>
<!--=====================================
                CATEGORY SIDEBAR PART END
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
                    <span style="color: #39404a;">Welcome back, <?php echo $username; ?>!</span>
                </a>
            </div>
        <?php
        } else {
            // Display the "Get Started" button if the user is not logged in
        ?>
            <div class="nav-btn">
                <a href="../buyeraccount/index.php" class="btn btn-inline">
                    <i class="fa fa-unlock-alt"></i>
                    <span>Get Started</span>
                </a>
            </div>
        <?php
        }
        ?>


        <ul class="nav-list">
            <li>
                <a class="nav-link" href="index.php"><i class="fa fa-house"></i>Home</a>
                <!-- <ul class="dropdown-list">
                            <li><a href="home-standard.php">Home standard</a></li>
                        </ul> -->
            </li>
            <li>
                <a class="nav-link" href="community.php"><i class="fa-solid fa-comments"></i>Community</a>
                <!-- <ul class="dropdown-list">
                            <li><a href="home-standard.php">Home standard</a></li>
                        </ul> -->
            </li>
            <li>
                <a class="nav-link dropdown-link" href="#"><i class="fa-solid fa-store"></i>shop</a>
                <ul class="dropdown-list">
                    <li><a href="shop-1column.php">Farmer's Market</a></li>
                    <li><a href="shop-2column.php">Products</a></li>
                </ul>
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
    <a onclick="btnaddtocart()" title="chat">
        <i class="fas fa-paper-plane"></i>
        <span>Chat</span>
    </a>
    <a onclick="btnaddtocart()" title="cart">
        <i class="fas fa-shopping-basket"></i>
        <span>Cart</span>
    </a>
    <a onclick="btnaddtocart()" title="Notification List">
        <i class="fas fa-user"></i>
        <span>Account</span>
    </a>
</div>
<!--=====================================
                    MOBILE-MENU PART END
        =======================================-->