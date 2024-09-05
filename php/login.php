<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] == "" && $_POST['password'] == "") {
        $error = "Username and password is required";
    } else {
        session_start();
        $_SESSION['authenticated'] = true;
        $_SESSION['username'] = $_POST['username'];
        return header("Location: data.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <legend>Login account</legend>
            <label for="">Username: <input type="text" name="username" id=""></label>
            <label for="">Password: <input type="text" name="password" id=""></label>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>