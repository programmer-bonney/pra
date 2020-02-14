<?php

include('../contentFiles/db.php');
error_reporting(0);


 $category	 = 		$_POST["cat"];
 $name 		 = 		$_POST["name"];
 $price 		 =		$_POST["prc"];
 $quantity 	 = 		$_POST["qty"];
 $description =		$_POST["description"];
  $image 		 = 	$_FILES['file']['name'];
 $tem = $_FILES['file']['tmp_name'];

$fileExt = explode('.', $image);
$exten = $fileExt[1];
 $allowTypes = array('jpg', 'png', 'jpeg', 'jfif');




 if($category == "Select category" || empty($name) || empty($price) || empty($quantity) || empty($description) || empty($image)){
 	echo "Please fill in all fields.";
 }else{
 	if(in_array($exten, $allowTypes)){
 		$query = "INSERT INTO products (category, product_name, product_description, product_price, product_quantity, image) VALUES ('$category', '$name', '$description', $price, $quantity, '$image')";

 		$result = $connect->query($query);

	 	if($result == true){
	 	move_uploaded_file($tem, "../../images/productImages/" . $image );
	 	echo "PRODUCT CREATED SUCCESSFULLY";
	 }
 	}else{
 	echo "FILE FORMAT IS NOT SUPPORTED";
 }
}
 	
// 		echo 123;
// 	}
// }





?>