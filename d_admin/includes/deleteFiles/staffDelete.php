<?php

include('../contentFiles/db.php');

$sid = $_POST['sid']; 

if(empty($sid)){
	echo "PLEASE ENTER A USER ID!";
}
else{
	$query = "DELETE FROM admin WHERE id = $sid";
		$result = $connect->query($query);

		if($result == true){
			echo "User " . $sid . " had been deleted successfully";
		}else{
			echo "Process fail";
		}
}
?>