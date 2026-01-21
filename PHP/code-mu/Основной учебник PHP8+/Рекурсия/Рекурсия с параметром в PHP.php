<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
function func($arr): void
{
    var_dump(array_shift($arr));

    if (count($arr) !== 0) {
        func($arr);
    }
}
func($arr);