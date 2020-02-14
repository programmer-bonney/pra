<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.imageView{
			background-image:url(/capstoneProject/d_admin/images/contentImages/items.jpeg);
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>

<div class="container-fluid" style="background-color:white; margin-top:15px;">
	<div class="row" style="">
		<div class="col-xs-8" style="border:1px solid lightgray; margin-top:10px; margin-bottom:5px;">
			<div class="row" style="padding:10px;  background-color:#f1f1f1;">       

				<div class="col-xs-12">
					<form role="form">

						<div class="input-group">
									<input type="text" onfocus="editSearchProduct();" id="editSearch" class="form-control input-lg" placeholder="Search ...">
									<div class="input-group-btn">
										<button class="btn btn-info"  type="button" onclick="editSearchButton();">
											<i class="glyphicon glyphicon-search" style="font-size:2em;"></i>
										</button>
									</div>
						</div>
						<div id="editShowProduct" onmouseover="getInSearch();"></div>
						
					</form>
				</div>
			</div>

			<div class="row" style="margin-top:20px;">
				<div class="col-xs-10 col-xs-push-1">
					<form role="form" id="change" style="background-color:#f1f1f1; margin-bottom:15px;border:2px solid darkgray;">
					<div id="mes"></div>
						<div class="form-group"><br>
							<input type="text" placeholder="Poduct Name" id="name" name="productName" class="form-control input-lg">
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<input type="number" id="price" name="productPrice" placeholder="Product Price" class="form-control input-lg">
								</div>
								<div class="col-xs-12 col-md-6">
									<input type="number" id="quantity" name="productQuantity" placeholder="Product Quantity" class="form-control input-lg">
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-xs-12 col-md-7">
									<textarea rows="4" id="description" class="form-control" placeholder="Product Description" name="productDescription"></textarea>
									<small>Give a brief description of the product</small>
								</div>
								<div class="col-xs-12 col-md-5">
									<input type="text" id="ate"  class="form-control input-lg" name="productImage" placeholder="Category">

									<input type="hidden" id="pid" name="">
									
								</div>
							</div>
						</div>

						<div class="form-group text-center" >
							<input type="button" onclick="mainUpdate();" class="btn btn-lg btn-success" value="UPDATE" style="width:40%;">
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="col-xs-4" style="padding:18px; background-color:">
			<div class="row" style="background-color:; padding:20px; margin-top:-5px; border:1px solid lightgray;">

				<div class="col-xs-12" >
					<div class="form-group"  >
						<!-- <form  role="form" > -->
							<div class="col-xs-10  col-xs-push-1 imageView" id="imageview" style="height:200px; border:2px solid darkgray; margin-bottom:10px;"><br><br><br>
							<center><h1 style="color:purple;">IMAGE VIEW</h1></center>
							</div>
					</div>
				</div>

				<center><h3 id="productName2"></h3></center>
				
			</div>

				<form  role="form" style="margin-top:10px;">
					<div class="form-group">
						<div class="row">
							<div class="col-xs-6">
								<div class="form-group">
								<input type="file" name="file" id="file" style="display:none;">
								</div>
								
								<div class="form-group">
								<input type="button" value=" Save UPDATE" id="imgSave" name="" style="display:none;">
								</div>
							</div>

							<div class="col-xs-6">
								<div class="row">
								<div class="form-group">
								<input type="button" value="UPDATE IMAGE" id="imgUpdate" name="" onmouseover="showFileUploadBtn();">
								</div>

							</div>
							</div>
						</div>
					</div>

				</form>
		  </div>
		</div>
	</div>


<!-- 	<div class="row " style="background-color:white; margin-top:20px;">
		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-12  text-center" style="background-color:black; color:white; margin-bottom:0px;">
					<h1>MODIFICATION HISTORY</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12" style="background-color:#f1f2f3; border:3px solid gray;">
					<div class="table-responsive">
						<table class="table table-striped" style="margin-top:10px;"> 
							<tr>
								<th>first</th>
								<th>second</th>
								<th>third</th>
							</tr>

							<tr>
								<td>1</td>
								<td>2</td>
								<td>3</td>
							</tr>

							<tr>
								<td>1</td>
								<td>2</td>
								<td>3</td>
							</tr>

							<tr>
								<td>1</td>
								<td>2</td>
								<td>3</td>
							</tr>

							<tr>
								<td>1</td>
								<td>2</td>
								<td>3</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div> -->
</div>
</body>
</html>