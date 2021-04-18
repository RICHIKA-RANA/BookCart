<!DOCTYPE html>
<html>
<head>
	<title>SignUpPage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(img/9.jpg);background-repeat: no-repeat;background-size: cover;">
		<p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: silver;font-size: 50px;">BookCart</span>.com </p>
		<div class="login">
			<center>
				<form action="signupAction.php" method="POST">
				<label style="font-size: 30px;color: gray;">UserName:</label>
				<input type="text" name="uname" style="width: 250px;height: 25px;" required>&nbsp;&nbsp;
				<label style="font-size: 30px;color: gray;">Phone Number:</label>
				<input type="number" name="pno" maxlength="10" style="width: 250px;height: 25px;" required><br><br>
				<label style="font-size: 30px;color: gray;">Email:</label>
				<input type="email" name="mail" style="width: 310px;height: 25px;" required>&nbsp;&nbsp;
				<label style="font-size: 30px;color: gray;">Password:</label>
				<input type="password" name="pass" style="width: 310px;height: 25px;" required><br><br>
				<label style="font-size: 30px;color: gray;">House No.,Building name:</label><br>
				<input type="text" name="hno" style="width: 500px;height: 25px;" required><br><br>
				<label style="font-size: 30px;color: gray;">Road Name,Area,Colony:</label><br>
				<input type="text" name="area" style="width: 500px;height: 25px;" required>&nbsp;&nbsp;
				<label style="font-size: 30px;color: gray;">PIN Code:</label>
				<input type="number" name="pin" style="width: 100px;height: 25px;" required><br><br>
				<label style="font-size: 30px;color: gray;">City:</label>
				<input type="text" name="city" style="width: 330px;height: 25px;" required>&nbsp;&nbsp;
				<label style="font-size: 30px;color: gray;">State:</label>
				<input type="text" name="state" style="width: 330px;height: 25px;" required><br><br>
				<input type="submit" name="submit" value="SignUp" style="width: 500px;height: 35px;font-size: 20px; background-color: blue;border-color: blue;">
				<p style="font-size: 15px;padding-left: 100px;">Already have an Account! Click On <a href="login.php" style="color: orange;font-size: 18px;">ClickMe</a></p></center>
				</form>
		</div>
</body>
</html>