<?php 
	
	

		include('../dbcon.php');
		

		$pid = $_REQUEST['id'];
		

		$qry = "DELETE FROM `patient` WHERE `p_id` = '$pid'";


		//$qry = "UPDATE `patient` SET `name` = '$name' , `dob` = '$dob' , `blood_group` = '$blood' , `address` = '$address' , `mobile_no` = '$mobile' , `email` = '$email' , `image` = '$imagename'  WHERE `p_id` = '$pid'";

		//$qry = "INSERT INTO `patient` (`p_id` , `name` , `dob` , `blood_group` , `address` , `mobile_no` , `email` , `image`) VALUES ('$pid' , '$name' , '$dob' , '$blood' , '$address' , '$mobile' , '$email' , '$imagename')";

		$run = mysqli_query($con , $qry);

		if($run == true){
			?>
			<script> alert('data deleted successfully');
			window.open('deletePatient.php','_self');
			</script>
			<?php
		}

	

?>