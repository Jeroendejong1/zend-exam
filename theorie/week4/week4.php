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
echo '<br>';

$array34 = array_fill(3,2,"bla");
print_r($array34);

//array_filter
echo '<br>';
function odd($var){
    // returns whether the input integer is odd
    return($var & 1);
}

function even($var){
    // returns whether the input integer is even
    return(!($var & 1));
}

$array35 = range (1,10);
$array36 = range(1,10);

echo "Odd :\n";
print_r(array_filter($array35, "odd"));

echo '<br>';

echo "Even:\n";
print_r(array_filter($array36, "even"));

//array_flip
$array37 = array('red','blue','yellow','green');
//exchanges all keys with their values
$array37 = array_flip($array37);
print_r($array37);

//array_intersect_assoc
echo '<br>';

$array38 = array('Amsterdam','Rotterdam','Utrecht');
$array39 = array('Amsterdam','Rotterdam','Den Haag');
$result = array_intersect_assoc($array38,$array39);
print_r($result);

//array_intersect_key
echo '<br>';

$array38 = array('a'=>'Amsterdam','b'=>'Rotterdam','c'=>'Utrecht');
$array39 = array('a'=>'Amsterdam','b'=>'Rotterdam','d'=>'Den Haag');
$result = array_intersect_key($array38,$array39);
print_r($result);

//array_intersect_uassoc
echo '<br>';
function myfunction2($array40,$array41){
if ($array40===$array41){
  return "";
  }
  return ($array40>$array41)?1:-1;
}
$array40 = array('a'=>'Amsterdam','b'=>'Den Haag','c'=>'Rotterdam','d'=>'Utrecht');
$array41 = array('a'=>'Amsterdam','b'=>'Rotterdam','c'=>'Den Haag','e'=>'Utrecht');
$result = array_intersect_uassoc($array40,$array41,'myfunction2');
print_r($result);

//array_intersect_ukey
$array40 = array('a'=>'Amsterdam','b'=>'Den Haag','c'=>'Rotterdam','d'=>'Utrecht');
$array41 = array('a'=>'Amsterdam','b'=>'Rotterdam','c'=>'Den Haag','e'=>'Utrecht');
$result = array_intersect_ukey($array40,$array41,'myfunction2');
print_r($result);

//array_intersect
$array42 = array('Amsterdam','Rotterdam','Utrecht');
$array43 = array('Amsterdam','Rotterdam','Den Haag');
$result=array_intersect($array42, $array43);
print_r($result);

//array_key_exists
if(array_key_exists(1,$array43))echo "key exists";
else echo "key not found";

//array_keys
echo "<br>";
print_r(array_keys($array43));

//array_map
echo "<br>";

function myfunction3($double){
	return($double*2);
}

$array44 = range(1,10);
print_r(array_map("myfunction3",$array44));

//array_merge_recursive
echo "<br>";
echo "<br>";

print_r(array_merge_recursive($array42,$array43));

//array_multisort
echo "<br>";
$a45 = array(2,6,3,5,8,1);
array_multisort($a45);
print_r($a45);

//array_pad
$a46=array("red","green");
print_r(array_pad($a46,8,"blue"));

//array_product
echo '<br>';
$a47=array(5,5,6);
echo(array_product($a47)); //outputs 150

//array_rand
echo '<br>';
$a48 = range(1,6);
print_r(array_rand($a48, 1));
print_r(array_rand($a48, 1));

//array_reduce
echo "<br>";
function myfunction4($v1,$v2){
	//
	return $v1 . " 1 " . $v2;
}
$a49=array("Dog","Cat","Horse");
print_r(array_reduce($a49,"myfunction4"));

//array_replace
echo "<br>";
$a50=array("item1","item2");
$a51=array("item3","item4");
print_r(array_replace($a50,$a51));

//array_replace_recursive
echo "<br>";
$a50=array("a"=>"item1","b"=>"item2");
$a51=array("a"=>"item3","b"=>"item4");
print_r(array_replace_recursive($a50,$a51));

//array_reverse
echo "<br>";
print_r(array_reverse($a49));

//array_search
$a51=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("blue",$a51);
echo array_search("orange",$a51);

$a52=array("red","green","blue");
echo array_search("red",$a51);

//array_splice
echo '<br>';
$a53=array("a"=>"Amsterdam","b"=>"Rotterdam","c"=>"Den Haag");
//replace Amsterdam with Utrecht, and Rotterdam  with Groningen
$a54=array("a"=>"Utrecht","b"=>"Groningen");
array_splice($a53,0,2,$a54);
print_r($a53);

//array_sum
$a55 = array(4,5,6);
echo array_sum($a55);//outputs 15

//array_udiff_assoc
echo '<br>';
function myfunction5($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","b"=>"blue","c"=>"green");

$result=array_udiff_assoc($a1,$a2,"myfunction5");
print_r($result);

//array_uintersect_assoc
echo '<br>';
function myfunction6($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","b"=>"blue","c"=>"green");

$result=array_uintersect_assoc($a1,$a2,"myfunction6");
print_r($result);


//array_unique
$a56=array("a"=>"red","b"=>"green","c"=>"green");
print_r(array_unique($a56));

//array_walk
function myfunction7($value,$key)
{
echo "The key $key has the value $value<br>";
}
$a=array("a"=>"Amsterdam","b"=>"Rotterdam","c"=>"Utrecht");
array_walk($a,"myfunction7");

//compact
$var1 = 'bla';
$var2 = 'blabla';
$var3 = 'blablabla';

$result = compact("var1", "var2", "var3");
echo "<br>"; 
print_r($result);

//current
echo "<br>";

echo current($result);

//each
echo "<br>";

print_r (each($result));
echo "<br>";
echo current($result);

//end
echo "<br>";
echo end($result);

//extract
echo "<br>";
$a = "Original";
$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
extract($my_array);
echo "\$a = $a; \$b = $b; \$c = $c";

?>