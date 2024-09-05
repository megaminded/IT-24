<?php

// They are all arrays of data
// $_GET
// $_POST
// $_REQUEST
// $_SERVER
// $_SESSION
// $_COOKIES
// $_FILES

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="login.php" method="POST">
        <fieldset>
            <legend>Login account: Your ip is: <?= $_SERVER['REMOTE_ADDR'] ?></legend>
            <label for="">Username</label>
            <input type="text" name="username">
            <label for="">Password</label>
            <input type="password" name="password">
            <input type="submit" value="Login">
        </fieldset>
    </form>
</body>

</html>