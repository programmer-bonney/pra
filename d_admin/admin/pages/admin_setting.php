
<?php
	include('../../includes/contentFiles/db.php')
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="row">
		<div class="col-xs-12 pull-right">
			<ul class="nav nav-tabs">
				
				<li class="nav-item"><a href='#query' class="nav-link active" data-toggle='tab' role='tab'> Query</a></li>
				<li class="nav-item"><a href='#add' class="nav-link" data-toggle='tab' role='tab'> Add Users</a></li>
				<li class="nav-item"><a href='#remove' class="nav-link" data-toggle='tab' role='tab'> Remove Users</a></li>
				<!-- <li class="nav-item"><a href='#approve' class="nav-link" data-toggle='tab' role='tab'> Order Approver</a></li> -->
			</ul>

			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="query">
					<div class="row">
						<div class="col-xs-12" style="background-color:lightgray; border: 2px solid lightgray; margin-top:10px;">
								<div class="row">
									<div class="col-xs-4">
										
									</div>
									<div class="col-xs-3">
										<div class="form-group">
											<form>
												<select id="selectMeth" class="form-control " style="margin-top:20px; background-color:ghostwhite; color:black; border-radius:20px;" onmouseover="qryType();">
													<option>Method for Query</option>

													<option>RANGE</option>
													<option>YEAR</option>
													<option>MONTH</option>
													<option>DAY</option>
												</select>
											</form>
										</div>
									</div>
									<div class="col-xs-5">
										<form 	id="rangeForm">
											<div class="row">
												<div class="col-xs-4">
													From :
													<input type="date" id="date" name="date" class="form-control input-sm" style="background-color:ghostwhite; color:black; border-radius:20px;">
												</div>
												<div class="col-xs-4">
													To : 
													<input type="date" id="date1" name="date1" class="form-control input-sm" style="background-color:ghostwhite; color:black; border-radius:20px;">
												</div>
												<div class="col-xs-4" style="margin-top:20px;">
													<input type="button" id="search" value="Search" class="form-control input-sm btn btn-info" onmouseover="searchByRange();" style="color:white; border-radius:20px;"">
												</div>
											</div>
										</form>

										<!-- .............year........... -->

										<form id="yearForm" style="display:none;">
											<div class="row">
												<div class="col-xs-7">
													From :
													<input type="text" placeholder="Enter Year" id="yer" name="year" class="form-control " style="background-color:ghostwhite; color:black; border-radius:20px;">
												</div>
												
												<div class="col-xs-5" style="margin-top:20px;">
													<input type="button" id="searchyear" value="Search" class="form-control input-sm btn btn-info" onmouseover="searchByYear();">
												</div>
											</div>
										</form>

										<!-- ............month................ -->

										<form id="monthForm" style="display:none;">
											<div class="row">
												<div class="col-xs-7">
													From :
													<input type="month" id="mon" name="month" class="form-control" style="background-color:ghostwhite; color:black; border-radius:20px;">
												</div>
												
												<div class="col-xs-5" style="margin-top:20px;">
													<input type="button" id="searchmonth" value="Search" class="form-control input-sm btn btn-info" onmouseover="searchByMonth();">
												</div>
											</div>
										</form>

										<!-- ,.........day........ -->

										<form id="dayForm" style="display:none;">
											<div class="row">
												<div class="col-xs-7">
													From :
													<input type="date" id="days" name="days" class="form-control" style="background-color:ghostwhite; color:black; border-radius:20px;">
												</div>
												
												<div class="col-xs-5" style="margin-top:20px;">
													<input type="button" id="searchday" value="Search" class="form-control input-sm btn btn-info" onmouseover="searchByDay();">
												</div>
											</div>
										</form>
									</div>
								</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12" id="saleResult">
							<img src="/capstoneProject/d_admin/images/contentImages/images0.jfif" style="width:100%; height:410px;">
						</div>
					</div>
				</div>
				
				<div role="tabpanel" class="tab-pane" id="add">
						<div class="row">
						<div class="col-xs-6 col-xs-offset-1" style="padding:20px; border:2px solid gray;  background-color:lightgray; margin-top:10px; border-radius:0px 100px 0px 0px;">
							<h3 class="text-center">CREATE NEW ADMIN</h3>
							<div id="shownote"></div>
							<form id="adminForm">
							  <div class="form-group">
							    <label >First Name</label>
							    <input type="text" class="form-control input-lg" required="" id="fname">
							  </div>

							  <div class="form-group">
							    <label >Last Name</label>
							    <input type="text" class="form-control input-lg" required="" id="lname">
							  </div>
							  
							  <div class="form-group">
							    <label >Email address</label>
							    <input type="email" class="form-control input-lg" required="" id="email">
							  </div>
							  
							  <div class="form-group">
							    <label >Contact</label>
							    <input type="number" class="form-control input-lg" required="" id="contact">
							  </div>

							  <div class="form-group">
							    <label >User Name </label>
							    <input type="email" class="form-control input-lg" required="" id="uname" >
							  </div>
							  
							  <div class="form-group">
							    <label >Address</label>
							    <input type="text" class="form-control input-lg" required="" id="address">
							  </div>

							   <div class="form-group">
							    <label >User Type</label>
							    <select id="utype" class="form-control input-lg">
							    	<option>Admin</option>
							    	<option>Super Admin</option>
							    </select>
							  </div>
							  <button type="button" id="createAdmin"  onmouseover="admincreate();" class="btn btn-primary">SAVE</button>
							</form>
						</div>

						<div class="col-xs-4 col-xs-offset-1" style="padding:20px; border:2px solid lightgray;">

						<img src="/capstoneProject/d_admin/images/productImages/dbonney.jpg" style="width:99%; margin-left:1%; border-radius:10%;">
							
						</div>
					</div>
				</div>

				<div role="tabpanel" class="tab-pane" id="remove">
					<div class="row">
						<div class="col-xs-6" style="margin:10px; padding:20px; border:1px solid lightgray;">
						<div id="deleteStaff"></div>
						<p class="text-center" style=" font-size:20px;">Remove Unwanted Admin</p>
							<form id="staffRemove">
							  <div class="form-group row">
							    <div class="form-group">
							      <input type="number" class="form-control input-lg" id="staffid" placeholder="STAFF ID">
							    </div>
							  </div>

							  <div class="form-group row">
							    <div class="col-sm-10">
							      <button type="button" id="removeBtn" onmouseover="removeStaff();" class="btn btn-primary">DELETE</button>
							    </div>
							  </div>
							    <small class="pull-right">Please make sure to put in the currect staff id.</small>
							</form>
						</div>

						<div class="col-xs-5 text-center" style="margin:10px; padding:20px; border:1px solid lightgray;">

							<h4>Staff Members</h4>

					 <?php
								$qry = "SELECT * FROM admin";
								$res = $connect->query($qry);
							
						  echo "<table class='table table-bordered table-dark table-sm'>";

							   echo "<tr><th scope='col'>ID</th><th scope='col'>NAME</th><th scope='col'>CONTACT</th><th scope='col'>EMAIL</th></tr>";
	
							
								if($res->num_rows > 0){
									while($name = $res->fetch_assoc()){
										echo "<tr><td>";
										echo $name['id'];
										echo "</td><td>";
										echo $name['firstName'] . " " . $name['lastName'];
										echo "</td><td>";
										echo $name['contact'];
										echo "</td><td>";
										echo $name['email'];
										echo "</td></tr>";
									}
							 echo "</table>"; 
								}
							?>
						
 							
						</div>
					</div>
				</div>

				<!-- <div role="tabpanel" class="tab-pane" id="approve">
					4
				</div> -->
			</div>
		</div>
	</div>
</body>
</html>