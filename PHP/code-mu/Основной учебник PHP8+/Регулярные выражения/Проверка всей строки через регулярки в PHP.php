<?php
//1
$arr[] = 'site.ru';          // +
$arr[] = 'site.com';         // +
$arr[] = 'my-site.com';      // +
$arr[] = 'my-cool-site.com'; // +
$arr[] = 'my_site.com';      // +
$arr[] = 'site123.com';      // +
$arr[] = 'site.travel';      // +
$arr[] = 'si$te.com';        // -
$arr[] = 'site.r';           // -
foreach ($arr as $str) {
    echo preg_match('#^[^$]+\.(com|ru|travel$)#', $str) . '<br>';
}
echo '<br>';
//2
$arr = [];
$arr[] = 'addr@mail.ru';    // +
$arr[] = 'addr123@mail.ru'; // +
$arr[] = 'my-addr@mail.ru'; // +
$arr[] = 'my_addr@mail.ru'; // +
$arr[] = 'addr@site.ru';    // +
$arr[] = 'addr.ru';         // -
$arr[] = 'addr@.ru';        // -
$arr[] = 'my@addr@mail.ru'; // -
foreach ($arr as $str) {
    echo preg_match('#^[^@]+@(mail|site)\.ru$#', $str) . '<br>';
}