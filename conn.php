<?php

$dbc = @mysqli_connect('127.0.0.1','root','','spf') OR die ('Could not connect to Mysql: '.mysqli_connect_error());
mysqli_set_charset($dbc,'utf8');
?>