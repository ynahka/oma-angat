<?php
include("connect.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_SESSION['user_id'])) {
        $comment = mysqli_real_escape_string($connection, $_POST['comment']);
        $userId = $_SESSION['user_id'];

        // Fetch post_id from the URL parameter 'id'
        if (isset($_GET['id'])) {
            $postId = $_GET['id'];

            // Check if the post_id exists in the post table
            $sqlCheck = "SELECT id FROM post WHERE id = '$postId'";
            $resultCheck = mysqli_query($connection, $sqlCheck);

            if (mysqli_num_rows($resultCheck) > 0) {
                // The post_id exists in the post table, proceed with inserting the comment
                $mydate = date("Y-m-d H:i:s");
                $sql = "INSERT INTO post_details (post_id, user_id, comment, date_added) VALUES ('$postId', '$userId', '$comment', '$mydate')";
                $result = mysqli_query($connection, $sql);

                if ($result) {
                    echo "Comment saved successfully!";
                } else {
                    echo "Error: " . mysqli_error($connection);
                }
            } else {
                // The post_id does not exist in the post table
                echo "The post ID does not exist.";
            }
        } else {
            echo "Post ID not provided.";
        }
    } else {
        echo "Please log in to post a comment.";
    }
} else {
    echo "Invalid request.";
}

mysqli_close($connection);
