<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

<div class="container-fluid" style="background-color:white;">
	<div class="row" style="">
	<div class="col-xs-12">
		<img src="/capstoneProject/d_admin/images/contentImages/da.jpg" style="width:99%; max-height:100px; margin-left:1%;">
	</div>
	<div class="col-md-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped">

				<tr>
					<th>Order ID</th>
					<th>Client Name</th>
					<th>Date</th>
					<th>Amount</th>
					<th>Status</th>
					<th>View Detail</th>
				</tr>


				<?php
				include_once('../../includes/contentFiles/db.php');
				$quer = "SELECT * FROM oders";
				$res = $connect->query($quer);

				if($res->num_rows > 0){
					while ($rod = $res->fetch_assoc()) {
				?>

				<tr>
					<td><?php echo $rod['id']; ?></td>
					<td><?php echo $rod['users_id']; ?></td>
					<td><?php echo $rod['dat']; ?></td>
					<td><?php echo $rod['total_price']; ?></td>
					<td><?php echo $rod['status']; ?></td>
					<td><a href="http://localhost/capstoneProject/d_admin/admin/pages/detail.php?orderId=<?php echo $rod['id']; ?>" class="text-success btn-link">View Detail</a></td>
				</tr>

				<?php
					}
				}

				?>

				

				<!-- <tr>
					<td>Order ID</td>
					<td>Client Name</td>
					<td>Date</td>
					<td>Amount</td>
					<td>Status</td>
					<td>View Detail</td>
				</tr>

				<tr>
					<td>Order ID</td>
					<td>Client Name</td>
					<td>Date</td>
					<td>Amount</td>
					<td>Status</td>
					<td>View Detail</td>
				</tr> -->
			</table>
		</div>
	</div>
	</div>
</div>
</body>
</html>














