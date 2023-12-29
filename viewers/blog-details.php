<!DOCTYPE html>
<html lang="en">
<?php
include("connect.php");
session_start();
?>
<?php
include 'header.php'; ?>

<link rel="stylesheet" href="css/blog-details.css">

<body>
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


    <!--=====================================
                    BANNER PART START
        =======================================-->
    <section class="inner-section single-banner" style="background: url(images/banner.svg) no-repeat center;">
        <div class="container">
            <h2>Post Details</h2>
        </div>
    </section>
    <!--=====================================
                    BANNER PART END
        =======================================-->


    <!--=====================================
                  BLOG DETAILS PART START
        =======================================-->
    <section class="inner-section blog-details-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <?php
                    // Check if 'id' is present in the URL
                    if (isset($_GET['id'])) {
                        $post_id = $_GET['id'];

                        // Fetch post details using the post ID
                        $query = "SELECT 
                    po.id as id,
                    po.imagename AS imahe, 
                    po.date_added AS dateadd, 
                    po.postdescription AS postdesc, 
                    po.posttitle AS posttitle, 
                    u.username
                FROM 
                    post AS po
                INNER JOIN 
                    users_table AS u ON po.user_id = u.user_id
                WHERE 
                    po.id = $post_id";

                        $result = mysqli_query($connection, $query);

                        if ($result && mysqli_num_rows($result) > 0) {
                            $row = mysqli_fetch_assoc($result);
                    ?>
                            <article class="blog-details">
                                <a class="blog-details-thumb" href="#">
                                    <img src="../OmaangatImages/posts/<?php echo htmlentities($row['imahe']); ?>" alt="blog" style="width: 500px; height: 350px;">
                                </a>
                                <div class="blog-details-content">
                                    <ul class="blog-details-meta">
                                        <li>
                                            <i class="icofont-user-alt-3"></i>
                                            <span><?php echo htmlentities($row['username']); ?></span>
                                        </li>
                                        <li>
                                            <i class="icofont-ui-calendar"></i>
                                            <span><?php echo htmlentities($row['dateadd']); ?></span>
                                        </li>
                                    </ul>
                                    <h2 class="blog-details-title"><?php echo htmlentities($row['posttitle']); ?></h2>


                                    <ul class="blog-details-list">
                                        <p class="blog-details-desc"><?php echo htmlentities($row['postdesc']); ?></p>
                                        <!-- Add more content as needed -->
                                    </ul>
                                </div>
                            </article>
                    <?php
                        } else {
                            echo "Post not found.";
                        }
                    } else {
                        echo "Post ID not provided.";
                    }
                    ?>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <?php if (empty($_SESSION['user_id'])) { ?>
                            <!-- Add your code for users not logged in -->
                        <?php } else { ?>
                            <!-- Adding a hidden input field for post_id -->
                            <form class="blog-details-form" method="POST">
                                <input type="hidden" id="txtpost_id" value="<?php echo htmlentities($post_id); ?>">
                                <h3 class="details-form-title">Post Comment</h3>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Write your comment" id="txtblogcomment"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button class="form-btn" onclick="savepostcomments()">Post Comment</button>
                            </form>
                        <?php } ?>

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-details-comment">
                                <h3 class="comment-title">2 Comments</h3>
                                <ul class="comment-list">
                                    <li class="comment-item">
                                        <div class="comment-media">
                                            <a class="comment-avatar" href="#">
                                                <img src="images/avatar/04.jpg" alt="review">
                                            </a>
                                            <h6 class="comment-meta">
                                                <a href="#">Sample</a>
                                                <span>December 03, 2023</span>
                                            </h6>
                                        </div>
                                        <p class="comment-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque
                                            blanditiis dolores nulla excepturi ea nobis!</p>
                                        <form class="comment-reply">
                                            <input type="text" placeholder="reply your comment">
                                            <button><i class="icofont-reply"></i>reply</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                  BLOG DETAILS PART END
        =======================================-->
    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
</body>
<script type="text/javascript">
    $(function() {
        $("#community").addClass('active');
        fncdsplyallcommunitypost();
        fncdsplyallcommunitycomments();
    })

    function fncdsplyallcommunitypost() {
        var textpost_id = $("#txtpost_id").val();
        $.ajax({
            type: 'POST',
            url: 'community-details_class.php',
            data: 'textpost_id=' + textpost_id + '&form=fncdsplyallcommunitypost',
            success: function(data) {
                $("#displayallcommunitypost").html(data);
            }
        });
    }

    function fncdsplyallcommunitycomments() {
        var textpost_id = $("#txtpost_id").val();
        $.ajax({
            type: 'POST',
            url: 'community-details_class.php',
            data: 'textpost_id=' + textpost_id + '&form=fncdsplyallcommunitycomments',
            success: function(data) {
                var show = data.split("|");
                $("#displayallcommunitycomments").html(show[0]);
                $("#txtnumberofcomments").text(show[1]);
            }
        });
    }

    function savepostcomments() {
        var textpost_id = $("#txtpost_id").val();
        var textblogcomment = $("#txtblogcomment").val();

        if (textpost_id == "") {
            Swal.fire(
                'ALERT',
                'Cannot submit your post.',
                'warning'
            )
        } else {
            if (textblogcomment == "") {
                Swal.fire(
                    'ALERT',
                    'Please enter a comment.',
                    'warning'
                )
            } else {
                $(".loadload").show();
                $.ajax({
                    type: 'POST',
                    url: 'community-details_class.php',
                    data: 'textpost_id=' + textpost_id + '&textblogcomment=' + textblogcomment +
                        '&form=savepostcomments',
                    success: function(data) {
                        setTimeout(function() {
                            $(".loadload").hide();

                            fncdsplyallcommunitycomments();
                            $("#txtblogcomment").val("");
                        }, 500);
                    }
                });
            }
        }
    }
</script>

</html>