<?php
	session_start();

	if(isset($_SESSION['email'])){
		echo "";
	}else{
		header('location: ../index.php');
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>NITC Admin</title>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width , initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style1.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

		
</head>
<body>

<!-- bg-primary , bg-success , bg-warning , bg-info  and bg-danger  bg-light bg-dark -->
	<nav class="navbar navbar-expand-md  navbar-dark bg-primary sticky-top">

		<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="collapse_target">
			<a class="navbar-brand"><img src="../images/nitclogo.png"></a>

			<!--span class="navbar-text">Sanjeet Kumar</span-->
			<div class="ml-auto">
			<ul class="navbar-nav">
				<!--li class="nav-item dropdown">
					<a  class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
						Dropdown
						<span class="caret"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown-target">
						<ul class="navbar-nav">
						<a href="" class="dropdown-item">PHP Video</a>
						<div class="dropdown-divider"></div>
						<a href="" class="dropdown-item">CSS Video</a>
						<a href="" class="dropdown-item">Bootstrap Video</a>
					</ul>
					</div>
				</li-->
				<li class="nav-item active">
					<a href="dashboard.php" class="nav-link">HOME</a>
				</li>
				
				<li class="nav-item active">
					<a href="addDoctor.php" class="nav-link">ADD_DOCTOR</a>
				</li>
				<li class="nav-item active">
					<a href="addStaff.php" class="nav-link">ADD_STAFF</a>
				</li>
				<li class="nav-item active">
					<a href="editStaff.php" class="nav-link">EDIT_STAFF</a>
				</li>
				<li class="nav-item active">
					<a href="editDoctor.php" class="nav-link">EDIT_DOCTOR</a>
				</li>

				<li class="nav-item dropdown">
					<a  class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="dropdown_target" href="#">
						Detail
						<span class="caret"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown-target">
						
							<a href="allMedicine.php" class="dropdown-item">All Medicine</a>
							<div class="dropdown-divider"></div>
							<a href="allStaff.php" class="dropdown-item">All Staff</a>
							<div class="dropdown-divider"></div>
							<a href="allDoctor.php" class="dropdown-item">All Doctor</a>
							
						
					</div>
				</li-->

				<!--li class="nav-item dropdown">
					<a  class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="dropdown1_target" href="#">
						MEDICINE
						<span class="caret"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown1-target">
						
							<a href="registerMedicine.php" class="dropdown-item">Register</a>
							<!--div class="dropdown-divider"></div>
							<a href="registration.php" class="dropdown-item">Deliver Medicine</a-->
							<!--div class="dropdown-divider"></div>
							<a href="allMedicine.php" class="dropdown-item">All Medicine</a>
						
					</div>
				</li-->


				<li class="nav-item dropdown">
					<a  class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="dropdown2_target" href="#">
						<?php echo $_SESSION['email'];?>
						<span class="caret"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown2-target">
						
							<a href="../logout.php" class="dropdown-item">Logout</a>
							<div class="dropdown-divider"></div>						
					</div>
				</li>


			</ul>
		</div>
		</div>
	</nav>






	<div class="container-fluid form-color bod">
	    
			<h1 align="center">All Medicine Detail</h1>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
						<div class="reg">
							<table class="table table-bordered table-responsive" id="val">
								<tr>
								    <th>No</th>
									<th>Medicine Name</th>
							   		<th>Company</th>
							   		<th>Quantity</th>
							   		<th>Date Of Manufacturing</th>
							   		<th>Date Of Expiry</th>
								</tr>
							<?php 

							   			include('../dbcon.php');

							   			$qry = "SELECT * FROM `medicine`";

							   			$run = mysqli_query($con,$qry);

							   			if(mysqli_num_rows($run)  > 0){
							   					$count = 0;
							   				while($data = mysqli_fetch_assoc($run)){
							   					$count++;
							   					if($data['quantity'] < 6){
							   					    ?>
							   					<tr style="background-color: red;">
							   						<td><?php echo $count; ?></td>
								   					<td><?php echo $data['med_name']?></td>
											   		<td><?php echo $data['company']?></td>
											   		<td><?php echo $data['quantity']?></td>
											   		<td><?php echo $data['d_o_m']?></td>
											   		<td><?php echo $data['d_o_e']?></td>
										   		</tr>
										   		<?php
							   					}else{
							   					    ?>
							   					<tr>
							   						<td><?php echo $count; ?></td>
								   					<td><?php echo $data['med_name']?></td>
											   		<td><?php echo $data['company']?></td>
											   		<td><?php echo $data['quantity']?></td>
											   		<td><?php echo $data['d_o_m']?></td>
											   		<td><?php echo $data['d_o_e']?></td>
										   		</tr>
										   		<?php
							   					}
							   				}
							   				
							   			}else{
							   			echo "<tr><td colspan='10'>NO REcord Found</td></tr>";
							   			}
							   		?>
							</table>
						</div>
				</div>
				<div class="col-sm-3"></div>
			</div>

		</div>


<footer class="page-footer font-small foot sticky-bottom">
  <div class="container text-center text-md-left">
    <div class="row">
    	<div class="left-contacts col-md-4 extra-margin-top">
					<h3 class="main-heading">
					NITC Health Centre
					</h3>
					<h5 class="sub-heading">
					0495 228 6652<br>
					Kozhikode<br>
					Kerala-673601
					</h5>
		</div>
		<div class="contacts col-md-4 extra-margin-top text-center">
					<h3 class="main-heading">
					Emergency Contact Numbers
					</h3>
					<h5 class="sub-heading">
					Ambulance: 91495 228 6661<br>
					RMO: +91 81298 42256<br>
					</h5>
		</div>
		<div class="right-contacts col-md-4 extra-margin-top">
					<h3 class="heading">
					Our Hours
					</h3>
					<h5 class="sub-heading">
					RMO: 9 am to 12:30 pm<br>
					4 pm to 5:30 pm<br>
					LMO: 10 am to 3 pm
					</h5>
		</div>

     </div>
  </div>
	  <div class="footer-copyright text-center py-3">© 2020 Copyright: © National Institute of Technology Calicut
	    <a href="#"> © National Institute of Technology Calicut</a>
	  </div>
</footer>
<!-- Footer -->


</body>
</html>