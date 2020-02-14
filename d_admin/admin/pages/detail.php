<!DOCTYPE html>
<html>
		<?php 
		 include('../../includes/contentFiles/db.php');
		  include('../../includes/retreveFile/fetch.php');

		  $orderId = $_GET['orderId'];
		  ?>

		  <?php

			if(isset($_POST['confirm'])){
				$oid = $_POST['oder'];

				if(empty($oid)){
					echo "<script> alert('ERROR'); </script>";
				}else{
					$qqy = "UPDATE oders SET status = 'CLOSE' WHERE id=$oid";
					$ress = $connect->query($qqy);

					if($ress){
						echo "<script>alert('CONFIRM')</script>";
					}else{
						echo "<script> alert('ERROR'); </script>";
					}
				}
			}

			if(isset($_POST['cancel'])){
				$oid = $_POST['oder'];

				if(empty($oid)){
					echo "<script> alert('ERROR'); </script>";
				}else{
					$qqy = "UPDATE oders SET status = 'CANCEL' WHERE id=$oid";
					$ress = $connect->query($qqy);

					if($ress){
						echo "<script>alert('CANCEL')</script>";
					}else{
						echo "<script> alert('ERROR'); </script>";
					}
				}
			}

		?>

	
	<head>
		<title></title>
		<?php include('../../includes/contentFiles/headerLink.php'); ?>
		<style type="text/css">
			input{
				background-color:ghostwhite;
				text-align:center;
				height:40px;
			}
		</style>
	</head>
	<body>
		<div style="background-color:skyblue; min-height:610px;"><br>
			<div style="width:60%; height:500px; margin-left:20px; background-color:white;">
			<!-- 	<div> -->
					<h1 style="float:right; margin-right:40px; letter-spacing:3px; ">ORDER DETAILS</h1>
					<p><a href="/capstoneProject/d_admin/home.php">Back</a></p>
				
				<div style="clear:both;"></div>
				<h3 style="margin-left:40px;"><?php echo $orderId; ?></h3>

				<form method="POST" style="background-color:ghostwhite;">
					<table style="width:90%; margin:0px auto; padding:10px; border:1px solid black;">

						<?php 

						   $query1 = "SELECT * FROM order_details WHERE orderId = $orderId";
						   $result1 = $connect->query($query1);

						   if($result1->num_rows > 0){
						   	while ($row = $result1->fetch_assoc()) {
						   		$uprice = $row['unit_price'];
						   		$quantity = $row['quantity'];
						   		$dmp = $row['dateMakeP'];
						   		$pname = $row['item_id'];


						   		$qry2 = "SELECT * FROM products WHERE id = $pname";
						   		$res2 = $connect->query($qry2);

						   		if($res2->num_rows > 0){
						   			while ($rod = $res2->fetch_assoc()) {
						   				$nameP = $rod['product_name'];
						   			}
						   		}
						   	}
						   }

						?>


						<tr>
							<th style="border:1px solid black;">Product</th>
							<th style="border:1px solid black;">Unit Price</th>
							<th style="border:1px solid black;">Quantity</th>
							<th style="border:1px solid black;">Date</th>
						</tr>

						<tr>
							<td style="border:1px solid black; height:40px;"><input type="text" value="<?php echo $nameP; ?>" name=""></td>
							<td style="border:1px solid black; height:40px;"><input type="text" value="<?php echo $uprice; ?>" name=""></td>
							<td style="border:1px solid black; height:40px;"><input type="text" value="<?php echo $quantity; ?>" name=""></td>
							<td style="border:1px solid black; height:40px;"><input type="text" value="<?php echo $dmp; ?>" name=""></td>
						</tr>
						<input type="hidden" value="<?php echo $orderId; ?>" name="oder">
						<tr><td colspan="4" style="border-top:2px solid black;"></td></tr>
						<tr>

							<td colspan="4" style="border-top:2px solid black;">
								<input type="submit" value="CONFIRM ORDER" name="confirm" style="background-color:darkgreen;">
								<input type="submit" value="CANCEL ORDER" name="cancel" style="background-color:red;">
							</td>
						</tr>
					</table>
				</form>
				
			</div>
		</div>
	</body>
	</html>