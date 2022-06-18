<?php
    $str = 'AMMA';
    
    $result ='';
    $length = strlen($str);
    /*
    for($j=0;$j<$length;$j++){
        echo $str[$j];
    }
    */
    for($i=$length-1;$i>=0;$i--) {
          $result .= $str[$i];
    }
    echo $result;
    
    if($result == $str) {
        echo "Palindrome";
    }
    else {
        echo "Not a palindrome";
    }
?>