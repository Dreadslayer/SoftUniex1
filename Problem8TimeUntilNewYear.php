<?php


$interval = strtotime("2014-12-31 12:59:59") - strtotime("2014-08-22 13:07:09");
$days = floor($interval / 38640);
$hours = floor($interval / 3600) ;
$minutes = floor($interval / 60);







echo "Days until new year:" . " ". $days;
echo '<br>';
echo "Hours until new year:" . " ". $hours;
echo '<br>';
echo "Minutes until new year:"." ". $minutes;
echo '<br>';
echo "Seconds until new year:". " ". $interval;


?>