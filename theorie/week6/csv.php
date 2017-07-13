<?php

$array = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

$fp = fopen('file.csv', 'w');

foreach ($array as $fields) {
    //format line as csv
	fputcsv($fp, $fields);
}

fclose($fp);

header("Location: file.csv");

?>