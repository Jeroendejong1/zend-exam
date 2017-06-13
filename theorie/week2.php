<?php
//function without arguments
function test(){
	echo "bla";
}
test();

//function with return value
function sayHello(){
	return "hello";
}
//echo function
echo sayHello();


//fucntion with arguments
function giveName($name){
	echo $name;
}
//give $name-variable the value "Joe"
giveName("Joe");

//variable scope
$bla = 'bla';

//fucntion without variable defined (gives error)
function echoBla(){
	echo $bla;
}
echoBla();

//fucntion with variable defined inside the function
function echoBla2(){
	$bla = 'bla';
	echo $bla;
}
echoBla2();

//function with variable made global
function echoBla3(){
	global $bla;
	echo $bla;
}
echoBla3();

//function with $GLOBALS array
$bla2='bla2';

function echoBla4(){
	echo $GLOBALS['bla'].''.$GLOBALS['bla2'];
}
echoBla4();

//func_num_args & func_get_args
function countArgs(){
	$argCount = func_num_args();
	$getArg = func_get_args();
	echo '<br> Argument count: '.$argCount;
	echo '<br> get arguments: '. $getArg;
}
countArgs(0,1,2,3,4);

//scalar type declarations inside function
function add(int $a, int $b){
	return $a + $b;
}

var_dump(add(3, 5));


//return type declarations


//passing by reference
function count1(&$count){
	$count++;
	echo $count;
}
$a = 3;
count1($a);

//variadics


//argument unpacking




?>