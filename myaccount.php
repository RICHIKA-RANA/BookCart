<?php 
    session_start();
    $b=false;
    if(isset($_SESSION['log'])){
        $b=true;
    }
?>
<html>
	<head>
		<title>My Account</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
<body style="background-image: url(img/4.jpg);background-repeat: no-repeat;background-size: cover;">
			<p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: darkslategrey;font-size: 50px;">BookCart</span>.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="home.php" style="text-decoration: none;color: white;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="findBooks.php" style="text-decoration: none;color: white;">FindBooks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="myaccount.php" style="text-decoration: none;color: white;">MyAccount</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.php" style="text-decoration: none;color: white;">ContactUs</a></p>
			<div class="minus">
				<div class="one">
					<span style="font-size:29px;font-weight:500;margin:0;padding:0;color:white;">MyAccount</span>
					<p><span>Get access to your Orders, Wishlist and Recommendations</span></p>
				</div>
				<div class="two">
					<center><img src="img/17.jpg" width="150px" height="150px"></center>
					<div><br><br>
					 <?php if ($b==true) { ?>
					 	<center><p style="font-size: 15px;color: darkslategray;"><b><?php
					 	echo $_SESSION["un"]."<br>";
					 	echo $_SESSION["mail"]."<br>";
					 	echo $_SESSION["pno"]."<br>";
					 	echo $_SESSION["hno"]."<br>";
					 	echo $_SESSION["area"]."<br>";
					 	echo $_SESSION["pin"]."<br>";
					 	echo $_SESSION["city"]."<br>";
					 	echo $_SESSION["state"]."<br>";
					 	?>
					 </b></p>
					 <a href="logout.php"><input type="submit" name="Logout" value="LogOut"></a></center>
					 <?php } else { ?>
					 <center><a href="login.php"><input type="submit" name="Login" value="LogIn"></a><p>or</p><a href="signup.php"><input type="submit" name="Signup" value="Signup"></a></center>
					<?php } ?>
			</div>
	</div>
</div>
</body>
<html>