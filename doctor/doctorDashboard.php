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
	<title>NITC Doctor</title>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width , initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style1.css">
    <script src="../validation.js"></script>
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
				<!--li class="nav-item active">
					<a href="pharmacyDashboard.php" class="nav-link">HOME</a>
				</li>

				<li class="nav-item dropdown">
					<a  class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="dropdown_target" href="#">
						PATIENT
						<span class="caret"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown-target">
						
							<a href="patientRegister.php" class="dropdown-item">Register</a>
							<div class="dropdown-divider"></div>
							<a href="edit_deletePatient.php" class="dropdown-item">Update</a>
						
					</div>
				</li>

				<li class="nav-item dropdown">
					<a  class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="dropdown1_target" href="#">
						MEDICINE
						<span class="caret"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown1-target">
						
							<a href="registerMedicine.php" class="dropdown-item">Register</a>
							<div class="dropdown-divider"></div>
							<a href="registration.php" class="dropdown-item">Update</a>
						
					</div>
				</li>


				<li class="nav-item dropdown">
					<a  class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="dropdown2_target" href="#">
						<?php //echo $_SESSION['email'];?>
						<span class="caret"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown2-target">
						
							<a href="../logout.php" class="dropdown-item">Logout</a>
							<div class="dropdown-divider"></div>						
					</div>
				</li-->

				<!--li class="nav-item active">
					<a href="register.php" class="nav-link">Register</a>
				</li-->
				<!--li class="nav-item active">
					<a href="registerMedicine.php" class="nav-link">RegisterMedicine</a>
				</li>
				<li class="nav-item active">
					<a href="updateMedicine.php" class="nav-link">UpdateMedicine</a>
				</li-->
				<!--li class="nav-item active">
					<a href="editPatientDetail.php" class="nav-link">EditPatient</a>
				</li-->
				<li class="nav-item active">
					<a href="doctorDashboard.php" class="nav-link">Home</a>
				</li>
				<li class="nav-item active">
					<a href="../logout.php" class="nav-link">Logout</a>
				</li>
				<li class="nav-item active">
						<a class="nav-link" href="#"><?php echo $_SESSION['email']; ?></a>
					</li-->

			</ul>
		</div>
		</div>
	</nav>






	<div class="container-fluid form-color bod">
			<h1 align="center">Patient Counselling by Doctor</h1>
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					<form class="form-horizontal navbar-expand-md reg" method="post" onsubmit="return validation();" action="doctorDashboard.php" enctype="multipart/form-data">
							<!--div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Name</label>
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" id="name" placeholder="enter ur name" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div-->

							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">College Id</label>
								<div class="col-sm-6">
									<input type="text" name="id" class="form-control" id="id" placeholder="Enter your college Id" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;" onblur="checkRollNo()">
									<span id="ierror" class="text-danger font-weight-bold"></span>
								</div>
							</div>

							<!--div class="form-group row">
								<label class="control-label col-sm-4" for="fname">PhoneNumber</label>
								<div class="col-sm-6">
									<input type="number" name="phone" class="form-control" id="phone" placeholder="Enter your valid phone number" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div>


							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">BloodGroup</label>
								<div class="col-sm-6">
									<input type="text" name="blood" class="form-control" id="blood" placeholder="Enter your BloodGroup" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div>


							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">DOB</label>
								<div class="col-sm-6">
									<input type="date" name="dob" class="form-control" id="dob" placeholder="DOB" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div>

							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Address</label>
								<div class="col-sm-6">
									<input type="text" name="address" class="form-control" id="address" placeholder="Enter your Address" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div>


							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Email</label>
								<div class="col-sm-6">
									<input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div-->


							<!--div class="form-group row">
								<label class="control-label col-sm-4" for="gen">Gender</label>
								<div class="col-sm-2">
									Male : <input type="radio" name="mal" id="mal">
								</div>
									
								<div class="col-sm-2">
									Female : <input type="radio" name="mal" id="mal">
								</div>

								<div class="col-sm-2">
									Others : <input type="radio" name="mal" id="mal">
								</div>
							</div-->

							<!--div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Image</label>
								<div class="col-sm-6">
									
									<input type="file" name="simg" class="form-control" id="simg" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div-->

							<!--table class="table" id="val">
								<tr>
									<th>#</th>
									<th>Medicine Name</th>
									<th>Quantity</th>
								</tr>
								<tbody id="tbody"></tbody>
							</table>

							<p>
								<button type="button" class="btn btn-primary" onclick="addItem();">
								Add Medicine Row
								</button>
								<button type="button" class="btn btn-primary" onclick="deleteRow(this);">
								Delete Row
								</button>
							</p-->

							<div class="form-group row ">
								<div class="col text-center">
									<button type="submit" name="submit" class="btn btn-primary" >Submit</button>
									<!--button type="reset" class="btn btn-primary" >Reset</button-->
								</div>
							</div>

						</form>


						<?php 

							if(isset($_POST['submit'])){
								$pid = $_POST['id'];

								include('../dbcon.php');
								$email = $_SESSION['email'];
								$qry = "SELECT d_id FROM `doctor` WHERE `email` = '$email'";
								$run = mysqli_query($con , $qry);
								if (!$run) {
								    echo 'Could not run query: ' . mysql_error();
								    exit;
								}else{
									$row = mysqli_fetch_row($run);
									$userid = $row[0];
    								include('function.php');
    								showdetails($pid);
    								include('detailPatientMedicine.php');
    								include('visitingPatient.php');
								}
							}

						?>


						<!--div class="reg">
							<table class="table table-bordered table-responsive" id="val">
								<tr>
									<th>NO</th>
							   		<th>COLLEGE ID</th>
							   		<th>NAME</th>
							   		<th>DOB</th>
							   		<th>BLOOD GROUP</th>
							   		<th>ADDRESS</th>
							   		<th>MOBILE</th>
							   		<th>EMAIL</th>
							   		<th>IMAGE</th>
							   		<th>EDIT</th>
							   		<th>DELETE</th>
								</tr>
							<?php
							   		/*if(isset($_SESSION['email']) && isset($_POST['submit'])){  

							   			include('../dbcon.php');

							   			$rol = $_POST['id'];


							   			$qry = "SELECT * FROM `patient` WHERE `p_id` LIKE '%$rol%'";

							   			$run = mysqli_query($con,$qry);

							   			if(mysqli_num_rows($run)  > 0){
							   					$count = 0;
							   				while($data = mysqli_fetch_assoc($run)){
							   					$count++;
							   					?>
							   					<tr>
							   						<td><?php echo $count; ?></td>
								   					<td><?php echo $data['p_id']?></td>
											   		<td><?php echo $data['name']?></td>
											   		<td><?php echo $data['dob']?></td>
											   		<td><?php echo $data['blood_group']?></td>
											   		<td><?php echo $data['address']?></td>
											   		<td><?php echo $data['mobile_no']?></td>
											   		<td><?php echo $data['email']?></td>
											   		<td><img src="../dataimg/<?php echo $data['image']?>" style="max-width: 100px;"></td>
											   		<td><a href="update.php?pid=<?php echo $data['p_id']?>">Edit</a></td>
											   		<td><a href="delete.php?pid=<?php echo $data['p_id']?>">Delete</a></td>
										   		</tr>
										   		<?php
							   				}
							   			}else{
							   			echo "<tr><td colspan='10'>NO REcord Found</td></tr>";
							   			}
							   		}*/
							   		?>
							</table>
						</div-->
				</div>
				<div class="col-sm-1"></div>
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


<script type="text/javascript">
		

		function validation(){

			var id = document.getElementById('id').value;
			if(id == ""){
				document.getElementById('ierror').innerHTML =" ** Please fill College Id field";
				return false;
			}else {
			    document.getElementById('ierror').innerHTML ="";
			}
		}
</script>




</body>
</html>