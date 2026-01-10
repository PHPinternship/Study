<?php
//1
$str = 'document.pdf';
if (str_ends_with($str, '.pdf')) {
    echo 'it does' . '<br>';
}
//2
$str = 'https://example.com';
if (str_starts_with($str, 'https://')) {
    echo 'it does' . '<br>';
}
//3
$str = 'The quick brown fox';
if (str_contains($str, 'fox')) {
    echo 'it does' . '<br>';
}
//4
$str = 'image.png';
if (str_ends_with($str, '.png') or str_ends_with($str, '.jpg')) {
    echo 'it does' . '<br>';
}
//5
$str = 'admin@example.com';
if (str_ends_with($str, '.com') and str_contains($str, '@')) {
    echo 'it does';
}