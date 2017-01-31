<?php
$num = 145;
if ($num < 100 ) {
    echo "no";
} else {
    for ($i = 100; $i<=$num; $i++){
        $ones = $i % 10;
        $tens = floor($i % 100/10);
        $hundreds = floor($i % 1000/100);

        if ($ones != $tens && $ones != $hundreds && $tens != $hundreds)
        {
        echo $i. ' ';
        }
    }
}