<?php 
    session_start();
    $b=false;
    if(isset($_SESSION['log'])) {
        $b=true;
    }
?>
<html>
<head>
<title>First Semester</title>
<link rel="stylesheet" type="text/css" href= "style2.css" >
<style type="text/css">
	marquee {
		color: white;
		font-size: 20px;
		text-decoration: overline;
	}
	tr{
			background-color: #808080a3;
	}
</style>
</head>
<body style="background-image: url(img/4.jpg);background-repeat: no-repeat;background-size: cover;">
		<p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: darkslategrey;font-size: 50px;">BookCart</span>.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href="home.php" style="text-decoration: none;color: white;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php  if($b==true){ ?><a href="logout.php" style="text-decoration: none;color: white;">LogOut</a><?php }  else { ?><a href="login.php" style="text-decoration: none;color: white;">LogIn</a><?php } ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.php" style="text-decoration: none;color: white;">ContactUs</a></p>
		<table style="width:100%;">
			<tbody>
					<tr>
						<th colspan="2"><marquee>English and Communication Skills-1</marquee></th>
					</tr>
					<tr>  
						<td style="width: 50%">
							<div class ="wrapper">
								<div class="imagec">
									<center>
										<picture>
											<source media="(min-width: 650px)" srcset="images/fstSbook/eng1.jpeg">
											<source media="(min-width: 465px)" srcset="images/fstSbook/eng1.jpeg">
											<img class="abc" src="images/fstSbook/eng1.jpeg"width="300px"height="250">
										</picture>
										<details>
											<summary style="margin:6px;">Description
											</summary><p>Name: Text Book of English And Communication Skills 1<br>
											Price: ₹160<br>
											Author: Parmod Kumar Singla, n Dhillon, Alwinder <br>
											Publisher: Abhishek Publications<br>
											Pages: 250<br>
											</p>
										</details>
									</center>
								</div>
								<div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng1.jpeg">
					<input type="hidden" name="product" value="Text Book of English And Communication Skills 1">
					<input type="hidden" name="author" value="Parmod Kumar Singla, n Dhillon, Alwinder">
					<input type="hidden" name="price" value="160">
					<input type="hidden" name="publisher" value="Abhishek Publications">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div>
							</div>
						</td>
						<td style="width: 50%">
							<div class ="wrapper">
								<div class="imagec">
									<center>
										<picture>
											<source media="(min-width: 650px)" srcset="images/fstSbook/eng2.jpeg">
											<source media="(min-width: 465px)" srcset="images/fstSbook/eng2.jpeg">
											<img class="abc" src="images/fstSbook/eng2.jpeg"width="300px"height="250">
										</picture>
										<details>
											<summary style="margin:6px;">Description</summary>
											<p>Name:Communication Skills <br>
											Price: ₹195<br>
											Author: Parul Popat,Kaushul Kotadia <br>
											Publisher: Shivank Publications<br>
											Pages: 240<br>
											</p>
										</details>
									</center>
								<div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng2.jpeg">
					<input type="hidden" name="product" value="Communication Skills">
					<input type="hidden" name="author" value="Parul Popat,Kaushul Kotadia">
					<input type="hidden" name="price" value="195">
					<input type="hidden" name="publisher" value="Shivank Publications">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div>
							</div>
						</td>
					</tr>
					
<tr>
   <th colspan="2"><marquee>Applied Mathematics-1</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/fstSbook/eng3.jpeg">
          <source media="(min-width: 465px)" srcset="images/fstSbook/eng3.jpeg">
          <img class="abc" src="images/fstSbook/eng3.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Advanced Engineering Mathematics<br>
                   Price: ₹677<br>
                   Author: Erwin Kreyszig <br>
                   Publisher: Mittal Books<br>
				   Pages: 1148<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng3.jpeg">
					<input type="hidden" name="product" value="Advanced Engineering Mathematics">
					<input type="hidden" name="author" value="Erwin Kreyszig">
					<input type="hidden" name="price" value="677">
					<input type="hidden" name="publisher" value="Mittal Books">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/fstSbook/eng4.jpeg">
          <source media="(min-width: 465px)" srcset="images/fstSbook/eng4.jpeg">
          <img class="abc" src="images/fstSbook/eng4.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Michael Faraday<br>
                   Price: ₹499<br>
                   Author: Ludwig Charles<br>
                   Publisher:  Herald Press<br>
				   Pages: 207<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng4.jpeg">
					<input type="hidden" name="product" value="Michael Faraday">
					<input type="hidden" name="author" value="Ludwig Charles">
					<input type="hidden" name="price" value="499">
					<input type="hidden" name="publisher" value="Herald Press">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr>
   <th colspan="2"><marquee>Applied Physics-1</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/fstSbook/eng5.jpeg">
          <source media="(min-width: 465px)" srcset="images/fstSbook/eng5.jpeg">
          <img class="abc" src="images/fstSbook/eng5.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Physics-1 Applied Physics<br>
                   Price: ₹217<br>
                   Author: Bipin Behari SwainPrasanta Kumar Jena<br>
                   Publisher: Kitab Mahal<br>
				   Pages: 306<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng5.jpeg">
					<input type="hidden" name="product" value="Physics-1 Applied Physics">
					<input type="hidden" name="author" value="Bipin Behari SwainPrasanta Kumar Jena">
					<input type="hidden" name="price" value="217">
					<input type="hidden" name="publisher" value="Kitab Mahal">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/fstSbook/eng6.jpeg">
          <source media="(min-width: 465px)" srcset="images/fstSbook/eng6.jpeg">
          <img class="abc" src="images/fstSbook/eng6.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: A Laboratory Manual of Physics and Applied Electricity, Volume I  <br>
                   Price: ₹1,899<br>
                   Author: Edward Leamington Nichols<br>
                   Publisher: Bibliolife, Llc<br>
				   Pages: 310<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng6.jpeg">
					<input type="hidden" name="product" value="A Laboratory Manual of Physics and Applied Electricity, Volume I">
					<input type="hidden" name="author" value="Edward Leamington Nichols">
					<input type="hidden" name="price" value="1899">
					<input type="hidden" name="publisher" value="Bibliolife, Llc">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr>
   <th colspan="2"><marquee>Applied Chemistry-1</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/fstSbook/eng7.jpeg">
          <source media="(min-width: 465px)" srcset="images/fstSbook/eng7.jpeg">
          <img class="abc" src="images/fstSbook/eng7.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name:Chemistry Applied to Arts and Manufactures; Volume 1 <br>
                   Price: ₹1,190<br>
                   Author: unknown<br>
                   Publisher: Wentworth Press<br>
				   Pages: 350<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng7.jpeg">
					<input type="hidden" name="product" value="Chemistry Applied to Arts and Manufactures; Volume 1">
					<input type="hidden" name="author" value="unknown">
					<input type="hidden" name="price" value="1190">
					<input type="hidden" name="publisher" value="Wentworth Press">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/fstSbook/eng8.jpeg">
          <source media="(min-width: 465px)" srcset="images/fstSbook/eng8.jpeg">
          <img class="abc" src="images/fstSbook/eng8.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name:Chemistry Applied to Arts and Manufactures, Volume 1  <br>
                   Price: ₹2,096<br>
                   Author: Chaptal Jean-Antoine-Claude <br>
                   Publisher: BiblioLife, LLC<br>
				   Pages: 350<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng8.jpeg">
					<input type="hidden" name="product" value="Chemistry Applied to Arts and Manufactures, Volume 1">
					<input type="hidden" name="author" value="Chaptal Jean-Antoine-Claude">
					<input type="hidden" name="price" value="2096">
					<input type="hidden" name="publisher" value="BiblioLife, LLC">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr>
   <th colspan="2"><marquee>Basics of Information Technology</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/fstSbook/eng9.jpeg">
          <source media="(min-width: 465px)" srcset="images/fstSbook/eng9.jpeg">
          <img class="abc" src="images/fstSbook/eng9.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Computer for Nurses - Basics of Information Technology 1st Edition <br>
                   Price: ₹233<br>
                   Author: Ranju Sood<br>
                   Publisher: APC Books<br>
				   Pages: 152<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng9.jpeg">
					<input type="hidden" name="product" value="Computer for Nurses - Basics of Information Technology 1st Edition">
					<input type="hidden" name="author" value="Ranju Sood">
					<input type="hidden" name="price" value="233">
					<input type="hidden" name="publisher" value="APC Books">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/fstSbook/eng10.jpeg">
          <source media="(min-width: 465px)" srcset="images/fstSbook/eng10.jpeg">
          <img class="abc" src="images/fstSbook/eng10.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name:Information Technology Basics: Volume 4  <br>
                   Price: ₹800<br>
                   Author: Kumar P. S. G. <br>
                   Publisher: BR Publishing Corporation<br>
				   Pages: 280<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng10.jpeg">
					<input type="hidden" name="product" value="Information Technology Basics: Volume 4">
					<input type="hidden" name="author" value="Kumar P. S. G.">
					<input type="hidden" name="price" value="800">
					<input type="hidden" name="publisher" value="BR Publishing Corporation">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr>
   <th colspan="2"><marquee>Engineering Drawing-1</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/fstSbook/eng11.jpeg">
          <source media="(min-width: 465px)" srcset="images/fstSbook/eng11.jpeg">
          <img class="abc" src="images/fstSbook/eng11.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: A Comprehensive Textbook of Engineering Drawing 1 <br>
                   Price: ₹180<br>
                   Author: Punjab Rai<br>
                   Publisher: Abhishek Publications<br>
				   Pages: 298<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng11.jpeg">
					<input type="hidden" name="product" value="A Comprehensive Textbook of Engineering Drawing 1">
					<input type="hidden" name="author" value="Punjab Rai">
					<input type="hidden" name="price" value="180">
					<input type="hidden" name="publisher" value="Abhishek Publications">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/fstSbook/eng12.jpeg">
          <source media="(min-width: 465px)" srcset="images/fstSbook/eng12.jpeg">
          <img class="abc" src="images/fstSbook/eng12.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name:Engineering Drawing-I  <br>
                   Price: ₹190<br>
                   Author: K.R. Tanwar<br>
                   Publisher:JBC Press<br>
				   Pages: 291<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng12.jpeg">
					<input type="hidden" name="product" value="Engineering Drawing-I">
					<input type="hidden" name="author" value="K.R. Tanwar">
					<input type="hidden" name="price" value="190">
					<input type="hidden" name="publisher" value="JBC Press">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr>
   <th colspan="2"><marquee>General Workshop Practice-1</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/fstSbook/eng13.jpeg">
          <source media="(min-width: 465px)" srcset="images/fstSbook/eng13.jpeg">
          <img class="abc" src="images/fstSbook/eng13.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Workshop Practice <br>
                   Price: ₹399<br>
                   Author: Rajput R. K. <br>
                   Publisher: Laxmi Publications<br>
				   Pages: 518<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng13.jpeg">
					<input type="hidden" name="product" value="Workshop Practice">
					<input type="hidden" name="author" value="Rajput R. K.">
					<input type="hidden" name="price" value="399">
					<input type="hidden" name="publisher" value="Laxmi Publications">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/fstSbook/eng14.jpeg">
          <source media="(min-width: 465px)" srcset="images/fstSbook/eng14.jpeg">
          <img class="abc" src="images/fstSbook/eng14.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Modern Workshop Practice, As Applied to Marine, Land and Locomotive Engines, Floating Docks, Dredging Machines, Bridges, Ship Building, Cranes, Etc., Etc <br>
                   Price: ₹1,489<br>
                   Author: John G. Winton <br>
                   Publisher:  Franklin Classics Trade Press<br>
				   Pages: 450<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/fstSbook/eng14.jpeg">
					<input type="hidden" name="product" value="Modern Workshop Practice">
					<input type="hidden" name="author" value="John G. Winton">
					<input type="hidden" name="price" value="1489">
					<input type="hidden" name="publisher" value="Franklin Classics Trade Press">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
</tbody>
</table>
</body>
</html>