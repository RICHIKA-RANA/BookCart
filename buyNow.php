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
	<title>BuyNow</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(img/8.jpg);background-repeat: no-repeat;background-size: cover;">
		<p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: silver;font-size: 50px;">BookCart</span>.com </p>
		<center style="background-color: #d8d0d09c;">
			<table border="2"><tr><td>
				<form method="POST" action="buynowAction.php" style="padding: 20px;">
				<label style="font-size: 20px;color: white;">UserName:</label>
				<?php if($b==true) { echo $_SESSION["un"]; } else { echo("Please Login!"); } ?><br><br>
				<label style="font-size: 20px;color: white;">Email:</label>
				<?php if($b==true) { echo $_SESSION["mail"]; } else { echo("Please Login!"); } ?><br><br>
				<label style="font-size: 20px;color: white;">Phone Number:</label>
				<?php if ($b==true) { echo $_SESSION["pno"]; } else { echo("Please Login!"); } ?><br><br>
				<label style="font-size: 20px;color: white;">House No.,Building name:</label>
				<?php if($b==true) { echo $_SESSION["hno"]; } else { echo("Please Login!"); } ?><br><br>
				<label style="font-size: 20px;color: white;">Road Name,Area,Colony:</label>
				<?php if($b==true) { echo $_SESSION["area"]; } else { echo("Please Login!"); } ?><br><br>
				<label style="font-size: 20px;color: white;">PIN Code:</label>
				<?php if($b==true) { echo $_SESSION["pin"]; } else { echo("Please Login!"); } ?><br><br>
				<label style="font-size: 20px;color: white;">City:</label>
				<?php if($b==true) { echo $_SESSION["city"]; } else { echo("Please Login!"); } ?><br><br>
				<label style="font-size: 20px;color: white;">State:</label>
				<?php if($b==true) { echo $_SESSION["state"]; } else { echo("Please Login!"); } ?><br><br><br><br>

				<?php
	$_SESSION['img']=$_POST['img'];
    $_SESSION['name']=$_POST['product'];
    $_SESSION['auth']=$_POST['author'];
    $_SESSION['pri']=$_POST['price'];
    $_SESSION['pub']=$_POST['publisher'];
	?>
</td><td>
	<div  style="padding: 20px;">
	<img src="<?php echo $_SESSION['img']; ?>" width="128px" height="179px;" style="float: left;">
	<p><span style="font-size: 25px; text-decoration: underline;"><?php echo $_SESSION['name']; ?></span><br><br>Author :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['auth']; ?><br>Publisher :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['pub']; ?></p><br><br>
</div>
</td></tr><tr><td colspan="2">
<center>
		<p>Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['pri']; ?><br>Shipping Charges: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;50<br>Subtotal: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php $total=$_SESSION['pri']+50;
		echo $total; $_SESSION['total']=$total; ?></p><br><br>
	
				<input type="submit" name="submit" value="Confirm" style="width: 500px;height: 35px;font-size: 20px; background-color: blue;border-color: blue;">
				</center>
				</form>
			</td></tr></table>
		</center>
</body>
</html>