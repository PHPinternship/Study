<?php
//1
function cubeOf($num): void
{
    echo $num ** 3;
}
cubeOf(5);
echo '<br>';
//2
function negativeCheck($num): void {
    if ($num == abs($num)) {
        echo '+++';
    } else echo '---';
}
$num = -5;
negativeCheck($num);