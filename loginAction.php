<?php
	session_start();
	$name=$_POST['uname'];
	$pass=$_POST['pass'];
	include('conn.php');
		$qry="select * from login where Username='$name' && Password='$pass';";
		$rslt=mysqli_query($conn,$qry);
		while($data=mysqli_fetch_array($rslt)) {
		$aid= $data['uid'];
		$un=$data['Username'];
		$pass=$data['Password'];
		$typ= $data['Type'];
		$_SESSION['un']='$un';
		if($aid!=null) {
			$_SESSION['log']=true;
			$_SESSION['un']=$un;
			$_SESSION['user']=$aid;
			if ($typ==Admin) {
				header("location:admin.php");
			}
			else{
				header("location:home.php");
			}
		$qry2="select * from signup where uid='$aid';";
		$rslt2=mysqli_query($conn,$qry2);
		while($data=mysqli_fetch_array($rslt2)) {
		$mail= $data['Email'];
		$pno=$data['Pno'];
		$hno=$data['Hno'];
		$are=$data['Area'];
		$pin=$data['Pin'];
		$city= $data['City'];
		$state= $data['State'];
			$_SESSION['mail']=$mail;
			$_SESSION['pno']=$pno;
			$_SESSION['hno']=$hno;
			$_SESSION['area']=$are;
			$_SESSION['pin']=$pin;
			$_SESSION['city']=$city;
			$_SESSION['state']=$state;
		}
	}
}
?>