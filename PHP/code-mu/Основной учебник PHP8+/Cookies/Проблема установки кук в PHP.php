<?php
setcookie('str', 'eee');
var_dump($_COOKIE['str']); // сначала null, а потом 'eee'