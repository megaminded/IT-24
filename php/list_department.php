<?php
require "faculty.php";
$selected_faculty = $_GET['selected'];
echo $selected_faculty;
$data = $faculties[$selected_faculty];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>You selected <?= $selected_faculty; ?></h1>
    <h3>These are the departments in the selected faculty</h3>
    <ol>
        <?php foreach ($data as $key => $department) : ?>
            <?php if (is_array($department)) : ?>
                <ol>
                    <?php foreach ($department as $info) : ?>
                        <li>
                            <strong><?= $key; ?></strong>
                            <strong><?= $info['name']; ?></strong>
                            <img src="<?= $info['picture'] ?>" alt="Unable to fetch image <?= $info ?>">
                        </li>
                    <?php endforeach ?>
                </ol>
            <?php else : ?>
                <li><?= $department ?></li>
            <?php endif ?>
        <?php endforeach ?>
    </ol>
</body>

</html>