<?php
header("refresh:6; url=home.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>.button{ font-size:50px;} 
p1 {
   float: right;

 height:190px;
 width:300px;
 padding:40;
 margin-left:450px;
 border-radius:10px;
 background:rgba(0,0,0,0.5);
 }
 .button {
 border: none;
 color: white;
 padding: 15px 32px;
 text-align: center;
 text-decoration: none;
 display: inline-block;
 font-size: 50px;
 }
 </style>
</head>
<body style="background-image: url(img/2.jpg);background-repeat: no-repeat;background-size: cover;">
	<p style="float: left;font-size: 20px;"> <b>Hi Customer, </b><br><br>
				 Your order has been placed !!<br>
                <i>We are pleased to confim your order<br>"<span style="color: blue;"><?php echo $_SESSION['name']; ?></span>"<br>
				            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Thank you for shopping with Bookcart!
				 </i> </p>
				 <div style="margin-left: 50px;">
<fieldset>
				<legend><?php echo $_SESSION['name']; ?></legend>
				<img src="<?php echo $_SESSION['img']; ?>" width="200px;" height="300px;" style="float: left;">
				<p><span style="font-size: 25px; text-decoration: underline;"><?php echo $_SESSION['name']; ?></span><br><br><?php echo $_SESSION['pri']; ?><br><br>Author &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['auth']; ?><br>Publisher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['pub']; ?><br><br></p>
</fieldset>
</div>
</html>