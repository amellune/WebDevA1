<?php
//process-edit-person.php

//receive POST data from edit form
$title = $_POST["title"];
$author = $_POST["author"];
$content = $_POST["content"];
$category = $_POST["category"];
$articleId = $_POST["articleId"];

//update person record (row) with the edit form data
//insert a new person record into the person table
include('../db-config.php');

$stmt = $pdo->prepare("UPDATE `articles`
	SET `title` = '$title',
	`author` = '$author',
	`content` = '$content',
	`category` = '$category'
	WHERE `articles`.`articleId` = $articleId;");

$stmt->execute();


header("Location: ../homepage.php");
//<p>Update Successful</p><a href="select-person.php">View Persons Table</a>
?>
