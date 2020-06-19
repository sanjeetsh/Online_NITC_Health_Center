<?php
	function showdetails($pid){
		include('../dbcon.php');
		$qry = "SELECT * FROM `patient` WHERE `p_id` = '$pid'";


		$run = mysqli_query($con,$qry);

		if(mysqli_num_rows($run) > 0){
			$data = mysqli_fetch_assoc($run);
			?>
			<table border="1" style="width: 50%; margin-top: 20px;" align="center" >
				<tr>
					<th colspan='3' align="center">Patient Details</th>
				</tr>
				<tr>
					<td rowspan="7"><img src="../dataimg/<?php echo $data['image']; ?>" style="max-width: 120px;  max-height: 150px; padding-left: 25px"></td>
					<th>College Id</th>
					<td><?php echo $data['p_id'];?></td>
				</tr>
				<tr>
					<th>Name</th>
					<td><?php echo $data['name'];?></td>
				</tr>
				<tr>
					<th>DOB</th>
					<td><?php echo $data['dob'];?></td>
				</tr>
				<tr>
					<th>Address</th>
					<td><?php echo $data['address'];?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?php echo $data['email'];?></td>
				</tr>
				<tr>
					<th>Mobile No</th>
					<td><?php echo $data['mobile_no'];?></td>
				</tr>
				<tr>
					<th>Blood Group</th>
					<td><?php echo $data['blood_group'];?></td>
				</tr>
			</table>		
			<?php

		}else{
			?>
			<script> alert('No Patient Found');</script>
			<?php
		}
	}
?>
