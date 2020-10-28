<?php
//process-like.php
session_start();
if(isset($_SESSION["userId"])){
//recieve input
$userId = $_SESSION["userId"];
$articleId = $_GET["articleId"];
$Like = $_POST["like"];

//insert a new person row in the person table
include('../db-config.php');


$stmt = $pdo->prepare("INSERT INTO `user-article` (`userId`, `articleId`, `likes`) VALUES ('$userId', '$articleId', '1');");

$stmt->execute();
?>

<p>You liked an article! </p><a href="../homepage.php">Go Back</a>
<?php
}else{
	//DO NOT SHOW this page
	?>
	<p>ACCESS DENIED. Please login here:</p>
	<a href="../landing.php">Login page</a><?php
}

?>
