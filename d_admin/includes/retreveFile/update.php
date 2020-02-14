<?php


include('../contentFiles/db.php');

$parray = [];

$productName = $_POST['productSelected'];


$query = "SELECT * FROM products WHERE product_name Like '{$productName}%'";
$result = $connect->query($query);

if($result->num_rows > 0){
	while($item = $result->fetch_assoc()){
		$id = $item['id'];
		$pName = $item['product_name'];
		$pPrice = $item['product_price'];
		$pQuantity = $item['product_quantity'];
		$pDescription = $item['product_description'];
		$pCategory = $item['category'];
		$image = $item['image'];

	}

	array_push($parray, $id, $pName, $pPrice, $pQuantity, $pDescription, $pCategory, $image);
	$tostr = implode('/', $parray);
	echo $tostr;

}else{
	echo "yea";
}


?>