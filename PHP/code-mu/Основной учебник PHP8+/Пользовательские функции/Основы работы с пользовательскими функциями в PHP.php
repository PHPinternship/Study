<?php
//1
function getName(): void
{
    echo 'Alex<br>';
}
//2
function sum($a, $b): void
{
    echo array_sum(range($a, $b));
}
getName();
$lower = 1;
$upper = 100;
sum($lower, $upper);