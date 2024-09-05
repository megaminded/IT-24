<?php

$file = fopen('users.txt', 'r');
$users = [];
while ($line = fgets($file)) {
    array_push($users, $line);
}

$find_username = readline("Enter username:");
$find_password = readline("Enter password:");
$profile = null;
foreach ($users as $key => $line) {
    if ($key == 0 || $key % 4 == 0) {
        if (trim($line) == trim($find_username)) {
            if (trim($users[$key + 3]) == $find_password) {
                $profile = [
                    'username' => $users[$key],
                    'password' => $users[$key + 3],
                    'email' => $users[$key + 2],
                    'phone' => $users[$key + 1],
                ];
            }
        }
    }
}
echo md5("Hello");
return;
var_dump($profile ?? "Invalid username & password combination");
fclose($file);
