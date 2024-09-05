<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_COOKIE['username'] = $_POST['username'];
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
    <h1>cookie</h1>
    <h1><?= isset($_COOKIE['username']) ? $_COOKIE['username'] : "Not logged in"; ?></h1>
    <form action="" method="post">
        <input name="username" type="text">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <a href="logout.php">Log out account</a>
</body>

</html>