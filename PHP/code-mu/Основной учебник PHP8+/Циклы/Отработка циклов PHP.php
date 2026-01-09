<?php
    //1
    for ($i = 1; $i <= 100; $i++) {
        echo $i . '<br>';
    }
    //2
    echo "<br>";
    for ($i = 100; $i >= 1; $i--) {
        echo $i . '<br>';
    }
    //3
    echo "<br>";
    for ($i = 2; $i <= 100; $i+=2) echo $i . '<br>';
    //4
    echo "<br>";
    $arr = [];
    for ($i = 1; $i <= 10; $i++) $arr[] = 'x';
    var_dump($arr);
    //5
    echo "<br>";
    $arr = [];
    for ($i = 1; $i <= 10; $i++) $arr[] = $i;
    var_dump($arr);
    //6
    echo "<br>";
    $arr = [2, 11, -5, 33, 8];
    foreach ($arr as $value) {
        if ($value > 0 and $value < 10) echo $value . ' ';
    }
    //7
    echo "<br>";
    $arr = [2, 11, -5, -33, 8];
    $flag = false;
    foreach ($arr as $value) {
        if ($value == 5) {
            $flag = true;
            break;
        }
    }
    echo $flag ? '+++':'---';
    //8
    echo "<br>";
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    echo $sum;
    //9
    echo "<br>";
    $sum2 = 0;
    foreach ($arr as $value) {
        $sum2 += $value ** 2;
    }
    echo $sum2;
    //10
    echo "<br>";
    echo $sum / count($arr);
    //11
    echo "<br>";
    $num = 5;
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    echo $factorial;
    //12
    echo "<br>";
    $arr = [
        'employee1' => 100,
        'employee2' => 200,
        'employee3' => 300,
        'employee4' => 400,
        'employee5' => 500,
        'employee6' => 600,
        'employee7' => 700,
    ];
    for ($i = 1; $i <= count($arr); $i++) {
        $arr['employee' . $i] = (int) round($arr['employee' . $i] * 1.1);
    }
    var_dump($arr);
    //13
    echo "<br>";
    $arr = [
        'employee1' => 100,
        'employee2' => 200,
        'employee3' => 300,
        'employee4' => 400,
        'employee5' => 500,
        'employee6' => 600,
        'employee7' => 700,
    ];
    for ($i = 1; $i <= count($arr); $i++) {
        if($arr['employee' . $i] <= 400) {
            $arr['employee' . $i] = (int)round($arr['employee' . $i] * 1.1);
        }
    }
    var_dump($arr);
    //14
    echo "<br>";
    $arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
    $key_sum = 0;
    $val_sum = 0;
    foreach ($arr as $key => $value) {
        $key_sum += $key;
        $val_sum += $value;
    }
    echo $key_sum / $val_sum;
    //15
    echo "<br>";
    $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
    $keys = [];
    $values = [];
    foreach ($arr as $key => $value) {
        $keys[] = $key;
        $values[] = $value;
    }
    var_dump($keys, $values);
    //16
    echo "<br>";
    $arr = [
        1 => 125,
        2 => 225,
        3 => 128,
        4 => 356,
        5 => 145,
        6 => 281,
        7 => 452,
    ];
    $new = [];
    foreach ($arr as $value) {
        if (floor($value /100) == 1 or floor($value /100) == 2 ) {
            $new[] = $value;
        }
    }
    var_dump($new);