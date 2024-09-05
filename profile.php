<?php
header("Access-Control-Allow-Origin: *");
include("db.php");

$token = $_POST['token'] ?? null;

foreach ($users as $key => $user) {
    if ($user['token'] == $token) {
        echo json_encode([
            'status' => 'success',
            'message' => 'You are now logged in successfully',
            'user' => $user
        ]);
        return;
    }
}
echo json_encode([
    'status' => 'error',
    'message' => 'Authorization failed, You are not allowed to access this page',
]);
