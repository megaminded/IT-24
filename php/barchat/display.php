<?php require("data.php");
function calculateTotalExpenses($array)
{
    $total = 0;
    foreach ($array as $key => $amount) {
        $total += $amount;
    }
    return $total;
}

function getPercentage($total, $amount)
{
    $solution  = ($amount / $total) * 100;
    return $solution;
}

$totalExpenses = calculateTotalExpenses($expenses);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
            align-items: end;
            margin: 200px auto;
            width: 400px;
        }

        .bar {
            width: 100px;
            border: 1px solid red;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php foreach ($expenses as $name => $amount) : ?>
            <div class="bar" style="height: <?php echo round(getPercentage($totalExpenses, $amount) * 5) ?>px;">
                <?= $name; ?>
            </div>
        <?php endforeach ?>
    </div>
    <form action="display.php" method="post">
        <?php if (isset($error)) : ?>
            <p style="color:red"><?= $error; ?></p>
        <?php endif ?>
        <input type="text" name="expense" placeholder="The expense">
        <input type="text" name="amount" placeholder="The amount">
        <input type="submit" value="add">
    </form>
</body>

</html>