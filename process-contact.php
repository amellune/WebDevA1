<?php
//process-contact.php

//receive input
$name = $_POST["name"];
$email = $_POST["email"];
$str = implode(",",$_POST['inputname']);
$role = $_POST["role"];

//insert a new person record into the person table
include('db-config.php');

$stmt = $pdo->prepare("INSERT INTO `contact`
	(`contactId`, `name`, `email`, `interests`, `role`)
	VALUES (NULL, '$name', '$email', '$str', '$role');");

$stmt->execute();


?>
<h3>Thank you!</h3>
<a href="homepage.php">Return to Home</a>
