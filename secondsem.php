<?php 
    session_start();
    $b=false;
    if(isset($_SESSION['log'])) {
        $b=true;
    }
?>
<html>
<head>
<title>Second Semester</title>
<link rel="stylesheet" type="text/css" href= "style2.css" >
</head>
<body style="background-image: url(img/14.jpg);background-repeat: no-repeat;background-size: cover;">
		<p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: silver;font-size: 50px;">BookCart</span>.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<a href="home.php" style="text-decoration: none;color: white;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php  if($b==true){ ?><a href="logout.php" style="text-decoration: none;color: white;">LogOut</a><?php }  else { ?><a href="login.php" style="text-decoration: none;color: white;">LogIn</a><?php } ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.php" style="text-decoration: none;color: white;">ContactUs</a></p>
		<table border="3px;" style="width:100%; font-weight: bold;background-color:#7b717370;">
<tbody>
<tr style="background-color:#7b717370;">
    <th colspan="2"><marquee>English and Communication Skills-2</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	 <picture>
          <source media="(min-width: 650px)" srcset="images/secSbook/eng1.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng1.jpeg">
          <img class="abc" src="images/secSbook/eng1.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Neeraj BEGAE 182 English Communication Skills<br>
                   Price: ₹108<br>
                   Author: Neeraj Publication <br>
                   Publisher: Neeraj Publication<br>
				   Pages: 150<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng1.jpeg">
					<input type="hidden" name="product" value="Neeraj BEGAE 182 English Communication Skills">
					<input type="hidden" name="author" value="Neeraj Publication">
					<input type="hidden" name="price" value="108">
					<input type="hidden" name="publisher" value="Neeraj Publication">
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
          <source media="(min-width: 650px)" srcset="images/secSbook/eng2.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng2.jpeg">
          <img class="abc" src="images/secSbook/eng2.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name:DECODE-Communication Skills for BATU<br>
                   Price: ₹140<br>
                   Author: Dr. Meenu Pandey, Roma M. Ludrik <br>
                   Publisher: Technical Publications<br>
				   Pages: 140<br>
				</p>
	  </details></center></div>
	 <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng2.jpeg">
					<input type="hidden" name="product" value="DECODE-Communication Skills for BATU">
					<input type="hidden" name="author" value="Dr. Meenu Pandey, Roma M. Ludrik">
					<input type="hidden" name="price" value="140">
					<input type="hidden" name="publisher" value="Technical Publications">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr style="background-color:#7b717370;">
   <th colspan="2"><marquee>Applied Mathematics-2</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/secSbook/eng3.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng3.jpeg">
          <img class="abc" src="images/secSbook/eng3.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Applied Mathematics-II <br>
                   Price: ₹450<br>
                   Author: R.D. SHARMA<br>
                   Publisher: Dhanpat Rai<br>
				   Pages: 190<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng3.jpeg">
					<input type="hidden" name="product" value="Applied Mathematics-II">
					<input type="hidden" name="author" value="R.D. SHARMA">
					<input type="hidden" name="price" value="450">
					<input type="hidden" name="publisher" value="Dhanpat Rai">
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
          <source media="(min-width: 650px)" srcset="images/secSbook/eng4.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng4.jpeg">
          <img class="abc" src="images/secSbook/eng4.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name:Applied Mathematics- II <br>
                   Price: ₹335<br>
                   Author: Sachdeva<br>
                   Publisher: Kataria, S. K., & Sons<br>
				   Pages: 207<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng4.jpeg">
					<input type="hidden" name="product" value="Applied Mathematics-II">
					<input type="hidden" name="author" value="Sachdeva">
					<input type="hidden" name="price" value="335">
					<input type="hidden" name="publisher" value="Kataria, S. K., & Sons">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr style="background-color:#7b717370;">
   <th colspan="2"><marquee>Applied Physics-2</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/secSbook/eng5.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng5.jpeg">
          <img class="abc" src="images/secSbook/eng5.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: A Textbook of Applied Physics: Volume II<br>
                   Price: ₹355<br>
                   Author: Jha A. K.<br>
                   Publisher: I K International Publishing House Pvt. Ltd<br>
				   Pages: 418<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng5.jpeg">
					<input type="hidden" name="product" value="A Textbook of Applied Physics: Volume II">
					<input type="hidden" name="author" value="Jha A. K.">
					<input type="hidden" name="price" value="335">
					<input type="hidden" name="publisher" value="I K International Publishing House Pvt. Ltd">
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
          <source media="(min-width: 650px)" srcset="images/secSbook/eng6.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng6.jpeg">
          <img class="abc" src="images/secSbook/eng6.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Applied Physics: v. 2<br>
                   Price: ₹120<br>
                   Author: Karkare Manasi<br>
                   Publisher: I K International Publishing House Pvt. Ltd<br>
				   Pages: 254<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng6.jpeg">
					<input type="hidden" name="product" value="Applied Physics:v. 2">
					<input type="hidden" name="author" value="Karkare Manasi">
					<input type="hidden" name="price" value="120">
					<input type="hidden" name="publisher" value="I K International Publishing House Pvt. Ltd">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr style="background-color:#7b717370;">
   <th colspan="2"><marquee>Applied Chemistry-2</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/secSbook/eng7.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng7.jpeg">
          <img class="abc" src="images/secSbook/eng7.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name:Applied Chemistry-Ii <br>
                   Price: ₹200<br>
                   Author:Dhar<br>
                   Publisher: VAYU EDUCATION OF INDIA<br>
				   Pages: 250<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng7.jpeg">
					<input type="hidden" name="product" value="Applied Chemistry-Ii">
					<input type="hidden" name="author" value="Dhar">
					<input type="hidden" name="price" value="200">
					<input type="hidden" name="publisher" value="VAYU EDUCATION OF INDIA">
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
          <source media="(min-width: 650px)" srcset="images/secSbook/eng8.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng8.jpeg">
          <img class="abc" src="images/secSbook/eng8.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name:A Dictionary of Applied Chemistry; Volume 2  <br>
                   Price: ₹1,899<br>
                   Author: unknown <br>
                   Publisher: Wentworth Press<br>
				   Pages: 300<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng8.jpeg">
					<input type="hidden" name="product" value="A Dictionary of Applied Chemistry; Volume 2">
					<input type="hidden" name="author" value="unknown">
					<input type="hidden" name="price" value="1899">
					<input type="hidden" name="publisher" value="Wentworth Press">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr style="background-color:#7b717370;">
   <th colspan="2"><marquee>Environmental Studies & Disaster Managment</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/secSbook/eng11.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng11.jpeg">
          <img class="abc" src="images/secSbook/eng11.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: OBJECTIVE ENVIRONMENTAL STUDIES AND DISASTER MANAGEMENT   <br>
                   Price: ₹130<br>
                   Author: M. PrasanthrajanA. Balasubramanian<br>
                   Publisher: Scientific Publishers India<br>
				   Pages: 146<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng11.jpeg">
					<input type="hidden" name="product" value="OBJECTIVE ENVIRONMENTAL STUDIES AND DISASTER MANAGEMENT">
					<input type="hidden" name="author" value="M. PrasanthrajanA. Balasubramanian">
					<input type="hidden" name="price" value="130">
					<input type="hidden" name="publisher" value="Scientific Publishers India">
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
          <source media="(min-width: 650px)" srcset="images/secSbook/eng12.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng12.jpeg">
          <img class="abc" src="images/secSbook/eng12.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name:Disaster Management, Corporate Social Responsibility and Conservation Issues  <br>
                   Price: ₹476<br>
                   Author:Singh Narayan<br>
                   Publisher:Teri Press<br>
				   Pages: 291<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng12.jpeg">
					<input type="hidden" name="product" value="Disaster Management, Corporate Social Responsibility and Conservation Issues">
					<input type="hidden" name="author" value="Singh Narayan">
					<input type="hidden" name="price" value="476">
					<input type="hidden" name="publisher" value="Teri Press">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr style="background-color:#7b717370;">
   <th colspan="2"><marquee>Engineering Drawing-2</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/secSbook/eng13.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng13.jpeg">
          <img class="abc" src="images/secSbook/eng13.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Engineering Drawing-Ii<br>
                   Price: ₹98<br>
                   Author:K.R. Tanwar<br>
                   Publisher: JBC Press<br>
				   Pages: 114<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng13.jpeg">
					<input type="hidden" name="product" value="Engineering Drawing-Ii">
					<input type="hidden" name="author" value="K.R. Tanwar">
					<input type="hidden" name="price" value="98">
					<input type="hidden" name="publisher" value="JBC Press">
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
          <source media="(min-width: 650px)" srcset="images/secSbook/eng14.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng14.jpeg">
          <img class="abc" src="images/secSbook/eng14.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: ITI Engineering Drawing Mechanical Group (I & II Year)<br>
                   Price: ₹245<br>
                   Author: Hemraj Agarwal <br>
                   Publisher:  Neelkanth Publishers Pvt. Ltd.<br>
				   Pages: 438<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng14.jpeg">
					<input type="hidden" name="product" value="ITI Engineering Drawing Mechanical Group (I & II Year)">
					<input type="hidden" name="author" value="Hemraj Agarwal">
					<input type="hidden" name="price" value="245">
					<input type="hidden" name="publisher" value="Neelkanth Publishers Pvt. Ltd.">
					<input type="submit" name="submit" value="BuyNow">
				</form></th></tr></table><br><br></center>
	  </div></div>
    </div>
	</td>
</tr>
<tr style="background-color:#7b717370;">
   <th colspan="2"><marquee>General Workshop Practice-2</marquee></th>
</tr>
<tr>  
    <td style="width: 50%">
	<div class ="wrapper">
	  <div class="imagec">
	 <center>
	  <picture>
          <source media="(min-width: 650px)" srcset="images/secSbook/eng15.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng15.jpeg">
          <img class="abc" src="images/secSbook/eng15.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name: Restoration of Forests <br>
                   Price: ₹1,558<br>
                   Author: unknown<br>
                   Publisher: Springer<br>
				   Pages: 462<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng15.jpeg">
					<input type="hidden" name="product" value="Restoration of Forests">
					<input type="hidden" name="author" value="unknown">
					<input type="hidden" name="price" value="1558">
					<input type="hidden" name="publisher" value="Springer">
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
          <source media="(min-width: 650px)" srcset="images/secSbook/eng16.jpeg">
          <source media="(min-width: 465px)" srcset="images/secSbook/eng16.jpeg">
          <img class="abc" src="images/secSbook/eng16.jpeg"width="300px"height="250">
      </picture>
	  <details>
	  <summary style="margin:6px;">Description
	  </summary><p>Name:Motorcycle Workshop Practice Techbook<br>
                   Price:₹2,708<br>
                   Author:Haynes Publishing<br>
                   Publisher: Haynes Publishing Group<br>
				   Pages: 256<br>
				</p>
	  </details></center></div>
	  <div style="width:656px;margin-top:20px;margin-left:40px;"><center>
	  <table>
					<tr><th>
				<form method="POST" action="buyNow.php">
					<input type="hidden" name="img" value="images/secSbook/eng16.jpeg">
					<input type="hidden" name="product" value="Motorcycle Workshop Practice Techbook">
					<input type="hidden" name="author" value="Haynes Publishing">
					<input type="hidden" name="price" value="2708">
					<input type="hidden" name="publisher" value="Haynes Publishing Group">
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