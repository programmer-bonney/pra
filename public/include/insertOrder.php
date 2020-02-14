<?php
error_reporting(0);
	session_start();
   $fname = $_SESSION['fname'];
   $lname = $_SESSION['lname'];
   $id = $_SESSION['id'];
   $sub = substr($fname, 0, 1);
   $sub1 = substr($lname, 0, 1);
   $myuser = strtoupper($sub . "" . $sub1);

	if(isset($_POST['submitBuy'])){
		
		 $userId = $_SESSION['id'];
		  $destin = $_POST['destination'];
		 //echo $totPrz = $uprice * $odQty;

		 $productId = $_POST['productid'];
		 $uprice = $_POST['price'];
		 $odQty = $_POST['qqty'];

		   $totPrz = $uprice * $odQty;
		// $orderId = $_POST['orderId'];

		if(empty($destin)){
			echo "<script>alert('some field is blank')</script>";
		}else{
// inserting the order

			if($userId != ''){
				$orderInsertQ = "INSERT INTO oders (users_id, total_price, address) VALUES($userId, $totPrz, '$destin')";
			$orderInsertR = $connect->query($orderInsertQ);

// inserting the order detail

			if($orderInsertR){
				$odQry = "SELECT * FROM oders ORDER BY id DESC LIMIT 1";
				$odRes = $connect->query($odQry);

				if($odRes->num_rows > 0){
					while($odrow = $odRes->fetch_assoc()){
						$lastOid = $odrow['id'];
					}
					$itmsQ = "INSERT INTO order_details(item_id, unit_price, quantity, orderId) VALUES($productId, $uprice, $odQty, $lastOid)";
					$itmsR = $connect->query($itmsQ);
					if($itmsR){
						echo "<script>alert('THANK FOR BUYING HERE'); </script>";
					}else{
						echo "ORDER-DETAIL ERROR";
					}
				}
			}else{
				echo "<script>alert('SOME ERROR OCCUR'); </script>";
				}
			}else{
				echo "<script>alert('LOGIN IN FIRST PLEASE...'); </script>";
			}
		}

	}

	// visa processing start here


		if(isset($_POST['submitVisa'])){
			
			echo  $userIdV = $_SESSION['id'];
			echo  $destinV = $_POST['destin1'];

			echo  $productIdV = $_POST['productsid'];
			echo  $upriceV = $_POST['price1'];
			 echo $odQtyV = $_POST['qqty1'];

			 $totPrzV = $upriceV * $odQtyV;


				 if(empty($destinV)){
				echo "<script>alert('some field is blank')</script>";
			}else{
// inserting the order visa

			if($userIdV != ''){
				$orderInsertQ = "INSERT INTO oders (users_id, total_price, address) VALUES($userIdV, $totPrzV, '$destinV')";
			$orderInsertR = $connect->query($orderInsertQ);

// inserting the order detail visa

			if($orderInsertR){
				$odQry = "SELECT * FROM oders ORDER BY id DESC LIMIT 1";
				$odRes = $connect->query($odQry);

				if($odRes->num_rows > 0){
					while($odrow = $odRes->fetch_assoc()){
						$lastOid = $odrow['id'];
					}
					$itmsQ = "INSERT INTO order_details(item_id, unit_price, quantity, orderId) VALUES($productIdV, $upriceV, $odQtyV, $lastOid)";
					$itmsR = $connect->query($itmsQ);
					if($itmsR){
						echo "<script>alert('THANK FOR BUYING HERE'); </script>";
					}else{
						echo "ORDER-DETAIL ERROR";
					}
				}
			}else{
				echo "<script>alert('SOME ERROR OCCUR'); </script>";
				}
			}else{
				echo "<script>alert('LOGIN IN FIRST PLEASE...'); </script>";
			}
		}
	}




	if(isset($_POST['usersub'])){
		$uname = $_POST['user'];
		$pws = $_POST['pws'];
		$qry = "SELECT * FROM users WHERE userName='$uname' AND password='$pws'";
		$res = $connect->query($qry);
		if($res->num_rows > 0){
			while ($rows = $res->fetch_assoc()) {
				 $fname = $rows['firstName'];
				 $lname = $rows['lastName'];
				 $id = $rows['id'];
			}
		}else{
			echo "<script>alert('WRONG USER NAME OR PASSWORD'); </script>";
		}

		 $_SESSION['id'] = $id;
		 $_SESSION['fname'] = $fname;
		 $_SESSION['lname'] = $lname;
	}



//////////////////////<!-contact us contact -->///////////////////


if(isset($_POST['comment'])){
	$name = $_POST['name'];
	$contact = $_POST['num'];
	$email = $_POST['email'];
	$bdy = $_POST['mes'];
	

	if(empty($name) || empty($contact) || empty($email) || empty($bdy)){
		$info = "PLEASE FILL ALL FIELD CORRETLY.";
		echo "<script type='text/javascript'>alert()</script>";
	}else{
		$qry = "INSERT INTO comments(name, contact, email, comment) VALUES('$name', $contact, '$email', '$bdy')";
		$res = $connect->query($qry);

		if($res){
			
			echo "<script type='text/javascript'>alert('SENT')</script>";
		}else{
			
			echo "<script type='text/javascript'>alert('FAIL')</script>";
		}
	}
}

//////////////////////<!-client signup -->///////////////////

	if(isset($_POST['create'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$username = $_POST['uname'];
		$pws = $_POST['pws'];
		$dob = $_POST['dob'];
		$add = $_POST['add'];

		if(empty($fname) || empty($lname) || empty($email) || empty($contact) || empty($username) || empty($pws) || empty($dob) || empty($add)){
			echo "<script type='text/javascript'>alert('SENT')</script>";
		}else {
			$check = "SELECT * FROM users WHERE userName = '$username'";
			$checkRes = $connect->query($check);

			if($checkRes->num_rows > 0){
				
				 echo "<script type='text/javascript'>alert('USER NAME ALREADY EXIST!')</script>";
			}else{
				
				$qry = "INSERT INTO users(firstName, lastName, email, contact, address, userName, password, dob) VALUES('$fname', '$lname', '$email', $contact, '$add', '$username', '$pws', '$dob')";
				$res = $connect->query($qry);

				if($res){
					echo "<script type='text/javascript'>alert('USER CREATED SUCCESSFULLY!')</script>";
					header("location: /capstoneProject/public/index.php");
				}else{
					echo "<script type='text/javascript'>alert('FAIL')</script>";

				}
			
			}

		}
		

	}

	///,,,,,,,,,,,,,,,,,,,,,,,, USER PROFILE ,,,,,,,,,,,,,,,,,,, //


	if(isset($_POST['updateProfile'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$address = $_POST['address'];
		$uname = $_POST['uname'];
		$pws = $_POST['pws'];
		$contact = $_POST['contact'];
		$mail = $_POST['email'];
		
		if(empty($fname) || empty($lname) || empty($address) || empty($uname) || empty($pws) || empty($contact) || empty($mail)){
			echo "<script>alert('ALL FIELDS MUST BE FILL')</script>";
		}else{
			$sql = "UPDATE users SET firstName='$fname', lastName='$lname', email='$mail', contact=$contact, address='$address', userName='$uname', password='$pws'  WHERE id=$id";
			$res = $connect->query($sql);

			if($connect->query($sql) == true){
				echo "<script>alert('CHANGES COMPLETED SUCCESSFULLY')</script>";
			}else{
				echo "<script>alert('CHANGES FAIL')</script>";
			}
		}
	}

	// ,,,,,,,,,,,,,,,,,,,,,,,,, client store delete //////////////

	if(isset($_POST['delt'])){
		$del = $_POST['del'];
		
		$sql = "DELETE FROM clientshop WHERE productId = $del";
		$ress = $connect->query($sql);

		if($ress){
			echo "<script>alert('DONE')</script>";
		}else{
			echo "<script>alert('FAIL')</script>";
		}
	}


?>