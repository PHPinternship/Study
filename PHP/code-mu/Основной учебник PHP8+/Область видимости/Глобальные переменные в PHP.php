<?php
//1
$num= 1;

function func(): void
{
    global $num;
    $num++;
}

func();
echo $num; // должно вывести 2
//2
echo "<br>";
$num = 1;

function func1(): int
{
    global $num;
    $num++;
    return $num;
}

echo func1(); // должно вывести 2
//3
echo "<br>";
$num = 1;

function func2(): int
{
    global $num;
    return $num;
}

echo func2(); // должно вывести 1