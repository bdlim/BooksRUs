<?php
// PROCESSORDER.PHP

$messageToBusiness =
  "------------------Order------------------\r\n".
  "Are you my Mother?\r\n".
  "Quantity: ".$_POST['motherQuantity']."\r\n".
  "Price: $15.99\r\n\r\n".
  "Brown Bear, Brown Bear What do you see?\r\n".
  "Quantity: ".$_POST['brownBearQuantity']."\r\n".
  "Price: $7.99\r\n\r\n".
  "Chicka Chicka BOOM BOOM\r\n".
  "Quantity: ".$_POST['chickaQuantity']."\r\n".
  "Price: $9.99\r\n\r\n".
  "Corduroy\r\n".
  "Quantity: ".$_POST['corduroyQuantity']."\r\n".
  "Price: $10.99\r\n\r\n".
  "Green Eggs and Ham\r\n".
  "Quantity: ".$_POST['greenEggsQuantity']."\r\n".
  "Price: $15.99\r\n\r\n".
  "Holes\r\n".
  "Quantity: ".$_POST['holesQuantity']."\r\n".
  "Price: $7.99\r\n\r\n".
  "James and the Giant Peach\r\n".
  "Quantity: ".$_POST['peachQuantity']."\r\n".
  "Price: $10.99\r\n\r\n".
  "The Giving Tree\r\n".
  "Quantity: ".$_POST['givingTreeQuantity']."\r\n".
  "Price: $15.99\r\n\r\n".
  "The Very Hungry Caterpillar\r\n".
  "Quantity: ".$_POST['hungryCaterpillarQuantity']."\r\n".
  "Price: $11.99\r\n\r\n".
  "Where the Sidewalk Ends\r\n".
  "Quantity: ".$_POST['sidewalkEndsQuantity']."\r\n".
  "Price: $13.99\r\n\r\n".
  "------------------Total------------------\r\n".
  "Total: $".calculateTotal();

$headerToBusiness = "From: orders@booksrus.com";
mail("brandodl@uci.edu", "Books R Us Order", $messageToBusiness, $headerToBusiness);

$display = str_replace("\r\n", "<br />\r\n", $messageToBusiness);
$display =
  "<html><head><title>Your Order</title></head><body><samp>".
  $display.
  "</samp></body></html>";
echo $display;

$fileVar = fopen("../data/orders.txt", "a")
  or die("Error: Could not open the log file.");
fwrite($fileVar, "\n------------------------------------\n")
  or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
  or die("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
  or die("Error: Could not write to the log file.");


function calculateTotal () {
  $total += $_POST['motherQuantity']*15.99;
  $total += $_POST['brownBearQuantity']*7.99;
  $total += $_POST['chickaQuantity']*9.99;
  $total += $_POST['corduroyQuantity']*10.99;
  $total += $_POST['greenEggsQuantity']*15.99;
  $total += $_POST['holesQuantity']*7.99;
  $total += $_POST['peachQuantity']*10.99;
  $total += $_POST['givingTreeQuantity']*15.99;
  $total += $_POST['hungryCaterpillarQuantity']*11.99;
  $total += $_POST['sidewalkEndsQuantity']*13.99;
  return $total;
}

?>
