<!DOCTYPE html>

<!-- CONTACT.PHP -->
<html lang="en-US">
<head>
	<title>Books R Us</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/feedback.css"/>
  <script type="text/javascript" src="js/feedback.js"></script>
	<script type="text/javascript" src="js/dropdown.js"></script>
</head>
<body>
	<?php include 'header.php'; ?>
  <div class="mainContent">
    <h2>Contact Us</h2>
    <form id="contact" action="php/processFeedback.php" onsubmit="return validateForm()" method="post">
			<div class="inputPair">
				<p>Salutation: </p>
				<select name="salutation">
					<option value=" "> </option>
					<option value="Mrs.">Mrs.</option>
					<option value="Ms.">Ms.</option>
					<option value="Mr.">Mr.</option>
					<option value="Dr.">Dr.</option>
				</select>
				<p id="salutationError"></p>
			</div>
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
        <p>Comments: </p>
        <textarea name="message" rows="6" cols="30"></textarea>
        <p id="messageError"></p>
      </div>
			<div class="inputPair">
				<input type="checkbox" name="copy" value="yes" />
				<p>I want copy sent to my email</p>
			</div>
      <input id="submitButton" type="submit" value="Submit Feedback" />
      <input id="resetButton" type="reset" value="Clear Form" />
    </form>
  </div>
	<?php include 'footer.php'; ?>
</body>
</html>
