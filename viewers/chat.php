<?php
include("connect.php");
session_start();
if (empty($_SESSION['user_id'])) {
    echo "<script> window.location = 'index.php';</script>";
}
?>

<!-- CSS 
========================= -->
<!--bootstrap min css-->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!--owl carousel min css-->
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<!--slick min css-->
<link rel="stylesheet" href="assets/css/slick.css">
<!--magnific popup min css-->
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<!--font awesome css-->
<link rel="stylesheet" href="assets/css/font.awesome.css">
<!--animate css-->
<link rel="stylesheet" href="assets/css/animate.css">
<!--jquery ui min css-->
<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
<!--slinky menu css-->
<link rel="stylesheet" href="assets/css/slinky.menu.css">
<!--plugins css-->
<link rel="stylesheet" href="assets/css/plugins.css">

<!-- Main Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">

<!--modernizr min js here-->
<script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

<script src="assets/plugins/jquery/jquery.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9N071f-dwiyVB3WtyD3KH1LySx4bf6HA"></script>
<script src="assets/gmaps/gmaps.js"></script>

<link href="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" />

<link rel="stylesheet" href="assets/plugins/dropify/dist/css/dropify.min.css">

<head>
    <?php include('header.php'); ?>
    <?php include('header-nav-buyer.php'); ?>
    <link rel="stylesheet" href="chat.css">
    <script src="assets/js/chat.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="../admin/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</head>


<style type="text/css">
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

    .needfortextarea {
        width: 100%;
        height: 200px;
        background: #ffffff;
        border: 1px solid #e1e1e1;
        margin-bottom: 10px;
        resize: none;
        padding: 10px;
    }

    .needforbutton {
        border: 0;
        line-height: 36px;
        background: #222222;
        font-weight: 500;
    }

    .needforbutton:hover {
        background: #79a206;
    }

    .passwordclass:focus {
        box-shadow: inset 0 0px 0 #e1e1e1 !important;
        border: 1px solid #e1e1e1;
        font-size: inherit;
    }

    .passwordclass {
        background-color: #FFF !important;
    }
</style>

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

<!--blog area start-->
<div class="blog_page_section blog_reverse" style="margin-bottom: 30px; margin-top: 30px">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-12">
                <div class="blog_sidebar_widget">
                    <div class="widget_list widget_search">
                        <input placeholder="Search . . ." type="text" id="txtsearchcontacts" style="margin-bottom: 0px;">
                    </div>
                    <div class="widget_list widget_post" id="dsplychatusers">
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="blog_wrapper blog_wrapper_sidebar">
                    <div class="chat-main-box">
                        <!-- .chat-right-panel -->
                        <div class="chat-right-aside" style="border: 1px solid rgba(120, 130, 140, 0.13);width: 100%;">
                            <div class="chat-main-header">
                                <div class="p-3 border-bottom">
                                    <h3 class="box-title">Chat Message</h3>
                                </div>
                            </div>
                            <div class="chat-rbox">
                                <ul class="chat-list p-4">
                                    <div id="dsplychats">
                                        <h6 style='margin-top: 20px; font-weight: 300; color:#afafaf; text-align:center;'>
                                            <i> Select Conversation . . . </i>
                                        </h6>
                                    </div>
                                </ul>
                            </div>
                            <div class="card-body border-top">
                                <div class="row">
                                    <div class="col-8">
                                        <input type="hidden" name="txtuserID" id="txtuserID">
                                        <input type="hidden" name="txtsendtoID" id="txtsendtoID">
                                        <input type="hidden" name="txtadmin" id="txtadmin">
                                        <textarea placeholder="Type your message here . . . " class="form-control b-0" id="txtmessage"></textarea>
                                    </div>
                                    <div class="col-4 text-right">
                                        <button type="button" class="btn btn-info btn-circle btn-lg" onclick="sendbutton();"><i class="fa fa-paper-plane"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .chat-right-panel -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--blog area end-->
<?php include('jscripts.php'); ?>
<script type="text/javascript">
    $(function() {
        $("#txtsearchcontacts").keyup(function(e) {
            if ($('#txtsearchcontacts').val() == "") {
                displaychatusers()
            } else {
                displaychatusers();
            }
        });
        displaychatusers();
    });

    function displaychatusers() {
        var srchprod = $("#txtsearchcontacts").val();
        $.ajax({
            type: 'POST',
            url: 'chat_class.php',
            data: 'srchprod=' + srchprod + '&form=displaychatusers',
            success: function(data) {
                $("#dsplychatusers").html(data);
            }
        })
    }

    function displaychats(userID, sendtoID, usertype) {
        $("#txtmessage").val("");
        $.ajax({
            type: 'POST',
            url: 'chat_class.php',
            data: 'userID=' + userID + '&sendtoID=' + sendtoID + '&usertype=' + usertype + '&form=displaychats',
            success: function(data) {
                $("#dsplychats").html(data);
                $("#txtuserID").val(userID);
                $("#txtsendtoID").val(sendtoID);
                $("#txtadmin").val(usertype);
            }
        })
    }

    function sendbutton() {
        var textmessage = $("#txtmessage").val();
        var textuserID = $("#txtuserID").val();
        var textsendtoID = $("#txtsendtoID").val();
        var textadmin = $("#txtadmin").val();
        if (textuserID != "") {
            if (textmessage != "") {
                $.ajax({
                    type: 'POST',
                    url: 'chat_class.php',
                    data: 'textmessage=' + textmessage + '&textuserID=' + textuserID + '&textsendtoID=' +
                        textsendtoID + '&textadmin=' + textadmin + '&form=sendbutton',
                    success: function(data) {
                        displaychats(textuserID, textsendtoID, textadmin);
                        displaychatusers();
                        $("#txtmessage").val("");
                    }
                })
            } else {
                alert("Please enter a message");
            }
        } else {
            alert("Please select a conversation.");
        }
    }
</script>