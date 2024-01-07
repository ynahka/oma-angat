<?php
include("connect.php");
session_start();

switch ($_POST['form']) {

    case 'fncdsplylistofcart':
        $count = 0;
        $res = mysqli_query($connection, "SELECT reservation_id, product_id, quantity, price, totalamt, orderstatus FROM reservation WHERE customer_id = '" . $_SESSION['user_id']  . "';");
        $numrows = mysqli_num_rows($res);
        if ($numrows == TRUE) {
            while ($row = mysqli_fetch_array($res)) {
                $count++;
                $getproduct = mysqli_fetch_array(mysqli_query($connection, "SELECT productname FROM products WHERE product_id = '" . $row[1] . "';"));
                $getproductimage = mysqli_fetch_array(mysqli_query($connection, "SELECT image FROM products_image WHERE product_id = '" . $row[1] . "';"));

                if ($row[5] == "PENDING") {
                    $orderstatus = "<span class='label label-light-danger'>Pending</span>";
                } elseif ($row[5] == "TOPAY") {
                    $orderstatus = "<span class='label label-light-danger'>To Pay</span>";
                } elseif ($row[5] == "TOSHIP") {
                    $orderstatus = "<span class='label label-light-success'>To Ship</span>";
                } elseif ($row[5] == "TODELIVER") {
                    $orderstatus = "<span class='label label-light-success'>For Delivery</span>";
                } else {
                    $orderstatus = "<span class='label label-light-success'>Completed</span>";
                }

                echo "<tr>
                            <td style='min-width:2px'>
                            	<a href='javascript:void(0)'><img src='../" . $getproductimage[0] . "' style='width: 60px;'></a>
                            </td>
                                <td style='min-width:2px'>
                            	<label>" . $row[0] . "</label>
                            </td>
                            <td class='product_name' style='font-size:14px;'>
                                <a href='javascript:void(0)'>" . $getproduct[0] . "</a>
                            </td>
                            <td class='product-quantity' style='font-size:14px;'>
                                <label>" . $row[2] . "</label>
                            </td>
                            <td class='product-price1' style='font-size:14px;'>₱ " . number_format($row[3], "2", ".", ",") . "</td>
                            <td class='product-subtotal' style='font-size:14px;'>₱ " . number_format($row[4], "2", ".", ",") . "</td>
                            <td class='product-status' style='font-size:14px;'>
                                <label>" . $orderstatus . "</label>
                            </td>
                            <td style='min-width:2px'>
                                <a href='javascript:void(0)' class='tablebuttonneed' onclick='openproductreservenowdet(\"" . $count . "\", \"" . $row[1] . "\", \"" . $row[0] . "\")'>View</a>
                                <a href='javascript:void(0)' onclick='deletecart(\"" . $row[0] . "\")'>Cancel</a>
                            </td>
                        </tr>";
            }
        } else {
            echo "<tr><td  colspan='12' style='text-align:center'>No Record Found . . .</td></tr>";
        }
        break;

    case 'fncdisplayreservenowproddet':
        // CUSTOMER
        $getcustomer = mysqli_fetch_array(mysqli_query($connection, "SELECT CASE WHEN middlename = '' OR middlename IS NULL THEN CONCAT(lastname, ', ', firstname) ELSE CONCAT(lastname, ', ', firstname, ' ', LEFT(middlename, '1'), '.') END FROM users_table WHERE user_id = '" . $_SESSION['user_id'] . "';"));

        $getcustomerdet = mysqli_fetch_array(mysqli_query($connection, "SELECT contactnum, address FROM user_details WHERE user_id = '" . $_SESSION['user_id'] . "';"));

        echo $getcustomer[0] . "|" . $getcustomerdet[0] . "|" . $getcustomerdet[1] . "|";

        // PRODUCT IMAGE
        $productimage = mysqli_fetch_array(mysqli_query($connection, "SELECT image, imagename FROM products_image WHERE product_id = '" . $_POST['textmdlprodID'] . "' ORDER BY id ASC;"));

        echo $productimage[0] . "|";

        // PRODUCT SUBTOTAL
        $getproductdet = mysqli_fetch_array(mysqli_query($connection, "SELECT productname FROM products WHERE product_id = '" . $_POST['textmdlprodID'] . "';"));

        // ORDER DETAIL
        $getorderdet = mysqli_fetch_array(mysqli_query($connection, "SELECT quantity, price, shipfee, totalamt, paymenttype, orderstatus, orderstatus2, courier, trackingnumber FROM reservation WHERE reservation_id = '" . $_POST['reservation_id'] . "';"));

        $getorderdet[6];

        $explode = explode(',', $getorderdet[6]);



        $subprodtotal = $getorderdet[0] * $getorderdet[1];

        echo $getproductdet[0] . "|" . $getorderdet[0] . "|" . number_format($getorderdet[1], "2", ".", ",") . "|" . number_format($subprodtotal, "2", ".", ",") . "|" . $getorderdet[4] . "|" . number_format($getorderdet[2], "2", ".", ",") . "|" . number_format($getorderdet[3], "2", ".", ",") . "|" . $getorderdet[5] . "|" . $explode[0] . "|" . $explode[1] . "|" . $explode[2] . "|" . $explode[3] . "|" . 'Delivery Method: ' . $getorderdet[7] . "|" . 'Tracking Number/Adress/Phone No.: ' . $getorderdet[8];



        break;


    case 'deletecart':
        $deletecart = mysqli_query($connection, "DELETE FROM reservation WHERE reservation_id = '" . $_POST['reservation_id'] . "'");
        break;
}
