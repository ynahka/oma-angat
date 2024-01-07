<!DOCTYPE html>
<html lang="en">
<?php
include("connect.php");
session_start();
?>
<?php
include 'header.php'; ?>


<link rel="stylesheet" href="css/blog-details.css">
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
                    // Fetch post details using the post ID
                    if (isset($_GET['post_id'])) {
                        $post_id = $_GET['post_id'];

                        $query = "SELECT 
  po.post_id as post_id,
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
  po.post_id = ?";

                        $stmt = mysqli_prepare($connection, $query);
                        if ($stmt) {
                            mysqli_stmt_bind_param($stmt, "s", $post_id);
                            mysqli_stmt_execute($stmt);

                            $result = mysqli_stmt_get_result($stmt);

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
                    }
                    ?>
                </div>

                <div class="col-lg-6">
                    <div class="row">
                        <?php if (empty($_SESSION['user_id'])) { ?>
                            <!-- Add your code for users not logged in -->
                        <?php } else { ?>
                            <!-- Adding a hidden input field for post_id -->
                            <form action="save_comment.php?post_id=<?php echo $_GET['post_id']; ?>" class="blog-details-form" method="POST">
                                <h3 class="details-form-title">Post Comment</h3>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Write your comment" id="txtblogcomment" name="txtblogcomment"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="form-btn">Post Comment</button>
                            </form>
                        <?php } ?>

                    </div>

                    <?php
                    // Fetch comments for the specific post
                    $comment_query = "SELECT pd.id, pd.post_id, pd.comment, pd.date_added, u.username
                  FROM post_details pd
                  INNER JOIN users_table u ON pd.user_id = u.user_id
                  WHERE pd.post_id = ?";
                    $comment_stmt = mysqli_prepare($connection, $comment_query);

                    if ($comment_stmt) {
                        mysqli_stmt_bind_param($comment_stmt, "s", $post_id); // Assuming post_id is varchar
                        mysqli_stmt_execute($comment_stmt);

                        $comment_result = mysqli_stmt_get_result($comment_stmt);

                        if ($comment_result && mysqli_num_rows($comment_result) > 0) {
                    ?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog-details-comment">
                                        <h3 class="comment-title"><?php echo mysqli_num_rows($comment_result); ?> Comments</h3>
                                        <ul class="comment-list">
                                            <?php
                                            while ($comment_row = mysqli_fetch_assoc($comment_result)) {
                                            ?>
                                                <li class="comment-item">
                                                    <div class="comment-media">
                                                        <a class="comment-avatar" href="#">
                                                            <img src="../admin/assets/images/profile3.png" alt="review">
                                                        </a>
                                                        <h6 class="comment-meta">
                                                            <a href="#"><?php echo htmlentities($comment_row['username']); ?></a>
                                                            <span><?php echo htmlentities($comment_row['date_added']); ?></span>
                                                        </h6>
                                                    </div>
                                                    <p class="comment-desc">
                                                        <?php echo htmlentities($comment_row['comment']); ?>
                                                    </p>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    <?php
                        } else {
                            echo "<p>No comments yet.</p>";
                        }
                    } else {
                        echo "Error fetching comments.";
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                  BLOG DETAILS PART END
        =======================================-->
    <?php include('footer.php'); ?>
    <?php include('js-vendor.php'); ?>
    <?php include('jscripts.php'); ?>

</body>

</html>
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
</script>