<?php
include("connect.php");
session_start();

switch ($_POST['form']) {

	case 'loginuser':
		$sqllogin = "SELECT id, user_id, username, firstname, lastname, usertype, password, status FROM users_table WHERE username = '" . $_POST['txtusername'] . "' AND usertype = 'CUSTOMER' ";
		$reslogin = mysqli_query($connection, $sqllogin);
		$rowlogin = mysqli_fetch_array($reslogin);
		$numlogin = mysqli_num_rows($reslogin);

		if ($numlogin > 0) {
			if (password_verify($_POST['txtpassword'], $rowlogin['password'])) {
				if ($rowlogin['status'] == "APPROVED") {
					$count = 1;
					$_SESSION['user_id'] = $rowlogin['user_id'];
					$_SESSION['username'] = $rowlogin['username'];
					$_SESSION['fullname'] = $rowlogin['firstname'] . " " . $rowlogin['lastname'];
					$_SESSION['firstname'] = $rowlogin['firstname'];
					$_SESSION['usertype'] = $rowlogin['usertype'];
				} else {
					$count = 3;
					$_SESSION['user_id'] = "";
					$_SESSION['username'] = "";
					$_SESSION['fullname'] = "";
					$_SESSION['firstname'] = "";
					$_SESSION['usertype'] = "";
				}
			} else {
				$count = 2;
				$_SESSION['user_id'] = "";
				$_SESSION['username'] = "";
				$_SESSION['fullname'] = "";
				$_SESSION['firstname'] = "";
				$_SESSION['usertype'] = "";
			}
		} else {
			$count = 2;
			$_SESSION['user_id'] = "";
			$_SESSION['username'] = "";
			$_SESSION['fullname'] = "";
			$_SESSION['firstname'] = "";
			$_SESSION['usertype'] = "";
		}
		echo $count;
		break;
}