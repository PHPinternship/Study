<?php
//1
$str = 'x';
for ($i = 0; $i < 10; $i++) {
    echo str_repeat($str, $i) . '<br>';
}
//2
for ($i = 1; $i < 10; $i++) {
    echo str_repeat($i, $i) . '<br>';
}