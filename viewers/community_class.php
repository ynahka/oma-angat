<?php
include("connect.php");
session_start();

switch ($_POST['form']) {

    case 'fncdsplyallcommunitypost':
        $res = mysqli_query($connection, "SELECT post_id, user_id, posttitle, postdescription, image, imagename, date_added FROM post ORDER BY id ASC");
        $numrows = mysqli_num_rows($res);
        if ($numrows == TRUE) {
            while ($row = mysqli_fetch_array($res)) {

                $getuser = mysqli_fetch_array(mysqli_query($connection, "SELECT CASE WHEN middlename = '' OR middlename IS NULL THEN CONCAT(lastname, ', ', firstname) ELSE CONCAT(lastname, ', ', firstname, ' ', LEFT(middlename, '1'), '.') END FROM users_table WHERE user_id = '" . $row[1] . "';"));

                echo "<article class='single_post'>
                            <figure>
                                <div class='blog_thumb'>
                                    <a href='javascript:void(0)'><img src='" . $row[4] . "' alt='' style='height: 220px'></a>
                                </div>
                                <figcaption class='blog_content'>
                                    <h4 class='post_title'>
                                        <a href='index.php?url=community-details&post_id=" . $row[0] . "'><i class='fa fa-paper-plane'></i> " . $row[2] . "</a>
                                    </h4>
                                    <div class='blog_meta'>
                                        <p>By <span style='font-weight:500'>" . $getuser[0] . "</span> / Date: <span style='font-weight:500'>" . date('F d, Y', strtotime($row[6])) . "</span></p>
                                    </div>
                                    <p class='post_desc webkitlala2'>
                                        " . $row[3] . "
                                    </p>
                                    <footer class='btn_more'>
                                        <a href='index.php?url=community-details&post_id=" . $row[0] . "'> Read more</a>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>";
            }
        } else {
            echo "<p>No Post Found . . .</p>";
        }
        break;

    case 'submitpost':
        $generateID = generateID($connection, 'post_id', 'post', 'post');
        $submitpost = mysqli_query($connection, "INSERT INTO post SET post_id = '" . $generateID . "', user_id = '" . $_SESSION['user_id'] . "', posttitle = '" . $_POST['textaddposttitle'] . "', postdescription = '" . $_POST['textaddpostdescription'] . "', date_added = '" . date("Y-m-d") . "';");
        echo $generateID;
        break;
}
