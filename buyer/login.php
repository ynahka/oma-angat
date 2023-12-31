<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
session_start();
if (isset($_GET['code'])) {
    $code = $_GET['code'];
    mysqli_query($connection, "UPDATE users_table SET status = 'APPROVED' WHERE code = '" . $code . "' ;");
}
?>

<head>
    <link rel="manifest" href="/manifest.json" />
    <link href="/style.css" rel="stylesheet" />
    <?php include('header.php'); ?>
    <style type="text/css">
        .auth {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            background-color: #4C644B;
            overflow-x: hidden;
            overflow-y: auto;
            /* box-shadow: 0px 8px 20px 0px rgb(85, 115, 95, 0.4); */
        }

        .auth-container {
            width: 450px;
            min-height: 330px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translateY(-50%) translateX(-50%);
            transform: translateY(-50%) translateX(-50%);
        }

        .card {
            background-color: #CFE2CE;
            -webkit-box-shadow: 1px 1px 5px rgb(126 142 159);
            box-shadow: 1px 1px 5px rgb(126 142 159);
            margin-bottom: 10px;
            border-radius: 25px !important;
            border: none;
        }

        .auth-container .auth-header {
            text-align: center;
            margin-top: 30px;
        }

        .loadload {
            width: 100%;
            height: 100%;
            top: 0px;
            position: fixed;
            z-index: 99999;
            background: rgba(255, 255, 255, 0.5);
            transition: all 0.2s;
        }

        .spinner-border {
            height: 50px;
            transform-origin: center center;
            width: 50px;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }
    </style>
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
    <script src="/script.js"></script>

    <div class="auth">
        <div class="auth-container">
            <div class="card">
                <header class="auth-header">
                    <a href="#" class="text-center db" style="padding-top: 5px;padding-bottom: 5px;"><img src="../admin/assets/images/single-logo.png" alt="Home" width="40%" height="auto" title="Homepage" />
                    </a>
                </header>
                <div class="card-body cardbodylogin" style="padding: 1.25rem 1.8rem;">
                    <div class="form-horizontal form-material">
                        <div class="form-group row" style="margin-bottom: 5px;">
                            <div class="col-md-12">
                                <p class="text-center" style="margin-bottom: 5px; font-weight: 500; font-size: 1rem;">
                                    SIGN IN TO YOUR ACCOUNT</p>
                            </div>
                        </div>

                        <label class="mt-3" for="username" style="margin-bottom: 0px; font-weight: 500">Username</label>
                        <div class="form-group row">
                            <span class="text-danger"></span>
                            <div class="col-md-11" style="flex: 0 0 98.2%; max-width: 98.2%;">
                                <input type="email" class="form-control underlined" style="border-bottom: 0.5px solid #4C644B !important;" name="txtusername" id="txtusername" placeholder="" required style="height: 40px; background: #CFE2CE;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" style="margin-bottom: 0px; font-weight: 500">Password</label>
                            <span class="text-danger"></span>
                            <div class="row">
                                <div class="col-md-11" style="padding-right: 0px; flex: 0 0 95%; max-width: 95%;">
                                    <input type="password" class="form-control underlined" style="border-bottom: 0.5px solid #4C644B !important;" name="txtpassword" id="txtpassword" placeholder="" required style=" height: 40px; background: #CFE2CE;">
                                </div>
                                <div class="col-md-1" style="padding-left: 0px;padding-right: 0px; flex: 1%; max-width: 1%;">
                                    <i class="fa fa-eye-slash" style="margin-left: -23px; cursor: pointer; font-size: 1.1rem; margin-top: .7rem" id="logineye" onclick=" fncloginpassattribHash()"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <div class="col-xs-12">
                                <a href="../seller/forgot_password.php" style="font-size: 16px; margin-bottom: 14px; display:block;">Forgot Password?</a>
                                <button class="btn btn-success btn-md btn-block text-uppercase waves-effect waves-light" onclick="loginuser();" style="padding: 10px 10px; font-weight: 500; background-color: #4C644B; border: #4C644B 1px solid">LogIn</button>
                                <span style="font-size: 16px; margin-top:14px; display:block;">Don't have an account
                                    yet?<a href="../buyer/registration.php" style="margin-left: 20px;"> Create an
                                        account.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

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
                            window.location = "../viewers/buyer-landing.php";
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

    // function fncaddpassattribHash2() {
    //     $("#txtpassword").attr("type", "password");
    //     $("#inputaddusereye2").attr("onclick", "fncaddpassattribunHash2()");
    //     $("#addusereye2").removeClass("fa-eye");
    //     $("#addusereye2").addClass("fa-eye-slash");
    // }

    // function fncaddpassattribunHash2() {
    //     $("#txtpassword").attr("type", "text");
    //     $("#inputaddusereye2").attr("onclick", "fncaddpassattribHash2()");
    //     $("#addusereye2").addClass("fa-eye");
    //     $("#addusereye2").removeClass("fa-eye-slash");
    // }

    function fncloginpassattribHash() {
        $("#txtpassword").attr("type", "password");
        $("#logineye").attr("onclick", "fncloginpassattribunHash()");
        $("#logineye").removeClass("fa-eye");
        $("#logineye").addClass("fa-eye-slash");
    }

    function fncloginpassattribunHash() {
        $("#txtpassword").attr("type", "text");
        $("#logineye").attr("onclick", "fncloginpassattribHash()");
        $("#logineye").addClass("fa-eye");
        $("#logineye").removeClass("fa-eye-slash");
    }
</script>