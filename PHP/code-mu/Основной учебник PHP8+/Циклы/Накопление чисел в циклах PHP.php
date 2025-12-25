<?php
    //1
    $sum = 0;
    for ($i = 2; $i <= 100; $i+=2) {
        $sum += $i;
    }
    echo $sum . '<br>';
    //2
    echo '<br>';
    $sum = 0;
    for ($i = 1; $i <= 99; $i+=2) {
        $sum += $i;
    }
    echo $sum . '<br>';
    //3
    echo '<br>';
    $multiplication = 1;
    for ($i = 1; $i <= 20; $i++) {
        $multiplication *= $i;
    }
    echo $multiplication . '<br>';