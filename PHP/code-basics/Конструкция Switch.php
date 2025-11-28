<?php
function getNumberExplanation($number)
{
    return match ($number) {
        666 => 'devil number',
        7 => 'prime number',
        42 => 'answer for everything',
        default => 'just a number',
    };
}