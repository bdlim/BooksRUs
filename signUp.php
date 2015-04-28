<!DOCTYPE html>

<!-- SIGNUP.PHP -->
<html lang="en-US">
<head>
	<title>Books R Us</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/signUpForm.css"/>
	<script type="text/javascript" src="js/signUpForm.js"></script>
</head>
<body>
	<!--#include file="header.php"-->
	<div id="navBar">
		<ul>
			<li><a href="index.php">Featured</a></li>
			<li><a href="topSellers.php">Top Sellers</a></li>
			<li><a href="classics.php">Classics</a></li>
			<li><a href="booksByAge.php">Books By Age</a></li>
			<li><a href="booksByGenre.php">Books By Genre</a></li>
			<li><a href="sale.php">Sale</a></li>
		</ul>
	</div>
	<div class=mainContent>
		<h2>Sign Up</h2>
	  <form id="signUpForm" action="" onsubmit="return validateForm()">
      <div class="inputPair">
        <p>First Name: </p>
        <input type="text" name="firstName" size="30" required />
      </div>
      <div class="inputPair">
        <p>Last Name: </p>
        <input type="text" name="lastName" size="30" required />
      </div>
			<div class="inputPair">
        <p>Email: </p>
        <input type="text" name="email" size="30" required />
      </div>
			<div class="inputPair">
				<p>Password: </p>
				<input type="password" name="password" size="30" required  />
			</div>
      <input id="submitButton" type="submit" value="Register" />
			<input id="resetButton" type="reset" value="Clear Form" />
    </form>
  </div>
	<!--#include file="footer.php"-->
</body>
</html>
