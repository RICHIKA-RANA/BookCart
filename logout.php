<?php
	session_start();
	session_destroy();
	header('location:myaccount.php');
?>