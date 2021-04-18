<?php 
    session_start();
    $b=false;
    if(isset($_SESSION['log'])) {
        $b=true;
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Civil2ndSem</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(img/8.jpg);background-repeat: no-repeat;background-size: cover;">
		<p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: darkslategrey;font-size: 50px;">BookCart</span>.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href="home.php" style="text-decoration: none;color: white;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php  if($b==true){ ?><a href="logout.php" style="text-decoration: none;color: white;">LogOut</a><?php }  else { ?><a href="login.php" style="text-decoration: none;color: white;">LogIn</a><?php } ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.php" style="text-decoration: none;color: white;">ContactUs</a></p>
		<div class="sub">
			<fieldset>
				<legend>Fluid Mechanics</legend>
				<img src="img/civil/fluid.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;"> A Textbook Of Fluid Mechanics </span><br><br>Rs. 200/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S. D.R RK Bansal<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Laxmi Pulications (P) Limited, 2008<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;718<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/civil/fluid.jpg">
					<input type="hidden" name="product" value="A Textbook Of Fluid Mechanics">
					<input type="hidden" name="author" value="S. D.R RK Bansal">
					<input type="hidden" name="price" value="200">
					<input type="hidden" name="publisher" value="Laxmi Pulications (P) Limited, 2008">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/civil/fluid2.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">A Textbook Of Fluid Mechanics</span><br><br>Rs. 260/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R.K Rajput<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Published 2004 by S. Chand (P) Limited 2008<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1059<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/civil/fluid2.jpg">
					<input type="hidden" name="product" value="A Textbook Of Fluid Mechanics">
					<input type="hidden" name="author" value="R.K Rajput">
					<input type="hidden" name="price" value="260">
					<input type="hidden" name="publisher" value="Published 2004 by S. Chand (P) Limited 2008">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>

		<div class="sub">
			<fieldset>
				<legend>Applied Mechanics</legend>
				<img src="img/civil/applied.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Applied Mechanics</span><br><br>Rs. 285/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A.K Updhayay<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S.K. Kataria & Sons<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;708<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/civil/applied.jpg">
					<input type="hidden" name="product" value="Applied Mechanics">
					<input type="hidden" name="author" value="A.K Updhayay">
					<input type="hidden" name="price" value="285">
					<input type="hidden" name="publisher" value="S.K. Kataria & Sons">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/civil/applied2.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Introduction to Applied Mechanics</span><br><br>Rs. 76/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Khurmi R.S,Khurmi<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S. Chand<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;316<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/civil/applied2.jpg">
					<input type="hidden" name="product" value="Introduction to Applied Mechanics">
					<input type="hidden" name="author" value="Khurmi R.S,Khurmi">
					<input type="hidden" name="price" value="76">
					<input type="hidden" name="publisher" value="S. Chand">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>

		<div class="sub">
			<fieldset>
				<legend>Surveying-1</legend>
				<img src="img/civil/survey.jfif" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Surveying Volume-1</span><br><br>Rs. 220/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B.C Punmia<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S.Laxmi Publications (P) Limited, 2008 <br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;708<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/civil/survey.jfif">
					<input type="hidden" name="product" value="Surveying Volume-1">
					<input type="hidden" name="author" value="B.C Punmia">
					<input type="hidden" name="price" value="220">
					<input type="hidden" name="publisher" value="S.Laxmi Publications (P) Limited, 2008">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/civil/survey2.jpeg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Surveying Volume-1</span><br><br>Rs. 249/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dr K.R Arora<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kindle Edition<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;316<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/civil/survey2.jpeg">
					<input type="hidden" name="product" value="Surveying Volume-1">
					<input type="hidden" name="author" value="Dr K.R Arora">
					<input type="hidden" name="price" value="249">
					<input type="hidden" name="publisher" value="Kindle Edition">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>

		<div class="sub">
			<fieldset>
				<legend>Construction Materials</legend>
				<img src="img/civil/cm.jpeg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Construction Materials</span><br><br>Rs. 3,101/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marious Soutsos and Peter Domone<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taylor and Francis inc<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;820<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/civil/cm.jpeg">
					<input type="hidden" name="product" value="Construction Materials">
					<input type="hidden" name="author" value="Marious Soutsos and Peter Domone">
					<input type="hidden" name="price" value="3101">
					<input type="hidden" name="publisher" value="Taylor and Francis inc">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/civil/cm2.jpeg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Building Consruction</span><br><br>Rs. 545/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dr. Punmia B.C<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laxmi Publications<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;665<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/civil/cm2.jpeg">
					<input type="hidden" name="product" value="Building Consruction">
					<input type="hidden" name="author" value="Dr. Punmia B.C">
					<input type="hidden" name="price" value="545">
					<input type="hidden" name="publisher" value="Laxmi Publications">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>

		<div class="sub">
			<fieldset>
				<legend>Building Construction</legend>
				<img src="img/civil/bc.jfif" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Building Construction And Material</span><br><br>Rs. 249/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gurcharan Singh<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kindle Edition<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;961<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/civil/bc.jfif">
					<input type="hidden" name="product" value="Building Consruction And Material">
					<input type="hidden" name="author" value="Gurcharan Singh">
					<input type="hidden" name="price" value="249">
					<input type="hidden" name="publisher" value="Kindle Edition">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/civil/bc2.jfif" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Concrete: Microstructure,Properties and Materials</span><br><br>Rs. 852/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P.Kumar Mehta<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kindle Edition<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;316<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/civil/bc2.jfif">
					<input type="hidden" name="product" value="Concrete: Microstructure,Properties and Materials">
					<input type="hidden" name="author" value="P.Kumar Mehta">
					<input type="hidden" name="price" value="852">
					<input type="hidden" name="publisher" value="Kindle Edition">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>

		<div class="sub">
			<fieldset>
				<legend>Building Drawing</legend>
				<img src="img/civil/bd.jfif" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Building Planning And Drawing</span><br><br>Rs. 300/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dr N. Kumara Swamy<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Charotar Publishing House Pvt. Ltd.<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;961<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/civil/bd.jfif">
					<input type="hidden" name="product" value="Building Planning And Drawing">
					<input type="hidden" name="author" value="Dr N. Kumara Swamy">
					<input type="hidden" name="price" value="300">
					<input type="hidden" name="publisher" value="Charotar Publishing House Pvt. Ltd.">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/civil/bd2.jfif" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">A Coure In Civil Engineering Drawing</span><br><br>Rs. 387/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;V.B Sikka<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AbeBooks Seller Since November 24, 2010<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;316<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/civil/bd2.jfif">
					<input type="hidden" name="product" value="A Coure In Civil Engineering Drawing">
					<input type="hidden" name="author" value="V.B Sikka">
					<input type="hidden" name="price" value="387">
					<input type="hidden" name="publisher" value="AbeBooks Seller Since November 24, 2010">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>
</body>
</html>