<?php
include("connect.php");
session_start();
if (empty($_SESSION['user_id']) || $_SESSION['usertype'] !== 'CUSTOMER') {
	echo "<script> window.location = '../buyer/login.php';</script>";
	exit(); // Add exit to stop further execution of the script
}

function calculateShippingFee($quantity)
{
	// Replace this logic with your actual shipping fee calculation
	// For this example, charge 3 pesos per quantity
	$shippingFeePerQuantity = 3;
	return $quantity * $shippingFeePerQuantity;
}
switch ($_POST['form']) {

	case 'fncdsplylistofcart':
		$count = 0;
		$res = mysqli_query($connection, "SELECT cart_id, product_id, quantity, price, totalamt FROM cart WHERE customer_id = '" . $_SESSION['user_id']  . "' AND status = '0'");
		$numrows = mysqli_num_rows($res);
		if ($numrows == TRUE) {
			while ($row = mysqli_fetch_array($res)) {
				$count++;
				$getproduct = mysqli_fetch_array(mysqli_query($connection, "SELECT productname FROM products WHERE product_id = '" . $row[1] . "';"));
				$getproductimage = mysqli_fetch_array(mysqli_query($connection, "SELECT image FROM products_image WHERE product_id = '" . $row[1] . "';"));

				echo "<tr>
                            <td class='product_remove'>
                                <a href='javascript:void(0)' onclick='deletecart(\"" . $row[0] . "\")'><i class='fa fa-trash-o'></i></a>
                            </td>
                            <td class='product_thumb'>
                            	<a href='javascript:void(0)'><img src='../" . $getproductimage[0] . "' alt=''></a>
                            </td>
                            <td class='product_name'>
                                <a href='javascript:void(0)' title='quick view' onclick='openproductdetails'>" . $getproduct[0] . "</a>
                            </td>
                            <td class='product-price1'>₱ <span id='txtcartprice" . $count . "'>" . number_format($row[3], "2", ".", ",") . "</span></td>
                            <td class='product_quantity'>
                                <label>Quantity</label>
                                <input class='focus' min='1' max='100' value='" . $row[2] . "' type='number' id='txtcartquantity" . $count . "' onkeyup='computetotalamt(\"" . $count . "\");quantityvalidation(\"" . $count . "\", \"" . $row[1] . "\")' onchange='computetotalamt(\"" . $count . "\");quantityvalidation(\"" . $count . "\", \"" . $row[1] . "\");'>
                            </td>
                            <td class='product_total'>₱ <span id='txtcarttotalamount" . $count . "'>" . number_format($row[4], "2", ".", ",") . "</span></td>
                            <td class='product_total'>
                                <a href='javascript:void(0)' class='tablebuttonneed' onclick='openproductbuynowdet(\"" . $count . "\", \"" . $row[1] . "\", \"" . $row[0] . "\")'>Buy Now</a>
                            </td>
                        </tr>";
			}
		} else {
			echo "<tr><td  colspan='12' style='text-align:center'>No Record Found . . .</td></tr>";
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
			$shippingfee = 475;
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

		$genID = generateID($connection, 'order_id', 'orders', 'OR');


		$orderstatus2 = date('Y-m-d h:i:s');

		$placeorder = mysqli_query($connection, "INSERT INTO orders SET order_id = '" . $genID . "', customer_id = '" . $_SESSION['user_id'] . "', product_id = '" . $_POST['product_id'] . "', quantity = '" . $_POST['productQuantity'] . "', price = '" . $_POST['productPrice'] . "', shipfee = '" . $_POST['ProductShipping'] . "', totalamt = '" . $_POST['Producttotalamount'] . "', paymenttype = '" . $_POST['productpaymentmeth'] . "', orderstatus = 'PENDING', deliverystat = 'PENDING', paymentstat = 'PENDING', cart_id = '" . $_POST['cart_id'] . "', date_added = '" . date("Y-m-d") . "', orderstatus2 = '" . $orderstatus2 . "';");

		$genID2 = generateID($connection, 'payment_id', 'payments', 'PAY');
		$placeorder = mysqli_query($connection, "INSERT INTO payments SET payment_id = '" . $genID2 . "', paymenttype = '" . $_POST['productpaymentmeth'] . "', order_id = '" . $genID . "', amount = '" . $_POST['Producttotalamount'] . "', status = 'PENDING', date_added = '" . date("Y-m-d") . "';");

		$updatecart = mysqli_query($connection, "UPDATE cart SET status = '1' WHERE cart_id = '" . $_POST['cart_id'] . "';");
		break;

	case 'btnplaceordergcash':
		// UPDATE QUANTITY IN PRODUCTS
		$getquantity = mysqli_fetch_array(mysqli_query($connection, "SELECT quantity FROM products WHERE product_id = '" . $_POST['product_id'] . "';"));
		$totalquantity = $getquantity[0] - $_POST['productQuantity'];

		$updateproductqty = mysqli_query($connection, "UPDATE products SET quantity = '" . $totalquantity . "' WHERE product_id = '" . $_POST['product_id'] . "';");

		$genID = generateID($connection, 'order_id', 'orders', 'OR');

		$orderstatus2 = date('Y-m-d h:i:s');

		$placeorder = mysqli_query($connection, "INSERT INTO orders SET order_id = '" . $genID . "', customer_id = '" . $_SESSION['user_id'] . "', product_id = '" . $_POST['product_id'] . "', quantity = '" . $_POST['productQuantity'] . "', price = '" . $_POST['productPrice'] . "', shipfee = '" . $_POST['ProductShipping'] . "', totalamt = '" . $_POST['Producttotalamount'] . "', paymenttype = '" . $_POST['productpaymentmeth'] . "', orderstatus = 'TOPAY', deliverystat = 'PENDING', paymentstat = 'FORAPPROVAL', cart_id = '" . $_POST['cart_id'] . "', date_added = '" . date("Y-m-d") . "', , orderstatus2 = '" . $orderstatus2 . "';");

		$genID2 = generateID($connection, 'payment_id', 'payments', 'PAY');
		$placeorder = mysqli_query($connection, "INSERT INTO payments SET payment_id = '" . $genID2 . "', paymenttype = '" . $_POST['productpaymentmeth'] . "', order_id = '" . $genID . "', amount = '" . $_POST['Producttotalamount'] . "', refnumber = '" . $_POST['textpaymentmethrefnum'] . "', status = 'FORAPPROVAL', date_added = '" . date("Y-m-d") . "';");

		$updatecart = mysqli_query($connection, "UPDATE cart SET status = '1' WHERE cart_id = '" . $_POST['cart_id'] . "';");

		echo $genID2;
		break;

	case 'fncloadpaymentgcashmodal':
		$productdet = mysqli_fetch_array(mysqli_query($connection, "SELECT seller_id FROM products WHERE product_id = '" . $_POST['product_id'] . "';"));

		$getseller = mysqli_fetch_array(mysqli_query($connection, "SELECT seller_id, bankholdername,banknumber FROM paymethod  WHERE seller_id = '" . $productdet[0] . "';"));

		echo $getseller[1] . "|" . $getseller[2] . "|" . $getseller[3];
		break;

	case 'deletecart':
		$deletecart = mysqli_query($connection, "DELETE FROM cart WHERE cart_id = '" . $_POST['cart_id'] . "'");
		break;

	case 'checkquantityindb':
		$getquantity = mysqli_fetch_array(mysqli_query($connection, "SELECT quantity FROM products WHERE product_id = '" . $_POST['textmdlprodID'] . "';"));

		if ($_POST['textmdlprodquantity'] <= $getquantity[0]) {
			echo 1;
		} else {
			echo 2;
		}
		break;

	case 'fncdisplaybuynowproddetall':
		$products = $_POST['products'];

		$overallTotal = 0;
		$output = '';

		// Fetch customer details
		$getcustomer = mysqli_fetch_array(mysqli_query($connection, "SELECT CASE WHEN middlename = '' OR middlename IS NULL THEN CONCAT(lastname, ', ', firstname) ELSE CONCAT(lastname, ', ', firstname, ' ', LEFT(middlename, '1'), '.') END FROM users_table WHERE user_id = '" . $_SESSION['user_id'] . "';"));
		$getcustomerdet = mysqli_fetch_array(mysqli_query($connection, "SELECT contactnum, address FROM user_details WHERE user_id = '" . $_SESSION['user_id'] . "';"));
		echo "Customer Query: " . "SELECT CASE WHEN middlename = '' OR middlename IS NULL THEN CONCAT(lastname, ', ', firstname) ELSE CONCAT(lastname, ', ', firstname, ' ', LEFT(middlename, '1'), '.') END FROM users_table WHERE user_id = '" . $_SESSION['user_id'] . "';";
		echo "Customer Details: " . $getcustomer[0] . "|" . $getcustomerdet[0] . "|" . $getcustomerdet[1] . "|";

		// Escape user input to prevent SQL injection
		$output .= mysqli_real_escape_string($connection, $getcustomer[0]) . "|" . mysqli_real_escape_string($connection, $getcustomerdet[0]) . "|" . mysqli_real_escape_string($connection, $getcustomerdet[1]) . "|";

		foreach ($products as $product) {

			// Fetch product details
			$getproductdet = mysqli_fetch_array(mysqli_query($connection, "SELECT c.cart_id, c.product_id, c.quantity, c.price, c.totalamt, p.productname FROM cart c INNER JOIN products p ON c.product_id = p.product_id AND p.product_id=  '" . $product['textmdlprodID'] . "' WHERE c.customer_id = '" . $_SESSION['user_id'] . "' AND c.status = '0'"));
			echo "Product Query: " . "SELECT c.cart_id, c.product_id, c.quantity, c.price, c.totalamt, p.productname FROM cart c INNER JOIN products p ON c.product_id = p.product_id AND p.product_id=  '" . $product['textmdlprodID'] . "' WHERE c.customer_id = '" . $_SESSION['user_id'] . "' AND c.status = '0'";

			// $getproductdet = mysqli_fetch_array(mysqli_query($connection, "SELECT productname, price FROM products WHERE product_id = '" . $product['textmdlprodID'] . "';"));

			// Calculate shipping fee using the calculateShippingFee function
			$shippingfee = calculateShippingFee($product['textmdlprodquantity']);

			$subprodtotal = $product['textmdlprodquantity'] * $getproductdet['price'];
			$paymentoveralltotal = $subprodtotal + $shippingfee;
			$overallTotal += $paymentoveralltotal;

			// Escape user input to prevent SQL injection
			$output .= mysqli_real_escape_string($connection, $getproductdet['productname']) . "|" . number_format($getproductdet['price'], 2, '.', ',') . "|" . number_format($subprodtotal, 2, '.', ',') . "|";
			$output .= number_format($shippingfee, 2, '.', ',') . "|" . number_format($paymentoveralltotal, 2, '.', ',') . "|";
			echo "Product Details: " . mysqli_real_escape_string($connection, $getproductdet['productname']) . "|" . number_format($getproductdet['price'], 2, '.', ',') . "|" . number_format($subprodtotal, 2, '.', ',') . "|";

			// Fetch product image details
			$productimage = mysqli_fetch_array(mysqli_query($connection, "SELECT image, imagename FROM products_image WHERE product_id = '" . $product['textmdlprodID'] . "' ORDER BY id ASC;"));
			$output .= mysqli_real_escape_string($connection, $productimage['image']) . "|";
		}

		// Echo the overall total and other details
		echo $output . number_format($overallTotal, 2, '.', ',');
		break;
}
