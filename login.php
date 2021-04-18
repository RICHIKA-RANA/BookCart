<?php
	session_start();
	$d=false;
	if(isset($_SESSION['success'])){
		$d=true;
		unset($_SESSION['success']);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LoginPage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(img/9.jpg);background-repeat: no-repeat;background-size: cover;">
		<p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: silver;font-size: 50px;">BookCart</span>.com </p>
		<div class="login">
			<center>
				<form action="loginAction.php" method="POST">
				<label style="font-size: 30px;color: gray;">Username:</label><br>
				<input type="text" name="uname" style="width: 500px;height: 25px;" required><br><br>
				<label style="font-size: 30px;color: gray;">Password:</label><br>
				<input type="password" name="pass" style="width: 500px;height: 25px;" required><br><br>
				<input type="submit" name="submit" value="LogIn" style="width: 500px;height: 35px;font-size: 20px; background-color: blue;border-color: blue;">
				<div style="color:red;font-size: 15px;">
				<?php
				if($d==true){
					echo"<br>Your Account has been Successfully created!Please Login for further Work!";
				} ?>
			</div>
			<p style="font-size: 15px;padding-left: 100px;">Don't have any Account! Click On <a href="signup.php" style="color: orange;font-size: 18px;">ClickMe</a></p></center>
				</form>
		</div>
</body>
</html>