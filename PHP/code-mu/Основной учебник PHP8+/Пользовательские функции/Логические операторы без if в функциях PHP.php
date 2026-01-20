<?php
//1
function func($a, $b): bool
{
    return $a === $b;
}
//2
function func2($a, $b): bool
{
    return $a !== $b;
}
//3
function func3($a, $b): bool
{
    return $a + $b >= 10;
}
//4
function func4($num): bool
{
    return $num >= 0;
}