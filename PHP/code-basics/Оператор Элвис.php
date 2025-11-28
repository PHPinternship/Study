<?php
function generateAmount($amount, $price)
{
    return $amount ?: $price * 3;
}