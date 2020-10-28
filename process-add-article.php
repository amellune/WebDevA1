<?php
//process-edit-person.php

//receive POST data from edit form
$name = $_FILES["image"]["name"];
$uploaddir = "Images/";
$uploadfile = $uploaddir . basename($_FILES["image"]["name"]);
$title = $_POST["title"];
$author = $_POST["author"];
$content = addslashes($_POST["content"]);
$category = $_POST["category"];

//update person record (row) with the edit form data
//insert a new person record into the person table
include('db-config.php');

$stmt = $pdo->prepare("INSERT INTO `articles`
(`articleId`, `featured`, `image`, `title`, `author`, `content`, `category`)
VALUES (NULL, '0', '$name', '$title', '$author', '$content', '$category');");

$stmt->execute();

if (move_uploaded_file($_FILES["image"]["tmp_name"], $uploaddir.$name)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

//header("Location: homepage.php");
?>
<p>Update Successful</p><a href="homepage.php">Home</a>
