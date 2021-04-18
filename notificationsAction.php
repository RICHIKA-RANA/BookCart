<?php
include 'conn.php';
$noti=$_POST['noti'];

$qry="insert into notifications (Notification,Created) VALUES ('$noti',now())";
$result=mysqli_query($conn,$qry);
header("location:notifications.php");

?>