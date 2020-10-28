<?php
//process-delete-article.php
//receive GET variables
$articleId = $_GET["articleId"];

include('../db-config.php');

$stmt = $pdo->prepare("DELETE FROM `articles` WHERE `articles`.`articleId` = $articleId");

$stmt->execute();


//header("Location: homepage.php");
?>
<p>Deleted Successfully!</p><a href="../homepage.php">Home</a>
