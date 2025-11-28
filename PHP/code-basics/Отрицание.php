<?php

var_dump(isPalindrome('word'));
var_dump(isNotPalindrome('Not a palindrome'));
function isPalindrome($text): bool
{
    $toLowerCase = strtolower($text);
    return $toLowerCase === strrev($toLowerCase);
}

function isNotPalindrome($text): bool
{
    return !isPalindrome($text);
}
