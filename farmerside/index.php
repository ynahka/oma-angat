<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connection.php");
error_reporting(0);
session_start();
if (empty($_SESSION["Email_Session"])) {
    header('location:../farmeraccount/index.php');
} else {
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Oma-Angat Seller Center</title>
    <link rel="icon" href="images/web-logo.png" type="icon type">
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="../viewers/css/brand-single.css">
</head>

<body class="fix-header">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index.html"> -->
                    <a href="index.php" class="navbar-brand"><img src="images/web-logo.png"
                            style="display:inline; width: 30%;" alt="logo"></a>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  "
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  "
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  "
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i
                                        class="ti-close"></i></a>
                            </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">

                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all
                                                notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Comment -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <?php
                                // Fetch the farmer's image path
                                $imagePath = ''; // Replace this with the actual column name
                                $resultFarmer = mysqli_query($conx, "SELECT image FROM farmer WHERE user_id = (SELECT user_id FROM useraccount WHERE email = '{$email}')");
                                if ($resultFarmer && $rowFarmer = mysqli_fetch_assoc($resultFarmer)) {
                                    $imagePath = $rowFarmer['image'];
                                }
                                ?>
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="../farmeraccount/logout.php"><i class="fa fa-power-off"></i> Logout</a>
                                    </li>
                                    <li><a href="profile.php"><i class="fa fa-user"></i> Profile</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="index.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span
                                    class="hide-menu">Menu</span></a></li>
                        <li> <a href="profile.php" aria-expanded="false"><i class="fa fa-user"></i><span
                                    class="hide-menu">Profile</span></a></li>
                        <li class="nav-label">Log</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i
                                    class="fa fa-archive f-s-20 color-warning"></i><span
                                    class="hide-menu">Market</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="add_harvestdate.php">Harvesting Calendar</a></li>
                                <li><a href="add_category.php">Add Category</a></li>
                                <li><a href="add_market.php">Add Market</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery"
                                    aria-hidden="true"></i><span class="hide-menu">Product</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all_product.php">All Products</a></li>
                                <li><a href="add_product.php">Add Products</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart"
                                    aria-hidden="true"></i><span class="hide-menu">Orders</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="all_orders.php">All Orders</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper" style="height:5s00px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text" style="color: #173a5f;">Dashboard</h3>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3" style="cursor: pointer;" onclick="window.location.href='farmer_market.php';">
                        <div class="card p-30" style="background: rgb(0, 188, 126);">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-archive f-s-40" style="color: white;"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 style="color: white; font-weight: 700">
                                        <?php
                                            if (isset($_SESSION['Email_Session'])) {
                                                $email = $_SESSION['Email_Session'];
                                                $result_user_id = mysqli_query($conx, "SELECT user_id FROM useraccount WHERE email='{$email}'");

                                                if ($result_user_id) {
                                                    $row_user_id = mysqli_fetch_assoc($result_user_id);
                                                    $user_id = $row_user_id['user_id'];

                                                    $result_store = mysqli_query($conx, "SELECT * FROM Store WHERE user_id = {$user_id}");

                                                    if ($result_store) {
                                                        $rws = mysqli_num_rows($result_store);
                                                        echo $rws;
                                                    } else {
                                                        echo "0"; // Display 0 if there is an issue with the Store query
                                                    }
                                                } else {
                                                    echo "0"; // Display 0 if there is an issue with the user_id query
                                                }
                                            } else {
                                                echo "0"; // Display 0 if the session variable is not set
                                            }

                                            ?>
                                    </h2>

                                    <p class="m-b-0" style="color: white;">My market</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="cursor: pointer;" onclick="window.location.href='all_product.php';">
                        <div class="card p-30" style="background: rgb(0, 188, 126);">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-cutlery f-s-40" aria-hidden="true"
                                            style="color: white;"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 style="color: white; font-weight: 700">
                                        <?php
                                            $user_id = $_SESSION['user_id']; // Assuming you have a session variable for user ID
                                            $sql = "SELECT COUNT(*) AS product_count FROM products WHERE user_id = $user_id";
                                            $result = mysqli_query($conx, $sql);

                                            if ($result) {
                                                $row = mysqli_fetch_assoc($result);
                                                $poduct_count = $row['product_count'];
                                                echo $product_count;
                                            } else {
                                                echo "0"; // Display 0 if there is an issue with the query
                                            }
                                            ?>
                                    </h2>
                                    <p class="m-b-0" style="color: white;">Products</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" style="cursor: pointer;" onclick="window.location.href='customers.php';">
                        <div class="card p-30" style="background: rgb(0, 188, 126);">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-user f-s-40 " style="color: white;"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 style="color: white; font-weight: 700">
                                        <?php
                                            $user_id = $_SESSION['user_id']; // Assuming you have a session variable for user ID
                                            $sql = "SELECT COUNT(*) AS customer_count FROM customer WHERE user_id = $user_id";
                                            $result = mysqli_query($conx, $sql);

                                            if ($result) {
                                                $row = mysqli_fetch_assoc($result);
                                                $customer_count = $row['customer_count'];
                                                echo $customer_count;
                                            } else {
                                                echo "0"; // Display 0 if there is an issue with the query
                                            }
                                            ?>
                                    </h2>
                                    <p class="m-b-0" style="color: white;">Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3" style="cursor: pointer;" onclick="window.location.href='all_orders.php';">
                        <div class="card p-30" style="background: rgb(0, 188, 126);">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-shopping-cart f-s-40" aria-hidden="true"
                                            style="color: white;"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 style="color: white; font-weight: 700"><?php $sql = "select * from orders";
                                                                                    $result = mysqli_query($db, $sql);
                                                                                    $rws = mysqli_num_rows($result);
                                                                                    echo $rws; ?>
                                    </h2>
                                    <p class="m-b-0" style="color: white;">Orders</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Section for calendar-->
                    <div class="col-md-12">
                        <div class="card p-30">
                            <div class="media">
                                <!-- Calendar will be inserted here -->
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> &copy; Copyright 2023 - Oma-Angat Virtual Market </footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <!-- jQuery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- FullCalendar JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <!-- ... (previous HTML code) ... -->
    <script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            selectable: true,
            select: function(start, end, jsEvent, view) {
                var title = prompt('Enter event title:');
                if (title) {
                    // Use the selected start date from the calendar
                    var startDate = start.format('YYYY-MM-DD HH:mm');

                    // Prompt user to choose the end date from the calendar
                    $('#calendar').fullCalendar('unselect');
                    $('#calendar').fullCalendar('select', function(end) {
                        var endDate = end.format('YYYY-MM-DD HH:mm');

                        var eventData = {
                            title: title,
                            start: startDate,
                            end: endDate
                        };

                        // Send event data to the server for storage
                        $.ajax({
                            url: 'save_event.php',
                            type: 'POST',
                            data: eventData,
                            success: function(response) {
                                // Render the event on the calendar
                                $('#calendar').fullCalendar('renderEvent',
                                    eventData, true);
                            }
                        });
                    });
                }
            },
            events: 'load_events.php' // Fetch events from the server
        });
    });
    </script>

    <!-- ... (remaining HTML code) ... -->

</body>

</html>
<?php
}
?>