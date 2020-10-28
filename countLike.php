<?php
//countLike.php
$articleId = $_GET["articleId"];
$userId = $_SESSION["userId"];

if(isset($_POST["like"])){
    include('../db-config.php');

    $stmt = $pdo->prepare("SELECT * FROM `user-article` WHERE `user-article`.`articleId` = '$articleId'");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $sumLikes = $row["likes"] +1;

    $stmt = $pdo->prepare("UPDATE `user-article`
        SET `userId` = '$userId',
        `likes` = '$sumLikes'
        WHERE `user-article`.`articleId` = $articleId;");

    $stmt->execute();
};

if(isset($_POST["dislike"])){
    include('../db-config.php');

    $stmt = $pdo->prepare("SELECT * FROM `user-article` WHERE `user-article`.`articleId` = '$articleId'");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = $pdo->prepare("DELETE FROM `user-article` WHERE `user-article`.`articleId` = '$articleId'");

    $stmt->execute();
}


?>
