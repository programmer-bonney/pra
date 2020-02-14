<?php

	include('../contentFiles/db.php');

	$newCategory = $_POST['newCategory'];

	if(empty($newCategory)){
		echo "Field is blank!";
	}else{
		$catCreateQuery = "INSERT INTO category (catName) VALUES('$newCategory')";
		$catCreateResult = $connect->query($catCreateQuery);

		if($catCreateResult == true){
			echo "New category created successfully";
		}
	}



?>