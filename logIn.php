<!DOCTYPE html>

<!-- LOGIN.PHP -->
<html lang="en-US">
<head>
	<title>Books R Us</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/logInForm.css"/>
	<script type="text/javascript" src="js/logInForm.js"></script>

</head>
<body>
	<!--#include file="header.php"-->
	<div id="navBar">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="catalogue.php">Catalogue</a></li>
			<li><a href="topSellers.php">Top Sellers</a></li>
			<li><a href="booksByAge.php">Books By Age</a></li>
			<li><a href="booksByGenre.php">Books By Genre</a></li>
		</ul>
	</div>
	<div class=mainContent>
		<h2>Login</h2>
		<form id="logInForm" action="" onsubmit="return validateForm()">
			<div class="inputPair">
				<p>Email: </p>
				<input type="text" name="email" size="30" />
				<p id="emailError"></p>
			</div>
			<div class="inputPair">
				<p>Password: </p>
				<input type="text" name="password" size="30" />
				<p id="passwordError"></p>
			</div>
			<input id="logInButton" type="submit" value="Log In" />
		</form>
	</div>
	<!--#include file="footer.php"-->
</body>
</html>
