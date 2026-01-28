<?php
$str = '12:59:59 12:59:12 09:45:09';
echo preg_replace('#(?<hour>\d{2}):\d{2}:\k<hour>#', '!', $str);