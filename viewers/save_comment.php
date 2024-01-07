<?php
include("connect.php");
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_SESSION['user_id'])) {
        $comment = mysqli_real_escape_string($connection, $_POST['txtblogcomment']);

        $userId = $_SESSION['user_id'];

        // Fetch post_id from the URL parameter 'id'
        if (isset($_GET['post_id'])) {
            $postId = $_GET['post_id'];

            // Check if the post_id exists in the post table
            $sqlCheck = "SELECT post_id FROM post WHERE post_id = '$postId'";
            $resultCheck = mysqli_query($connection, $sqlCheck);

            if (mysqli_num_rows($resultCheck) > 0) {
                // The post_id exists in the post table, proceed with inserting the comment
                $mydate = date("Y-m-d H:i:s");
                $sql = "INSERT INTO post_details (post_id, user_id, comment, date_added) VALUES ('$postId', '$userId', '$comment', '$mydate')";
                $result = mysqli_query($connection, $sql);

                if ($result) {
                    echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>";
                    echo "<script>
                    window.onload = function() {
                        Swal.fire({
                            icon: 'success',
                            title: 'Comment saved successfully!',
                            timer: 2000
                        }).then((result) => {
                            location.replace('blog-details.php?post_id=$postId');
                        });
                    };
                </script>";
                } else {
                    echo "<script type='text/javascript'>
                      Swal.fire({
                          icon: 'error',
                          title: 'Error: " . mysqli_error($connection) . "',
                          showConfirmButton: true,
                          timer: 1500
                      });
                  </script>";
                }
            } else {
                // The post_id does not exist in the post table
                echo "<script type='text/javascript'>
                  Swal.fire({
                      icon: 'error',
                      title: 'The post ID does not exist.',
                      showConfirmButton: true,
                      timer: 1500
                  });
               </script>";
            }
        } else {
            echo "<script type='text/javascript'>
               Swal.fire({
                  icon: 'error',
                  title: 'Post ID not provided.',
                  showConfirmButton: true,
                  timer: 1500
               });
           </script>";
        }
    } else {
        echo "<script type='text/javascript'>
           Swal.fire({
               icon: 'error',
               title: 'Please log in to post a comment.',
               showConfirmButton: true,
               timer: 1500
           });
       </script>";
    }
} else {
    echo "<script type='text/javascript'>
       Swal.fire({
           icon: 'error',
           title: 'Invalid request.',
           showConfirmButton: false,
           timer: 1500
       });
   </script>";
}

mysqli_close($connection);
