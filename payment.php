<?php
session_start(); 
?>
<html>
	<head><link rel="stylesheet" type="text/css" href="payOpt.css"></head>
	<body>
	<div class="outer"><br><br>
		<div class="container"><fieldset style="background-color:#73dcd733;"><br><legend>Choose &nbsp;&nbsp; Payment &nbsp;&nbsp; Options &nbsp;&nbsp; :</legend>
			<table  border="3px;" style="width:100%; font-weight:bold; background-color:#fff4f6;">
				<tbody>
				<form method="POST" action="creditAction.php">
					<tr style="background-color:lightyellow;">	
							<td>
								<details>
										<summary style="margin:6px;">PhonePe </summary><br>
				
											Total Amount: &nbsp; &nbsp; &nbsp;<?php echo $_SESSION['total']; ?><br>
										
								</details>
							</td>
					</tr>
					<tr style="background-color:lightyellow;">
							<td>
								<details>
										<summary style="margin:6px;">Credit / Debit / ATM Card</summary>
										
											<div id="form-container">
			<div id="card-front">
					<div id="container">
							<span id="amount">paying: <strong><?php echo $_SESSION['total']; ?></strong></span>
					</div><br><br><br><br>
					<label>Card Number</label>
					<input type="text" id="card-number" name="cardno" placeholder="1234 5678 9101 1112" length="16"><br><br><br>
					<div id="cardholder-container">
							<label>Card Holder</label>
							<input type="text" name="cardna" id="card-holder" placeholder="e.g. John Doe" />
					</div>
					<div id="exp-container">
							<label>Expiration</label>
							<input id="card-month" type="text" name="month" placeholder="MM" length="2">
							<input id="card-year" type="text" name="year" placeholder="YY" length="2">
					</div>
					<div id="cvc-container">
							<label> CVC/CVV</label>
							<input id="card-cvc" name="cvv" placeholder="CVV" type="text" min-length="3" max-length="4">
							<p>Last 3 or 4 digits</p>
					</div>
			</div>
			<div id="card-back">
					<div id="card-stripe"></div>
			</div>
			<input type="text" id="card-token">
		</div>
										
								</details>
							</td>
					</tr>
					<tr style="background-color:lightyellow;">
				         	<td><details>
										<summary style="margin:6px;">Net Banking </summary><br>
										
											Total Amount: &nbsp; &nbsp; &nbsp;<?php echo $_SESSION['total']; ?><br>
										
								</details>
							</td>
					</tr>
					<tr style="background-color:lightyellow;">
					        <td><details>
										<summary style="margin:6px;">Cash on Delivery</summary><br>
										
											Total Amount: &nbsp; &nbsp; &nbsp;<?php echo $_SESSION['total']; ?><br>
										
								</details>
							</td>
					</tr>
				</tbody>
			</table></fieldset>
		</div><br><br>
		<div>
			<table  border="3px;" style="width:100%; font-weight:bold; background-color:#fff4f6;">
				<tbody>
					<tr>	
							<th> <span>Price &nbsp;&nbsp; Details</span></th>
					</tr>
					<tr>	
							<td> <span>Price &nbsp; : &nbsp;</span><?php echo $_SESSION['pri']; ?></td>
					</tr>
					<tr>	
							<td> <span>Delivery &nbsp;&nbsp; Charges &nbsp; : &nbsp;</span>50</td>
					</tr>
					<tr>	
							<th> <span>Amount &nbsp;&nbsp; Payable &nbsp; : &nbsp;</span><?php $pay=$_SESSION['pri']+50; echo $pay; ?></th>
					</tr>
				</tbody>
			</table>
		</div><br><br><br><br>
							<input type="submit" value="PlaceOrder" name="submit" class="placeorder">
							</form>
	</div>
	</body>
</html>
