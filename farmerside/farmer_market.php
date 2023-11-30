<!DOCTYPE html>
<html lang="en">
<?php include '../viewers/header.php'; ?>
<link rel="stylesheet" href="../viewers/css/brand-single.css">
<?php
include("../connection/connection.php");
session_start();

$notification = ''; // Initialize notification variable

if (isset($_SESSION['Email_Session'])) {
    $email = $_SESSION['Email_Session'];
    $result = mysqli_query($conx, "SELECT farmer_id FROM farmer WHERE user_id IN (SELECT user_id FROM useraccount WHERE email='{$email}')");

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            $farmer_id = $row['farmer_id']; // Get the farmer_id from the farmer table

            // Fetch store information including the image path
            $resultStore = mysqli_query($conx, "SELECT storeName, image, Address FROM Store WHERE farmer_id='{$farmer_id}'");
            $rowStore = mysqli_fetch_assoc($resultStore);

            if ($rowStore) {
                $storeName = htmlspecialchars($rowStore['storeName']);
                $imagePath = htmlspecialchars($rowStore['image']);
                $Address = htmlspecialchars($rowStore['Address']);
            } else {
                $notification = "Error fetching store information: " . mysqli_error($conx);
            }
        } else {
            $notification = "Error fetching farmer_id: No result.";
        }
    } else {
        $notification = "Error fetching farmer_id: " . mysqli_error($conx);
    }
} else {
    $notification = "Session not set. Please make sure you are logged in.";
}
?>


<body>

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
                                    <li><img src="images/product/1.png" alt="product"></li>
                                    <li><img src="images/product/1.png" alt="product"></li>
                                    <li><img src="images/product/1.png" alt="product"></li>
                                    <li><img src="images/product/1.png" alt="product"></li>
                                    <li><img src="images/product/1.png" alt="product"></li>
                                    <li><img src="images/product/1.png" alt="product"></li>
                                    <li><img src="images/product/1.png" alt="product"></li>
                                </ul>
                                <ul class="thumb-slider">
                                    <li><img src="images/product/1.png" alt="product"></li>
                                    <li><img src="images/product/1.png" alt="product"></li>
                                    <li><img src="images/product/1.png" alt="product"></li>
                                    <li><img src="images/product/1.png" alt="product"></li>
                                    <li><img src="images/product/1.png" alt="product"></li>
                                    <li><img src="images/product/1.png" alt="product"></li>
                                    <li><img src="images/product/1.png" alt="product"></li>
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
    <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
        <div class="container">
            <!-- <h2>Shop 1 Column</h2> -->
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">shop-1column</li>
            </ol> -->
        </div>
        </div>
    </section>

    <div class="brand-single">
        <a href="#"><img src="<?php echo $imagePath; ?>"></a>
        <a href="#">
            <h3><?php echo isset($storeName) ? $storeName : ''; ?><span
                    style="color: #00cc00; font-size:20px;">&nbsp;&bull;</span></h3>
            <h7 style="color:#000000"><i class="fas fa-location-dot"></i> <?php echo isset($Address) ? $Address : ''; ?>
            </h7>
        </a>
        <ul>
            <li class="fas fa-star active"></li>
            <li class="fas fa-star active"></li>
            <li class="fas fa-star active"></li>
            <li class="fas fa-star active"></li>
            <li class="fas fa-star"></li>
            <li class="total">(163 ratings)</li>
        </ul>
        <p>(45 items)</p>
    </div> <!--=====================================BANNER PART END=======================================-->


    <!--=====================================
                    SHOP PART START
        =======================================-->
    <section class="inner-section shop-part">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-3">

                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter by Price</h6>
                        <form>
                            <div class="shop-widget-group">
                                <input type="text" placeholder="Min - 00">
                                <input type="text" placeholder="Max - 5k">
                            </div>
                            <button class="shop-widget-btn">
                                <i class="fas fa-search"></i>
                                <span>search</span>
                            </button>
                        </form>
                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter by Rating</h6>
                        <form>
                            <ul class="shop-widget-list">
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="feat1">
                                        <label for="feat1">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                        </label>
                                    </div>
                                    <span class="shop-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="feat2">
                                        <label for="feat2">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                        </label>
                                    </div>
                                    <span class="shop-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="feat3">
                                        <label for="feat3">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </label>
                                    </div>
                                    <span class="shop-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="feat4">
                                        <label for="feat4">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </label>
                                    </div>
                                    <span class="shop-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="feat5">
                                        <label for="feat5">
                                            <i class="fas fa-star active"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </label>
                                    </div>
                                    <span class="shop-widget-number">(59)</span>
                                </li>
                            </ul>
                            <button class="shop-widget-btn">
                                <i class="far fa-trash-alt"></i>
                                <span>clear filter</span>
                            </button>
                        </form>
                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter by Tag</h6>
                        <form>
                            <ul class="shop-widget-list">
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="tag1">
                                        <label for="tag1">new items</label>
                                    </div>
                                    <span class="shop-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="tag2">
                                        <label for="tag2">sale items</label>
                                    </div>
                                    <span class="shop-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="tag3">
                                        <label for="tag3">rating items</label>
                                    </div>
                                    <span class="shop-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="tag4">
                                        <label for="tag4">feature items</label>
                                    </div>
                                    <span class="shop-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="tag5">
                                        <label for="tag5">discount items</label>
                                    </div>
                                    <span class="shop-widget-number">(59)</span>
                                </li>
                            </ul>
                            <button class="shop-widget-btn">
                                <i class="far fa-trash-alt"></i>
                                <span>clear filter</span>
                            </button>
                        </form>
                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter by Brand</h6>
                        <form>
                            <input class="shop-widget-search" type="text" placeholder="Search...">
                            <ul class="shop-widget-list shop-widget-scroll">
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand1">
                                        <label for="brand1">mari gold</label>
                                    </div>
                                    <span class="shop-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand2">
                                        <label for="brand2">tredar</label>
                                    </div>
                                    <span class="shop-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand3">
                                        <label for="brand3">keya</label>
                                    </div>
                                    <span class="shop-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand4">
                                        <label for="brand4">diamond</label>
                                    </div>
                                    <span class="shop-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand5">
                                        <label for="brand5">lilly's</label>
                                    </div>
                                    <span class="shop-widget-number">(59)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand6">
                                        <label for="brand6">fremant</label>
                                    </div>
                                    <span class="shop-widget-number">(64)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand7">
                                        <label for="brand7">avocads</label>
                                    </div>
                                    <span class="shop-widget-number">(77)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="brand8">
                                        <label for="brand8">boroclas</label>
                                    </div>
                                    <span class="shop-widget-number">(85)</span>
                                </li>
                            </ul>
                            <button class="shop-widget-btn">
                                <i class="far fa-trash-alt"></i>
                                <span>clear filter</span>
                            </button>
                        </form>
                    </div>
                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter by Category</h6>
                        <form>
                            <input class="shop-widget-search" type="text" placeholder="Search...">
                            <ul class="shop-widget-list shop-widget-scroll">
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="cate1">
                                        <label for="cate1">vegetables</label>
                                    </div>
                                    <span class="shop-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="cate2">
                                        <label for="cate2">groceries</label>
                                    </div>
                                    <span class="shop-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="cate3">
                                        <label for="cate3">fruits</label>
                                    </div>
                                    <span class="shop-widget-number">(35)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="cate4">
                                        <label for="cate4">dairy farm</label>
                                    </div>
                                    <span class="shop-widget-number">(47)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="cate5">
                                        <label for="cate5">sea foods</label>
                                    </div>
                                    <span class="shop-widget-number">(59)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="cate6">
                                        <label for="cate6">diet foods</label>
                                    </div>
                                    <span class="shop-widget-number">(64)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="cate7">
                                        <label for="cate7">dry foods</label>
                                    </div>
                                    <span class="shop-widget-number">(77)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="cate8">
                                        <label for="cate8">fast foods</label>
                                    </div>
                                    <span class="shop-widget-number">(85)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="cate9">
                                        <label for="cate9">drinks</label>
                                    </div>
                                    <span class="shop-widget-number">(92)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="cate10">
                                        <label for="cate10">coffee</label>
                                    </div>
                                    <span class="shop-widget-number">(21)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="cate11">
                                        <label for="cate11">meats</label>
                                    </div>
                                    <span class="shop-widget-number">(14)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content">
                                        <input type="checkbox" id="cate12">
                                        <label for="cate12">fishes</label>
                                    </div>
                                    <span class="shop-widget-number">(56)</span>
                                </li>
                            </ul>
                            <button class="shop-widget-btn">
                                <i class="far fa-trash-alt"></i>
                                <span>clear filter</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-filter">
                                <div class="filter-show">
                                    <label class="filter-label">Show :</label>
                                    <select class="form-select filter-select">
                                        <option value="1">12</option>
                                        <option value="2">24</option>
                                        <option value="3">36</option>
                                    </select>
                                </div>
                                <div class="filter-short">
                                    <label class="filter-label">Short by :</label>
                                    <select class="form-select filter-select">
                                        <option selected>default</option>
                                        <option value="3">trending</option>
                                        <option value="1">featured</option>
                                        <option value="2">recommend</option>
                                    </select>
                                </div>
                                <div class="filter-action">
                                    <a href="shop-3column.html" title="Three Column"><i class="fas fa-th"></i></a>
                                    <a href="shop-2column.html" title="Two Column"><i class="fas fa-th-large"></i></a>
                                    <a href="shop-1column.html" class="active" title="One Column"><i
                                            class="fas fa-th-list"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label off">-15%</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore
                                        quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i
                                                    class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i
                                                    class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label new">new</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore
                                        quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i
                                                    class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i
                                                    class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label sale">sale</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore
                                        quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i
                                                    class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i
                                                    class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label feat">feature</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore
                                        quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i
                                                    class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i
                                                    class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label off">-15%</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore
                                        quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i
                                                    class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i
                                                    class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label rate">4.8</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore
                                        quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i
                                                    class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i
                                                    class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="product-standard">
                                <div class="standard-label-group">
                                    <label class="standard-label new">new</label>
                                </div>
                                <div class="standard-media">
                                    <a class="standard-image" href="product-video.html">
                                        <img src="images/product/1.png" alt="product">
                                    </a>
                                    <div class="standard-widget">
                                        <a title="Product Compare" href="compare.html" class="fas fa-random"></a>
                                        <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8"
                                            class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                        <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a>
                                    </div>
                                </div>
                                <div class="standard-content">
                                    <h4 class="standard-name">
                                        <a href="product-video.html">fresh green chilis</a>
                                    </h4>
                                    <h5 class="standard-price">
                                        <del>$34</del>
                                        <span>$28<small>/piece</small></span>
                                    </h5>
                                    <div class="standard-rating">
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="active icofont-star"></i>
                                        <i class="icofont-star"></i>
                                        <a href="product-video.html">(3)</a>
                                    </div>
                                    <p class="standard-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit
                                        molestias quaerat rem ullam ut nam quibusdam labore sed magnam eos Inventore
                                        quis corrupti nemo ipsa ratione culpa porro vitae.</p>
                                    <div class="standard-action-group">
                                        <button class="product-add" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>add to cart</span>
                                        </button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i
                                                    class="icofont-minus"></i></button>
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
                                            <button class="action-plus" title="Quantity Plus"><i
                                                    class="icofont-plus"></i></button>
                                        </div>
                                        <button class="standard-wish wish" title="Add to Wishlist">
                                            <i class="fas fa-heart"></i>
                                            <span>add to wish</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bottom-paginate">
                                <p class="page-info">Showing 12 of 60 Results</p>
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-long-arrow-alt-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">...</li>
                                    <li class="page-item"><a class="page-link" href="#">60</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    SHOP PART END
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