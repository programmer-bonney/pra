  <?php include('includes/contentFiles/db.php');
   include('includes/retreveFile/fetch.php');
   include('includes/contentFiles/login.php');
   error_reporting(0);
   ?>




<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('includes/contentFiles/headerLink.php'); ?>

	<style type="text/css">
		.maindiv{
			background-image:url(images/contentImages/bbg.jpeg);
			background-repeat:no-repeat;
			background-size:cover;
			min-height:610px;
		}
		.subdiv{
			background-color: black; 
			opacity:0.8;
			min-height:610px;
			margin:0px -15px ;

		}
		.log{
			min-height:350px;
			background-color:#282827;
			margin-top:60px;
			color:white;
			padding:20px;
			border-radius:0px 100px 0px 0px;
		}
		.form-group{
			/*background-color: blue;*/
		}

	</style>
</head>


<body>
	<div class="container-fluid maindiv" >
		<div class="container-fluid subdiv">
			<div class="row">
				<div class="col-xs-4 col-xs-offset-4 log">
					<div>
						<img src="images/contentImages/app.jpg" style="width:100px; height:80px; border-radius:50%; margin-top:-50px; margin-left:-40px;">
					</div>
					<div class="form-group">
						<h2 class="text-center">STAFF LOGIN ONLY</h2>
						<form action="" method="POST" role="form" style="padding:40px;">
							<div class="form-group">
								<input type="text" id="userName" name="userName" placeholder="USER NAME" class="form-control input-lg" required>
							</div><br>
							<div class="form-group">
								<input type="password" id="psw" name="psw" placeholder="PASSWORD" class="form-control input-lg" required>
							</div><br>
							<div >
								<input type="submit" name="submit" class="input-lg" value="LOGIN" style="color:darkorange;">
							</div>
						</form>
						<?php echo $err; ?>
						<p style="margin-top:30px;">Bonney Tech Solution Power</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>