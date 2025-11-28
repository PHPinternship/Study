<?php
var_dump(isLeapYear(1998));
function isLeapYear($year): bool
{
    return $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0);
}