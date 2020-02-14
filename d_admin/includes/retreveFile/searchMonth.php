<?php


include('../contentFiles/db.php');

$dat = $_POST['fromDate'];
// $to = $_POST['toDate'];

if(empty($dat)){
	echo 'SOME FIELD IS BLANK';
}else{
	$saleQry = "SELECT * FROM order_details WHERE dateMakeP LIKE '{$dat}%'";
	$saleRes = $connect->query($saleQry);
	$grandTotal = 0;

	if($saleRes->num_rows > 0){ 
		
			echo "<table class='table table-striped'><tr><th>ID</th><th>Product Name</th><th>Unit Price </th><th>Quantity</th><th>Total</th></tr>";
		while($sale = $saleRes->fetch_assoc()){
			$convertName = $sale['item_id'];
			$total = $sale['unit_price'] * $sale['quantity'];

			echo "<tr><td>";
			echo $sale['orderDetails_id'];
			echo "</td><td>";
			$proName = "SELECT * FROM products WHERE id = $convertName";
			$proRes = $connect->query($proName);
				if($proRes->num_rows > 0){
					while($rows = $proRes->fetch_assoc()){
						echo $rows['product_name'];
					}
				}
				
			echo "</td><td>";
			echo $sale['unit_price'];
			echo "</td><td>";
			echo $sale['quantity'];
			echo "</td><td>";
			echo $total;
			echo "</td></tr>";
			$grandTotal +=  $total;
		}
		echo "<tr><td class='lead text-center'>";
		echo  "TOTAL SALE";
		echo "</td><td colspan='4' class='lead text-center'>";
		echo "$" . $grandTotal;
		echo "</td></tr>";
		echo "</table>";
	}else{
		echo "sorry";
	}
}

?>