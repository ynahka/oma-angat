<?php
include("connect.php");
session_start();
if (empty($_SESSION['user_id']) || $_SESSION['usertype'] !== 'CUSTOMER') {
    echo "<script> window.location = '../buyer/login.php';</script>";
    exit(); // Add exit to stop further execution of the script
}
?>

<head>
    <link rel="manifest" href="/manifest.json" />
    <link href="/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/products.css">
    <?php include 'community/header.php'; ?>
    <?php include('header.php'); ?>
</head>

<style type="text/css">
.tablebuttonneed {
    background: #4c644b !important;
    font-size: 12px !important;
    font-weight: 500 !important;
    height: 38px !important;
    line-height: 18px !important;
    padding: 10px 20px !important;
    color: #ffffff !important;
    text-transform: uppercase !important;
    border-radius: 3px !important;
}

.tablebuttonneed2 {
    background: red !important;
    font-size: 12px !important;
    font-weight: 500 !important;
    height: 38px !important;
    line-height: 18px !important;
    padding: 10px 20px !important;
    color: #ffffff !important;
    text-transform: uppercase !important;
    border-radius: 3px !important;
}

.tablebuttonneed:hover {
    background: #222222 !important;
}

@media only screen and (max-width: 767px) {
    .tablebuttonneed {
        padding: 10px 10px !important;
    }
}

.header_middle5 {
    border-bottom: 0;
    padding: 0px 0;
}

.marginbothome {
    margin-bottom: 80px;
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
    .marginbothome {
        margin-bottom: 30px;
    }
}

@media only screen and (max-width: 767px) {
    .marginbothome {
        margin-bottom: 30px;
    }

    .coupon_code.left {
        margin-bottom: 10px;
    }

    .product-details-tab {
        margin-bottom: 10px;
    }

    .product_d_info {
        margin-bottom: 20px;
    }

    .product_details {
        margin-top: 10px;
    }

    .modal-content button.close {
        left: 88% !important;
    }

    .shopping_cart_area {
        margin-top: 10px;
    }

    .marginebottomforpaymeth {
        margin-bottom: 10px;
    }
}

.starhover:hover {
    color: #FEB954;
}

.swal2-icon {
    position: relative;
    box-sizing: content-box;
    justify-content: center;
    width: 5em;
    height: 5em;
    margin: .5em auto .5em;
    border: 0.25em solid transparent;
    border-radius: 50%;
    border-color: #000;
    font-family: inherit;
    line-height: 5em;
    cursor: default;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.swal2-title {
    position: relative;
    max-width: 100%;
    margin: 0 0 0em;
    padding: 0;
    color: #595959;
    font-size: 1.875em;
    font-weight: 600;
    text-align: center;
    text-transform: none;
    word-wrap: break-word;
}

.swal2-actions {
    display: flex;
    z-index: 1;
    box-sizing: border-box;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    width: 100%;
    margin: 20px auto 0;
    padding: 0;
}

.swal2-styled.swal2-confirm {
    border: 0;
    border-radius: 0.25em;
    background: initial;
    background-color: #2778c4;
    color: #fff;
    font-size: 1em;
    padding: 8px 30px;
}

.hoverpaymentmeth {
    border: 2px solid #e1e1e1;
}

.hoverpaymentmeth:hover {
    border: 2px solid #79a206;
}

.hoverpaymentmeth2 {
    border: 2px solid #79a206;
}

@media only screen and (min-width: 1200px) and (max-width: 1600px) {
    .modal-paymentneed {
        min-width: 600px !important;
    }
}


.root {
    padding: 1rem;
    border-radius: 5px;
    box-shadow: 0 2rem 6rem rgba(0, 0, 0, 0.3);
}

.figure {
    display: flex;
}

.figure img {
    width: 8rem;
    height: 8rem;
    border-radius: 15%;
    border: 1.5px solid #f05a00;
    margin-right: 1.5rem;
    padding: 1rem;
}

.figure figcaption {
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
}

.figure figcaption h4 {
    font-size: 1.4rem;
    font-weight: 500;
}

.figure figcaption h6 {
    font-size: 1rem;
    font-weight: 300;
}

.figure figcaption h2 {
    font-size: 1.6rem;
    font-weight: 500;
}

.order-track {
    margin-top: 2rem;
    padding: 0 1rem;
    padding-top: 2.5rem;
    display: flex;
    flex-direction: column;
}

.order-track-step {
    display: flex;
    height: 5rem;
}

.order-track-step:last-child {
    overflow: hidden;
    height: 4rem;
}

.order-track-step:last-child .order-track-status span:last-of-type {
    display: none;
}

.order-track-status {
    margin-right: 1.5rem;
    position: relative;
}

.order-track-status-dot {
    display: block;
    width: 1rem;
    height: 1rem;
    border-radius: 50%;
    background: #f05a00;
}

.order-track-status-line {
    display: block;
    margin: 0 auto;
    width: 2px;
    height: 5rem;
    background: #f05a00;
}

.order-track-text-stat {
    font-size: 1rem;
    font-weight: 500;
    margin-bottom: 3px;
}

.order-track-text-sub {
    font-size: 1rem;
    font-weight: 300;
}

.order-track {
    transition: all .3s height 0.3s;
    transform-origin: top center;
}
</style>

<!--breadcrumbs area start-->
<?php
// Check if the user is logged in
$isLoggedIn = !empty($_SESSION['user_id']) && $_SESSION['usertype'] === 'CUSTOMER';
if ($isLoggedIn) {
    include 'header-nav-buyer.php'; // Include the file for logged-in users
} else {
    include 'header-nav.php'; // Include the file for non-logged-in users
}
?>
<script src="/script.js"></script>
<!--breadcrumbs area end-->
<section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
    <div class="container">
        <h2>My Purchases</h2>
    </div>
</section>
<?php include('category-sidebar.php'); ?>
<?php include('product-view.php'); ?>
<!--shopping cart area start -->
<div class="shopping_cart_area" style="margin-top:30px;">
    <div class="container">
        <form action="#">
            <div class="row">
                <div class="col-12">
                    <div class="table_desc" style="margin-bottom: 50px;">
                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th style="min-width:2px!important">Image</th>
                                        <th style="min-width:2px!important;">Order No.</th>
                                        <th style="min-width:50px!important;">Product</th>
                                        <th style="min-width:2px!important">Quantity</th>
                                        <th style="min-width:2px!important">Price</th>
                                        <th style="min-width:2px!important">Total</th>
                                        <th style="min-width:2px!important">Status</th>
                                        <th style="min-width:2px!important">Option</th>
                                    </tr>
                                </thead>
                                <tbody id="listofcarts"></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--shopping cart area end -->

<!-- BUY NOW MODAL -->
<div class="modal fade" id="modal_productbuynow" tabindex="-1" role="dialog" data-bs-backdrop="static"
    data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border: 1px solid #82a131; border-radius: 8px;">
            <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="clearbuynowmodal();"
                style="left: 95%;">
                <span aria-hidden="true"><i class="icon-x"></i></span>
            </button> -->
            <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
            <div class="modal_body" style="padding: 29px 6px 20px;background-color: #cfe2ce; border-radius: 8px;">
                <div class="container">

                    <!--Delivery Address Details start-->
                    <div class="coupon_area" style="margin-top: 30px;margin-bottom: 20px;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="coupon_code left">
                                    <h3 style="background-color: #4c644b;">Delivery Address</h3>
                                    <div class=" coupon_inner" style="padding: 10px 20px 10px;">
                                        <h4 style="font-weight:400"><i style="color: #79a206;" class="fa fa-user"
                                                aria-hidden="true"></i> <span id="txtmdlcheckoutname"></span></h4>
                                        <h4 style="font-weight:400"><i style="color: #79a206;" class="fa fa-phone"
                                                aria-hidden="true"></i> <span id="txtmdlcheckoutphone"></span></h4>
                                        <h4 style="font-weight:400"><i style="color: #79a206;" class="fa fa-map-marker"
                                                aria-hidden="true"></i>
                                            <span id="txtmdlcheckoutaddress"></span> &nbsp;&nbsp;&nbsp;
                                            <!-- <span style="cursor:pointer;color: #0089ff;font-size: 13px;" onclick="">Change</span> -->
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Delivery Address Details end-->

                    <!--Products Ordered start-->
                    <div class="coupon_area" style="margin-bottom: 20px;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="coupon_code left">
                                    <h3 style="background-color: #4c644b;">Products Ordered</h3>

                                    <div class=" shopping_cart_area">
                                        <div class="container" style="padding-right: 10px;padding-left: 10px;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="table_desc" style="margin-bottom: 10px;">
                                                        <div class="cart_page table-responsive">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 80%;text-align: left;">Product
                                                                        </th>
                                                                        <th style="width: 3%;text-align: left;">Quantity
                                                                        </th>
                                                                        <th style="width: 3%;text-align: left;">Price
                                                                        </th>
                                                                        <th style="width: 3%;text-align: left;">Subtotal
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width: 80%;text-align: left;">
                                                                            <img src="../" style="width:50px"
                                                                                id="txtmdlbuynowproductimage">
                                                                            <a href="#"><span
                                                                                    id="txtmdlbuynowproductname"></span></a>
                                                                        </td>
                                                                        <td style="width: 3%;text-align: left;"><span
                                                                                id="txtmdlbuynowproductquantity"></span>
                                                                        </td>
                                                                        <td style="width: 3%;text-align: left;">₱ <span
                                                                                id="txtmdlbuynowproductprice">0.00</span>
                                                                        </td>
                                                                        <td style="width: 3%;text-align: left;">₱ <span
                                                                                id="txtmdlbuynowproductsubtotal">0.00</span>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Products Ordered end-->

                    <!--Payment method start-->
                    <div class="coupon_area" style="margin-bottom: 20px;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="coupon_code left">
                                    <h3 style="margin-bottom: 0rem; background-color: #4c644b;">Payment Method</h3>
                                    <div class="coupon_inner" style="padding: 10px 10px 10px;">

                                        <input type="hidden" id="txtmdlbuynowpaymentmethod">

                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="paymentmethcash hoverpaymentmeth marginebottomforpaymeth"
                                                    style="padding: 10px 15px 10px; border-radius: 5px;cursor: pointer;">
                                                    <div class="services_item" style="margin-bottom: 0px;">
                                                        <div class="services_icone">
                                                            <i class="fa fa-money"></i>
                                                        </div>
                                                        <div class="services_desc">
                                                            <h4 style="margin-bottom: 0rem;">CASH ON DELIVERY</h4>

                                                            <p>Pay when you receive.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="paymentmethcop hoverpaymentmeth marginebottomforpaymeth"
                                                    style="padding: 10px 15px 10px; border-radius: 5px;cursor: pointer;">
                                                    <div class="services_item" style="margin-bottom: 0px;">
                                                        <div class="services_icone">
                                                            <i class="fa fa-money"></i>
                                                        </div>
                                                        <div class="services_desc">
                                                            <h4 style="margin-bottom: 0rem;">CASH ON PICK-UP</h4>

                                                            <p>Pay when you pick-up.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-12">
                                                <div class="paymentmethgcash hoverpaymentmeth"
                                                    style="padding: 10px 15px 10px; border-radius: 5px;cursor: pointer;">
                                                    <div class="services_item" style="margin-bottom: 0px;">
                                                        <div class="services_icone">
                                                            <i class="fa fa-credit-card"></i>
                                                        </div>
                                                        <div class="services_desc">
                                                            <h4 style="margin-bottom: 0rem;">GCASH</h4>

                                                            <p>Pay via gcash.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Payment method end-->

                    <!--Order summary start-->
                    <div class="coupon_area" style="margin-bottom: 20px;">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <section class="root">

                                    <div class="order-track">
                                        <div class="order-track-step">
                                            <div class="order-track-status">
                                                <span class="order-track-status-dot"></span>
                                                <span class="order-track-status-line"></span>
                                            </div>
                                            <div class="order-track-text">
                                                <p
                                                    class="order-track-text-stat order-track-text-stat1 order-track-text-statstatus">
                                                    Pending</p>
                                                <span class="order-track-text-sub order-track-text-sub1"></span>
                                            </div>
                                        </div>
                                        <!-- <div class="order-track-step">
                                      <div class="order-track-status">
                                        <span class="order-track-status-dot"></span>
                                        <span class="order-track-status-line"></span>
                                      </div>
                                      <div class="order-track-text">
                                        <p class="order-track-text-stat order-track-text-stat2">To Pay</p>
                                         <span class="order-track-text-sub">1st November, 2019</span>
                                      </div>
                                    </div> -->
                                        <div class="order-track-step">
                                            <div class="order-track-status">
                                                <span class="order-track-status-dot"></span>
                                                <span class="order-track-status-line"></span>
                                            </div>
                                            <div class="order-track-text">
                                                <p class="order-track-text-stat order-track-text-stat3">To Ship</p>
                                                <span class="order-track-text-sub order-track-text-sub3"></span>
                                            </div>
                                        </div>
                                        <div class="order-track-step">
                                            <div class="order-track-status">
                                                <span class="order-track-status-dot"></span>
                                                <span class="order-track-status-line"></span>
                                            </div>
                                            <div class="order-track-text">
                                                <p class="order-track-text-stat order-track-text-stat4">For Delivery</p>
                                                <span class="order-track-text-sub order-track-text-sub4"></span>
                                            </div>
                                        </div>
                                        <div class="order-track-step">
                                            <div class="order-track-status">
                                                <span class="order-track-status-dot"></span>
                                                <span class="order-track-status-line"></span>
                                            </div>
                                            <div class="order-track-text">
                                                <p class="order-track-text-stat order-track-text-stat5">Completed</p>
                                                <span class="order-track-text-sub order-track-text-sub5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div style="font-size: 20px;margin-top: 50px;font-weight: bold;">
                                    <div class="courierdata"></div>
                                    <div class="trackingnumberdata"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="coupon_code left">
                                    <h3 style="margin-bottom: 0rem; background-color: #4c644b;">Order Summary</h3>
                                    <div class="coupon_inner" style="padding: 10px 10px 10px;">
                                        <div class="cart_subtotal">
                                            <p>Subtotal</p>
                                            <p class="cart_amount" style="">₱ <span
                                                    id="txtmdlbuynowsubtotal">0.00</span></p>
                                        </div>

                                        <div class="cart_subtotal">
                                            <p>Shipping</p>
                                            <p class="cart_amount" style="">₱ <span
                                                    id="txtmdlbuynowshiptotal">0.00</span></p>
                                        </div>

                                        <div class="cart_subtotal" style="border-top: 1px solid #e1e1e1;">
                                            <p style="margin-top:10px">Payment Total</p>
                                            <p style="margin-top:10px" class="cart_amount">₱ <span
                                                    id="txtmdlbuynowpaymenttotamt">0.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Order summary end-->

                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
<?php include('js-vendor.php'); ?>
<?php include('jscripts.php'); ?>




<!-- BUY NOW MODAL end-->

<script type="text/javascript">
$(function() {
    fncdsplylistofcart();
})

function fncdsplylistofcart() {
    $.ajax({
        type: 'POST',
        url: 'purchases_class.php',
        data: 'form=fncdsplylistofcart',
        success: function(data) {
            var show = data.split("|");
            $("#listofcarts").html(show[0]);
        }
    });
}

function openproductbuynowdet(count, textmdlprodID, order_id) {
    $("#modal_productbuynow").modal('show');

    $.ajax({
        type: 'POST',
        url: 'purchases_class.php',
        data: 'textmdlprodID=' + textmdlprodID + '&order_id=' + order_id + '&form=fncdisplaybuynowproddet',
        success: function(data) {
            var show = data.split("|");
            $("#txtmdlcheckoutname").text(show[0]);
            $("#txtmdlcheckoutphone").text(show[1]);
            $("#txtmdlcheckoutaddress").text(show[2]);

            $("#txtmdlbuynowproductimage").attr("src", show[3]);
            $("#txtmdlbuynowproductname").text(show[4]);
            $("#txtmdlbuynowproductquantity").text(show[5]);
            $("#txtmdlbuynowproductprice").text(show[6]);
            $("#txtmdlbuynowproductsubtotal").text(show[7]);

            if (show[8] == "CASH") {
                paymentcash();
            } else if (show[8] == "COP") {
                paymentcop();
            } else {
                paymentgcash();
            }

            $("#txtmdlbuynowsubtotal").text(show[7]);
            $("#txtmdlbuynowshiptotal").text(show[9]);
            $("#txtmdlbuynowpaymenttotamt").text(show[10]);


            $('.order-track-text-sub1').text(show[12])
            $('.order-track-text-sub3').text(show[13])
            $('.order-track-text-sub4').text(show[14])
            $('.order-track-text-sub5').text(show[15])


            $('.courierdata').text(show[16])
            $('.trackingnumberdata').text(show[17])

            if (show[8] == "CASH") {
                $('.order-track-text-statstatus').text('Pending')
                if (show[12] == 'PENDING') {
                    $('.order-track-text-stat1').css('color', 'red')

                } else if (show[11] == 'TOSHIP') {
                    $('.order-track-text-stat1').css('color', 'red')
                    $('.order-track-text-stat3').css('color', 'red')
                } else if (show[11] == 'TODELIVER') {
                    $('.order-track-text-stat1').css('color', 'red')
                    $('.order-track-text-stat3').css('color', 'red')
                    $('.order-track-text-stat4').css('color', 'red')
                } else if (show[11] == 'COMPLETED') {
                    $('.order-track-text-stat1').css('color', 'red')

                    $('.order-track-text-stat3').css('color', 'red')
                    $('.order-track-text-stat4').css('color', 'red')
                    $('.order-track-text-stat5').css('color', 'red')
                }

            } else if (show[8] == "COP") {
                $('.order-track-text-statstatus').text('Pending')
                if (show[11] == 'PENDING') {
                    $('.order-track-text-stat1').css('color', 'red')

                } else if (show[11] == 'TOSHIP') {
                    $('.order-track-text-stat1').css('color', 'red')
                    $('.order-track-text-stat3').css('color', 'red')
                } else if (show[11] == 'TODELIVER') {
                    $('.order-track-text-stat1').css('color', 'red')
                    $('.order-track-text-stat3').css('color', 'red')
                    $('.order-track-text-stat4').css('color', 'red')
                } else if (show[11] == 'COMPLETED') {
                    $('.order-track-text-stat1').css('color', 'red')

                    $('.order-track-text-stat3').css('color', 'red')
                    $('.order-track-text-stat4').css('color', 'red')
                    $('.order-track-text-stat5').css('color', 'red')
                }

            } else {

                $('.order-track-text-statstatus').text('To Pay')

                if (show[11] == 'TOPAY') {

                    $('.order-track-text-stat1').css('color', 'red')

                } else if (show[11] == 'TOSHIP') {
                    $('.order-track-text-stat1').css('color', 'red')

                    $('.order-track-text-stat3').css('color', 'red')
                } else if (show[11] == 'TODELIVER') {
                    $('.order-track-text-stat1').css('color', 'red')

                    $('.order-track-text-stat3').css('color', 'red')
                    $('.order-track-text-stat4').css('color', 'red')
                } else if (show[11] == 'COMPLETED') {
                    $('.order-track-text-stat1').css('color', 'red')

                    $('.order-track-text-stat3').css('color', 'red')
                    $('.order-track-text-stat4').css('color', 'red')
                    $('.order-track-text-stat5').css('color', 'red')
                }

            }
        }
    });
}




function deletecart(order_id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete it!'
    }).then((result) => {
        if (result.value) {
            $(".loadload").show();
            $.ajax({
                type: 'POST',
                url: 'purchases_class.php',
                data: 'order_id=' + order_id + '&form=deletecart',
                success: function(data) {

                    setTimeout(function() {
                        $(".loadload").hide();

                        Swal.fire({
                            title: "Success!",
                            text: "Successfully deleted.",
                            type: "success",
                            icon: "success",
                            showCancelButton: false,
                            confirmButtonColor: "#2778c4",
                            confirmButtonText: "Okay",
                            closeOnConfirm: false
                        }).then((result) => {
                            if (result.value) {
                                window.location = "purchases.php";
                            }
                        });
                    }, 1000);
                }
            })
        }
    })
}

function clearbuynowmodal() {
    $("#txtmdlbuynowpaymentmethod").val("");
    $(".paymentmethcash").addClass('hoverpaymentmeth');
    $(".paymentmethcash").removeClass('hoverpaymentmeth2');
    $(".paymentmethgcash").addClass('hoverpaymentmeth');
    $(".paymentmethgcash").removeClass('hoverpaymentmeth2');
}

function paymentcash() {
    $("#txtmdlbuynowpaymentmethod").val("CASH");
    $(".paymentmethcash").addClass('hoverpaymentmeth2');
    $(".paymentmethcash").removeClass('hoverpaymentmeth');

    $(".paymentmethgcop").removeClass('hoverpaymentmeth2');
    $(".paymentmethgcop").addClass('hoverpaymentmeth');
    $(".paymentmethgcash").removeClass('hoverpaymentmeth2');
    $(".paymentmethgcash").addClass('hoverpaymentmeth');
}

function paymentcop() {
    $("#txtmdlbuynowpaymentmethod").val("COP");
    $(".paymentmethcop").addClass('hoverpaymentmeth2');
    $(".paymentmethcop").removeClass('hoverpaymentmeth');

    $(".paymentmethcash").removeClass('hoverpaymentmeth2');
    $(".paymentmethcash").addClass('hoverpaymentmeth');
    $(".paymentmethgcash").removeClass('hoverpaymentmeth2');
    $(".paymentmethgcash").addClass('hoverpaymentmeth');
}

function paymentgcash() {
    $("#txtmdlbuynowpaymentmethod").val("GCASH");
    $(".paymentmethgcash").addClass('hoverpaymentmeth2');
    $(".paymentmethgcash").removeClass('hoverpaymentmeth');

    $(".paymentmethgcash").removeClass('hoverpaymentmeth2');
    $(".paymentmethgcash").addClass('hoverpaymentmeth');
    $(".paymentmethcash").removeClass('hoverpaymentmeth2');
    $(".paymentmethcash").addClass('hoverpaymentmeth');
}
</script>