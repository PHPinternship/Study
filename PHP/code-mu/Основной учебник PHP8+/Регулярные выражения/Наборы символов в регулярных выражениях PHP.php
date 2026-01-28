<?php
//1
$str = 'aba aea aca aza axa';
echo preg_replace('#a[bex]a#','!',$str);
echo '<br>';
//2
$str = 'a1a a3a a7a a9a aba';
echo preg_replace('#a[3-6]a#','!',$str);
echo '<br>';
//3
$str = 'aba aea afa aha aga';
echo preg_replace('#a[a-g]a#','!',$str);
echo '<br>';
//4
$str = 'aba aea afa aha aga';
echo preg_replace('#a[a-f,j-z]a#','!',$str);
echo '<br>';
//5
$str = 'aAa aea aEa aJa a3a';
echo preg_replace('#a[a-f,A-D]a#','!',$str);
echo '<br>';
//6
$str = 'aAXa aeffa aGha aza ax23a a3sSa';
echo preg_replace('#a[a-z]+a#','!',$str);
echo '<br>';
//7
$str = 'aAXa aeffa aGha aza ax23a a3sSa';
echo preg_replace('#a[a-z,A-Z]+a#','!',$str);
echo '<br>';
//8
$str = 'aAXa aeffa aGha aza ax23a a3sSa';
echo preg_replace('#a[a-z,0-9]+a#','!',$str);