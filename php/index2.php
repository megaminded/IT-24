<?php
$student = [
    ["James" => '092930293990'],
    ["Peter" => '29938292832'],
    ["Peter" => '29938292832'],
    ["Peter" => '29938292832'],
    "Peter" => '29938292832',
    "Peter" => '29938292832',
    "Peter" => '29938292832',
    "Peter" => '29938292832',
    "Peter" => '29938292832',
    "Peter" => '29938292832',
    "Peter" => '29938292832',
    "Peter" => '29938292832',
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Students name and phone number</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone number</th>
            </tr>
            <!-- <tr>
                <td></td>
                <td></td>
            </tr> -->
        </thead>
        <tbody>
            <?php

            foreach ($student as $name => $phone) {
                echo "<tr>";
                echo "<td> $name </td>";
                echo "<td> $phone </td>";
                echo "</tr>";
            }

            ?>
        </tbody>
    </table>
</body>

</html>