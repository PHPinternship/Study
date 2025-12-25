<?php
    //1
    $arr = ['a', 'b', 'c', 'd', 'e'];
    $flag = false;
    foreach ($arr as $value) {
        if ($value == 'c') $flag = true;
    }
    echo $flag ? '+++':'---';
    //2
    echo '<br>';
    $num = 71;
    $hits = 0;
    for ($i = 1; $i <= $num; $i++) {
        if($num % $i == 0) $hits++;
    }
    echo $hits == 2? 'Простое число':'Непростое число';