<!DOCTYPE html>
<html>
<head>
    <title>Notifications</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(img/3.jpg);background-repeat: no-repeat;background-size: cover;">
		<p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: silver;font-size: 50px;">BookCart</span>.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php" style="text-decoration: none;color: white;">Admin</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="orders.php" style="text-decoration: none;color: white;">Orders</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="notifications.php" style="text-decoration: none;color: white;">Notifications</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="feedback.php" style="text-decoration: none;color: white;">Feedback</a></p>
        <fieldset style="background-color:white;margin-left: 100px;margin-right: 100px;">
        <legend style="font-size: 50px;color: orange;">Notification:</legend>
        <center>
        <form action="notificationsAction.php" method="POST">
            <input type="text" name="noti" style="width: 319px;height: 36px;font-size: 20px;"><br><br>
            <input type="submit" value="Post" style="width: 319px;height: 36px;font-size: 20px;">
        </form>
        </center>
</fieldset>
</body>
</html>