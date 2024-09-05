<?php
// CRUD operations
$filename = 'db.txt';
$file = fopen($filename, 'r');
// $data = fread($file, filesize($filename));
$students = [];
while (feof($file) != true) {
    array_push($students, fgets($file, filesize($filename)));
}

fclose($file);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($students as $student) : ?>
            <li><?= $student ?></li>
        <?php endforeach ?>
    </ul>
</body>

</html>