<?php
    $arr = [1, 2, 3, 4, 5];
    //echo strlen($arr);
    echo '1) ' . count($arr) . '<br>';
    //echo $arr[count($arr)];
    echo '2) ' . $arr[count($arr) - 1] . '<br>';
    //echo $arr[1] + $arr[2] + $arr[3] + $arr[4] + $arr[5];
    echo '3) ' . $arr[1] + $arr[2] + $arr[3] + $arr[4] + $arr[0] . '<br>';
    //echo count([$arr]);
    echo '4) ' . count($arr) . '<br>';
    $arr = [
        'a' => 1,
        'b' => 2,
        'c' => 3,
    ];
    //echo $arr[a] + $arr[b] + $arr[c];
    echo '5) ' . $arr['a'] + $arr['b'] + $arr['c'] . '<br>';
    $k = 'a';
    //echo $arr['$k'];
    echo '6) ' . $arr[$k] . '<br>';
    $arr = [1, 2, 3, 4, 5];
    echo '7) ' . count($arr) . '<br>';
    $arr = [
        'a' => 1,
        'b' => 2,
        'c' => 3,
    ];
    //$a = 1;
    $a = 'a';
    echo '8) ' . $arr[$a] . '<br>';