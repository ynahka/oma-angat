<?php
include("connect.php");
session_start();
if (empty($_SESSION['user_id']) || $_SESSION['usertype'] !== 'CUSTOMER') {
    echo "<script> window.location = '../buyer/login.php';</script>";
    exit(); // Add exit to stop further execution of the script
}
?>

<head>
    <!-- <link rel="manifest" href="/manifest.json" /> -->
    <!-- <link href="/style.css" rel="stylesheet" /> -->
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
</style>
<!--breadcrumbs area start-->
<?php
// Check if the user is logged in
$isLoggedIn = !empty($_SESSION['user_id']);;
if ($isLoggedIn) {
    include 'header-nav-buyer.php'; // Include the file for logged-in users
} else {
    include 'header-nav.php'; // Include the file for non-logged-in users
}
?>
<script src="/script.js"></script>

<body>
    <?php include('category-sidebar.php'); ?>
    <?php include('product-view.php'); ?>
    <!--breadcrumbs area end-->
    <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
        <div class="container">
            <h2>Cart</h2>
        </div>
    </section>

    <!--shopping cart area start -->
    <div class="shopping_cart_area" style="margin-top:30px;">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <!-- <button class="tablebuttonneed" onclick="buyAllItemsInCart();">BUY ALL PRODUCTS</button>
                        <button class="tablebuttonneed" data-toggle="modal" onclick="openBuyAllModal()">Buy All
                            Products</button> -->
                        <div class="cart_submit" style="padding: 0px;">
                            <button onclick="openBuyAllModal()" style="background-color: #4c644b;">Buy All
                                Products</button>
                        </div>

                        <div class="table_desc" style="margin-bottom: 50px;">
                            <div class="cart_page table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                            <th class="product_total">Option</th>

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
    <div class="modal fade" id="modal_productbuynow" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border: 1px solid #82a131;">
                <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="clearbuynowmodal();"
                style="left: 95%;">
                <span aria-hidden="true"><i class="icon-x"></i></span>
            </button> -->
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="modal_body" style="padding: 29px 6px 20px; background-color: #cfe2ce;">
                    <div class="container">
                        <input type="hidden" id="txtmdlprodID2">

                        <!--Delivery Address Details start-->
                        <div class="coupon_area" style="margin-top: 30px;margin-bottom: 20px;">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="coupon_code left">
                                        <h3 style="background-color: #4c644b;">Delivery Address</h3>
                                        <div class="coupon_inner" style="padding: 10px 20px 10px;">
                                            <h4 style="font-weight:400"><i style="color: #79a206;" class="fa fa-user"></i> <span id="txtmdlcheckoutname"></span></h4>
                                            <h4 style="font-weight:400"><i style="color: #79a206;" class="fa fa-phone" aria-hidden="true"></i> <span id="txtmdlcheckoutphone"></span></h4>
                                            <h4 style="font-weight:400"><i style="color: #79a206;" class="fa fa-map-marker" aria-hidden="true"></i>
                                                <span id="txtmdlcheckoutaddress"></span> &nbsp;&nbsp;&nbsp;
                                                <span style="cursor:pointer;color: #0089ff;font-size: 13px;" onclick="">Change</span>
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

                                        <div class="shopping_cart_area">
                                            <div class="container" style="padding-right: 10px;padding-left: 10px;">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="table_desc" style="margin-bottom: 10px;">
                                                            <div class="cart_page table-responsive">
                                                                <table>
                                                                    <thead>
                                                                        <tr>
                                                                            <th style="width: 80%;text-align: left;">
                                                                                Product
                                                                            </th>
                                                                            <th style="width: 3%;text-align: left;">
                                                                                Quantity
                                                                            </th>
                                                                            <th style="width: 3%;text-align: left;">
                                                                                Price
                                                                            </th>
                                                                            <th style="width: 3%;text-align: left;">
                                                                                Subtotal
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td style="width: 80%;text-align: left;">
                                                                                <img src="../" style="width:50px" id="txtmdlbuynowproductimage">
                                                                                <a href="#"><span id="txtmdlbuynowproductname"></span></a>
                                                                            </td>
                                                                            <td style="width: 3%;text-align: left;">
                                                                                <span id="txtmdlbuynowproductquantity"></span>
                                                                            </td>
                                                                            <td style="width: 3%; text-align: center;">₱
                                                                                <span id="txtmdlbuynowproductprice">0.00</span>
                                                                            </td>
                                                                            <td style="width: 3%;text-align: left;">₱
                                                                                <span id="txtmdlbuynowproductsubtotal">0.00</span>
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
                                                    <div class="paymentmethcash hoverpaymentmeth marginebottomforpaymeth" style="padding: 10px 15px 10px; border-radius: 5px;cursor: pointer;" onclick="paymentcash();">
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
                                                    <div class="paymentmethcop hoverpaymentmeth marginebottomforpaymeth" style="padding: 10px 15px 10px; border-radius: 5px;cursor: pointer;" onclick="paymentcop();">
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
                                                    <div class="paymentmethgcash hoverpaymentmeth" style="padding: 10px 15px 10px; border-radius: 5px;cursor: pointer;" onclick="paymentgcash();">
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
                                                <div class="col-lg-6 col-md-12">
                                                    <div class="couriercontainer">
                                                        <div class=" form-group" style="margin-top: 300px;">
                                                            <select class="form-control courier" id="txtmdlbuynowcourier">
                                                                onchange="inputrequired()">
                                                                <option value="">Select Delivery/Pick-up Method</option>
                                                                <option value="Courier/Logistics">
                                                                    Courier/Logistics(Discuss
                                                                    on Message)</option>
                                                                <option value="Albay Public Market">
                                                                    Albay Public Market
                                                                </option>
                                                                <option value="Bacacay Public Market">
                                                                    Bacacay Public Market
                                                                </option>
                                                                <option value="Daraga Public Market">
                                                                    Daraga Public Market
                                                                </option>
                                                                <option value="Guinobatan Public Market">
                                                                    Guinobatan Public Market
                                                                </option>
                                                                <option value="Jovellar Public Market">
                                                                    Jovellar Public Market
                                                                </option>
                                                                <option value="Legazpi City Public Market">
                                                                    Legazpi Public Market
                                                                </option>
                                                                <option value="Libon Public Market">
                                                                    Libon Public Market
                                                                </option>
                                                                <option value="Ligao Public Market">
                                                                    Ligao Public Market
                                                                </option>
                                                                <option value="Malilipot Public Market">
                                                                    Malilipot Public Market
                                                                </option>
                                                                <option value="Manito Public Market">
                                                                    Manito Public Market
                                                                </option>
                                                                <option value="Malinao Public Market">
                                                                    Malinao Public Market
                                                                </option>
                                                                <option value="Oas Public Market">
                                                                    Oas Public Market
                                                                </option>
                                                                <option value="Pioduran Public Market">
                                                                    Piouduran Public Market
                                                                </option>
                                                                <option value="Polangui Public Market">
                                                                    Polangui Public Market
                                                                </option>
                                                                <option value="Rapu-Rapu Public Market">
                                                                    Rapu-Rapu Public Market
                                                                </option>
                                                                <option value="Sto.Domingo Public Market">
                                                                    Sto.Domingo Public Market
                                                                </option>
                                                                <option value="Tabaco City Public Market">
                                                                    Tabaco City Public Market
                                                                </option>
                                                                <option value="Tiwi Public Market">
                                                                    Tiwi Public Market
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control courier" id="txtmdlbuynowtracking">
                                                                onchange="inputrequired()">
                                                                <option value="">Select Schedule</option>
                                                                <option value="Sunday Market Day 8:00am-12:00pm">
                                                                    Sunday Market Day 8:00am-12:00pm</option>
                                                                <option value="Sunday Market Day 1:00pm-4:00pm">
                                                                    Sunday Market Day 1:00pm-4:00pm
                                                                </option>
                                                                <option value="Monday Market Day 8:00am-12:00pm">
                                                                    Monday Market Day 8:00am-12:00pm</option>
                                                                <option value="Monday Market Day 1:00pm-4:00pm">
                                                                    Monday Market Day 1:00pm-4:00pm
                                                                </option>
                                                                <option value="Tuesday Market Day 8:00am-12:00pm">
                                                                    Tuesday Market Day 8:00am-12:00pm</option>
                                                                <option value="Tuesday Market Day 1:00pm-4:00pm">
                                                                    Tuesday Market Day 1:00pm-4:00pm
                                                                </option>
                                                                <option value="Wednesday Market Day 8:00am-12:00pm">
                                                                    Wednesday Market Day 8:00am-12:00pm</option>
                                                                <option value="Monday Market Day 1:00pm-4:00pm">
                                                                    Wednesday Market Day 1:00pm-4:00pm
                                                                </option>
                                                                <option value="Thursday Market Day 8:00am-12:00pm">
                                                                    Thursday Market Day 8:00am-12:00pm</option>
                                                                <option value="Thursday Market Day 1:00pm-4:00pm">
                                                                    Thursday Market Day 1:00pm-4:00pm
                                                                </option>
                                                                <option value="Friday Market Day 8:00am-12:00pm">
                                                                    Friday Market Day 8:00am-12:00pm</option>
                                                                <option value="Friday Market Day 1:00pm-4:00pm">
                                                                    Friday Market Day 1:00pm-4:00pm
                                                                </option>
                                                                <option value="Saturday Market Day 8:00am-12:00pm">
                                                                    Saturday Market Day 8:00am-12:00pm</option>
                                                                <option value="Saturday Market Day 1:00pm-4:00pm">
                                                                    Saturday Market Day 1:00pm-4:00pm
                                                                </option>
                                                            </select>
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
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="coupon_code left">
                                        <h3 style="margin-bottom: 0rem; background-color: #4c644b;">Order Summary</h3>
                                        <div class="coupon_inner" style="padding: 10px 10px 10px;">
                                            <div class="cart_subtotal">
                                                <p>Subtotal</p>
                                                <p class="cart_amount" style="">₱ <span id="txtmdlbuynowsubtotal">0.00</span></p>
                                            </div>

                                            <div class="cart_subtotal">
                                                <p>Shipping</p>
                                                <p class="cart_amount" style="">₱ <span id="txtmdlbuynowshiptotal">0.00</span></p>
                                            </div>

                                            <div class="cart_subtotal" style="border-top: 1px solid #e1e1e1;">
                                                <p style="margin-top:10px">Payment Total</p>
                                                <p style="margin-top:10px" class="cart_amount">₱ <span id="txtmdlbuynowpaymenttotamt">0.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Order summary end-->

                        <div class="cart_submit" style="padding: 0px;">
                            <button onclick="btnplaceorder()" style="background-color: #4c644b;">place order</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUY NOW MODAL end-->

    <!-- PAYMENT UPLOAD start-->
    <div class="modal fade" id="modal_paymentupload" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-paymentneed">
            <div class="modal-content" style="border: 2px solid #82a131;background-color: #cfe2ce; border-radius: 10px ">
                <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick=""
                    style="left: 92%;">
                    <span aria-hidden="true"><i class="icon-x"></i></span>
                </button> -->
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="modal_body" style="padding: 29px 6px 20px;">
                    <div class="container">
                        <input type="hidden" id="txtmdlorderID">
                        <input type="hidden" id="txtmdlcart_id">

                        <div class="row" style="justify-content: center;text-align: center; margin-top: 20px;">
                            <div class="col-lg-6 col-md-12">
                                <h4 style="font-weight: 400"><img src="images/gcashLogo.png" alt=""></h4>
                                <div class="blog_thumb mb-2">
                                    <a href="javascript:void(0)"><img src="../" id="txtsellergcashimage"></a>
                                </div>
                                <h3 style="font-weight:500" id="txtsellerbankholdername"></h3>
                                <h4 style="font-weight:400; font-size:18px" id="txtsellerbanknumber"></h4>
                            </div>
                        </div>

                        <div class="row" style="justify-content: center;">
                            <div class="col-lg-12 col-md-12">
                                <hr style="height: .2px;">
                            </div>
                        </div>

                        <div class="row" style="justify-content: center;text-align: center;">
                            <div class="col-lg-6 col-md-12">
                                <div class="contact_message form">
                                    <p>
                                        <label>Reference Number *</label>
                                        <input class="reqresinfo" type="text" id="txtpaymentmethrefnum">
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="justify-content: center;text-align: center;">
                            <div class="col-lg-8 col-md-12" style="margin-bottom: 30px;">
                                <div class="contact_message form">
                                    <div class="contact_textarea">
                                        <label>Upload screenshot of payment *</label>
                                        <form method="post" action="#" enctype="multipart/form-data" id="frmUploadvalidPic">
                                            <div class="row">
                                                <div class="col-md-12" style="display: none;">
                                                    <img src="assets/images/noimage5.png" width="200" height="250" style="border: 2px solid #bdc3c7; margin-bottom: 10px;" id="updatevalidImage"><br>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="file" class="dropify clearinfo reqresinfo" id="txtvalidImagefile" name="txtvalidImagefile" onchange="fncShowvalidPic();" accept="image/*" data-height="300">
                                                    <input type="hidden" class="clearinfo" name="txtvalidimageID" id="txtvalidimageID">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cart_submit" style="padding: 0px;justify-content: center;text-align: center;">
                            <button onclick="submitpayment()" style="padding: 10px 20px;">Submit</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Existing modal structure -->

    <!-- BUY ALL NOW MODAL -->
    <div class="modal fade" id="modal_productbuynowall" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border: 1px solid #82a131;">
                <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="clearbuynowmodal();"
                style="left: 95%;">
                <span aria-hidden="true"><i class="icon-x"></i></span>
            </button> -->
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="modal_body" style="padding: 29px 6px 20px; background-color: #cfe2ce;">
                    <div class="container">
                        <input type="hidden" id="txtmdlprodID2">
                        <!--Products Ordered start-->
                        <div class="coupon_area" style="margin-bottom: 20px;">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="coupon_code left">
                                        <h3 style="background-color: #4c644b;">Products Ordered</h3>

                                        <div class="shopping_cart_area">
                                            <div class="container" style="padding-right: 10px;padding-left: 10px;">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="table_desc" style="margin-bottom: 10px;">
                                                            <div class="cart_page table-responsive">
                                                                <div class="cart_items_container">
                                                                    <table>
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Product</th>
                                                                                <th>Price</th>
                                                                                <th>Quantity</th>
                                                                                <th>Total</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="listofallcarts">

                                                                            <!-- Cart items will be inserted here by the JavaScript function -->
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
                        </div>
                        <!--Products Ordered end-->
                        <!--Delivery Address Details start-->
                        <div class="coupon_area" style="margin-top: 30px;margin-bottom: 20px;">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="coupon_code left">
                                        <h3 style="background-color: #4c644b;">Delivery Address/Customer Information
                                        </h3>
                                        <div class="coupon_inner" style="padding: 10px 20px 10px;">
                                            <h4 style="font-weight:400"><i style="color: #79a206;" class="fa fa-user"></i> <span id="txtmdlcheckoutname1"></span></h4>
                                            <h4 style="font-weight:400"><i style="color: #79a206;" class="fa fa-phone"></i> <span id="txtmdlcheckoutphone1"></span>
                                            </h4>
                                            <h4 style="font-weight:400"><i style="color: #79a206;" class="fa fa-map-marker"></i>
                                                <span id="txtmdlcheckoutaddress1"></span> &nbsp;&nbsp;&nbsp;
                                                <!-- <span style="cursor:pointer;color: #0089ff;font-size: 13px;" onclick="">Change</span> -->
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Delivery Address Details end-->

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
                                                    <div class="paymentmethcash hoverpaymentmeth marginebottomforpaymeth" style="padding: 10px 15px 10px; border-radius: 5px;cursor: pointer;" onclick="paymentcash();">
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
                                                    <div class="couriercontainer">
                                                        <div class=" form-group" style="margin-top: 300px;">
                                                            <select class="form-control courier" id="txtmdlbuynowcourier">
                                                                onchange="inputrequired()">
                                                                <option value="">Pick-up Method</option>
                                                                <option value="Courier/Logistics">
                                                                    Courier/Logistics(Discuss
                                                                    on Message)</option>
                                                                <option value="Albay Public Market">
                                                                    Albay Public Market
                                                                </option>
                                                                <option value="Bacacay Public Market">
                                                                    Bacacay Public Market
                                                                </option>
                                                                <option value="Daraga Public Market">
                                                                    Daraga Public Market
                                                                </option>
                                                                <option value="Guinobatan Public Market">
                                                                    Guinobatan Public Market
                                                                </option>
                                                                <option value="Jovellar Public Market">
                                                                    Jovellar Public Market
                                                                </option>
                                                                <option value="Legazpi City Public Market">
                                                                    Legazpi Public Market
                                                                </option>
                                                                <option value="Libon Public Market">
                                                                    Libon Public Market
                                                                </option>
                                                                <option value="Ligao Public Market">
                                                                    Ligao Public Market
                                                                </option>
                                                                <option value="Malilipot Public Market">
                                                                    Malilipot Public Market
                                                                </option>
                                                                <option value="Manito Public Market">
                                                                    Manito Public Market
                                                                </option>
                                                                <option value="Malinao Public Market">
                                                                    Malinao Public Market
                                                                </option>
                                                                <option value="Oas Public Market">
                                                                    Oas Public Market
                                                                </option>
                                                                <option value="Pioduran Public Market">
                                                                    Piouduran Public Market
                                                                </option>
                                                                <option value="Polangui Public Market">
                                                                    Polangui Public Market
                                                                </option>
                                                                <option value="Rapu-Rapu Public Market">
                                                                    Rapu-Rapu Public Market
                                                                </option>
                                                                <option value="Sto.Domingo Public Market">
                                                                    Sto.Domingo Public Market
                                                                </option>
                                                                <option value="Tabaco City Public Market">
                                                                    Tabaco City Public Market
                                                                </option>
                                                                <option value="Tiwi Public Market">
                                                                    Tiwi Public Market
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control courier" id="txtmdlbuynowtracking">
                                                                onchange="inputrequired()">
                                                                <option value="">Select Schedule</option>
                                                                <option value="Sunday Market Day 8:00am-12:00pm">
                                                                    Sunday Market Day 8:00am-12:00pm</option>
                                                                <option value="Sunday Market Day 1:00pm-4:00pm">
                                                                    Sunday Market Day 1:00pm-4:00pm
                                                                </option>
                                                                <option value="Monday Market Day 8:00am-12:00pm">
                                                                    Monday Market Day 8:00am-12:00pm</option>
                                                                <option value="Monday Market Day 1:00pm-4:00pm">
                                                                    Monday Market Day 1:00pm-4:00pm
                                                                </option>
                                                                <option value="Tuesday Market Day 8:00am-12:00pm">
                                                                    Tuesday Market Day 8:00am-12:00pm</option>
                                                                <option value="Tuesday Market Day 1:00pm-4:00pm">
                                                                    Tuesday Market Day 1:00pm-4:00pm
                                                                </option>
                                                                <option value="Wednesday Market Day 8:00am-12:00pm">
                                                                    Wednesday Market Day 8:00am-12:00pm</option>
                                                                <option value="Monday Market Day 1:00pm-4:00pm">
                                                                    Wednesday Market Day 1:00pm-4:00pm
                                                                </option>
                                                                <option value="Thursday Market Day 8:00am-12:00pm">
                                                                    Thursday Market Day 8:00am-12:00pm</option>
                                                                <option value="Thursday Market Day 1:00pm-4:00pm">
                                                                    Thursday Market Day 1:00pm-4:00pm
                                                                </option>
                                                                <option value="Friday Market Day 8:00am-12:00pm">
                                                                    Friday Market Day 8:00am-12:00pm</option>
                                                                <option value="Friday Market Day 1:00pm-4:00pm">
                                                                    Friday Market Day 1:00pm-4:00pm
                                                                </option>
                                                                <option value="Saturday Market Day 8:00am-12:00pm">
                                                                    Saturday Market Day 8:00am-12:00pm</option>
                                                                <option value="Saturday Market Day 1:00pm-4:00pm">
                                                                    Saturday Market Day 1:00pm-4:00pm
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-6 col-md-12">
                                                    <div class="paymentmethgcash hoverpaymentmeth"
                                                        style="padding: 10px 15px 10px; border-radius: 5px;cursor: pointer;"
                                                        onclick="paymentgcash();">
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
                                                </div> -->
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
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="coupon_code left">
                                        <h3 style="margin-bottom: 0rem; background-color: #4c644b;">Order Summary</h3>
                                        <div class="coupon_inner" style="padding: 10px 10px 10px;">
                                            <div class="cart_subtotal">
                                                <p>Subtotal</p>
                                                <p class="cart_amount" style="">₱ <span id="txtmdlbuynowsubtotal1">0.00</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Order summary end-->

                        <div class="cart_submit" style="padding: 0px;">
                            <button onclick="btnplaceorderall()" style="background-color: #4c644b;">place order</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUY NOW MODAL end-->



    <!-- PAYMENT UPLOAD end-->
    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
    <?php include('jscripts.php'); ?>
</body>

<script type="text/javascript">
    $(function() {
        fncdsplylistofcart();

        $(".numonly").keydown(function(event) {
            if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 190 || event.keyCode == 9 ||
                event.keyCode == 188) {

            } else {
                if (event.keyCode < 48 || event.keyCode > 57 || event.keyCode == 17) {
                    event.preventDefault();
                }
            }
        });

        $(".focus").focus(function() {
            this.select();
        });
    })

    function fncdsplylistofcart() {
        $.ajax({
            type: 'POST',
            url: 'cart_class.php',
            data: 'form=fncdsplylistofcart',
            success: function(data) {
                var show = data.split("|");
                $("#listofcarts").html(show[0]);
            }
        });
    }

    function computetotalamt(count) {
        var textcartprice = ($("#txtcartprice" + count).text()).replace(/,/g, "");
        var textcartquantity = $("#txtcartquantity" + count).val();
        var subtotamt = (textcartquantity * textcartprice);

        $("#txtcarttotalamount" + count).text(parseFloat(subtotamt).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
    }

    function quantityvalidation(count, product_id) {
        var textmdlprodquantity = $("#txtcartquantity" + count).val();
        //if(textmdlprodquantity >= 1 && textmdlprodquantity <= 30){

        if (textmdlprodquantity == 0 || textmdlprodquantity == "") {
            Swal.fire(
                'ALERT',
                'Quantity cannot be zero or blank.',
                'warning'
            )
            $("#txtcartquantity" + count).val(1);
            computetotalamt(count);
        } else {
            $.ajax({
                type: 'POST',
                url: 'cart_class.php',
                data: 'textmdlprodquantity=' + textmdlprodquantity + '&textmdlprodID=' + product_id +
                    '&form=checkquantityindb',
                success: function(data) {

                    if (data == 1) {
                        if (textmdlprodquantity <= 30) {

                        } else {
                            Swal.fire(
                                'ALERT',
                                'Quantity cannot exceed 30.',
                                'warning'
                            )
                            $("#txtcartquantity" + count).val(1);
                            computetotalamt(count);
                        }
                    } else {
                        Swal.fire(
                            'ALERT',
                            'Out of stock.',
                            'warning'
                        )
                        $("#txtcartquantity" + count).val(1);
                        computetotalamt(count);
                    }

                }
            })
        }
    }

    function openproductbuynowdet(count, textmdlprodID, cart_id) {
        $("#modal_productbuynow").modal('show');

        var textmdlprodquantity = $("#txtcartquantity" + count).val();

        $("#txtmdlprodID2").val(textmdlprodID);
        $("#txtmdlcart_id").val(cart_id);
        $("#txtmdlbuynowproductquantity").text(textmdlprodquantity);

        $.ajax({
            type: 'POST',
            url: 'cart_class.php',
            data: 'textmdlprodID=' + textmdlprodID + '&textmdlprodquantity=' + textmdlprodquantity +
                '&form=fncdisplaybuynowproddet',
            success: function(data) {
                var show = data.split("|");
                $("#txtmdlcheckoutname").text(show[0]);
                $("#txtmdlcheckoutphone").text(show[1]);
                $("#txtmdlcheckoutaddress").text(show[2]);

                $("#txtmdlbuynowproductname").text(show[3]);
                $("#txtmdlbuynowproductprice").text(show[4]);
                $("#txtmdlbuynowproductsubtotal").text(show[5]);

                $("#txtmdlbuynowsubtotal").text(show[5]);
                $("#txtmdlbuynowshiptotal").text(show[6]);
                $("#txtmdlbuynowpaymenttotamt").text(show[7]);
                $("#txtmdlbuynowproductimage").attr("src", show[8]);
            }
        });
    }

    function clearbuynowmodal() {
        $("#txtmdlbuynowpaymentmethod").val("");
        $("#txtmdlprodID2").val("");
        $(".paymentmethcash").addClass('hoverpaymentmeth');
        $(".paymentmethcash").removeClass('hoverpaymentmeth2');
        $(".paymentmethgcash").addClass('hoverpaymentmeth');
        $(".paymentmethgcash").removeClass('hoverpaymentmeth2');
    }

    function paymentcash() {
        $("#txtmdlbuynowpaymentmethod").val("CASH");
        $(".paymentmethcash").addClass('hoverpaymentmeth2');
        $(".paymentmethcash").removeClass('hoverpaymentmeth');
        // $('.couriercontainer').css('display', 'unset')

        $(".paymentmethcop").removeClass('hoverpaymentmeth2');
        $(".paymentmethcop").addClass('hoverpaymentmeth');
        $(".paymentmethgcash").removeClass('hoverpaymentmeth2');
        $(".paymentmethgcash").addClass('hoverpaymentmeth');
    }

    function paymentcop() {
        $("#txtmdlbuynowpaymentmethod").val("COP");
        $(".paymentmethcop").addClass('hoverpaymentmeth2');
        $(".paymentmethcop").removeClass('hoverpaymentmeth');

        $(".paymentmethcash").removeClass('hoverpaymentmeth2');
        $(".paymentmethgcash").addClass('hoverpaymentmeth');
        $(".paymentmethgcash").removeClass('hoverpaymentmeth2');
        $(".paymentmethgcash").addClass('hoverpaymentmeth');
    }

    function paymentgcash() {
        $("#txtmdlbuynowpaymentmethod").val("GCASH");
        $(".paymentmethgcash").addClass('hoverpaymentmeth2');
        $(".paymentmethgcash").removeClass('hoverpaymentmeth');

        $(".paymentmethcop").removeClass('hoverpaymentmeth2');
        $(".paymentmethcop").addClass('hoverpaymentmeth');
        $(".paymentmethcash").removeClass('hoverpaymentmeth2');
        $(".paymentmethcash").addClass('hoverpaymentmeth');
    }

    function btnplaceorder() {
        var cart_id = $("#txtmdlcart_id").val();
        var product_id = $("#txtmdlprodID2").val();
        var productQuantity = $("#txtmdlbuynowproductquantity").text();
        var productPrice = ($("#txtmdlbuynowproductprice").text()).replace(/,/g, "");
        var ProductShipping = ($("#txtmdlbuynowshiptotal").text()).replace(/,/g, "");
        var Producttotalamount = ($("#txtmdlbuynowpaymenttotamt").text()).replace(/,/g, "");
        var productpaymentmeth = $("#txtmdlbuynowpaymentmethod").val();
        var courier = $("#txtmdlbuynowcourier").val();
        var tracking = $("#txtmdlbuynowtracking").val();

        if (productpaymentmeth != "") {
            if (productpaymentmeth == "CASH" || productpaymentmeth == "COP") {
                $(".loadload").show();
                $.ajax({
                    type: 'POST',
                    url: 'cart_class.php',
                    data: 'product_id=' + product_id + '&cart_id=' + cart_id + '&productQuantity=' +
                        productQuantity +
                        '&productPrice=' + productPrice + '&ProductShipping=' + ProductShipping +
                        '&Producttotalamount=' + Producttotalamount + '&productpaymentmeth=' + productpaymentmeth +
                        '&courier=' + courier + '&tracking=' + tracking +
                        '&form=btnplaceordercash',
                    success: function(data) {
                        setTimeout(function() {
                            $(".loadload").hide();
                            Swal.fire({
                                title: "Success!",
                                text: "Successfully ordered.",
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
                        }, 500);

                    }
                })
            } else {
                loadpaymentgcashmodal();
            }
        } else {
            Swal.fire(
                'ALERT',
                'Please select payment method.',
                'warning'
            )
        }
    }

    function loadpaymentgcashmodal() {
        $("#modal_paymentupload").modal('show');
        var product_id = $("#txtmdlprodID2").val();

        $.ajax({
            type: 'POST',
            url: 'cart_class.php',
            data: 'product_id=' + product_id + '&form=fncloadpaymentgcashmodal',
            success: function(data) {
                var show = data.split("|");
                $("#txtsellerbankholdername").text(show[0]);
                $("#txtsellerbanknumber").text(show[1]);
                $("#txtsellergcashimage").attr("src", show[2]);
            }
        });
    }

    function submitpayment() {
        var cart_id = $("#txtmdlcart_id").val();
        var product_id = $("#txtmdlprodID2").val();
        var productQuantity = $("#txtmdlbuynowproductquantity").text();
        var productPrice = ($("#txtmdlbuynowproductprice").text()).replace(/,/g, "");
        var ProductShipping = ($("#txtmdlbuynowshiptotal").text()).replace(/,/g, "");
        var Producttotalamount = ($("#txtmdlbuynowpaymenttotamt").text()).replace(/,/g, "");
        var productpaymentmeth = $("#txtmdlbuynowpaymentmethod").val();
        var textpaymentmethrefnum = $("#txtpaymentmethrefnum").val();

        $(".loadload").show();
        $.ajax({
            type: 'POST',
            url: 'cart_class.php',
            data: 'product_id=' + product_id + '&cart_id=' + cart_id + '&productQuantity=' + productQuantity +
                '&productPrice=' + productPrice + '&ProductShipping=' + ProductShipping + '&Producttotalamount=' +
                Producttotalamount + '&productpaymentmeth=' + productpaymentmeth + '&textpaymentmethrefnum=' +
                textpaymentmethrefnum + '&form=btnplaceordergcash',
            success: function(data) {
                setTimeout(function() {
                    $(".loadload").hide();

                    Swal.fire({
                        title: "Success!",
                        text: "Successfully ordered.",
                        type: "success",
                        icon: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#2778c4",
                        confirmButtonText: "Okay",
                        closeOnConfirm: false
                    }).then((result) => {
                        if (result.value) {
                            uploadpaymentpicture(data)
                        }
                    });

                }, 500);
            }
        })
    }

    function fncShowvalidPic() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("txtvalidImagefile").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("updatevalidImage").src = oFREvent.target.result;
        };
    }

    function uploadpaymentpicture(genid) {
        $("#txtvalidimageID").val(genid);
        var data = new FormData($('#frmUploadvalidPic')[0]);
        $.ajax({
            type: 'POST',
            url: 'uploadpaymentimage.php',
            data: data,
            mimeType: 'multipart/form-data',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                window.location = "purchases.php";
            }
        });
    }

    // DELETE CART
    function deletecart(cart_id) {
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
                    url: 'cart_class.php',
                    data: 'cart_id=' + cart_id + '&form=deletecart',
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
                                    window.location = "cart.php";
                                }
                            });
                        }, 1000);
                    }
                })
            }
        })
    }
    // DELETE CART END

    function openBuyAllModal() {
        // Fetch cart items from the server
        $.ajax({
            type: 'POST',
            url: 'cart_class2.php',
            data: {
                form: 'fncdsplylistofcartall'
            },
            success: function(data) {
                // Print the entire response data to the console
                console.log(data);

                // Split the server's response
                var show = data.split("|");

                // Insert cart items into the modal
                $('#listofallcarts').html(show[0]);

                // Open the modal
                $('#modal_productbuynowall').modal('show');

                // Set values after the modal is shown
                $('#modal_productbuynowall').on('shown.bs.modal', function() {
                    $("#txtmdlcheckoutname1").text(show[1]); // Check the index for the name
                    $("#txtmdlcheckoutphone1").text(show[2]); // Check the index for the phone
                    $("#txtmdlcheckoutaddress1").text(show[3]); // Check the index for the address
                    $("#txtmdlbuynowsubtotal1").text(parseFloat(show[4]).toFixed(
                        2)); // Check the index for the subtotal

                });
            },
            error: function() {
                // Handle errors here
                Swal.fire(
                    'Error',
                    'There was a problem fetching your cart items. Please try again.',
                    'error'
                );
            }
        });
    }

    function btnplaceorderall() {
        var paymentMethod = $("#txtmdlbuynowpaymentmethod").val();
        var courier = $("#txtmdlbuynowcourier").val();
        var tracking = $("#txtmdlbuynowtracking").val();

        if (paymentMethod !== "") {
            // Display loading indicator
            $(".loadload").show();

            // Perform AJAX request to process the order for all products in the cart
            $.ajax({
                type: 'POST',
                url: 'cart_class2.php', // Update with the correct URL
                data: {
                    form: 'fncplaceorderall',
                    payment_method: paymentMethod,
                    courier: courier,
                    tracking: tracking
                },
                success: function(data) {
                    // Hide loading indicator
                    $(".loadload").hide();

                    // Handle the success response
                    if (data === "success") {
                        // Display a success message
                        Swal.fire({
                            title: "Success!",
                            text: "Successfully ordered all products.",
                            type: "success",
                            icon: "success",
                            showCancelButton: false,
                            confirmButtonColor: "#2778c4",
                            confirmButtonText: "Okay",
                            closeOnConfirm: false
                        }).then((result) => {
                            if (result.value) {
                                // Redirect to the purchases page or perform any other desired action
                                window.location = "purchases.php";
                            }
                        });
                    } else {
                        // Handle other possible responses or errors
                        Swal.fire({
                            title: "Success!",
                            text: "Successfully ordered all products.",
                            type: "success",
                            icon: "success",
                            showCancelButton: false,
                            confirmButtonColor: "#2778c4",
                            confirmButtonText: "Okay",
                            closeOnConfirm: false
                        }).then((result) => {
                            if (result.value) {
                                // Redirect to the purchases page or perform any other desired action
                                window.location = "purchases.php";
                            }
                        });
                    }
                },
                error: function() {
                    // Hide loading indicator
                    $(".loadload").hide();

                    // Handle AJAX errors
                    Swal.fire(
                        'Error',
                        'There was an error processing your request. Please try again.',
                        'error'
                    );
                }
            });
        } else {
            // Display a warning if no payment method is selected
            Swal.fire(
                'ALERT',
                'Please select a payment method.',
                'warning'
            );
        }
    }
</script>