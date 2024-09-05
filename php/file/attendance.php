<?php
function write_name($name)
{
    $file = fopen("attendance.txt", "a+");
    $time = date("h:i a");
    fwrite($file, "$name : $time \n");
    fclose($file);
}
function read_attendance()
{
    $filename = "attendance.txt";
    $file = fopen($filename, "r");
    $attendance = [];
    while (feof($file) != true) {
        array_push($attendance, fgets($file, filesize($filename)));
    }
    fclose($file);
    return $attendance;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['student_name'];
    if (empty($name)) {
        $error = "Please enter a student name";
    } else {
        write_name($name);
        $success = "Attendance successfully registered.";
    }
}
$attendance = read_attendance();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-6">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <h4 class="card-title">Attendance</h4>
                        <p class="card-text">Please enter your name</p>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input required type="text" name="student_name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <h4 class="card-title">Registered attendance</h4>
                        <p class="card-text">Total: <?php echo count($attendance); ?> Students</p>
                        <ul class="list-group">
                            <?php foreach ($attendance as $student) : ?>
                                <li class="list-group-item ">
                                    <div class="d-flex">
                                        <span><?= $student; ?></span>
                                    </div>
                                </li>
                            <?php endforeach ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>