<?php
//process-edit-person.php

//receive POST data from edit form

$content = addslashes($_POST["content"]);
// $content = $_POST["content"];

//update person record (row) with the edit form data
//insert a new person record into the person table
include('db-config.php');

$stmt = $pdo->prepare("UPDATE `articles`
	SET `content` = '$content',
	WHERE `articles`.`articleId` = 14;");

$stmt->execute();

?>
<p>Update Successful</p><a href="about-page.php">Back to About</a>
