
<?php
	include('../../includes/contentFiles/db.php')
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="row" style="background-color:lightgray;">

		<div class="col-xs-9" style="border-right:1px solid gray; border-left:1px solid gray">
			<div style="border:2px solid lightgray; margin-bottom:10px; background-color:gold;">
				<h1 style="color:white; text-align:center;">CUSTOMERS BASE</h1>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-hover" style="width:100%; margin-bottom:30px background-color:lightgray;">
					<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>EMAIL</th>
						<th>CONTACT</th>
						<th>ADDRESS</th>
						<th>DOB</th>
						<th>MEMBER</th>
					</tr>
					<?php
					  $crmQuery = "SELECT * FROM users";
					  $crmResult = $connect->query($crmQuery);

					  if($crmResult->num_rows > 0){
					  	while ($rowCrm = $crmResult->fetch_assoc()) {

					  		$dob = explode('-', $rowCrm['dob']);
					  		$mainDob = $dob[1] . "/" . $dob[2];

					  	echo "<tr><td>";
					  	echo $rowCrm['id'];
					  	echo "</td><td>";
					  	echo $rowCrm['firstName'] . " " . $rowCrm['lastName'];
					  	echo "</td><td>"; 
					  	echo $rowCrm['email'];
					  	echo "</td><td>";
					  	echo $rowCrm['contact'];
					  	echo "</td><td>";
					  	echo $rowCrm['address'];
					  	echo "</td><td>";
					  	echo $mainDob;
					  	echo "</td><td>";
					  	echo $rowCrm['dateSignup'];
					  	echo "</td></tr>";
					  	}
					  }
					?>
				
				</table>
			</div>
		</div>

		<div class="col-xs-3" style="background-color:ghostwhite; padding:20px;">
			<div class="row">
				<div class="col-xs-12 ">
					<div class="from-group" style="background-color:black; color:white; padding:15px;">
						<center><h4>KEEP BEING IN TOUC WITH CUSTOMERS</h4></center>
						<form role="form id='mailfrom">
							<div class="from-group">
								<input type="email" class="form-control input-lg" placeholder="To " id="rec" name="" required>
							</div><br>
							<div class="from-group">
								<input type="hidden" value="dominicbonney5@gmail.com" id="sen">
							</div>
							<div class="from-group">
								<input type="text" class="form-control input-lg" placeholder="Subject" id="sub" name="" required>
							</div><br>
							<div class="from-group">
								<textarea class="form-control rounded-0" id="bod" rows="8" style="margin-bottom:10px;" required></textarea>
							</div>
							<div class="from-group">
								<input type="button" class="btn btn-block " id="sentmail" onmouseover="sms();" value="SENT" style="background-color:gold; color:white;">
							</div>
						</form>
						<small id='shosho' style="color:red;"></small>
						<small><h5><li class="lead">Type in 'All' to send to all customer</li></h5></small>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>