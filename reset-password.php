<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="wrapper-main">
		<section class="section-default">
			<h1>Reset Your password</h1>
			<p>An e-mail will be send to you with instruction on how to reset your password.</p>
			<form action="reset-request.inc.php" method="post">
				<input type="text" name="email" placeholder="Enter your e-mail address...">
				<button type="submit" name="reset-request-submit">Recieve new password by e-mail</button>
			</form>
			<?php 
				if(isset($_GET["reset"])){
					echo '<p class="signupsuccess">Check your Email!</p>';
				}
			?>
		</section>
	</div>

</body>
</html>