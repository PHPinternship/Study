<?php
    //1
    for ($i = 0; $i < 10; $i++) {
        echo $i . ' ';
    }
    //2
    echo "<br>";
    for ($i = 10; $i > 0; $i--) {
        echo $i . ' ';
    }
    //3
    echo "<br>";
    for ($i = 10; $i > 0; $i--) {
        echo $i.' ';
    }
    //4
    echo "<br>";
    $i = 0;

    while ($i <= 10) {
        echo $i.' ';
        $i++;
    }
    //5
    echo "<br>";
    $res = 0;

    for ($i = 1; $i <= 10; $i++) {
        $res += $i;
    }

    echo $res;
    //6
    echo "<br>";
    $res = 1;

    for ($i = 1; $i <= 10; $i++) {
        $res *= $i;
    }

    echo $res;
    //7
    echo "<br>";
    $arr = [1, 2, 3, 4, 5];

    foreach ($arr as $elem) {
        $arr[$elem - 1] = $elem ** 2;
    }

    var_dump($arr);
    //8
    $arr = [];

    for ($i = 1; $i <= 5; $i++) {
        $arr[] = $i;
    }

    var_dump($arr);
    //9
    $arr = [1, 2, 3, 4, 5];
    $res = '';

    foreach ($arr as $elem) {
        if ($elem === 3) {
            $res = '+++';
            break;
        } else {
            $res = '---';
        }
    }

    echo $res;
    //10
    echo "<br>";
    $i = 10;

    while ($i != 0) {
        echo $i.' ';
        $i--;
    }
    //11
    echo "<br>";
    $arr = [1, 2, 3, 4, 5];
    $res = false;

    foreach ($arr as $elem) {
        if ($elem === 3) {
            $res = true;
            break;
        }
    }

    var_dump($res);
    //12
    echo "<br>";
    $i = 10;

    while ($i >= 0) {
        echo $i.' ';
        $i--;
    }
    //13
    echo "<br>";
    $arr = [1, 2, 3, 4, 5];

    foreach ($arr as $elem) {
        if ($elem % 2 == 0) {
            echo $elem.' ';
        }
    }
    //14
    $i = 10;
    echo "<br>";

    while ($i >= 1) {
        echo $i.' ';
        $i--;
    }
    //15
    echo "<br>";
    $i = 10;

    while ($i >= 1) {
        echo $i.' ';
        $i--;
    }