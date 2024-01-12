<?php
include("../connect.php");
session_start();

switch ($_POST['form']) {

	case 'displayorderslist':
		if ($_POST['srchprod'] != '') {
			$searchuseracc = "AND (a.order_id LIKE '%" . $_POST['srchprod'] . "%')";
		} else {
			$searchuseracc = "";
		}

		if ($_POST['orderstat'] != '') {
			$orderstat = "AND a.orderstatus = '" . $_POST['orderstat'] . "'";
		} else {
			$orderstat = "";
		}

		if ($_POST['datefrom'] != "" && $_POST['dateto'] == "") {
			$DateFilter = "AND DATE(a.date_added) = '" . date('Y-m-d', strtotime($_POST['datefrom'])) . "'";
		} else if ($_POST['datefrom'] == "" && $_POST['dateto'] != "") {
			$DateFilter = "AND DATE(a.date_added) = '" . date('Y-m-d', strtotime($_POST['dateto'])) . "'";
		} else if ($_POST['datefrom'] != "" && $_POST['dateto'] != "") {
			$DateFilter = "AND DATE(a.date_added) BETWEEN '" . date('Y-m-d', strtotime($_POST['datefrom'])) . "' AND '" . date('Y-m-d', strtotime($_POST['dateto'])) . "'";
		} else {
			$DateFilter = "";
		}

		$counter = 0;
		$page = $_POST["page"];
		$limit = ($page - 1) * 10;
		$res = mysqli_query($connection, "SELECT a.order_id, CASE WHEN b.middlename = '' OR b.middlename IS NULL THEN CONCAT(b.firstname, ' ', b.lastname) ELSE CONCAT(b.firstname, ' ', LEFT(b.middlename, '1'), '. ', b.lastname, '') END, CASE WHEN d.middlename = '' OR d.middlename IS NULL THEN CONCAT(d.firstname, ' ', d.lastname) ELSE CONCAT(d.firstname, ' ', LEFT(d.middlename, '1'), '. ',d.lastname , '') END, c.productname, a.quantity, a.price, a.totalamt, a.orderstatus, a.paymentstat, a.product_id, a.customer_id FROM orders AS a LEFT JOIN users_table AS b ON a.customer_id = b.user_id LEFT JOIN products AS c ON a.product_id = c.product_id LEFT JOIN users_table AS d ON c.seller_id = d.user_id WHERE c.seller_id = '" . $_SESSION['user_id'] . "' " . $searchuseracc . " " . $orderstat . " " . $DateFilter . " ORDER BY a.order_id ASC LIMIT " . $limit . ",10");
		$numrows = mysqli_num_rows($res);
		if ($numrows == TRUE) {
			while ($row = mysqli_fetch_array($res)) {

				$counter++;

				if ($row[7] == "PENDING") {
					$orderstatus = "<span class='label label-light-danger'>Pending</span>";
				} elseif ($row[7] == "TOPAY") {
					$orderstatus = "<span class='label label-light-danger'>To Pay</span>";
				} elseif ($row[7] == "TOSHIP") {
					$orderstatus = "<span class='label label-light-success'>To Ship</span>";
				} elseif ($row[7] == "TODELIVER") {
					$orderstatus = "<span class='label label-light-success'>For Delivery</span>";
				} else {
					$orderstatus = "<span class='label label-light-success'>Completed</span>";
				}

				if ($row[8] == "PENDING") {
					$paymentstatus = "<span class='label label-light-danger'>Pending</span>";
				} elseif ($row[8] == "FORAPPROVAL") {
					$paymentstatus = "<span class='label label-light-danger'>For Approval</span>";
				} else {
					$paymentstatus = "<span class='label label-light-success'>Paid</span>";
				}

				echo "<tr style='cursor:pointer;'>
							<td style='white-space: nowrap; text-align: center;'>" . $counter . "</td>
							<td style='white-space: nowrap;'>" . $row[0] . "</td>
	                        <td style='white-space: nowrap;'>" . $row[1] . "</td>
	                        <td style='white-space: nowrap;'>" . $row[2] . "</td>
	                        <td style='white-space: nowrap;'>" . $row[4] . "<span style='font-size:11px'>X</span> " . $row[3] . "</td>
	                        <td style='white-space: nowrap;'>" . number_format($row[5], "2", ".", ",") . "</td>
	                        <td style='white-space: nowrap;'>" . number_format($row[6], "2", ".", ",") . "</td>
	                        <td style='white-space: nowrap;'>" . $orderstatus . "</td>
	                        <td style='white-space: nowrap;'>" . $paymentstatus . "</td>
	                        <td style='white-space: nowrap; text-align: center;'>
	                        	<i class='fas fa-eye fa-lg' style='cursor:pointer;' onclick='modalopenorderdet(\"" . $row[9] . "\", \"" . $row[0] . "\", \"" . $row[10] . "\")' title='Edit Branch'></i>
	                        </td>
	                    </tr>";
			}
			echo "|" . $counter;
		} else {
			echo "<tr><td  colspan='12' style='text-align:center'>No Record Found . . .</td></tr>";
		}
		break;

	case "loadorderslistPagination":
		if ($_POST['srchprod'] != '') {
			$searchuseracc = "AND (a.order_id LIKE '%" . $_POST['srchprod'] . "%')";
		} else {
			$searchuseracc = "";
		}

		if ($_POST['orderstat'] != '') {
			$orderstat = "AND a.orderstatus = '" . $_POST['orderstat'] . "'";
		} else {
			$orderstat = "";
		}

		if ($_POST['datefrom'] != "" && $_POST['dateto'] == "") {
			$DateFilter = "AND DATE(a.date_added) = '" . date('Y-m-d', strtotime($_POST['datefrom'])) . "'";
		} else if ($_POST['datefrom'] == "" && $_POST['dateto'] != "") {
			$DateFilter = "AND DATE(a.date_added) = '" . date('Y-m-d', strtotime($_POST['dateto'])) . "'";
		} else if ($_POST['datefrom'] != "" && $_POST['dateto'] != "") {
			$DateFilter = "AND DATE(a.date_added) BETWEEN '" . date('Y-m-d', strtotime($_POST['datefrom'])) . "' AND '" . date('Y-m-d', strtotime($_POST['dateto'])) . "'";
		} else {
			$DateFilter = "";
		}

		$page = $_POST["page"];
		$rowCount = mysqli_fetch_row(mysqli_query($connection, "SELECT COUNT(a.id) FROM orders AS a LEFT JOIN users_table AS b ON a.customer_id = b.user_id LEFT JOIN products AS c ON a.product_id = c.product_id LEFT JOIN users_table AS d ON c.seller_id = d.user_id WHERE c.seller_id = '" . $_SESSION['user_id'] . "' " . $searchuseracc . " " . $orderstat . " " . $DateFilter . ";"));
		$rowsperpage = 10;
		$range = 1;
		$totalpages = ceil($rowCount[0] / $rowsperpage);
		$prevpage;
		$nextpage;
		if ($page > 1) {
			echo "<li style='width:50px !important;' onclick='orderlistPageFunc(1)'><< </li>";
			$prevpage = $page - 1;
			echo "<li style='width:70px !important;' onclick='orderlistPageFunc(" . $prevpage . ")'>< </li>";
		}
		for ($x = ($page - $range); $x < (($page + $range) + 1); $x++) {
			if (($x > 0) && ($x <= $totalpages)) {
				if ($x == $page) {
					echo "<li id='pgorderlistPageFunc" . $x . "' class='pgnumorderlistPageFunc active' onclick='orderlistPageFunc(" . $x . "," . $x . ")'>" . $x . "</li>";
					$ex = $x;
				} else {
					echo "<li id='pgorderlistPageFunc" . $x . "' class='pgnumorderlistPageFunc' onclick='orderlistPageFunc(" . $x . "," . $x . ")'>" . $x . "</li>";
					$ex = $x;
				}
			}
		}
		if ($page < ($totalpages - $range)) {
			echo "<li>...</li>";
		}
		if ($page != $totalpages && $rowCount[0] != 0) {
			$nextpage = $page + 1;
			echo "<li style='width:50px !important;' onclick='orderlistPageFunc(" . $nextpage . ", " . $nextpage . ")'> ></li>";
			echo "<li style='width:50px !important;' onclick='orderlistPageFunc(" . $totalpages . ", " . $totalpages . ")'> >></li>";
		}
		echo "|" . $ex;
		break;

	case 'fncdsplyorderinfo':
		// IMAGE
		echo "<div class='row' style='padding-left: 12px; padding-right: 12px;'>";
		$res0 = mysqli_query($connection, "SELECT image, imagename, id FROM products_image WHERE product_id = '" . $_POST['product_id'] . "'");
		$numrows0 = mysqli_num_rows($res0);
		if ($numrows0 == TRUE) {
			while ($row0 = mysqli_fetch_array($res0)) {
				$image = "../" . $row0[0];
				$count++;
				if ($count >= 2) {
					echo "<div class='col-md-4 colimagesize' style='padding: 3px 4px;'>
	                            <img class='card-img-top img-responsive' src='" . $image . "' alt='Card image cap' style='border: 1px solid #f3efea !important;cursor:pointer' onclick='viewvalidIDphoto(\"" . $image . "\")'>
	                        </div>";
				} else {
					echo "<div class='col-md-12 colimagesize' style='padding: 3px 4px;'>
	                            <img class='card-img-top img-responsive' src='" . $image . "' alt='Card image cap' style='border: 1px solid #f3efea !important;cursor:pointer' onclick='viewvalidIDphoto(\"" . $image . "\")'>
	                        </div>";
				}
			}
		} else {
			echo "";
		}
		echo "</div>";
		// END IMAGE


		$proddetails = mysqli_fetch_array(mysqli_query($connection, "SELECT productname FROM products WHERE product_id = '" . $_POST['product_id'] . "';"));

		echo "|" . $proddetails[0] . "|" . $proddetails[1] . "|" . $proddetails[2] . "|" . $proddetails[3] . "|" . $proddetails[4];

		$orderdetails = mysqli_fetch_array(mysqli_query($connection, "SELECT quantity, price, shipfee, totalamt, paymenttype, orderstatus, paymentstat FROM orders WHERE order_id = '" . $_POST['order_id'] . "';"));

		echo "|" . $orderdetails[0] . "|" . number_format($orderdetails[1], "2", ".", ",") . "|" . number_format($orderdetails[2], "2", ".", ",") . "|" . number_format($orderdetails[3], "2", ".", ",") . "|" . $orderdetails[4];

		$customerdetails = mysqli_fetch_array(mysqli_query($connection, "SELECT CASE WHEN a.middlename = '' OR a.middlename IS NULL THEN CONCAT(a.lastname, ', ', a.firstname) ELSE CONCAT(a.lastname, ', ', a.firstname, ' ', LEFT(a.middlename, '1'), '.') END, b.contactnum, b.address, b.latitude, b.longitude FROM users_table AS a LEFT JOIN user_details AS b ON a.user_id = b.user_id WHERE a.user_id = '" . $_POST['customer_id'] . "';"));

		echo "|" . $customerdetails[0] . "|" . $customerdetails[1] . "|" . $customerdetails[2] . "|" . $customerdetails[3] . "|" . $customerdetails[4];






		echo "|";

		if ($orderdetails[5] == "PENDING" && $orderdetails[4] == "CASH" || $orderdetails[5] == "PENDING" && $orderdetails[4] == "COP") {
			echo "<button type='button' class='btn waves-effect waves-light btn-dark float-right' onclick='pendingapprove(\"" . $_POST['order_id'] . "\")'>APPROVE ORDER</button>";
		} elseif ($orderdetails[5] == "TOPAY") {
			echo "<button type='button' class='btn waves-effect waves-light btn-dark float-right' onclick='topayapprove(\"" . $_POST['order_id'] . "\", \"" . $orderdetails[6] . "\")'>APPROVE ORDER</button>";
		} elseif ($orderdetails[5] == "TOSHIP") {

			echo "<button type='button' class='btn waves-effect waves-light btn-dark float-right' onclick='toshipapprove(\"" . $_POST['order_id'] . "\")'>READY TO DELIVER</button>";
		} elseif ($orderdetails[5] == "TODELIVER") {
			echo "<button type='button' class='btn waves-effect waves-light btn-dark float-right' onclick='todeliverapprove(\"" . $_POST['order_id'] . "\")'>COMPLETE ORDER</button>";
		}

		echo "|";

		$paymentdetails = mysqli_fetch_array(mysqli_query($connection, "SELECT refnumber, image FROM payments WHERE order_id = '" . $_POST['order_id'] . "';"));
		echo $paymentdetails[0] . "|";

		$image2 = "../" . $paymentdetails[1];
		echo "<div class='col-md-12 colimagesize' style='padding: 3px 0px;'>
                        <img class='card-img-top img-responsive' src='" . $image2 . "' alt='Card image cap' style='border: 1px solid #f3efea !important;cursor:pointer' onclick='viewvalidIDphoto(\"" . $image2 . "\")'>
                    </div>";

		$orderdetails2 = mysqli_fetch_array(mysqli_query($connection, "SELECT orderstatus, orderstatus2, paymenttype, courier, trackingnumber FROM orders WHERE order_id = '" . $_POST['order_id'] . "';"));

		$explode = explode(',', $orderdetails2[1]);

		echo "|" . $orderdetails2[0] . "|" . $explode[0] . "|" . $explode[1] . "|" . $explode[2] . "|" . $explode[3] . "|" . 'Courier: ' . $orderdetails2[3] . "|" . 'Tracking Number: ' . $orderdetails2[4];




		break;

	case 'pendingapprove':

		$orderstatus2 = ',' . date('Y-m-d h:i:s');
		$row = mysqli_fetch_array(mysqli_query($connection, "SELECT orderstatus2 FROM orders WHERE order_id = '" . $_POST['order_id'] . "';"));

		$orderstatus2 = $row['orderstatus2'] . $orderstatus2;

		$pendingapprove = mysqli_query($connection, "UPDATE orders SET orderstatus = 'TOSHIP', orderstatus2 = '" . $orderstatus2 . "' WHERE order_id = '" . $_POST['order_id'] . "'");
		break;

	case 'topayapprove':

		$orderstatus2 = ',' . date('Y-m-d h:i:s');
		$row = mysqli_fetch_array(mysqli_query($connection, "SELECT orderstatus2 FROM orders WHERE order_id = '" . $_POST['order_id'] . "';"));

		$orderstatus2 = $row['orderstatus2'] . $orderstatus2;

		$topayapprove = mysqli_query($connection, "UPDATE orders SET orderstatus = 'TOSHIP', orderstatus2 = '" . $orderstatus2 . "' WHERE order_id = '" . $_POST['order_id'] . "'");
		break;

		// case 'toshipapprove':

		// 	$orderstatus2 = ',' . date('Y-m-d h:i:s');
		// 	$row = mysqli_fetch_array(mysqli_query($connection, "SELECT orderstatus2 FROM orders WHERE order_id = '" . $_POST['order_id'] . "';"));

		// 	$orderstatus2 = $row['orderstatus2'] . $orderstatus2;

		// 	$trackingnumber = uniqid(10);

		// 	$courier = $_POST['courier'];
		// 	$trackingnumber = $_POST['trackingnumber'];

		// 	$toshipapprove = mysqli_query($connection, "UPDATE orders SET orderstatus = 'TODELIVER', deliverystat = 'TODELIVER', orderstatus2 = '" . $orderstatus2 . "', courier = '" . $courier . "', trackingnumber = '" . $trackingnumber . "' WHERE order_id = '" . $_POST['order_id'] . "'");
		// 	break;

		// case 'toshipapprove':
		// 	$orderstatus2 = ',' . date('Y-m-d h:i:s');
		// 	$row = mysqli_fetch_array(mysqli_query($connection, "SELECT orderstatus2, courier, trackingnumber FROM orders WHERE order_id = '" . $_POST['order_id'] . "';"));

		// 	$orderstatus2 = $row['orderstatus2'] . $orderstatus2;

		// 	// Check if courier and tracking number are already present
		// 	if (empty($row['courier']) && empty($row['trackingnumber'])) {
		// 		// If not present, proceed with adding courier and tracking number
		// 		$trackingnumber = uniqid(10);
		// 		$courier = $_POST['courier'];
		// 		$trackingnumber = $_POST['trackingnumber'];

		// 		$toshipapprove = mysqli_query($connection, "UPDATE orders SET orderstatus = 'TODELIVER', deliverystat = 'TODELIVER', orderstatus2 = '" . $orderstatus2 . "', courier = '" . $courier . "', trackingnumber = '" . $trackingnumber . "' WHERE order_id = '" . $_POST['order_id'] . "'");
		// 	} else {
		// 		// If already present, proceed to the next step (complete order)
		// 		$todeliverapprove = mysqli_query($connection, "UPDATE orders SET orderstatus = 'COMPLETED', deliverystat = 'COMPLETED', paymentstat = 'PAID', orderstatus2 = '" . $orderstatus2 . "' WHERE order_id = '" . $_POST['order_id'] . "'");
		// 		$todeliverapprove2 = mysqli_query($connection, "UPDATE payments SET status = 'PAID' WHERE order_id = '" . $_POST['order_id'] . "'");
		// 	}
		// 	break;

	case 'toshipapprove':
		$orderstatus2 = ',' . date('Y-m-d h:i:s');
		$row = mysqli_fetch_array(mysqli_query($connection, "SELECT orderstatus2, courier, trackingnumber FROM orders WHERE order_id = '" . $_POST['order_id'] . "';"));

		$orderstatus2 = $row['orderstatus2'] . $orderstatus2;

		// Check if courier and tracking number are already present
		if (empty($row['courier']) && empty($row['trackingnumber'])) {
			// If not present, proceed with adding courier and tracking number
			$trackingnumber = uniqid(10);
			$courier = $_POST['courier'];
			$trackingnumber = $_POST['trackingnumber'];

			$toshipapprove = mysqli_query($connection, "UPDATE orders SET orderstatus = 'TOSHIP', deliverystat = 'TOSHIP', orderstatus2 = '" . $orderstatus2 . "', courier = '" . $courier . "', trackingnumber = '" . $trackingnumber . "' WHERE order_id = '" . $_POST['order_id'] . "'");

			// Approve the payment here
			$paymentapprove = mysqli_query($connection, "UPDATE payments SET status = 'PAID' WHERE order_id = '" . $_POST['order_id'] . "'");
		} else {
			// If already present, proceed to the next step (complete order)
			$todeliverapprove = mysqli_query($connection, "UPDATE orders SET orderstatus = 'COMPLETED', deliverystat = 'COMPLETED', paymentstat = 'PAID', orderstatus2 = '" . $orderstatus2 . "' WHERE order_id = '" . $_POST['order_id'] . "'");
			$todeliverapprove2 = mysqli_query($connection, "UPDATE payments SET status = 'PAID' WHERE order_id = '" . $_POST['order_id'] . "'");
		}
		break;



	case 'todeliverapprove':

		$orderstatus2 = ',' . date('Y-m-d h:i:s');
		$row = mysqli_fetch_array(mysqli_query($connection, "SELECT orderstatus2 FROM orders WHERE order_id = '" . $_POST['order_id'] . "';"));

		$orderstatus2 = $row['orderstatus2'] . $orderstatus2;

		$todeliverapprove = mysqli_query($connection, "UPDATE orders SET orderstatus = 'COMPLETED', deliverystat = 'COMPLETED', paymentstat = 'PAID', orderstatus2 = '" . $orderstatus2 . "' WHERE order_id = '" . $_POST['order_id'] . "'");
		$todeliverapprove2 = mysqli_query($connection, "UPDATE payments SET status = 'PAID' WHERE order_id = '" . $_POST['order_id'] . "'");
		break;
}
