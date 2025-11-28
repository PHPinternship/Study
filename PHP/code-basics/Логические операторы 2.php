<?php
var_dump(isNeutralSoldier('yellow', 'black'));

function isNeutralSoldier($armorColor, $shieldColor): bool
{
    if ($armorColor != 'red' && $shieldColor == 'black') {
        return true;
    } else {
        return false;
    }
}