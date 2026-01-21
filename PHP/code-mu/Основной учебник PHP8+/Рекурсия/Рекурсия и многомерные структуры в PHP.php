<?php
function func($arr): void
{
    foreach ($arr as $elem) {
        if (is_array($elem)) {
            func($elem);
        } else {
            echo $elem;
        }
    }
}
$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
func($arr);