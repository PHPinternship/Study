<?php
//1
$str = 'ab-cd-ef';
echo strchr($str, '-').'<br>';
//2
echo strrchr($str, '-').'<br>';
//3
$str = 'ab--cd--ef';
echo strstr($str, '-').'<br>';
//4
$str = 'программирование-на-php';
echo mb_strrchr($str, '-').'<br>';
//5
$str = 'Привет-Мир-Пока';
echo mb_strrichr($str, '-мир').'<br>';
//6
$str = 'Функции-для-работы-со-строками';
echo mb_strstr($str, '-работы').'<br>';
//7
$str = 'ппп ррр ссс ттт ууу';
echo mb_stristr($str, 'Р').'<br>';
//8
$str = 'Тестирование-многобайтовых-функций';
echo mb_strrchr($str, '-').'<br>';
//9
$str = 'Пример-Поиска-Подстроки-В-Тексте';
echo mb_strrichr($str, '-в');