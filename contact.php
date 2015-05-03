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
	<!--#include file="header.php"-->
  <div class="mainContent">
    <h2>Contact Us</h2>
    <form id="contact" action="" onsubmit="return validateForm()">
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
      <input id="submitButton" type="submit" value="Submit Feedback" />
      <input id="resetButton" type="reset" value="Clear Form" />
    </form>
  </div>
	<!--#include file="footer.php"-->
</body>
</html>
