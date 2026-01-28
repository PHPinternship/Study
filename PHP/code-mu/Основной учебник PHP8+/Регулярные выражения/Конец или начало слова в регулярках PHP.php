<?php
$str = 'aaa xaa aaa xbb aaa';
echo preg_replace('#\bx[A-z]+#','!',$str);