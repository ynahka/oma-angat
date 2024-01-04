<?php
include("connect.php");
session_start();
error_reporting(E_ALL);
switch ($_POST['form']) {

	case 'displaychatusers':
		if (isset($_SESSION['user_id'])) {
			// Escape the session variable
			$escapedUserId = mysqli_real_escape_string($connection, $_SESSION['user_id']);

			// Create the update query
			$updateLastActivityQuery = "UPDATE users_table SET last_activity_time = NOW() WHERE user_id = '$escapedUserId'";

			// Execute the query
			$updateResult = mysqli_query($connection, $updateLastActivityQuery);

			// Check for errors
			if (!$updateResult) {
				die("Error updating last_activity_time: " . mysqli_error($connection));
			}
		}

		// Fetch admin data
		$getadmin = mysqli_fetch_array(mysqli_query($connection, "SELECT user_id, CASE WHEN middlename = '' OR middlename IS NULL THEN CONCAT(firstname, ' ', lastname) ELSE CONCAT(firstname, ' ', LEFT(middlename, '1'), '. ',lastname , '') END, usertype, last_activity_time FROM users_table WHERE usertype = 'ADMIN'"));

		$adminIsActive = false;

		if (!empty($getadmin['last_activity_time'])) {
			$adminIsActive = (time() - strtotime($getadmin['last_activity_time']) < 300); // 5 minutes threshold
		}

		// Display the user with the active indicator and active dot if applicable
		echo "<div class='post_wrapper' onclick='displaychats(\"" . $_SESSION['user_id'] . "\", \"" . $getadmin[0] . "\", \"" . $getadmin[2] . "\")' style='cursor:pointer'>
   <div class='post_thumb'>
       <a href='javascript:void(0)'><img src='../admin/assets/images/profile2.png'></a>
   </div>
   <div class='post_info'>
       <h4><a href='javascript:void(0)'>" . $getadmin[1];
		// Display green dot if the admin is active
		if ($adminIsActive) {
			echo "<span class='active-dot'></span>";
		}
		echo "</a></h4>
       <span>Admin</span>
   </div>
</div>";



		if ($_POST['srchprod'] != '') {
			$searchcontact = "AND (CASE WHEN b.middlename = '' OR b.middlename IS NULL THEN CONCAT(b.lastname, ', ', b.firstname) ELSE CONCAT(b.lastname, ', ', b.firstname, ' ', LEFT(b.middlename, '1'), '.') END LIKE '%" . $_POST['srchprod'] . "%')";
		} else {
			$searchcontact = "";
		}

		// ... existing code ...

		$res = mysqli_query($connection, "SELECT 
    CASE WHEN b.middlename = '' OR b.middlename IS NULL THEN CONCAT(b.firstname, ' ', b.lastname) 
    ELSE CONCAT(b.firstname, ' ',  LEFT(b.middlename, '1'), '. ',b.lastname , '') END AS full_name, 
    b.last_activity_time AS user_last_activity, 
    a.DATETIME_LOG AS chat_datetime, 
    a.user_id, 
    a.sendto 
FROM chats AS a 
LEFT JOIN users_table AS b ON a.sendto = b.user_id 
WHERE a.user_id = '" . $_SESSION['user_id'] . "' AND type != 'ADMIN' " . $searchcontact . " 
GROUP BY a.sendto 
ORDER BY MAX(a.DATETIME_LOG) DESC");

		$numrows = mysqli_num_rows($res);

		if ($numrows == TRUE) {
			$blank = "";
			while ($row = mysqli_fetch_array($res)) {
				// Fetch and display last activity time for each user (seller)
				$sellerIsActive = false;

				if (!empty($row['user_last_activity'])) {
					$sellerIsActive = (time() - strtotime($row['user_last_activity']) < 300); // 5 minutes threshold
				}

				// Display the seller with the active indicator and active dot if applicable
				echo "<div class='post_wrapper' onclick='displaychats(\"" . $row['user_id'] . "\", \"" . $row['sendto'] . "\", \"" . $blank . "\")' style='cursor:pointer'>
                    <div class='post_thumb'>
                        <a href='javascript:void(0)'><img src='../admin/assets/images/profile4.png'></a>
                    </div>
                    <div class='post_info'>
                        <h4><a href='javascript:void(0)'>" . $row['full_name'];

				// Display the active dot if the seller is active
				if ($sellerIsActive) {
					echo "<span class='active-dot'></span>";
				}

				echo "</a></h4>
                        <span>Seller </span>
                    </div>
                </div>";
			}
		} else {
			// Handle case where no conversations are found
			echo "<h6 style='margin-top: 20px; font-weight: 300; color:#afafaf; text-align:center;'><i> No Seller Conversation Found . . .  </i></h6>";
		}


		break;


	case 'displaychats':
		$res = mysqli_query($connection, "SELECT message, user_id, image_path, DATETIME_LOG FROM chats WHERE (user_id = '" . $_POST['user_id'] . "' AND sendto = '" . $_POST['sendtoID'] . "') OR (user_id = '" . $_POST['sendtoID'] . "' AND sendto = '" . $_POST['user_id'] . "') ");
		$numrows = mysqli_num_rows($res);

		if ($numrows > 0) {
			while ($row = mysqli_fetch_array($res)) {
				$userIsAdmin = ($_POST['usertype'] == "ADMIN");
				$isCurrentUser = ($row['user_id'] == $_SESSION['user_id']);

				echo "<li class='" . ($isCurrentUser ? 'reverse' : '') . "' style='margin-top: 0px;margin-bottom:30px;'>";
				echo "<div class='chat-content'>";

				// Display message box based on user type
				echo "<div class='box " . ($userIsAdmin ? 'bg-light-info' : 'bg-light-inverse') . "'>" . $row['message'] . "</div>";

				// Check if there is an image associated with the message
				if (!empty($row['image_path'])) {
					echo "<div><img src='" . $row['image_path'] . "' width='200px'></div>";
				}

				echo "</div>";

				// Display user image and timestamp
				if ($isCurrentUser) {
					// Display your profile image and timestamp on the right
					echo "<div class='chat-img' style='float: right;'><img src='../admin/assets/images/profile4.png' alt='user' /></div>";
				} else {
					// Display chatmate's profile image and timestamp on the left
					echo "<div class='chat-img' style='float: left;'><img src='../admin/assets/images/profile2.png' alt='user' /></div>";
				}

				echo "<div class='chat-time'>" . date('g:i a', strtotime($row['DATETIME_LOG'])) . "</div>";
				echo "</li>";
			}
		} else {
			echo "<h5 style='margin-top: 20px; font-weight: 300; color:#afafaf; text-align:center;'><i> No Conversation Found . . .  </i></h5>";
		}
		break;

		// case 'sendbutton':
		// 	if ($_POST['textsendtoID'] == $_SESSION['user_id']) {
		// 		$sendto = $_POST['textuser_id'];
		// 	} else {
		// 		$sendto = $_POST['textsendtoID'];
		// 	}

		// 	$send = mysqli_query($connection, "INSERT INTO chats SET user_id = '" . $_SESSION['user_id'] . "', message = '" . $_POST['textmessage'] . "', sendto = '" . $sendto . "', type = '" . $_POST['textadmin'] . "';");
		// 	break;

	case 'sendbutton':
		// Determine the recipient based on the session and posted data
		if ($_POST['textsendtoID'] == $_SESSION['user_id']) {
			$sendto = $_POST['textuser_id'];
		} else {
			$sendto = $_POST['textsendtoID'];
		}

		$message = !empty($_POST['textmessage']) ? $_POST['textmessage'] : null;
		$imagePath = '';

		// Check if an image was uploaded
		if (!empty($_FILES['imageFile'])) {
			$uploadDirectory = '../OmaangatImages/messageFile/'; // Set your upload directory
			$fileName = $_FILES['imageFile']['name'];
			$targetFilePath = $uploadDirectory . basename($fileName);

			// Check if the uploaded file is a valid image
			$check = getimagesize($_FILES['imageFile']['tmp_name']);
			if ($check !== false) {
				// Upload the image
				if (move_uploaded_file($_FILES['imageFile']['tmp_name'], $targetFilePath)) {
					$imagePath = $targetFilePath;
				} else {
					echo "Error uploading image";
				}
			} else {
				echo "Invalid image format";
			}
		}

		// Insert chat record with message and image file path
		$send = mysqli_query($connection, "INSERT INTO chats SET user_id = '" . $_SESSION['user_id'] . "', message = '" . $message . "', image_path = '" . $imagePath . "', sendto = '" . $sendto . "', type = '" . $_POST['textadmin'] . "';");

		if ($send) {
			echo "Message and image sent successfully";
		} else {
			echo "Error sending message and image";
		}
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
