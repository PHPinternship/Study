<?php
    //1
    $count = 1;
    while ($count <= 100) {
        echo $count . '<br>';
        $count++;
    }
    //2
    echo '<br>';
    $start = 11;
    while ($start <= 33) {
        echo $start . '<br>';
        $start++;
    }
    //3
    echo '<br>';
    $start = 100;
    while ($start != 0) {
        echo $start . '<br>';
        $start--;
    }
    //4
    echo '<br>';
    $num = 1;
    $iteration_num = 0;
    while($num < 1000) {
        $num*=3;
        $iteration_num++;
    }
    echo $iteration_num;