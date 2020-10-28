<?php
//landing.php

?>
<html>
<head>
<link rel="icon"
    type="image/png"
    href="Images/icon.png" />
<head>
<body>
<img src="Images/logo.jpeg" alt="IMM News Logo">
<h3>Login</h3>
<form action="process-login.php" method="POST">
 username: <input type="text" name="username" />
 Password: <input type="password" name="password" />
<input type="submit" />   </form>

<a href="register-user.php">Register</a>
</body>
</html>
