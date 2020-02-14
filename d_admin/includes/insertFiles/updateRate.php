<?php

		include('../contentFiles/db.php');

		$rate = $_POST['rate'];

	if(empty($rate)){
		echo "Field is blank!";
	}else{
		$rateQuery = "UPDATE rate SET currentRate = '$rate' WHERE id=1";
		$rateResult = $connect->query($rateQuery);

		if($rateResult == true){
			echo "Rate Updated successfully";
		}
	}

?>