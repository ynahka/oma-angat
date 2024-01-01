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

    <style>
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

        .btn:link,
        .btn:visited {
            text-transform: uppercase;
            text-decoration: none;
            padding: 15px 40px;
            display: inline-block;
            border-radius: 100px;
            transition: all 0.2s;
            position: absolute;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 255, 0, 0.2);
        }

        .btn:active {
            transform: translateY(-1px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-white {
            background-color: #fff;
            color: #777;
        }

        .btn::after {
            content: "";
            display: inline-block;
            height: 100%;
            width: 100%;
            border-radius: 100px;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            transition: all 0.4s;
        }

        .btn-white::after {
            background-color: #fff;
        }

        .btn:hover::after {
            transform: scaleX(1.4) scaleY(1.6);
            opacity: 0;
        }

        .btn-animated {
            -webkit-animation: moveInBottom 5s ease-out;
            animation: moveInBottom 5s ease-out;
            -webkit-animation-fill-mode: backwards;
            animation-fill-mode: backwards;
        }

        @-webkit-keyframes moveInBottom {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }

        @keyframes moveInBottom {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }

            100% {
                opacity: 1;
                transform: translateY(0px);
            }
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
    <!--<div>
	  <button id="enable" class="btn btn-white btn-animate">Enable PWA</button>
    </div>
    <button id="install" class="btn btn-white btn-animate">Install app</button> -->
    <script src="/script.js"></script>
    <!--offcanvas menu area end-->
    <!--header area end-->

    <?php
    if (!isset($_GET['url'])) {
        echo "<script>window.location='index.php?url=index';</script>";
    } else {
        if ($_GET['url'] == "index") {
            include "home.php";
        } elseif ($_GET['url'] == "login") {
            include "login.php";
        } elseif ($_GET['url'] == "registration") {
            include "registration.php";
        }
    }
    ?>
    <?php include('jscripts.php'); ?>
</body>

</html>