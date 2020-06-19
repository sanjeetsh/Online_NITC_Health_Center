<?php

	include('../dbcon.php');

	$today = date('YmdHi');
    $startDate = date('YmdHi', strtotime('-10 days'));
    $range = $today - $startDate;
    $rand1 = rand(0, $range);
    $rand2 = rand(0, 600000);
    $value=($rand1+$rand2);
    $mydate=getdate(date("U"));
    $date = strftime('%F');

     $res = $_GET['val'];
     $res1 = $_GET['val1'];
    //$rslt = "Medicine Register Successfully";

   
    //echo ($value);
    $qry = "INSERT INTO `visiting_patient` ( `visit_id` ,`d_id` , `p_id` , `c_date`) VALUES ( '$value' , '$res' , '$res1' , '$date')";

    $qry1 = "INSERT INTO `prescribed_medicine` ( `visit_id`) VALUES ( '$value')";

    $run = mysqli_query($con , $qry);
    $run1 = mysqli_query($con , $qry1);
    //echo $qry;
    if($run == true  && $run1 == true){
           // echo $rslt;
           echo "Auto Generated visiting id :-  " . $value ." ";
    }else{
        $rslt = "not register successfully";
        echo $rslt;
    }

    /* $qry1 = "INSERT INTO `prescribed_medicine` (`visit_id`) VALUES ('$value')";

		$run = mysqli_query($con , $qry);
		$run1 = mysqli_query($con , $qry1);

		if($run == true && $run1 == true){
            echo "Data Successfull";
			?>
			<script> alert('data successfully submited');</script>
			<?php
		}


        $res = $_GET['val'];
        $res1 = $_GET['val1'];*/

//echo ( $res );
//echo ($rslt);

?>