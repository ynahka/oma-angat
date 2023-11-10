<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("../connection/connection.php");

if (isset($_SESSION['Email_Session'])) {
    $email = $_SESSION['Email_Session'];
    $result = mysqli_query($conx, "SELECT farmer_id FROM farmeruseraccount WHERE email='{$email}'");
    $row = mysqli_fetch_assoc($result);
    $farmer_id = $row['farmer_id'];

    if (isset($_POST['submit'])) {
        $storeName = isset($_POST['storeName']) ? mysqli_real_escape_string($conx, $_POST['storeName']) : '';
        $Address = isset($_POST['Address']) ? mysqli_real_escape_string($conx, $_POST['Address']) : '';
        $storeDesc = isset($_POST['storeDesc']) ? mysqli_real_escape_string($conx, $_POST['storeDesc']) : '';
        $OpensAt = isset($_POST['OpensAt']) ? mysqli_real_escape_string($conx, $_POST['OpensAt']) : '';
        $ClosesAt = isset($_POST['ClosesAt']) ? mysqli_real_escape_string($conx, $_POST['ClosesAt']) : '';
        $fbPage = isset($_POST['fbPage']) ? mysqli_real_escape_string($conx, $_POST['fbPage']) : '';

        if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $image_tmp = $_FILES['image']['tmp_name'];
            $image_name = $_FILES['image']['name'];
            $image_path = "Res_img/" . $image_name;

            if (move_uploaded_file($image_tmp, $image_path)) {
                $image = mysqli_real_escape_string($conx, $image_path);

                $sql = "INSERT INTO Store (farmer_id, storeName, Address, storeDesc, OpensAt, ClosesAt, fbPage, image) 
                        VALUES ('{$farmer_id}', '{$storeName}', '{$Address}', '{$storeDesc}', '{$OpensAt}', '{$ClosesAt}', '{$fbPage}', '{$image}')";

                if (mysqli_query($conx, $sql)) {
                    echo "Store added successfully";
                } else {
                    echo "Error: " . mysqli_error($conx);
                }
            } else {
                echo "Error uploading the image.";
            }
        } else {
            echo "Please select an image to upload.";
        }
    }
} else {
    echo "Session not set. Please make sure you are logged in.";
}
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>
    <link rel="icon" href="../images/web-logo.png" type="icon type">
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
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
                    <a href="../index.php" class="navbar-brand"><img src="images/web-logo.png" style="display:inline; width: 30%;"alt="logo"></a>
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
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
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
                        <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/person.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                <li><a href="profile.php"><i class="fa fa-person"></i> Profile</a></li>
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
                        <li class="nav-label">Log</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Market</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="add_category.php">Add Category</a></li>
                                <li><a href="add_market.php">Add Market</a></li>  
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Products</span></a>
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
        <div class="page-wrapper" style="height:1200px;">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Add Market</h3> </div>
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
<!-- Start Page Content -->
                  					
								
								
		<div class="col-lg-12">
            <div class="card card-outline-primary">
                <div class="card-header" style="background: rgb(0, 188, 126);">
                    <h4 class="m-b-0 text-white">Add Market</h4>
                </div>
                <div class="card-body">
                    <form action='' method='post'  enctype="multipart/form-data">
                        <div class="form-body">
                            <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Store Name</label>
                                                <input type="text" name="storeName" class="form-control" placeholder="Store Name">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">website URL</label>
                                                    <input type="text" name="fbPage" class="form-control form-control-danger" placeholder="http://example.com">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Open Hours</label>
                                                    <select name="OpensAt" class="form-control custom-select" data-placeholder="Choose a Category" >
                                                     <option>--Select your Hours--</option>
                                                        <option value="1am">6am</option>
                                                        <option value="2am">6am</option>
                                                        <option value="3am">6am</option>
                                                        <option value="4am">6am</option>
                                                        <option value="5am">6am</option>
                                                        <option value="6am">6am</option>
                                                        <option value="7am">7am</option> 
														<option value="8am">8am</option>
														<option value="9am">9am</option>
														<option value="10am">10am</option>
														<option value="11am">11am</option>
                                                        <option value="12pm">11am</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/span-->
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Close Hours</label>
                                                    <select name="ClosesAt" class="form-control custom-select" data-placeholder="Choose a Category" >
                                                     <option>--Select your Hours--</option>
                                                        <option value="1pm">3pm</option>
                                                        <option value="2pm">3pm</option>
                                                        <option value="3pm">3pm</option>
                                                        <option value="4pm">4pm</option> 
														<option value="5pm">5pm</option>
														<option value="6pm">6pm</option>
														<option value="7pm">7pm</option>
														<option value="8pm">8pm</option>
                                                        <option value="9pm">3pm</option>
                                                        <option value="10pm">3pm</option>
                                                        <option value="11pm">3pm</option>
                                                        <option value="12am">3pm</option>
                                                    </select>
                                                </div>
                                            </div>
										
											<div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Image</label>
                                                    <input type="file" name="image"  id="lastName" class="form-control form-control-danger" placeholder="12n">
                                                    </div>
                                            </div>
                                            <!--/span-->							
                                        </div>
                                        <!--/row-->
                                        <h3 class="box-title m-t-40">Store Address</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    
                                                    <textarea name="Address" type="text" style="height:100px;" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <!--/row-->
                                        <h3 class="box-title m-t-40">Store Description</h3>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    
                                                    <textarea name="storeDesc" type="text" style="height:100px;" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="Save" style="background: rgb(0, 188, 126);"> 
                                        <a href="dashboard.php" class="btn btn-inverse">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
					
			
					
                </div>
                <!-- End PAge Content -->
            </div>

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