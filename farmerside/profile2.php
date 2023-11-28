<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("../connection/connection.php");

$error = '';
$success = '';

if (isset($_SESSION['Email_Session'])) {
    $email = $_SESSION['Email_Session'];
    $result = mysqli_query($conx, "SELECT user_id FROM useraccount WHERE email='{$email}'");
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['user_id'];

    if (isset($_POST['submit'])) {
        $farmer_name = isset($_POST['farmer_name']) ? mysqli_real_escape_string($conx, $_POST['farmer_name']) : '';
        $Address = isset($_POST['Address']) ? mysqli_real_escape_string($conx, $_POST['Address']) : '';
        $Phone_Num = isset($_POST['Phone_Num']) ? mysqli_real_escape_string($conx, $_POST['Phone_Num']) : '';

        // Handle image upload
        $image = '';
        if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
            $image_tmp = $_FILES['image']['tmp_name'];
            $image_name = $_FILES['image']['name'];
            $image_path = "Res_img/" . $image_name;

            if (move_uploaded_file($image_tmp, $image_path)) {
                $image = mysqli_real_escape_string($conx, $image_path);
            } else {
                $error = "Error uploading the image.";
            }
        }

        // Check if any of the fields have data
        if (!empty($farmer_name) || !empty($Address) || !empty($Phone_Num) || !empty($image)) {
            // Start building the UPDATE query
            $updateQuery = "UPDATE farmer SET ";

            // Check if each field is not empty, and add it to the query
            if (!empty($farmer_name)) {
                $updateQuery .= "farmer_name = '{$farmer_name}', ";
            }

            if (!empty($Address)) {
                $updateQuery .= "Address = '{$Address}', ";
            }

            if (!empty($Phone_Num)) {
                $updateQuery .= "Phone_Num = '{$Phone_Num}', ";
            }

            if (!empty($image)) {
                $updateQuery .= "image = '{$image}', ";
            }

            // Remove the trailing comma and space
            $updateQuery = rtrim($updateQuery, ', ');

            // Add the WHERE clause
            $updateQuery .= " WHERE user_id = '{$user_id}'";

            // Execute the UPDATE query
            if (mysqli_query($conx, $updateQuery)) {
                $success = '<div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Profile Updated Successfully.
                </div>';
            } else {
                $error = "Error: " . $updateQuery . "<br>" . mysqli_error($conx);
            }
        } else {
            // Insert data when all fields are empty
            $sql = "INSERT INTO farmer (user_id, farmer_name, Address, Phone_Num, image) 
                    VALUES ('{$user_id}', '', '', '', '')";

            if (mysqli_query($conx, $sql)) {
                $success = '<div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                Profile Updated Successfully.
                </div>';
            } else {
                $error = "Error: " . $sql . "<br>" . mysqli_error($conx);
            }
        }
    }
} else {
    $error = "Session not set. Please make sure you are logged in.";
}
// Display form
$email = $_SESSION['Email_Session'];
$query = "SELECT * FROM useraccount WHERE email='{$email}'";
$result = mysqli_query($conx, $query);
$user = mysqli_fetch_assoc($result);

// Display farmer information
$queryFarmer = "SELECT * FROM farmer WHERE user_id='{$user_id}'";
$resultFarmer = mysqli_query($conx, $queryFarmer);
$farmer = mysqli_fetch_assoc($resultFarmer);

?>
</html>


    <head>
        <!--=====================================
                    META TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- AUTHOR META -->

        <meta name="profile" content="https://themeforest.net/user/mironcoder">

        <!-- TEMPLATE META -->
        <meta name="name" content="Greeny">
        <meta name="title" content="Greeny - eCommerce HTML Template">
        <meta name="keywords" content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, webshop, farm, grocery, natural, online store">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- WEBPAGE TITLE -->
        <title>Oma-Angat - Profile</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FAVICON -->
        <link rel="icon" href="images/favicon.png">

        <!-- FONTS -->
        <link rel="stylesheet" href="fonts/flaticon/flaticon.css">
        <link rel="stylesheet" href="fonts/icofont/icofont.min.css">
        <link rel="stylesheet" href="fonts/fontawesome/fontawesome.min.css">

        <!-- VENDOR -->
        <link rel="stylesheet" href="vendor/venobox/venobox.min.css">
        <link rel="stylesheet" href="vendor/slickslider/slick.min.css">
        <link rel="stylesheet" href="vendor/niceselect/nice-select.min.css">
        <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">

        <!-- CUSTOM -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/profile.css">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <style>
    .alert {
        padding: 10px;
        border: 1px solid;
        margin: 10px 0;
    }

    .alert-success {
        background-color: #D4EDDA;
        border-color: #C3E6CB;
        color: #155724;
    }

    .alert-danger {
        background-color: #F8D7DA;
        border-color: #F5C6CB;
        color: #721C24;
    }
</style>

    <body>
        <!--=====================================
                    MOBILE-MENU PART START
        =======================================-->
        <div class="mobile-menu">
            <a href="index.html" title="Home Page">
                <i class="fas fa-home"></i>
                <span>Home</span>
            </a>
            <button class="cate-btn" title="Category List">
                <i class="fas fa-list"></i>
                <span>category</span>
            </button>
            <button class="cart-btn" title="Cartlist">
                <i class="fas fa-shopping-basket"></i>
                <span>cartlist</span>
                <sup>9+</sup>
            </button>
            <a href="wishlist.html" title="Wishlist">
                <i class="fas fa-heart"></i>
                <span>wishlist</span>
                <sup>0</sup>
            </a>
            <a href="compare.html" title="Compare List">
                <i class="fas fa-random"></i>
                <span>compare</span>
                <sup>0</sup>
            </a>
        </div>
        <!--=====================================
                    MOBILE-MENU PART END
        =======================================-->


        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
            <div class="container">
                <h2>my profile</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">profile</li>
                </ol>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->

        <!--=====================================
                    PROFILE PART START
        =======================================-->
        <section class="inner-section profile-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>Your Profile Information</h4>
                                <button data-bs-toggle="modal" data-bs-target="#profile-edit">Edit profile</button>
                            </div>
                            <div class="account-content">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="profile-image">
                                            <a href="#"><img src="<?php echo empty($farmer['image']) ? 'images/person.png' : $farmer['image']; ?>" alt="user"></a>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="profile-card">
                                            <h6>Username</h6>
                                            <p><?php echo $user['Username']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="profile-card">
                                            <h6>Full Name</h6>
                                            <p><?php if ($farmer !== null): ?>
                                            <p><?php echo $farmer['farmer_name']; ?></p>
                                            <?php else: ?>
                                            <p>No farmer information available.</p>
                                            <?php endif; ?></p>
                                            <ul>
                                                <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#profile-edit"></button></li>
                                                <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>Contact Information</h4>
                                <button data-bs-toggle="modal" data-bs-target="#contact-add">Add Phone No.</button>
                            </div>
                            <div class="account-content">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="profile-card contact active">
                                            <h6>Phone No.</h6>
                                            <p><?php if ($farmer !== null): ?>
                                            <p><?php echo $farmer['Phone_Num']; ?></p>
                                            <?php else: ?>
                                            <p>Add Phone No.</p>
                                            <?php endif; ?></p>
                                            <ul>
                                                <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#contact-edit"></button></li>
                                                <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="account-card">
                            <div class="account-title">
                                <h4>Address</h4>
                                <button data-bs-toggle="modal" data-bs-target="#address-add">Add Address</button>
                            </div>
                            <div class="account-content">
                                <div class="row">

                                    <div class="col-md-6 col-lg-4">
                                        <div class="profile-card address">
                                            <h6>Address</h6>
                                            <p><?php if ($farmer !== null): ?>
                                            <p><?php echo $farmer['Address']; ?></p>
                                            <?php else: ?>
                                            <p>Add Address</p>
                                            <?php endif; ?></p>
                                            <ul class="user-action">
                                                <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                                <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li>
                                            </ul>
                                        </div>
                                    <!-- #region -->              
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-2">
                    <div class="profile-btn">
                        <a href="Forget.php">Change Password</a>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    PROFILE PART END
        =======================================-->


        <!--=====================================
                    MODAL ADD FORM START
        =======================================-->
        <!-- contact add form -->
        <div class="modal fade" id="contact-add">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form" method="POST" enctype="multipart/form-data">
                        <div class="form-title">
                            <h3>Add Phone Number</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input class="form-control" type="text" name="Phone_Num">     
                        </div>
                        <button class="form-btn" type="submit" name="submit">Save Contact Info</button>
                    </form>
                </div> 
            </div> 
        </div>

        <!-- address add form -->
        <div class="modal fade" id="address-add">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form" method="POST" enctype="multipart/form-data">
                        <div class="form-title">
                            <h3>Update New Address</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" name="Address" placeholder="Barangay, City/Municipality, Province"></textarea>
                        </div>
                        <button class="form-btn" type="submit" name="submit">save address</button>
                    </form>
                </div> 
            </div> 
        </div>
        <!--=====================================
                    MODAL ADD FORM END
        =======================================-->

        
        <!--=====================================
                    MODAL EDIT FORM START
        =======================================-->
        <!-- profile edit form -->

        <div class="modal fade" id="profile-edit">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form" action='' method='post' enctype="multipart/form-data">
                        <div class="form-title">
                            <h3>Edit Profile Info</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Full Name</label>
                            <input class="form-control" type="text" name="farmer_name">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Profile Image</label>
                            <input type="file" name="image"  id="lastName" class="form-control form-control-danger" placeholder="12n">
                        </div>
                        <button class="form-btn" type="submit" name="submit">Save Profile Info</button>
                    </form>
                </div> 
            </div> 
        </div>

        <!-- contact edit form -->
        <div class="modal fade" id="contact-edit">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form" method="POST">
                        <div class="form-title">
                            <h3>Edit Phone No.</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Phone Number</label>
                            <input class="form-control" type="text" name="Phone_Num" value="<?php if ($farmer !== null): ?>
                                            <?php echo $farmer['Phone_Num']; ?>
                                            <?php else: ?>
                                            No Phone number added
                                            <?php endif; ?>">
                        </div>
                        <button class="form-btn" type="submit" name="submit">Save Phone No.</button>
                    </form>
                </div> 
            </div> 
        </div>

        <!-- address edit form -->
        <div class="modal fade" id="address-edit">
            <div class="modal-dialog modal-dialog-centered"> 
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form" method="POST" enctype="multipart/form-data">
                        <div class="form-title">
                            <h3>Edit Address Info</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" name="Address" placeholder="Barangay, City/Municipality, Province"></textarea>
                        </div>
                        <button class="form-btn" type="submit" name="submit">Save Address Info</button>
                    </form>
                </div> 
            </div> 
        </div>

        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- VENDOR -->
        <script src="vendor/bootstrap/jquery-1.12.4.min.js"></script>
        <script src="vendor/bootstrap/popper.min.js"></script>
        <script src="vendor/bootstrap/bootstrap.min.js"></script>
        <script src="vendor/countdown/countdown.min.js"></script>
        <script src="vendor/niceselect/nice-select.min.js"></script>
        <script src="vendor/slickslider/slick.min.js"></script>
        <script src="vendor/venobox/venobox.min.js"></script>

        <!-- CUSTOM -->
        <script src="js/nice-select.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/accordion.js"></script>
        <script src="js/venobox.js"></script>
        <script src="js/slick.js"></script>
        <script src="js/main.js"></script> 
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>
</html>

