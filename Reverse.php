<?php
$number = readline("Enter the Number to reverse:");
if (is_numeric($number) && $number > 0) {
    $revnum = 0;
    while ($number > 1) {
        $rem = $number % 10;
        $revnum = ($revnum * 10) + $rem;
        $number = ($number / 10);
    }
    echo "Reverse is: " . $revnum;
} else {
    echo "Enter a valid Number";
}
?>    