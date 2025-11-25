<?php

print_r(getAge(10.2));

function getAge($age) : int
{
    return floor($age);
}