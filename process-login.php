<?php
session_start();
//process-login.php
//receive post variables
$username = $_POST["username"];
$password = $_POST["password"];

//check the username and password against the database records

include('db-config.php');

$stmt = $pdo->prepare("SELECT * FROM `users`
	WHERE `emailAddress` = '$username'
	AND `password` = '$password'");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if($row){
	//successful username/password combination
    $_SESSION["isAdmin"] = $row["isAdmin"] == 1;
	$_SESSION["userId"] = $row["userId"] ;
	// ?><p>Successful login!</p>
	<!--<a href="homepage.php">Go to Dashboard</a>--><?php
	header("Location: homepage.php");
}else{
	//incorrect username/password
	?><p>Sorry, Incorrect username/password. Please login</p>
		<a href="landing.php">Login here</a><?php
}
?>
