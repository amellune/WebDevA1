<?php
//edit-article.php
session_start();
if($_SESSION["isAdmin"] == 1){
//receive GET variables
include('db-config.php');

?><!DOCTYPE html>
	<html>
	<head>
	</head>
	<body>
	<form action="process-add-article.php" method="POST" enctype="multipart/form-data">
		<!-- personId NOT needed because the database uses auto increment and takes care of the personId for us-->
		<h1>Add an Article!</h1>
		Image:<br>
		<input type="file" name="image"><br><br>
		Title:<br>
		<textarea name="title" rows="2" cols="50">
		</textarea><br><br>
		Author:<br> <input type="text" name="author" /><br><br>
		Content:<br>
		<textarea name="content" rows="100" cols="50">
		</textarea><br><br>
		Category:<br>
		<select name="category">
	        <option value="Career">Career</option>
	        <option value="Industry">Industry</option>
	        <option value="Technical" >Technical</option>
	    </select>
		<br><br>
		<!-- <input type="radio" name="category" value="Career">Career
	    <input type="radio" name="category" value="Technical">Technical
	    <input type="radio" name="category" value="Industry">Industry<br><br> -->
		<input type="submit" />
		<br>
	</form>
	</body>
	</html><?php
}else{
	?>
	<p>ADMIN ACCESS ONLY:</p>
	<a href="homepage.php">Back to Home</a><?php
}
?>
