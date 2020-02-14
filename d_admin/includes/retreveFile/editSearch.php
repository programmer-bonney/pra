<?php


include('../contentFiles/db.php');



$productName = $_POST['productSelected'];


$query = "SELECT * FROM products WHERE product_name Like '{$productName}%'";
$result = $connect->query($query);

if($result->num_rows > 0){
	while($item = $result->fetch_assoc()){
		echo  "<li class='autoSearch'>" . $item['product_name'] . "</li>";
	}

}else{
	echo "yea";
}


?>