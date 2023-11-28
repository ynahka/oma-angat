<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("../connection/connection.php");

$notification = ''; // Initialize notification variable

if (isset($_SESSION['Email_Session'])) {
    $email = $_SESSION['Email_Session'];
    $result = mysqli_query($conx, "SELECT farmer_id FROM farmer WHERE user_id IN (SELECT user_id FROM useraccount WHERE email='{$email}')");
    $row = mysqli_fetch_assoc($result);
    $farmer_id = $row['farmer_id']; // Get the farmer_id from the farmer table

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
                    $notification = "Store added successfully";
                } else {
                    $notification = "Error: " . mysqli_error($conx);
                }
            } else {
                $notification = "Error uploading the image.";
            }
        } else {
            $notification = "Please select an image to upload.";
        }
    }
} else {
    $notification = "Session not set. Please make sure you are logged in.";
}

echo $notification; // Output the notification
?>


<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Oma-Angat|Add Market</title>
    <link rel="icon" href="images/web-logo.png" type="icon type">
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

    <!-- Add the CSS for the pop-up notification -->
    <style>
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f44336;
            color: white;
            padding: 16px;
            z-index: 1;
            text-align: center;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        #close-notification {
            background-color: transparent;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body class="fix-header">
    <!-- Your body content -->

    <!-- Add the HTML for the pop-up notification -->
    <div id="notification-popup" class="popup">
        <span id="notification-message"><?php echo $notification; ?></span>
    </div>

    <!-- Add the JavaScript for the pop-up notification -->
    <script>
        function showNotification(message) {
            var popup = document.getElementById('notification-popup');
            var notificationMessage = document.getElementById('notification-message');

            notificationMessage.innerHTML = message;
            popup.style.display = 'block';

            setTimeout(function () {
                hideNotification();
            }, 3000);
        }

        function hideNotification() {
            var popup = document.getElementById('notification-popup');
            popup.style.display = 'none';
        }

        document.getElementById('close-notification').addEventListener('click', function () {
            hideNotification();
        });

        <?php if (!empty($notification)) { ?>
            showNotification('<?php echo $notification; ?>');
        <?php } ?>
    </script>
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
                                <li><a href="add_harvestdate.php">Harvesting Calendar</a></li>
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
                    <h3 class="text-primary">MARKET</h3> </div>
               
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
<div class="container-fluid">
<!-- Start Page Content -->
    <div class="col-lg-12">
        <div class="card card-outline-primary">
            <div class="card-header" style="background: rgb(0, 188, 126);">
                <h4 class="m-b-0 text-white">Create your own Virtual Market</h4>
            </div>
                <div class="card-body">
                    <form action='' method='post'  enctype="multipart/form-data">
                        <div class="form-body">
                            <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                                <label class="control-label">Store Name</label>
                                                <input type="text" name="storeName" class="form-control" placeholder="Store Name">
                                        </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Facebook Page</label>
                                            <input type="text" name="fbPage" class="form-control form-control-danger" placeholder="http://example.com">
                                    </div>
                                </div>
                                </div>
                                
                                <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Open Hours</label>
                                                    <select name="OpensAt" class="form-control custom-select" data-placeholder="Choose a Category" >
                                                        <option>--Select your Hours--</option>
                                                        <option value="1:00:00">1:00:00</option>
                                                        <option value="2:00:00">2:00:00</option>
                                                        <option value="3:00:00">3:00:00</option>
                                                        <option value="4:00:00">4:00:00</option>
                                                        <option value="5:00:00">5:00:00</option>
                                                        <option value="6:00:00">6:00:00</option>
                                                        <option value="7:00:00">7:00:00</option>
                                                        <option value="8:00:00">8:00:00</option>
                                                        <option value="9:00:00">9:00:00</option>
                                                        <option value="10:00:00">10:00:00</option>
                                                        <option value="11:00:00">11:00:00</option> 
														<option value="12:00:00">12:00:00</option>
                                                        <option value="13:00:00">13:00:00</option>
                                                        <option value="14:00:00">14:00:00</option>
                                                        <option value="15:00:00">15:00:00</option>
                                                        <option value="16:00:00">16:00:00</option> 
														<option value="17:00:00">17:00:00</option>
														<option value="18:00:00">18:00:00</option>
														<option value="19:00:00">19:00:00</option>
                                                        <option value="20:00:00">20:00:00</option>
                                                        <option value="21:00:00">21:00:00</option>
                                                        <option value="22:00:00">22:00:00</option>
                                                        <option value="23:00:00">23:00:00</option>
                                                        <option value="24:00:00">24:00:00</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Close Hours</label>
                                                    <select name="ClosesAt" class="form-control custom-select" data-placeholder="Choose a Category" >
                                                        <option>--Select your Hours--</option>
                                                        <option value="1:00:00">1:00:00</option>
                                                        <option value="2:00:00">2:00:00</option>
                                                        <option value="3:00:00">3:00:00</option>
                                                        <option value="4:00:00">4:00:00</option>
                                                        <option value="5:00:00">5:00:00</option>
                                                        <option value="6:00:00">6:00:00</option>
                                                        <option value="7:00:00">7:00:00</option>
                                                        <option value="8:00:00">8:00:00</option>
                                                        <option value="9:00:00">9:00:00</option>
                                                        <option value="10:00:00">10:00:00</option>
                                                        <option value="11:00:00">11:00:00</option> 
														<option value="12:00:00">12:00:00</option>
                                                        <option value="13:00:00">13:00:00</option>
                                                        <option value="14:00:00">14:00:00</option>
                                                        <option value="15:00:00">15:00:00</option>
                                                        <option value="16:00:00">16:00:00</option> 
														<option value="17:00:00">17:00:00</option>
														<option value="18:00:00">18:00:00</option>
														<option value="19:00:00">19:00:00</option>
                                                        <option value="20:00:00">20:00:00</option>
                                                        <option value="21:00:00">21:00:00</option>
                                                        <option value="22:00:00">22:00:00</option>
                                                        <option value="23:00:00">23:00:00</option>
                                                        <option value="24:00:00">24:00:00</option>
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
