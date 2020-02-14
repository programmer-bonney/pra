				
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

        <style type="text/css">
        	.maindiv{
        		background-image:url(../images/use.jpeg);
        		background-repeat:no-repeat;
        		background-size:cover;
        		background-attachment:fixed;
				background-position:center center;
        	}
        </style>

       
</head>
<body>
	<div class="row" style="color:white;">
		<div class="col-xs-12" style="background-color:#1c3334; height:90px;">
				<div class="row">
					<div class="col-xs-9" style="background-color:; height:90px;">
						<a href="../index.php" style="color:gold;"><i class="fas fa-2x fa-home" style="margin:30px;"></i></a><span style="color:white; font-size:24px; text-shadow:2px -3px black; letter-spacing:5px;">LIB  MARKET 2DAY</span> 
					</div>

					<div class="col-xs-3" style="background-color:; height:90px; line-height:20px;">
						<div class="row">
							<!-- <div class="col-xs-4"  style="padding:20px 0px;">
								<i class="fas fa-4x fa-shopping-cart" style="color:gold;"></i><span>1</span>
							</div> -->
							<div class="col-xs-2" style="padding:30px 0px;">
								<i class="fab fa-2x fa-facebook" title="Facebook" style="color:mediumblue;"></i>
							</div>
							<div class="col-xs-2" style="padding:30px 0px;">
								<i class="fab fa-2x fa-youtube" title="Youtube" style="color:red;"></i>
							</div>
							<div class="col-xs-2" style="padding:30px 0px;">
						   		<i class="fab fa-2x fa-twitter" title="Twitter" style="color:skyblue;"></i>
						   	</div>
						</div>
						
						
					</div>
				</div>
			</div>
	</div>
	<div class="row maindiv"">
						<div class="col-xs-6 col-xs-offset-3" style="padding:20px; border:2px solid gray;  background-color:ghostwhite; margin-top:10px; border-radius:0px 100px 0px 0px;">
							<h3 class="text-center">CLIENTS SIGNUP</h3>
							<div id="shownote"></div>
							<form id="adminForm" action="" method="post">
							  <div class="form-group">
							    <label >First Name</label>
							    <input type="text" class="form-control input-lg" required="" id="fname" name="fname" required>
							  </div>

							  <div class="form-group">
							    <label >Last Name</label>
							    <input type="text" class="form-control input-lg" required="" id="lname" name="lname" required>
							  </div>
							  
							  <div class="form-group">
							    <label >Email address</label>
							    <input type="email" name="email" class="form-control input-lg" required="" id="email" required>
							  </div>
							  
							  <div class="form-group">
							    <label >Contact</label>
							    <input type="number" name="contact" class="form-control input-lg" required="" id="contact" required>
							  </div>

							  <div class="form-group">
							    <label >User Name </label>
							    <input type="text" class="form-control input-lg" required="" id="uname" name="uname"  required>
							  </div>

							  <div class="form-group">
							    <label >Password </label>
							    <input type="password" class="form-control input-lg" required="" id="" name="pws" required>
							  </div>

							  <div class="form-group">
							    <label >Date of Birth </label>
							    <input type="date" class="form-control input-lg" required="" id="" name="dob"  required>
							  </div>
							  
							  <div class="form-group">
							    <label >Address</label>
							    <input type="text" class="form-control input-lg" required="" id="address" name="add" required>
							  </div>

							  
							  <div class="form-group">
							    
							    <input type="submit" value="SAVE" class=" input-lg" name="create" style="background-color:#2a1b3d; color:white;">
							  </div>
							</form>
						</div>

						
		</div>
</body>
</html>



						