<?php
//1
function func($arr) {
    $sum = 0;

    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $sum += func($elem);
        } else {
            $sum += $elem;
        }
    }

    return $sum;
}
$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
echo func($arr);
//2
echo "<br>";
function func1($arr): string
{
    $sum = '';
    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $sum .= func1($elem);
        } else {
            $sum .= $elem;
        }
    }

    return $sum;
}
$arr = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];
echo func1($arr);