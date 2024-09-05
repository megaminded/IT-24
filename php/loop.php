<?php
// for loop
// while loop
// do while
// foreach loop

// echo $scores;

// for ($i = 0; $i < count($scores); $i++) {
//     echo $scores[$i];
// }
// $a = 1;
// while ($a <= 10) {
//     echo $a;
//     $a++;
// }
// $a = 0;
// do {
//     echo $scores[$a];
//     $a++;
// } while ($a < count($scores));

// do {
//     echo "Running";
// } while (true);
$scores = [
    20, 10, 50, 10, 22, 33, 11
];
$number = readline("Enter your lucky number: ");

foreach ($scores as $key => $value) {
    if ($number == $value) {
        echo "Congratulations, you have won!";
        return;
    }
}
echo "You have lost! $number is not a lucky number";
