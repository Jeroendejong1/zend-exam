<?php
//single quotes & double quotes + variables
$name = "world";

echo "Hello $name!";
echo "<br>";
echo 'Hello $name';
echo "<br>";

//control characters

echo "Hello \n";
echo "new \t line";


//Heredoc
$bla = "item 1";
$bla2 = "item 2";
echo "<br>";
echo <<<HTML
<div>
	<ul>
		<li>$bla</li>
		<li>$bla2</li>
	<ul>
</div>
HTML;

//nowdoc
echo <<<'HTML'
<div>
	<ul>
		<li>$bla</li>
		<li>$bla2</li>
	<ul>
</div>
HTML;

//escaping in stings
echo 'This is \'my\' sting';
echo " \$bla";

//strlen
echo "<br>";
echo 'Length of string = '.strlen('blBLbfjknSGJKNsjkgskjngkj');

//strt
echo "<br>";
echo 'String transform: '.strtr('byz', 'b', 'x');

//using string as array
echo '<br>';
$testString = 'bla';
echo $testString[1];
echo '<br>';
$testString[1] = 'a';
echo $testString;

//string comparison
echo '<br>';

$string = '234234';
if($string == 234234) echo 'true '; else {echo 'false ';}
if($string == '234234') echo 'true '; else {echo 'false ';}
if($string === 234234) echo 'true '; else {echo 'false ';}
if($string === '234234') echo 'true '; else {echo 'false';}

//substring comparison
$string = 'ABCD';
$string2 = 'CD';
$string3 = 'cd';

if (strcmp($string, 'abcd') === 0) {echo 'true';} else { echo 'false';}
if (strcasecmp($string, 'ABCD') === 0) {echo 'true';} else { echo 'false';}
if (strncasecmp($string, $string2, 2) === 0) {echo 'true';} else { echo 'false';}

//searching inside strings
//strpos
if (strpos($string, $string2) !== false){ echo 'true ';} else { echo 'false';}

//strstr
echo '<br>';

echo strstr($string, $string2);

//stripos
echo '<br>';

if (stripos($string, $string3) !== false){ echo 'true ';} else { echo 'false';}

//strstr
echo '<br>';
echo stristr($string, $string3);

//strcspn
echo '<br>';
echo strcspn($string, $string2);

//strspn
echo '<br>';
$string = 1234;
$string2 = 12;
echo strspn($string, $string2);

//str_replace
echo '<br>';
echo str_replace('bla','test','bla ding');

//str_ireplace
echo '<br>';
//with sting
echo str_ireplace('bla','test','Bla ding');

//with array
echo str_replace(
array("item1", "item2"),
array("item3", "item4"),
"item1 item2"
);

//substr_replacecho '<br>';
echo '<br>';
echo substr_replace("hello world", "moon", 2);
echo '<br>';
echo substr_replace("hello world", "moon", 6);

//substring extracting



?>