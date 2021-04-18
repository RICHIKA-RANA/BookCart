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
	<title>Mechanical 3rd Year</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(img/14.jpg);background-repeat: no-repeat;background-size: cover;">
		<p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: silver;font-size: 50px;">BookCart</span>.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href="home.php" style="text-decoration: none;color: white;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php  if($b==true){ ?><a href="logout.php" style="text-decoration: none;color: white;">LogOut</a><?php }  else { ?><a href="login.php" style="text-decoration: none;color: white;">LogIn</a><?php } ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.php" style="text-decoration: none;color: white;">ContactUs</a></p>
		<div class="sub">
			<fieldset>
				<legend>Applied Mechanics</legend>
				<img src="img/mech/em.jfif" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Engineering Mechanics A Textbook Of Applied Mechanics</span><br><br>Rs. 200/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S. Ramamrutham<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dhanpat Rai Publishing Company (P) Limited, 2008<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;718<br><br></p><table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/mech/em.jfif">
					<input type="hidden" name="product" value="Engineering Mechanics A Textbook Of Applied Mechanics">
					<input type="hidden" name="author" value="S. Ramamrutham">
					<input type="hidden" name="price" value="200">
					<input type="hidden" name="publisher" value="Dhanpat Rai Publishing Company (P) Limited, 2008">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
				


				<img src="img/mech/atoam.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">A Textbook Of Applied Mechanics</span><br><br>Rs. 260/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R.S. Khurmi<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Published 2004 by S. Chand<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;346<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/mech/atoam.jpg">
					<input type="hidden" name="product" value="A Textbook Of Applied Mechanics">
					<input type="hidden" name="author" value="R.S. Khurmi">
					<input type="hidden" name="price" value="260">
					<input type="hidden" name="publisher" value="Published 2004 by S. Chand">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>

		<div class="sub">
			<fieldset>
				<legend>Electrical Technology</legend>
				<img src="img/mech/bee.png" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Basic Electrical Engineering</span><br><br>Rs. 356/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;J.B. Gupta<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S.K. Kataria & Sons<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;708<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/mech/bee.png">
					<input type="hidden" name="product" value="Basic Electrical Engineering">
					<input type="hidden" name="author" value="J.B. Gupta">
					<input type="hidden" name="price" value="356">
					<input type="hidden" name="publisher" value="S.K. Kataria & Sons">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/mech/be.png" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Basic Electricity</span><br><br>Rs. 76/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Br Sharma<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Satya Prakashan<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;316<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/mech/be.png">
					<input type="hidden" name="product" value="Basic Electricity">
					<input type="hidden" name="author" value="Br Sharma">
					<input type="hidden" name="price" value="316">
					<input type="hidden" name="publisher" value="Satya Prakashan">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>


		<div class="sub">
			<fieldset>
				<legend>Engineering Material</legend>
				<img src="img/mech/msfp.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Material Science</span><br><br>Rs. 166/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R.K. Rajput<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S.K. Kataria & Sons<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;708<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/mech/msfp.jpg">
					<input type="hidden" name="product" value="Material Science">
					<input type="hidden" name="author" value="R.K. Rajput">
					<input type="hidden" name="price" value="166">
					<input type="hidden" name="publisher" value="S.K. Kataria & Sons">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/mech/aimc.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Advances In Material Science</span><br><br>Rs. 76/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R.K.Dogra<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jmd Sons International<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;316<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/mech/aimc.jpg">
					<input type="hidden" name="product" value="Advances In Material Science">
					<input type="hidden" name="author" value="R.K. Dogra">
					<input type="hidden" name="price" value="76">
					<input type="hidden" name="publisher" value="Jmd Sons International">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>


		<div class="sub">
			<fieldset>
				<legend>Manufacturing Technology-1</legend>
				<img src="img/mech/aciwt.jpeg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">A Course In Workshop Technology</span><br><br>Rs. 255/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B.S. Raghuwanshi<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dhanpat Rai & Co.<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;961<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/mech/aciwt.jpeg">
					<input type="hidden" name="product" value="A Course In Workshop Technology">
					<input type="hidden" name="author" value="B.S. Raghuwanshi">
					<input type="hidden" name="price" value="255">
					<input type="hidden" name="publisher" value="Dhanpat Rai & Co.">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/mech/msat.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Manufacturing Science and Technology - Manufacturing Processes and Machine Tools</span><br><br>Rs. 270/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;K. Vara Prasada Rao<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new age publishers<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;316<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/mech/msat.jpg">
					<input type="hidden" name="product" value="Manufacturing Science and Technology">
					<input type="hidden" name="author" value="K. Vara Prasada Rao">
					<input type="hidden" name="price" value="270">
					<input type="hidden" name="publisher" value="K. Vara Prasada Rao">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>


		<div class="sub">
			<fieldset>
				<legend>Machine Drawing-1</legend>
				<img src="img/mech/atomd.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">A Textbook of Machine Drawing</span><br><br>Rs. 465/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P.S. Gill<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AbeBooks Seller Since November 24, 2010<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;961<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/mech/atomd.jpg">
					<input type="hidden" name="product" value="A Textbook of Machine Drawing">
					<input type="hidden" name="author" value="P.S. Gill">
					<input type="hidden" name="price" value="465">
					<input type="hidden" name="publisher" value="AbeBooks Seller Since November 24, 2010">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/mech/tomd.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">A TEXTBOOK OF MACHINE DRAWING</span><br><br>Rs. 1270/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R.K.DHAWAN<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AbeBooks Seller Since November 24, 2010<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;316<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/mech/tomd.jpg">
					<input type="hidden" name="product" value="A Textbook of Machine Drawing">
					<input type="hidden" name="author" value="R.K.DHAWAN">
					<input type="hidden" name="price" value="1270">
					<input type="hidden" name="publisher" value="AbeBooks Seller Since November 24, 2010">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>

		<div class="sub">
			<fieldset>
				<legend>Metrology & Instrumentation</legend>
				<img src="img/mech/em.jpeg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Engineering Metrology</span><br><br>Rs. 424/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R K Jain<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Khanna Publishers<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1179<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/mech/em.jpeg">
					<input type="hidden" name="product" value="Engineering Metrology">
					<input type="hidden" name="author" value="R.K.Jain">
					<input type="hidden" name="price" value="424">
					<input type="hidden" name="publisher" value="Khanna Publishers">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/mech/emai.png" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Engineering Metrology and Instrumentation</span><br><br>Rs. 149/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Er. R.K. Rajput<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S.K. Kataria & Sons<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;350<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/mech/emai.png">
					<input type="hidden" name="product" value="Engineering Metrology and Instrumentation">
					<input type="hidden" name="author" value="Er. R.K. Rajput">
					<input type="hidden" name="price" value="149">
					<input type="hidden" name="publisher" value="S.K. Kataria & Sons">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>
</body>
</html>