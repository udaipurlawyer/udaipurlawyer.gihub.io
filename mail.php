<?php

$enq = $_GET["Enquiry"];

$name = $_GET["Name"];

$email = $_GET["Email"];

$msg = $enq."<br>".$name."<br>".$email;

// send email
mail("rashi.karanpuria@gmail.com","Udaipur Lawyer coresspondance",$msg);
?>
