<html>
 <head>
  <title>Contact Us</title>
  <style type="text/css">
input[type=submit]
{
 background-color: blue;
border: none;
color: white;
padding: 18px 50px;
border-radius :7px;
cursor: pointer; 
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
.contact{
	color: black;
	background-color:#808080a3;
	padding-left: 30px;
	border:solid 808080a3;
	height: 700px;
}
.contact span{
	font-size: 20px;
	color: black;
}
input[type=submit]:hover {
  background-color: #45a049;
}
  </style>
  <link rel="stylesheet" type="text/css" href="style2.css">
 </head>
 <body style="background-image: url(img/4.jpg);background-repeat: no-repeat;background-size: cover;">
		<p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: darkslategrey;font-size: 50px;">BookCart</span>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="home.php" style="text-decoration: none;color: white;">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="findBooks.php" style="text-decoration: none;color: white;">FindBooks</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="myaccount.php" style="text-decoration: none;color: white;">MyAccount</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contactus.php" style="text-decoration: none;color: white;">ContactUs</a></p>

			
<div class="contact">
	
<div style="float: left;">
    <h1 style="color: green;font-size: 30px;text-decoration: overline;">Contact Us:</h1>
    <p style="font-size: 15px;padding: 50px;color: white;"><span style="font-size: 20px;">Name ---</span> Saloni<br><span style="font-size: 20px;">Email ---</span> sonisaloni4624@gmail.com<br><span style="font-size: 20px;">Contact No. ---</span> 8544701575<br><br>
    	<span style="font-size: 20px;">Name ---</span> Richika Rana<br><span style="font-size: 20px;">Email ---</span> richikarana18@gmail.com<br><span style="font-size: 20px;">Contact No. ---</span> 8219088695<br><br>
    	<span style="font-size: 20px;">Name ---</span> Karan Sharma<br><span style="font-size: 20px;">Email ---</span> sharmakaran9229@gmail.com<br><span style="font-size: 20px;">Contact No. ---</span> 8580441526<br><br></p>
</div>
    <div style="margin-left: 500px;padding-top: 2px;">
				<h1 style="color: green;font-size: 30px;text-decoration: overline;">Feedback:</h1>
    <form action="feedAction.php" method="POST">
        					<label for="fname">First Name</label>
							<input type="text" id="fname" name="firstname" placeholder="Enter Your name..">

							<label for="lname">Last Name</label>
							<input type="text" id="lname" name="lastname" placeholder="Enter Your last name..">

							<label for="Email">Email</label>
							<input type="text" id="email" name="email" placeholder="Enter Your email..">

							<label for="subject">Subject</label>
							<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
							<center><input type="submit" value="Submit"></center>
    </form>
</div>
</div>
 </body>
</html>
   