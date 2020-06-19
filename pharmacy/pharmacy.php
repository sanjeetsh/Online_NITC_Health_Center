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
	<title>Responsive Navigation Bar</title>
	<meta charset="utf-8">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<meta name="viewpoint" content="width=device-width , initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style3.css">
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
					<a href="pharmacyDashboard.php" class="nav-link">HOME</a>
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
							<a href="registration.php" class="dropdown-item">Update</a>
						
					</div>
				</li>


				<li class="nav-item dropdown">
					<a  class="nav-link dropdown-toggle active" data-toggle="dropdown" data-target="dropdown2_target" href="#">
						<?php echo $_SESSION['email'];?>
						<span class="caret"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown2-target">
						
							<a href="logout.php" class="dropdown-item">Logout</a>
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





	
	
		<div class="row h-100 align-items-center masthead">
					<div class="col-12 text-center">
						<h1 class="display-3" style="font-family: 'Candal', sans-serif;font-size: 50px;">NITC HEALTH CENTRE</h1>
						<p class="lead">Medical care is offered by the Institute at its own Health Centre having 10 beds. There are two Medical Officers- a Lady Medical Officer, a Resident Medical Officer-and qualified nursing staff to look after the health needs of the campus residents.</p>
					</div>
		</div>


	<!--header class="masthead jumbotron">
			<div class="container h-100">
				<div class="row h-100 align-items-center">
					<div class="col-12 text-center">
						<h1 class="display-3" style="font-family: 'Candal', sans-serif;font-size: 50px;">NITC HEALTH CENTRE</h1>
						<p class="lead">Medical care is offered by the Institute at its own Health Centre having 10 beds. There are two Medical Officers- a Lady Medical Officer, a Resident Medical Officer-and qualified nursing staff to look after the health needs of the campus residents.</p>
					</div>
				</div>
			</div>
		</header-->

<div class="container-fluid flex-fill reg">
	<div class="container medium-text" id="amenities">
			<!-- News -->
			<div class="news extra-margin-top grey">
				<h3 class="blue-underline">NEWS & ANNOUNCEMENTS</h3>
				<div class="row extra-margin-top">
					<marquee behavior="" scrollamount="10" style="height:100%;"
					scrollamount="10" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
					</marquee>
			</div>
	</div>



<div class="amenities" id="amenities" style="margin-top: 50px;">
				
				<div class="row">
					
					<div class="col-md-12">
						<h3 class="blue-underline">AMENITIES</h3>
					</div>
					<div class="col-md-12">
						<p class="extra-margin-top text-muted">
							NITC Health Center strives to be the primary health center support for the NITC students, staff and faculty members.
						</p>
					</div>

				</div>
			</div>

			<br><br>
			<div class="col-md-12 amenities-desc">
						<div class="row">
							<div class="col-md-4">
								<div class="card info-card ">
									<div class="card-body" id="amen">
										<h4 class="card-title font-weight-bold">
										<i class="icon fa fa-stethoscope" ></i>
										24*7 Support
										</h4>
										<div class="card-subtitle mb-2 text-muted" id="amen">
											Our doctors are available for emergency consultations 24X7. Apart from the regular OP Timing, you can consult at C1 and C2 quarters in Faculty Residence Area.
										</div>
									</div>
								</div>

							</div>

							<div class="col-md-4">
								<div class="card info-card ">
								<div class="card-body" id="amen">
									
									<h4 class="card-title font-weight-bold">
									
									<i class="icon fa fa-user-md " ></i>
									Counseling Service
									</h4>
									<div class="card-subtitle mb-2 text-muted " id="amen">
										
										SGC Counsellors are available in Health Center every Thursday 2 pm - 5 pm. Book your sessions prior.
									</div>
								</div>
							</div>

							</div>

							
							<div class="col-md-4"><div class="card info-card ">
								<div class="card-body" id="amen">
									
									<h4 class="card-title font-weight-bold">
									
									<i class="icon fa fa-ambulance" ></i>
									Ambulance
									</h4>
									<div class="card-subtitle mb-2 text-muted " id="amen">
										
										We provide 24X7 ambulance support for any emergency
										<p><strong>Contact no : 91495 228 6661</strong></p>
									</div>
								</div>
							</div></div>
						</div>
						<div class="row">
							<div class="col-md-4"><div class="card info-card ">
								<div class="card-body" id="amen">
									<h4 class="card-title font-weight-bold">
									<i class="icon fa fa-hospital-o" ></i>
									Referrals
									</h4>
									<div class="card-subtitle mb-2 text-muted" id="amen">
										Referral Facility available for cashless treatment in :<br>
										<ol> 
											<li>KMCT Hospital</li>
											<li>Comtrust Hospital *</li>
											<li>Rathnaprabha Dental Clinic *</li>
										</ol>
										(*Restricted Services as per CGHS rules)
										
									</div>
								</div>
							</div></div>
							<div class="col-md-4"><div class="card info-card ">
								<div class="card-body" id="amen">
									<h4 class="card-title font-weight-bold">
									<i class="icon fa fa-flask" ></i>
									Laboratory Facilities
									</h4>
									<div class="card-subtitle mb-2 text-muted" id="amen">
										Blood Routine Test:<br>
										Complete Blood Cell(CBC) Test,<br>
										Blood Sugar Test,Cholesterol Test,<br>
										Renal Function Test(RFT)<br>
										Liver Function Test(LFT)<br>
										Urine Routine Test<br>
										Blood Group Test<br>
										Calcium Test
									</div>
								</div>
							</div></div>
							<div class="col-md-4"><div class="card info-card ">
								<div class="card-body" id="amen">
									<h4 class="card-title font-weight-bold">
									<i class="icon fa fa-clock-o"></i>
									Laboratory Timing
									</h4>
									<div class="card-subtitle mb-2 text-muted" id="amen">
										Mon-Fri - 8:30 A.M. to 5:30 P.M<br>
										Sat - 8 A.M. to 1 P.M<br>
									</div>
								</div>
							</div></div>
						</div>
					</div>
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



<script>

		$.fn.preload = function() {
		    this.each(function(){
		        $('<img/>')[0].src = this;
		    });
		}
		var images = Array("nitcDoc.jpg","doctor1.jpg");

		$([images[0],images[1]]).preload();

		var currimg = 0;

		$(document).ready(function(){
		   
		    function loadimg(){
		       
		       $('.masthead').animate({ opacity: 1 }, 500,function(){        
		            $('.masthead').animate({ opacity: 0.7 }, 100,function(){
		                currimg++;
		                if(currimg > images.length-1){  
		                    currimg=0;         
		                }       
		                var newimage = images[currimg];            
		                console.log(newimage);  
		                $('.masthead').css("background-image",'linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)),url("'+newimage+'")'); 
		                $('.masthead').animate({ opacity: 1 }, 400,function(){
		                    setTimeout(loadimg,3000);
		                });

		            });
		        
		        });

		     }
		     setTimeout(loadimg,5000);
		  
		});
</script>



</body>
</html>