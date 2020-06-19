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
	<title>NITC Pharmacy</title>
	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width , initial-scale=1.0">
	<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script-->
    
    
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
					<a href="deliverMedicine-Patient.php" class="nav-link">HOME</a>
				</li>
				
				<li class="nav-item active">
					<a href="addStaff.php" class="nav-link">ADD_STAFF</a>
				</li>
				
				<li class="nav-item active">
					<a href="addDoctor.php" class="nav-link">ADD_DOCTOR</a>
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
							<div class="dropdown-divider"></div>
							<a href="allPatient.php" class="dropdown-item">All Patient</a>
						
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
							<a href="updateMedicine.php" class="dropdown-item">Update Medicine</a>
							<div class="dropdown-divider"></div>
							<a href="allMedicine.php" class="dropdown-item">All Medicine</a>
						
					</div>
				</li>


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
				</li>
				<li class="nav-item active">
					<a href="deletePatient.php" class="nav-link">DeletePatient</a>
				</li-->
				<!--li class="nav-item active">
					<a href="../logout.php" class="nav-link">Logout</a>
				</li>
				<li class="nav-item active">
						<a class="nav-link" href="#">sanjee@gmail.com</a>
					</li-->

			</ul>
		</div>
		</div>
	</nav>


   <?php 
   		include('../dbcon.php');

   		$pid = $_GET['pid'];

   		$qry = "SELECT * FROM `patient` WHERE `p_id` = '$pid'";

   		$run = mysqli_query($con,$qry);

   		$data = mysqli_fetch_assoc($run);
   ?>



   <!--div>
			<H1 id="heading">UPDATE OF PATIENT</H1>
			<form method="post" action="updatedata.php" enctype="multipart/form-data" align="center">
				Name<input type="text" name="name" value="<?php //echo $data['name'] ?>"> <br>
				CollegeId<input type="text" name="pid" value="<?php //echo $data['p_id'] ?>"><br>
				PhoneNumber<input type="number" name="phone" value="<?php //echo $data['mobile_no'] ?>"><br>
				BloodGroup<input type="text" name="blood" value="<?php //echo $data['blood_group'] ?>"><br>
				dob<input type="date" name="dob" value="<?php //echo $data['dob'] ?>"><br>
				address<input type="text" name="address" value="<?php //echo $data['address'] ?>"><br>
				email<input type="email" name="email" value="<?php //echo $data['email'] ?>"><br>
				image<input type="file" name="simg"><br>

				<input type="hidden" name="pid" value="<?php //echo $data['p_id']?>">

				<input type="submit" name="submit"> <input type="Reset" name="Reset">
			</form>
		</div-->

	<div class="container-fluid form-color bod">
	    
			<h1 align="center">Update Form Of Patient</h1>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<form class="form-horizontal navbar-expand-md reg" method="post" action="updatedata.php" enctype="multipart/form-data">
							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Name</label>
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" id="name" value="<?php echo $data['name'] ?>" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div>

							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">College Id</label>
								<div class="col-sm-6">
									<input type="text" name="id" class="form-control" id="id" value="<?php echo $data['p_id'] ?>" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div>

							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">PhoneNumber</label>
								<div class="col-sm-6">
									<input type="number" name="phone" class="form-control" id="phone" value="<?php echo $data['mobile_no'] ?>" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div>


							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">BloodGroup</label>
								<div class="col-sm-6">
									<input type="text" name="blood" class="form-control" id="blood" value="<?php echo $data['blood_group'] ?>" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div>


							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">DOB</label>
								<div class="col-sm-6">
									<input type="date" name="dob" class="form-control" id="dob" value="<?php echo $data['dob'] ?>" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div>

							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Address</label>
								<div class="col-sm-6">
									<input type="text" name="address" class="form-control" id="address" value="<?php echo $data['address'] ?>" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div>


							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Email</label>
								<div class="col-sm-6">
									<input type="email" name="email" class="form-control" id="email" value="<?php echo $data['email'] ?>" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div>


							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Image</label>
								<div class="col-sm-6">
									
									<input type="file" name="simg" class="form-control" id="simg" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div>

							<div class="form-group row ">
								<div class="col text-center">
									<button type="submit" name="submit" class="btn btn-primary" >Submit</button>
									<button type="reset" name="reset" class="btn btn-primary" >Reset</button>
								</div>
							</div>

						</form>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>


</body>
</html>
