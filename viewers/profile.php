<!DOCTYPE html>
<html lang="en">
<?php
include("connect.php");
session_start();
if (empty($_SESSION['user_id'])) {
    echo "<script> window.location = '../buyer/login.php';</script>";
} else {
?>
    <?php include 'header.php'; ?>
    <link rel="stylesheet" href="css/profile.css">

    <body>
        <?php include('header-nav-buyer.php'); ?>
        <?php include('category-sidebar.php'); ?>



        <!--=====================================
                    BANNER PART START
        =======================================-->
        <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
            <div class="container">
                <h2>my profile</h2>
            </div>
        </section>
        <!--=====================================
                    BANNER PART END
        =======================================-->


        <!--=====================================
                    PROFILE PART START
        =======================================-->

        <?php
        session_start();
        $query = mysqli_query($connection, "SELECT u.*, ud.* FROM users_table u
          INNER JOIN user_details ud ON u.user_id = ud.user_id
          WHERE u.user_id='" . $_SESSION['user_id'] . "'");
        while ($row = mysqli_fetch_array($query)) { ?>
            <section class="inner-section profile-part">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="account-card">
                                <div class="account-title">
                                    <h4>Account Information</h4>
                                    <button data-bs-toggle="modal" data-bs-target="#profile-edit">edit profile</button>
                                </div>
                                <div class="account-content">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="profile-image">
                                                <a href="#"><img src="images/user.png" alt="user"></a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label class="form-label">username</label>
                                                <input class="form-control" type="text" value="<?php echo $row['username']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" type="email" value="<?php echo $row['email']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="profile-btn">
                                                <a href="change-password.php">change password</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="account-card">
                                        <div class="account-title">
                                            <h4>contact number</h4>
                                            <!-- <button data-bs-toggle="modal" data-bs-target="#contact-edit">add contact</button> -->
                                        </div>
                                        <div class="account-content">
                                            <div class="row">
                                                <div class="col-lg-12 col-lg-6 alert fade show">
                                                    <div class="profile-card contact active">
                                                        <h6>primary</h6>
                                                        <p><?php echo $row['contactnum']; ?></p>
                                                        <ul>
                                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#contact-edit"></button></li>
                                                            <!-- <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li> -->
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
                                            <h4>delivery address</h4>
                                            <!-- <button data-bs-toggle="modal" data-bs-target="#address-edit">add address</button> -->
                                        </div>
                                        <div class="account-content">
                                            <div class="row">
                                                <div class="col-lg-12 col-lg-6 alert fade show">
                                                    <div class="profile-card address active">
                                                        <h6>Home</h6>
                                                        <p><?php echo $row['address']; ?></p>
                                                        <ul class="user-action">
                                                            <li><button class="edit icofont-edit" title="Edit This" data-bs-toggle="modal" data-bs-target="#address-edit"></button></li>
                                                            <!-- <li><button class="trash icofont-ui-delete" title="Remove This" data-bs-dismiss="alert"></button></li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </section>
        <?php
        }
        ?>
        <!--=====================================
                    PROFILE PART END
        =======================================-->


        <!--=====================================
                    MODAL EDIT FORM START
        =======================================-->
        <!-- profile edit form -->
        <div class="modal fade" id="profile-edit">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>edit profile info</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">profile image</label>
                            <input class="form-control" type="file">
                        </div>
                        <div class="form-group">
                            <label class="form-label">name</label>
                            <input class="form-control" type="text" value="Miron Mahmud">
                        </div>
                        <div class="form-group">
                            <label class="form-label">email</label>
                            <input class="form-control" type="text" value="mironcoder@gmail.com">
                        </div>
                        <button class="form-btn" type="submit">save profile info</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function saveProfileInfo() {
                // Get form data
                var formData = new FormData(document.getElementById('edit-profile-form'));

                // Perform AJAX request to handle form submission
                $.ajax({
                    type: 'POST',
                    url: 'save_profile_info.php', // Replace with the actual backend script to handle the form submission
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Handle the response from the server (e.g., show success message or update UI)
                        console.log(response);
                        // Close the modal after successful submission
                        $('#profile-edit').modal('hide');
                    },
                    error: function(error) {
                        // Handle errors, if any
                        console.error(error);
                    }
                });
            }
        </script>
        <!-- contact edit form -->
        <div class="modal fade" id="contact-edit">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>edit contact info</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">title</label>
                            <select class="form-select">
                                <option value="primary" selected>primary</option>
                                <option value="secondary">secondary</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">number</label>
                            <input class="form-control" type="text" placeholder="+63 900-000-0000">
                        </div>
                        <button class="form-btn" type="submit">save contact info</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- address edit form -->
        <div class="modal fade" id="address-edit">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button class="modal-close" data-bs-dismiss="modal"><i class="icofont-close"></i></button>
                    <form class="modal-form">
                        <div class="form-title">
                            <h3>edit address info</h3>
                        </div>
                        <div class="form-group">
                            <label class="form-label">title</label>
                            <select class="form-select">
                                <option value="home" selected>home</option>
                                <option value="office">office</option>
                                <option value="Bussiness">Bussiness</option>
                                <option value="academy">academy</option>
                                <option value="others">others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">address</label>
                            <textarea class="form-control" placeholder="Enter Complete Address..."></textarea>
                        </div>
                        <button class="form-btn" type="submit">save address info</button>
                    </form>
                </div>
            </div>
        </div>
        <!--=====================================
                    MODAL EDIT FORM END
        =======================================-->




        <?php include('footer.php'); ?>
        <?php include('js-vendor.php'); ?>

    </body>

</html>
<?php
}
?>