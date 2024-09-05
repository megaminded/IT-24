<?php require "faculty.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidel Faculties</title>
</head>

<body>
    <ul>
        <?php foreach ($faculties as $faculty => $department) : ?>
            <li>
                <a href="list_department.php?selected=<?php echo $faculty; ?>">
                    <?php echo strtoupper($faculty) ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>