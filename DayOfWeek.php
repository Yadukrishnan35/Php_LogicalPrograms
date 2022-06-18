<?php
include("util.php");
$day = new Util();
$date = $argv[1];
$month = $argv[2];
$year = $argv[3];
if ($date > 0 && $date <= 31 && $month > 0 && $month <= 12 && strlen((string) $year) == 4) {
$day::dayOfWeek($date,$month,$year);
} else {
    echo "Not a valid input";
}
?>