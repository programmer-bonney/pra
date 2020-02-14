
<?php  include('../../includes/contentFiles/db.php');?>
<?php  include('../../includes/retreveFile/fetch.php');?>			
 <!DOCTYPE>
<html>
<head>
	<title></title>
	<style type="text/css">
		.dropItem{
			cursor:pointer;
			letter-spacing:3;
		}

.autoSearch{
	list-style-type:none;
	cursor:pointer;
``	border-bottom:2px solid red;
}


.autoSearch:hover{
	list-style-type:none;
	cursor:pointer;
	background-color:#f1f2f3;

}


	</style>
</head>
<body>

<div class="container-fluid" style="background-color:#f1f1f1;">
	<div class="row" style="">
		<div class="col-md-8 col-xs-12" style="background-color:white;" id="product_from">
			<div class="row">
				<div class="col-xs-10 col-xs-push-1" style="padding:20px;">

	<!-- ============= MAIN CREATE PRODUCT FORM START ======-->
					
					<form role="form" id="productForm" method="POST" enctype="multipart/form-data" style="background-color:#f1f1f1; border:2px solid gray;">

						<div class="text-center" style="background-color:#1c3334; padding:3px; color:white; font-size:2em; "><p>CREATE NEW PRODUCT</p></div>

						<div class="form-group form-control-lg"  style="padding:10px;">
							<select id="category" class="input-lg" name="category">
								<option>Select Category</option>

					<!--===== GETTING THE CATEGORIES FROM THE DB =====-->
								<?php
									  if($result->num_rows > 0){
									  	while ($rows = $result->fetch_assoc()) {
								?>
									  <option>
									  	<?php echo $rows['catName']; ?>
									  </option>
								<?php
									  	}
										  }
								?>

					<!--===== GETTING THE CATEGORIES FROM THE DB END =====-->

							</select>
						</div>

						<div class="form-group">
							<input type="text" placeholder="Poduct Name" name="productName" id="productName" class="form-control input-lg">
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<input type="number" id="productPrice" name="productPrice" placeholder="Product Price" class="form-control input-lg">
								</div>
								<div class="col-xs-12 col-md-6">
									<input type="number" id="productQuantity" name="productQuantity" placeholder="Product Quantity" class="form-control input-lg">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-md-7">
									<textarea rows="4" class="form-control" id="productDescription" placeholder="Product Description" name="productDescription"></textarea>
									<small>Give a brief description of the product</small>
								</div>
								<div class="col-xs-12 col-md-5">
									<input type="file" id="productImage" name="productImage" accept="image/*">
									<small>Select an image for your production</small>
								</div>
							</div>
						</div>

						<div class="form-group text-center" >
							<input type="button" id="saveProduct" onmouseover="addproduct();" class="btn btn-lg" value="SAVE" style="width:40%; background-color:#1c3334; color:white;">
						</div>
					</form>

	<!--====== MAIN CREATE PRODUCT FORM END ======-->
					
				</div>
			</div>

			<!--===== NOTIFICATION ALERT SECTION =====-->

					<div id="notification1"></div>

			<!--==== NOTIFICATION ALERT SECTION  END ======-->

		</div>

		<div class="col-md-4 col-xs-12" style="">
			<div class="row">
				<div class="col-xs-12">
						
					<div class="dropdow" style="padding: 10px;">

					<!--= EXTRA ACTIVITIES SECTION (NEW RATE, NEW CATEGORIES) =-->

						<div class="btn-group">
							<button class="btn btn-primary">ACTION </button>
							<button class="btn btn-primary  dropdown-toggle" data-toggle="dropdown" ><span class="sr-only">Click Me </span><span class="caret"></span>
							</button>

							<div class="dropdown-menu text-center" role="menu">
								<!-- <li class="dropdown-header">SCHOOL</li>
								<li class="divider"></li> -->
								<li class="dropdown-item text-center dropItem btn btn-default btn-block" data-toggle='modal' data-target='#categoryAdd' aria-hidden='true' id="item1">Add Categoru</li>
								<li class="dropdown-item text-center dropItem btn btn-default btn-block" data-toggle='modal' data-target='#productDelete' aria-hidden='true' id="item2">Delete</li>
								<li class="dropdown-item text-center dropItem btn btn-default btn-block" data-toggle='modal' data-target='#rate' aria-hidden='true' id="item3">Today Rate</li>
							</div>
						</div> 

					<!--= EXTRA ACTIVITIES SECTION (NEW CATEGORIES) END =-->

					</div>
				  </div>
				  <br><br><br><br><br><br>

	<!--=== SIDE ATTRACTION (IMAGES) ==-->

		  <div class="row">
			<div class="col-xs-12" id="preview">
				<img src="/capstoneProject/d_admin/images/contentImages/images.png" style="width:90%; margin-left:3%;">
			</div>
		  </div>

	<!--=== SIDE ATTRACTION (IMAGES) END -->

		</div>
	</div>

	<div class="row" style="padding:0px;">
		<div class="col-xs-12" style="">
			
		<!--===== CATEGORY PANEL TABS SECTION  =====-->

				<?php
				 $firstEle = [];
				// $arraycount = "";
			
 				$query = "SELECT * FROM category";
				$result = $connect->query($query);
					 if($result->num_rows > 0){
					 	echo "<ul class='nav nav-tabs' style=' background-color:darkorange;'>";
						while ($rows = $result->fetch_assoc()) {
							$name = $rows['catName'];
							$nameArray = array_push($firstEle, $name);  //adding categories to the array
						//$arraycount = count($rows['id']);

						echo "<li class='nav-item '><a style='color:black;' href='";
						echo  "#" . $rows['catName']; 
						echo "' data-toggle='tab' role='tab' >";
						echo $rows['catName'];
						echo "</a></li>";
						}
				echo "</ul>";
				}
				?>

		<!--===== CATEGORY PANEL TABS SECTION END =====-->

			<div class="tab-content ">

	<!--===== CATEGORY PANEL BODY SECTION  =====-->

				<?php
					
					$con = mysqli_connect('localhost', 'root', '', 'ecommerce');
					$catProduct = "SELECT * FROM category";
					$catResult = $con->query($catProduct);

					$activeClass = $firstEle[0];
					if($catProduct){
						
						while($pro = $catResult->fetch_assoc()){
							$catId = $pro['catName'];
							$catName = $pro['catName'];

					if($activeClass == $catName){
						echo "<div class='tab-pane active' id='";
						echo $catName;
						echo "' role='tabpanel'>";
					}else{
						echo "<div class='tab-pane ' id='";
						echo $catName;
						echo "' role='tabpanel'>";
					}
					echo "<div class='table-responsive'>";
						echo "<table class='table table-striped'>";
							echo "<tr><th>#</th><th>Product Name</th><th>Product Quantity</th><th>Product Price</th><th>Category</th></tr>";

						$query2 = "SELECT * FROM products WHERE category = '$catName'";
						$result2 = $con->query($query2);
						if($result2->num_rows > 0){
							while($count = $result2->fetch_assoc()){
							echo "<tr><td>";
							echo $count['id'];
							echo "</td><td>";
							echo $count['product_name'];
							echo "</td><td>";
							echo $count['product_quantity'];
							echo "</td><td>";
							echo $count['product_price'];
							echo "</td><td>";
							echo $count['category'];
							echo "</td></tr>";
						}
					}
					echo "</table></div></div>";
				}
			}
			?>


		<!--===== CATEGORY PANEL BODY SECTION END  =====-->
						
<!-- CATEGORY MODAL SECTION  -->

	<div class="modal " tabindex="-1" id="rate" role="dialog" aria-hidden='true' aria-labelledby="modalName">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="close" type="button" style="width:%;">
						<span aria-hidden='true'>&times</span>
					</button>

					<?php
					$con = mysqli_connect('localhost', 'root', '', 'ecommerce');
					  $queryRate = "SELECT * FROM rate";
					  $resultRate = $con->query($queryRate);
					  if($resultRate->num_rows > 0 ){

					  	while ($row = $resultRate->fetch_assoc()) {
							$rateT = $row['currentRate'];
						}
					  }

					?>

					<h4>TODAY RATE </h4>
				</div>

				<div class="modal-body">
					<small>Current Rate in the system: <strong><?php echo $rateT; ?></strong></small>
					<div class="form-group" style="padding:30px;">
					   <form role="form">

					   <div id="rateNotic"></div>

						  <div class="form-group">
							<input type="number" id="todayRate" placeholder="New Rate" class="form-control input-lg" name="">
						  </div>
					  
						  <div class="form-group">
							<input type="button" id="rateUpdate" class="btn btn-success pull-right" value="Save New Rate" id="rate" onmouseover="changingRate();">
						  </div>
					  </form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="modal " tabindex="-1" id="productDelete" role="dialog" aria-hidden='true' aria-labelledby="modalName">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="close" type="button" style="width:%;">
						<span aria-hidden='true'>&times</span>
					</button>
					<h4>REMOVE PRODUCT </h4>
				</div>

				<div class="modal-body">
					<div class="row">

						<div class="col-xs-5">
							<div style="background-color:black; color:white; padding:15px; text-align:center;">PRODUCT'S LIST</div>
							<div style="max-height:300px; overflow:auto; background-color:; border:1px solid black;">
								<?php

								$modalQuery = "SELECT * FROM products";
								$modalResult = $connect->query($modalQuery);

								if($modalResult->num_rows > 0){
									echo "<div class='table-responsive '>";
									echo "<table class='table table-striped'>";
									while($productRows = $modalResult->fetch_assoc()){
										echo "<tr><td class='productClass'  onmouseover='product();'>";
										echo  $productRows['product_name'];
										echo "</td></tr>";
									}
									echo "</table></div>";
								}

								?>
							</div>
						</div>

						<div class="col-xs-6"  style="background-color:; padding:20px; border:1px solid gray; margin-left:10px;">

						<div id="note"></div>
							<form role="form">
								<div class="input-group">
									<input type="text" id="searchBar" onfocus="chooseProduct();" class="form-control " placeholder="Search ...">
									<div class="input-group-btn">
										<button class="btn btn-info" type="button">
											<i class="glyphicon glyphicon-search"></i>
										</button>
									</div>
								</div>
								<div id="productShow"  onmouseover='autoSelect();'></div>
							</form>
						<hr>
							<form role="form" id="deleteForm">
								<div class="form-group">
									<input type="text" class="form-control" id="deleteP" placeholder="Product Name" style="height:50px;">
								</div>
								<div class="form-group">
									<input type="button" onclick="deletes();" value="Delete" class="btn btn-danger" name="">
								</div>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div class="modal " tabindex="-1" id="categoryAdd" role="dialog" aria-hidden='true' aria-labelledby="modalName">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-label="close" type="button" style="width:%;">
						<span aria-hidden='true'>&times</span>
					</button>
					<h4> ADD CATEGORY </h4>
				</div>

				<div class="modal-body" style="background-color:#f1f1f1;">
					<small>There are <strong><?php echo count($firstEle); ?> Categories</strong> now in the system</small>
					<div id="notic"></div>
					<form class="form-group" style="padding:30px;" id="catForm">

						<div class="form-group">
							<input type="text" placeholder="New Rate" class="form-control input-lg" id="newCat" name="">
						</div>
						<div class="form-group">
							<input type="button" class="btn btn-success pull-right" value="SAVE" id="addCate" onmouseover="addingCategories();">
						</div>
						<a href="#">Remove Category</a>
					</form>
					<small class=""><b><i>Note: 8 CATEGORIES IS ALLOW! </i></b></small>
				</div>
			</div>
		</div>
	</div>
<!-- CATEGORY MODAL SECTION END -->
</body>
</html>