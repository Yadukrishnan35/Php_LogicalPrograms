<?php
class CoupanNumber {
    static function findCoupan() {

        $n = readline("How many coupans you want:");
        $CoupanArray = array();
        $distinctArray = array();
               for($i=0;$i<$n;$i++) {
            $CoupanArray[$i]=rand(1,10);
          
           
        }
    }        
        
}
CoupanNumber::findCoupan();
?>