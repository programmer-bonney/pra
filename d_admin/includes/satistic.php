<?php
$dbName = "ecommerce";
$serverName = "localhost";
$user = "root";
$password = "";
$connect = mysqli_connect($serverName, $user, $password, $dbName);


   $sale = 0;
   $myorder = [];

  $qrry = "SELECT * FROM oders";
  $rees = $connect->query($qrry);
 //echo $count = mysqli_fetch_assoc($rees)['id'];

  if($rees->num_rows > 0){
  	while ($tcount = $rees->fetch_assoc()) {
  		$sale += $tcount['total_price'];
  		$cut = $tcount['id'];

  		array_push($myorder, $cut);
  	
  	  }
  	   $finalOrder = count($myorder);
  	}


  	$nexqry = "SELECT COUNT(id) FROM users";
  	$nexres = $connect->query($nexqry);

  	$row = mysqli_fetch_row($nexres);
  	$myclients = $row[0];

?>