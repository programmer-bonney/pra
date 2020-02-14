<?php


include('../contentFiles/db.php');

$name = $_POST['name'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];
$category = $_POST['category'];
$pid = $_POST['pid'];

if(empty($name) || empty($price) || empty($quantity) || empty($description) || empty($category)){
	echo "PLEASE FILL ALL FIELD CORRECTLY";
}else{
	$sql ="UPDATE products SET product_name='$name', product_price=$price, product_quantity=$quantity, product_description='$description', category='$category' WHERE id=$pid";

	if($connect->query($sql) == true){
		echo 'CHANGES COMPLETED SUCCESSFULLY';
	}else{
		echo 'CHANGES FAIL';
	}
	}


?>