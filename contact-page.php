<?php
session_start();
//contact-page.php
if(isset($_SESSION["userId"])){
	//allowed to see this page
include('db-config.php');
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Contact form page for individuals interested in joining the IMMNewsNetwork team
    and creating/uploading articles"/>
    <meta name="keywords" content="Contact Page, fillable form, contact form, interest form"/>
    <title> </title>

</head>
<body>
    <header>
        <img src="Images/logo.jpeg" alt="IMM News Logo">
        <nav>
            <a href="homepage.php">Home</a>
            <a href="about-page.php">About</a>
            <a href="contact-page.php">Contact</a>
        </nav>
    </header>

    <h1>Contact IMMNewsNetwork</h1>
    <p>There will be a contact form here</p>

    <form action="process-contact.php" method="POST">
        <fieldset>
            Name: <input type="text" name="name" required />
            Email: <input type="email" name="email" required />
        </fieldset>
        <br>
        <fieldset>
            Category Interests: <input type="checkbox" value="industry" name="inputname[]" />
                                <label for="Industry">Industry</label>
                                <input type="checkbox" value="technical" name="inputname[]" />
                                <label for="Technical">Technical</label>
                                <input type="checkbox" value="career"name="inputname[]" />
                                <label for="Career">Career</label>

            <!-- Category Interests: <select name="interests" multiple>
                                <option value="Technical">Technical</option>
                                <option value="Industry">Industry</option>
                                <option value="Career">Career</option>
                            </select><br> -->
        <br>
            Your Role: <select name="role">
                <option value="Writer">Writer</option>
                <option value="Contributor">Contributor</option>
                <option value="Administrator" >Administrator</option>
            </select>
        </fieldset>
        <br>
        <br>

        <input type="submit" />

    </form>
    <br>


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
