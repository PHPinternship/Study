<?php
//1
$str = 'aaa <b>bbb</b> ccc';
echo strip_tags($str) . '<br>';
//2
$str = '
		<p>aaa</p>
		<b>bbb</b>
		<s>ccc</s>
		<i>ddd</i>
	';
echo strip_tags($str, '<b>,<i>') . '<br>';
//3
$str = 'aaa <b>bbb</b> <i>ccc</i>';
echo htmlspecialchars($str);