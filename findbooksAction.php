<?php
	$dep=$_POST['department'];
	$sem=$_POST['semester'];
	if ($dep=='Computer' && $sem=='1stSemester') {
		header('location:firstsem.php');
	}
	else if ($dep=='Mechanical' && $sem=='1stSemester') {
		header('location:firstsem.php');
	}
	else if ($dep=='Civil' && $sem=='1stSemester') {
		header('location:firstsem.php');
	}
	else if ($dep=='Electrical' && $sem=='1stSemester') {
		header('location:firstsem.php');
	}
	else if ($dep=='Computer' && $sem=='2ndSemester') {
		header('location:Compsecondsem.php');
	}
	else if ($dep=='Mechanical' && $sem=='2ndSemester') {
		header('location:secondsem.php');
	}
	else if ($dep=='Civil' && $sem=='2ndSemester') {
		header('location:secondsem.php');
	}
	else if ($dep=='Electrical' && $sem=='2ndSemester') {
		header('location:secondsem.php');
	}
	else if ($dep=='Civil' && $sem=='3rdSemester') {
		header('location:civil3rdsem.php');
	}
	else if ($dep=='Mechanical' && $sem=='3rdSemester') {
		header('location:Mech3rdSem.php');
	}
	else if ($dep=='Computer' && $sem=='3rdSemester') {
		header('location:CompThirdsem.php');
	}
	else if ($dep=='Electrical' && $sem=='3rdSemester') {
		header('location:elect3rdsem.php');
	}
	else{
		header('location:findBooks.php');
	}
?>