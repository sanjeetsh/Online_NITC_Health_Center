<?php

if(isset($_POST["reset-request-submit"])){

	$selector = bin2hex(random_bytes(8));
	$token = random_bytes(32);

	$url = "https://nitc-health-center.000webhostapp.com/create-new-password.php?selector=" . $selector . "&validator=". bin2hex($token);

	$expires = date("U") + 1800;


	require 'dbcon.php';

	//die("Connection failed: " . mysqli_connect_error());

	$userEmail = $_POST['email'];


	$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		echo "There was an error!";
		exit();
	}else{
		mysqli_stmt_bind_param($stmt, "s", $userEmail);
		mysqli_stmt_execute($stmt);
	}

	$sql = "INSERT INTO `pwdReset` (`pwdResetEmail` , `pwdResetSelector` , `pwdResetToken` , `pwdResetExpires`) VALUES (?,?,?,?);";

	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt, $sql)){
		echo "There was an error!";
		exit();
	}else{
		$hashedToken = password_hash($token, PASSWORD_DEFAULT);
		mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
		mysqli_stmt_execute($stmt);
	}


	mysqli_stmt_close($stmt);
	mysqli_close($con);

	$to = $userEmail;
   $from_mail = 'ranktocrack01@gmail.com';
    $from_name = 'Sanjeet';

	$subject = 'Reset your password for nitc-health-center';

	$message = '<p>We recieved a password reset request. The link to reset you password is below. If you do not make this request, you can ignore this email</p>';
	$message .= '<p>Here is your password reset link: </br>';
	$message .= '<a href="' . $url . '">' . $url . "</a></p>";
    $header = "From: ".$from_name." <".$from_mail.">\r\n";
	//$headers = "From: <ranktocrack01@gmail.com>\r\n";
	$headers .= "Reply-To: ranktocrack01@gmail.com\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

 
    if(!mail($to , $subject, $message, $headers)){//;
    
    ?>
    <script>echo ('not possible');</script>
    <?php
    
    }else{
    header("Location: reset-password.php?reset=success");
    }
    
    // if($rslt == false){
        
    // }else{
    //     header("Location: reset-password.php?reset=success");
    // }
	
	/*require_once('PHPMailer/PHPMailerAutoload.php');
	
	$email = new PHPMailer();
	$email->isSMTP();
	$email->SMTPAuth = true;
	$email->SMTPSecure = 'tls';
	$email->Host = 'smtp.gmail.com';
	$email->Port = '465';
	$email->isHTML(true);
	$email->Username = 'ranktocrack01@gmail.com';
	$email->Password = '7277118639';
	$email->setFrom($to);
	$email->Header = $headers;
	$email->Subject = $subject;
	$email->Body = $message;
	$email->AddAddress('ranktocrack01@gmail.com');
	
	if(!$email->send()){
	    ?>
	    <script>alert('not successfull');</script>
	    <?php
	}else{

	    header("Location: reset-password.php?reset=success");
	}*/

}else{
	header("Location: index.php");
}








/*function sendmail( $ToEmail, $MessageHTML, $MessageTEXT, $MessageHeader ) {
  require_once ( 'PHPMailer/class.phpmailer.php' ); // Add the path as appropriate
  $Mail = new PHPMailer();
  $Mail->IsSMTP(); // Use SMTP
  //$mail->SMTPAuth = true;
  $Mail->Host        = "smtp.gmail.com"; // Sets SMTP server
  $Mail->SMTPDebug   = 2; // 2 to enable SMTP debug information
  $Mail->SMTPAuth    = TRUE; // enable SMTP authentication
  $Mail->SMTPSecure  = "tls 1.3"; //Secure conection
  $Mail->Port        = 587; // set the SMTP port
  $Mail->Username    = 'ranktocrack01@gmail.com'; // SMTP account username
  $Mail->Password    = '7277118639'; // SMTP account password
  $Mail->Priority    = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
  $Mail->CharSet     = 'UTF-8';
  $Mail->Encoding    = '8bit';
  $Mail->Subject     = 'Test Email Using Gmail';
  $Mail->ContentType = 'text/html; charset=utf-8\r\n';
  $Mail->From        = 'ranktocrak01@gmail.com';
  $Mail->FromName    = 'Sanjeet Kumar';
  $Mail->WordWrap    = 900; // RFC 2822 Compliant for Max 998 characters per line

  $Mail->AddAddress( $ToEmail ); // To:
  $Mail->isHTML( TRUE );
  //$Mail->Header = $MessageHeader;
  $Mail->Body    = $MessageHTML;
  $Mail->AltBody = $MessageTEXT;
  $Mail->Send();
  $Mail->SmtpClose();

  if ( $Mail->IsError() ) { // ADDED - This error checking was missing
    return FALSE;
  }
  else {
    return TRUE;
  }
}*/

?>