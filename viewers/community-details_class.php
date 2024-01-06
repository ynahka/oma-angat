<?php
include("connect.php");
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');


switch ($_POST['form']) {

    case 'fncdsplyallcommunitycomments':
        $res = mysqli_query($connection, "SELECT post_id, user_id, comment, DATETIME_LOG FROM post_details WHERE post_id = '" . $_POST['textpost_id']  . "'");
        $numrows = mysqli_num_rows($res);
        if ($numrows == TRUE) {
            while ($row = mysqli_fetch_array($res)) {

                $getuser = mysqli_fetch_array(mysqli_query($connection, "SELECT CASE WHEN middlename = '' OR middlename IS NULL THEN CONCAT(lastname, ', ', firstname) ELSE CONCAT(lastname, ', ', firstname, ' ', LEFT(middlename, '1'), '.') END FROM users_table WHERE user_id = '" . $row[1] . "';"));

                echo "<div class='comment_list'>
                                <div class='comment_thumb'>
                                    <img src='admin/assets/images/profile4.png' alt='' style='width: 45px'>
                                </div>
                                <div class='comment_content'>
                                    <div class='comment_meta'>
                                        <h5>" . $getuser[0] . "</h5>
                                        <span>" . date('F d, Y', strtotime($row[3])) . " at " . date('g:i a', strtotime($row[3])) . "</span>
                                    </div>
                                    <p>" . $row[2] . "</p>
                                </div>
                            </div>";
            }
        } else {
            echo "<p>No Comments Found . . .</p>";
        }

        echo "|" . $numrows;
        break;

    case 'savepostcomments':
        $savepostcomments = mysqli_query($connection, "INSERT INTO post_details SET post_id = '" . $_POST['textpost_id'] . "', user_id = '" . $_SESSION['user_id'] . "', comment = '" . mysqli_real_escape_string($connection, $_POST['textblogcomment']) . "', date_added = '" . date("Y-m-d H:i:s") . "';");

        if ($savepostcomments) {
            echo json_encode(['success' => true, 'message' => 'Comment saved successfully!']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Error: ' . mysqli_error($connection)]);
        }
        break;
}
