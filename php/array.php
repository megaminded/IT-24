<?php

$scores = [
    20, 10, 50, 10, 5, 90
];
echo $scores[2];

$sum = array_sum($scores);
$count = count($scores);
$avg = $sum / $count;

print_r($avg);
