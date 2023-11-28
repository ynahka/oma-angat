<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connection.php");
error_reporting(0);
session_start();
if(empty($_SESSION["Email_Session"]))
{
	header('location:index.php');
}
else
{
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

    <title>Oma-Angat|View Market</title>
    <link rel="icon" href="images/web-logo.png" type="icon type">
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- FullCalendar CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
</head>

<body class="fix-header">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index.html"> -->
                    <a href="dashboard.php" class="navbar-brand"><img src="images/web-logo.png" style="display:inline; width: 30%;"alt="logo"></a>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>    
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                            <input type="text"  class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Comment -->
                        <li class="nav-item dropdown">
                           
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
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
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                            // Display the farmer's image
                            if (!empty($imagePath)) {
                            echo '<img src="' . $imagePath . '" alt="user" class="profile-pic" />';
                            } else {
                                echo '<img src="images/person.png" alt="user" class="profile-pic" />';
                            }
                            ?>
                        
                            </a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
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
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li> <a href="profile.php" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Profile</span></a></li>
                        <li class="nav-label">Log</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Market</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="add_harvestdate.php">Add Harvesting Calendar</a></li>
								<li><a href="add_category.php">Add Category</a></li>
                                <li><a href="add_market.php">Add Market</a></li> 
                            </ul>
                        </li>
                       <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Product</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_product.php">All Products</a></li>
								<li><a href="add_product.php">Add Products</a></li>
                            </ul>
                        </li>
						 <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span class="hide-menu">Orders</span></a>
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
                    <h3 class="text" style="color: #173a5f;">My Market</h3> 
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
            <div class="text-center">
    <?php
    session_start(); // Start the session
    $email = $_SESSION['Email_Session']; // Get the email from the session

    // Assuming $conx is your database connection object
    $result = mysqli_query($conx, "SELECT farmer_id FROM farmer WHERE user_id IN (SELECT user_id FROM useraccount WHERE email='{$email}')");
    if ($result && $row = mysqli_fetch_assoc($result)) {
        $farmer_id = $row['farmer_id'];

        // Fetch the market's image path based on the obtained farmer_id
        $resultMarket = mysqli_query($conx, "SELECT image, storeName, storeDesc, Address, OpensAt, closesAt FROM store WHERE farmer_id = {$farmer_id}");
        if ($resultMarket && $rowMarket = mysqli_fetch_assoc($resultMarket)) {
            $marketImagePath = $rowMarket['image'];
            $storeName = $rowMarket['storeName'];
            $storeDesc = $rowMarket['storeDesc'];
            $Address = $rowMarket['Address'];
            $OpensAt = $rowMarket['OpensAt'];
            $ClosesAt = $rowMarket['ClosesAt'];

        }
    } else {
        // Handle the case where no farmer_id is found for the user
        echo '<p>No farmer found for the user</p>';
    }
    ?>

    <div id="marketImageContainer">
        <?php
        // Display the market's image
        if (!empty($marketImagePath)) {
            echo '<img src="' . $marketImagePath . '" alt="Market Image" class="img-fluid" />';
            echo '<p>' . $storeName . '</p>';
            echo '<p>' . $OpensAt . '</p>';
            echo '<p>' . $storeDesc . '</p>';
            echo '<p>' . $Address . '</p>';
            
            
        } else {
            echo '<p>No image available</p>';
        }
        ?>
    </div>
</div>
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer">     &copy; Copyright 2023 - Oma-Angat Virtual Market </footer>
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
    
    <script>
    $(document).ready(function () {
        // Initialize FullCalendar
        $('#calendar').fullCalendar({
            // Add your calendar options here
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            // Add your events or event sources here
            events: [
                {
                    title: 'Harvest Starts ',
                    start: '2023-11-24'
                },
                // Add more events as needed
            ]
        });
    });
</script>
</body>

</html>
<?php
}
?>
