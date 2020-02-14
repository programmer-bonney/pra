<?php
	error_reporting(0);
	session_start();
	include_once('../../d_admin/includes/contentFiles/db.php');

	 $user_id = $_SESSION['id'];
	$item = $_POST['product'];

	if($user==""){
		echo "PLEASE LOGIN FIRST...";
	}else{
		$qry1 = "SELECT * FROM clientShop WHERE userId = $user_id AND productId = $item";
		$res1 = $connect->query($qry1);

		if($res1->num_rows > 0){
			echo "ALREADY HAVE IN STORE...";
		}else{
			$qry = "INSERT INTO clientShop (userId, productId) VALUES($user_id, $item)";
			$res = $connect->query($qry);

			if($res){
				echo "good";
			}else{
				echo "LOGIN FIRST";
			}
		}
	}

	

?>