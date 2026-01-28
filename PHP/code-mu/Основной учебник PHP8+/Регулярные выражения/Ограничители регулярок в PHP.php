<?php
$str = 'aeeea aeea aea axa axxa axxxa';
echo preg_replace('~a(e*|x*)a~','!',$str);