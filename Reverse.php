<?php
$number = readline("Enter the Number to reverse:");
if (is_numeric($number) && $number > 0) {
    $revnum = 0;
    while ($number > 1) {
        $rem = $number % 10;//2
        $revnum = ($revnum * 10) + $rem;//52
        $number = ($number / 10);//12
    }
    echo "Reverse is: " . $revnum;
} else {
    echo "Enter a valid Number";
}
?>    