<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("../connection/connection.php");

// Initialize the error and success variables
$error = '';
$success = '';

if (isset($_SESSION['Email_Session'])) {
    $email = $_SESSION['Email_Session'];
    $result = mysqli_query($conx, "SELECT s.store_id FROM store s
                                    INNER JOIN farmer f ON s.farmer_id = f.farmer_id
                                    INNER JOIN useraccount u ON f.user_id = u.user_id
                                    WHERE u.email = '{$email}'");
    $row = mysqli_fetch_assoc($result);
    $store_id = $row['store_id'];

    // Check if a store is added
    if (empty($store_id)) {
        $error = "Create your own market first."; // Display error if no store is added
    } else {
        if (isset($_POST['submit_harvest'])) {
            $HarvestDate = isset($_POST['HarvestDate']) ? mysqli_real_escape_string($conx, $_POST['HarvestDate']) : '';
            $harvestEnd = isset($_POST['harvestEnd']) ? mysqli_real_escape_string($conx, $_POST['harvestEnd']) : '';

            // Validate date format, you can add more validation if needed
            if (validateDate($HarvestDate) && validateDate($harvestEnd)) {
                $sql = "INSERT INTO HarvestingCalendar (store_id, HarvestDate, harvestEnd) 
                        VALUES ('{$store_id}', '{$HarvestDate}', '{$harvestEnd}')";

                if (mysqli_query($conx, $sql)) {
                    $success = '<div class="alert alert-success alert-dismissible fade show" style="background-color: #28a745; color: #fff;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Congrats!</strong> Harvesting Calendar Entry Added Successfully.
                                </div>';
                } else {
                    $error = '<div class="alert alert-danger alert-dismissible fade show" style="background-color: #dc3545; color: #fff;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Adding Error</strong></div>';
                }
            } else {
                $error = '<div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Invalid Date Format</strong></div>';
            }
        }
    }
} else {
    $error = "Session not set. Please make sure you are logged in.";
}

// Function to validate date format
function validateDate($date)
{
    $d = DateTime::createFromFormat('Y-m-d', $date);
    return $d && $d->format('Y-m-d') === $date;
}
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Oma-Angat|Harvesting Calendar</title>
    <link rel="icon" href="images/web-logo.png" type="icon type">
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
                <div class="navbar-header">
                    <!-- <a class="navbar-brand" href="index.html"> -->
                    <a href="add_category.php" class="navbar-brand"><img src="images/web-logo.png"
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
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="images/person.png" alt="user"
                                    class="profile-pic" /></a>
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
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
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
                                    aria-hidden="true"></i><span class="hide-menu">Products</span></a>
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
        <div class="page-wrapper" style="height:1200px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Harvesting Calendar</h3>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="container-fluid">
                        <!-- Start Page Content -->
                        <?php
                        echo $error;
                        echo $success; ?>
                        <div class="col-lg-12">
                            <div class="card card-outline-primary">
                                <div class="card-header" style="background: rgb(0, 188, 126);">
                                    <h4 class="m-b-0 text-white">Add Harvest Date</h4>
                                </div>
                                <div class="card-body">
                                    <form action='' method='post'>
                                        <div class="form-body">

                                            <hr>
                                            <div class="row p-t-20">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Harvest Date Start</label>
                                                        <input type="date" name="HarvestDate" class="form-control"
                                                            placeholder="Harvest starts from">
                                                    </div>
                                                </div>
                                                <!--/span-->

                                            </div>
                                            <div class="row p-t-20">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="control-label">Harvest Date Ends</label>
                                                        <input type="date" name="harvestEnd" class="form-control"
                                                            placeholder="Harvest ends on">
                                                    </div>
                                                </div>
                                                <!--/span-->

                                            </div>
                                            <div class="form-actions">
                                                <input type="submit" name="submit_harvest" class="btn btn-success"
                                                    value="Save" style="background: rgb(0, 188, 126);">
                                                <a href="dashboard.php" class="btn btn-inverse">Cancel</a>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Listed Harvest Dates</h4>

                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID#</th>
                                                <th>Harvest Starts from</th>
                                                <th>Harvest ends on</th>
                                                <th>Added At</th>

                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM harvestingcalendar order by harvest_id desc";
                                            $query = mysqli_query($conx, $sql);

                                            if (!mysqli_num_rows($query) > 0) {
                                                echo '<td colspan="7"><center>No Categories-Data!</center></td>';
                                            } else {
                                                while ($rows = mysqli_fetch_array($query)) {
                                                    echo ' <tr><td>' . $rows['harvest_id'] . '</td>
													<td>' . $rows['HarvestDate'] . '</td>
														<td>' . $rows['harvestEnd'] . '</td>
                                                        <td>' . $rows['addedat'] . '</td>
														<td><a href="delete_harvestdate.php?harvest_del=' . $rows['harvest_id'] . '" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
														<a href="update_harvestingcal.php?harvest_upd=' . $rows['harvest_id'] . '" " class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5" style="background: rgb(0, 188, 126);"><i class="ti-settings"></i></a>
													    </td></tr>';
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> &copy; Copyright 2022</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
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

</body>

</html>