<?php
var_dump(isMister('Lady'));

function isMister($string) : bool
{
    if ($string == 'Mister') {
        return true;
    } else {
        return false;
    }
}