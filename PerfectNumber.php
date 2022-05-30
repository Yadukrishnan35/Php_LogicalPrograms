<?php
    $sum = 0;
    $number = readline("Enter a number to check Perfect or not :");
    if(is_numeric($number)){    
    for($i = 1;$i < $number;$i++) {
            if($number % $i == 0) {
                $sum = $sum + $i;
            }
        }
    
    if($number == $sum) {
        echo "It is a Perfect number";
    } else {
        echo "It is not a Perfect number";
    } 
}else {
    echo "Invalid input";
}
?>