

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
        	input{
        		color:red;
        	}
        </style>
       
</head>
<body>
	<div class="container-fluid">
		<?php echo include('../include/header.php');?>
	</div>

	<div class="row" style="padding:20px;">
		<div class="col-xs-4 col-xs-offset-1"><center>
		
			<i class="fas fa-10x fa-user"></i>
			<h1><?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></h1>

			<p style="margin-top:20px;">Your information is always private, confidential and important to us. You can update your, any changes made is up to you.</p>
		</center>

	</div>
		<div class="col-xs-6 ">

			<input type="button" id="edit" class="btn btn-danger btn-lg pull-right" name="" value="EDIT PROFILE" style="margin-bottom:10px;">

				<h2 style="text-align:center;">Welcome to your profile section</h2><br>

				
			<div id="frm" style="display:none;">
				<?php
				$uid = $_SESSION['id'];
				$qry = "SELECT * FROM users WHERE id = $uid";
				$res = $connect->query($qry);

				if($res->num_rows > 0){
					while ($row = $res->fetch_assoc()) {
						$fname = $row['firstName'];
						$lname = $row['lastName'];
						$address = $row['address'];
						$uname = $row['userName'];
						$pws = $row['password'];
					    $contact = $row['contact'];
					    $email = $row['email'];
					}
				}

				?>
				<form method="post" style="margin-top:20px; background-color:#f1f1f1; padding:20px;">
					<div class="row form-group">
						<div class="col-md-6">
							<input type="text" class="form-control input-lg" name="fname" value="<?php echo $fname; ?>" style="border-bottom:3px solid black;" required>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control input-lg" name="lname" value="<?php echo $lname; ?>" style="border-bottom:3px solid black;" required>
						</div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control input-lg" name="address" value="<?php echo $address; ?>" style="border-bottom:3px solid black;" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control input-lg" name="uname" value="<?php echo $uname; ?>" style="border-bottom:3px solid black;" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control input-lg" name="pws" value="<?php echo $pws; ?>" style="border-bottom:3px solid black;" required>
					</div>
					<div class="form-group">
						<input type="number" class="form-control input-lg" name="contact" value="<?php echo $contact; ?>" style="border-bottom:3px solid black;" required>
					</div>
					<div class="form-group">
						<input type="email" class="form-control input-lg" name="email" value="<?php echo $email; ?>" style="border-bottom:3px solid black;" required>
					</div>

					<div class="form-group">
						<input type="submit" class=" input-lg" name="updateProfile" value="UPDATE" style="background-color:darkorange;">
					</div>

				</form>
			</div>

			<div id="imgg">
				<img src="../images/sosc.jpg" height="300px;" width="100%">
			</div>
		</div>
	</div>
<?php include('../include/footer.php') ?>

<script type="text/javascript">
	$("#edit").on('click', function(){
		$(this).hide();
		$("#frm").show();
		$("#imgg").hide();
	})
</script>
</body>
</html>