<?php
require_once("connect.php");

session_start();
?>

<head>
    <link rel="manifest" href="manifest.json" />
    <link href="/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/products.css">
    <?php include 'community/header.php'; ?>
    <?php include('header.php'); ?>
</head>

<body>
    <div class="loadload">
        <div class="spinner-border text-secondary" role="status"></div>
    </div>

    <script type="text/javascript">
        $(function() {
            setTimeout(function() {
                $(".loadload").hide();
            }, 300);
        })
    </script>
    <script>
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.register("service-worker.js");
        }
    </script>
    <script src="/script.js"></script>
    <!--shop  area start-->
    <!--shop  area end-->

    <!-- PRODUCT DETAILS start-->
    <div class="modal fade" id="modal_productdet" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: #cfe2ce">
                <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="clearmdl_productdet();" style="left: 95%;">
                    <span aria-hidden="true"><i class="icon-x"></i></span>
                </button> -->
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="modal_body">
                    <div class="container">
                        <input type="hidden" id="txtmdlprodID">

                        <div class="product_details mb-4">
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    <div class="product-details-tab">
                                        <div id="img-1" class="zoomWrapper single-zoom" style="position: relative;">
                                            <a href="javascript:void(0)" id="mdlprodimage1"></a>
                                            <div class="soldout">Sold out</div>
                                        </div>
                                        <div class="single-zoom-thumb" id="mdlprodimage2">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7">
                                    <div class="product_d_right">
                                        <h1 style="margin-bottom: 5px; font-size: 30px;"><a href="javascript:void(0)" id="txtmdlprodname"></a></h1>
                                        <div class="product_ratting" id="txtmdlprodrates"></div>
                                        <div class="price_box">
                                            <span style="color:#4C644B" class="current_price">₱ <span id="txtmdlprodprice">0.00</span>/<span id="txtmdlprodunit"></span>
                                        </div>
                                        <div class="product_desc">
                                            <p id="txtmdlproddesc"></p>
                                        </div>
                                        <div class="product_variant quantity">
                                            <label>quantity</label>
                                            <input style="border: 1px solid #4C644B !important;" min="1" max="100" value="1" type="number" class="focus" id="txtmdlprodquantity" onchange="quantityvalidation()" onkeyup="quantityvalidation()">
                                        </div>
                                        <div>
                                            <span>Stock: <a href="javascript:void(0)" id="txtstock"></a></span><br>
                                        </div>
                                        <div class="product_meta">
                                            <span>Category: <a href="javascript:void(0)" id="txtmdlprodcategory"></a></span><br>
                                            <span>Available at: <a href="javascript:void(0)" id="txtmdlprodavailat"></a></span><br>
                                            <span>Available until: <a href="javascript:void(0)" id="txtmdlprodavailuntil"></a></span><br>
                                            <input type="hidden" id="txtmdlprodsellerID">
                                            <!-- <a href="javascript:void(0)" id="txtmdlprodsellername"></a>  -->
                                            <form method="POST" action="findshop.php">
                                                <span>Seller:
                                                    <input type="hidden" name="shopseller_id" id="shopseller_id">
                                                    <input type="hidden" name="txtmdlprodsellername2" id="txtmdlprodsellername2">
                                                    <button id="txtmdlprodsellername" name="findshop" type="submit" style="border:unset;background-color: unset;"></button>
                                            </form>

                                            <?php if (empty($_SESSION['user_id']) || $_SESSION['usertype'] !== 'CUSTOMER') { ?>

                                            <?php } else { ?>
                                                <br><a onclick="openproductsellerchat();" style="margin-left: 0px !important; color:#4C644B; border: 1px solid #4C644B !important; padding: 8px 10px; border-radius: 4px; margin-top:10px;"><span>Chat
                                                        Seller:</span> <i class='fa fa-comment'></i></a>

                                            <?php } ?></span>
                                        </div>

                                        <div class="view-add-group">
                                            <button class="product-add" onclick="btnaddtocart()" title="Add to Cart">
                                                <!-- <i class="fas fa-shopping-basket"></i> -->
                                                <span>add to cart</span>
                                            </button>
                                        </div>
                                        <div class="view-action-group">
                                            <button class="product-add" onclick="btnbuynow()" title="Buy Now">
                                                <!-- <i class="fas fa-shopping-basket"></i> -->
                                                <span>Buy Now</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--product info start-->
                        <div class="product_d_info" style="border: 1px solid rgb(120 130 140 / 20%);">
                            <div class="row">
                                <div class="col-12">
                                    <div class="product_d_inner">
                                        <div class="product_info_button">
                                            <ul class="nav" role="tablist" id="nav-tab">
                                                <li>
                                                    <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false" id="tabreviews">Reviews</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">

                                        </div>


                                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                                            <div class="reviews_wrapper">
                                                <h2></h2>
                                                <div id="txtmdlprodcomment"></div>

                                                <?php if (empty($_SESSION['user_id'])) { ?>

                                                <?php } else { ?>
                                                    <div class="product_ratting mb-10">
                                                        <h3 style="margin-bottom:0px;">Your rating</h3>
                                                        <ul>
                                                            <li><a href="javascript:void(0)" onclick="fncselectrating(1)"><i class="fa fa-star wawa starhover"></i></a></li>
                                                            <li><a href="javascript:void(0)" onclick="fncselectrating(2)"><i class="fa fa-star wawa starhover"></i></a></li>
                                                            <li><a href="javascript:void(0)" onclick="fncselectrating(3)"><i class="fa fa-star wawa starhover"></i></a></li>
                                                            <li><a href="javascript:void(0)" onclick="fncselectrating(4)"><i class="fa fa-star wawa starhover"></i></a></li>
                                                            <li><a href="javascript:void(0)" onclick="fncselectrating(5)"><i class="fa fa-star wawa starhover"></i></a></li>
                                                        </ul>
                                                        <input type="hidden" id="txtmdlprodnumberofrating">
                                                    </div>
                                                    <div class="product_review_form" style="border: 1px solid rgb(120 130 140 / 13%);">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label for="review_comment" style="font-weight:600">Your
                                                                    Review </label>
                                                                <textarea placeholder="enter review..." name="comment" id="txtmdlprodinputcomment" style="margin-bottom: 0px;"></textarea>
                                                            </div>
                                                        </div>
                                                        <button style="margin-top: 10px;" onclick="btnsubmitcomment();">Submit</button>
                                                    </div>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--product info end-->

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- PRODUCT DETAILS end-->

    <!-- BUY NOW MODAL -->
    <div class="modal fade" id="modal_productbuynow" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"
                    onclick="clearbuynowmodal();" style="left: 95%;">
                    <span aria-hidden="true"><i class="icon-x"></i></span>
                </button> -->
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="modal_body" style="padding: 29px 6px 20px; background-color: #cfe2ce; border-radius: 40px; border: 1px solid #82a131;">
                    <div class="container">
                        <input type="hidden" id="txtmdlprodID2">

                        <!--Delivery Address Details start-->
                        <div class="coupon_area" style="margin-top: 30px;margin-bottom: 20px;">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="coupon_code left">
                                        <h3 style="background-color: #4c644b;">Delivery Address</h3>
                                        <div class=" coupon_inner" style="padding: 10px 20px 10px;">
                                            <h4 style="font-weight:400"><i style="color: #79a206;" class="fa fa-user" aria-hidden="true"></i> <span id="txtmdlcheckoutname"></span></h4>
                                            <h4 style="font-weight:400"><i style="color: #79a206;" class="fa fa-phone" aria-hidden="true"></i> <span id="txtmdlcheckoutphone"></span></h4>
                                            <h4 style="font-weight:400"><i style="color: #79a206;" class="fa fa-map-marker" aria-hidden="true"></i>
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
                                                                            <td style="width: 100%;text-align: left;">
                                                                                <img src="../" style="width:50px" id="txtmdlbuynowproductimage">
                                                                                <a href="#"><span id="txtmdlbuynowproductname"></span></a>
                                                                            </td>
                                                                            <td style="width: 3%;text-align: left;">
                                                                                <span id="txtmdlbuynowproductquantity"></span>
                                                                            </td>
                                                                            <td style="width: 3%;text-align: left;">₱
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
                                                    <div class="paymentmethgcash hoverpaymentmeth" style="padding: 10px 15px 10px; border-radius: 5px;cursor: pointer;" onclick="paymentgcash();">
                                                        <div class="services_item" style="margin-bottom: 0px;">
                                                            <div class="services_icone">
                                                                <i class="fa fa-credit-card"></i>
                                                            </div>
                                                            <div class="services_desc">
                                                                <h4 style="margin-bottom: 0rem;">GCASH</h4>

                                                                <p>Pay via GCash.
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
                            <button onclick="btnplaceorder()">place order</button>
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
            <div class="modal-content" style="border: 2px solid #82a131;background-color: #cfe2ce; border-radius: 10px">
                <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="" style="left: 92%;">
                    <span aria-hidden="true"><i class="icon-x"></i></span>
                </button> -->
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="modal_body" style="padding: 29px 6px 20px;">
                    <div class="container">
                        <input type="hidden" id="txtmdlorderID">

                        <div class="row" style="justify-content: center;text-align: center; margin-top: 20px;">
                            <div class="col-lg-6 col-md-12">
                                <h4 style="font-weight: 400"><img src="images/gcashLogo.png" alt=""></h4>
                                <div class="blog_thumb mb-2">
                                    <a href="javascript:void(0)"><img src="../" id="txtsellergcashimage"></a>
                                </div>
                                <h3 style="font-weight:500" id="txtsellergcashname"></h3>
                                <h4 style="font-weight:400; font-size:18px" id="txtsellergcashnumber"></h4>
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
    <!-- PAYMENT UPLOAD end-->

    <!-- CHAT start-->
    <div class="modal fade" id="modal_chat" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-paymentneed">
            <div class="modal-content" style="width:50%; border: 1px solid #4C644B;background-color: #CFE2CE;  border-radius: 10px;">
                <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="clearchat()"
                    style="left: 92%;">
                    <span aria-hidden="true"><i class="icon-x"></i></span>
                </button> -->
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="modal_body" style="padding: 29px 6px 20px; background-color:#CFE2CE !important;">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="contact_message form">
                                    <p style="margin-bottom: 10px;">
                                        <label>Message to seller</label>
                                        <textarea id="txtsendchatmessage" style="height: 150px;margin-bottom: 0px;"></textarea>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="cart_submit" style="padding: 0px;text-align: left;">
                            <button onclick="sendchattoseller()" style="padding: 10px 20px;">Send</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('js-vendor.php'); ?>
    <?php include('jscripts.php'); ?>

</body>
<!-- CHAT end-->

<script type="text/javascript">
    $(function() {
        $("#products").addClass('active');
        fncdisplaylistofproducts();

        $(".wawa").click(function() {
            $(".wawa").css("color", "#79a206");
            $(this).css("color", "#FEB954");
        })

        $(".numonly").keydown(function(event) {
            if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 190 || event.keyCode ==
                9 ||
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

        $("#txtsearchspecproduct").keyup(function(e) {
            if ($('#txtsearchspecproduct').val() == "") {
                fncdisplaylistofproducts();
            } else {
                fncdisplaylistofproducts();
            }
        });

        dsplylistoffiltercategory();
    })
    // products.php
    $(function() {
        var searchParam = new URLSearchParams(window.location.search).get('search');
        if (searchParam) {
            // Handle search term, e.g., update the search input field
            $("#txtsearchspecproduct").val(searchParam);
            // Call the function to display products based on the search term
            fncdisplaylistofproducts();
        }

    });

    function fncdisplaylistofproducts() {
        var srchprod = $("#txtsearchspecproduct").val();
        var filteracc = $("#filteraccomodation").val();
        $.ajax({
            type: 'POST',
            url: 'products_class.php',
            data: 'srchprod=' + srchprod + '&filteracc=' + filteracc + '&form=fncdisplaylistofproducts',
            success: function(data) {
                $("#displaylistofrooms").html(data);
            }
        });
    }



    function fncdisplaylistofproducts() {
        var srchprod = $("#txtsearchspecproduct").val();
        var filteracc = $("#filteraccomodation").val();
        // alert("wawa");
        $.ajax({
            type: 'POST',
            url: 'products_class.php',
            data: 'srchprod=' + srchprod + '&filteracc=' + filteracc + '&form=fncdisplaylistofproducts',
            success: function(data) {
                $("#displaylistofrooms").html(data);
            }
        });
    }

    function fncdisplaylistofproducts() {
        var pricerange = $("#pricerange").val();
        var srchprod = $("#txtsearchspecproduct").val();
        var filteracc = $("#filteraccomodation").val();
        // alert("wawa");
        $.ajax({
            type: 'POST',
            url: 'products_class.php',
            data: 'srchprod=' + srchprod + '&filteracc=' + filteracc + '&pricerange=' + pricerange +
                '&form=fncdisplaylistofproducts',
            success: function(data) {
                $("#displaylistofrooms").html(data);
            }
        });


    }



    // DISPLAYING OF CATEGORIES
    function dsplylistoffiltercategory() {
        $.ajax({
            type: 'POST',
            url: 'products_class.php',
            data: 'form=dsplylistoffiltercategory',
            success: function(data) {
                $("#filteraccomodation").html(data);
            }
        });
    }

    function reqField1(classN) {
        var isValid = 1;
        $('.' + classN).each(function() {
            if ($(this).val() == '') {
                $(this).css('border', '1px #a94442 solid');
                $(this).addClass('lala');
                isValid = 0;
            } else {
                $(this).css('border', '');
                $(this).removeClass('lala');
            }
        });

        return isValid;
    }

    function openproductdetails(product_id) {
        $("#modal_productdet").modal('show');

        $("#txtmdlprodID").val(product_id);
        $.ajax({
            type: 'POST',
            url: 'products_class.php',
            data: 'product_id=' + product_id + '&form=fncdisplayproddet',
            success: function(data) {
                var show = data.split("|");
                $("#mdlprodimage1").html(show[4]);
                $("#mdlprodimage2").html(show[5]);

                $("#txtmdlprodname").text(show[0]);
                $("#txtmdlprodrates").html(show[1]);
                $("#txtmdlprodprice").text(show[2]);
                $("#txtmdlproddesc").text(show[3]);
                $("#txtmdlprodcategory").text(show[6]);

                $("#txtmdlprodunit").text(show[7]);
                $("#txtmdlprodavailat").text(show[8]);
                $("#txtmdlprodavailuntil").text(show[9]);
                $("#txtmdlprodfamily").text(show[10]);

                $("#txtmdlprodlight").text(show[11]);
                $("#txtmdlprodfrost").text(show[12]);
                $("#txtmdlprodsoil").text(show[13]);
                $("#txtmdlprodwater").text(show[14]);
                $("#txtmdlprodfulldimen").text(show[15]);
                $("#txtmdlprodsource").text(show[16]);
                $("#txtmdlprodcomment").html(show[17]);

                $("#txtmdlprodsellerID").val(show[18]);
                $("#txtmdlprodsellername").text(show[19]);
                $('#shopseller_id').val(show[18])
                $("#txtmdlprodsellername2").val(show[19]);

                // if (show[20] <= 0) {
                //     $("#txtstock").text('Out Of Stock');
                var availableUntilDate = new Date(show[9]);
                var currentDate = new Date();
                if (availableUntilDate < currentDate) {
                    $("#txtmdlprodavailuntil").text('Not Available');
                    $('.contact_message button').attr('disabled', true);
                    $('.notavailable').addClass('notavailable_show');

                    // Show the not available content
                    $('.notavailable').show();
                    $('.product-add').prop('disabled', true);
                } else {
                    $("#txtmdlprodavailuntil").text(show[9]);
                    $('.contact_message button').attr('disabled', false);
                    $('product-add').attr('disabled', false);
                    $('.notavailable').removeClass('notavailable_show');
                    // Show the available content
                    $('.notavailable').hide();
                    $('.product-add').prop('disabled', false);
                }
                // Stock checking
                if (show[20] <= 0) {
                    $("#txtstock").text('Out Of Stock');
                    $('.contact_message button').attr('disabled', true);
                    $('.soldout').addClass('soldout_show');
                    $('.product-add').prop('disabled', true);
                } else {
                    $("#txtstock").text(show[20]);
                    $('.product-add').prop('disabled', false);
                    $('.soldout').removeClass('soldout_show');
                    $('.contact_message button').attr('disabled', false);
                }

                // ... (rest of your existing code)
            }
        });
    }

    //     $('.contact_message button').attr('disabled', true)
    // }else{
    //     $("#txtstock").text(show[20]);
    //     $('.contact_message button').attr('disabled', false)
    // }
    if (show[20] <= 0) {
        $("#txtstock").text('Out Of Stock');
        $('.contact_message button').attr('disabled', true)
        $('.soldout').addClass('soldout_show')
    } else {
        $("#txtstock").text(show[20]);
        $('.contact_message button').attr('disabled', false)
        $('.soldout').removeClass('soldout_show')
    }



    function clearmdl_productdet() {
        $("#txtmdlprodnumberofrating").val("");
        $("#txtmdlprodquantity").val("1");
        $("#txtmdlprodinputcomment").val("");
        $(".wawa").css("color", "#79a206");

        $("#tabdesc").addClass("active");
        $("#tabplantcare").removeClass("active");
        $("#tabreviews").removeClass("active");
        $("#info").addClass("show active");
        $("#sheet").removeClass("show active");
        $("#reviews").removeClass("show active");
    }

    function fncselectrating(rate) {
        $("#txtmdlprodnumberofrating").val(rate);
    }

    function quantityvalidation() {
        var textmdlprodquantity = $("#txtmdlprodquantity").val();
        var textmdlprodID = $("#txtmdlprodID").val();

        $.ajax({
            type: 'POST',
            url: 'products_class.php',
            data: 'textmdlprodquantity=' + textmdlprodquantity + '&textmdlprodID=' + textmdlprodID +
                '&form=checkquantityindb',
            success: function(data) {

                if (data == 1) {
                    if (textmdlprodquantity <= 100) {

                    } else {
                        Swal.fire(
                            'ALERT',
                            'Quantity cannot exceed 100.',
                            'warning'
                        )
                        $("#txtmdlprodquantity").val(1);
                    }
                } else {
                    Swal.fire(
                        'ALERT',
                        'Out of stock.',
                        'warning'
                    )
                    $("#txtmdlprodquantity").val(1);
                }

            }
        })
    }

    // SUBMIT COMMENT
    function btnsubmitcomment() {
        $.ajax({
            type: 'POST',
            url: 'products_class.php',
            data: 'form=checkifloggedin',
            success: function(data) {
                if (data == 1) {
                    window.location = "../buyer/login.php";
                } else {
                    btnsubmitsavecomment();
                }
            }
        });
    }

    function btnsubmitsavecomment() {
        var textmdlprodID = $("#txtmdlprodID").val();
        var textmdlprodnumberofrating = $("#txtmdlprodnumberofrating").val();
        var textmdlprodinputcomment = $("#txtmdlprodinputcomment").val();

        if (textmdlprodnumberofrating != "") {
            if (textmdlprodinputcomment != "") {
                $.ajax({
                    type: 'POST',
                    url: 'products_class.php',
                    data: 'textmdlprodnumberofrating=' + textmdlprodnumberofrating +
                        '&textmdlprodinputcomment=' +
                        textmdlprodinputcomment + '&textmdlprodID=' + textmdlprodID +
                        '&form=btnsubmitsavecomment',
                    success: function(data) {
                        var show = data.split("|");
                        $("#txtmdlprodrates").html(show[0]);
                        $("#txtmdlprodcomment").html(show[1]);
                        $("#txtmdlprodnumberofrating").val("");
                        $("#txtmdlprodinputcomment").val("");
                    }
                })
            } else {
                Swal.fire(
                    'ALERT',
                    'Please enter your comment.',
                    'warning'
                )
            }
        } else {
            Swal.fire(
                'ALERT',
                'Please enter your rate.',
                'warning'
            )
        }
    }

    // ADD TO CART
    function btnaddtocart() {
        $.ajax({
            type: 'POST',
            url: 'products_class.php',
            data: 'form=checkifloggedin',
            success: function(data) {
                if (data == 1) {
                    window.location = "../buyer/login.php";
                } else {
                    btnsaveaddtocart();
                }
            }
        });
    }

    function btnsaveaddtocart() {
        var textmdlprodID = $("#txtmdlprodID").val();
        var textmdlprodquantity = $("#txtmdlprodquantity").val();
        var textmdlprodprice = ($("#txtmdlprodprice").text()).replace(/,/g, "");

        if (textmdlprodquantity == 0 || textmdlprodquantity == "") {
            Swal.fire(
                'ALERT',
                'Please enter a quantity.',
                'warning'
            )
        } else {
            $(".loadload").show();
            $.ajax({
                type: 'POST',
                url: 'products_class.php',
                data: 'textmdlprodID=' + textmdlprodID + '&textmdlprodquantity=' + textmdlprodquantity +
                    '&textmdlprodprice=' + textmdlprodprice + '&form=btnsaveaddtocart',
                success: function(data) {
                    setTimeout(function() {
                        $(".loadload").hide();
                        Swal.fire({
                            title: "Success!",
                            text: "Successfully added to cart.",
                            type: "success",
                            icon: "success",
                            showCancelButton: false,
                            confirmButtonColor: "#2778c4",
                            confirmButtonText: "Okay",
                            closeOnConfirm: false
                        }).then((result) => {
                            if (result.value) {
                                window.location = "cart2.php";
                            }
                        });
                    }, 500);

                }
            })
        }

    }

    // BUY NOW BUTTON
    function btnbuynow() {
        var textmdlprodquantity = $("#txtmdlprodquantity").val();

        $.ajax({
            type: 'POST',
            url: 'products_class.php',
            data: 'form=checkifloggedin',
            success: function(data) {
                if (data == 1) {
                    window.location = "../buyer/login.php";
                } else {
                    if (textmdlprodquantity == "" || textmdlprodquantity == 0) {
                        Swal.fire(
                            'ALERT',
                            'Please enter a quantity.',
                            'warning'
                        )
                    } else {
                        openproductbuynowdet();
                    }
                }
            }
        });
    }

    function openproductbuynowdet() {
        $("#modal_productbuynow").modal('show');

        var textmdlprodID = $("#txtmdlprodID").val();
        var textmdlprodquantity = $("#txtmdlprodquantity").val();

        $("#txtmdlprodID2").val(textmdlprodID);
        $("#txtmdlbuynowproductquantity").text(textmdlprodquantity);

        $.ajax({
            type: 'POST',
            url: 'products_class.php',
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

        $(".paymentmethgcash").removeClass('hoverpaymentmeth2');
        $(".paymentmethgcash").addClass('hoverpaymentmeth');
    }

    function paymentgcash() {
        $("#txtmdlbuynowpaymentmethod").val("GCASH");
        $(".paymentmethgcash").addClass('hoverpaymentmeth2');
        $(".paymentmethgcash").removeClass('hoverpaymentmeth');

        $(".paymentmethcash").removeClass('hoverpaymentmeth2');
        $(".paymentmethcash").addClass('hoverpaymentmeth');
    }

    function btnplaceorder() {
        var product_id = $("#txtmdlprodID2").val();
        var productQuantity = $("#txtmdlbuynowproductquantity").text();
        var productPrice = ($("#txtmdlbuynowproductprice").text()).replace(/,/g, "");
        var ProductShipping = ($("#txtmdlbuynowshiptotal").text()).replace(/,/g, "");
        var Producttotalamount = ($("#txtmdlbuynowpaymenttotamt").text()).replace(/,/g, "");
        var productpaymentmeth = $("#txtmdlbuynowpaymentmethod").val();

        if (productpaymentmeth != "") {
            if (productpaymentmeth == "CASH") {
                $(".loadload").show();
                $.ajax({
                    type: 'POST',
                    url: 'products_class.php',
                    data: 'product_id=' + product_id + '&productQuantity=' + productQuantity +
                        '&productPrice=' +
                        productPrice + '&ProductShipping=' + ProductShipping + '&Producttotalamount=' +
                        Producttotalamount + '&productpaymentmeth=' + productpaymentmeth +
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
            url: 'products_class.php',
            data: 'product_id=' + product_id + '&form=fncloadpaymentgcashmodal',
            success: function(data) {
                var show = data.split("|");
                $("#txtsellergcashname").text(show[0]);
                $("#txtsellergcashnumber").text(show[1]);
                $("#txtsellergcashimage").attr("src", show[2]);
            }
        });
    }

    function submitpayment() {
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
            url: 'products_class.php',
            data: 'product_id=' + product_id + '&productQuantity=' + productQuantity + '&productPrice=' +
                productPrice + '&ProductShipping=' + ProductShipping + '&Producttotalamount=' +
                Producttotalamount +
                '&productpaymentmeth=' + productpaymentmeth + '&textpaymentmethrefnum=' +
                textpaymentmethrefnum +
                '&form=btnplaceordergcash',
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

    function openproductsellerchat() {
        $("#modal_chat").modal('show');
    }

    function clearchat() {
        $("#txtsendchatmessage").val("");
    }


    function sendChatToSeller() {
        var textmdlprodsellerID = $("#txtmdlprodsellerID").val();
        var textsendchatmessage = $("#txtsendchatmessage").val();
        console.log("Sending message to seller with ID: " + textmdlprodsellerID);
        $(".loadload").show();

        $.ajax({
            type: 'POST',
            url: 'products_class.php',
            data: {
                textmdlprodsellerID: textmdlprodsellerID,
                textsendchatmessage: textsendchatmessage,
                form: 'sendchattoseller'
            },
            success: function(data) {
                setTimeout(function() {
                    $(".loadload").hide();

                    Swal.fire({
                        title: "Success!",
                        text: "Successfully sent message.",
                        type: "success",
                        icon: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#2778c4",
                        confirmButtonText: "Okay",
                        closeOnConfirm: false
                    }).then((result) => {
                        if (result.value) {
                            $("#modal_chat").modal('hide');
                            clearchat();
                        }
                    });

                }, 500);
            },
            error: function(xhr, textStatus, errorThrown) {
                $(".loadload").hide();
                console.error("Error sending chat:", errorThrown);
                // Handle the error as needed
            }
        });
    }
</script>