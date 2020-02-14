
<?php
 error_reporting(0);
 include('../../d_admin/includes/contentFiles/db.php'); ?>

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

       <style type="text/css">
       a{
       	text-decoration:none;
       }
       	.sidenav a{
       		text-decoration:none;
       		color:white;
       	}
       	.sidenav:hover{
       		background-color:lightgray;
       		color:white;
       		background-color:#1c3334;
       		display:block;
       	}
       </style>
</head>
<body>
	<div class="container-fluid">
		<?php include('../include/header.php') ?>
	</div>

	<div class="container-fluid" style="background-color:#f1f1f1;">
		<div class="row">
			<div class="col-xs-4 col-sm-2"  style="padding:22px; margin-top:70px;">
				<div class="container-fluid" style="background-color:#1c3334; color:ghostwhite; padding:10px;">
					<center><strong><h4 style="color:orange"> Categories</h4></strong></center>
				</div>
				<div class="container-fluid" style="background-color:#182628; color:white;">
					<?php
						$type = $_GET['cat'];
						$cateArray = [];
						$catName = "";
						
			 				$query = "SELECT * FROM category";
							$result = $connect->query($query);
								 if($result->num_rows > 0){
								 	// echo "<ul style='list-style-type:none; text-decoration:none; background-color:red;'>";
									while ($rows = $result->fetch_assoc()) {
										$name = $rows['catName'];

										array_push($cateArray, $name);
										
									echo "<p class='text-center lead sidenav'><a href='shop.php?cat={$name}' class='text-center'>";
									echo  $name;
									echo "</a></p>";
									}
							 if(in_array($type, $cateArray)){
							 	$catName = $type;
							 }else{
							 	$catName = "ALL PRODUCTS";
							 }
							}
						?>
				</div>
			</div>


	<!-- production section end here -->


			<div class="col-xs-8 col-sm-10" style="max-height:1200px; overflow:auto;">
				<h1><?php echo $catName; ?></h1>
				<div class="row">

					<?php

					if($catName=='ALL PRODUCTS'){
						$shopQ = "SELECT * FROM products ORDER BY id DESC";
						$shopR = $connect->query($shopQ);

						if($shopR->num_rows > 0){
							while ($shp = $shopR->fetch_assoc()) {
								echo "<div class='col-sm-2' style='background-color:white;'><div class='card' style='margin:20px 0px; border:1px solid gray;'>";

								echo "<img src='/capstoneProject/d_admin/images/productImages/{$shp['image']}' class='card-img-top' style='width:100%; height:150px;'>";

								echo "<div class='card-block' style='text-align:center;'><div class='card-title'><strong>";
								echo $shp['product_name'];
								echo "</strong></div><div class='card-text'>";
								echo $shp['product_price']; 
								echo "</div><p class='btn btn-sm' style='border-radius:50%; background-color:#2a1b3d; margin:5px;'><a  href='purchase.php?id={$shp['id']}' style='text-decoration:none; color:white;'>Buy</a></p></div></div></div>";
							}
						}
					}
					else{
						$shopQ = "SELECT * FROM products WHERE Category = '$type' ORDER BY id DESC";
						$shopR = $connect->query($shopQ);

						if($shopR->num_rows > 0){
							while ($shp = $shopR->fetch_assoc()) {
								echo "<div class='col-sm-2' style=''><div class='card' style='margin:20px 0px; border:1px solid gray;'>";

								echo "<img src='/capstoneProject/d_admin/images/productImages/{$shp['image']}' class='card-img-top' style='width:100%; height:150px;'>";

								echo "<div class='card-block' style='text-align:center;'><div class='card-title'><strong>";
								echo $shp['product_name'];
								echo "</strong></div><div class='card-text'>";
								echo $shp['product_price']; 
								echo "</div><p class='btn btn-info btn-sm' style='border-radius:50%;'><a href='purchase.php?id={$shp['id']}'>Buy</a></p></div></div></div>";
							}
						}
					}	

					?>
					

				</div>
			</div>
		</div>
	</div>
	<?php include('../include/footer.php') ?>
</body>
</html>
