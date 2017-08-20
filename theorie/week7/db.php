<?php

define('DB_NAME','app');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$link) die('could not connect');

$db_selected = mysqli_select_db($link, DB_NAME);

if(!$db_selected) {die("cannot use this DB");}

?>