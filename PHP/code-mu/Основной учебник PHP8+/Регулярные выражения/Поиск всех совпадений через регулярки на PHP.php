<?php
$str = 'a 12 aa 2aaa 33bbb 44 5';
echo preg_match_all('#\d+#', $str);