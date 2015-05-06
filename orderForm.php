<html lang="en-US">
<head>
	<title>Books R Us</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script type="text/javascript" src="js/dropdown.js"></script>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class=mainContent>
		<form id="payingPage" action="" onclick="">
			<table summary="cart">
				<tr>
					<h2>Shopping Cart</h2>
				</tr>
				<tr>
					<th colspan="2">
						Product
					</th>
					<th>
						Price
					</th>
					<th>
						Quantity
					</th>
				</tr>
				<tr>
					<td>
						<p></p>
					</td>
					<td>
						<p></p>
					</td>
					<td>
						<p></p>
					</td>
					<td>
						<h3>Subtotal:</h3>
					</td>
				</tr>
        <tr>
					<td>
						<p></p>
					</td>
					<td>
						<p></p>
					</td>
					<td>
						<div class=continue-container>
							<a href="catalogue.php">Continue Shopping</a>
						</div>
					</td>
					<td>
						<div class=payment-container>
							<a href="paying.php">Make Payment</a>
						</div>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>
