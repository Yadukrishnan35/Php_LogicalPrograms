<?php
class Util {
static function dayOfWeek($date,$month,$year) {
        $d = $date;
        $m=$month;
        $y=$year;
        $y0 = $y - ((14 - $m) / 12);
        $x = $y0 + ($y0 / 4) - ($y0 / 100) + ($y0 / 400);
        $m0 = $m + (12 * ((14 - $m) / 12)) - 7;
        $d0 = ($d + $x + ((31 * $m0) / 12)) % 7;
        switch($d0) {
            case 0 :
                echo "Sunday";
                break;
            case 1 :
                echo "Monday";
                break;
            case 2 :
                echo "Tuesday";
                break;
            case 3 :
                echo "Wednesday";
                break;
            case 4 :
                echo "Thursday";
                break;
            case 5 :
                echo "Friday";
                break;
            default :
                echo "Saturday";


        }
    }
}
?>