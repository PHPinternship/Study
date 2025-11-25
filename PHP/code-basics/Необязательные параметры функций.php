<?php
print_r(getHiddenCard("1234567812345678", 2));

function getHiddenCard($cardNumber, $stars = 4): string
{
    return str_repeat("*", $stars) . substr($cardNumber, -4);
}