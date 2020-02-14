<?php

	include('db.php');


	 $to = $_POST['receiver'];
	 $from = $_POST['sender'];
	 $subject = $_POST['subject'];
	 $body =$_POST['body'];

	 $note = '';

	 if (empty( $to)  || empty($from) || empty($subject) || empty($body)) {
	 	echo "FILL IN ALL FIELDS CORRECTLY PLEASE.";
	 }else{
	 	if($to == 'All' || $to == 'all' || $to == "ALL"){
	 		$qry = "SELECT * FROM users";
	 		$res = $connect->query($qry);

	 		if($res->num_rows > 0){
	 			while ($rows = $res->fetch_assoc()) {
	 				$mal = $rows['email'];
	 				 if(mail($mal, $subject, $body, 'from: dominicbonney5@gmail.com')){$note = 'EMAILS SENT';}else{$note = 'EMAIL FAIL';}
	 			}
	 		}else{
	 			$note = "EMAIL FAIL!!!";
	 		}
	 	}else{
	 				 if(mail($to, $subject, $body, 'from: dominicbonney5@gmail.com')){
								$note = "EMAIL SENT";
							}else{
								$note = "EMAIL FAIL";
							}
	 	}

	 	echo $note;
	 }
?>