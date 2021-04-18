<!DOCTYPE html>
<html>
<head>
	<title>HomePage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(img/4.jpg);background-repeat: no-repeat;background-size: cover;">
		<p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: darkslategrey;font-size: 50px;">BookCart</span>.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="home.php" style="text-decoration: none;color: white;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="findBooks.php" style="text-decoration: none;color: white;">FindBooks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="myaccount.php" style="text-decoration: none;color: white;">MyAccount</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.php" style="text-decoration: none;color: white;">ContactUs</a></p>
	<div class="cont">
		<p>Keep Reading...</p>
	</div>
	<div class="obj">
		<ul>
			<li>Provide searching facilities based on their department, semester, subject</li><br>
			<li>Shows the information & description of Books, Payment</li><br>
			<li>Easy to Use</li><br>
			<li>Variety of Payment Gateways</li><br>
			<li>Provide wide variety of books</li><br>
		</ul>
		<center><p><a href="findBooks.php" style="border:solid green;background-color: green;text-decoration: none;color: white;">Lets Start</a></p></center>
	</div><?php
include 'conn.php';

$qry="select * from notifications order by Created desc limit 1;";
$rslt=mysqli_query($conn,$qry);
while($data=mysqli_fetch_array($rslt,MYSQLI_BOTH)){
    $not=$data['Notification'];
?>
<marquee style="background-color: #808080a3;height: 70px;font-size: 30px;color: white;">Latest Books Are----
<?php  echo $not;   }   ?>----
</marquee>
</body>
</html>