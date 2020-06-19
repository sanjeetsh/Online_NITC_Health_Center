<?php
   // session_start();

    if(isset($_SESSION['email'])){
        echo "";
    }else{
        header('location: ../index.php');
    }
    
?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
	<title>NITC Doctor</title>
</head>
<body>
	
	<!--form align="center" method="POST" action=""-->
				<!--button type="submit" value="submit" name="visited" id="hold onClick="Present(<?php //echo $pid; ?>);">VisitedPatient</button-->
				<!--a id="Present" href="#" class="btn btn-md btn-success" onClick="Present(<?php //echo $id_1; ?>);">VisitedPatient</a><br/><br/-->
	<!--/form-->

	<!--button onclick="Present()">VisitedPatient</button-->
                            <div class="form-group row ">
                                <div class="col text-center">
                                    <button type="submit" name="submit" id = "btn" class="btn btn-primary" >Visited Patient</button>
                                    <!--button type="reset" class="btn btn-primary" >Reset</button-->
                                </div>
                            </div>

  <!--input type="submit" id="btn" value="submit" align="center"-->

</body>
</html>


<!--script>
$(document).ready(function(){
      $("#hold").Present(function() {
      				var pid ="<?php //echo $pid; ?>";
      				var d_id = "sanjeet";
      				console.log(pid);
                    $.ajax({
                        type: "POST",
                        url: "visitingPatientalert.php",
                        data: "pid=" + pid+ "&d_id=" + d_id,
                        success: function(data) {
                           alert("sucess");
                        }
                    });


                });
        });
    </script-->

 <!--script>

 var Present;
$( document ).ready(function() {
  Present = function () {
    var pid = "<?php //echo $pid; ?>";
    var did = 'sanjeet';
    $.ajax({
        type: "POST",
        url: 'visitingPatientalert.php',
        data: { pid : pid, did : did},
        dataType: "JSON",
        success : function (data){
    		//alert("sucess");
        //console.log(pid);
        //console.log(did);
 		},
        error : function(data){
    		alert("no sucess");
        console.log(pid);
        console.log(did);
 		}
    });
}
});
</script-->

<script type="text/javascript">
$(document).ready(function(){
    $("#btn").click(function() {
        var val1 = "<?php echo $pid; ?>";
        var val = "<?php echo $userid; ?>";
        $.ajax ({
            url: "visitingPatientalert.php",
            data: { val : val , val1 : val1},
            success: function( result ) {
                alert("Hi, testing");
                alert( result );
            }
        });
    });
});
</script>


