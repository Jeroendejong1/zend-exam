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

//func_num_args
function countArgs(){
	$argCount = func_num_args();
	echo '<br> Argument count: '.$argCount;
}
countArgs(0,1,2,3,4);

//func_get_args
function getArgs(){
		
	echo '<br> get arguments: '. func_get_args(3) .'<br>';
}
getArgs(0,1,2,3,4);

//scalar type declarations inside function
function add($a = int, $b = int){
	return $a + $b;
}

echo "scalar type declarations: <br> ";
echo add(3, 5);
echo '<br>';

//return type declarations
echo "return type declarations: <br> ";

// function number() : int{
    // $int = 88;
    // return $int;
// }

echo '<br>';

//passing by reference
echo "Passing by reference: <br> ";

function count1(&$count){
	$count++;
	echo $count;
}
$a = 3;
count1($a);
echo '<br>';
//variadics
function variadic($arg1, ...$rest){
	//$arg1 = 'Hello';
	
	foreach ($rest as $value){
		return $arg1.' '.$value;
	}
}

echo 'variadic: ';
echo variadic('Hello', 'world', 'moon');


//argument unpacking
echo "<br>";
function fruits($first, $second, $third){   
    return $first . ' ' . $second . ' ' . $third;
}
$types = ['Apple', 'Pear', 'Kiwi'];

echo fruits(...$types);



?>