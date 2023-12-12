<?php
include("../connect.php");
session_start();

switch ($_POST['form']) {

	case 'displaychatusers':
		$getadmin = mysqli_fetch_array(mysqli_query($connection, "SELECT user_id, CASE WHEN middlename = '' OR middlename IS NULL THEN CONCAT(lastname, ', ', firstname) ELSE CONCAT(lastname, ', ', firstname, ' ', LEFT(middlename, '1'), '.') END, usertype FROM users_table WHERE usertype = 'ADMIN'"));
		echo "<li onclick='displaychats(\"" . $_SESSION['user_id'] . "\", \"" . $getadmin[0] . "\", \"" . $getadmin[2] . "\")'>
	                        <a href='javascript:void(0)'><img src='../admin/assets/images/profile2.png' alt='user-img' class='img-circle'> <span><b>" . $getadmin[1] . "</b><small class='text-success'>Admin</small></span></a>
	                    </li>";

		if ($_POST['srchprod'] != '') {
			$searchcontact = "AND (CASE WHEN b.middlename = '' OR b.middlename IS NULL THEN CONCAT(b.lastname, ', ', b.firstname) ELSE CONCAT(b.lastname, ', ', b.firstname, ' ', LEFT(b.middlename, '1'), '.') END LIKE '%" . $_POST['srchprod'] . "%')";
		} else {
			$searchcontact = "";
		}

		$res = mysqli_query($connection, "SELECT CASE WHEN b.middlename = '' OR b.middlename IS NULL THEN CONCAT(b.lastname, ', ', b.firstname) ELSE CONCAT(b.lastname, ', ', b.firstname, ' ', LEFT(b.middlename, '1'), '.') END, a.DATETIME_LOG, a.user_id, a.sendto FROM chats AS a LEFT JOIN users_table AS b ON a.user_id = b.user_id WHERE a.sendto = '" . $_SESSION['user_id'] . "' AND type != 'ADMIN' " . $searchcontact . " GROUP BY a.user_id ORDER BY a.DATETIME_LOG DESC");
		$numrows = mysqli_num_rows($res);
		if ($numrows == TRUE) {
			$blank = "";
			while ($row = mysqli_fetch_array($res)) {
				echo "<li onclick='displaychats(\"" . $row[2] . "\", \"" . $row[3] . "\", \"" . $blank . "\")'>
	                        <a href='javascript:void(0)'><img src='../admin/assets/images/profile4.png' alt='user-img' class='img-circle'> <span><b>" . $row[0] . "</b><small class='text-success'>Customer</small></span></a>
	                    </li>";
			}
		} else {
			// echo "<h6 style='margin-top: 20px; font-weight: 300; color:#afafaf; text-align:center;'><i> No Customer Conversation Found . . .  </i></h6>";
		}
		break;

	case 'displaychats':
		$res = mysqli_query($connection, "SELECT message, user_id, DATETIME_LOG FROM chats WHERE (user_id = '" . $_POST['user_id'] . "' AND sendto = '" . $_POST['sendtoID'] . "') OR (user_id = '" . $_POST['sendtoID'] . "' AND sendto = '" . $_POST['user_id'] . "') ");
		$numrows = mysqli_num_rows($res);
		if ($numrows == TRUE) {
			while ($row = mysqli_fetch_array($res)) {
				if ($row[1] != $_SESSION['user_id']) {

					if ($_POST['usertype'] == "ADMIN") {
						echo "<li style='margin-top: 0px;margin-bottom:30px;'>
                                <div class='chat-img'><img src='../admin/assets/images/profile2.png' alt='user' /></div>
                                <div class='chat-content'>
                                    <div class='box bg-light-info'>" . $row[0] . "</div>
                                </div>
                                <div class='chat-time'>" . date('g:i a', strtotime($row[2])) . "</div>
                            </li>";
					} else {
						echo "<li style='margin-top: 0px;margin-bottom:30px;'>
                                <div class='chat-img'><img src='../admin/assets/images/profile4.png' alt='user' /></div>
                                <div class='chat-content'>
                                    <div class='box bg-light-info'>" . $row[0] . "</div>";


						$res2 = mysqli_query($connection, "SELECT image FROM products_image WHERE product_id = '" . $row[3] . "' ");
						$row2 = mysqli_fetch_array($res2);

						if ($row[3] == '') {
						} else {
							echo "<div><img src='../" . $row2[0] . "' width='200px'></div>";
						}


						echo "</div>
                                <div class='chat-time'>" . date('g:i a', strtotime($row[2])) . "</div>
                            </li>";
					}
				} else {
					echo "<li class='reverse' style='margin-top: 0px;margin-bottom:30px;'>
	                            <div class='chat-content'>
	                                <div class='box bg-light-inverse'>" . $row[0] . "</div>
	                            </div>
	                            <div class='chat-img'><img src='../admin/assets/images/profile4.png' alt='user' /></div>
	                            <div class='chat-time'>" . date('g:i a', strtotime($row[2])) . "</div>
	                        </li>";
				}
			}
		} else {
			echo "<h5 style='margin-top: 20px; font-weight: 300; color:#afafaf; text-align:center;'><i> No Conversation Found . . .  </i></h5>";
		}
		break;

	case 'sendbutton':
		if ($_POST['textsendtoID'] == $_SESSION['user_id']) {
			$sendto = $_POST['textuser_id'];
		} else {
			$sendto = $_POST['textsendtoID'];
		}

		$send = mysqli_query($connection, "INSERT INTO chats SET user_id = '" . $_SESSION['user_id'] . "', message = '" . $_POST['textmessage'] . "', sendto = '" . $sendto . "', type = '" . $_POST['textadmin'] . "';");
		break;

	case 'fncupdatestatus':
		$row = mysqli_fetch_array(mysqli_query($connection, "SELECT status FROM messages_admin WHERE id = '" . $_POST['id'] . "'"));
		if ($row[0] == 1) {
			$updateappointment = mysqli_query($connection, "UPDATE messages_admin SET status = '0' WHERE id = '" . $_POST['id'] . "';");

			$addnotif = mysqli_query($connection, "INSERT INTO usernotifications SET user_id = '" . $_POST['user_id'] . "', logs = 'Admin viewed your message', username = 'admin';");
		} else {
		}
		break;
}
