<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
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
            <th>FirstName</th>
            <th>LastName</th>
            <th>E-mail</th>
            <th>Feedback</th>
            <th>Dated</th>
        </tr>
        <?php
    include("conn.php");
    $qry="select * from feedback order by Dated desc;";
    $r=mysqli_query($conn,$qry);

    while($data=mysqli_fetch_array($r,MYSQLI_BOTH)) {
        $fn=$data['Fname'];
        $ln=$data['Lname'];
        $em=$data['Email'];
        $con=$data['Content'];
        $dat=$data['Dated'];  
?>
<tr>
        <td><?php echo $fn; ?></td>
        <td><?php echo $ln; ?></td>
        <td><?php echo $em; ?></td>
        <td><?php echo $con; ?></td>
        <td><?php echo $dat; ?></td>
    </tr>
<?php } ?>
        </table>
        </center>
        </div>
</body>
</html>