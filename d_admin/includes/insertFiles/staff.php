<?php

include('../contentFiles/db.php');


  $prefname = $_POST["fname"];
  $fname =  ucfirst($prefname);
  $prelname = $_POST["lname"];
  $lname = ucfirst($prelname);
  $email  = $_POST["email"];
  $contact = $_POST["contact"];
  $uname = $_POST["uname"];
  $address = $_POST['address'];
  $utype = $_POST['utype'];

if(empty($fname) || empty($lname) || empty($email) || empty($contact) || empty($uname) || empty($address) || empty($utype)){
	echo "SOME FIELD IS BLANK";
}else{
	$query = "INSERT INTO admin (firstName, lastName, email, contact, userName, address, userType) VALUES ('$fname', '$lname', '$email', $contact, '$uname', '$address', '$utype')";
 	$result = $connect->query($query);

 	if($result == true){
 		echo "STAFF CREATED SUCCESSFULLY.";
 	}else{
 		echo " ERROR OCCURED. ";
 	}
}

?>