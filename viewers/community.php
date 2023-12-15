<!DOCTYPE html>
<html class="no-js" lang="en">
<?php
include("connect.php");
session_start();
?>

<head>
    <?php include 'header.php'; ?>
    <?php include 'header-nav-buyer.php'; ?>
    <?php include 'community/header.php'; ?>
    <link rel="stylesheet" href="css/blog-author.css">
    <link rel="stylesheet" href="community/community.css">
</head>
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
</style>

<body>
    <?php include('category-sidebar.php'); ?>
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
    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
        <div class="container">
            <h2>Community</h2>
        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <!--=====================================
                AUTHOR SINGLE PART START
        =======================================-->
    <section class="inner-section blog-grid">
        <div class="container">
            <div class="col-lg-12">
                <?php if (empty($_SESSION['user_id'])) { ?>
                <?php } else { ?>
                    <div class="top-filter">
                        <button class="filter-show" onclick="openmodaladdpost();">
                            <a href="#">
                                <i class="icofont-plus"></i>
                                <span>ADD POST</span>
                            </a>
                        </button>
                    </div>
                <?php } ?>
            </div>
            <div class="row justify-content-center">
                <div class="row1 col-md-7 col-lg-4">
                    <div class="blog-widget">
                        <h3 class="blog-widget-title">Search Post</h3>
                        <form class="blog-widget-form">
                            <input type="text" placeholder="search ">
                            <button class="icofont-search-1"></button>
                        </form>
                    </div>
                    <div class="blog-widget">
                        <h3 class="blog-widget-title">popular feeds</h3>
                        <ul class="blog-widget-feed">
                            <li>
                                <a class="blog-widget-media" href="#">
                                    <img src="images/blog-widget/01.jpg" alt="blog-widget">
                                </a>
                                <h6 class="blog-widget-text">
                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                    <span>february 02, 2021</span>
                                </h6>
                            </li>
                            <li>
                                <a class="blog-widget-media" href="#">
                                    <img src="images/blog-widget/02.jpg" alt="blog-widget">
                                </a>
                                <h6 class="blog-widget-text">
                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                    <span>february 02, 2021</span>
                                </h6>
                            </li>
                            <li>
                                <a class="blog-widget-media" href="#">
                                    <img src="images/blog-widget/03.jpg" alt="blog-widget">
                                </a>
                                <h6 class="blog-widget-text">
                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                    <span>february 02, 2021</span>
                                </h6>
                            </li>
                            <li>
                                <a class="blog-widget-media" href="#">
                                    <img src="images/blog-widget/04.jpg" alt="blog-widget">
                                </a>
                                <h6 class="blog-widget-text">
                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                    <span>february 02, 2021</span>
                                </h6>
                            </li>
                            <li>
                                <a class="blog-widget-media" href="#">
                                    <img src="images/blog-widget/05.jpg" alt="blog-widget">
                                </a>
                                <h6 class="blog-widget-text">
                                    <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                                    <span>february 02, 2021</span>
                                </h6>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-widget">
                        <h3 class="blog-widget-title">top categories</h3>
                        <ul class="blog-widget-category">
                            <li><a href="#">Vegetables<span>22</span></a></li>
                            <li><a href="#">Fruits <span>14</span></a></li>
                            <li><a href="#">Grains <span>35</span></a></li>
                            <li><a href="#">Fats & Oils <span>67</span></a></li>
                            <li><a href="#">Processed Goods<span>89</span></a></li>
                        </ul>
                    </div>
                    <!-- <div class="blog-widget">
                        <h3 class="blog-widget-title">popular tags</h3>
                        <ul class="blog-widget-tag">
                            <li><a href="#">farming</a></li>
                            <li><a href="#">organic</a></li>
                            <li><a href="#">food</a></li>
                            <li><a href="#">healthy</a></li>
                            <li><a href="#">agriculture</a></li>
                            <li><a href="#">vegetables</a></li>
                            <li><a href="#">grocery</a></li>
                            <li><a href="#">vegan</a></li>
                            <li><a href="#">life</a></li>
                            <li><a href="#">enjoy</a></li>
                        </ul>
                    </div> -->

                    <!-- <div class="blog-widget">
                        <a href="#"><img class="img-fluid" src="images/promo/blog/01.jpg" alt="promo"></a>
                    </div> -->
                </div>

                <div class="col-lg-8">
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="top-filter">
                                <button class="filter-show">
                                    <a href="#">
                                        <i class="icofont-plus"></i>
                                        <span>ADD POST</span>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="images/blog/01.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.php">Voluptate blanditiis provident Lorem ipsum dolor sit
                                            amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae
                                        deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="blog-details.php">
                                        <span>Read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="images/blog/02.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.php">Voluptate blanditiis provident Lorem ipsum dolor sit
                                            amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae
                                        deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="blog-details.php">
                                        <span>Read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="images/blog/07.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.php">Voluptate blanditiis provident Lorem ipsum dolor sit
                                            amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae
                                        deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="blog-details.php">
                                        <span>Read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog-card">
                                <div class="blog-media">
                                    <a class="blog-img" href="#">
                                        <img src="images/blog/08.jpg" alt="blog">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li>
                                            <i class="fas fa-user"></i>
                                            <span>admin</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-calendar-alt"></i>
                                            <span>february 02, 2021</span>
                                        </li>
                                    </ul>
                                    <h4 class="blog-title">
                                        <a href="blog-details.php">Voluptate blanditiis provident Lorem ipsum dolor sit
                                            amet</a>
                                    </h4>
                                    <p class="blog-desc">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias autem recusandae
                                        deleniti nam dignissimos sequi ...
                                    </p>
                                    <a class="blog-btn" href="blog-details.php">
                                        <span>Read more</span>
                                        <i class="icofont-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                  AUTHOR SINGLE PART END
        =======================================-->
    <div class="modal fade" id="modal_addpost" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-paymentneed">
            <div class="modal-content" style="border: 10px solid #82a131;background-color: #CFE2CE;">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="" style="left: 92%;">
                    <span aria-hidden="true"><i class="icon-x"></i></span>
                </button>
                <div class="modal_body" style="padding: 29px 6px 20px;">
                    <div class="container">

                        <div class="row" style="margin-top: 20px;">
                            <div class="col-lg-12 col-md-12">
                                <div class="contact_message form">
                                    <p>
                                        <label>Title *</label>
                                        <input class="reqresinfo" type="text" id="txtaddposttitle">
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="contact_message form">
                                    <p style="margin-bottom: 15px;">
                                        <label>Description *</label>
                                        <textarea class="needfortextarea" id="txtaddpostdescription"></textarea>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12" style="margin-bottom: 30px;">
                                <div class="contact_message form">
                                    <div class="contact_textarea">
                                        <label>Blog Image *</label>
                                        <form method="post" action="#" enctype="multipart/form-data" id="frmUploadvalidPic">
                                            <div class="row">
                                                <div class="col-md-12" style="display: none;">
                                                    <img src="assets/images/noimage5.png" width="200" height="250" style="border: 2px solid #bdc3c7; margin-bottom: 10px;" id="updatevalidImage"><br>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="file" class="dropify clearinfo reqresinfo" id="txtvalidImagefile" name="txtvalidImagefile" onchange="fncShowvalidPic();" accept="image/*" data-height="300">
                                                    <input type="hidden" class="clearinfo" name="txtvalidimageID" id="txtvalidimageID">
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
    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
    <?php include('../jscripts.php'); ?>


</body>

</html>


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