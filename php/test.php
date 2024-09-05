<?php
$x = 10;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello this is html, x: <?php echo $x; ?></h1>
    <ul>
        <?php
        for ($i = 1; $i < 100; $i++) {
            if ($i % 2 == 0) {
                echo "<li>";
                echo $i;
                echo "</li>";
            }
        }
        ?>
    </ul>
</body>

</html>