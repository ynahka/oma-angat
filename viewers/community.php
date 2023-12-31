<!DOCTYPE html>
<html class="no-js" lang="en">
<?php
include("connect.php");
session_start();
?>

<head>
    <?php include 'header.php'; ?>
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
    <?php
    // Check if the user is logged in
    $isLoggedIn = !empty($_SESSION['user_id']) && $_SESSION['usertype'] === 'CUSTOMER';
    if ($isLoggedIn) {
        include 'header-nav-buyer.php'; // Include the file for logged-in users
    } else {
        include 'header-nav.php'; // Include the file for non-logged-in users
    }
    ?>

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
                <?php if (empty($_SESSION['user_id']) || $_SESSION['usertype'] !== 'CUSTOMER') { ?>
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
            <div class="row">
                <!-- <div class="row1 col-md-7 col-lg-4">
                    <div class="blog-widget">
                        <h3 class="blog-widget-title">Search Post</h3>
                        <form class="blog-widget-form">
                            <input type="text" placeholder="search ">
                            <button class="icofont-search-1"></button>
                        </form>
                    </div>
                </div> -->

                <div class="col-lg-12">
                    <div class="row">
                        <?php
                        $ret = mysqli_query($connection, "SELECT po.post_id as post_id,
               po.imagename AS imahe, 
               po.date_added AS dateadd, 
               po.postdescription AS postdesc, 
               po.posttitle AS posttitle, 
               u.username
           FROM 
               post AS po
           INNER JOIN 
               users_table AS u ON po.user_id = u.user_id");


                        $num = mysqli_num_rows($ret);
                        if ($num > 0) {
                            while ($row = mysqli_fetch_array($ret)) {
                        ?>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <div class="blog-card">
                                        <div class="blog-media">
                                            <a class="blog-img" href="blog-details.php?post_id=<?php echo $row['post_id']; ?>">

                                                <img src="../OmaangatImages/posts/<?php echo htmlentities($row['imahe']); ?>" alt="blog" style="width: 300px; height: 230px;">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <ul class="blog-meta">
                                                <li>
                                                    <i class="fas fa-user"></i>
                                                    <span><?php echo htmlentities($row['username']); ?></span>
                                                </li>
                                                <li>
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span><?php echo htmlentities($row['dateadd']); ?></span>
                                                </li>
                                            </ul>
                                            <h4 class="blog-title">
                                                <a href="blog-details.php?post_id=<?php echo $row['post_id']; ?>"><?php echo htmlentities($row['posttitle']); ?></a>
                                            </h4>
                                            <p class="blog-desc">
                                                <?php echo htmlentities($row['postdesc']); ?>
                                            </p>
                                            <a class="blog-btn" href="blog-details.php?post_id=<?php echo $row['post_id']; ?>">
                                                <span>Read more</span>
                                                <i class="icofont-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
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
    <?php include('jscripts.php'); ?>


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
                window.location = "community.php";
            }
        });
    }
</script>