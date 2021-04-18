<?php
	session_start();
?>
<html>
<head><link rel="stylesheet" type="text/css" href="mycart.css"></head>
<body>
<h1 style="color:#0f93e0; height:43px; width:1283px; background-color:antiquewhite;">Shopping Cart</h1>
	<div class="container">
	
	<table  border="3px;" style="width:100%; font-weight: bold;background-color:#fff4f6;">
	    <tbody>
			<tr style="background-color:lightyellow;">
				<div class="menu">
					<th  style="width:300px;">Image</th>
					<th style="width:412px;">Product Details</th>
					<th style="width:130px;">Price</th>
				</div>
		  </tr>
		   <tr>
				<td style="text-align:center;">
					<picture>
						<source media="(max-width: 650px)" srcset="images/fstSbook/eng1.jpeg">
						<source media="(min-width: 465px)" srcset="images/fstSbook/eng1.jpeg">
						<img class="abc" src="<?php echo $_SESSION['image']; ?>" width="300px"height="250">
					</picture>
				</td>
				<td style="text-align:center;">
					<div>
						<p class="description">Name: <?php echo $_SESSION['pname']; ?><br>
							Author: <?php echo $_SESSION['auname']; ?><br>
							Publisher: <?php echo $_SESSION['publish']; ?>
						</p>
					</div>
				</td>
				<td style="text-align:center;">
					<div> ₹<?php echo $_SESSION['pric']; ?></div>
				</td>
		  </tr>
		  <tr>
				
		  </tr>
		</tbody>
	</table></br></br></br>
	<table border="3px;" style="width:100%; font-weight: bold;background-color:#fff4f6;">
		<tbody>
			<tr>
			   <td>
					<div>
						<label>Shipping</label>
						<div>50</div>
					</div>
			   </td>
			   <td>
					<div>
						<label>Grand Total</label>
						<div><?php $t=$_SESSION['pric']+50; echo $t; ?></div>
					</div>
			   </td>
			</tr>
			
			<tr>
				<td colspan="3" style="text-align:center;"><button class="checkout">Checkout</button>
				</td>
			</tr>
		</tbody>
	</table>
</br></br></br>
	</div>
</body>
</html>