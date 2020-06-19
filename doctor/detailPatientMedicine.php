<?php
include('../dbcon.php');
$sql = "SELECT * FROM `patient` WHERE `p_id` = '$pid'";
$run1 = mysqli_query($con,$sql);
if(mysqli_num_rows($run1)  > 0){
?>
                            <h3 align="center" STYLE="color:red;">Visiting and Medicine Detail of <?php echo $pid;?></h3>
							<div class="reg">
							<table class="table  table-responsive" id="val" STYLE="max-height: 300px;">
								<tr class="col-sm-12">
									<th class="col-sm-2">Date</th>
									<th class="col-sm-2">Patient Id</th>
							   		<th class="col-sm-2">Doctor Id</th>
							   		<th class="col-sm-2">Staff Id</th>
							   		<th class="col-sm-2">Medicine Name</th>
							   		<th class="col-sm-2">Quantity</th>
								</tr>
							<?php
							   		if(isset($_SESSION['email']) && isset($_POST['submit'])){  

							   			include('../dbcon.php');

							   			$rol = $_POST['id'];

							   			//$qry = "SELECT v.c_date , v.p_id , v.d_id , p.med_name , p.quantity FROM `prescribed_medicine` as p , `visiting_patient` as v WHERE `p_id` = '$pid' and v.visit_id = p.visit_id ";
							   			//$qry = "SELECT * FROM `patient` WHERE `p_id` LIKE '%$rol%'";

							   			$qry = "SELECT v.c_date , v.p_id , v.d_id , p.s_id , p.med_name , p.quantity FROM `prescribed_medicine` as p , `visiting_patient` as v WHERE `p_id` = '$pid' and v.visit_id = p.visit_id;";

							   			$run = mysqli_query($con,$qry);

							   			if(mysqli_num_rows($run)  > 0){
							   					//$count = 0;
							   				while($data = mysqli_fetch_assoc($run)){
							   					//$count++;
							   					?>
							   					<tr>
							   						<td><?php echo $data['c_date']; ?></td>
								   					<td><?php echo $data['p_id']?></td>
											   		<td><?php echo $data['d_id']?></td>
											   		<td><?php echo $data['s_id']?></td>
											   		<td><?php echo $data['med_name']?></td>
											   		<td><?php echo $data['quantity']?></td>
										   		</tr>
										   		<?php
							   				}
							   			}else{
							   			echo "<tr><td colspan='10'>NO REcord Found</td></tr>";
							   			}
							   		}
							   		?>
							</table>
						<?php } ?>
						</div>