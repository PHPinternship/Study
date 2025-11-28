<?php

print_r(guessNumber(42));

function guessNumber($number): string
{
    if ($number == 42) {
        return 'You win!';
    } else {
        return 'Try again!';
    }
}