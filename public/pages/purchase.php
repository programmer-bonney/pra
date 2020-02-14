

<?php 
error_reporting(0);
include_once('../../d_admin/includes/contentFiles/db.php');
include_once('../include/insertOrder.php');
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
								#buyform{
									border:2px solid lightgray;
									background-color:#1c3334;
								}
								#buyform input, select{
									width:90%;
									height:45px;
									margin-left:5%;
									margin-bottom:3%;
									text-align:center;    
									border-radius:10px;
								}
								#buyform1{
									border:2px solid lightgray;
									background-color:#1c3334;
								}
								#buyform1 input, select{
									width:90%;
									height:45px;
									margin-left:5%;
									margin-bottom:3%;
									text-align:center;    
									border-radius:10px;
								}
							</style>
       
</head>
<body>
	<div class="container-fluid">
		<?php echo include_once('../include/header.php'); ?>
	</div>

<!-- HEADER SECTION END HEREs -->

	<div class="container-fluid" style="background-color:#f1f1f1;">
		<div class="row">
			<div class="col-xs-8">
			<div class="row" style="padding:20px;">
					<div class="col-xs-8 col-xs-offset-2" style="padding:20px; background-color:#f1f1f1; border:1px solid lightgray;">

				<?php

					$id = $_GET['id'];

					$purQ = "SELECT * FROM products WHERE id=$id";
					$purR = $connect->query($purQ);

					if($purR->num_rows > 0){
						while($rows = $purR->fetch_assoc()){
							$cat = $rows['category'];
							echo "<p class='text-center lead'><i>{$rows['product_name']}</i></p>";

							echo "<img src='/capstoneProject/d_admin/images/productImages/{$rows['image']}' class='card-img-top' style='width:100%; border:1px solid lightgray; height:300px;'>";

							echo "<p id='price' class='text-center lead' style='margin-top:10px;'><i>{$rows['product_price']}</i></p>";

							echo "<div style='background-color:white; padding:20px;'>{$rows['product_description']}</div>";
						}
					}

				?>

					</div>
				</div>


<!-- PRODUCT TO BE BUY SECTION END HERE -->

				<div class="row">
					<div class="col-xs-12">
						<h5>Products you may also need.</h5>
						<div class="row" style="border:1px solid lightgray; background-color:#f1f1f1; margin:10px 3px; padding:15px;">


							<?php

								$additionQ = "SELECT * FROM products WHERE Category='$cat' ORDER BY id DESC LIMIT 4 ";
								$additionR = $connect->query($additionQ);

								if($additionR->num_rows > 0){
									while($add = $additionR->fetch_assoc()){
										if($id == $add['id']) continue;
										echo "<div class='col-xs-3'><a href='purchase.php?id={$add['id']}'><img src='/capstoneProject/d_admin/images/productImages/{$add['image']}' class='card-img-top' style='width:100%; border:1px solid lightgray; height:150px;'></a>";

										echo "<p class='text-center' style='margin-top:10px;'><i id='mainPrice'>{$add['product_price']}</i></p>";

										echo "<p class='text-center' style='margin-top:10px;'><i>{$add['product_name']}</i></p></div>";
									}
								}

							?>
							
						</div>
					</div>
				</div>
			</div>


			<div class="col-xs-4" style="border:1px solid lightgray;">
				
				<div class="row">

					<div class="col-xs-12 pull-right">
					   <form>
							<input type="hidden" value="<?php echo $id; ?>" id="buyLaterP" name="buyLaterP">

							<input type="button" class="btn btn-danger btn-lg" value="BUY LATER" id="buyLat" name="" style="margin:10px 5px;">
							<!-- <button class="btn btn-danger btn-lg" id="buyLat" style="margin:10px 5px;">BUY LATER</button> -->
							
						</form>
						
					</div>

					<div class="col-xs-12">
						<form>
							<!-- <label style="text-align:center;"><small>PAYMENT METHOD</small></label> -->
						<select class="input-lg form-control" id="method" onchange="payMethod();" style="background-color:black; color:ghostwhite; margin-left:-10px;">
							<option>Orange Money</option>
							<option>Visa Card</option>
						</select><small><i class="">*</i> &nbsp; Select a method you will like to do payment with.</small>
						</form>
					</div>

				</div>

				 	<form style="margin:30px 0px;">
				 		
				 		<?php

				 			$rateQ = "SELECT * FROM  rate";
				 			$rateR = $connect->query($rateQ);

				 			if($rateR->num_rows > 0){
				 				while ($row = $rateR->fetch_assoc()) {
				 					$rate = $row['currentRate'];
				 				}
				 			}

				 		?>
				 		<input type="hidden" id="rate" value="<?php echo $rate; ?>">
				 	</form>
				 	

<!-- ORANGE MONEY SECTION START HERE -->				

							

						<div id="orange">
							<form method="post" id="buyform">

							<center><img src="../images/orangem.jpg" style="width:96%; height:90px; bottom:20px; padding:10px;"></center>
							<!-- <input type="number" name="uid" > -->
							<label style="color:white;">Quantity:</label>
							<input type="number" id="quantity" placeholder="qty" value="1" name="qqty">
							<input type="text" placeholder="Destination" name="destination">
							<input type="hidden" id="ttp" name="ttp">

							<input type="hidden" id="productid" value="<?php echo $id; ?>" name="productid">
							<input type="text" id="mainPrice1" name="price">
							<input type="number" placeholder="Orang Money Number" name="" required>
							<input type="password" placeholder="Orange Money Password" name="" required>

							<select onchange="curren();" id="currt">
							 			<option>Choose Payment Method</option>
							 			<option>USD</option>
							 			<option>LRD</option>
							 		</select>
							
							<h4 id="showpp" style="color:white;"></h4>
							
							<div class="form-group">
									<input type="submit" class="btn btn-danger input-lg" value="BUY NOW " name="submitBuy">
								</div>
						</form>
						</div>

<!-- VISA TO CARD START FROM HERE -->
						<div id="visa" style="display:none;"> 
							<form method="post" id="buyform1">

							<center><img src="../images/visa.jfif" style="width:96%; height:90px; bottom:20px; padding:10px;"></center>
							<!-- <input type="number" name="uid" > -->
							<label style="color:white;">Quantity:</label>
							<input type="number" id="quantity1"  value="1" name="qqty1">

							<input type="number" placeholder="Name on Card" name="" required>
							<input type="number" placeholder="Visa Card number" name="" required>
							<input type="date" placeholder="Expiry Date" style="width:41%;" required>
							<input type="password" placeholder="Security Code" style="width:41%;" requred>
							<input type="text" placeholder="Destination" name="destin1">
							<!-- <input type="hidden" id="ttp" name="ttp"> -->
							<!-- <input type="hidden" id="ttp" name="ttp"> -->
							<input type="text" id="productsid" value="<?php echo $id; ?>" name="productsid">
							<input type="text" id="price1" name="price1">
							
							

							<select onchange="curren1();" id="currt1">
							 			<option>Choose Payment Method</option>
							 			<option>USD</option>
							 			<option>LRD</option>
							 		</select>
							
							<h4 id="showpp1" style="color:white;">kksks</h4>
							<!-- <input type="number" name="orderId"> -->
							
							<div class="form-group">
									<input type="submit" class="btn btn-danger input-lg" value="BUY NOW" name="submitVisa">
								</div>
						</form>
	</div>
<!-- VISA TO CARD END FROM HERE -->

	<div>
		<!-- <form>
			<input type="button" class="input-lg" value="Add to Cart" style="background-color:darkgreen; color:white;" name="">
		</form> -->
	</div>

			</div>
		</div>
	</div><br>





<?php include('../include/footer.php') ?>


<script type="text/javascript">
	var price = $("#price").text();
	var pid = $("#productid").val();
	document.getElementById('mainPrice1').value=price;
	var me = document.getElementById('price1').value=price;
	

	$("#buyLat").on('click', function(){
		var productId = $("#buyLaterP").val();

		$.ajax({
			url : "../include/shopLater.php",
			type : "post",
			data : {
				product : productId
			},
			success : function(data){
				alert(data);
			}
		})
	})


	 

</script>

	<script type="text/javascript" src="../action/publicjs.js"></script>


</body>
</html>


