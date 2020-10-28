<?php
//career1.php
session_start();
if(isset($_SESSION["userId"])){
	//allowed to see this page?
include('../db-config.php');

$stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `articleId` = '5'");

$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	//print_r($row); // recursively print out object.
    ?><a href="edit-article.php?articleId=<?php echo($row["articleId"]); ?>">Edit</a><br><br>
    <a href="../delete-article.php?articleId=<?php echo($row["articleId"]); ?>">Delete</a><br><br>
    <a href="../set-featured-article.php?articleId=<?php echo($row["articleId"]); ?>">Set as Featured</a><br><br>
    <?php
    echo("<img src='../Images/".$row['image']."' width='700'/>");
    echo("<h1>");
	echo($row["title"]);
    echo("</h1>");
	echo("<h3>");
	?>By: <?php echo($row["author"]."<br><br> Category: ".$row["category"]);
    echo("</h3>");
    echo("<p>");
    echo($row["content"]); //or $row[0];
	?>
    <br>
	<a href="https://www.wakefly.com/blog/tools-everyone-in-the-web-development-industry-should-be-using/"> External Source</a>
    <br>
    <a href="../homepage.php">Go Back</a>
	<?php
	echo("</p>");
}
}else{
	//DO NOT SHOW this page
	?>
	<p>ACCESS DENIED. Please login here:</p>
	<a href="../landing.php">Login page</a><?php
}

?>
