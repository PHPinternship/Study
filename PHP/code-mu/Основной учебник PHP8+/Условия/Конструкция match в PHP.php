<?php
$num = 3;
echo match ($num) {
    1 => 'Spring',
    2 => 'Summer',
    3 => 'Fall',
    4 => 'Winter',
    default => 'Wrong $num value',
};