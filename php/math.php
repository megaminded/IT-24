<?php
// Math // Numbers
$radius = 5;
$area = pi() * $radius ** 2;

// print(number_format($area, 2));

$scores = [
    20, 10, 50, 10, 5, 90
];

function sum_items_in_array(array $any_number)
{
    $total = 0;
    foreach ($any_number as $key => $value) {
        $total += $value;
    }
    return $total;
}

function get_average(array $any_number)
{
    $total = 0;
    $n = 0;
    foreach ($any_number as $key => $value) {
        $total += $value;
        $n++;
    }
    return number_format($total / $n, 2);
}

$sum = get_average($scores);
echo $sum;
// $min = min($scores);

// print($min);
// String



// Array