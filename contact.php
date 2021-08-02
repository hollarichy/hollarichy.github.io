<?php

// Get the Values from the Contact form
$EmailFrom = "SunnyPower Contact Form";
$EmailTo = "sunnypowersportsacademy@yahoo.com";    // insert your email address here
$Subject = "FRM THE website"; // insert your Subject here
$firstName = trim(stripslashes($_POST['firstName'])); 
$lastName = trim(stripslashes($_POST['lastName'])); 
$emailAddress = trim(stripslashes($_POST['emailAddress'])); 
$message = trim(stripslashes($_POST['message']));

// Assign the values to the variables for the email
$Body = "";

$Body .= "firstName: ";
  $Body .= $firstName;

$Body .= "\n";

$Body .= "lastName: ";
  $Body .= $lastName;

$Body .= "\n";

$Body .= "emailAddress: ";
  $Body .= $emailAddress;

$Body .= "\n";

$Body .= "message: ";
  $Body .= $message;

$Body .= "\n";

// Send mail 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// If success , redirect to index.php
if ($success){
	echo "Message Sent";
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
} 
?>