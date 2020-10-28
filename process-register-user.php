<?php
//process-register-user.php

//receive input
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$emailAddress = $_POST["emailAddress"];
$password = $_POST["password"];

//insert a new person record into the person table
include('db-config.php');

$stmt = $pdo->prepare("INSERT INTO `users`
	(`userId`, `firstName`, `lastName`, `emailAddress`, `password`)
	VALUES (NULL, '$firstName', '$lastName', '$emailAddress', '$password');");

$stmt->execute();

header("Location: homepage.php");
?>
<!--<p>You inserted data</p><a href="homepage.php">Go to homepage</a>-->
