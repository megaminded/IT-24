<?php
session_start();
if (isset($_SESSION['authenticated']) == false) {
    return header("Location: login.php");
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
    <h1>Hi, <?= $_SESSION['username']; ?></h1>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique autem consequuntur repellendus eius officia asperiores, iste laudantium fuga exercitationem ea voluptas eveniet, alias, optio aspernatur enim iusto dolore molestiae amet harum explicabo. Hic tempora excepturi dolorem amet fugiat magnam saepe culpa doloremque iusto atque accusantium ad facilis consequuntur tenetur commodi eum, at similique ut? Repellendus cum, assumenda enim maxime deserunt sit quia fuga numquam alias, hic omnis veritatis cumque autem. Minima optio quasi cupiditate, sint modi esse voluptas nobis maxime! Laborum odit magnam iusto! Qui animi vero assumenda suscipit. Quas porro reiciendis molestias sit adipisci vitae ratione aperiam tenetur nihil.
    <a href="logout.php">Logout</a>
</body>

</html>