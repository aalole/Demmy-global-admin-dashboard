<!DOCTYPE html>
<html>
<head>
	<title>Demy Dashboard</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<script  src="jquery-3.3.1.min.js"></script>
	<script  src="bootstrap-3.3.7/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="glo_generate.css">
</head>
<body>
	<!-- <div class="container-fluid"> -->
		<div class="header">
			<img src="images/demy_logo.png" class="img-responsive" width="300px" height="300px">
		</div>
<!-- Side nav -->
		<div class="cont">
			<div class="topnav" id="myTopnav">
						<a href="javascript:void(0);" class="icon" onclick="myFunction()">
					    	<i class="fa fa-bars"></i>
					  	</a>
					  
						  <a href="#home" <span style="padding-right:9px;"><i class="fa fa-dashboard" ></i></span>Dashboard</a>
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
						  	<i class="fa fa-shopping-cart" style="margin-left:2px;"></i>Generate Glo Recharge</a>
						  		<hr class="responsive">
						  <a href="#">
						  	<i class="fa fa-shopping-cart"style="margin-left:2px;"></i>Generate MTN Recharg
						  	e</a><hr class="responsive">
						  <a href="#about"><i class="fa fa-laptop" style="margin-left:2px;" ></i>Recharge Card Report</a><hr class="responsive">
						  <a href="#about"><i class="fa fa-print" style="margin-left:2px;" ></i>Reprint Cards</a><hr class="responsive">
						  <a href="#about">Query Records</a><hr class="responsive">
						  <a href="dashboard_user.php"><i class="fa fa-user" style="margin-left:2px;" ></i>Admin Users</a>
					  </span>
			 <!--  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
			    <i class="fa fa-bars">Menu</i> -->
			 
			</div>
			<!-- End of Side nav -->
			<!-- body section -->
			<div class="container">

			<div class="row">
				<div class="col-sm-6">
					<h1 style="color:#02576c;">Glo Card Generation Portal</h1>

					</div>
					<div class="col-sm-6">
						<button class="btn button" data-toggle="modal" data-target="#myModal" style="background-color:#ffc837;"><i class="glyphicon glyphicon-eye-open" style="float:left;"></i>View Report</button>
						<!-- <button type="button" class="btn btn-primary button" data-toggle="modal" data-target="#myModal">View Report</button> -->
					</div>


					
			</div>	
			<!-- modal for view -->

	<div class="modal fade" id="myModal" role="dialog" style="height:900px;">
    	<div class="modal-dialog">
    
      <!-- Modal content-->
      	<div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><h3><center>Recharge Card Generation Report</center></h3></h4>
        </div>
        <div class="modal-gen-cont" style="margin-left:20px;">			
				<!-- <div class="container"> -->
	
		
			<div class="dashUser-cont">
				<div class="top-dashUser-cont"><h4 style="color:black; margin-top:15px;">Card Printing Report</h4><label>&times;</label></div>
				<div class="row">
					<div class="col-sm-6" style="display:inline;">
				        <form class="form-inline" role="form">

						<label>Show </label><div class="input-group">
				         <select class="form-control" style="margin-top:5px;">
				         <option>100</option>
				         <option>200</option>
				         <option>300</option>
				         </select>
				         </div> <label>Entries</label>
				         </form>
				      
					</div>
					<div class="col-sm-6" style="display:inline;">
					<form class="form-inline" role="form">

						<label>Search:<input type="text" class="form-control" id="input" placeholder="Any random number" style="margin-top:3px;"></label>
					</form>
					</div>
				</div>
				<table class="table table-striped table-bordered glo-table" style="margin-left:10px;">
 					<caption></caption>
				   <thead>
				      <tr>
				         <th>S/N</th>
				         <th>Authorized User</th>
				         <th>Denomination</th>
				         <th>Quantity</th>
				         <th>Reference Number</th>
				         <th>Date of Transaction</th>
				        
				      </tr>
				   </thead>
				   <tbody>
				      <tr>
				         <td>1</td>
				         <td>Bangalore</td>
				         <td>560001</td>
				         <td>Bangalore</td>
				         <td>Bangalore</td>
				         <td>560001</td>
				         
				     
				      </tr>
				      <tr>
				         <td>2</td>
				         <td>Mumbai</td>
				         <td>400003</td>
				         <td>560001</td>
				         <td>Bangalore</td>
				         <td>560001</td>
				         
				      </tr>
				    
				   </tbody>
				</table>
			</div>
			<!-- </div> -->
			</div>
			</div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
			<!-- end of modal code -->
			<hr style="color:red;" class="hr">
			<div class="gen-cont">
				<div class="top-gen-cont"><h3 style="color:white; margin-top:0px;"><center>Generate Card</center></h3></div>
				<div style="padding: 30px 30px 10px;">
				   <form class="bs-example bs-example-form" role="form">
				      <div class="input-group input">
				         <span class="input-group-addon">Denum in #</span>
				         <select class="form-control input">
				         <option>100</option>
				         <option>200</option>
				         <option>300</option>
				         </select>
				      </div><br>

				      <div class="input-group input">
				         <span class="input-group-addon">Quantity</span>
				         <input type="text" class="form-control input" placeholder="min:100-max:100">
				      </div><br>

				      <div class="input-group input">
				         <span class="input-group-addon">Ref. No:</span>
				         <input type="text" class="form-control input" placeholder="Any random number">
				      </div><br>
				      
				      <center><button class="btn btn-success btn-generate" style="margin-left:50px;">Generate</button></center>

				   </form>
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