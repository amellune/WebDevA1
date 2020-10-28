<?php
//register-user.php
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form action="process-register-user.php" method="POST">
        <!-- personId NOT needed because the database uses auto increment and takes care of the personId for us-->
        First Name: <input type="text" name="firstName" /><br>
        Last Name: <input type="text" name="lastName" /><br>
        Email/Username: <input type="text" name="emailAddress" /><br>
        Password: <input type="text" name="password" /><br>

        <input type="submit" />
    </form>
</body>
</html>
