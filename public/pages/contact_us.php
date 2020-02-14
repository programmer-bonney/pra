<?php 
 error_reporting(0);
include('../../d_admin/includes/contentFiles/db.php');
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
		<?php include('../include/header.php') ?>
	</div>


<style type="text/css">
	.back{
		background-image:url(../../d_admin/images/contentImages/bbg.jpeg);
		background-repeat:no-repeat;
		background-size:cover;
		background-attachment:fixed;
		position:center bottom;
		height:450px;
		margin:0px -15px;
	}
	.over{
		background-color:black;
		opacity:0.5;
		height:450px;
		margin:0px -15px;
		position:relative;

	}
</style>

		
			<div class="container-fluid back">
				<div class="over">
					
				</div>
			</div>
		


		<div class="container-fluid" style="min-height:300px; margin-top:-200px;">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-1" style=" min-height:300px; padding:25px;">
					<div style="width:60%; margin:0px auto; min-height:300px; background-color:white; border:2px solid gray;">
						<div>
							<center><i class="fas fa-5x fa-hands-helping" style="color:red;"></i>
								<h3>CUSTOMER CARE</h3>

								<h4 style="letter-spacing:2px; margin:5px;">Our Customer Care Representitives are all set and waiting to talk you today.</h4>

								<h4 style="margin-top:35px;">+231776657791 / +231777366631</h4>
							</center>
						</div>
					</div>
				</div>

				<div class="col-sm-5" style=" min-height:300px; padding:25px;">
					<div style="width:70%; margin:0px auto; min-height:300px; background-color:white; border:2px solid gray;">
						<div>
							<center><i class="fab fa-5x fa-facebook" style="color:mediumblue;"></i>
								<h3>SOCIAL MEDIA</h3>

								<h4 style="letter-spacing:2px; margin:5px;"> You can visit our social media at any time, like and follow the page to get easy update on products and services</h4>

								<h4 style="margin-top:35px;"><a href="https://web.facebook.com/Tech-Pro-Africa-109410223756840/notifications/" target="" class="btn btn-danger">FOLLOW US</a></h4>
							</center>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="row" style="; background-color:#f1f1f1;">
			<div class="col-sm-6">
				<center>
					<div style="background-color:ghostwhite; padding:30px; border:1px solid lightgray; margin-top:10px;">
						<h2 style="letter-spacing:10px;">HOW TO FIND US</h2>
						<div style="width:80%; color:black; text-align:left;" class="lead"><p>If you have any question jus fill in the contact form at the right and our dynamic team will be able to get back to you within 24 hours.</p>
						</div>
					</div><br>

					<center><div class="row" style="padding:30px;">
							<div class="col-sm-4">
								<i class="fas fa-5x fa-building" style="color:gold; border-radius:50%;"></i>
								<p style="margin-top:15px;">Our <strong>head office</strong> is located on 12<sup>th</sup> Street oposite the United Methodist Radio Station </p>
							</div>
							<div class="col-sm-4">
								<i class="fab fa-5x fa-whatsapp" style="color:darkgreen;"></i>
								<p style="margin-top:15px;"><strong>+231776657791 </strong><br>Get to us on whatapp. </p>
							</div>
							<div class="col-sm-4">
								<i class="fas fa-5x fa-envelope" style="color:red; border-radius:50%;"></i>
								<p style="margin-top:15px;"><strong>dominicbonney5@gmail.com</strong><br>You can email us on the above email-address </p>
							</div>

						</div>
					</center>
				</center>
			</div>
			<div class="col-sm-6" style="margin:10px 0px;">
				<div class="form-group" style="border:1px solid lightgray">
					<div style="background-color:#1c3334; color:white;">
						<p class="text-center" style="font-size:32px; padding:15px;">GET IN TOUCH TODAY</p>
					</div>
					<form role="form" style="padding:20px; background-color:ghostwhite" action="" method="POST">
						<div id="info" style="color:green;"></div>
						<div class="form-group">
							<div class="col-sm-6">
								<input type="text" id="name" class="input-lg form-control" placeholder="Full Name" name="name" style="margin-left:-13px;" required>
							</div>
							<div class="col-sm-6">
								<input type="number" id="num" class="input-lg form-control" placeholder="Contact Number" name="num" style="margin-right:  -18px;" required>
							</div>
						</div><br><br><br>

						<div class="form-group">
							<input type="email" name="email" placeholder="Email" class="input-lg form-control" required>
						</div>

						<div class="form-group">
							<textarea class="form-control" rows="8" name="mes" id="mes" placeholder="Your Text" required></textarea>
						</div>

						<div class="form-group">
							<input type="submit" value="Send" class="btn btn-primary btn-lg" name="comment">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php include('../include/footer.php') ?>
</body>
</html>