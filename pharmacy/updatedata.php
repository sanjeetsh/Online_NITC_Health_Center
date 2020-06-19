<?php
	if(isset($_POST['submit'])){

		include('../dbcon.php');
		$pid = $_POST['id'];
		$name = $_POST['name'];
		$dob = $_POST['dob'];
		$blood = $_POST['blood'];
		$address = $_POST['address'];
		$mobile = $_POST['phone'];
		$email = $_POST['email'];
		$imagename = $_FILES['simg']['name'];
		$tempname = $_FILES['simg']['tmp_name'];

		move_uploaded_file($tempname , "../dataimg/$imagename");


		$qry = "UPDATE `patient` SET `name` = '$name' , `dob` = '$dob' , `blood_group` = '$blood' , `address` = '$address' , `mobile_no` = '$mobile' , `email` = '$email' , `image` = '$imagename'  WHERE `p_id` = '$pid'";

		//$qry = "INSERT INTO `patient` (`p_id` , `name` , `dob` , `blood_group` , `address` , `mobile_no` , `email` , `image`) VALUES ('$pid' , '$name' , '$dob' , '$blood' , '$address' , '$mobile' , '$email' , '$imagename')";

		$run = mysqli_query($con , $qry);

		if($run == true){
			?>
			<script> alert('data updated successfully');
			window.open('update.php?pid=<?php echo $pid; ?>','_self');
			</script>
			<?php
		}

	}
?>