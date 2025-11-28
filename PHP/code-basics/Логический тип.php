<?php
var_dump(isPensioner(70));

function isPensioner($age): bool
{
    if ($age >= 60) {
        return true;
    } else {
        return false;
    }
}