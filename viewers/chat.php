<?php
include("connect.php");
session_start();
if (empty($_SESSION['user_id'])) {
    echo "<script> window.location = 'index.php?url=login';</script>";
}
?>
<?php include('header.php') ?>
<link rel="stylesheet" href="chat.css">
<script src="assets/js/chat.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="admin/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
<link rel="manifest" href="/manifest.json" />
<link href="style.css" rel="stylesheet" />
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/products.css">
<?php include 'community/header.php'; ?>

<style type="text/css">
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

    .active-dot {
        display: inline-block;
        width: 10px;
        /* Adjust the size of the dot as needed */
        height: 10px;
        background-color: green;
        border-radius: 50%;
        /* Makes it a circular dot */
        margin-left: 5px;
        /* Adjust spacing if needed */
    }
</style>

<!--breadcrumbs area start-->

<!--breadcrumbs area end-->
<?php
// Check if the user is logged in
$isLoggedIn = !empty($_SESSION['user_id']);;
if ($isLoggedIn) {
    include 'header-nav-buyer.php'; // Include the file for logged-in users
} else {
    include 'header-nav.php'; // Include the file for non-logged-in users
}
?>
<?php include('category-sidebar.php'); ?>

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
                                        <input type="hidden" name="txtuser_id" id="txtuser_id">
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
<?php include('jscripts.php'); ?>

<!--blog area end-->

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

    function displaychats(user_id, sendtoID, usertype) {
        $("#txtmessage").val("");
        $.ajax({
            type: 'POST',
            url: 'chat_class.php',
            data: 'user_id=' + user_id + '&sendtoID=' + sendtoID + '&usertype=' + usertype + '&form=displaychats',
            success: function(data) {
                $("#dsplychats").html(data);
                $("#txtuser_id").val(user_id);
                $("#txtsendtoID").val(sendtoID);
                $("#txtadmin").val(usertype);
            }
        })
    }

    function sendbutton() {
        var textmessage = $("#txtmessage").val();
        var textuser_id = $("#txtuser_id").val();
        var textsendtoID = $("#txtsendtoID").val();
        var textadmin = $("#txtadmin").val();
        if (textuser_id != "") {
            if (textmessage != "") {
                $.ajax({
                    type: 'POST',
                    url: 'chat_class.php',
                    data: 'textmessage=' + textmessage + '&textuser_id=' + textuser_id + '&textsendtoID=' +
                        textsendtoID + '&textadmin=' + textadmin + '&form=sendbutton',
                    success: function(data) {
                        displaychats(textuser_id, textsendtoID, textadmin);
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