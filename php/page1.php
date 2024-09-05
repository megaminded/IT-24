<?php
session_start();
$foods = [
    'Rice', "Beans", "Potato", "Fish"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat me</title>
</head>

<body>
    <h1><?= isset($_COOKIE['username']) ? $_COOKIE['username'] : "Not logged in"; ?></h1>
    <ul>
        <?php foreach ($foods as $key => $food) {
            echo "<li><a href='page2.php?selected={$food}'>$food </a></li>";
        }
        ?>
    </ul>
</body>

</html>