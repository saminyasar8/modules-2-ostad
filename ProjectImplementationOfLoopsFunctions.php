<?php
$numbers = [1,2,3,4,5];

function getArraysum ($numbers){
    $sum = 0;
    foreach ($numbers as $num){
        $sum += $num;
    }
    return $sum;
}
echo getArraysum($numbers);