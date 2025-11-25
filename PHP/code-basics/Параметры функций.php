<?php
$word = "testing";
$symbolsNumber = 4;

print_r(truncate($word, $symbolsNumber));

function truncate($word, $symbolsNumber): string
{
    return substr($word, 0, $symbolsNumber) . "...";
}