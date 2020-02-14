<?php  
 error_reporting(0);
	include('insertOrder.php');

	session_destroy();
	header("location: /capstoneProject/public/index.php");