<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $file  = $_FILES['profile'];
        var_dump($file);
        return;
        switch ($file['type']) {
            case 'image/png':
            case 'image/jpg':
            case 'image/jpeg':
                echo "This file is supported:" . $file['type'];
                $name = "userpicture_" . time();
                $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                $folder = 'uploads/';
                $fullname = $folder . $name . '.' . $ext;
                move_uploaded_file($file['tmp_name'], $fullname);
                $_SESSION['last_uploaded_image'] = $fullname;
                echo "File uploaded successfully";


            default:
                echo
                "This file is not supported!" . $file['type'];
                break;
        }
    }
    ?>
</pre>
    <?php if (isset($fullname)) : ?>
        <img src="<?= $fullname; ?>" alt="<?= $fullname; ?> not found">
    <?php elseif (isset($_SESSION['last_uploaded_image'])) : ?>
        <img src="<?= $_SESSION['last_uploaded_image']; ?>" alt="No image in session" srcset="">
    <?php endif ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="profile" id="">
        <input type="submit" value="upload">
    </form>
</body>

</html>