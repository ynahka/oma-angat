<?php
	include("connect.php");
	session_start();

	switch ($_POST['form']) {

        case 'displaychatusers':
			$getadmin = mysqli_fetch_array(mysqli_query($connection, "SELECT userID, CASE WHEN middlename = '' OR middlename IS NULL THEN CONCAT(lastname, ', ', firstname) ELSE CONCAT(lastname, ', ', firstname, ' ', LEFT(middlename, '1'), '.') END, usertype FROM tbl_users WHERE usertype = 'ADMIN'"));
			echo "<div class='post_wrapper' onclick='displaychats(\"". $_SESSION['userID'] ."\", \"". $getadmin[0] ."\", \"". $getadmin[2] ."\")' style='cursor:pointer'>
                            <div class='post_thumb'>
                                <a href='javascript:void(0)'><img src='admin/assets/images/profile2.png'></a>
                            </div>
                            <div class='post_info'>
                                <h4><a href='javascript:void(0)'>". $getadmin[1] ."</a></h4>
                                <span>Admin </span>
                            </div>
                        </div>";	

			if($_POST['srchprod'] != ''){
                $searchcontact = "AND (CASE WHEN b.middlename = '' OR b.middlename IS NULL THEN CONCAT(b.lastname, ', ', b.firstname) ELSE CONCAT(b.lastname, ', ', b.firstname, ' ', LEFT(b.middlename, '1'), '.') END LIKE '%". $_POST['srchprod'] ."%')"; 
            } else {
                $searchcontact = "";
            }

			$res = mysqli_query($connection, "SELECT CASE WHEN b.middlename = '' OR b.middlename IS NULL THEN CONCAT(b.lastname, ', ', b.firstname) ELSE CONCAT(b.lastname, ', ', b.firstname, ' ', LEFT(b.middlename, '1'), '.') END, a.DATETIME_LOG, a.userID, a.sendto FROM chats AS a LEFT JOIN tbl_users AS b ON a.sendto = b.userID WHERE a.userID = '". $_SESSION['userID'] ."' AND type != 'ADMIN' ". $searchcontact ." GROUP BY a.sendto ORDER BY a.DATETIME_LOG DESC");
			$numrows = mysqli_num_rows($res);
			if($numrows == TRUE){
				$blank = "";
				while($row = mysqli_fetch_array($res)){
					echo "<div class='post_wrapper' onclick='displaychats(\"". $row[2] ."\", \"". $row[3] ."\", \"". $blank ."\")' style='cursor:pointer'>
                            <div class='post_thumb'>
                                <a href='javascript:void(0)'><img src='admin/assets/images/profile4.png'></a>
                            </div>
                            <div class='post_info'>
                                <h4><a href='javascript:void(0)'>". $row[0] ."</a></h4>
                                <span>Seller </span>
                            </div>
                        </div>";
				}
			} else{
				// echo "<h6 style='margin-top: 20px; font-weight: 300; color:#afafaf; text-align:center;'><i> No Customer Conversation Found . . .  </i></h6>";
			}
		break;

		case 'displaychats':
			$res = mysqli_query($connection, "SELECT message, userID, DATETIME_LOG, productID FROM chats WHERE (userID = '". $_POST['userID'] ."' AND sendto = '". $_POST['sendtoID'] ."') OR (userID = '". $_POST['sendtoID'] ."' AND sendto = '". $_POST['userID'] ."') ");
			$numrows = mysqli_num_rows($res);
			if($numrows == TRUE){
				while($row = mysqli_fetch_array($res)){
					if($row[1] != $_SESSION['userID']){

						if($_POST['usertype'] == "ADMIN"){
							echo "<li style='margin-top: 0px;margin-bottom:30px;'>
                                <div class='chat-img'><img src='admin/assets/images/profile2.png' alt='user' /></div>
                                <div class='chat-content'>
                                    <div class='box bg-light-info'>" . $row[0] . "</div>
                                </div>
                                <div class='chat-time'>" . date('g:i a', strtotime($row[2])) . "</div>
                            </li>";
						} else{
							echo "<li style='margin-top: 0px;margin-bottom:30px;'>
                                <div class='chat-img'><img src='admin/assets/images/profile4.png' alt='user' /></div>
                                <div class='chat-content'>
                                    <div class='box bg-light-info'>" . $row[0] . "</div>";
                                
                                

                            echo "</div>
                                <div class='chat-time'>" . date('g:i a', strtotime($row[2])) . "</div>
                            </li>";
						}
						
	                } else{
	                	echo "<li class='reverse' style='margin-top: 0px;margin-bottom:30px;'>
	                            <div class='chat-content'>
	                                <div class='box bg-light-inverse'>" . $row[0] . "</div>";


	                                $res2 = mysqli_query($connection, "SELECT image FROM products_image WHERE productID = '". $row[3] ."' ");
				                $row2 = mysqli_fetch_array($res2);

                                echo "<div><img src='".$row2[0]."' width='200px'></div>";


	                        echo "</div>
	                            <div class='chat-img'><img src='admin/assets/images/profile4.png' alt='user' /></div>
	                            <div class='chat-time'>" . date('g:i a', strtotime($row[2])) . "</div>
	                        </li>";
	                }
				}
			} else{
				echo "<h5 style='margin-top: 20px; font-weight: 300; color:#afafaf; text-align:center;'><i> No Conversation Found . . .  </i></h5>";
			}
		break;

		case 'sendbutton':
			if($_POST['textsendtoID'] == $_SESSION['userID']){
				$sendto = $_POST['textuserID'];
			} else{
				$sendto = $_POST['textsendtoID'];
			}

			$send = mysqli_query($connection, "INSERT INTO chats SET userID = '" . $_SESSION['userID'] . "', message = '" . $_POST['textmessage'] . "', sendto = '" . $sendto . "', type = '" . $_POST['textadmin'] . "';");
		break;

		case 'fncupdatestatus':
			$row = mysqli_fetch_array(mysqli_query($connection, "SELECT status FROM messages_admin WHERE id = '" . $_POST['id'] . "'"));
			if($row[0] == 1){
				$updateappointment = mysqli_query($connection, "UPDATE messages_admin SET status = '0' WHERE id = '" . $_POST['id'] . "';");

				$addnotif = mysqli_query($connection, "INSERT INTO usernotifications SET userID = '" . $_POST['userid'] . "', logs = 'Admin viewed your message', username = 'admin';");
			} else{
				
			}
		break;

	}
?>