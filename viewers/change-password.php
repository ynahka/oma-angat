<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/about.css">

<body>
    <?php include('header-nav.php'); ?>
    <?php include('category-sidebar.php'); ?>


    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                    <div class="user-form-logo">
                        <a href="index.html"><img src="images/logo.png" alt="logo"></a>
                    </div>
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>any issue?</h2>
                            <p>Make sure your current password is strong</p>
                        </div>
                        <form class="user-form">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Current password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="reapet password">
                            </div>
                            <div class="form-button">
                                <button type="submit">change password</button>
                            </div>
                        </form>
                    </div>
                    <div class="user-form-remind">
                        <p>Go Back To<a href="login.html">login here</a></p>
                    </div>
                    <div class="user-form-footer">
                        <p>Greeny | &COPY; Copyright by <a href="#">Mironcoder</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    USER FORM PART END
        =======================================-->

    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
</body>

</html>