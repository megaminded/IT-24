<?php
$file = fopen("attendance.txt", "a+");
while (true) {
    $name = readline("What is your name?");
    if (empty($name)) {
        echo "Please enter a name";
    } else {
        $time = date("h:i");
        fwrite($file, "$name : $time \n");
    }
}
fclose($file);
