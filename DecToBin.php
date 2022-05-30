<?php
    class DecimalToBinary {
       static function decToBin() {
            $num = readline("Enter the Number:");
            $i = 0;
           if(is_numeric($num) && $num>0) {
            while($num>=1) {
                $rem[$i] =$num%2;
                $num = (int)$num/2;
                $i++;
            }
            for($j=$i-1;$j>=0;$j--) {
                echo $rem[$j];
                
            }

        }else {
            echo "Not a valid input";
        }
    }
}
    DecimalToBinary::decToBin();
?>