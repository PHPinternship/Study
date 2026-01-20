<?php
function root($num): float|object|int
{
    return pow($num, 1/3);
}

function norm($num): float
{
    return round($num, 3);
}

echo norm(root(2));