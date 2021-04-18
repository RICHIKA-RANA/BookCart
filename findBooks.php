<!DOCTYPE html>
<html>
<head>
	<title>Find Books</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(img/4.jpg);background-repeat: no-repeat;background-size: cover;">
		<p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: darkslategrey;font-size: 50px;">BookCart</span>.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="home.php" style="text-decoration: none;color: white;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="findBooks.php" style="text-decoration: none;color: white;">FindBooks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="myaccount.php" style="text-decoration: none;color: white;">MyAccount</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.php" style="text-decoration: none;color: white;">ContactUs</a></p>
	<div class="inbox">
		<form method="POST" action="findbooksAction.php">
		<center>
			<h1 style="color:white;font-size: 50px;">Choose your Department:</h1>
  			<select name="department" required>
  				<option></option>
				<option name="department" value="Computer">Computer</option>
			    <option name="department" value="Civil">Civil</option>
				<option name="department" value="Electrical">Electrical</option>
				<option name="department" value="Mechanical">Mechanical</option>
			</select><br><br>
			<h1 style="color:white;font-size: 50px;">Choose your Semester:</h1>
  			<select name="semester" required>
  				<option></option>
				<option name="semester" value="1stSemester">1st Semester</option>
			    <option name="semester" value="2ndSemester">2nd Semester</option>
				<option name="semester" value="3rdSemester">3rd Semester</option>
			</select><br><br><br>
			<input type="submit" value="Go!" style="color:white;border:solid green;width:150px;font-size: 20px;background-color: green;">
		</center>
		</form>
	</div>
</body>
</html>