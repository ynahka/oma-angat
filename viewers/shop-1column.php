<!DOCTYPE html>
<html lang="en">
<?php //include("connect.php");
//session_start();
//$pid = $_GET['id'];
?>
<?php
require_once("connect.php");

session_start();

// Check if the 'shopseller_id' parameter is set in the URL
if (isset($_GET['shopseller_id'])) {
    $shopseller_id = $_GET['shopseller_id'];

    // Fetch additional information based on the 'shopseller_id' (modify this query as needed)
    $sellerInfoQuery = mysqli_query($connection, "SELECT * FROM users_table WHERE user_id = '$shopseller_id'");
    $sellerInfo = mysqli_fetch_assoc($sellerInfoQuery);

    // Use the fetched information as needed (example: $sellerInfo['username'], $sellerInfo['email'], etc.)
    // ...

    // Continue with the rest of your HTML/PHP code
}
?>
<?php include 'header.php'; ?>
<link href="style.css" rel="stylesheet" />
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/products.css">
<?php include 'community/header.php'; ?>
<link rel="stylesheet" href="css/brand-single.css">
<link rel="stylesheet" href="css/blog-author.css">
<link rel="stylesheet" href="../seller/fullcalendar/lib/main.min.css">
<!-- Use 'main.min.css' instead of 'main.min.js' for styles -->
<link rel="stylesheet" href="fonts/icofont/icofont.min.css">

<!-- Include Moment.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="../seller/js/jquery-3.6.0.min.js"></script>
<script src="./seller/js/bootstrap.min.js"></script>
<script src="../seller/fullcalendar/lib/main.min.js"></script>
<!-- Use 'main.min.js' for the FullCalendar JavaScript library -->
<script src="../seller/fullcalendar/lib/locales-all.min.js"></script>


<body>
    <?php include('category-sidebar.php'); ?>
    <?php include('shop_products.php'); ?>
    <?php
    // Check if the user is logged in
    $isLoggedIn = !empty($_SESSION['user_id']) && $_SESSION['usertype'] === 'CUSTOMER';
    if ($isLoggedIn) {
        include 'header-nav-buyer.php'; // Include the file for logged-in users
    } else {
        include 'header-nav.php'; // Include the file for non-logged-in users
    }
    ?>

    <!--=====================================BANNER PART END=======================================-->


    <!--=====================================
                    SHOP PART START
        =======================================-->
    <section class="inner-section shop-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="author-single">
                            <div class="author-content">
                                <?php
                                define('DEFAULT_IMAGE', 'shoplogo.png');

                                // Retrieve author details from user_details
                                if (isset($_GET['shopseller_id'])) {
                                    $shopseller_id = $_GET['shopseller_id'];

                                    // Fetch seller details from the database
                                    $sellerQuery = mysqli_query($connection, "SELECT ud.*, u.username 
                                            FROM users_table u
                                            INNER JOIN user_details ud ON u.user_id = ud.user_id
                                            WHERE u.user_id='$shopseller_id'");
                                    $sellerDetails = mysqli_fetch_assoc($sellerQuery);
                                    $imageFilename = !empty($sellerDetails['profileimage']) ? $sellerDetails['profileimage'] : DEFAULT_IMAGE;
                                } ?>
                                <a href="#" class="author-image">
                                    <img src="../OmaangatImages/ProfileImage/<?= $imageFilename ?>" alt="avatar">
                                    <div class="author-info">
                                        <h3 class="author-name"><?= $sellerDetails['username'] ?></h3>
                                        <h6 class="author-mail"><?= $sellerDetails['email'] ?></h6>
                                        <h6 class="author-mail"><i class="fas fa-map-marker-alt"></i>
                                            <?= $sellerDetails['address'] ?></h6>
                                        <ul class="author-meta">
                                            <li>
                                                <a onclick="opensellerchat();" class=" fas fa-comments">
                                                </a>Message
                                                Farmer
                                </a></li>
                                </ul>
                                <!-- <a href="chat.php" class="author-meta">
                                        <i class="fas fa-comments"></i> Message Farmer
                                    </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="shop-widget-promo">
                    <a><img src="images/promo/features/referral.svg" alt="promo"></a>
                    <div class="offer-div">
                        <!-- <h5 class="offer-select">Click to copylink</h5> -->
                        <button class="offer-select" id="copyLinkBtn" onclick="copyToClipboard()">Click to copy
                            link</button>
                    </div>
                </div>



                <div class="shop-widget-promo">
                    <a><img src="images/promo/features/donation.svg" alt="promo"></a>
                    <div class="offer-div">
                        <input type="hidden" id="shopseller_id">
                        <!-- <button class="offer-select"><a href="chat.php">Click to Chat Farmer</a></button> -->
                        <a class="blog-btn" href="javascript:void(0)" onclick="opensellerchat();">
                            <span>Click here to Chat Farmer</span>
                            <i class=" icofont-arrow-right"></i>
                        </a>
                    </div>

                </div>


                <!-- <div class="shop-widget">
                        <h6 class="shop-widget-title">Price Range</h6>
                        <form>
                            <div class="shop-widget-group">
                                <input type="text" placeholder="Min - 00">
                                <input type="text" placeholder="Max - 5k">
                            </div>
                            <button class="shop-widget-btn">
                                <i class="fas fa-search"></i>
                                <span>search</span>
                            </button>
                        </form>
                    </div> -->
            </div>

            <div class="col-lg-9">
                <div id="homelistofproducts">
                </div>

            </div>
            <!-- <section class="inner-section single-banner" style="color:#4c644b;">
                <div class="container">
                    <h2 style="color:#4c644b"><i class="fa-regular fa-calendar-days"></i> Harvesting Calendar</h2>
                </div>
            </section> -->
            <div class="container" style="margin-top: 50px;">
                <h2 style="color:#4c644b; text-align:center; margin-bottom: 10px; font-weight: 800;"><i class="fa-regular fa-calendar-days"></i> Harvesting
                    Calendar</h2>
            </div>
            <div class="fullcalendar">
                <div id="calendar" style="color:#4c644b; border-radius: 8px; margin:20px;"></div>
            </div>
            <!-- <div class="col-lg-9">
                <div class="fullcalendar">
                    <div id="calendar"></div>
                </div>
            </div> -->

        </div>
        </div>
    </section>
    <div class="modal fade" id="modal_chat" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-paymentneed">
            <div class="modal-content" style="border: 0px solid #82a131;background-color: #eef4dd; border-radius: 10px;">
                <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="clearchat()"
                    style="left: 92%;">
                    <span aria-hidden="true"><i class="icon-x"></i></span>
                </button> -->
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="modal_body" style="padding: 29px 6px 20px;">
                    <div class="container">

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="contact_message form">
                                    <p style="margin-bottom: 10px;">
                                        <input type="hidden" id="shopseller_id" value="<?= $shopseller_id ?>">
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

    <body class="">
        <div class="row page-titles rowpageheaderpadd" style="padding-bottom: 0px;">
            <!-- <div class="col-md-6 col-6 align-self-center" style="padding-left:10px;">
                <h3 class="mb-0 mt-0 headerfontfont text-themecolor" style="font-weight: 600;">Harvesting
                    Calendar</h3>
            </div> -->
        </div>
        <!-- Event Details Modal -->
        <div class="modal fade" id="modal_productdetails" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: #cfe2ce; width:70% !important;">
                    <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="clearmdl_productdet();" style="left: 95%;">
                    <span aria-hidden="true"><i class="icon-x"></i></span>
                </button> -->
                    <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                    <div class="modal_body" style="width:50% !important;">
                        <div class="container">
                            <input type="hidden" id="txtmdlprodID">
                            <!-- <div class="product_details mb-4"> -->
                            <div class="col-lg-12 col-md-12">
                                <div class="product_d_right">
                                    <h1 style="margin-bottom: 5px;"><a href="javascript:void(0)" id="productname"></a></h1>
                                    <div class="product_ratting" id="txtmdlprodrates"></div>
                                    <div class="price_box">
                                        <span class="current_price">₱ <span id="price">0.00</span>/<span id="txtmdlprodunit"></span>
                                    </div>
                                    <div class="product_desc">
                                        <p id="productdesc"></p>
                                    </div>
                                    <div class="product_variant quantity">
                                        <label>quantity</label>
                                        <input style="border: 1px solid #4C644B !important;" min="1" max="100" value="1" type="number" class="focus" id="quantity" onchange="quantityvalidation()" onkeyup="quantityvalidation()">
                                        <!-- <input min="1" max="100" value="1" type="number" class="focus" id="txtmdlprodquantity" onchange="quantityvalidation()" onkeyup="quantityvalidation()"> -->
                                    </div>
                                    <div class="product_meta">
                                        <span>Available at: <a href="javascript:void(0)" id="availat"></a></span><br>
                                        <span>Available until: <a href="javascript:void(0)" id="availuntil"></a></span><br>
                                        <input type="hidden" id="txtmdlprodsellerID">
                                        <!-- <a href="javascript:void(0)" id="txtmdlprodsellername"></a>  -->

                                    </div>

                                </div>
                            </div>
                            <!-- </div> -->

                            <!--product info start-->

                        </div>
                        <!--product info end-->

                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details Modal -->

        <!--=====================================
                    SHOP PART END
        =======================================-->
        <?php include('footer.php'); ?>
        <?php include('js-vendor.php'); ?>
        <?php include('jscripts.php'); ?>

    </body>

</html>


<?php

// Validate and sanitize user input (assuming shopseller_id is passed via GET)
$shopseller_id = isset($_GET['shopseller_id']) ? mysqli_real_escape_string($connection, $_GET['shopseller_id']) : '';

if (!empty($shopseller_id)) {
    // Use prepared statement to prevent SQL injection
    $stmt = $connection->prepare("SELECT products.*, products_image.image
                              FROM products 
                              INNER JOIN products_image ON products.product_id = products_image.product_id 
                              WHERE products.seller_id = ?");

    $stmt->bind_param("s", $shopseller_id);
    $stmt->execute();

    $result = $stmt->get_result();

    $sched_res = [];
    while ($row = $result->fetch_assoc()) {
        $row['sdate'] = date("y-m-d", strtotime($row['availat']));
        $row['edate'] = date("y-m-d", strtotime($row['availuntil']));
        $sched_res[$row['id']] = $row;
    }

    $stmt->close();
} else {
    // Handle the case where shopseller_id is not provided
    $sched_res = [];
}

// Close the connection if it was successfully opened
if (isset($connection)) {
    $connection->close();
}
?>

<script type="text/javascript">
    function copyToClipboard() {
        // Get the text content you want to copy
        var linkToCopy =
            "http://localhost/oma-angat/viewers/shop-1column.php?shopseller_id=<?= $shopseller_id ?>";

        // Create a temporary input element
        var tempInput = document.createElement("input");
        tempInput.value = linkToCopy;

        // Append the input element to the document
        document.body.appendChild(tempInput);

        // Select the text inside the input element
        tempInput.select();
        tempInput.setSelectionRange(0, 99999); /* For mobile devices */

        // Copy the selected text
        document.execCommand("copy");

        // Remove the temporary input element
        document.body.removeChild(tempInput);

        Swal.fire({
            title: 'Success!',
            text: 'Link copied to clipboard!',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.href =
                'shop-1column.php?shopseller_id=<?= $shopseller_id ?>'; // Replace 'farmer.php' with your target URL
        });

    }
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
            url: 'shop-1column_class.php',
            data: {
                form: 'fncdisplaylistofproducts',
                shopseller_id: '<?= $shopseller_id ?>'
            },
            success: function(data) {
                $("#homelistofproducts").html(data);
            }
        });
    }

    function opensellerchat() {
        $("#modal_chat").modal('show');
    }

    function clearchat() {
        $("#txtsendchatmessage").val("");
    }

    function sendChatToSeller() {
        var textmdlprodsellerID = $("#shopseller_id").val();
        var textsendchatmessage = $("#txtsendchatmessage").val();

        $.ajax({
            type: 'POST',
            url: 'shop-1column_class.php',
            data: {
                textmdlprodsellerID: shopseller_id,
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
    // var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
    var scheds = <?= json_encode($sched_res) ?>;
    $(document).ready(function() {
        var calendar;
        var Calendar = FullCalendar.Calendar;
        var events = [];
        // Define an array of colors
        var eventColors = ['#AFE1AF', '#50C878', '#90EE90', '#98FB98', '#C1E1C1', '#8A9A5B'];
        $(function() {
            if (!!scheds) {
                Object.keys(scheds).map(k => {
                    var row = scheds[k]
                    events.push({
                        id: row.id,
                        title: 'Available Now:  ' + row
                            .productname,
                        start: row.availat,
                        end: row.availuntil,
                        className: 'left-aligned-title'
                    });
                })
            }
            events.forEach(function(event, index) {
                event.backgroundColor = eventColors[index % eventColors.length];
                event.textColor = '#000000'; // Set text color to black
            });
            var date = new Date()
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear()

            calendar = new Calendar(document.getElementById('calendar'), {
                headerToolbar: {
                    left: 'prev,next today',
                    right: 'dayGridMonth,dayGridWeek,list',
                    center: 'title',
                },
                selectable: true,
                themeSystem: 'bootstrap',
                //Random default events
                events: events,
                eventClick: function(info) {
                    var _details = $('#modal_productdetails')
                    var id = info.event.id
                    if (!!scheds[id]) {
                        // Format the price to two decimal places
                        var formattedPrice = parseFloat(scheds[id].price).toFixed(2);

                        _details.find('#productname').text(scheds[id].productname);
                        _details.find('#productdesc').text(scheds[id].productdesc);
                        _details.find('#quantity').text(scheds[id].quantity);
                        _details.find('#price').text(formattedPrice);
                        _details.find('#txtmdlprodunit').text(scheds[id].unit);
                        _details.find('#availat').text(scheds[id].sdate);
                        _details.find('#availuntil').text(scheds[id].edate);
                        _details.find('#edit,#delete').attr('data-id', id);


                        // Show the modal
                        _details.modal('show');
                    } else {
                        Swal.fire(
                            'Error!',
                            'Event is undefined',
                            'error'
                        )
                    }
                    console.log('Events:', events);

                },
                eventDidMount: function(info) {
                    // Do Something after events mounted
                },
                editable: true
            });

            calendar.render();
        });

        // Form reset listener
        $('#schedule-form').on('reset', function() {
            $(this).find('input:hidden').val('')
            $(this).find('input:visible').first().focus()
        })

    })
</script>