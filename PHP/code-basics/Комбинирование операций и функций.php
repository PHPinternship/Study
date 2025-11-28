<?php
var_dump(isInternationalPhone('+79828662619'));

function isInternationalPhone($phone): bool
{
    if ($phone[0] == '+') {
        return true;
    } else {
        return false;
    }
}