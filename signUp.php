<!DOCTYPE html>

<!-- SIGNUP.PHP -->
<html lang="en-US">
<head>
	<title>Books R Us</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/signUpForm.css"/>
	<script type="text/javascript" src="js/signUpForm.js"></script>
	<script type="text/javascript" src="js/dropdown.js"></script>
</head>
<body>
	<?php include 'header.php'; ?>
	<div class=mainContent>
		<h2>Sign Up</h2>
	  <form id="signUpForm" action="" onsubmit="return validateForm()">
      <div class="inputPair">
        <p>First Name: </p>
        <input type="text" name="firstName" size="30" />
				<p id="firstNameError"></p>
      </div>
      <div class="inputPair">
        <p>Last Name: </p>
        <input type="text" name="lastName" size="30" />
				<p id="lastNameError"></p>
      </div>
			<div class="inputPair">
        <p>Email: </p>
        <input type="text" name="email" size="30" />
				<p id="emailError"></p>
      </div>
			<div class="inputPair">
				<p>Password: </p>
				<input type="password" name="password" size="30" />
				<p id="passwordError"></p>
			</div>
      <input id="submitButton" type="submit" value="Register" />
			<input id="resetButton" type="reset" value="Clear Form" />
    </form>
  </div>
	<?php include 'footer.php'; ?>
</body>
</html>
