<?php
	include("connect.php");
	session_start();
	$user_id = $_SESSION['user_id'];
	if (isset($_POST['shownotif'])) {
		
		$sqllogin = "UPDATE chats SET notif = 1 WHERE sendto = '$user_id' AND notif = 0";
		$reslogin = mysqli_query($connection, $sqllogin);
		mysqli_num_rows($reslogin);

		$sqllogin = "UPDATE orders INNER JOIN products ON orders.product_id=products.product_id SET notif = 1 WHERE products.seller_id = '$user_id' AND orders.notif = 0";
		$reslogin = mysqli_query($connection, $sqllogin);
		mysqli_num_rows($reslogin);

	}else{
		$sqllogin = "SELECT * FROM chats WHERE sendto = '$user_id' AND notif = 0";
		$reslogin = mysqli_query($connection, $sqllogin);
		$numlogin = mysqli_num_rows($reslogin);

		$sqllogin2 = "SELECT * FROM orders INNER JOIN products ON orders.product_id=products.product_id WHERE products.seller_id = '$user_id' AND orders.notif = 0";
		$reslogin2 = mysqli_query($connection, $sqllogin2);
		$numlogin2 = mysqli_num_rows($reslogin2);

		if($numlogin > 0){ 
			echo json_encode(array("statusCode"=>200));
		}else if($numlogin2 > 0){ 
			echo json_encode(array("statusCode"=>200));
		}else{
			echo json_encode(array("statusCode"=>201));
		}
	}
		
?>
