<?php
//[2, 3, 4, 5, 6,8, 2, 8 ]
//o/p 2, 8
$array=array(2,3,4,5,6,8,2,8);
for($i=0;$i<count($array)-1;$i++) {
    for($j=$i+1;$j<count($array);$j++) {
        if($array[$i]==$array[$j]) {
            echo "The duplicate element:".$array[$j] ."\n";
                        
        }
    }
}
?>