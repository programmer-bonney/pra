<?php 

	$connect = mysqli_connect('localhost', 'root', '', 'ecommerce');

echo 123;
	function rate(){
		$rateQuery = "SELECT * FROM rate";
		if($connect->query($rateQuery) == true){
			while($rows = $connect->query($rateQuery)->fetch_assoc()){
				$myRate = $rows['currentRate'];
				echo $myRate;
			}
			
		}else{
			echo 'sorry';
		}
	}
	rate();

?>