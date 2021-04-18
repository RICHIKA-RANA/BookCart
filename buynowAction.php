 <?php
	session_start();
	$un=$_SESSION['un'];
	$mail=$_SESSION['mail'];
    $pn=$_SESSION['pno'];
    $hn=$_SESSION['hno'];
    $area=$_SESSION['area'];
    $pin=$_SESSION['pin'];
    $city=$_SESSION['city'];
    $state=$_SESSION['state'];
    if ($un=$mail=$pn=$hn=$area=$pin=$city=$state=="Please Login!") {
        header("location:login.php");
    }
    else {
    include("conn.php");
    $q="INSERT INTO `buynow`(`uid`, `Img`, `PName`, `Author`, `Price`, `Publisher`, `Date`) VALUES ('$uid','$img','$pn','$au','$to','$pu',now());";
    $rslt=mysqli_query($conn,$q);
    header("location:payment.php");
}
?>