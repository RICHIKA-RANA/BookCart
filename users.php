<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">       
.tfeed th{
    font-size: 25px;
    text-decoration: overline;
    color: yellowgreen;
}
.tfeed td{
    font-size: 15px;
    color: orange;
    text-align: center; 
}
    </style>
</head>
<body style="background-image: url(img/3.jpg);background-repeat: no-repeat;background-size: cover;">
        <p style="color: white;font-size: 25px;margin-top: 10px;"><span style="color: silver;font-size: 50px;">BookCart</span>.com &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php" style="text-decoration: none;color: white;">Admin</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="orders.php" style="text-decoration: none;color: white;">Orders</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="notifications.php" style="text-decoration: none;color: white;">Notifications</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="feedback.php" style="text-decoration: none;color: white;">Feedback</a></p>
        <div class="tfeed">
        <center>
        <table width="80%" style="margin-top: 100px;background-color: rgba(8, 8, 8, 0.62);">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>E-mail</th>
            <th>Phone Number</th>
            <th>House Number</th>
            <th>Area</th>
            <th>City</th>
            <th>PIN</th>
            <th>State</th>
        </tr>
        <?php
    include("conn.php");
    $qry="select * from login order by Modified desc;";
    $result=mysqli_query($conn,$qry);

    while($data=mysqli_fetch_array($result,MYSQLI_BOTH)){
$idd=$data['uid'];
        $name=$data['Username'];
        $pas=$data['Password'];  

    $qry2="select * from signup where uid=$idd;";
    $result2=mysqli_query($conn,$qry2);

    while($data=mysqli_fetch_array($result2,MYSQLI_BOTH)){
        $mail=$data['Email'];
        $pno=$data['Pno'];
        $hno=$data['Hno'];
        $are=$data['Area'];
        $pin=$data['Pin'];
        $city=$data['City'];
        $sta=$data['State'];
?>
<tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $pas; ?></td>
        <td><?php echo $mail; ?></td>
        <td><?php echo $pno; ?></td>
        <td><?php echo $hno; ?></td>
        <td><?php echo $are; ?></td>
        <td><?php echo $pin; ?></td>
        <td><?php echo $city; ?></td>
        <td><?php echo $sta; ?></td>
    </tr>
<?php }} ?>
        </table>
        </center>
        </div>
</body>
</html>