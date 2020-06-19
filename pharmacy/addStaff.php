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
	    
			<h1 align="center">Staff Registration Form</h1>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<form class="form-horizontal navbar-expand-md reg" onsubmit = "return validation();" method="POST" action="addStaff.php" enctype="multipart/form-data">
							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Name</label>
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" id="name" placeholder="enter ur name" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;" onblur="checkName()">
									<span id="nerror" class="text-danger font-weight-bold"></span>

								</div>
							</div>


							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">PhoneNumber</label>
								<div class="col-sm-6">
									<input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your valid phone number" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;" onblur="checkPhone()">
									<span id="perror" class="text-danger font-weight-bold"> </span>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">AadharNumber</label>
								<div class="col-sm-6">
									<input type="text" name="adhar" class="form-control" id="adhar" placeholder="Enter your valid phone number" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;" onblur="checkAdhar()">
									<span id="aderror" class="text-danger font-weight-bold"> </span>
								</div>
							</div>


							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">DOJ</label>
								<div class="col-sm-6">
									<input type="date" name="doj" class="form-control" id="doj" placeholder="DOJ" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
									<span id="derror" class="text-danger font-weight-bold"> </span>
								</div>
								
							</div>

							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Address</label>
								<div class="col-sm-6">
									<input type="text" name="address" class="form-control" id="address" placeholder="Enter your Address" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;" onblur="checkAddress()">
									<span id="aerror" class="text-danger font-weight-bold"> </span>
								</div>
							</div>


							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Email</label>
								<div class="col-sm-6">
									<input type="text" name="email" class="form-control" id="email" placeholder="Enter your email" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;" onblur="checkEmail()">
									<span id="eerror" class="text-danger font-weight-bold"> </span>
								</div>
							</div>
							


							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Image</label>
								<div class="col-sm-6">
									
									<input type="file" name="simg" class="form-control" id="simg" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
									<span id="serror" class="text-danger font-weight-bold"> </span>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Password</label>
								<div class="col-sm-6">
									
									<input type="password" name="pass" class="form-control" id="pass" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;" onblur="checkPassword()">
									<span id="paerror" class="text-danger font-weight-bold"> </span>
								</div>
							</div>
							
							<!--div class="form-group row">
								<label class="control-label col-sm-4" for="fname">Confirm Password</label>
								<div class="col-sm-6">
									
									<input type="password" name="conpass" class="form-control" id="conpass" STYLE="color: black; font-family: Verdana; font-weight: bold; font-size: 12px; background-color: #d6dfd6;">
									<span id="cerror" class="text-danger font-weight-bold"> </span>
								</div>
							</div-->

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


<footer class="page-footer font-small foot">
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

			var name = document.getElementById('name').value;
			var pass = document.getElementById('pass').value;
			//var conpass = document.getElementById('conpass').value;
			var phone = document.getElementById('phone').value;
			var adhar = document.getElementById('adhar').value;
			var doj = document.getElementById('doj').value;
			var address = document.getElementById('address').value;
			var email = document.getElementById('email').value;
			var simg = document.getElementById('simg').value;
		




			if(name == ""){
				document.getElementById('nerror').innerHTML =" ** Please fill the Name field";
				return false;
			}else {
			    document.getElementById('nerror').innerHTML ="";
			}


			if(phone == ""){
				document.getElementById('perror').innerHTML =" ** Please fill the mobile Number field";
				return false;
			}else{
			    document.getElementById('perror').innerHTML ="";
			}
			
			
			if(adhar == ""){
				document.getElementById('aderror').innerHTML =" ** Please fill the Adhar Number field";
				return false;
			}else{
			    document.getElementById('aderror').innerHTML ="";
			}
			
			
			if(doj == ""){
				document.getElementById('derror').innerHTML =" ** Please fill the dob field";
				return false;
			}else{
			    document.getElementById('derror').innerHTML ="";
			}
			
			
			if(address == ""){
				document.getElementById('aerror').innerHTML =" ** Please fill the address field";
				return false;
			}else{
			    document.getElementById('aerror').innerHTML ="";
			}
			
			
			if(email == ""){
				document.getElementById('eerror').innerHTML =" ** Please fill the email id` field";
				return false;
			}else{
			    document.getElementById('eerror').innerHTML ="";
			}
			
			
			
			if(simg == ""){
				document.getElementById('serror').innerHTML =" ** Please fill the image` field";
				return false;
			}else{
			    document.getElementById('serror').innerHTML ="";
			}
			
			if(pass == ""){
				document.getElementById('paerror').innerHTML =" ** Please fill the password field";
				return false;
			}else{
			    document.getElementById('paerror').innerHTML ="";
			}			
			
		}

	</script>


</body>
</html>

<?php

	if(isset($_POST['submit'])){
	    	?>
			<script> alert('I am entering the submititng page!');</script>
			<?php

		include('../dbcon.php');
		//include('/storage/ssd4/762/13928762/public_html/../dbcon.php');
		
		//$sid = $_POST['id'];
		$name = $_POST['name'];
		$doc = substr($name, 0, 3);
		$fourRandomDigit = mt_rand(1000,9999);
		$yr = date("d");
		$val = "Staff";
		$sid = $doc.$val.$yr.$fourRandomDigit;
		$pass = $_POST['pass'];
		$doj = $_POST['doj'];
		$adhar = $_POST['adhar'];
		$address = $_POST['address'];
		$mobile = $_POST['phone'];
		$email = $_POST['email'];
		$imagename = $_FILES['simg']['name'];
		$tempname = $_FILES['simg']['tmp_name'];

		//echo $pid;
		move_uploaded_file($tempname , "../dataimg/$imagename");

		$qry = "INSERT INTO `staff` (`s_id` , `name` , `mobile` , `address` , `img` , `adhar` , `jdate` , `email` , `pass`) VALUES ('$sid' , '$name' , '$mobile' , '$address' , '$imagename' , '$adhar' , '$doj' , '$email' , '$pass');";
		?>
			<script> alert('<?php echo $qry;?>');</script>
		<?php
	
	    /*$qry = "INSERT INTO `staff`(`s_id`, `name`, `mobile`, `address`, `img`, `adhar`, `jdate`, `email`, `pass`) VALUES ('?','?','?','?','?','?','?','?','?')";

    	$stmt = mysqli_stmt_init($con);
    	if(!mysqli_stmt_prepare($stmt, $qry)){
    		echo "There was an error!";
    		exit();
    	}else{
    		mysqli_stmt_bind_param($stmt, "sssssssss", $sid, $name, $mobile, $address, $imagename, $adhar, $doj, $email, $pass);
    		mysqli_stmt_execute($stmt);
    		?>
			<script> alert('data successfully submited');</script>
			<?php
    	}


	mysqli_stmt_close($stmt);
	mysqli_close();*/
       
       
		$run = mysqli_query($con , $qry);

		if($run == true){
			?>
			<script> alert('data successfully submited');</script>
			<?php
		}else{
			?>
			<!--script>alert('<?php //echo $_POST['name'];?>')</script>
			<script>alert('<?php //echo $_POST['mobile'];?>')</script>
			<script>alert('<?php //echo $_POST['email'];?>')</script>
			<script>alert('<?php //echo $_POST['address'];?>')</script>
			<script>alert('<?php //echo $_POST['adhar'];?>')</script>
			<script>alert('<?php //echo $_POST['doj'];?>')</script>
			<script>alert('<?php //echo $_POST['pass'];?>')</script-->
			<script> alert('Registration is not successfully');</script>
			<?php
		}

	}
?>
