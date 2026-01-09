<?php
    //1
    $arr = [
        ['a', 'b', 'c'],
        ['d', 'e', 'f'],
        ['g', 'h', 'i'],
        ['j', 'k', 'l'],
    ];
    echo $arr[3][2] . $arr[1][1] . $arr[2][0] . $arr[0][0];
    //2
    echo "<br>";
    $sum = 0;
    $arr = [[1, 2], [3, 4], [5, 6]];
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 2; $j++) {
            $sum += $arr[$i][$j];
        }
    }
    echo $sum;