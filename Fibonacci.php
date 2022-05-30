<?php
/* Program to Print Fibonacci series */

class FibonacciSeries
{
    static function findFibo($count)
    {
        $n1 = 0;
        $n2 = 1;
        echo $n1;
        echo " ";
        echo $n2;
        for ($i = 2; $i < $count; $i++) {
            $n3 = $n1 + $n2;
            echo " " . $n3;
            $n1 = $n2;
            $n2 = $n3;
        }
    }
}

$count = readline("Enter the count:");
if (is_numeric($count) && $count > 0) {
    FibonacciSeries::findFibo($count);
} else {
    echo "Not a valid Input";
}
