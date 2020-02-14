
<?php  
error_reporting(0);
	include_once('insertOrder.php');
?>
<div class="row head" >
			<div class="col-xs-12" style="background-color:; height:90px;">
				<div class="row">
					<div class="col-xs-9" style="background-color:; height:90px;">
						<h1 style="color:white; margin-left:15px; text-shadow:2px -3px black; letter-spacing:5px;">LIB  MARKET 2DAY</h1>
					</div>
					<div class="col-xs-3" style="background-color:; height:90px; line-height:20px;">
						<div class="row">
							<div class="col-xs-4"  style="padding:20px 0px;">
								<!-- <i class="fas fa-4x fa-shopping-cart" style="color:gold;"></i><span style="color:white;">0</span> -->
							</div>
							<div class="col-xs-2" style="padding:30px 0px;">
								<a href="https://www.facebook.com/Tech-Pro-Africa-109410223756840/notifications/" target="_blank">
								<i class="fab fa-2x fa-facebook" title="Facebook" style="color:mediumblue;"></i>
							</a>
							</div>
							<div class="col-xs-2" style="padding:30px 0px;">
								<a href="https://www.youtube.com/watch?v=0gsClDEdE0c&pbjreload=10" target="_blank">
								<i class="fab fa-2x fa-youtube" title="Youtube" style="color:red;"></i>
								</a>
							</div>
							<div class="col-xs-2" style="padding:30px 0px;">
								<a href="https://twitter.com/?lang=en" target="_blank">
						   		<i class="fab fa-2x fa-twitter" title="Twitter" style="color:skyblue;"></i>
						   	</a>
						   	</div>
						</div>
						
						
					</div>
				</div>
			</div>
			<div class="col-xs-12">
				<!--  -->
							<div class="navbar navbar-inverse" style="margin:0px -15px;">
								 <div class="container-fluid"> 
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navCollapse" style="background-color:purple;">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>

									<div class="collapse navbar-collapse"  id="navCollapse">
										<ul class="nav navbar-nav">
											<li class=""><a href="/capstoneProject/public/index.php">HOME</a></li>
											<li ><a href="/capstoneProject/public/pages/shop.php">SHOP</a></li>
											<li ><a href="/capstoneProject/public/pages/about_us.php">ABOUT US</a></li>
											<li ><a href="/capstoneProject/public/pages/contact_us.php">CONTACT US</a></li>
										</ul>
										<?php 
										 if(empty($id)){
											echo "<ul class='navbar-right' >";
											echo "<li data-toggle='modal' data-target='#login' style='color:white; cursor:pointer;list-style-type:none; margin-right:20px; margin-top:10px; font-size:20px;'>Login</li></ul>";
										}else{
											echo "<ul class='navbar-right'>";
											echo "	<div style='margin-top:10px;'>
												<div class=dropdown'><div class='btn-group'><button class='btn' style='background-color:white; color:black;'>{$myuser}</button><button class='btn dropdown-toggle' style='background-color:lightgray;' data-toggle='dropdown' ><span class='sr-only'>Click Me </span><span class='caret'></span></button><div class='dropdown-menu' role='menu' style='background-color:#f1f1f1;'><li class='dropdown-item'><a href='/capstoneProject/public/pages/userStore.php'><i>MY STORE</i></a></li><li class='dropdown-item'><a href='/capstoneProject/public/pages/userOder.php'><i>MY ORDER</i></a></li><li class='dropdown-item'><a href='/capstoneProject/public/pages/userProfile.php'><i>EDIT PROFILE</i></a></li><div class='divider'></div><li class='dropdown-item'><i style='cursor:pointer;'><a href='/capstoneProject/public/include/sessionDestroy.php' style='color:black; margin-left:5px;'>LOGOUT</a></i></li></div></div> </div></div></ul>";
										}
										?>
									   
									 
									</div>
								</div>
								</div> <!--  -->
							</div>

							<!-- ......................... -->

							<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header" style="background-color:; color:black;">
						        <h3 class="modal-title text-center" id="exampleModalLabel">LOGIN</h2>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true" style="color:red;">&times;</span>
						        </button>
						      </div>

						      <div class="modal-body" style="background-color:\lightgray;">
						    	<div class="row">
						    		<div class="col-xs-8 col-xs-offset-2">
						    			<form action="#" method="POST">
						    			<div class="form-group">
						    				<input type="text" class="form-control input-lg" name="user" id="user" placeholder="USER NAME" required>
						    			</div>
						    			<div class="form-group">
						    				<input type="password" class="form-control input-lg" name="pws" id="pws" placeholder="USER PASSWORD" required>
						    			</div>
						    			<div class="form-group">
						    				<input type="submit" name="usersub" value="LOGIN">
						    			</div>
						    			<p>IF YOU DON'T HAVE AN ACCOUNT PLEASE SIGNUP <a class="btn btn-link" href="/capstoneProject/public/pages/clientSignup.php"><b>HERE</b></a></p>
						    		</form>
						    		</div>
						    	</div>
						      </div>
						    </div>
						  </div>
						</div>
							
							<!-- ........................ -->
		</div>