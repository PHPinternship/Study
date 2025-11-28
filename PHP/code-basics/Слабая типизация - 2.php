<?php

var_dump(isFalsy(0));
function isFalsy($test): bool
{
    return $test == false;
}