<?php
//1
function func1(): int
{
    return 3;
}
function func2(): int
{
    return 5;
}

echo func1() + func2();
echo "<br>";
//2
function sum($arr): void
{
    echo array_sum($arr);
}
sum([1, 2, 3, 4, 5]);
echo "<br>";
//3
//смотри 2
//4
function func11(): int
{
    return 3;
}
function func22(): int
{
    return 5;
}

echo func11() + func22();
//5
echo "<br>";
//смотри 2
//6
function add($num) {
    if ($num <= 9) {
        return '0' . $num;
    }
    return $num;
}
echo add(7);
echo "<br>";
//7
var_dump(isPrime(13)); // должен вывести true
var_dump(isPrime(12)); // должен вывести false

function isPrime($num): bool
{
    for ($i = 2, $hits = 0; $i < $num; $i++) {
        if (is_integer($num / $i)) {
            $hits++;
        }
    }
    if ($hits == 0) return true;
    else return false;
}