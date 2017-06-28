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

//var_dump
var_dump($array1, $array2, $array3, $array4, $array5);


//range-function
$array7 = range(4,9);

//array_slice
$array8 = array('a','b','c','d');
print_r(array_slice($array8, 2));

//array_push
$array9 = array('white', 'grey');
array_push($array9, 'black');
print_r($array9);

//array_unshift
$array10 = array('white', 'grey');
array_unshift($array10, 'black');
print_r($array10);

//array_pop
$array11 = array('white', 'grey', 'black');
array_pop($array11);
print_r($array11);

//array_shift
$array12 = array('white', 'grey', 'black');
array_shift($array12);
print_r($array12);

//count function
$array13 = array('white', 'grey', 'black');
echo '<br>' . count($array13);

//array for loop
$array14 = range(1,5);
for ($i = 1; $i <= (count($array14)); $i++){
	echo $i;
}

//array foreach with values
$array15 = range(1,5);

foreach($array15 as $value){
	echo $value;
}

//array foreach with key & value
$array16 = range(1,5);

foreach($array16 as $key => $value){
	echo "$key $value <br>";
}

//array_walk + callback
function myfunction($value,$key){
	echo "The key $key has the value $value<br>";
}
$array17=array("a"=>"grey","b"=>"white","c"=>"black");
array_walk($array17,"myfunction");


//array_key_exists function
$array19 = array('a' => 1,'b' => 2, 'c' => 3);
if (array_key_exists('a', $array19)){
	echo 'TRUE';
}

//in_array function
$array20 = array('a' => 1,'b' => 2, 'c' => 3);
if (in_array('a', $array20)){
	echo 'TRUE';
}
$array20 = array('a' => 1,'b' => 2, 'c' => 3);
if (in_array('1', $array20)){
	echo 'TRUE';
}

//array_keys function
$array21 = array('a' => 1,'b' => 2, 'c' => 3);
print_r(array_keys($array21));

//array_values function
$array22 = array('a' => 1,'b' => 2, 'c' => 3);
print_r(array_values($array22));

//sort_locale_string


//sort_numeric


//sort_regular


//sort_string


//array_merge
$array23 = array_merge($array1, $array7);
print_r($array23);

//array_diff
echo "<br>";
$array24 = array('a','b','c');
$array25 = array('a','b');
$result = array_diff($array24,$array25);
print_r($result);

//array_dif_assoc
echo "<br>";
$array26 = array(1 => 'a', 2 => 'b', 3=> 'c');
$array27 = array(1 => 'a', 2=> 'b');
$result = array_diff_assoc($array26,$array27);
print_r($result);

//array_dif_key
echo "<br>";
$array26 = array(1 => 'a', 2 => 'b', 3=> 'c');
$array27 = array(1 => 'a', 2=> 'b');
$result = array_diff_key($array26,$array27);
print_r($result);

//array_dif_uasoc()
echo "<br>";
$array26 = array(1 => 'a', 2 => 'b', 3=> 'c');
$array27 = array(1 => 'a', 2=> 'b');
$result = array_diff_uassoc($array26,$array27,'myfunction');
print_r($result);

//array_diff_ukey
echo "<br>";
$array26 = array(1 => 'a', 2 => 'b', 3=> 'c');
$array27 = array(1 => 'a', 2=> 'b');
$result = array_diff_ukey($array26,$array27,'myfunction');
print_r($result);

//arrayObject-class_alias
//apend


//asort
$array28 = array(2,3,1);
asort($array28);
print_r($array28);

$array28 = array('p2','p3','p1');
asort($array28);
print_r($array28);

//natsort
$array29 = array('p2','p3','p1');
natsort($array29);
print_r($array29);

//array_change_key_case
$array30 = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($array30, CASE_LOWER));
print_r(array_change_key_case($array30, CASE_UPPER));

//array_chunk
$array31 = array('bla1','bla2','bla3');
print_r(array_chunk($array31, 1));

//array_column
$array32 = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

$last_names = array_column($array32, 'last_name');
$ids = array_column($array32, 'id');
print_r($last_names);
print_r($ids);

//array_count_values
echo '<br>';
$array33 = array(1,2,3);
print_r(array_count_values($array33));

//array_fill


//array_filter


//array_flip


//array_intersect_assoc


//array_intersect_key


//array_intersect_uassoc


//array_intersect_ukey


//array_intersect


//array_key_exists


//array_keys, array_map


//array_merge_recursive


//array_multisort


//array_pad


//array_product


//array_rand


//array_reduce


//array_replace


//array_replace_recursive


//array_reverse


//array_search


//array_splice


//array_sum


//array_udiff_assoc


//array_udiff_uassoc


//array_udiff


//array_uintersect_assoc


//array_uintersect_uassoc


//array_uintersect


//array_unique


//array_walk


//compact


//current


//each


//end


//extract


//next


//pos


//prev


?>