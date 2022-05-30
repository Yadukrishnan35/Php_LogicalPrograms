<?php
    $count = 0;
    $number = readline("Enter a number to check Prime or not : ");
    if(is_numeric($number) && $number>0) {   
        for($i = 1;$i<=$number;$i++) {
            if($number % $i == 0) {
                $count++;
            }
        } 
        if ($count == 2) {
                echo "Prime Number";
            } else {
                echo "Not a prime Number";
        }
    }else {
        echo "Invalid input";
    }
?>