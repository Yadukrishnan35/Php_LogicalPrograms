<?php
class Root{
    static function sqrRoot($number,$typeRoot){
        $result = pow($number,1/$typeRoot);
        echo round($result,2);
    }
}
$number = readline("Enter Number: ");
$typeRoot = readline("Enter type of root: ");
if(is_numeric($number) && $number > 0 && is_numeric($typeRoot) && $typeRoot > 0){
Root::sqrRoot($number,$typeRoot);
}
else{
    echo "Not a valid input";
}
?>