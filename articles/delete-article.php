<?php
//delete-person.php
session_start();
if($_SESSION["isAdmin"] == 1){
//receive GET variables
$articleId = $_GET["articleId"];

//get person record form the database table
include('../db-config.php');

$stmt = $pdo->prepare("SELECT * FROM `articles`
	WHERE `articleId` = $articleId");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);


//show a form with prefilled info that we can change
?>
<br>
Are you sure you wish to delete?
<br>
<form action="process-delete-article.php" method="POST">
<?php
echo("<img src='Images/".$row['image']."' width='400'/>");
echo($row["title"]);
echo($row["author"]."<br>");
echo (substr($row["content"], 0, 500)."..."); //or $row[0];
?>
<input type="submit" />
</form>
<?php
}
else{
	//DO NOT SHOW this page
	?>
	<p>ADMIN ACCESS ONLY</p>
	<a href="../homepage.php">Back to Home</a><?php
}
?>
