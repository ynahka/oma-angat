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
    <link rel="stylesheet" href="css/community.css">
</head>

<body>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>COMMUNITY</h3>
                        <ul>
                            <li><a href="index.php?url=home">home</a></li>
                            <li>Community</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog area start-->
    <div class="blog_page_section blog_reverse" style="margin-bottom: 30px; margin-top: 30px">
        <div class="container">
            <div class="row" style="justify-content:center">
                <div class="col-lg-9 col-md-12">

                    <?php if (empty($_SESSION['user_id'])) { ?>

                    <?php } else { ?>
                    <div class="blog_sidebar_widget" style="margin-bottom: 20px;">
                        <div class="widget_list widget_search">
                            <button onclick="openmodaladdpost();"><i class="fa fa-plus"></i> Add Post</button>
                        </div>
                    </div>
                    <?php } ?>

                    <div class="blog_wrapper blog_wrapper_sidebar" id="displayallcommunitypost">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--post area end-->

    <!-- PAYMENT UPLOAD start-->
    <div class="modal fade" id="modal_addpost" tabindex="-1" role="dialog" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-paymentneed">
            <div class="modal-content" style="border: 10px solid #82a131;background-color: #eef4dd;">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick=""
                    style="left: 92%;">
                    <span aria-hidden="true"><i class="icon-x"></i></span>
                </button>
                <div class="modal_body" style="padding: 29px 6px 20px;">
                    <div class="container">

                        <div class="row" style="margin-top: 20px;">
                            <div class="col-lg-12 col-md-12">
                                <div class="contact_message form">
                                    <p>
                                        <label>Title*</label>
                                        <input class="reqresinfo" type="text" id="txtaddposttitle">
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="contact_message form">
                                    <p style="margin-bottom: 15px;">
                                        <label>Description*</label>
                                        <textarea class="needfortextarea" id="txtaddpostdescription"></textarea>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12" style="margin-bottom: 30px;">
                                <div class="contact_message form">
                                    <div class="contact_textarea">
                                        <label>Post Image*</label>
                                        <form method="post" action="#" enctype="multipart/form-data"
                                            id="frmUploadvalidPic">
                                            <div class="row">
                                                <div class="col-md-12" style="display: none;">
                                                    <img src="assets/images/noimage5.png" width="200" height="250"
                                                        style="border: 2px solid #bdc3c7; margin-bottom: 10px;"
                                                        id="updatevalidImage"><br>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="file" class="dropify clearinfo reqresinfo"
                                                        id="txtvalidImagefile" name="txtvalidImagefile"
                                                        onchange="fncShowvalidPic();" accept="image/*"
                                                        data-height="300">
                                                    <input type="hidden" class="clearinfo" name="txtvalidimageID"
                                                        id="txtvalidimageID">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cart_submit" style="padding: 0px;text-align: left;">
                            <button onclick="submitpost()" style="padding: 10px 20px;">Post</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('jscripts.php'); ?>
</body>

</html>
<!-- PAYMENT UPLOAD end-->

<script type="text/javascript">
$(function() {
    $("#community").addClass('active');
    fncdsplyallcommunitypost();
})

function fncdsplyallcommunitypost() {
    $.ajax({
        type: 'POST',
        url: 'community_class.php',
        data: 'form=fncdsplyallcommunitypost',
        success: function(data) {
            $("#displayallcommunitypost").html(data);
        }
    });
}

function openmodaladdpost() {
    $("#modal_addpost").modal('show');
}

function submitpost() {
    var textaddposttitle = $("#txtaddposttitle").val();
    var textaddpostdescription = $("#txtaddpostdescription").val();

    $(".loadload").show();
    $.ajax({
        type: 'POST',
        url: 'community_class.php',
        data: 'textaddposttitle=' + textaddposttitle + '&textaddpostdescription=' + encodeURIComponent(
            textaddpostdescription) + '&form=submitpost',
        success: function(data) {
            setTimeout(function() {
                $(".loadload").hide();

                Swal.fire({
                    title: "Success!",
                    text: "Successfully posted.",
                    type: "success",
                    icon: "success",
                    showCancelButton: false,
                    confirmButtonColor: "#2778c4",
                    confirmButtonText: "Okay",
                    closeOnConfirm: false
                }).then((result) => {
                    if (result.value) {
                        uploadpost(data);
                    }
                });
            }, 500);
        }
    });
}

function fncShowvalidPic() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("txtvalidImagefile").files[0]);
    oFReader.onload = function(oFREvent) {
        document.getElementById("updatevalidImage").src = oFREvent.target.result;
    };
}

function uploadpost(genid) {
    $("#txtvalidimageID").val(genid);
    var data = new FormData($('#frmUploadvalidPic')[0]);
    $.ajax({
        type: 'POST',
        url: 'uploadpost.php',
        data: data,
        mimeType: 'multipart/form-data',
        contentType: false,
        cache: false,
        processData: false,
        success: function(data) {
            window.location = "index.php?url=community";
        }
    });
}
</script>