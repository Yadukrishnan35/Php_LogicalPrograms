<?php
class StopWatch
{
    static function findElapsedTime()
    {
        $s = readline("Press 1 to Start:");
        if ($s == 1) {
            $startTime = time();
            echo "The started time is:" . $startTime . "\n";
            $c = readline("Press any number to Stop:");
            $endTime = time();
            echo "The ended time is:" . $endTime . "\n";
        }
        $timeElapsed = ($endTime - $startTime);
        echo "The Elapsed Time is :" . $timeElapsed;
    }
}
StopWatch::findElapsedTime();
?>