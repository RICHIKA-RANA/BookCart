<?php
	$nme=$_POST['uname'];
	$mail=$_POST['mail'];
	$pas=$_POST['pass'];
	$pno=$_POST['pno'];
	$hno=$_POST['hno'];
	$area=$_POST['area'];
	$pin=$_POST['pin'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	session_start();	
	$conn=mysqli_connect("localhost","root","","books");
	$qry="insert into login(Username,Password,Type,Created,Modified) values('$nme','$pas','user',now(),now());";
	$rslt=mysqli_query($conn,$qry);
	$id=mysqli_insert_id($conn);
	$qry2="INSERT INTO signup(uid,Email,Pno,Hno,AREA,Pin,City,State,Created) VALUES ('$id','$mail','$pno','$hno','$area','$pin','$city','$state',NOW());";
	$rslt2=mysqli_query($conn,$qry2);
	if(mysqli_insert_id($conn)){
		$_SESSION['success']=true;
		header("location:login.php");
	}
?>