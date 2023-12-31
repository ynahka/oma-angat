<?php
include("connect.php");
session_start();

switch ($_POST['form']) {

    case 'fncdisplaylistofproducts':
        echo "<script src='assets/js/main.js'></script>";


        if ($_POST['pricerange'] != '') {

            if ($_POST['srchprod'] != '') {
                $searchproduct = "AND (a.productname LIKE '%" . $_POST['srchprod'] . "%')";
            } else {
                $searchproduct = "";
            }

            if ($_POST['filteracc'] != '') {
                $searchcategory = "AND b.category_id = '" . $_POST['filteracc'] . "'";
            } else {
                $searchcategory = "";
            }
        } else {

            if ($_POST['srchprod'] != '') {
                $searchproduct = "AND (a.productname LIKE '%" . $_POST['srchprod'] . "%')";
            } else {
                $searchproduct = "";
            }

            if ($_POST['filteracc'] != '') {
                $searchcategory = "AND b.category_id = '" . $_POST['filteracc'] . "'";
            } else {
                $searchcategory = "";
            }
        }


        if ($_POST['pricerange'] != '') {

            if ($_POST['pricerange'] == 'Highest to Lowest') {

                $res = mysqli_query($connection, "SELECT a.product_id, a.productname, a.price, quantity FROM products AS a LEFT JOIN products_category AS b ON a.product_id = b.product_id WHERE a.id != '' " . $searchproduct . " " . $searchcategory . "GROUP BY b.product_id ORDER BY a.price DESC");
            } else if ($_POST['pricerange'] == 'Lowest to Highest') {

                $res = mysqli_query($connection, "SELECT a.product_id, a.productname, a.price, quantity FROM products AS a LEFT JOIN products_category AS b ON a.product_id = b.product_id WHERE a.id != '' " . $searchproduct . " " . $searchcategory . " GROUP BY b.product_id ORDER BY a.price ASC");
            }
        } else {

            $res = mysqli_query($connection, "SELECT a.product_id, a.productname, a.price, quantity FROM products AS a LEFT JOIN products_category AS b ON a.product_id = b.product_id WHERE a.id != '' " . $searchproduct . " " . $searchcategory . " GROUP BY b.product_id ORDER BY a.id ASC");
        }


        $numrows = mysqli_num_rows($res);
        if ($numrows == TRUE) {
            while ($row = mysqli_fetch_array($res)) {

                $productimage = mysqli_fetch_array(mysqli_query($connection, "SELECT image, imagename FROM products_image WHERE product_id = '" . $row[0] . "' ORDER BY id ASC;"));

                echo "<div class='col-lg-3 col-md-4 col-12'>
				<div class='product-card'>
		                    <article class='single_product'>
		                        <figure>
		                            <div class='product_thumb'>
	                                    <a class='primary_img' href='javascript:void(0)' title='quick view' onclick='openproductdetails(\"" . $row[0] . "\")'>
	                                    	<img src='../" . $productimage[0] . "' style='height: 275px; width: 100% !important;'>";
                if ($row['quantity'] <= 0) {
                    echo "<div class='soldoutshow'>Sold out</div>";
                }
                echo "</a>
	                                    <div class='action_links'>
	                                        <ul>
	                                            <li class='quick_button'>
	                                            	<a href='javascript:void(0)' title='quick view' onclick='openproductdetails(\"" . $row[0] . "\")'> 
	                                            		<i class='icon-eye'></i>
	                                            	</a>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <div class='product_content grid_content'>
	                                	<div class='product_price_rating'>
		                                    <div class='product_rating'>
		                                        <ul>";
                $getaverate = mysqli_fetch_array(mysqli_query($connection, "SELECT AVG(rate) FROM rate WHERE product_id = '" . $row[0] . "';"));
                $test = explode(".", $getaverate[0]);
                for ($i = 1; $i <= $test[0]; $i++) {
                    echo "<li><a href='javascript:void(0)'><i class='fa fa-star'></i></a></li>";
                }
                if ($test[1] > 0) {
                    echo "<li><a href='javascript:void(0)'><i class='fa fa-star-half-o'></i></a></li>";
                }
                $extrastar = 5 - $getaverate[0];
                $test2 = explode(".", $extrastar);
                for ($i = 1; $i <= $test2[0]; $i++) {
                    echo "<li><a href='javascript:void(0)' style='color:#feb9545c;'><i class='fa fa-star'></i></a></li>";
                }
                echo "</ul>
		                                    </div>
		                                    <h4 class='product_name' style=''><a href='javascript:void(0)' title='$row[1]' onclick='openproductdetails(\"" . $row[0] . "\")'>" . $row[1] . "</a></h4>
		                                    <div class='price_box'>
		                                        <span class='current_price'>₱ " . number_format($row[2], "2", ".", ",") . "</span>
		                                    </div>
											</div>
		                                </div>
	                                </div>
		                        </figure>
		                    </article>
		                </div>
		            ";
            }
        } else {
            echo "<div class='col-12'><span>No Product Found . . .</span></div>";
        }
        break;

    case 'dsplylistoffiltercategory':
        $res = mysqli_query($connection, "SELECT category_id, categoryname FROM categories;");
?> <option value="">- Select Category -</option> <?php
                                                    while ($row = mysqli_fetch_array($res)) {
                                                    ?> <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option> <?php
                                                                                                                            }
                                                                                                                            break;

                                                                                                                        case 'fncdisplayproddet':
                                                                                                                            // PRODUCT DETAILS
                                                                                                                            $productdet = mysqli_fetch_array(mysqli_query($connection, "SELECT product_id, productname, price, productdesc, unit, availat, availuntil, seller_id, quantity FROM products WHERE product_id = '" . $_POST['product_id'] . "';"));
                                                                                                                            echo $productdet[1] . "|";

                                                                                                                            // RATES
                                                                                                                            echo "<ul>";
                                                                                                                            $getaverate = mysqli_fetch_array(mysqli_query($connection, "SELECT AVG(rate) FROM rate WHERE product_id = '" . $_POST['product_id'] . "';"));
                                                                                                                            $test = explode(".", $getaverate[0]);
                                                                                                                            for ($i = 1; $i <= $test[0]; $i++) {
                                                                                                                                echo "<li><a href='javascript:void(0)'><i class='fa fa-star'></i></a></li>";
                                                                                                                            }
                                                                                                                            if ($test[1] > 0) {
                                                                                                                                echo "<li><a href='javascript:void(0)'><i class='fa fa-star-half-o'></i></a></li>";
                                                                                                                            }
                                                                                                                            $extrastar = 5 - $getaverate[0];
                                                                                                                            $test2 = explode(".", $extrastar);
                                                                                                                            for ($i = 1; $i <= $test2[0]; $i++) {
                                                                                                                                echo "<li><a href='javascript:void(0)' style='color:#feb9545c;'><i class='fa fa-star'></i></a></li>";
                                                                                                                            }
                                                                                                                            echo "</ul>";

                                                                                                                            // PRODUCT DETAILS
                                                                                                                            echo "|" . number_format($productdet[2], "2", ".", ",") . "|" . $productdet[3] . "|";

                                                                                                                            // IMAGES
                                                                                                                            $productimage = mysqli_fetch_array(mysqli_query($connection, "SELECT image, imagename FROM products_image WHERE product_id = '" . $_POST['product_id'] . "' ORDER BY id ASC;"));
                                                                                                                            echo "<img id='zoom1' src='../" . $productimage[0] . "' data-zoom-image='" . $productimage[0] . "' >|";

                                                                                                                            $res = mysqli_query($connection, "SELECT image, imagename FROM products_image WHERE product_id = '" . $_POST['product_id'] . "' ORDER BY id ASC");
                                                                                                                            $numrows = mysqli_num_rows($res);
                                                                                                                            if ($numrows == TRUE) {
                                                                                                                                echo "<script src='assets/js/main.js' style='display:none;'></script>";
                                                                                                                                echo "<ul class='s-tab-zoom owl-carousel single-product-active' id='gallery_01'>";
                                                                                                                                while ($row = mysqli_fetch_array($res)) {
                                                                                                                                    echo "<li>
                            <a href='javascript:void(0)' class='elevatezoom-gallery active' data-update='' data-image='" . $row[0] . "' data-zoom-image='" . $row[0] . "'>
                                <img src='../" . $row[0] . "' style='height:67px' />
                            </a>
                        </li>";
                                                                                                                                }
                                                                                                                                echo "</ul>";
                                                                                                                            }

                                                                                                                            echo "|";

                                                                                                                            //  CATEGORIES
                                                                                                                            $count = 0;
                                                                                                                            $res2 = mysqli_query($connection, "SELECT a.category_id, b.categoryname FROM products_category AS a LEFT JOIN categories AS b ON a.category_id = b.category_id WHERE a.product_id = '" . $_POST['product_id'] . "' ORDER BY a.id ASC");
                                                                                                                            $numrows2 = mysqli_num_rows($res2);
                                                                                                                            if ($numrows2 == TRUE) {
                                                                                                                                while ($row2 = mysqli_fetch_array($res2)) {
                                                                                                                                    $count++;
                                                                                                                                    if ($count == 1) {
                                                                                                                                        echo $row2[1];
                                                                                                                                    } else {
                                                                                                                                        echo ", " . $row2[1];
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            }

                                                                                                                            // PRODUCT DETAILS
                                                                                                                            echo "|" . $productdet[4] . "|" . $productdet[5] . "|" . $productdet[6] . "|" . $productdet[7] . "|" . $productdet[8] . "|" . $productdet[9] . "|" . $productdet[10] . "|" . $productdet[11] . "|" . $productdet[12] . "|" . $productdet[13] . "|";

                                                                                                                            // COMMENTS
                                                                                                                            $res3 = mysqli_query($connection, "SELECT a.comment, a.rate, CASE WHEN b.middlename = '' OR b.middlename IS NULL THEN CONCAT(b.lastname, ', ', b.firstname) ELSE CONCAT(b.lastname, ', ', b.firstname, ' ', LEFT(b.middlename, '1'), '.') END, b.usertype, a.date_added FROM rate AS a LEFT JOIN users_table AS b ON a.user_id = b.user_id WHERE a.product_id = '" . $_POST['product_id'] . "' ORDER BY a.id ASC");
                                                                                                                            $numrows3 = mysqli_num_rows($res3);
                                                                                                                            if ($numrows3 == TRUE) {
                                                                                                                                while ($row3 = mysqli_fetch_array($res3)) {
                                                                                                                                    if ($row3[3] == "ADMIN") {
                                                                                                                                        $img = "admin/assets/images/profile2.png";
                                                                                                                                    } else {
                                                                                                                                        $img = "admin/assets/images/profile4.png";
                                                                                                                                    }

                                                                                                                                    echo "<div class='reviews_comment_box'>
	                        <div class='comment_thmb'>
	                            <img src='../" . $img . "' alt='' style='height: 40px;'>
	                        </div>
	                        <div class='comment_text'>
	                            <div class='reviews_meta'>
	                                <div class='star_rating'>
	                                    <ul>";
                                                                                                                                    $test3 = explode(".", $row3[1]);
                                                                                                                                    for ($i = 1; $i <= $test3[0]; $i++) {
                                                                                                                                        echo "<li><a href='javascript:void(0)'><i class='fa fa-star'></i></a></li>";
                                                                                                                                    }
                                                                                                                                    if ($test3[1] > 0) {
                                                                                                                                        echo "<li><a href='javascript:void(0)'><i class='fa fa-star-half-o'></i></a></li>";
                                                                                                                                    }
                                                                                                                                    $extrastar2 = 5 - $row3[1];
                                                                                                                                    $test4 = explode(".", $extrastar2);
                                                                                                                                    for ($i = 1; $i <= $test4[0]; $i++) {
                                                                                                                                        echo "<li><a href='javascript:void(0)' style='color:#feb9545c;'><i class='fa fa-star'></i></a></li>";
                                                                                                                                    }
                                                                                                                                    echo "</ul>
	                                </div>
	                                <p><strong>" . $row3[2] . "</strong> - " . date('F d, Y', strtotime($row3[4])) . "</p>
	                                <span>" . $row3[0] . "</span>
	                            </div>
	                        </div>
	                    </div>";
                                                                                                                                }
                                                                                                                            }

                                                                                                                            // SELLER
                                                                                                                            $getseller = mysqli_fetch_array(mysqli_query($connection, "SELECT user_id, CASE WHEN middlename = '' OR middlename IS NULL THEN CONCAT(lastname, ', ', firstname) ELSE CONCAT(lastname, ', ', firstname, ' ', LEFT(middlename, '1'), '.') END FROM users_table WHERE user_id = '" . $productdet[14] . "';"));

                                                                                                                            echo "|" . $getseller[0] . "|" . $getseller[1];


                                                                                                                            $productdet2 = mysqli_fetch_array(mysqli_query($connection, "SELECT quantity FROM products WHERE product_id = '" . $_POST['product_id'] . "';"));
                                                                                                                            echo  "|" . $productdet2[0];
                                                                                                                            break;

                                                                                                                        case 'checkifloggedin':
                                                                                                                            if ($_SESSION['user_id'] == "") {
                                                                                                                                echo 1;
                                                                                                                            } else {
                                                                                                                                echo 2;
                                                                                                                            }
                                                                                                                            break;

                                                                                                                        case 'btnsubmitsavecomment':
                                                                                                                            $submitcomment = mysqli_query($connection, "INSERT INTO rate SET user_id = '" . $_SESSION['user_id'] . "', product_id = '" . $_POST['textmdlprodID'] . "', rate = '" . $_POST['textmdlprodnumberofrating'] . "', comment = '" . $_POST['textmdlprodinputcomment'] . "', date_added = '" . date("Y-m-d") . "';");

                                                                                                                            if ($submitcomment == TRUE) {

                                                                                                                                // RATES
                                                                                                                                echo "<ul>";
                                                                                                                                $getaverate = mysqli_fetch_array(mysqli_query($connection, "SELECT AVG(rate) FROM rate WHERE product_id = '" . $_POST['textmdlprodID'] . "';"));
                                                                                                                                $test = explode(".", $getaverate[0]);
                                                                                                                                for ($i = 1; $i <= $test[0]; $i++) {
                                                                                                                                    echo "<li><a href='javascript:void(0)'><i class='fa fa-star'></i></a></li>";
                                                                                                                                }
                                                                                                                                if ($test[1] > 0) {
                                                                                                                                    echo "<li><a href='javascript:void(0)'><i class='fa fa-star-half-o'></i></a></li>";
                                                                                                                                }
                                                                                                                                $extrastar = 5 - $getaverate[0];
                                                                                                                                $test2 = explode(".", $extrastar);
                                                                                                                                for ($i = 1; $i <= $test2[0]; $i++) {
                                                                                                                                    echo "<li><a href='javascript:void(0)' style='color:#feb9545c;'><i class='fa fa-star'></i></a></li>";
                                                                                                                                }
                                                                                                                                echo "</ul>";

                                                                                                                                echo "|";

                                                                                                                                $res3 = mysqli_query($connection, "SELECT a.comment, a.rate, CASE WHEN b.middlename = '' OR b.middlename IS NULL THEN CONCAT(b.lastname, ', ', b.firstname) ELSE CONCAT(b.lastname, ', ', b.firstname, ' ', LEFT(b.middlename, '1'), '.') END, b.usertype, a.date_added FROM rate AS a LEFT JOIN users_table AS b ON a.user_id = b.user_id WHERE a.product_id = '" . $_POST['textmdlprodID'] . "' ORDER BY a.id ASC");
                                                                                                                                $numrows3 = mysqli_num_rows($res3);
                                                                                                                                if ($numrows3 == TRUE) {
                                                                                                                                    while ($row3 = mysqli_fetch_array($res3)) {
                                                                                                                                        if ($row3[3] == "ADMIN") {
                                                                                                                                            $img = "admin/assets/images/profile2.png";
                                                                                                                                        } else {
                                                                                                                                            $img = "admin/assets/images/profile4.png";
                                                                                                                                        }

                                                                                                                                        echo "<div class='reviews_comment_box'>
		                        <div class='comment_thmb'>
		                            <img src='../" . $img . "' alt='' style='height: 40px;'>
		                        </div>
		                        <div class='comment_text'>
		                            <div class='reviews_meta'>
		                                <div class='star_rating'>
		                                    <ul>";
                                                                                                                                        $test3 = explode(".", $row3[1]);
                                                                                                                                        for ($i = 1; $i <= $test3[0]; $i++) {
                                                                                                                                            echo "<li><a href='javascript:void(0)'><i class='fa fa-star'></i></a></li>";
                                                                                                                                        }
                                                                                                                                        if ($test3[1] > 0) {
                                                                                                                                            echo "<li><a href='javascript:void(0)'><i class='fa fa-star-half-o'></i></a></li>";
                                                                                                                                        }
                                                                                                                                        $extrastar2 = 5 - $row3[1];
                                                                                                                                        $test4 = explode(".", $extrastar2);
                                                                                                                                        for ($i = 1; $i <= $test4[0]; $i++) {
                                                                                                                                            echo "<li><a href='javascript:void(0)' style='color:#feb9545c;'><i class='fa fa-star'></i></a></li>";
                                                                                                                                        }
                                                                                                                                        echo "</ul>
		                                </div>
		                                <p><strong>" . $row3[2] . "</strong> - " . date('F d, Y', strtotime($row3[4])) . "</p>
		                                <span>" . $row3[0] . "</span>
		                            </div>
		                        </div>
		                    </div>";
                                                                                                                                    }
                                                                                                                                }
                                                                                                                            }
                                                                                                                            break;

                                                                                                                        case 'btnsaveaddtocart':
                                                                                                                            $subtotal = $_POST['textmdlprodquantity'] * $_POST['textmdlprodprice'];

                                                                                                                            $genID = generateID($connection, 'cart_id', 'cart', 'CART');


                                                                                                                            $res = mysqli_query($connection, "SELECT * FROM cart WHERE customer_id = '" . $_SESSION['user_id'] . "' AND product_id = '" . $_POST['textmdlprodID'] . "';");
                                                                                                                            $numrows = mysqli_num_rows($res);
                                                                                                                            if ($numrows == TRUE) {
                                                                                                                                $row = mysqli_fetch_array($res);

                                                                                                                                $quantity = $_POST['textmdlprodquantity'] + $row['quantity'];
                                                                                                                                $totalamt = $_POST['textmdlprodprice'] * $quantity;

                                                                                                                                $submitcart = mysqli_query($connection, "UPDATE cart SET quantity = '" . $quantity . "',  totalamt = '" . $subtotal . "' WHERE customer_id = '" . $_SESSION['user_id'] . "' AND product_id = '" . $_POST['textmdlprodID'] . "';");
                                                                                                                            } else {

                                                                                                                                $submitcart = mysqli_query($connection, "INSERT INTO cart SET cart_id = '" . $genID . "', customer_id = '" . $_SESSION['user_id'] . "', product_id = '" . $_POST['textmdlprodID'] . "', quantity = '" . $_POST['textmdlprodquantity'] . "', price = '" . $_POST['textmdlprodprice'] . "', totalamt = '" . $subtotal . "', status = '0', date_added = '" . date("Y-m-d") . "';");
                                                                                                                            }



                                                                                                                            break;

                                                                                                                        case 'fncdisplaybuynowproddet':
                                                                                                                            // CUSTOMER
                                                                                                                            $getcustomer = mysqli_fetch_array(mysqli_query($connection, "SELECT CASE WHEN middlename = '' OR middlename IS NULL THEN CONCAT(lastname, ', ', firstname) ELSE CONCAT(lastname, ', ', firstname, ' ', LEFT(middlename, '1'), '.') END FROM users_table WHERE user_id = '" . $_SESSION['user_id'] . "';"));

                                                                                                                            $getcustomerdet = mysqli_fetch_array(mysqli_query($connection, "SELECT contactnum, address FROM user_details WHERE user_id = '" . $_SESSION['user_id'] . "';"));

                                                                                                                            echo $getcustomer[0] . "|" . $getcustomerdet[0] . "|" . $getcustomerdet[1] . "|";

                                                                                                                            $getproductdet = mysqli_fetch_array(mysqli_query($connection, "SELECT productname, price FROM products WHERE product_id = '" . $_POST['textmdlprodID'] . "';"));

                                                                                                                            $subprodtotal = $_POST['textmdlprodquantity'] * $getproductdet[1];

                                                                                                                            echo $getproductdet[0] . "|" . number_format($getproductdet[1], "2", ".", ",") . "|" . number_format($subprodtotal, "2", ".", ",") . "|";

                                                                                                                            if ($_POST['textmdlprodquantity'] >= 1 && $_POST['textmdlprodquantity'] <= 3) {
                                                                                                                                $shippingfee = 0;
                                                                                                                                echo number_format($shippingfee, "2", ".", ",");
                                                                                                                            } else if ($_POST['textmdlprodquantity'] >= 4 && $_POST['textmdlprodquantity'] <= 6) {
                                                                                                                                $shippingfee = 0;
                                                                                                                                echo number_format($shippingfee, "2", ".", ",");
                                                                                                                            } else if ($_POST['textmdlprodquantity'] >= 7 && $_POST['textmdlprodquantity'] <= 9) {
                                                                                                                                $shippingfee = 0;
                                                                                                                                echo number_format($shippingfee, "2", ".", ",");
                                                                                                                            } else if ($_POST['textmdlprodquantity'] >= 10 && $_POST['textmdlprodquantity'] <= 12) {
                                                                                                                                $shippingfee = 0;
                                                                                                                                echo number_format($shippingfee, "2", ".", ",");
                                                                                                                            } else if ($_POST['textmdlprodquantity'] >= 13 && $_POST['textmdlprodquantity'] <= 15) {
                                                                                                                                $shippingfee = 0;
                                                                                                                                echo number_format($shippingfee, "2", ".", ",");
                                                                                                                            } else if ($_POST['textmdlprodquantity'] >= 16 && $_POST['textmdlprodquantity'] <= 18) {
                                                                                                                                $shippingfee = 0;
                                                                                                                                echo number_format($shippingfee, "2", ".", ",");
                                                                                                                            } else if ($_POST['textmdlprodquantity'] >= 19 && $_POST['textmdlprodquantity'] <= 21) {
                                                                                                                                $shippingfee = 0;
                                                                                                                                echo number_format($shippingfee, "2", ".", ",");
                                                                                                                            } else if ($_POST['textmdlprodquantity'] >= 22 && $_POST['textmdlprodquantity'] <= 24) {
                                                                                                                                $shippingfee = 0;
                                                                                                                                echo number_format($shippingfee, "2", ".", ",");
                                                                                                                            } else if ($_POST['textmdlprodquantity'] >= 25 && $_POST['textmdlprodquantity'] <= 27) {
                                                                                                                                $shippingfee = 0;
                                                                                                                                echo number_format($shippingfee, "2", ".", ",");
                                                                                                                            } else if ($_POST['textmdlprodquantity'] >= 28 && $_POST['textmdlprodquantity'] <= 30) {
                                                                                                                                $shippingfee = 0;
                                                                                                                                echo number_format($shippingfee, "2", ".", ",");
                                                                                                                            }

                                                                                                                            $paymentoveralltotal = $subprodtotal + $shippingfee;

                                                                                                                            echo "|" . number_format($paymentoveralltotal, "2", ".", ",") . "|";

                                                                                                                            $productimage = mysqli_fetch_array(mysqli_query($connection, "SELECT image, imagename FROM products_image WHERE product_id = '" . $_POST['textmdlprodID'] . "' ORDER BY id ASC;"));
                                                                                                                            echo $productimage[0];
                                                                                                                            break;

                                                                                                                        case 'btnplaceordercash':
                                                                                                                            // UPDATE QUANTITY IN PRODUCTS
                                                                                                                            $getquantity = mysqli_fetch_array(mysqli_query($connection, "SELECT quantity FROM products WHERE product_id = '" . $_POST['product_id'] . "';"));
                                                                                                                            $totalquantity = $getquantity[0] - $_POST['productQuantity'];

                                                                                                                            $updateproductqty = mysqli_query($connection, "UPDATE products SET quantity = '" . $totalquantity . "' WHERE product_id = '" . $_POST['product_id'] . "';");

                                                                                                                            // SAVE IN ORDERS
                                                                                                                            $genID = generateID($connection, 'order_id', 'orders', 'OR');

                                                                                                                            $placeorder = mysqli_query($connection, "INSERT INTO orders SET order_id = '" . $genID . "', customer_id = '" . $_SESSION['user_id'] . "', product_id = '" . $_POST['product_id'] . "', quantity = '" . $_POST['productQuantity'] . "', price = '" . $_POST['productPrice'] . "', shipfee = '" . $_POST['ProductShipping'] . "', totalamt = '" . $_POST['Producttotalamount'] . "', paymenttype = '" . $_POST['productpaymentmeth'] . "', orderstatus = 'PENDING', deliverystat = 'PENDING', paymentstat = 'PENDING', date_added = '" . date("Y-m-d") . "';");
                                                                                                                            //SAVE IN PAYMENT
                                                                                                                            $genID2 = generateID($connection, 'payment_id', 'payments', 'PAY');
                                                                                                                            $placeorder = mysqli_query($connection, "INSERT INTO payments SET payment_id = '" . $genID2 . "', paymenttype = '" . $_POST['productpaymentmeth'] . "', order_id = '" . $genID . "', amount = '" . $_POST['Producttotalamount'] . "', status = 'PENDING', date_added = '" . date("Y-m-d") . "';");
                                                                                                                            break;

                                                                                                                        case 'btnplaceordergcash':
                                                                                                                            // UPDATE QUANTITY IN PRODUCTS
                                                                                                                            $getquantity = mysqli_fetch_array(mysqli_query($connection, "SELECT quantity FROM products WHERE product_id = '" . $_POST['product_id'] . "';"));
                                                                                                                            $totalquantity = $getquantity[0] - $_POST['productQuantity'];

                                                                                                                            $updateproductqty = mysqli_query($connection, "UPDATE products SET quantity = '" . $totalquantity . "' WHERE product_id = '" . $_POST['product_id'] . "';");

                                                                                                                            // SAVE IN ORDERS
                                                                                                                            $genID = generateID($connection, 'order_id', 'orders', 'OR');

                                                                                                                            $orderstatus2 = date('Y-m-d h:i:s');

                                                                                                                            $placeorder = mysqli_query($connection, "INSERT INTO orders SET order_id = '" . $genID . "', customer_id = '" . $_SESSION['user_id'] . "', product_id = '" . $_POST['product_id'] . "', quantity = '" . $_POST['productQuantity'] . "', price = '" . $_POST['productPrice'] . "', shipfee = '" . $_POST['ProductShipping'] . "', totalamt = '" . $_POST['Producttotalamount'] . "', paymenttype = '" . $_POST['productpaymentmeth'] . "', orderstatus = 'TOPAY', deliverystat = 'PENDING', paymentstat = 'FORAPPROVAL', date_added = '" . date("Y-m-d") . "', orderstatus2 = '" . $orderstatus2 . "';");
                                                                                                                            //SAVE IN PAYMENT
                                                                                                                            $genID2 = generateID($connection, 'payment_id', 'payments', 'PAY');
                                                                                                                            $placeorder = mysqli_query($connection, "INSERT INTO payments SET payment_id = '" . $genID2 . "', paymenttype = '" . $_POST['productpaymentmeth'] . "', order_id = '" . $genID . "', amount = '" . $_POST['Producttotalamount'] . "', refnumber = '" . $_POST['textpaymentmethrefnum'] . "', status = 'FORAPPROVAL', date_added = '" . date("Y-m-d") . "';");

                                                                                                                            echo $genID2;
                                                                                                                            break;

                                                                                                                        case 'fncloadpaymentgcashmodal':
                                                                                                                            $productdet = mysqli_fetch_array(mysqli_query($connection, "SELECT seller_id FROM products WHERE product_id = '" . $_POST['product_id'] . "';"));

                                                                                                                            $getseller = mysqli_fetch_array(mysqli_query($connection, "SELECT seller_id, bankholdername, banknumber FROM paymethod WHERE seller_id = '" . $productdet[0] . "';"));

                                                                                                                            echo $getseller[1] . "|" . $getseller[2] . "|" . $getseller[3];
                                                                                                                            break;

                                                                                                                        case 'sendchattoseller':
                                                                                                                            $sendchattoseller = mysqli_query($connection, "INSERT INTO chats SET user_id = '" . $_SESSION['user_id'] . "', message = '" . $_POST['textsendchatmessage'] . "', sendto = '" . $_POST['shopseller_id'] . "', product_id = '" . $_POST['product_idmessage'] . "';");
                                                                                                                            break;

                                                                                                                        case 'checkquantityindb':
                                                                                                                            $getquantity = mysqli_fetch_array(mysqli_query($connection, "SELECT quantity FROM products WHERE product_id = '" . $_POST['textmdlprodID'] . "';"));

                                                                                                                            if ($_POST['textmdlprodquantity'] <= $getquantity[0]) {
                                                                                                                                echo 1;
                                                                                                                            } else {
                                                                                                                                echo 2;
                                                                                                                            }
                                                                                                                            break;
                                                                                                                    }
                                                                                                                                ?>