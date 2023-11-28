<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connection.php");
error_reporting(E_ALL);
session_start();

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
    <title>Oma-Angat|All Products</title>
    <link rel="icon" href="images/web-logo.png" type="icon type">
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
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
            <a href="all_product.php" class="navbar-brand"><img src="images/web-logo.png" style="display:inline; width: 30%;"alt="logo"></a>
        </div>
        <!-- End Logo -->
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
            </ul>
        <!-- User profile and search -->
        <ul class="navbar-nav my-lg-0">
        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
            <form class="app-search">
            <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
        </li>
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
                <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">HOME</span></a></li>
                <li> <a href="profile.php" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Profile</span></a></li>
                <li class="nav-label">Log</li>
                <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Market</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="add_harvestdate.php">Harvesting Calendar</a></li>
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
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">All Products</h3> </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card
                            -body">
                                <h4 class="card-title">All Product data</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
							        <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Product-Name</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                                <th>Available</th>
                                                <th>Sold</th>
                                                <th>Image</th>	
                                                <th>Action</th>	  
                                            </tr>
                                        </thead>
                                        <tbody>
									    <?php
											$sql="SELECT * FROM products order by product_id desc";
											$query=mysqli_query($conx,$sql);
												if(!mysqli_num_rows($query) > 0 )
													{
														echo '<td colspan="11"><center>No Product-Data!</center></td>';
													}
													else
														{				
															while($rows=mysqli_fetch_array($query))
															{
																$mql="select * from products where store_id='".$rows['store_id']."'";
																$newquery=mysqli_query($conx,$mql);
																$fetch=mysqli_fetch_array($newquery);
																
                                                                echo '<td>'.$rows['ProductName'].'</td>
																	<td>'.$rows['description'].'</td>
																	<td>₱'.$rows['Price'].'</td>
																	<td>'.$rows['QuantityAvlbl'].'</td>
																	<td>'.$rows['QuantiSold'].'</td>
																	<td><div class="col-md-3 col-lg-8 m-b-10">
																	<center><img src="'.$rows['product_image'].'" class="img-responsive radius"  style="min-width:150px;min-height:100px;"/></center>
                                                                    </div></td>
																	<td><a href="delete_product.php?menu_del='.$rows['product_id'].'" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
																	<a href="update_product.php?menu_upd='.$rows['product_id'].'" class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5" style="background: rgb(0, 188, 126);"><i class="ti-settings" ></i></a>
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
            </div>
        </div>
    </div>
                <!-- End PAge Content -->
</div>
<!-- End Container fluid  -->
<!-- footer -->
<footer class="footer">    &copy; Copyright 2022</footer>
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


    <script src="js/lib/datatables/datatables.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="js/lib/datatables/datatables-init.js"></script>
</body>

</html>