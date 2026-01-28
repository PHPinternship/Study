<?php
//1
$str = 'a\\b c\\d e\\f';
echo preg_replace('#.\\\\.#','!',$str);
echo "<br>";
//2
$str = 'a\\b c\\\\d e\\\\\\f';
echo preg_replace('#.\\\\+.#','!',$str);