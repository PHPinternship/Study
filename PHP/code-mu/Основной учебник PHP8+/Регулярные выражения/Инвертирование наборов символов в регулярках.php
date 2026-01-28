<?php
//1
$regex = '#1[^ex]2#';
//2
$regex = '#x[^2-7]z#';
//3
$regex = '#x[^A-Z]+z#';
//4
$regex = '#x[^a-zA-Z1-5]+z#';
echo preg_replace($regex,'!','x777z xa88z x5z');