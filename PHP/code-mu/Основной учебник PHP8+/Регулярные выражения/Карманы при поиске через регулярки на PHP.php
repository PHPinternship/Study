<?php
//1
$str = '2025-12-31';
preg_match('#(\d+)-(\d+)-(\d+)#', $str, $match);
var_dump($match);
//2
$str = 'index.html';
preg_match('#([a-z]+)\.([a-z]+)#', $str, $match);
var_dump($match);