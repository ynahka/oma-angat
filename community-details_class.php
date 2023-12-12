<?php
	include("connect.php");
	session_start();

	switch ($_POST['form']) {

        case 'fncdsplyallcommunitypost':
        	$res = mysqli_query($connection, "SELECT post_id, user_id, posttitle, postdescription, image, imagename, date_added FROM post WHERE post_id = '" . $_POST['textpostID']  . "'");
			$numrows = mysqli_num_rows($res);
			if($numrows == TRUE){
				while($row = mysqli_fetch_array($res)){

					$getuser = mysqli_fetch_array(mysqli_query($connection, "SELECT CASE WHEN middlename = '' OR middlename IS NULL THEN CONCAT(lastname, ', ', firstname) ELSE CONCAT(lastname, ', ', firstname, ' ', LEFT(middlename, '1'), '.') END FROM users_table WHERE user_id = '" . $row[1] . "';"));

					echo "<figure>
                            <div class='post_header'>
                                <h3 class='post_title'> " . $row[2] . "</h3>
                                <div class='blog_meta'>
                                    <p>Posted by : <span style='font-weight:500'>" . $getuser[0] . "</span> / On : <span style='font-weight:500'>" . date('F d, Y', strtotime($row[6])) . "</span></p>
                                </div>
                            </div>
                            <div class='blog_thumb'>
                                <a href='javascript:void(0)'><img src='" . $row[4] . "'></a>
                            </div>
                            <figcaption class='blog_content'>
                                <div class='post_content'>
                                    <p>" . $row[3] . "</p>
                                </div>
                            </figcaption>
                        </figure>";
				}
			} else {
				echo "<p>No Record Found . . .</p>";
			}
		break;

        case 'fncdsplyallcommunitycomments':
            $res = mysqli_query($connection, "SELECT post_id, user_id, comment, DATETIME_LOG FROM post_details WHERE post_id = '" . $_POST['textpostID']  . "'");
            $numrows = mysqli_num_rows($res);
            if($numrows == TRUE){
                while($row = mysqli_fetch_array($res)){
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
            $savepostcomments = mysqli_query($connection, "INSERT INTO post_details SET post_id = '" . $_POST['textpostID'] . "', user_id = '" . $_SESSION['user_id'] . "', comment = '" . $_POST['textpostcomment'] . "', date_added = '" . date("Y-m-d") . "';");
        break;
	}
?>