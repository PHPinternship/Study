<?php
function startsWith($text, $substr)
{
    return mb_strpos($text, $substr) === 0;
}