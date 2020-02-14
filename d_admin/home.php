 
  <?php 
  error_reporting(0);
  session_start();
   $name1 = $_SESSION['fname'];
   $name2 = $_SESSION['lname'];
   $sub = substr($name1, 0, 1);
   $sub1 = substr($name2, 0, 1);
   $final = $sub . "" . $sub1;
   $_SESSION['type'];
  include('includes/contentFiles/db.php');
  include('includes/retreveFile/fetch.php');
  include('includes/satistic.php');
  
  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include('includes/contentFiles/headerLink.php'); ?>
</head>


<body>
	<div class="container-fluid contentMainBody">
		<div class="row">

		<!-- the left side of the content body section-->
			<div class="col-xs-2 contentLeft">
				<div class="row  text-center">
				    <div class="col-xs-12"> 
						<div class="row">
							<div class="col-xs-12 menuTitle">
		                		<h3 >ADMIN PANEL</h3>
							</div>
						</div>
					

						<div class="row menuItem">
							<div class="col-xs-12">
							  <a href="home.php" style="text-decoration:none; color:white;">
								<i class="fas fa-2x  fa-tachometer-alt"></i>
		                		<p>Dashboard</p>
		                		</a>
							</div>
						</div>

						<div class="row menuItem"   onclick="order();">
							<div class="col-xs-12">
								<i class="fab fa-2x  fa-jedi-order"></i>
		                		<p>Order</p>
							</div>
						</div>

						<div class="row menuItem"  onclick="cProduct();">
							<div class="col-xs-12">
								<i class="fab fa-2x  fa-medrt"></i>
									<p>Create</p>
							</div>
						</div>

						<div class="row menuItem"  onclick="edit();">
							<div class="col-xs-12">
								<i class="fas fa-2x  fa-edit"></i>
		                		<p>Edit</p>
							</div>
						</div>

						<div class="row menuItem"   onclick="setting();">
							<div class="col-xs-12">
								<i class="fas fa-2x fa-th"></i>
		                		<p>Setting</p>
							</div>
						</div>

						<div class="row menuItem"   onclick="crm();" style="border-bottom:0px;">
							<div class="col-xs-12">
								<i class="fas fa-2x  fa-praying-hands"></i>
		                		<p>Customer</p>
							</div>
						</div>

						<small style="color:white;">
							The power of is man is the strength of his pocket
						</small>
						</div>
				</div>
			</div>


		<!-- the right side of the content body section-->
			<div class="col-xs-10 contentRight">
			<!-- the top section of the right side which is the nav-->
					<div style="background-color:#1c3334;" class="row navTop text-center">

					<!-- NAME OF MENU SELECTED -->
							<div class="col-xs-6 col-md-3">
								<div id="menuHeading">DASHBOARD</div>
							</div>
					<!-- NAME OF MENU SELECTED END-->


					<!--NAV ICON SECTION -->
								<div class="col-xs-6 col-md-6 col-md-push-1">
									<div class="row">
										<div class="col-xs-2 noticNav" >
											<a href="#" class="">
												<i class="fab  fa-facebook" title="Facebook"></i>
											</a>
										</div>

										<div class="col-xs-2 noticNav" >
											<a href="#" class="">
												<i class="fas fa-comment-dots"></i>
											</a>
										</div>

										<div class="col-xs-2 noticNav" >
											<a href="#" class="">
												<i class="fas fa-bell"></i>
											</a>
										</div>
									</div>
								</div>
					<!--NAV ICON SECTION END -->

					<!-- NAV USER AND DATE SECTION -->
								<div class="col-md-3 col-xs-12 pull-left">
									<div class="row">
										<div class="col-xs-6">
												<div class="dropdown">
								<div class="btn-group">
									<button class="btn " style="background-color:white; color:black;"><?php echo $final; ?> </button>

									<button class="btn dropdown-toggle" data-toggle="dropdown" style="background-color:lightgray; color:white;"><span class="sr-only">Click Me </span><span class="caret"></span></button>

								<div class="dropdown-menu" role="menu">
									
									<li class="dropdown-item"><a href=""><i>Change Password</i></a></li>
									<li class="dropdown-item"><a href=""><i>UL</i></a></li>
									<li class="dropdown-item"><a href=""><i>Logout</i></a></li>
								</div>
							</div> 
							</div>
										</div>
										<div class="col-xs-6">
											<p><?php echo date("M-d-Y");?></p>
										</div>
									</div>
								</div>
						<!-- NAV USER AND DATE SECTION END-->
							</div>


							<div id="contentBody">
						<!-- the side attraction-->
							<div class="row">	
								<div class="col-xs-12" >
									<img src="images/contentImages/da.jpg" style="width:100%; height:100px; margin:5px 0px 5px 0px;">
								</div>
							</div>
						<!-- the side attraction-->

						<!-- satistic section-->
							<div class="row">
							  <div class="col-md-10 col-md-push-1" style="padding:20px; background-color:#f1f1f1; box-shadow:-2px 2px 4px lightgray;">
							  	<div class="row">
								<div class="col-xs-4">
									<div class="row">
										<div class="col-xs-10 col-xs-push-1 satistic sat1">
											<div class="row">
												<div class="col-xs-12" style="margin-top:10px; margin-right:80px; color:white;">
													
														<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TOTAL SALES</p>
														<h1> &nbsp; &nbsp; &nbsp; &nbsp; $<?php echo $sale; ?></h1>
													
												</div>
												<div class="col-xs-12" style="margin-top:px;">
													<i class="far fa-3x fa-chart-bar" style="color:white; width:800px;"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xs-4">
									<div class="row">
										<div class="col-xs-10 col-xs-push-1 satistic sat2">
											<div class="row">
												<div class="col-xs-12" style="margin-top:10px; margin-right:80px; color:white;">
													
														<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; TOTAL ORDER</p>
														<h1> &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $finalOrder; ?></h1>
													
												</div>
												<div class="col-xs-12" style="margin-top:px;">
													<i class="fab fa-4x fa-gitter" style="color:white;"></i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xs-4">
									<div class="row">
										<div class="col-xs-10 col-xs-push-1 satistic sat3">
											<div class="row">
												<div class="col-xs-12" style="margin-top:10px; margin-right:80px; color:white;">
													
														<p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; CUSTOMERS</p>
														<h1> &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $myclients; ?></h1>
													
												</div>
												<div class="col-xs-12" style="margin-top:px;">
													<i class="fas fa-3x fa-users" style="color:white;"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							  </div>
							</div>
						<!-- satistic section end-->

						<!-- the table section-->
							<div class="row tableSec" style="padding:20px; border-top:3px solid orange; ; margin-top:10px;">

							<!-- THE LEFT SIDE TABLE -->
								<div class="col-sm-7 col-xs-12">
									<div class="row">
										<div class="col-sm-10 col-xs-12" style="border:1px solid lightgray; background-color:white; padding:10px;">
											<div class="table-responsive" style="background-color:skyblue; border:1px solid black">
											<table class="table table-striped table-hover sideTable">
												<div class="text-center" style="padding:10px; background-color:black; color:white; width:100%;">RECENT ORDERS</div>
												<tr class="text-center">
													<th>ORDER ID</th>
													<th>DESTINATION</th>
													<th>DATE</th>
													<th >STATUS</th>
												</tr>

												<?php

												  $reord = "SELECT * FROM oders";
												  $reres = $connect->query($reord);

												  if($reres->num_rows > 0){
												  	while ($rrow = $reres->fetch_assoc()) {
												  		?>

												  	<tr class="text-center">
														<td><?php echo $rrow['id'];?></td>
														<td><?php echo $rrow['address'];?></td>
														<td><?php echo $rrow['dat'];?></td>
														<td class="btn btn-link btn-sm pull-right"><?php echo $rrow['status'];?></td>
													</tr>


												  		<?php
												  	}
												  }

												?>

												
											</table>
										   </div>
										</div>
									</div>
								</div>
							<!-- END OF LEFT TABLE -->

							<!-- THE RIGHT SIDE TABLE -->
								<div class="col-sm-5 col-xs-12">
									<div class="row" style="max-height:300px; overflow:auto;">
										<div class="col-md-12 col-xs-12" style="border:1px solid lightgray; background-color:white;  padding:20px;">
											<div class="table-responsive" style="background-color:skyblue; border:1px solid black">
											<table class="table table-striped sideTable" style="background-color:;">
												<div class="text-center" style="padding:10px; background-color:black; color:white;">PRODUCT STOCK</div>
												<tr>
													<th>ID</th>
													<th>PRODUCT NAME</th>
													<th>QUANTITY</th>
												</tr>

												<?php 
												   $qqy = "SELECT * FROM products";
												   $rese = $connect->query($qqy);

												   if($rese->num_rows > 0){
												   	while ($ree = $rese->fetch_assoc()) {
												 ?>

												 	<tr class="text-center">
													<td><?php echo $ree['id']; ?></td>
													<td><?php echo $ree['product_name']; ?></td>
													<td ><?php echo $ree['product_quantity']; ?></td>
												</tr>

												 <?php
												   	}
												   }
												?>

												
											</table>
										  </div>
										</div>
									</div>
								</div>
							<!-- THE RIGHT SIDE TABLE END -->
							</div>	
						<!-- the table section END-->


						
					</div>
			</div>
		</div>
	</div>


<!--self made js-->
<script type="text/javascript" src="action/js/projectJs.js" async></script>
<script type="text/javascript" src="action/js/modal.js" async></script>

 <script type="text/javascript" >
function autoSelect(){
	//$("#productShow").removeAttr('onmouseover');
	$('.autoSearch').click(function(){
		var name = $(this).text();
		$("#deleteP").val(name);
		$("#productShow").text('');
		$("#searchBar").val('');
	
})
}

function showUpdateBtn(){
	//$("#imageBtn").removeAttr(onmouseover);
	$("#imageBtn").click(function(){
		$("#updateImage").toggle();
	});
	//document.getElementById('updateImage').style.visibility = 'visible';
}


function editSearchProduct(){
	$("#editSearch").removeAttr('onfocus');
	$("#editSearch").keyup(function(){
		var editProduct = $("#editSearch").val();

		if(editProduct != ""){
			$.ajax({
			type : "Post",
			url : "includes/retreveFile/editSearch.php",
			data : {
				productSelected : editProduct
			},
			success : function(data){
				document.getElementById('editShowProduct').innerHTML = data;
			}
		})
		}
		
	})
}

function getInSearch(){

	// $("#editShowProduct").removeAttr('onmouseover');

	 $(".autoSearch").click(function(){
	 	var proName = $(this).text();
	 		//console.log(proName);
	 	$("#editSearch").val(proName);
	 	$("#editShowProduct").text('');
	 })
}


function editSearchButton(){
	//alert(33);
	var name = $("#editSearch").val();
	
	if(name != ""){
		$.ajax({
			type : "Post",
			url : "includes/retreveFile/update.php",
			data : {
				productSelected : name
			},
			success : function(data){
				 var itm = data.split("/");
				 //console.log(itm[5]);
				
				var id = itm[0];
				var name = itm[1];
				var price = itm[2];
				var quantity =itm[3];
				var description = itm[4];
				var cate = itm[5];
				var img = itm[6];
				
				$("#name").val(name);
				$("#price").val(price);
				$("#quantity").val(quantity);
				$("#description").val(description);
				$("#ate").val(cate);
				$("#pid").val(id);
				

			document.getElementById('imageview').innerHTML = "<img style='width:110%; height:100%; margin-left:-10px;' src='/capstoneProject/d_admin/images/productImages/" + img + "'>";

			$("#productName2").text(name);
				
				//console.log(me);
			}
		})
	}
	var name = $("#editSearch").val("");
}



function mainUpdate(){
	var name= $("#name").val();
	var price = $("#price").val();
	var quantity = $("#quantity").val();
	var description = $("#description").val();
	var category = $("#ate").val();
	var pid = $("#pid").val();

	// if(name == "" || price == "" || quantity == "" || description == "" || category == ""){}

	$.ajax({
			type : "Post",
			url : "includes/insertFiles/productUpdate.php",
			data : {
				name : name,
				price : price,
				quantity : quantity,
				description : description, 
				category : category,
				pid : pid
			},
			success : function(data){
				document.getElementById('mes').innerHTML = "<div class='alert alert-success alert-dismissible fade in' role='alert'><button class='close' data-dismiss='alert' aria-label='close'><span aria-hidden='true'> &times</span></button><div> " 
					+ data + " </div></div>";

				$("#change")[0].reset();
				$("#imageview").text("")
				$("#productName2").text("");
				var id =  $("#pid").val('');
			}
		})
	
	//alert(pid);
}

function showFileUploadBtn(){
$("#imgUpdate").click(function(){
	$("#imgUpdate").removeAttr('onmouseover');
	$("#file").show();
	$("#imgSave").show();
	$("#imgUpdate").hide();

	$("#imgSave").click(function(){
		var id =  $("#pid").val();
		var file =  $("#file")[0].files[0];

		var formdata = new FormData();
		formdata.append("id", id);
		formdata.append("file", file);

			$.ajax({
				type: 'post', 
				url:  'includes/insertFiles/productImgUpdate.php',
				data : formdata,
				processData: false,
				cache: false,
   				contentType: false,
   				// beforeSend:function(){
   				// 	$("#preview").attr('src', files);
   				// },
				success: function(data){
					document.getElementById('mes').innerHTML = "<div class='alert alert-success alert-dismissible fade in' role='alert'><button class='close' data-dismiss='alert' aria-label='close'><span aria-hidden='true'> &times</span></button><div> " 
					+ data + " </div></div>";

				$("#change")[0].reset();
				$("#imageview").text("");
				$("#productName2").text("");
				//$("#imgUpdate").removeAttr('onmouseover');
				$("#file").hide();
				$("#imgSave").hide();
				$("#imgUpdate").show();
				}
			})		
	})

	//alert(pid);
})
}


function changingRate(){
	$("#rateUpdate").removeAttr('onmouseover');

	$("#rateUpdate").click(function(){
		var curRate = $("#todayRate").val();

		$.ajax({
			type : 'Post',
			url : 'includes/insertFiles/updateRate.php',
			data : {
				rate : curRate
			},
			success : function(data){
				document.getElementById('rateNotic').innerHTML = "<div class='alert alert-success alert-dismissible fade in' role='alert'><button class='close' data-dismiss='alert' aria-label='close'><span aria-hidden='true'> &times</span></button><div> " 
					+ data + " </div></div>";
			}
		})
})
}

// setting query

function qryType(){
	$("#selectMeth").removeAttr('onmouseover');

	$("#selectMeth").change(function(){
		var selected = $(this).val();

		if(selected == 'RANGE'){
			$("#rangeForm").show();
			$("#yearForm").hide();
			$("#monthForm").hide();
			$("#dayForm").hide();
			console.log($("#date1").val());
		}
		else if(selected == 'YEAR'){
			$("#rangeForm").hide();
			$("#yearForm").show();
			$("#monthForm").hide();
			$("#dayForm").hide();
		}
		else if(selected == 'MONTH'){
			$("#rangeForm").hide();
			$("#yearForm").hide();
			$("#monthForm").show();
			$("#dayForm").hide();
		}
		else if(selected == 'DAY'){
			$("#rangeForm").hide();
			$("#yearForm").hide();
			$("#monthForm").hide();
			$("#dayForm").show();
		}else{
			$("#rangeForm").show();
			$("#yearForm").hide();
			$("#monthForm").hide();
			$("#dayForm").hide();
		}
		
	});
}

function searchByRange(){
	$("#search").removeAttr('onmouseover');

	$("#search").on('click', function(){
		var frm = $("#date").val();
		var to = $("#date1").val();

		$.ajax({
			type : "Post",
			url : 'includes/retreveFile/sale.php',
			data : {
				fromDate : frm,
				toDate : to
			},
			success : function(data){
				//document.getElementById('saleRsult').innerHTML = data;
				document.getElementById('saleResult').innerHTML =data;
			}
		})
	})
}

function searchByYear(){
	$("#searchyear").removeAttr('onmouseover');

	$("#searchyear").on('click', function(){
		var frm = $("#yer").val();
		

		$.ajax({
			type : "Post",
			url : 'includes/retreveFile/searchYear.php',
			data : {
				fromDate : frm
				
			},
			success : function(data){
				//document.getElementById('saleRsult').innerHTML = data;
				document.getElementById('saleResult').innerHTML =data;
			}
		})
	})
}

function searchByMonth(){
	$("#searchmonth").removeAttr('onmouseover');

	$("#searchmonth").on('click', function(){
		var frm = $("#mon").val();

		$.ajax({
			type : "Post",
			url : 'includes/retreveFile/searchMonth.php',
			data : {
				fromDate : frm
			},
			success : function(data){
				//document.getElementById('saleRsult').innerHTML = data;
				document.getElementById('saleResult').innerHTML =data;
			}
		})
	})
}

function searchByDay(){
	$("#searchday").removeAttr('onmouseover');

	$("#searchday").on('click', function(){
		var frm = $("#days").val();
		//var to = $("#date1").val();

		$.ajax({
			type : "Post",
			url : 'includes/retreveFile/searchDay.php',
			data : {
				fromDate : frm
			},
			success : function(data){
				//document.getElementById('saleRsult').innerHTML = data;
				document.getElementById('saleResult').innerHTML =data;
			}
		})
	})
}

function admincreate(){
	$("#createAdmin").removeAttr('onmouseover');

	$("#createAdmin").on('click', function(){
		var fname = $("#fname").val();
		var lname = $("#lname").val();
		var email = $("#email").val();
		var contact = $("#contact").val();
		var uname = $("#uname").val();
		var address = $("#address").val();
		var utype = $("#utype").val();

		$.ajax({
			url : "includes/insertFiles/staff.php",
			type : "Post",
			data : {
				fname : fname,
				lname : lname,
				email : email,
				contact : contact,
				uname : uname,
				address : address,
				utype : utype
			},
			success : function(data){
				document.getElementById('shownote').innerHTML = "<div class='alert alert-success alert-dismissible fade in' role='alert'><button class='close' data-dismiss='alert' aria-label='close'><span aria-hidden='true'> &times</span></button><div> " 
					+ data + " </div></div>";

					$("#adminForm")[0].reset();
			}
		})
	})
}

function removeStaff(){
	$("#removeBtn").removeAttr('onmouseover');

	$("#removeBtn").on('click', function(){
		var sid = $("#staffid").val();

		$.ajax({
			url : "includes/deleteFiles/staffDelete.php",
			type : "Post",
			data : {
				sid : sid
			},
			success : function(data){
				document.getElementById('deleteStaff').innerHTML = "<div class='alert alert-success alert-dismissible fade in' role='alert'><button class='close' data-dismiss='alert' aria-label='close'><span aria-hidden='true'> &times</span></button><div> " 
					+ data + " </div></div>";

					$("#staffRemove")[0].reset();
			}
		})
		

	});
}
</script> 

</body>
</html>