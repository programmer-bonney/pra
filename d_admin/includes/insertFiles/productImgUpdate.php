<?php
 error_reporting(0);

include('../contentFiles/db.php');

$file = $_FILES['file']['name'];
$pid = $_POST['id'];
$tem = $_FILES['file']['tmp_name'];

$fileExt = explode('.', $file);
$exten = $fileExt[1];
 $allowTypes = array('jpg', 'png', 'jpeg');

if(empty($file) || empty($pid)){
	echo "PLEASE FILL ALL FIELD CORRECTLY";
}else{
	if(in_array($exten, $allowTypes)){
	$sql ="UPDATE products SET image='$file' WHERE id=$pid";

	if($connect->query($sql) == true){
	 	move_uploaded_file($tem, "../../images/productImages/" . $file );
	 	echo "PRODUCT Updated SUCCESSFULLY";
	 }
 	}else{
 	echo "FILE FORMAT IS NOT SUPPORTED";
 }
	}
//}


?>