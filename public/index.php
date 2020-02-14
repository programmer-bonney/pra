<?php
 error_reporting(0);
 include('../d_admin/includes/contentFiles/db.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<link rel="stylesheet" href="../d_admin/action/css/bootstrap.min.css">
		 <!-- jquery -->
        <script type="text/javascript" src="../d_admin/action/js/newjquery.js"></script>
        <!-- java script -->
        <script type="text/javascript" src="../d_admin/action/js/bootstrap.min.js"></script>
		
        <!--style css -->
        <link rel="stylesheet" href="../d_admin/action/css/style.css">
        <link rel="stylesheet" href="../d_admin/action/css/all.css">

        <style type="text/css">
        	a{
        		text-decoration:none;
        		color:white;
        	}
        	.head{
					/*background-image:url(/capstoneProject/d_admin/images/contentImages/pho.jpg);
					background-repeat:no-repeat;
					background-size:cover;
					background-attachment:fixed;
					background-position: center center;*/
				}
				#slider{
					overflow:hidden;
				}
				#slider figure{
					position:relative; 
					margin:0px;
					width:500%;
					left:0px; 
					animation:40s slider infinite 
				}
				#slider figure img{
					float:left;
					width:20%;
					height:480px;

				}
				@keyframes slider{
					0%{
						left:0;
					}
					21%{
						left:0;
					}
					25%{
						left:-100%;
					}
					46%{
						left:-100%;
					}
					50%{
						left:-200%;
					}
					71%{
						left:-200%;
					}
					75%{
						left:-300%;
					}
					96%{
						left:-300%;
					}
					100%{
						left:-400%;
					}
				}
        </style>
</head>
<body>
	<div class="container-fluid">
		<?php include('include/header.php') ?>
	</div>
<!-- slider section -->



		 <div class="row slider">
			<div id="slider" style="height:480px;">
				<figure style="">
					<img src="/capstoneProject/d_admin/images/contentImages/one.jpg">
					<img src="/capstoneProject/d_admin/images/contentImages/two.jpg">
					<img src="/capstoneProject/d_admin/images/contentImages/three.png">
					<img src="/capstoneProject/d_admin/images/contentImages/four.jpg">
					<img src="/capstoneProject/d_admin/images/contentImages/one.jpg">
				</figure>
			</div>
		</div>



<!-- RECENT PRODUCT SECTION START -->



		<div class="row product_view">
			<center><h1 style="background-color:#1c3334; color:white; padding:20px;">RECENT PRODUCTS</h1></center>
			<div class="col-xs-12" style="background-color:#f1f1f1;">
				<div class="row">

					<?php 

						$indexQ = "SELECT * FROM products ORDER BY id DESC LIMIT 8";
						$indexR = $connect->query($indexQ);

						if($indexR->num_rows > 0){
							while($res = $indexR->fetch_assoc()){
								echo "<div class='col-sm-3'><div style='width:98%; min-height:300px; border:2px solid lightgray; background-color:white; margin-top:10px; margin-bottom:10px;'>";
								echo "<img src='/capstoneProject/d_admin/images/productImages/{$res['image']}' style='height:190px;border:1px solid gray; width:100%;'>";
								echo "<center><div style='margin:0px; letter-spacing:2px;'><h3>";
								echo $res['product_name'];
								echo "</h3></div><div style='margin:0px;'>";
								echo "$" . $res['product_price'];
								echo "</div></center><p class='btn btn-sm pull-right' style='background-color:#2a1b3d;'><a href='pages/purchase.php?id={$res['id']}' style='text-decoration:none; color:white;'style='text-decoration:none; color:white;'>Buy</a></p></div></div>";
							}
						}

					?>
					
					
				</div>
				<center><button class="btn btn-lg" style="margin:10px; background-color:darkorange;"><a href="pages/shop.php" style="text-decoration:none; color:white;">SHOP MORE</a> &nbsp; <span class="caret" style="color:white;"></span></button></center>
			</div>
		</div>

		
		<div class="row staff"  style="background-color:#f1f1f1; margin-bottom:20px;">
			<center><h1 style="background-color:#1c3334; color:white; padding:20px;">OUR STAFF</h1></center>
			<div class="col-xs-12" style="background-color:;">
					<div class="row" >
						<div class="col-sm-4">
							<center><div class="card" style="margin:10px 5px; background-color:white; box-shadow:-2px 3px 3px 5px #1c3334; padding:10px;">
								<img src="/capstoneProject/d_admin/images/productImages/dbonney.jpg" style="border-radius:50%; margin-bottom:20px; height:170px; width:230px;">
								<div class="card-block">
									<div class="card-title lead">Dominic K. Bonney</div>
									<div class="card-text">Marketing Director of the Fire Business Center.</div>
								</div>
							</div></center>
						</div>
						<div class="col-sm-4">
							<center><div class="card" style="margin:10px 5px; background-color:white; box-shadow:-3px 4px 4px 7px #1c3334; padding:10px;">
								<img src="/capstoneProject/d_admin/images/productImages/dbonney.jpg" style="border-radius:50%; margin-bottom:20px; height:170px; width:230px;">
								<div class="card-block">
									<div class="card-title lead">Dominic K. Bonney</div>
									<div class="card-text">Marketing Director of the Fire Business Center.</div>
								</div>
							</div></center>
						</div>
						<div class="col-sm-4">
							<center><div class="card" style="margin:10px 5px; background-color:white; box-shadow:-3px 4px 4px 7px #1c3334; padding:10px;">
								<img src="/capstoneProject/d_admin/images/productImages/dbonney.jpg" style="border-radius:50%; margin-bottom:20px; height:170px; width:230px;">
								<div class="card-block">
									<div class="card-title lead">Dominic K. Bonney</div>
									<div class="card-text">Marketing Director of the Fire Business Center.</div>
								</div>
							</div></center>
						</div>
					</div>


					<div class="row">
						<div class="col-sm-2">
						</div>
						<div class="col-sm-4">
							<center><div class="card" style="margin:10px 5px; background-color:white; box-shadow:-3px 4px 4px 7px #1c3334; padding:10px;">
								<img src="/capstoneProject/d_admin/images/productImages/dbonney.jpg" style="border-radius:50%; margin-bottom:20px; height:170px; width:230px;">
								<div class="card-block">
									<div class="card-title lead">Dominic K. Bonney</div>
									<div class="card-text">Marketing Director of the Fire Business Center.</div>
								</div>
							</div></center>
						</div>
						<div class="col-sm-4">
							<center><div class="card" style="margin:10px 5px; background-color:white; box-shadow:-3px 4px 4px 7px #1c3334; padding:10px;">
								<img src="/capstoneProject/d_admin/images/productImages/dbonney.jpg" style="border-radius:50%; margin-bottom:20px; height:170px; width:230px;">
								<div class="card-block">
									<div class="card-title lead">Dominic K. Bonney</div>
									<div class="card-text">Marketing Director of the Fire Business Center.</div>
								</div>
							</div></center>
						</div>
						<div class="col-sm-2">
						</div>
					</div>
			</div>
		</div>


	<?php include('include/footer.php') ?>



	
</body>
</html>