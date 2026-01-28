<?php
//1
$regex = '#[\d.]+#';
//2
$regex = '#[^\da-g]{3,7}#';
echo preg_replace($regex, '!', 'ggg 123asd zzz zz zzzzz');