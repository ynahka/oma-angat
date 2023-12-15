<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>

<body>
    <?php include('header-nav.php'); ?>
    <?php include('category-sidebar.php'); ?>
    <?php include('product-view.php'); ?>



    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="home-index-slider slider-arrow slider-dots">
        <div class="banner-part banner-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content-1">
                            <h1><span class="highlight">Shop Local and</span><br> Support Farmers <span class="highlight"></span> </h1>
                            <p>Shop directly from farmers! Get healthy and locally grown produce right at your doorstep.
                            </p>
                            <div class="banner-btn">
                                <a class="btn btn-banner" href="../buyer/login.php">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>shop now</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img">
                            <img src="images/front-buyer.svg" alt="index">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-part banner-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-img">
                            <img src="images/front-seller.svg" alt="index">

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="banner-content">
                            <h1><span class="highlight">Are you a Farmer? </span> <br> Join and watch your fields grow
                            </h1>
                            <p>We ensure your fair compensation for your dedication. <br> Your hard work nourishes not
                                just the land but also the community.</p>
                            <div class="banner-btn-1">
                                <a class="btn btn-banner" href="../seller/login.php">
                                    <i class="fa-solid fa-store"></i>
                                    <span>start selling</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="promo-part">
        <div class="col-lg-12">
            <div class="promo-img">
                <a><img src="images/banner11.svg" alt="promo"></a>
            </div>
        </div>
    </div>

    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="banner-part-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Why and How to Support Farmers?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 order-1 order-lg-0 order-xl-0">
                    <div class="row">
                        <div class="col-sm-6 col-lg-12">
                            <div class="home-grid-promo">
                                <a href="all-farmer-shop.php"><img src="images/promo/features/referral.svg" alt="referral"></a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-12">
                            <div class="home-grid-promo">
                                <a href="all-farmer-shop.php"><img src="images/promo/features/donation.svg" alt="donate"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-0 order-lg-1 order-xl-1">
                    <div class="home-grid-slider slider-arrow slider-dots">
                        <!-- <a href="chat.php"><img src="images/promo/features/messaging-system.svg" alt=""></a>
                        <a href="#"><img src="images/promo/features/harvesting-calendar.svg" alt=""></a> -->
                        <iframe width="1263" height="480" src="https://www.youtube.com/embed/owXzG8gFfXI" title="Support Family Farming - Help Local Farmers, Achieve Zero Hunger [Advocacy Video]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        <iframe width="auto" height="auto" src="https://www.youtube.com/embed/jzx3M7G9bns" title="Support Filipino Farmers" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <?php
    include("../connection/connect.php");
    error_reporting(0);
    session_start();

    // Your SQL query to retrieve store information
    $sql = "SELECT users_table.*, user_details.profileimage FROM users_table 
       INNER JOIN user_details ON users_table.user_id = user_details.user_id 
       WHERE users_table.usertype= 'SELLER' AND users_table.status= 'APPROVED'";
    $result = mysqli_query($connection, $sql);

    $Pitems = [];

    // Check if the query was successful
    if ($result) {
        // Fetch the result row by row
        while ($row = mysqli_fetch_assoc($result)) {
            // Retrieve the image filename from the database
            $imageFilename = $row['profileimage'];

            $Pitem = [
                "name" => $row['username'],
                "img" => "../OmaangatImages/ProfileImage/{$imageFilename}", // Use the image filename from the database
                "url" => "shop-1column.php", // You may want to customize this based on your requirements
                "title" => $row['username'],
                // Add more fields as needed
            ];

            // Add the store item to the array
            $Pitems[] = $Pitem;
        }

        // Free the result set
        mysqli_free_result($result);
    } else {
        // Handle the case where the query was not successful
        echo 'Error executing query: ' . mysqli_error($connection);
    }

    ?>




    <!-- By Farmer's Market -->
    <section class="section suggest-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Shop By Farmer's Market</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container suggest">
            <ul class="suggest-slider slider-arrow">
                <?php foreach ($Pitems as $Pitem) : ?>
                    <li>
                        <a class="suggest-card" href="<?php echo $Pitem['url'] ?>">
                            <img src="<?php echo $Pitem['img'] ?>">
                        </a>
                        <div class="suggest-info" style="text-align: center; font-weight:500; ">
                            <p><?php echo $Pitem['title'] ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </section>


    <?php
    // Your SQL query to retrieve store information
    $sql = "SELECT * FROM categories";

    $result = $connection->query($sql);

    $Pitems = array();

    if ($result->num_rows > 0) {
        // Loop through each row of the result set
        while ($row = $result->fetch_assoc()) {
            // Retrieve image data
            $imgData = $row['image']; // Replace 'image_column' with the actual column name storing the image

            // Convert blob data to base64 encoding
            $imgBase64 = base64_encode($imgData);

            // Create an array for each row of data and append it to $Pitems
            $item = array(
                "name" => $row['categoryname'],
                "img" => 'data:image/png;base64,' . $imgBase64, // Modify the MIME type according to your image type
                "url" => "per-category.php", // Replace with the appropriate URL for the category
                "title" => $row['categoryname'],
            );
            $Pitems[] = $item;
        }
    } else {
        echo "0 results";
    }

    // Close the database connection
    $connection->close();

    // Now $Pitems contains the data retrieved from the database, including the count of products for each category
    ?>



    <section class="section suggest-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Shop by Category</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container suggest">
            <ul class="suggest-slider slider-arrow">
                <?php foreach ($Pitems as $Pitem) : ?>
                    <li>
                        <a class="suggest-card" href="<?php echo $Pitem['url'] ?>">
                            <img src="<?php echo $Pitem['img'] ?>">
                        </a>
                        <div class="suggest-info" style="text-align: center; font-weight:500; ">
                            <p><?php echo $Pitem['title'] ?></p>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>


    <!--=====================================
                    NEW ITEM PART START
        =======================================-->
    <section class="section newitem-part">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-heading">
                        <h2>Shop by Products</h2>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show active" id="top-order">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card" data-bs-toggle="modal" data-bs-target="#product-view">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text order">314</label>
                                </div>
                                <a class="product-image">
                                    <img src="images/product/1.png" alt="product">
                                </a>
                            </div>
                            <div class="product-content">
                                <div class="row">
                                    <div class="col" style="display: flex; align-items:center">
                                        <h6 class="product-name">
                                            <a>Avocado</a>
                                        </h6>
                                    </div>
                                    <h6 class="product-price">
                                        <span><small>Starts at ₱ 29</small></span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="shop-4column.php" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            <span>show more</span>
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </section>
    <!--=====================================
                    NICHE PART END
        =======================================-->


    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
</body>
</php>
<script type="text/javascript">
    $(function() {
        $("#homeclass").addClass('active');
        fncdisplaylistofproducts();

        $(".wawa").click(function() {
            $(".wawa").css("color", "#79a206");
            $(this).css("color", "#FEB954");
        })

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

    function fncdisplaylistofproducts() {
        $.ajax({
            type: 'POST',
            url: 'index_class.php',
            data: 'form=fncdisplaylistofproducts',
            success: function(data) {
                $("#homelistofproducts").html(data);
            }
        });
    }

    function openproductdetails(productID) {
        $("#modal_productdet").modal('show');

        $("#txtmdlprodID").val(productID);
        $.ajax({
            type: 'POST',
            url: 'home_class.php',
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
            url: 'home_class.php',
            data: 'textmdlprodquantity=' + textmdlprodquantity + '&textmdlprodID=' + textmdlprodID +
                '&form=checkquantityindb',
            success: function(data) {

                if (data == 1) {
                    if (textmdlprodquantity <= 30) {

                    } else {
                        Swal.fire(
                            'ALERT',
                            'Quantity exceeded 30.',
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
            url: 'home_class.php',
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
                    url: 'home_class.php',
                    data: 'textmdlprodnumberofrating=' + textmdlprodnumberofrating + '&textmdlprodinputcomment=' +
                        textmdlprodinputcomment + '&textmdlprodID=' + textmdlprodID + '&form=btnsubmitsavecomment',
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
            url: 'home_class.php',
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
            $.ajax({
                type: 'POST',
                url: 'home_class.php',
                data: 'textmdlprodquantity=' + textmdlprodquantity + '&textmdlprodID=' + textmdlprodID +
                    '&form=checkquantityindb',
                success: function(data) {

                    if (data == 1) {
                        if (textmdlprodquantity <= 30) {
                            $(".loadload").show();
                            $.ajax({
                                type: 'POST',
                                url: 'home_class.php',
                                data: 'textmdlprodID=' + textmdlprodID + '&textmdlprodquantity=' +
                                    textmdlprodquantity + '&textmdlprodprice=' + textmdlprodprice +
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
                                                    "index.php?url=cart";
                                            }
                                        });
                                    }, 500);

                                }
                            })
                        } else {
                            Swal.fire(
                                'ALERT',
                                'Quantity cannot exceed 30.',
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

    }

    // BUY NOW BUTTON
    function btnbuynow() {
        var textmdlprodquantity = $("#txtmdlprodquantity").val();

        $.ajax({
            type: 'POST',
            url: 'home_class.php',
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
            url: 'home_class.php',
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
                    url: 'home_class.php',
                    data: 'productID=' + productID + '&productQuantity=' + productQuantity + '&productPrice=' +
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
            url: 'home_class.php',
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
            url: 'home_class.php',
            data: 'productID=' + productID + '&productQuantity=' + productQuantity + '&productPrice=' +
                productPrice + '&ProductShipping=' + ProductShipping + '&Producttotalamount=' + Producttotalamount +
                '&productpaymentmeth=' + productpaymentmeth + '&textpaymentmethrefnum=' + textpaymentmethrefnum +
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
            url: 'home_class.php',
            data: 'textmdlprodsellerID=' + textmdlprodsellerID + '&textsendchatmessage=' + textsendchatmessage +
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