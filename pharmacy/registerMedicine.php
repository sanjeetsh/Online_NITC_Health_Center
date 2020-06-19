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
	<div class="container-fluid form-color bod">
	    
			<h1 align="center">Register Medicine</h1>
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-9">
					<form class="form-horizontal navbar-expand-md reg" method="post" action="registerMedicine.php" enctype="multipart/form-data">
							<!--div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Name</label>
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" id="name" placeholder="enter ur name" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div-->

							<!--div class="form-group row">
								<label class="control-label col-sm-4" for="fname">College Id</label>
								<div class="col-sm-6">
									<input type="text" name="id" class="form-control" id="id" placeholder="Enter your college Id" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
								</div>
							</div-->

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

							<table class="table table-bordered table-responsive" id="val">
								<tr>
									<th>#</th>
									<th>Medicine Name</th>
									<th>Company</th>
									<th>Quantity</th>
									<th>Date_Of_Manufacture</th>
									<th>Date_Of_Expiry</th>
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
							</p>

							<div class="form-group row ">
								<div class="col text-center">
									<button type="submit" name = "submit" class="btn btn-primary" >Submit</button>
									<!--button type="reset" class="btn btn-primary" >Reset</button-->
								</div>
							</div>

						</form>
				</div>
				<div class="col-sm-2"></div>
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


		var items = 0;
		

		function addItem(){
			items++;
			var html  = "<tr>";
				html += "<td>" + items + "</td>";
				html +="<td><input name='med_name[]' type='text'></td>";
				html +="<td><input name='company[]' type='text'></td>";
				html +="<td><input name='quantity[]' type='number'></td>";
				html +="<td><input name='d_o_m[]' type='date'></td>";
				html +="<td><input name='d_o_e[]' type='date'></td>";
			html +="</tr>";

			document.getElementById("tbody").insertRow().innerHTML = html;
		}
		function deleteRow(row) {
		  //var i = row.parentNode.parentNode.rowIndex;
		  	if(items > 0){
			  console.log(items);
			  document.getElementById('val').deleteRow(items);
			  items--;
			}
		}
	</script>


<?php

	//$id = $_POST['id'];
	if(isset($_POST['submit'])){
		include('../dbcon.php');
		//$roll = $_POST['id'];

		for($a = 0 ; $a < count($_POST['med_name']); $a++){
			$sql = "INSERT INTO `medicine` (`med_name`,`company` , `quantity` , `d_o_m` , `d_o_e`) VALUES ('" . $_POST['med_name'][$a] ."' , '" . $_POST['company'][$a] ."' , '" . $_POST['quantity'][$a] ."' , '" . $_POST['d_o_m'][$a] . "' , '" . $_POST['d_o_e'][$a] ."')";
			$run = mysqli_query($con , $sql);

			if($run == true){
				?>
				<script> alert('data successfully submited');</script>
				<?php
			}else{
				?>
				<script> alert('data unsuccessfully submited');</script>
				<?php
			}
		}
	}

?>


</body>
</html>