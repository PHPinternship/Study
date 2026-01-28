<?php
//1
$str = 'wйw wяw wёw wqw';
echo preg_replace('#w[а-яё]w#u', '!', $str);
echo '<br>';
//2
$str = 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';
echo preg_replace('#[А-яёЁ]#u', '!', $str);