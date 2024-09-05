<?php
session_start();

// unset($_SESSION['username']);
// $_SESSION['authenticated'] = false;
unset($_SESSION['authenticated']);
header('Location:login.php');
