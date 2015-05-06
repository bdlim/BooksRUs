<?php
// PROCESSFEEDBACK.PHP

$messageToBusiness =
  "From: ".$_POST['salutation']." "
          .$_POST['firstName']." "
          .$_POST['lastName']."\r\n".
  "Email address: ".$_POST['email']."\r\n".
  $_POST['message']."\r\n";

$headerToBusiness = "From: $_POST[email]";
mail("brandodl@uci.edu", "Books R Us Feedback", $messageToBusiness, $headerToBusiness);

$messageToClient =
  "Dear ".$_POST['salutation']." ".$_POST['lastName'].":\r\n".
  "The following message was received from you by Books R Us:\r\n\r\n".
  $messageToBusiness.
  "-----------------------\r\nThank you for the feedback\r\n";

if ($_POST['copy']){
  $headerToClient = "From: customerservice@booksrus.com\r\n";
  mail($_POST['email'], "Copy of Books R Us Feedback", $messageToClient, $headerToClient);
}

$display = str_replace("\r\n", "<br />\r\n", $messageToClient);
$display =
  "<html><head><title>Your message</title></head><body><samp>".
  $display.
  "</samp></body></html>";
echo $display;

$fileVar = fopen("../data/feedback.txt", "a")
  or die("Error: Could not open the log file.");
fwrite($fileVar, "\n------------------------------------\n")
  or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
  or die("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
  or die("Error: Could not write to the log file.");

?>
