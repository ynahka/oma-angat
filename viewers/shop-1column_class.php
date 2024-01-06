<?php
include("connect.php");
session_start();

switch ($_POST['form']) {

	case 'fncdisplaylistofproducts':
		echo "<script src='assets/js/main.js'></script>";
		echo "<div class='product_area mb-95'>
			        <div class='container'>
			            <div class='row'>
			                <div class='col-12'>
			                </div>
			            </div>
			            <div class='row'>
			                <div class='product_carousel product_column4 owl-carousel'>";
		$shopseller_id = $_POST['shopseller_id'];

		$res = mysqli_query($connection, "SELECT product_id, productname, price, quantity FROM products WHERE seller_id = '$shopseller_id' ORDER BY id ASC");

		$numrows = mysqli_num_rows($res);
		if ($numrows == TRUE) {
			while ($row = mysqli_fetch_array($res)) {

				$productimage = mysqli_fetch_array(mysqli_query($connection, "SELECT image, imagename FROM products_image WHERE product_id = '" . $row[0] . "' ORDER BY id ASC;"));

				echo "<div class='col-3' style='width: 100%;'>
							<div class='product-card'>
			                    <article class='single_product'>
			                        <figure>
			                            <div class='product_thumb'>
		                                    <a href='javascript:void(0)' class='primary_img' href='javascript:void(0)' title='quick view' onclick='openproductdetails(\"" . $row[0] . "\")'>
		                                    	<img src='" . $productimage[0] . "' style='height: 275px; width: 100% !important;'>";
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
		                                <figcaption class='product_content'>
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
		                                    <h6 class='product-name' style='text-align:center'><a href='javascript:void(0)' title='$row[1]' onclick='openproductdetails(\"" . $row[0] . "\")'>" . $row[1] . "</a></h6>
		                                    <div class='price_box'>
		                                        <span class='product-price' style='margin-left: 10px'>Starts at ₱ " . number_format($row[2], "2", ".", ",") . "</span>
		                                    </div>
		                                </figcaption>
			                        </figure>
			                    </article>
			                </div>
		                </div>
		            ";
			}
		} else {
			echo "<tr><td  colspan='12' style='text-align:center'>No Product Found . . .</td></tr>";
		}

		echo "</div>
				        </div>
				    </div>
				</div>";
		break;
	case 'sendchattoseller':
		$user_id = $_SESSION['user_id'];
		$message = mysqli_real_escape_string($connection, $_POST['textsendchatmessage']);
		$sendto = mysqli_real_escape_string($connection, $_POST['textmdlprodsellerID']);

		// Debugging statements
		error_log("user_id: $user_id, message: $message, sendto: $sendto");

		$query = "INSERT INTO chats (user_id, message, sendto) VALUES ('$user_id', '$message', '$sendto')";
		$sendchattoseller = mysqli_query($connection, $query);

		if ($sendchattoseller) {
			// Insertion successful
			echo "Message sent successfully";
		} else {
			// Insertion failed, handle the error
			$error_message = "Error: " . mysqli_error($connection) . " Query: $query";
			error_log($error_message);
			echo "Failed to send message. Please try again.";
		}
		break;
}
