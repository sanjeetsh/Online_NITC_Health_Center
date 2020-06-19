
<DOCTYPE html>
<html>
<head>
    <title>Login</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>

<!--nav class="navbar navbar-expand-md  navbar-dark bg-primary sticky-top">

		<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="collapse_target">
			<a class="navbar-brand"><img src="images/nitclogo.png"></a>

			
			<div class="ml-auto">
			<ul class="navbar-nav">
				
				<li class="nav-item active">
					<a href="index.php" class="nav-link">Home</a>
				</li>
				<li class="nav-item active">
					<a href="#amenities" class="nav-link">Amenities</a>
				</li>
				<li class="nav-item active">
					<a href="people.php" class="nav-link">People</a>
				</li>
				<li class="nav-item active">
					<a href="gallery.php" class="nav-link">Gallery</a>
				</li>
				<li class="nav-item active">
					<a href="login.php" class="nav-link">Login</a>
				</li>

			</ul>
		</div>
		</div>
	</nav-->
<div class="form-wrapper reg">
  
  <form action="login.php" method="post">
    <h3 align="center">Login here</h3>

    <div class="form-item" left>
    	<select name="type">
						<option value ="-1">Select user type</option>
						<option value="Admin">Admin</option>
						<option value="Pharmacist">Pharmacist</option>
						<option value="Doctor">Doctor</option>
						<!--<option value="Student">Student</option>-->
					</select>
    </div>
	
    <div class="form-item">
		<input type="text" name="username" required="required" placeholder="Username" autofocus required id="inputfield"></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="password" required="required" placeholder="Password" required id="inputfield"></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login"></input>
    </div>
  </form>
    <!--div class="form-item">
    	<select name="type">
						<option value ="-1">Select user type</option>
						<option value="Admin">Admin</option>
						<option value="Pharmacist">Pharmacist</option>
						<option value="Doctor">Doctor</option>
						<option value="Student">Student</option>
					</select>
    </div-->
	





	<!--form method="POST" action="login.php">
		<table>
			<tr>
				<td>User Type</td>
				<td>
					<select name="type">
						<option value ="-1">Select user type</option>
						<option value="Admin">Admin</option>
						<option value="Pharmacist">Pharmacist</option>
						<option value="Doctor">Doctor</option>
						<option value="Student">Student</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" placeholder="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="password"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Login"></td>
			</tr>
		</table>
	</form-->


<?php 
	include('dbcon.php');
	if(isset($_POST['login'])){

		$type = $_POST['type'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($type == 'Doctor'){
			$sql = "SELECT * FROM `doctor` where d_id = '$username' and pass = '$password'";
		}elseif($type == 'Pharmacist'){
			$sql = "SELECT * FROM `staff` where s_id = '$username' and pass = '$password';";
		}elseif($type == 'Admin'){
			$sql = "SELECT * FROM `admin` where a_id = '$username' and pass = '$password';";
		}else{
			echo "input not right";
			header("Location:login.php");
			exit();
		}
		?>
			<!--<script> alert('No Patient Found');</script>-->
		<?php

		$run = mysqli_query($con,$sql);

		if(mysqli_num_rows($run) > 0){
			$data = mysqli_fetch_assoc($run);
			$email = $data['email'];
			//$id = $data['id'];
			session_start();
			$_SESSION['email'] = $email;
			//$_SESSION['id'] = $id;
			if($_POST['type'] == 'Doctor'){
				header("Location: doctor/doctorDashboard.php");
			}elseif($_POST['type'] == 'Pharmacist'){
				header("Location: pharmacy/deliverMedicine-Patient.php");
			}elseif($_POST['type'] == 'Admin'){
				header("Location: admin/dashboard.php");
			}else{
				header("Location:login.php");
			}
		}else{
			?>
			<script> alert('No Patient Found');</script>
			<?php
		}
	}

?>
<div class="reminder">
    <!--p>Not a member? <a href="#">Sign up now</a></p-->
    <?php
    	if(isset($_GET['newPwd'])){
    		if($_GET['newPwd'] == "passwordupdated"){
    			echo "<p>Your password has been reset!</p>";
    		}
    		//mmtuts
    	}
    ?>
    <p align= "center"><a href="reset-password.php">Forgot password?</a></p>
    <!--p><a href="#">Forgot password?</a></p-->
  </div>
  </body>
  </html>
