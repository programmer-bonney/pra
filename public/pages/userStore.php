

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
		<div class="col-lg-2 col-lg-offset-10">
			<center><i class="fas fa-5x fa-user"></i><h4><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></h4></center>
		</div>
	</div>
	<div class="row">
		<div class="col-md-11" style="margin-left:30px;">
			<h2>MY STORE</h2>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<div class="row" style="margin-bottom:20px;">

				

				<?php

				$id = $_SESSION['id'];

				$qry = "SELECT * FROM clientshop WHERE userId = $id";
				$res = $connect->query($qry);

				if($res->num_rows > 0){
					while ($row = $res->fetch_assoc()) {
						 $pid = $row['productId'];

						$pqry = "SELECT * FROM products WHERE id = $pid";
						$pres = $connect->query($pqry);

						if($pres->num_rows > 0){
							while($rows = $pres->fetch_assoc()){
								 $pimage = $rows['image'];
								 $id_p = $rows['id'];
					?>

					<div class="col-md-3" style="background-color:#f1f1f1; padding:20px; border:1px solid white;">
					<center>
						<div style="width:80%">
							<img src="/capstoneProject/d_admin/images/productImages/<?php echo $pimage; ?>" style="width:100%; height:130px;">
							<h4><?php echo $rows['product_name']; ?>
							<h4><?php echo $rows['product_price']; ?>
							</h4><br>

							<form method="post">
								<div class="form-group">
									<button class="btn btn-success"><a href="purchase.php?id=<?php echo $rows['id'];?>">BUY NOW</a></button>
									<input type="hidden" value="<?php echo $rows['id']; ?>" name="del">
									<input type="submit" value="DELETE" name="delt" style="background-color:red; color:white;" name="">
								</div>
							</form>
						</div>
					</center>
					</div>
					<?php
								
							}
						}
					}
				}else{
						echo "<p style='margin-left:30px; color:red;'>STORE IS EMPTY</p>";
					}

				?>

			</div>
		</div>
	</div>
<?php include('../include/footer.php') ?>
</body>
</html>