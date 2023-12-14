<style type="text/css">
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

    .searchbuttonneed {
        background-color: #fff;
        border-radius: 5px;
        border: solid 1px #e8e8e8;
        font-size: 14px;
        font-weight: normal;
        height: 42px;
        line-height: 40px;
    }

    .searchproductneed {
        display: flex;
        border-radius: 0px;
        border: 1px solid #e1e1e1;
        background: #fff;
        width: 100%;
    }

    .soldout,
    .soldoutshow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.5);
        width: 100px;
        height: 100px;
        place-items: center;
        display: grid;
        border-radius: 50%;
        color: #fff;
        opacity: 0;
        visibility: hidden;
    }

    .soldoutshow {
        opacity: 1;
        visibility: visible;
    }

    .soldout_show {
        opacity: 1;
        visibility: visible;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .search_container {
            display: block;
            margin-right: 0;
        }

        .search_box {
            border: 1px solid #e1e1e1;
            margin-bottom: 0px;
        }
    }
</style>

<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h3>PRODUCTS</h3>
                    <ul>
                        <li><a href="index.php?url=home">home</a></li>
                        <li>Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--shop  area start-->
<div class="shop_area shop_fullwidth mt-30">
    <div class="container">
        <div class="row">

            <div class="col-4">
                <div class="search_container" style="margin-right: 0px;">
                    <div class="searchproductneed">
                        <div class="search_box">
                            <input placeholder="Search product . . ." type="text" style="height: 45px;" id="txtsearchspecproduct">
                            <button type="submit"><i class="icon-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper" style="border: 0px solid #ddd;padding: 0px 0px;float: right;">
                    <select class="nice-select" name="orderby" id="filteraccomodation" onchange="fncdisplaylistofproducts();" style="height: 47px;border-radius: 0px;line-height: 47px;">
                        <option selected value="">- Category -</option>

                    </select>
                </div>
                <!--shop toolbar end-->
            </div>

            <div class="col-4">
                <!--shop toolbar start-->
                <div class="shop_toolbar_wrapper" style="border: 0px solid #ddd;padding: 0px 0px;float: right;">
                    <select class="nice-select" name="orderby" id="pricerange" onchange="fncdisplaylistofproducts();" style="height: 47px;border-radius: 0px;line-height: 47px;">
                        <option selected value="">- Price Range -</option>
                        <option value="Highest to Lowest">Highest to Lowest</option>
                        <option value="Lowest to Highest">Lowest to Highest</option>
                    </select>
                </div>
                <!--shop toolbar end-->
            </div>

        </div>

        <div class="row mt-2">
            <div class="col-12">
                <div class="row shop_wrapper grid_4" id="displaylistofrooms">
                </div>
            </div>
        </div>
    </div>
</div>
<!--shop  area end-->

<!-- PRODUCT DETAILS start-->
<div class="modal fade" id="modal_productdet" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="clearmdl_productdet();" style="left: 95%;">
                <span aria-hidden="true"><i class="icon-x"></i></span>
            </button>
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
                                    <h1 style="margin-bottom: 5px;"><a href="javascript:void(0)" id="txtmdlprodname"></a></h1>
                                    <div class="product_ratting" id="txtmdlprodrates"></div>
                                    <div class="price_box">
                                        <span class="current_price">₱ <span id="txtmdlprodprice">0.00</span></span>
                                    </div>
                                    <div class="product_desc">
                                        <p id="txtmdlproddesc"></p>
                                    </div>
                                    <div class="product_variant quantity">
                                        <label>quantity</label>
                                        <input min="1" max="100" value="1" type="number" class="focus" id="txtmdlprodquantity" onchange="quantityvalidation()" onkeyup="quantityvalidation()">
                                    </div>
                                    <div>
                                        <span>Stock: <a href="javascript:void(0)" id="txtstock"></a></span><br>
                                    </div>
                                    <div class="product_meta">
                                        <span>Category: <a href="javascript:void(0)" id="txtmdlprodcategory"></a></span><br>
                                        <input type="hidden" id="txtmdlprodsellerID">
                                        <!-- <a href="javascript:void(0)" id="txtmdlprodsellername"></a>  -->
                                        <form method="POST" action="findshop.php">
                                            <span>Seller:
                                                <input type="hidden" name="shopsellerID" id="shopsellerID">
                                                <input type="hidden" name="txtmdlprodsellername2" id="txtmdlprodsellername2">
                                                <button id="txtmdlprodsellername" name="findshop" type="submit" style="border:unset;background-color: unset;"></button>
                                        </form>

                                        <?php if (empty($_SESSION['userID'])) { ?>

                                        <?php } else { ?>
                                            <a href="javascript:void(0)" style="color:#77baff;"><i class='fa fa-comment' onclick="openproductsellerchat();"></i></a>

                                        <?php } ?></span>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="contact_message form">
                                                <button type="button" onclick="btnaddtocart()" style="line-height: 35px;height: 35px;"> add to cart</button>
                                                <button type="button" onclick="btnbuynow()" style="line-height: 35px;height: 35px;"> buy now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--product info start-->
                    <div class="product_d_info">
                        <div class="row">
                            <div class="col-12">
                                <div class="product_d_inner">
                                    <div class="product_info_button">
                                        <ul class="nav" role="tablist" id="nav-tab">
                                            <li>
                                                <a class="active" data-bs-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false" id="tabdesc">Description</a>
                                            </li>
                                            <li>
                                                <a data-bs-toggle="tab" href="#sheet" role="tab" aria-controls="sheet" aria-selected="false" id="tabplantcare">Plant Care</a>
                                            </li>
                                            <li>
                                                <a data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false" id="tabreviews">Reviews</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                                            <div class="product_info_content">
                                                <h5 style="font-weight: 500; margin-bottom: 0px;text-transform: uppercase;">Origin</h5>
                                                <h5 id="txtmdlprodcommonname"></h5>

                                                <h5 style="font-weight: 500; margin-bottom: 0px;margin-top: 15px; text-transform: uppercase;">Latin Name</h5>
                                                <h5 id="txtmdlprodlatin"></h5>

                                                <h5 style="font-weight: 500; margin-bottom: 0px;margin-top: 15px; text-transform: uppercase;">Type</h5>
                                                <h5 id="txtmdlprodtype"></h5>

                                                <h5 style="font-weight: 500; margin-bottom: 0px;margin-top: 15px; text-transform: uppercase;">Family</h5>
                                                <h5 id="txtmdlprodfamily"></h5>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="sheet" role="tabpanel">
                                            <div class="product_d_table">
                                                <form action="#">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="first_child">LIGHT</td>
                                                                <td><span id="txtmdlprodlight"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="first_child">HUMIDITY</td>
                                                                <td><span id="txtmdlprodfrost"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="first_child">SOIL</td>
                                                                <td><span id="txtmdlprodsoil"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="first_child">WATER</td>
                                                                <td><span id="txtmdlprodwater"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="first_child">FULL DIMENSION</td>
                                                                <td><span id="txtmdlprodfulldimen"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="first_child">SOURCE</td>
                                                                <td><span id="txtmdlprodsource"></span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                                            <div class="reviews_wrapper">
                                                <h2></h2>
                                                <div id="txtmdlprodcomment"></div>

                                                <?php if (empty($_SESSION['userID'])) { ?>

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
                                                    <div class="product_review_form">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label for="review_comment" style="font-weight:600">Your Review </label>
                                                                <textarea name="comment" id="txtmdlprodinputcomment" style="margin-bottom: 0px;"></textarea>
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
        <div class="modal-content" style="border: 10px solid #82a131;">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="clearbuynowmodal();" style="left: 95%;">
                <span aria-hidden="true"><i class="icon-x"></i></span>
            </button>
            <div class="modal_body" style="padding: 29px 6px 20px;">
                <div class="container">
                    <input type="hidden" id="txtmdlprodID2">

                    <!--Delivery Address Details start-->
                    <div class="coupon_area" style="margin-top: 30px;margin-bottom: 20px;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="coupon_code left">
                                    <h3>Delivery Address</h3>
                                    <div class="coupon_inner" style="padding: 10px 20px 10px;">
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
                                    <h3>Products Ordered</h3>

                                    <div class="shopping_cart_area">
                                        <div class="container" style="padding-right: 10px;padding-left: 10px;">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="table_desc" style="margin-bottom: 10px;">
                                                        <div class="cart_page table-responsive">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th style="width: 80%;text-align: left;">Product</th>
                                                                        <th style="width: 3%;text-align: left;">Quantity</th>
                                                                        <th style="width: 3%;text-align: left;">Price</th>
                                                                        <th style="width: 3%;text-align: left;">Subtotal</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width: 80%;text-align: left;">
                                                                            <img src="" style="width:50px" id="txtmdlbuynowproductimage">
                                                                            <a href="#"><span id="txtmdlbuynowproductname"></span></a>
                                                                        </td>
                                                                        <td style="width: 3%;text-align: left;"><span id="txtmdlbuynowproductquantity"></span></td>
                                                                        <td style="width: 3%;text-align: left;">₱ <span id="txtmdlbuynowproductprice">0.00</span></td>
                                                                        <td style="width: 3%;text-align: left;">₱ <span id="txtmdlbuynowproductsubtotal">0.00</span></td>
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
                                    <h3 style="margin-bottom: 0rem;">Payment Method</h3>
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
                                    <h3 style="margin-bottom: 0rem;">Order Summary</h3>
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
        <div class="modal-content" style="border: 10px solid #82a131;background-color: #eef4dd;">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="" style="left: 92%;">
                <span aria-hidden="true"><i class="icon-x"></i></span>
            </button>
            <div class="modal_body" style="padding: 29px 6px 20px;">
                <div class="container">
                    <input type="hidden" id="txtmdlorderID">

                    <div class="row" style="justify-content: center;text-align: center; margin-top: 20px;">
                        <div class="col-lg-6 col-md-12">
                            <h4 style="font-weight: 400">Scan to pay</h4>
                            <div class="blog_thumb mb-2">
                                <a href="javascript:void(0)"><img src="" id="txtsellergcashimage"></a>
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
        <div class="modal-content" style="border: 10px solid #82a131;background-color: #eef4dd;">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="clearchat()" style="left: 92%;">
                <span aria-hidden="true"><i class="icon-x"></i></span>
            </button>
            <div class="modal_body" style="padding: 29px 6px 20px;">
                <div class="container">

                    <div class="row" style="">
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
            if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 190 || event.keyCode == 9 || event.keyCode == 188) {

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
            data: 'srchprod=' + srchprod + '&filteracc=' + filteracc + '&pricerange=' + pricerange + '&form=fncdisplaylistofproducts',
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

    function openproductdetails(productID) {
        $("#modal_productdet").modal('show');

        $("#txtmdlprodID").val(productID);
        $.ajax({
            type: 'POST',
            url: 'products_class.php',
            data: 'productID=' + productID + '&form=fncdisplayproddet',
            success: function(data) {
                var show = data.split("|");
                $("#mdlprodimage1").html(show[4]);
                $("#mdlprodimage2").html(show[5]);

                $("#txtmdlprodname").text(show[0]);
                $("#txtmdlprodrates").html(show[1]);
                $("#txtmdlprodprice").text(show[2]);
                $("#txtmdlproddesc").text(show[3]);
                $("#txtmdlprodcategory").text(show[6]);

                $("#txtmdlprodcommonname").text(show[7]);
                $("#txtmdlprodlatin").text(show[8]);
                $("#txtmdlprodtype").text(show[9]);
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
                $('#shopsellerID').val(show[18])
                $("#txtmdlprodsellername2").val(show[19]);

                // if (show[20] <= 0) {
                //     $("#txtstock").text('Out Of Stock');
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

            }
        });
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
            data: 'textmdlprodquantity=' + textmdlprodquantity + '&textmdlprodID=' + textmdlprodID + '&form=checkquantityindb',
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
                    window.location = "index.php?url=login";
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
                    data: 'textmdlprodnumberofrating=' + textmdlprodnumberofrating + '&textmdlprodinputcomment=' + textmdlprodinputcomment + '&textmdlprodID=' + textmdlprodID + '&form=btnsubmitsavecomment',
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
                    window.location = "index.php?url=login";
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
                data: 'textmdlprodID=' + textmdlprodID + '&textmdlprodquantity=' + textmdlprodquantity + '&textmdlprodprice=' + textmdlprodprice + '&form=btnsaveaddtocart',
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
                                window.location = "index.php?url=cart";
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
                    window.location = "index.php?url=login";
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
            data: 'textmdlprodID=' + textmdlprodID + '&textmdlprodquantity=' + textmdlprodquantity + '&form=fncdisplaybuynowproddet',
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
        var productID = $("#txtmdlprodID2").val();
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
                    data: 'productID=' + productID + '&productQuantity=' + productQuantity + '&productPrice=' + productPrice + '&ProductShipping=' + ProductShipping + '&Producttotalamount=' + Producttotalamount + '&productpaymentmeth=' + productpaymentmeth + '&form=btnplaceordercash',
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
                                    window.location = "index.php?url=purchases";
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
        var productID = $("#txtmdlprodID2").val();

        $.ajax({
            type: 'POST',
            url: 'products_class.php',
            data: 'productID=' + productID + '&form=fncloadpaymentgcashmodal',
            success: function(data) {
                var show = data.split("|");
                $("#txtsellergcashname").text(show[0]);
                $("#txtsellergcashnumber").text(show[1]);
                $("#txtsellergcashimage").attr("src", show[2]);
            }
        });
    }

    function submitpayment() {
        var productID = $("#txtmdlprodID2").val();
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
            data: 'productID=' + productID + '&productQuantity=' + productQuantity + '&productPrice=' + productPrice + '&ProductShipping=' + ProductShipping + '&Producttotalamount=' + Producttotalamount + '&productpaymentmeth=' + productpaymentmeth + '&textpaymentmethrefnum=' + textpaymentmethrefnum + '&form=btnplaceordergcash',
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
                window.location = "index.php?url=purchases";
            }
        });
    }

    function openproductsellerchat() {
        $("#modal_chat").modal('show');
    }

    function clearchat() {
        $("#txtsendchatmessage").val("");
    }

    function sendchattoseller() {
        var textmdlprodsellerID = $("#txtmdlprodsellerID").val();
        var textsendchatmessage = $("#txtsendchatmessage").val();

        $(".loadload").show();
        $.ajax({
            type: 'POST',
            url: 'products_class.php',
            data: 'textmdlprodsellerID=' + textmdlprodsellerID + '&textsendchatmessage=' + textsendchatmessage + '&form=sendchattoseller',
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
            }
        })
    }
</script>