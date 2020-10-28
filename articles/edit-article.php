<?php
//edit-article.php
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
<form action="process-edit-article.php" method="POST" enctype="multipart/form-data">
	Image:
	<?php
	echo("<img src='../Images/".$row['image']."' width='400'/>");
	?>
	Title: <br><input type="text" name="title" value="<?php echo($row["title"]);?>" size="50"/><br>
	Author:<br> <input type="text" name="author" value="<?php echo($row["author"]);?>"size="50"/><br><br>
	Content:<br>
	<textarea name="content" rows="50" cols="100">
		<?php echo($row["content"]);?>
	</textarea>
	<br>
	<br>
	Category: <input type="text" name="category" value="<?php echo($row["category"]);?>" size="50"/><br>
	<input type="hidden" name="articleId" value="<?php echo($row["articleId"]);?>"size="50"><br>
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
