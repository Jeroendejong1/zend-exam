<?php

//indexed array
$array1 = array('item1', 'item2', 'item3');

//associative array
$array2['a'] = 'item1';
$array2['b'] = 'item2';
$array2['c'] = 'item3';

//short array syntax
$array3 = ['item1', 'item2', 'item3'];

//multi-dimentional array
$array4 = array();

$array5[] = array(
	'item1',
	'item2'
);
$array6[] = array(
	'item3',
	'item4'
);

var_dump($array1, $array2, $array3, $array4, $array5);
?>