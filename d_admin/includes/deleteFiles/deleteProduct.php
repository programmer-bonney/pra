<?php

include('../contentFiles/db.php');

$productName = $_POST['productSelected']; 

if(empty($productName)){
	echo "AN ITEM MUST BE SELECTED!";
}
else{
	$query = "DELETE FROM products WHERE product_name = '$productName'";
		$result = $connect->query($query);

		if($result == true){
			echo "Product " . $productName . " had been deleted successfully";
		}else{
			echo "Process fail";
		}
}
?>