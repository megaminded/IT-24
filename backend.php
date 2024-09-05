<?php
header("Access-Control-Allow-Origin: *");
include("db.php");
$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;
// var_dump($username, $password);
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $result =  json_encode([
        'status' => 'error',
        'message' => 'Invalid request',
    ]);
    echo $result;
    return;
}
$result = null;
if (empty($username) || empty($password)) {
    $result =  json_encode([
        'status' => 'error',
        'message' => 'Username or password cannot be empty'
    ]);
} else {
    foreach ($users as $key => $user) {
        if ($user['username'] == trim($username) && $user['password'] == trim($password)) {
            $found = json_encode([
                'status' => 'success',
                'message' => 'Login successful',
                'token' => $user['token']
            ]);
            break;
        }
    }
    if (isset($found)) {
        $result = $found;
    } else {
        $result =  json_encode([
            'status' => 'error',
            'message' => 'Invalid username and password combination'
        ]);
    }
}

echo $result;
