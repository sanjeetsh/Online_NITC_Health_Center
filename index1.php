<?php

	if(isset($_POST['submit'])){

		include('dbcon.php');
		$pid = $_POST['id'];
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$blood = $_POST['blood'];
		$address = $_POST['address'];
		$mobile = $_POST['phone'];
		$email = $_POST['email'];
		/*$imagename = $_FILES['simg']['name'];
		$tempname = $_FILES['simg']['tmp_name'];

		echo $pid;
		move_uploaded_file($tempname , "dataimg/$imagename");*/

		$qry = "INSERT INTO `patient` (`p_id` , `name` , `dob` , `blood_group` , `address` , `mobile_no` , `email`) VALUES ('$pid' , '$name' , '$dob' , '$blood' , '$address' , '$mobile' , '$email')";

		$run = mysqli_query($con , $qry);

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
?>
