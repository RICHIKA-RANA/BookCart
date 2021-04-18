<?php
	$fn=$_POST['firstname'];
	$ln=$_POST['lastname'];
	$me=$_POST['email'];
	$sub=$_POST['subject'];
	include("conn.php");
	$q="INSERT INTO `feedback`(`Fname`, `Lname`, `Email`, `Content`, `Dated`) VALUES ('$fn','$ln','$me','$sub',now());";
	$res=mysqli_query($conn,$q);
	header("location:contactus.php");
?>