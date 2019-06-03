<!DOCTYPE html>
<html>
<head>
	<title>Demy Dashboard</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	
	<script  src="jquery-3.3.1.min.js"></script>
	<script  src="bootstrap-3.3.7/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>
	<!-- <div class="container-fluid"> -->
		<div class="header">
			<img src="images/demy_logo.png" class="img-responsive" width="300px" height="300px">
		</div>

		<div class="cont">
			<div class="topnav" id="myTopnav">
						<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					    	<i class="fa fa-bars"></i>
					  	</a>
					  		<br><br>
						   <a href="#news">
						  	<i class="fa fa-dashboard" ></i>Dash board
						  </a>
						  <hr>

						  <a href="#news">
						  	<i class="fa fa-users" ></i>Customers
						  </a>
						  	<hr class="responsive">
						  <a href="#contact">Manage Referral</a>
						  	<hr class="responsive">
						  <a href="#about">Manage Network</a>
						  	<hr class="responsive">
						  <a href="wallet.php">Manage wallet</a><hr class="responsive">
						  <a href="glo_generate.php">
						  	<i class="fa fa-shopping-cart" ></i>Generate Glo Recharge</a>
						  		<hr class="responsive">
						  <a href="#about">
						  	<i class="fa fa-shopping-cart"style="margin-left:2px;"></i>Generate MTN Recharg
						  	e</a><hr class="responsive">
						  <a href="#about"><i class="fa fa-laptop" style="margin-left:2px;" ></i>Recharge Card Report</a><hr class="responsive">
						  <a href="#about"><i class="fa fa-print" style="margin-left:2px;" ></i>Reprint Cards</a><hr class="responsive">
						  <a href="#about">Query Records</a><hr class="responsive">
						  <a href="dashboard_user.php"><i class="fa fa-user" style="margin-left:2px;" ></i>Admin Users</a>
						  <a href="#about"><i class="fa fa-laptop" style="margin-left:2px;" ></i>Monthly Report</a><hr class="responsive">
						  <a href="#about"><i class="glyphicon glyphicon-log-out" style="margin-left:2px;" ></i>Logout</a>
					  
			 <!--  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
			    <i class="fa fa-bars">Menu</i> -->
			 
			</div>
			<!-- body section -->
			<div class="container">

			<div class="row">
				<div class="col-sm-6">
					<h1 style="#103c42;">Dash Board: Users</h1>

				</div>
						<div class="col-sm-6">
							<button type="button" class="btn btn-primary button" data-toggle="modal" data-target="#myModal">Add User</button>

						</div>
			</div>


  <!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog" style="height:900px;">
				<div class="modal-dialog">
				    
				      <!-- Modal content-->
				    <div class="modal-content">
				        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Add New Admin</h4>
				        </div>
				        <div class="modal-gen-cont">
								<!-- <div class="modal-top-gen-cont"><h3 style="color:white;"> --><h3><center>Enter Credentials</center></h3><!-- </div> -->
								<div style="padding: 30px 30px 10px;">
								   <form class="bs-example bs-example-form" role="form">
								      <div class="input-group input">
								         <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
								         <input type="text" class="form-control input" placeholder="Enter Full Name">
								      </div><br>

								      <div class="input-group input">
								         <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
								         <input type="email" class="form-control input" placeholder="Enter Email Address">
								      </div><br>
								      <div class="input-group input">
								         <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
								         <input type="email" class="form-control input" placeholder="Enter Phone Number">
								      </div><br>

								      <div class="input-group input">
								         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								         <input type="password" class="form-control input" placeholder="Enter password">
								      </div><br>
								     <center> <button class="btn btn-success btn-generate">Create Account</button></center>

								   </form>
								</div>
						</div>
					</div>
				        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  
			<!-- </div>	 -->
			<hr style="color:red;" class="hr">
			<div class="dashUser-cont">
				<div class="top-dashUser-cont"><h4 style="color:black; margin:15px; margin-top:0px;">User Details</h4></div>
				<div class="row">
					<!-- <div class="col-sm-6" style="display:inline;"> -->
				        <form class="form-inline" role="form" style="float:left;">

						<span style="margin-left:27px;"><label >Show </label><div class="input-group"></div>
				         <select class="form-control" style="margin-top:5px;">
				         <option>100</option>
				         <option>200</option>
				         <option>300</option>
				         </select>
				        <label>Entries</label></span>
				         </form>
				      
					<!-- </div> -->
					<!-- <div class="col-sm-6" style="display:inline;"> -->
					<form class="form-inline" role="form" style="float:right;">
					<br>
						<label>Search:<input type="text" class="form-control" id="input" placeholder="Any random number"></label>
					</form>
					</div>
				<!-- </div> -->
				<table class="table table-striped table-bordered ">
 					<caption></caption>
				   <thead>
				      <tr>
				         <th>S/N</th>
				         <th>FullName</th>
				         <th>Phone Number</th>
				         <th>Email</th>
				         <th>Address</th>
				         <th>Privilege</th>
				         <th>Date of Reg</th>
				      </tr>
				   </thead>
				   <tbody>
				      <tr>
				         <td>Tanmay</td>
				         <td>Bangalore</td>
				         <td>560001</td>
				         <td>Bangalore</td>
				         <td>560001</td>
				         <td>Bangalore</td>
				         <td>560001</td>
				      </tr>
				      <tr>
				         <td>Sachin</td>
				         <td>Mumbai</td>
				         <td>400003</td>
				         <td>560001</td>
				         <td>Bangalore</td>
				         <td>560001</td>
				         <td>Bangalore</td>
				        
				      </tr>
				    
				   </tbody>
				</table>
			</div>
			</div>

			</div>

		<script>
		function myFunction() {
		  var x = document.getElementById("myTopnav");
		  // var y = document.getElementById("display");
		  if (x.className === "topnav") {
		    x.className += " responsive";
		    // y.className.display="none";

		  } else {
		    x.className = "topnav";
		  }
		}
		</script>
	<!-- </div> -->
</body>
</html>