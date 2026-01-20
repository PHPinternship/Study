<?php
//1
function func($num = 5): void
{
    echo $num * $num.'<br>';
}
func(2);
func(3);
func();
//2
function func2($num1 = 0, $num2 = 0): void
{
    echo $num1 + $num2;
}
func2(2, 3);
func2(3);
func2();