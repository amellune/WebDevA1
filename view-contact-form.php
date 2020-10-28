<?php
//view-contact-form.php;
session_start();
if($_SESSION["isAdmin"] == 1){
	//allowed to see this page?>
	<html>
	<head>
	<a href = "homepage.php">Home</a>
	<link rel="icon"
	    type="image/png"
	    href="Images/icon.png" />
	</head>
	<body>
<?php
include('db-config.php');

$stmt = $pdo->prepare("SELECT * FROM `contact`");

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	//print_r($row); // recursively print out object.
	echo("<p>");
	echo($row["contactId"]." ".$row["name"]." ".$row["email"]." ".$row["interests"]." ".$row["role"]); //or $row[0];
	echo("</p>");
}
}else{
	//DO NOT SHOW this page
	?>
	<p>ADMIN ACCESS ONLY</p>
	<a href="homepage.php">Back to Home</a><?php
}
?>
</body>
</html>
