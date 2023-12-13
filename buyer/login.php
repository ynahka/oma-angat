<?php
if (isset($_GET['code'])) {
    $code = $_GET['code'];
    mysqli_query($connection, "UPDATE users_table SET status = 'APPROVED' WHERE code = '" . $code . "' ;");
}
?>
<?php
include("connection/connect.php");
session_start();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <link rel="manifest" href="/manifest.json" />
    <link href="/style.css" rel="stylesheet" />

    <?php
    include('header.php');
    ?>
    <link rel="stylesheet" href="css/login.css">
    <title>OMA-ANGAT FORGOT AGRI-MARKET FOR ALABAYANO FARMERS</title>
    <link rel="icon" href="assets/img/web-logo.png" type="icon type">
</head>

<body>
    <div class="loadload">
        <div class="spinner-border text-secondary" role="status"></div>
    </div>

    <script type="text/javascript">
    $(function() {
        setTimeout(function() {
            $(".loadload").hide();
        }, 300);
    })
    </script>
    <script>
    if ("serviceWorker" in navigator) {
        navigator.serviceWorker.register("service-worker.js");
    }
    </script>
    <!--<div>
	  <button id="enable" class="btn btn-white btn-animate">Enable PWA</button>
    </div>
    <button id="install" class="btn btn-white btn-animate">Install app</button> -->
    <script src="/script.js"></script>
    <!--offcanvas menu area end-->
    <header>
    </header>
    <!--header area end-->

    <!-- customer login start -->
    <div class="customer_login" style="margin-top: 50px;padding-bottom: 70px;">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <!--login area start-->
                <div class="col-lg-5 col-md-5">
                    <div class="account_form">
                        <div style="border: 1px solid #e1e1e1; padding: 23px 20px 29px; border-radius: 5px;">
                            <div class="auth-header">
                                <a href="javascript:void(0)" class="text-center db"
                                    style="padding-top: 5px;padding-bottom: 5px;">
                                    <img src="assets/img/web-logo.png" alt="Home" width="40%" height="auto" />
                                </a>
                            </div>
                            <p>
                                <label>Username <span>*</span></label>
                                <input type="text" id="txtusername">
                            </p>
                            <label>Passwords <span>*</span></label>
                            <div class="input-group" style="margin-top: 0px;margin-bottom: 20px">
                                <input type="Password" class="form-control passwordclass" id="txtpassword">
                                <div class="input-group-prepend" style="cursor: pointer;"
                                    onclick="fncaddpassattribunHash2();" id="inputaddusereye2">
                                    <span class="input-group-text" style="height: 45px;border-radius: 0rem;"><i
                                            class="fa fa-eye-slash" id="addusereye2"></i></span>
                                </div>
                            </div>
                            <div class="forget">
                                <a href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="login_submit text-center" style="margin-bottom:20px;">
                                <button style="padding: 5px 50px;height: 38px;" onclick="loginuser()">login</button>
                            </div>
                            <div class="account text-center" style="margin-bottom:20px;">
                                <span style="font-size: 14px;">Don't have an account yet?<a href="registration.php"
                                        style="color:#95bf84"> Register Here</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--login area start-->
            </div>
        </div>
    </div>
    <!-- customer login end -->

    <script type="text/javascript">
    $(document).keyup(function(e) {
        var e = e || window.event; // for IE to cover IEs window event-object
        if (e.which == 13) {
            loginuser();
        }
    });

    function loginuser() {
        var txtusername = $("#txtusername").val();
        var txtpassword = $("#txtpassword").val();

        $(".loadload").show();
        $.ajax({
            type: 'POST',
            url: 'login_class.php',
            data: 'txtusername=' + txtusername + '&txtpassword=' + txtpassword + '&form=loginuser',
            success: function(data) {
                setTimeout(function() {
                    $(".loadload").hide();

                    if (data == 1) {
                        setTimeout(function() {
                            window.location = "index.php?url=home";
                        }, 1500);

                    } else if (data == 3) {
                        Swal.fire(
                            'USER INACTIVE',
                            'Your account is currently inactive, Please contact your admin.',
                            'warning'
                        )

                    } else {
                        Swal.fire(
                            'USER NOT FOUND',
                            'You have entered invalid username or password.',
                            'warning'
                        )
                    }
                }, 1000);
            }
        })
    }

    function reqField1(classN) {
        var isValid = 1;
        $('.' + classN).each(function() {
            if ($(this).val() == '') {
                $(this).css('border', '1px #a94442 solid');
                $(this).addClass('lala');
                isValid = 0;
            } else {
                $(this).css('border', '');
                $(this).removeClass('lala');
            }
        });

        return isValid;
    }

    function fncaddpassattribHash2() {
        $("#txtpassword").attr("type", "password");
        $("#inputaddusereye2").attr("onclick", "fncaddpassattribunHash2()");
        $("#addusereye2").removeClass("fa-eye");
        $("#addusereye2").addClass("fa-eye-slash");
    }

    function fncaddpassattribunHash2() {
        $("#txtpassword").attr("type", "text");
        $("#inputaddusereye2").attr("onclick", "fncaddpassattribHash2()");
        $("#addusereye2").addClass("fa-eye");
        $("#addusereye2").removeClass("fa-eye-slash");
    }
    </script>