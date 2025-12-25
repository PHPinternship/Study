<?php
    //1
    $arr = ['a', 'b', 'c', 'd', 'e'];
    $length = count($arr);
    for ($i = 0; $i <= $length - 1; $i++) {
        echo $arr[$i] . ' ';
    }
    //2
    echo '<br>';
    for ($i = 0; $i <= $length - 2; $i++) {
        echo $arr[$i] . ' ';
    }
    //3
    echo '<br>';
    $arr = [1, 2, 3, 4, 5, 6, 7, 8];
    $length = (count($arr))/2;
    for ($i = 0; $i <= $length - 1; $i++) {
        echo $arr[$i] . ' ';
    }