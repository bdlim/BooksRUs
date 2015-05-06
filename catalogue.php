<!DOCTYPE html>

<!-- CATALOGUE.PHP -->
<html lang="en-US">
<head>
	<title>Books R Us</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/orderForm.css"/>
	<script type="text/javascript" src="js/dropdown.js"></script>
	<script type="text/javascript" src="js/orderForm.js"></script>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class=mainContent>
		<form id="orderForm" action="php/processOrder.php" onsubmit="return validateOrder()" method="post">
			<table summary="catalogue">
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
				<tr> <!-- are you my mother product page -->
					<td>
						<img src="img/bookPhotos/Areyoumymother.jpg" alt="Are you My Mother Cover">
					</td>
					<td>
						<h2>Are you my Mother?</h2>
						<h4>by P.D. Eastman</h4>
						<p>A lost baby bird fell from its nest. What awaits this little guy?</p>
					</td>
					<td>
						<p>$15.99</p>
					</td>
					<td>
						<input type="number" name="motherQuantity" min="0" value="0"/>
					</td>
				</tr>
				<tr> <!-- brownbear product page -->
					<td>
						<img src="img/bookPhotos/brownbear.jpg" alt="Brown Bear Cover">
					</td>
					<td>
						<h2>Brown Bear, Brown Bear What do you see?</h2>
						<h4>by Bill Martin Jr. and Eric Carle</h4>
						<p>Brown Bear, yellow bird, what will you see?</p>
					</td>
					<td>
						<p>$7.99</p>
					</td>
					<td>
						<input type="number" name="brownBearQuantity" min="0" value="0"/>
					</td>
				</tr>
				<tr> <!-- chickachicka product page -->
					<td>
						<img src="img/bookPhotos/chicka.jpg" alt="Chika Cover">
					</td>
					<td>
						<h2>Chicka Chicka BOOM BOOM</h2>
						<h4>by Bill Martin Jr. and John Archambault</h4>
						<p>Follow the crazy adventure in the jungle.</p>
					</td>
					<td>
						<p>$9.99</p>
					</td>
					<td>
						<input type="number" name="chickaQuantity" min="0" value="0"/>
					</td>
				</tr>
				<tr> <!-- corduroy product page -->
					<td>
						<img src="img/bookPhotos/corduroy.jpg" alt="Corduroy Cover">
					</td>
					<td>
						<h2>Corduroy</h2>
						<h4>by Don Freeman</h4>
						<p>Corduroy is about a small teddy bear that lost its button.
							Follow the adverture of Cord to find his button!</p>
					</td>
					<td>
						<p>$10.99</p>
					</td>
					<td>
						<input type="number" name="corduroyQuantity" min="0" value="0"/>
					</td>
				</tr>
				<tr> <!-- greeneggsandham product page -->
					<td>
						<img src="img/bookPhotos/greeneggsandham.jpg" alt="Green Eggs and Ham Cover">
					</td>
					<td>
						<h2>Green Eggs and Ham</h2>
						<h4>by Dr.Seuss</h4>
						<p>Do you like green eggs and ham?</p>
					</td>
					<td>
						<p>$15.99</p>
					</td>
					<td>
						<input type="number" name="greenEggsQuantity" min="0" value="0"/>
					</td>
				</tr>
				<tr> <!-- holes product page -->
					<td>
						<img src="img/bookPhotos/holes.jpg" alt="Holes Cover">
					</td>
					<td>
						<h2>Holes</h2>
						<h4>by Louis Sachar</h4>
						<p>A boy is sent to juvinelle detention. Digging holes for punishment.</p>
					</td>
					<td>
						<p>$7.99</p>
					</td>
					<td>
						<input type="number" name="holesQuantity" min="0" value="0"/>
					</td>
				</tr>
				<tr> <!-- james and the giant peach product page -->
					<td>
						<img src="img/bookPhotos/james-and-the-giant-peach.jpg" alt="Giant Peach Cover">
					</td>
					<td>
						<h2>James and the Giant Peach</h2>
						<h4>by Roald Dahl and Quentin Blake</h4>
						<p>James is stranded on deserted beach. There he sees a giant peach that becomes his new home.<p>
					</td>
					<td>
						<p>$10.99</p>
					</td>
					<td>
						<input type="number" name="peachQuantity" min="0" value="0"/>
					</td>
				</tr>
				<tr> <!-- the giving tree product page -->
					<td>
						<img src="img/bookPhotos/The_Giving_Tree.jpg" alt="Giving Tree Cover">
					</td>
					<td>
						<h2>The Giving Tree</h2>
						<h4>by Shel Silverstein</h4>
						<p>The apple tree gives food to the boy!!</p>
					</td>
					<td>
						<p>$15.99</p>
					</td>
					<td>
						<input type="number" name="givingTreeQuantity" min="0" value="0"/>
					</td>
				</tr>
				<tr> <!-- the very hungry caterpillar product page -->
					<td>
						<img src="img/bookPhotos/HungryCaterpillar.jpg" alt="Hungry Caterpillar Cover">
					</td>
					<td>
						<h2>The Very Hungry Caterpillar</h2>
						<h4>by Eric Carle</h4>
						<p>Nom nom nom nom!!</p>
					</td>
					<td>
						<p>$11.99</p>
					</td>
					<td>
						<input type="number" name="hungryCaterpillarQuantity" min="0" value="0"/>
					</td>
				</tr>
				<tr> <!-- Where the SideWalk Ends product page -->
					<td>
						<img src="img/bookPhotos/sidewalkends.jpg" alt="SideWalk Ends Cover">
					</td>
					<td>
						<h2>Where the Sidewalk Ends</h2>
						<h4>by Shel Silverstein</h4>
						<p>The infamous short stories by Shel Silverstein</p>
					</td>
					<td>
						<p>$13.99</p>
					</td>
					<td>
						<input type="number" name="sidewalkEndsQuantity" min="0" value="0"/>
					</td>
				</tr>
				<tr>
					<td>
						<p></p>
					</td>
					<td>
						<p id="emptyOrder"></p>
					</td>
					<td>
						<input type="submit" value="Submit Order"  />
					</td>
					<td>
						<input type="reset" value="Clear Order"  />
					</td>
				</tr>
			</table>
		</form>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>
