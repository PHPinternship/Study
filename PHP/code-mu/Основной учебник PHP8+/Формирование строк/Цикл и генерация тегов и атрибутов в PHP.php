<?php
//1
$arr = [
    ['href'=>'page1.html', 'text'=>'text1'],
    ['href'=>'page2.html', 'text'=>'text2'],
    ['href'=>'page3.html', 'text'=>'text3'],
];
echo "<ul>";
foreach ($arr as $value) {
    echo "<li><a href=\"$value[href]\">$value[text]</a></li>";
}
echo "</ul>";
//2
$arr = [
    ['value' => '1', 'text' => 'text1'],
    ['value' => '2', 'text' => 'text2'],
    ['value' => '3', 'text' => 'text3'],
];
echo "<select>";
foreach ($arr as $item) {
    echo "<option value=\"$item[value]\">$item[text]</option>";
}
echo "</select>";