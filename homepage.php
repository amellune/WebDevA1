<?php
//homepage.php
session_start();
if(isset($_SESSION["userId"])){

        //allowed to see this page
        include('db-config.php');?>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8"/>
            <meta name="description" content="News Article management center of recent Web Development
            news for students and graduates of the IMM Program at Sheridan"/>
            <meta name="keywords" content="Web Development, WebDev, News, Web Design, Web Industry, Web
            Dev Careers"/>
            <title> Homepage </title>

            <link rel="icon"
                type="image/png"
                href="Images/icon.png" />
    </head>
    <body>
        <header>
            <img src="Images/logo.jpeg" alt="IMM News Logo">
            <nav>
                <a href="homepage.php">Home</a>
                <a href="about-page.php">About</a>
                <a href="contact-page.php">Contact</a>
                <a href="logout.php">Logout</a>
            </nav>
        </header>
        <!-- <nav>
        <a href="view-contact-form.php">View Contact Form1</a>
        <a href="about-page.php">Add Articles</a>
        <a href="contact-page.php">Edit Articles</a>
        <a href="logout.php">Delete Articles</a>
    </nav> -->
    <h1> Welcome to IMMNewsNetwork!</h1>

    <p>IMMNewsNetwork was created by and for IMM Students and Grads to keep up with the latest news in the Web Development Industry.
        This site was created by developer and designer Amy Szczepanowski, and updated by her as well. She invites those interested
        in contributing to fill out the contact form in the link above. She gets back to all members who have signed up promptly regarding
        their submission status. Thank you and enjoying browsing the articles!</p>

    <a href = "view-contact-form.php">View Contact Form</a><br>
    <a href="add-article.php">Add Article</a><br><br>

    <h3>Check out this Video!</h3>
    <iframe width="400" height="225" src="https://www.youtube.com/embed/5YDVJaItmaY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <!-- <nav>
        <a href="articles/career1.php">Career Article 1</a>
        <a href="articles/career2.php">Career Article 2</a>
        <a href="articles/industry1.php">Industry Article 1</a>
        <a href="articles/industry2.php">Industry Article 2</a>
        <a href="articles/technical1.php">Tech Article 1</a>
        <a href="articles/technical2.php">Tech Article 2</a>
    </nav><br> -->

    <h1>Featured Article</h1>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `featured` = '1'");

    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    	//print_r($row); // recursively print out object.
        echo("<img src='Images/".$row['image']."' width='400'/>");
        echo("<h2>");
    	echo($row["title"]);
        echo("</h2>");
    	echo("<h4>");
    	?>By: <?php echo($row["author"]."<br>");
        echo("</h4>");
        echo("<p>");
        echo (substr($row["content"], 0, 500)."..."); //or $row[0];
    	echo("</p>");
    }
    ?>
    <br>
    <hr>
    <h1>Career Articles</h1>
    <?php

    $stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `category` = 'career'");

    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    	//print_r($row); // recursively print out object.
        echo("<img src='Images/".$row['image']."' width='400'/>");
        echo("<h2>");
    	echo($row["title"]);
        echo("</h2>");
    	echo("<h4>");
    	?>By: <?php echo($row["author"]."<br>");
        echo("</h4>");
        echo("<p>");
        echo (substr($row["content"], 0, 500)."...");
        echo("<br>");
        echo("<a href=".$row["URL"]."> Read More </a>");
    	echo("</p>");
        echo("<br>");
        //echo($row["URL"]); //or $row[0];

    }
    ?>
    <hr>
    <h1>Industry Articles</h1>
    <?php

    $stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `category` = 'industry'");

    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    	//print_r($row); // recursively print out object.
        echo("<img src='Images/".$row['image']."' width='400'/>");
        echo("<h2>");
        echo($row["title"]);
        echo("</h2>");
    	echo("<h4>");
    	?>By: <?php echo($row["author"]."<br>");
        echo("</h4>");
        echo("<p>");
        echo (substr($row["content"], 0, 500)."..."); //or $row[0];
        echo("<br>");
        echo("<a href=".$row["URL"]."> Read More </a>");
    	echo("</p>");
        echo("<br>");
    }
    ?>
    <hr>
    <h1>Technical Articles</h1>
    <?php

    $stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `category` = 'technical'");

    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    	//print_r($row); // recursively print out object.
        echo("<img src='Images/".$row['image']."' width='400'/>");
        echo("<h2>");
    	echo($row["title"]);
        echo("</h2>");
    	echo("<h4>");
    	?>By: <?php echo($row["author"]."<br><br> Category: ".$row["category"]);
        echo("</h4>");
        echo("<p>");
        echo (substr($row["content"], 0, 500)."..."); //or $row[0];
        echo("<br>");
        echo("<a href=".$row["URL"]."> Read More </a>");
    	echo("</p>");
        echo("<br>");
    }
    ?>

    <!-- <br>
    <iframe src="articles/career1.php" height="200" width="300" name="iframe_a"></iframe>
    <p><a href="articles/career1.php" target="iframe_a">See Full Article</a><p>
    <br> -->
    <hr>
    <footer>
        Here will be cookie data
        <a href="acceptCookies.php">Accept Cookies</a>
    </footer>
</body>
</html><?php
}else{
    ?>
	<p>ACCESS DENIED. Please login here:</p>
	<a href="landing.php">Login page</a><?php
}
?>
