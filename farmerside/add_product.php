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
    $result = mysqli_query($conx, "SELECT farmer_id FROM farmeruseraccount WHERE email='{$email}'");
    $row = mysqli_fetch_assoc($result);
    $farmer_id = $row['farmer_id'];

    $result = mysqli_query($conx, "SELECT store_id FROM store WHERE farmer_id='{$farmer_id}'");
    $row = mysqli_fetch_assoc($result);
    $store_id = $row['store_id'];

    if (isset($_POST['submit_product'])) {
        $category_id = isset($_POST['category_id']) ? mysqli_real_escape_string($conx, $_POST['category_id']) : '';
        $ProductName = isset($_POST['ProductName']) ? mysqli_real_escape_string($conx, $_POST['ProductName']) : '';
        $description = isset($_POST['description']) ? mysqli_real_escape_string($conx, $_POST['description']) : '';
        $Price = isset($_POST['Price']) ? mysqli_real_escape_string($conx, $_POST['Price']) : '';
        $QuantityAvlbl = isset($_POST['QuantityAvlbl']) ? mysqli_real_escape_string($conx, $_POST['QuantityAvlbl']) : '';
        $QuantiSold = isset($_POST['QuantiSold']) ? mysqli_real_escape_string($conx, $_POST['QuantiSold']) : '';

        if (isset($_FILES['product_image']) && $_FILES['product_image']['error'] === 0) {
            $image_tmp = $_FILES['product_image']['tmp_name'];
            $image_name = $_FILES['product_image']['name'];
            $image_path = "Product_img/" . $image_name;

            if (move_uploaded_file($image_tmp, $image_path)) {
                $product_image = mysqli_real_escape_string($conx, $image_path);

                $sql = "INSERT INTO products (store_id, category_id, ProductName, description, Price, QuantityAvlbl, QuantiSold, product_image) 
                        VALUES ('{$store_id}', '{$category_id}', '{$ProductName}', '{$description}', '{$Price}', '{$QuantityAvlbl}', '{$QuantiSold}', '{$product_image}')";

                if (mysqli_query($conx, $sql)) {
                    $success = '<div class="alert alert-success alert-dismissible fade show">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Congrats!</strong> New Product Added Successfully.
								</div>';
                } else {
                    $error = '<div class="alert alert-danger alert-dismissible fade show">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>Adding Error</strong></div>';
                }
            } else {
                $error = '<div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Error Uploading the product image</strong></div>';
            }
        } else {
            $error = '<div class="alert alert-danger alert-dismissible fade show">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>Please select image</strong></div>';
        }
    }
} else {
    $error = '<div class="alert alert-danger alert-dismissible fade show">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<strong>Sessipon not set. Make sure you are already logged in. </strong></div>';
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
    <link rel="icon" href="images/web-logo.png" type="icon type">
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
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
                    <a href="add_product.php" class="navbar-brand"><img src="images/web-logo.png" style="display:inline; width: 30%;"alt="logo"></a>
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
                      
                      
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/person.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
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
                      <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Product</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_product.php">All Products</a></li>
								<li><a href="add_product.php">Add Product</a></li>
                              
                                
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
                    <h3 class="text-primary">Add Product</h3> </div>
                
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
<div class="container-fluid">
<?php  echo $error;
echo $success; ?>
                <!-- Start Page Content -->
	<div class="col-lg-12">
        <div class="card card-outline-primary">
            <div class="card-header" style="background: rgb(0, 188, 126);">
                <h4 class="m-b-0 text-white">Add Product to Market</h4>
            </div>
            <div class="card-body">
                <form action='' method='post'  enctype="multipart/form-data">
                    <div class="form-body">
                        <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Name</label>
                                        <input type="text" name="ProductName" class="form-control" placeholder="Product Name">
                                    </div>
                                </div>
                                    
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Product Description</label>
                                        <input type="text" name="description" class="form-control form-control-danger" placeholder="Description">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Available Quantity</label>
                                        <input type="text" name="QuantityAvlbl" class="form-control form-control-danger" placeholder="Available Quantity">
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Quantity Sold</label>
                                        <input type="text" name="QuantiSold" class="form-control form-control-danger" placeholder="Quantity Sold">
                                    </div>
                                </div>
                                <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Price</label>
                                            <input type="text" name="Price" class="form-control" placeholder="₱">
                                        </div>
                                    </div>
                                <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group has-danger">
                                            <label class="control-label"> Product Image</label>
                                            <input type="file" name="product_image"  id="lastName" class="form-control form-control-danger" placeholder="12n">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Select Category</label>
											<select name="category_id" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                            <option>--Select Category--</option>
                                            <?php
													$result = mysqli_query($conx, "SELECT category_id, ctgry_name FROM productcategory");
                
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo "<option value='" . $row['category_id'] . "'>" . $row['ctgry_name'] . "</option>";
                                                    }
													?> 
											</select>
                                        </div>
                                    </div>
								</div>
                    </div>
                </div>
                <div class="form-actions">
                    <input type="submit" class="btn btn-success" name="submit_product" value="Add Product" style="background: rgb(0, 188, 126);"> 
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