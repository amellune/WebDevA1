<?php
//edit-article.php
session_start();
if($_SESSION["isAdmin"] == 1){
//receive GET variables

//get person record form the database table
include('db-config.php');

$stmt = $pdo->prepare("SELECT * FROM `articles`
	WHERE `articleId` = 14");

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

//show a form with prefilled info that we can change
?>
<form action="process-edit-about.php" method="POST">
	Edit About:<br><br>
	<textarea name="content" rows="50" cols="100">
		<?php echo($row["content"]);?>
	</textarea>
	<input type="submit" />
</form>
<?php
}else{
	//DO NOT SHOW this page
	?>
	<p>ADMIN ACCESS ONLY</p>
	<a href="../homepage.php">Back to Home</a><?php
}
?>
