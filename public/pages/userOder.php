
<?php 
 error_reporting(0);
include('../../d_admin/includes/contentFiles/db.php');
include('../include/insertOrder.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link rel="stylesheet" href="../../d_admin/action/css/bootstrap.min.css">
		 <!-- jquery -->
        <script type="text/javascript" src="../../d_admin/action/js/newjquery.js"></script>
        <!-- java script -->
        <script type="text/javascript" src="../../d_admin/action/js/bootstrap.min.js"></script>
		
        <!--style css -->
        <link rel="stylesheet" href="../../d_admin/action/css/style.css">
        <link rel="stylesheet" href="../../d_admin/action/css/all.css">

       
</head>
<body>
	<div class="container-fluid">
		<?php echo include('../include/header.php');?>
	</div>

	<div class="row">
		<div class="col-xs-3 col-xs-offset-9">
			<i class="fas fa-5x fa-user"></i>
			<h4><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></h4>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 text-center">
			ALL ORDERS
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<table class="table table-straped">
				<tr>
					<th>Order ID</th>
					<th>Product</th>
					<th>Date</th>
					<th>quantity</th>
					<th>Unit Price</th>
					<th>Total</th>
					
				</tr>

				<?php 
				    $oid = $_SESSION['id'];
				  $qry = "SELECT * FROM oders WHERE users_id = $oid ";
				  $res = $connect->query($qry);

				  if($res->num_rows > 0){
				  	while ($row12 = $res->fetch_assoc()) {
				  		 $ord = $row12['id'];

				  		$qry1 = "SELECT * FROM order_details WHERE orderId = $ord ";
				  		$res1 = $connect->query($qry1);

				  		if($res1->num_rows > 0){
				  			while ($row1 = $res1->fetch_assoc()) {
				  		?>


				  		  <tr>
				  		  		<td><?php echo $row1['orderId']; ?></td>

				  		  		<?php
				  		  		  $proId =  $row1['item_id'];
				  		  		  $qry3 = "SELECT * FROM products WHERE id = $proId";
				  		  		  $res3 = $connect->query($qry3);

				  		  		  if($res3->num_rows > 0){
				  		  		  	while ($rod = $res3->fetch_assoc()) {
				  		  		  		echo "<td>{$rod['product_name']}</td>";
				  		  		  	}
				  		  		  }
				  		  		?>
								
								<td><?php echo $row1['dateMakeP']; ?></td>
								<td><?php echo $row1['quantity']; ?></td>
								<td><?php echo $row1['unit_price']; ?></td>
								<td><?php echo $row1['unit_price'] * $row1['quantity']; ?></td>
						  </tr>


				  		<?php		

				  				
				  			}
				  		}
				 
				  	}
				  }

				?>

			</table>
		</div>
	</div>

	
<?php include('../include/footer.php') ?>
</body>
</html>