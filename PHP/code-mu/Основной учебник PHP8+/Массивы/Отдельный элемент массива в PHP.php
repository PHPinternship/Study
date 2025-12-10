<?php
    $arr = ['a', 'b', 'c'];
    echo '1) ' . $arr[0] . $arr[1] . $arr[2] . "<br>";
    $arr = ['a', 'b', 'c', 'd', 'e'];
    echo "2) " . $arr[0] . '+' . $arr[1] . '+' . $arr[2] . '+' . $arr[3] . "<br>";
    $arr = [1, 2, 3, 4, 5];
    echo "3) " . $arr[0] + $arr[1] + $arr[2] + $arr[3] + $arr[4] . "<br>";
    $arr = [2, 5, 3, 9];
    $res = $arr[0] * $arr[1] + $arr[2] * $arr[3];
    echo "4) " . $res;