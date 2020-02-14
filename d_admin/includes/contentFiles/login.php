<?php

	session_start();
	//include('db.php');

	if(isset($_POST['submit'])){
		 $myusername = mysqli_real_escape_string($connect,$_POST['userName']);
     	 $mypassword = mysqli_real_escape_string($connect,$_POST['psw']); 

     	 if(empty($myusername) || empty($mypassword)){
     	 	 $err = "INPUT BOTH USER NAME AND PASSWORD!";
     	 }else{
     	 	$qry = "SELECT * FROM admin WHERE userName='$myusername' AND password='$mypassword'";
     	 	$res = $connect->query($qry);

     	 	if($res->num_rows > 0){
     	 		while($rows = $res->fetch_assoc()){
     	 			header('location: home.php');
     	 			echo "welcome";
     	 			$name = $rows['firstName'];
     	 			$name1 = $rows['lastName'];
     	 			$utype = $rows['userType'];

     	 			
     	 		}
     	 		$_SESSION['fname'] = $name;
     	 		$_SESSION['lname'] = $name1;
     	 		$_SESSION['type'] = $utype;
     	 	}else{
     	 		 $err = "USER NAME OR PASSWORD WRONG";
     	 	}
     	 }
	}

	

?>