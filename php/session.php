<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['username'] = $_POST['username'];
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
    <h1><?= isset($_SESSION['username']) ? $_SESSION['username'] : "Not logged in"; ?></h1>
    <form action="" method="post">
        <input name="username" type="text">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="logout.php">Log out account</a>
</body>

</html>