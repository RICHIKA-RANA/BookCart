<?php 
    session_start();
    $b=false;
    if(isset($_SESSION['log'])) {
        $b=true;
    }
?>
<html>
<head>
<title>Computer Third Semester</title>
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
    <th colspan="2"><marquee>Digital System & Applications</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	 <picture>
          <source media="(min-width: 650px)" srcset="images/thirdSbook/eng1.jpeg">
          <source media="(min-width: 465px)" srcset="images/thirdSbook/eng1.jpeg">
          <img class="abc" src="images/thirdSbook/eng1.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Principles of Digital Communication Systems and Computer Networks<br>
                   Price: ₹786<br>
                   Author: Prasad K. V. K <br>
                   Publisher: Wiley<br>
				   Pages: 515<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/thirdSbook/eng1.jpeg">
					<input type="hidden" name="product" value="Principles of Digital Communication Systems and Computer Networks">
					<input type="hidden" name="author" value="Prasad K. V. K">
					<input type="hidden" name="price" value="786">
					<input type="hidden" name="publisher" value="Wiley">
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
          <source media="(min-width: 650px)" srcset="images/thirdSbook/eng2.jpeg">
          <source media="(min-width: 465px)" srcset="images/thirdSbook/eng2.jpeg">
          <img class="abc" src="images/thirdSbook/eng2.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Digital Systems and Applications <br>
                   Price: ₹5,180<br>
                   Author: unknown <br>
                   Publisher: Taylor & Francis Inc<br>
				   Pages: 992<br>
				</p>
	  </details></center></div>
	 <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/thirdSbook/eng2.jpeg">
					<input type="hidden" name="product" value="Digital Systems and Applications">
					<input type="hidden" name="author" value="unknown">
					<input type="hidden" name="price" value="5180">
					<input type="hidden" name="publisher" value="Taylor & Francis Inc">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr>
   <th colspan="2"><marquee>Internet Technologies</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/thirdSbook/eng3.jpeg">
          <source media="(min-width: 465px)" srcset="images/thirdSbook/eng3.jpeg">
          <img class="abc" src="images/thirdSbook/eng3.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Trends in Computer Science, Engineering and Information Technology <br>
                   Price: ₹20,029<br>
                   Author: unknown<br>
                   Publisher: Springer-Verlag Berlin and Heidelberg GmbH & Co. KG<br>
				   Pages: 736<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/thirdSbook/eng3.jpeg">
					<input type="hidden" name="product" value="Trends in Computer Science, Engineering and Information Technology">
					<input type="hidden" name="author" value="unknown">
					<input type="hidden" name="price" value="20029">
					<input type="hidden" name="publisher" value="Springer-Verlag Berlin and Heidelberg GmbH & Co. KG">
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
          <source media="(min-width: 650px)" srcset="images/thirdSbook/eng4.jpeg">
          <source media="(min-width: 465px)" srcset="images/thirdSbook/eng4.jpeg">
          <img class="abc" src="images/thirdSbook/eng4.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Computer Networking with Internet Protocols and Technology 1st Edition<br>
                   Price: ₹336<br>
                   Author: Stallings<br>
                   Publisher: Pearson<br>
				   Pages: 662<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/thirdSbook/eng4.jpeg">
					<input type="hidden" name="product" value="Computer Networking with Internet Protocols and Technology 1st Edition">
					<input type="hidden" name="author" value="Stallings">
					<input type="hidden" name="price" value="336">
					<input type="hidden" name="publisher" value="Pearson">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr>
   <th colspan="2"><marquee>Operating Systems</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/thirdSbook/eng5.jpeg">
          <source media="(min-width: 465px)" srcset="images/thirdSbook/eng5.jpeg">
          <img class="abc" src="images/thirdSbook/eng5.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Operating Systems <br>
                   Price: ₹199<br>
                   Author: R. Menaka<br>
                   Publisher: Paperback<br>
				   Pages: 260<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/thirdSbook/eng5.jpeg">
					<input type="hidden" name="product" value="Operating Systems">
					<input type="hidden" name="author" value="R. Menaka">
					<input type="hidden" name="price" value="199">
					<input type="hidden" name="publisher" value="Paperback">
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
          <source media="(min-width: 650px)" srcset="images/thirdSbook/eng6.jpeg">
          <source media="(min-width: 465px)" srcset="images/thirdSbook/eng6.jpeg">
          <img class="abc" src="images/thirdSbook/eng6.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Computer Operating System <br>
                   Price: ₹212<br>
                   Author: Prasanalakshmi B.<br>
                   Publisher: Paperback<br>
				   Pages: 200<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/thirdSbook/eng6.jpeg">
					<input type="hidden" name="product" value="Computer Operating Systems">
					<input type="hidden" name="author" value="Prasanalakshmi B.">
					<input type="hidden" name="price" value="212">
					<input type="hidden" name="publisher" value="Paperback">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr>
   <th colspan="2"><marquee>Advance Programming in C Language</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/thirdSbook/eng7.jpeg">
          <source media="(min-width: 465px)" srcset="images/thirdSbook/eng7.jpeg">
          <img class="abc" src="images/thirdSbook/eng7.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Programming In C <br>
                   Price: ₹189<br>
                   Author:  A. Vijaya Lakshmi<br>
                   Publisher: Paperback<br>
				   Pages: 250<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/thirdSbook/eng7.jpeg">
					<input type="hidden" name="product" value="Programming In C">
					<input type="hidden" name="author" value="A. Vijaya Lakshmi">
					<input type="hidden" name="price" value="189">
					<input type="hidden" name="publisher" value="Paperback">
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
          <source media="(min-width: 650px)" srcset="images/thirdSbook/eng8.jpeg">
          <source media="(min-width: 465px)" srcset="images/thirdSbook/eng8.jpeg">
          <img class="abc" src="images/thirdSbook/eng8.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: C Language Programming <br>
                   Price: ₹586<br>
                   Author: Jani Sachit <br>
                   Publisher: Createspace Independent Publishing Platform<br>
				   Pages: 146<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/thirdSbook/eng8.jpeg">
					<input type="hidden" name="product" value="C Language Programming">
					<input type="hidden" name="author" value="Jani Sachit">
					<input type="hidden" name="price" value="586">
					<input type="hidden" name="publisher" value="Createspace Independent Publishing Platform">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr>
   <th colspan="2"><marquee>Data Communication & Computer Networks</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/thirdSbook/eng9.jpeg">
          <source media="(min-width: 465px)" srcset="images/thirdSbook/eng9.jpeg">
          <img class="abc" src="images/thirdSbook/eng9.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Data Communication and Computer Networks <br>
                   Price: ₹315<br>
                   Author: Pal Ajit<br>
                   Publisher: Paperback<br>
				   Pages: 352<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/thirdSbook/eng9.jpeg">
					<input type="hidden" name="product" value="Data Communication and Computer Networks">
					<input type="hidden" name="author" value="Pal Ajit">
					<input type="hidden" name="price" value="315">
					<input type="hidden" name="publisher" value="Paperback">
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
          <source media="(min-width: 650px)" srcset="images/thirdSbook/eng10.jpeg">
          <source media="(min-width: 465px)" srcset="images/thirdSbook/eng10.jpeg">
          <img class="abc" src="images/thirdSbook/eng10.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Data Communications and Computer Networks  (English, Paperback, )<br>
                   Price: ₹431<br>
                   Author: Gupta Prakash C.<br>
                   Publisher:  Paperback<br>
				   Pages: 832<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/thirdSbook/eng10.jpeg">
					<input type="hidden" name="product" value="Data Communication and Computer Networks">
					<input type="hidden" name="author" value="Gupta Prakash C.">
					<input type="hidden" name="price" value="431">
					<input type="hidden" name="publisher" value="Paperback">
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