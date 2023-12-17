    <!--=====================================
                    PRODUCT VIEW START
        =======================================-->
    <?php
    include("connection.php");
    $ret = mysqli_query($connection, "SELECT p.id AS id, p.productdesc AS descrip, p.productname AS names, p.quantity as quanti, p.price AS presyo, pi.imagename AS imahe FROM products AS p INNER JOIN products_image AS pi ON p.product_id = pi.product_id;");
    $num = mysqli_num_rows($ret);
    if ($num > 0) {
        while ($row = mysqli_fetch_array($ret)) {
    ?>
    <div class="modal fade" id="product-view<?php echo $row['id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                </ul>
                                <ul class="thumb-slider">
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                    <li><img src="../OmaangatImages/Products/<?php echo htmlentities($row['imahe']); ?>"
                                            alt="product"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name">
                                    <a href="product-video.php"><?php echo htmlentities($row['names']); ?></a>
                                </h3>
                                <div class="view-meta">

                                </div>
                                <div class="view-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href="product-simple.php">(3 reviews)</a>
                                </div>
                                <h3 class="view-price">
                                    <span>₱ <?php echo $row['presyo'] ?></span>
                                </h3>
                                <h3 class="view-price">
                                    <span><small>Quantity Available: <?php echo $row['quanti'] ?></small></span>
                                </h3>
                                <p class="view-desc"><?php echo htmlentities($row['descrip']); ?></p>
                                <div class="view-list-group">
                                    <label class="view-list-title">Chat Farmer:</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Chat now</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">View Shop:</label>
                                    <ul class="view-tag-list">
                                        <li><a href="shop-1column.php">View</a></li>
                                    </ul>
                                </div>
                                <div class="view-add-group">
                                    <button class="product-add" title="Add to Cart">
                                        <!-- <i class="fas fa-shopping-basket"></i> -->
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
                                    <a class="view-Notification" href="checkout.php" title="Notification This Item">
                                        <span>Proceed to Checkout</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    }
    ?>
    <!--=====================================
                    PRODUCT VIEW END
        =======================================-->