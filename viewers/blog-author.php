<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/blog-author.css">

<body>
    <?php include('header-nav.php'); ?>
    <?php include('category-sidebar.php'); ?>

    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
        <div class="container">
            <h2>Community</h2>
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
                <div class="row1 col-md-7 col-lg-4">
                    <div class="blog-widget">
                        <h3 class="blog-widget-title">Search Post</h3>
                        <form class="blog-widget-form">
                            <input type="text" placeholder="search ">
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
                            <li><a href="#">Vegetables<span>22</span></a></li>
                            <li><a href="#">Fruits <span>14</span></a></li>
                            <li><a href="#">Grains <span>35</span></a></li>
                            <li><a href="#">Fats & Oils <span>67</span></a></li>
                            <li><a href="#">Processed Goods<span>89</span></a></li>
                        </ul>
                    </div>
                    <!-- <div class="blog-widget">
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
                    </div> -->

                    <!-- <div class="blog-widget">
                        <a href="#"><img class="img-fluid" src="images/promo/blog/01.jpg" alt="promo"></a>
                    </div> -->
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-filter">
                                <button class="filter-show">
                                    <a href="#">
                                        <i class="icofont-plus"></i>
                                        <span>ADD POST</span>
                                    </a>
                                </button>
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
                                    <a class="blog-btn" href="blog-details.php">
                                        <span>Read more</span>
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
                                    <a class="blog-btn" href="blog-details.php">
                                        <span>Read more</span>
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
                                    <a class="blog-btn" href="blog-details.php">
                                        <span>Read more</span>
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
                                    <a class="blog-btn" href="blog-details.php">
                                        <span>Read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                  AUTHOR SINGLE PART END
        =======================================-->

    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>

</body>

</html>