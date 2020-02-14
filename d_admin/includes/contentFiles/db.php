<?php

$dbName = "ecommerce";
$serverName = "localhost";
$user = "root";
$password = "";






$connect = mysqli_connect($serverName, $user, $password, $dbName);

if(!$connect){
	die('Connection fail :' . mysqli_connect_error());
}

?>