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
	<title>Electrical 3rd Semester</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(img/14.jpg);background-repeat: no-repeat;background-size: cover;">
		<p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: silver;font-size: 50px;">BookCart</span>.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href="home.php" style="text-decoration: none;color: white;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php  if($b==true){ ?><a href="logout.php" style="text-decoration: none;color: white;">LogOut</a><?php }  else { ?><a href="login.php" style="text-decoration: none;color: white;">LogIn</a><?php } ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.php" style="text-decoration: none;color: white;">ContactUs</a></p>
		<div class="sub">
			<fieldset>
				<legend>Fundamentals of Electrical Engineering</legend>
				<img src="img/elect/bee.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Electrical Science</span><br><br>Rs. 200/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;V.K.Mehta<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; S. Chand<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;718<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/elect/bee.jpg">
					<input type="hidden" name="product" value="Electrical Science">
					<input type="hidden" name="author" value="V.K.Mehta">
					<input type="hidden" name="price" value="200">
					<input type="hidden" name="publisher" value="S. Chand">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/elect/atoet.jpeg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Electrical Technology</span><br><br>Rs. 260/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JB Gupta<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SK Kataria<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;346<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/elect/atoet.jpeg">
					<input type="hidden" name="product" value="Electrical Technology">
					<input type="hidden" name="author" value="JB Gupta">
					<input type="hidden" name="price" value="260">
					<input type="hidden" name="publisher" value="SK Kataria">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>

		<div class="sub">
			<fieldset>
				<legend>Electrical Machines-1</legend>
				<img src="img/elect/em.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Electrical Machines</span><br><br>Rs. 356/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S.K Sahdev<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unique International Publications<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;708<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/elect/em.jpg">
					<input type="hidden" name="product" value="Electrical Mechines">
					<input type="hidden" name="author" value="S.K Sahdev">
					<input type="hidden" name="price" value="356">
					<input type="hidden" name="publisher" value="Unique International Publications">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/elect/emb.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Electrical Machines</span><br><br>Rs. 76/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;S.K. Bhattacharya<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tata McGraw<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;316<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/elect/emb.jpg">
					<input type="hidden" name="product" value="Electrical Mechines">
					<input type="hidden" name="author" value="S.K. Bhattacharya">
					<input type="hidden" name="price" value="76">
					<input type="hidden" name="publisher" value="Tata McGraw">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>

		<div class="sub">
			<fieldset>
				<legend>Electric Device & Circuits-1</legend>
				<img src="img/elect/bealc.jfif" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Basic Electonics and Linear Circuits</span><br><br>Rs. 166/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N.N Bhargava<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TataMcGraw Hills<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;708<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/elect/bealc.jfif">
					<input type="hidden" name="product" value="Basic Electonics and Linear Circuits">
					<input type="hidden" name="author" value="N.N Bhargava">
					<input type="hidden" name="price" value="166">
					<input type="hidden" name="publisher" value="Tata McGraw Hills">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/elect/aimc.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Advances In Material Science</span><br><br>Rs. 76/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R.K.Dogra<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jmd Sons International<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;316<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/elect/aimc.jpg">
					<input type="hidden" name="product" value="Advances In Material Science">
					<input type="hidden" name="author" value="R.K.Dogra">
					<input type="hidden" name="price" value="76">
					<input type="hidden" name="publisher" value="Jmd Sons International">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>

		<div class="sub">
			<fieldset>
				<legend>Manufacturing Technology-1</legend>
				<img src="img/elect/aciwt.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">A Course In Workshop Technology</span><br><br>Rs. 255/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B.S. Raghuwanshi<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dhanpat Rai & Co.<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;961<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/elect/aciwt.jpg">
					<input type="hidden" name="product" value="A Course In Workshop Technology">
					<input type="hidden" name="author" value="B.S. Raghuwanshi">
					<input type="hidden" name="price" value="255">
					<input type="hidden" name="publisher" value="Dhanpat Rai & Co.">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/elect/msat.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">Manufacturing Science and Technology - Manufacturing Processes and Machine Tools</span><br><br>Rs. 270/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;K. Vara Prasada Rao<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;newagepublishers<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;316<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/elect/msat.jpg">
					<input type="hidden" name="product" value="Manufacturing Science and Technology - Manufacturing Processes and Machine Tools">
					<input type="hidden" name="author" value="K. Vara Prasada Rao">
					<input type="hidden" name="price" value="270">
					<input type="hidden" name="publisher" value="newagepublishers">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>
		<div class="sub">
			<fieldset>
				<legend>Machine Drawing-1</legend>
				<img src="img/elect/atomd.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">A Textbook of Machine Drawing</span><br><br>Rs. 465/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P.S. Gill<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AbeBooks Seller Since November 24, 2010<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;961<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/elect/atomd.jpg">
					<input type="hidden" name="product" value="A Textbook of Machine Drawing">
					<input type="hidden" name="author" value="P.S. Gill">
					<input type="hidden" name="price" value="465">
					<input type="hidden" name="publisher" value="AbeBooks Seller Since November 24, 2010">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>

				<img src="img/elect/atomdr.jpg" width="128px" height="179px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;">A TEXTBOOK OF MACHINE DRAWING</span><br><br>Rs. 1270/- <br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R.K.DHAWAN<br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AbeBooks Seller Since November 24, 2010<br>Pages &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;316<br><br></p>
				<table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="img/elect/atomdr.jpg">
					<input type="hidden" name="product" value="A Textbook of Machine Drawing">
					<input type="hidden" name="author" value="R.K.DHAWAN">
					<input type="hidden" name="price" value="1270">
					<input type="hidden" name="publisher" value="AbeBooks Seller Since November 24, 2010">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br>
			</fieldset>
		</div><br><br>
</body>
</html>