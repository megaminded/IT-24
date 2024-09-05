<?php


$expenses = [
    "Food" => 4500000,
    "Housing" => 1200000,
    "Clothing" => 1200000,
    "Tobacco and drinks" => 1700000,
    "Entertainment" => 400000,
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $expense = $_REQUEST['expense'];
    $amount = $_REQUEST['amount'];
    if (is_numeric($amount)) {
        $expenses[$expense] = $amount;
    } else {
        $error = "Invalid expense amount, expense amount must be a number";
    }
}
