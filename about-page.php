<?php
session_start();
//about-page.php
if(isset($_SESSION["userId"])){
	//allowed to see this page
include('db-config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="About Page for IMMNewsNetwork outlining creation and purpose of the site"/>
    <meta name="keywords" content="About Page, about us, purpose, creation"/>
    <title> </title>
    <link rel="icon"
        type="image/png"
        href="Images/icon.png" />
</head>
<body>
    <header>
        <img src="Images/logo.jpeg" alt="IMM News Logo">
        <nav>
            <a href="homepage.php">Home</a>
            <a href="about-page.php">About</a>
            <a href="contact-page.php">Contact</a>
        </nav>
    </header>

    <h1>About IMMNewsNetwork</h1>
    <a href="edit-about.php">Edit About</a><br><br>
<?php

include('db-config.php');

$stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `articleId` = '14'");

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo($row["content"]);
?>
<br>
<hr>
    <footer>
        Here will be cookie data
        <a href="acceptCookies.php">Accept Cookies</a>
    </footer>
</body>
</html><?php
}
}else{
    ?>
    <p>ACCESS DENIED. Please login here:</p>
    <a href="landing.php">Login page</a><?php
}
 ?>
