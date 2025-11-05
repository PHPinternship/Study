<?php
$str = 'abc';
echo '1) '.$str[-1];
$num1 = 1;
$num2 = 2;
var_dump('2) result: ' . ($num1 + $num2));
$num = 123;
$str = (string) $num;
echo '3) '.$str[0].'<br>';
$str = 'abc def';
echo '4) '.$str[-1].'<br>'; // ожидаем 'f'
$num1 = 1;
$num2 = 2;
$num3 = 3;
echo '5) '.$num1 + $num2 + $num3.'<br>'; // должно вывести 6
echo '6) '. 1 . 2 .'<br>';
echo '7) '.strlen($str).'<br>'; // выводит 7, потому что пробел также считается за символ
$a = 0;
echo '8) '.++$a.'<br>';
$str = (string) $num;
echo '9) '.$str[0] + $str[1].'<br>';
$str = 'abc';
echo '10) '.strlen($str).'<br>';
$a = 24 * 60 * 60;
echo '11) '.$a.'<br>';
echo '12) '. 1.2 + 1.3 .'<br>'; // должно быть 2.5
echo '13) '.$str[strlen($str) - 1].'<br>';
$num = "123";
echo '14) '.$num[0] + $num[1] + $num[2].'<br>';
$a = 123;
$b = 456;
$s = $a + $b;
echo '15) '.$s.'<br>';
$num1 = 2.5;
$num2 = 3.5;
echo '16) '.$num1 + $num2; // ожидаем 6