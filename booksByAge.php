<!DOCTYPE html>

<!-- BOOKSBYAGE.PHP -->
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
		<form id="orderForm" action="" onclick="">
			<table summary="catalogue">
				<tr>
					<th colspan="2">
						Product
					</th>
					<th>
						Quantity
					</th>
					<th>
						Price
					</th>
				</tr>
				<!-- Ages 1 to 4 -->
				<tr>
					<td><br /><h2> Ages 1 to 4</h2></td>
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
						<input type="text" name="brownBearQuantity" size="3" />
					</td>
				</tr>
				<tr> <!-- chickachicka product page -->
					<td>
						<img src="img/bookPhotos/chicka.jpg" alt="Chika Cover">
					</td>
					<td>
						<h2>Chika Chika BOOM BOOM</h2>
						<h4>by Bill Martin Jr. and John Archambault</h4>
						<p>Follow the crazy adventure in the jungle.</p>
					</td>
					<td>
						<p>$9.99</p>
					</td>
					<td>
						<input type="text" name="chikaQuantity" size="3" />
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
						<input type="text" name="givingTreeQuantity" size="3" />
					</td>
				</tr>
				<tr> <!-- the very hungry caterpillar product page -->
					<td>
						<img src="img/bookPhotos/HungryCaterpillar.JPG" alt="Hungry Caterpillar Cover">
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
						<input type="text" name="givingTreeQuantity" size="3" />
					</td>
					</tr>
				<!-- Ages 4 to 8 -->
				<tr>
					<td><br /><h2> Ages 4 to 8</h2></td>
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
						<input type="text" name="motherQuantity" size="3" />
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
						<input type="text" name="greenEggsQuantity" size="3" />
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
						<input type="text" name="corduroyQuantity" size="3" />
					</td>
				</tr>
				<!-- Ages 8 to 12 -->
				<tr>
					<td><br /><h2> Ages 8 to 12</h2></td>
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
						<input type="text" name="holesQuantity" size="3" />
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
						<input type="text" name="peachQuantity" size="3" />
					</td>
				</tr>
			</table>
		</form>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>
