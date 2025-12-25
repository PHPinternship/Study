<?php
    //1
    $arr = [1, 2, 3, 4, 5];
    foreach ($arr as $value) {
        if ($value % 2 == 1) {
            echo $value . '<br>';
        }
    }
    //2
    echo '<br>';
    $arr = [2, 5, 9, 15, 1, 4];
    foreach ($arr as $value) {
        if ($value > 3 and $value < 10) {
            echo $value . '<br>';
        }
    }
    //3
    echo '<br>';
    $arr = [-1, 2, 3, -4, 5];
    $sum = 0;
    foreach ($arr as $value) {
        if ($value > 0) {
            $sum += $value;
        }
    }
    echo $sum . '<br>';
    //4
    echo '<br>';
    $arr = [10, 20, 30, 50, 235, 3000];
    foreach ($arr as $value) {
        $first_digit = floor($value / (10 ** (strlen($value) - 1)));
        if ($first_digit == 1 or $first_digit == 2 or $first_digit == 5) {
            echo $value . '<br>';
        }
    }
    //5
    echo '<br>';
    $arr = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    foreach ($arr as $value) {
        if ($value == 'Saturday' or $value == 'Sunday') {
            echo '<b>' . $value . '</b><br>';
        } else echo $value . '<br>';
    }
    //6
    echo '<br>';
    $day = 'Thursday';
    foreach ($arr as $value) {
        if ($value == $day) {
            echo '<b>' . $value . '</b><br>';
        } else echo $value . '<br>';
    }