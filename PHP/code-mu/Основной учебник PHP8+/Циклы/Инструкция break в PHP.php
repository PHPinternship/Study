<?php
    //1
    $arr = [1, 2, -3, 4, 0, 5, 3];
    foreach ($arr as $value) {
        if ($value == 0) break;
        echo $value . ' ';
    }
    //2
    echo '<br>';
    foreach ($arr as $value) {
        if ($value < 0) break;
        echo $value . ' ';
    }
    //3
    echo '<br>';
    $pos = 1;
    foreach ($arr as $value) {
        if ($value == 3) {
            echo $pos;
            break;
        }
        $pos++;
    }
    //4
    echo '<br>';
    $sum = 0;
    $start = 1;
    while ($sum < 100) {
        $sum += $start;
        $start++;
    }
    echo $start - 1;