<?php
    class MonthlyPayment {
        public static function findMonthlyPayment($p,$rate,$years) {
      
        $n = 12 * $years;
        $r = $rate / (12 * 100);
        $payment  = ($p * $r) / (1 - pow(1 + $r, -$n));
        echo "Monthly Payment:".round($payment,2);
        }
    
    }
    $p = $argv[1];
    $n = $argv[2];
    $years = $argv[3];
    if(is_numeric($p) && is_numeric($n) && is_numeric($years)) {
    MonthlyPayment::findMonthlyPayment($p,$n,$years);
    } else {
        echo "Not a valid input";
    }
?>