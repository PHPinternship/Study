<?php
    //1
    $arr = [2, 5, 9, 3, 1, 4];
    echo array_sum($arr) . '<br>';
    //2
    $sum = 0;
    foreach ($arr as $value) {
        if ($value %2 == 0) {
            $sum += $value;
        }
    }
    echo $sum . '<br>';
    //3
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value ** 2;
    }
    echo $sum . '<br>';
    //4
    $multiplication = 1;
    foreach ($arr as $value) {
        $multiplication *= $value;
    }
    echo $multiplication;