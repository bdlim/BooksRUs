<!DOCTYPE html>

<!-- BOOKSBYGENRE.PHP -->
<html lang="en-US">
<head>
	<title>Books R Us</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<script type="text/javascript" src="js/dropdown.js"></script>
</head>
<body>
	<!--#include file="header.php"-->
	<div class=mainContent>
		<form id="orderForm" action="" onclick="">
			<table summary="catalogue">
				<tr>
					<th colspan="2">
						Product
					</th>
					<th colspan="2">
						Quantity
					</th>
					<th>
						Price
					</th>
					<th>
						Remove
					</th>
				</tr>
				<tr>
					<td>
						<!-- PRODUCT IMAGE

						<img src="*SOURCE*" alt="*NAME*" />
						-->
						<img src="img/bookPhotos/corduroy.jpg" alt="Corduroy">
					</td>
					<td>
						<!-- PRODUCT NAME and DESCRIPTION

						<h2>*NAME*</h2>
						<p>*DESCRIPTION*<p>

						-->
						<h2>Corduroy</h2>
						<p>Corduroy is about a small bear that lost its button.
							Follow the adverture of Cord to find his button!</p>
					<td>
						Quantity:
					</td>
					<td>
						<!-- QUANTITY

						<input type="text" name="*NAME*Quantity" size="3" />

						-->
						<input type="text" name="corduroyQuantity" size="3" />
					</td>
					<td>
						<!-- PRICE

						*PRICE*

						-->
						<p>$10.99</p>
					</td>
					<td>
						<!-- REMOVE

						<input type="checkbox" name="*NAME*Remove" value="no"/>

						-->
						<input type="checkbox" name="corduroyRemove" value="no"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<!--#include file="footer.php"-->
</body>
</html>
