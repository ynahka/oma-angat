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
                                    <div class="modal fade" id="product-view<?php echo $row['id'] ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <button class="modal-close icofont-close"
                                                    data-bs-dismiss="modal"></button>
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
                                                                    <a
                                                                        href="product-video.php"><?php echo htmlentities($row['names']); ?></a>
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
                                                                    <span><small>Quantity Available:
                                                                            <?php echo $row['quanti'] ?></small></span>
                                                                </h3>
                                                                <p class="view-desc">
                                                                    <?php echo htmlentities($row['descrip']); ?></p>
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
                                                                    <button class="product-add" onclick="btnaddtocart()"
                                                                        title="Add to Cart">
                                                                        <!-- <i class="fas fa-shopping-basket"></i> -->
                                                                        <span>add to cart</span>
                                                                    </button>
                                                                </div>
                                                                <div class="view-action-group">
                                                                    <a class="view-Notification" href="checkout.php"
                                                                        title="Notification This Item">
                                                                        <span><button type="button"
                                                                                onclick="btnbuynow()"
                                                                                style="line-height: 35px;height: 35px;">
                                                                                buy now</button></span>
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
                                            <input class="action-input" title="Quantity Number" type="text"
                                                name="quantity" value="1">
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

        <script type="text/javascript">
        $(function() {
            $("#products").addClass('active');
            fncdisplaylistofproducts();

            $(".wawa").click(function() {
                $(".wawa").css("color", "#79a206");
                $(this).css("color", "#FEB954");
            })

            $(".numonly").keydown(function(event) {
                if (event.keyCode == 46 || event.keyCode == 8 || event
                    .keyCode == 190 || event.keyCode == 9 ||
                    event.keyCode == 188) {

                } else {
                    if (event.keyCode < 48 || event.keyCode > 57 || event
                        .keyCode == 17) {
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
                data: 'srchprod=' + srchprod + '&filteracc=' + filteracc +
                    '&form=fncdisplaylistofproducts',
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
                data: 'srchprod=' + srchprod + '&filteracc=' + filteracc +
                    '&pricerange=' + pricerange +
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
                data: 'textmdlprodquantity=' + textmdlprodquantity +
                    '&textmdlprodID=' + textmdlprodID +
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
                        data: 'textmdlprodnumberofrating=' +
                            textmdlprodnumberofrating +
                            '&textmdlprodinputcomment=' +
                            textmdlprodinputcomment + '&textmdlprodID=' +
                            textmdlprodID + '&form=btnsubmitsavecomment',
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
                    data: 'textmdlprodID=' + textmdlprodID +
                        '&textmdlprodquantity=' + textmdlprodquantity +
                        '&textmdlprodprice=' + textmdlprodprice +
                        '&form=btnsaveaddtocart',
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
                                    window.location =
                                        "cart.php";
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
                        if (textmdlprodquantity == "" || textmdlprodquantity ==
                            0) {
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
                data: 'textmdlprodID=' + textmdlprodID + '&textmdlprodquantity=' +
                    textmdlprodquantity +
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
            var productID = $("#txtmdlprodID2").val();
            var productQuantity = $("#txtmdlbuynowproductquantity").text();
            var productPrice = ($("#txtmdlbuynowproductprice").text()).replace(/,/g, "");
            var ProductShipping = ($("#txtmdlbuynowshiptotal").text()).replace(/,/g, "");
            var Producttotalamount = ($("#txtmdlbuynowpaymenttotamt").text()).replace(/,/g,
                "");
            var productpaymentmeth = $("#txtmdlbuynowpaymentmethod").val();

            if (productpaymentmeth != "") {
                if (productpaymentmeth == "CASH") {
                    $(".loadload").show();
                    $.ajax({
                        type: 'POST',
                        url: 'products_class.php',
                        data: 'productID=' + productID + '&productQuantity=' +
                            productQuantity + '&productPrice=' +
                            productPrice + '&ProductShipping=' + ProductShipping +
                            '&Producttotalamount=' +
                            Producttotalamount + '&productpaymentmeth=' +
                            productpaymentmeth +
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
                                        window.location =
                                            "index.php?url=purchases";
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
            var Producttotalamount = ($("#txtmdlbuynowpaymenttotamt").text()).replace(/,/g,
                "");
            var productpaymentmeth = $("#txtmdlbuynowpaymentmethod").val();
            var textpaymentmethrefnum = $("#txtpaymentmethrefnum").val();

            $(".loadload").show();
            $.ajax({
                type: 'POST',
                url: 'products_class.php',
                data: 'productID=' + productID + '&productQuantity=' +
                    productQuantity + '&productPrice=' +
                    productPrice + '&ProductShipping=' + ProductShipping +
                    '&Producttotalamount=' + Producttotalamount +
                    '&productpaymentmeth=' + productpaymentmeth +
                    '&textpaymentmethrefnum=' + textpaymentmethrefnum +
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
                document.getElementById("updatevalidImage").src = oFREvent.target
                    .result;
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
                data: 'textmdlprodsellerID=' + textmdlprodsellerID +
                    '&textsendchatmessage=' + textsendchatmessage +
                    '&form=sendchattoseller',
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