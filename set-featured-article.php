<?php
//set-featured-article.php
session_start();
if($_SESSION["isAdmin"] == 1){
//receive GET variables
$articleId = $_GET["articleId"];

include('db-config.php');
$stmt = $pdo->prepare("UPDATE `articles` SET `featured` = '0' WHERE `articles`.`featured` = 1");

$stmt->execute();

$stmt = $pdo->prepare("UPDATE `articles` SET `featured` = '1' WHERE `articles`.`articleId` = $articleId");

$stmt->execute();


header("Location: homepage.php");

}else{
	//DO NOT SHOW this page
	?>
	<p>ADMIN ACCESS ONLY</p>
	<a href="homepage.php">Back to Home</a><?php
}
?>
