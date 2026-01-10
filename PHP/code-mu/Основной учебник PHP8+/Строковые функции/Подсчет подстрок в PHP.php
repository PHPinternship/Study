<?php
//1
$str = 'aaa bbb ccc';
echo str_word_count($str).'<br>';
//2
$str = 'hello hello world hello';
echo substr_count($str, 'hello').'<br>';
//3
$str = '※※※';
echo mb_substr_count($str, '※').'<br>';
//4
$str = 'abracadabra';
var_dump(count_chars($str, 1));
//5
$str = 'The quick brown fox jumps over the lazy dog';
$arr = str_word_count($str, 1);
$count = 0;
foreach ($arr as $item) {
    if(strlen($item) > 3) {
        $count++;
    }
}
echo $count;