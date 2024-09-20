<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>List of all products</h1>
    <?php if ($data->num_rows > 0) : ?>
        <?php foreach ($data->fetch_assoc() as $key => $product) : ?>
            <li><?= $product ?></li>
        <?php endforeach ?>
    <?php else : ?>
        <h3>No product found</h3>
    <?php endif ?>
</body>

</html>