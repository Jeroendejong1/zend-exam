<?php
<<<<<<< HEAD
//header("Location: https://www.google.nl/");
//exit;
=======

//header("Location: https://www.google.nl/");
//exit;

>>>>>>> origin/master
?>

<!doctype html>
<html>
<?php
<<<<<<< HEAD

//sessions
session_start();
$_SESSION['testdata'] = "This is test data.";
echo $_SESSION['testdata'];
session_destroy();
echo $_SESSION['testdata'];

//cookies
setcookie("hide_menu", "1");


setcookie("bla", "test");

var_dump($_COOKIE['bla']);



//serialize/unsirialize cookies


//html form using POST

echo <<<HTML
<form method="post">
	<fieldset>
	<legend>form with POST</legend>
	<input type="text" name="input1">
	<input type="submit" name="submit" value="submit">
	</fieldset>
</form>
HTML;

if(!isset($_POST['input1']))$_POST['input1']="";
$input1 = htmlspecialchars($_POST['input1']);
echo "<br> $input1";

//html form using GET
echo <<<HTML
<form method="GET">
	<fieldset>
	<legend>form with GET</legend>
	<input type="text" name="input2">
	<input type="submit" name="submit" value="submit">
	</fieldset>
</form>
HTML;

if(!isset($_GET['input2']))$_GET['input2']="";
$input2 = htmlspecialchars($_GET['input2']);
echo "<br> $input2";

//form with 2 text-fields in array
echo <<<HTML
<form method="post">
	<fieldset>
	<legend>form with array</legend>
	<input type="text" name="formArray[]">
	<input type="text" name="formArray[]">

	<input type="submit" name="submit" value="submit">
	</fieldset>
</form>
HTML;

if(!isset($_POST['formArray']))$_POST['formArray']="";
$formArray = $_POST['formArray'];
print_r($formArray);

//html form with request
echo <<<HTML
<form method="post">
	<fieldset>
	<legend>form with POST</legend>
	<input type="text" name="input3">
	<input type="submit" name="submit" value="submit">
	</fieldset>
</form>
HTML;

if(!isset($_REQUEST['input3']))$_REQUEST['input3']="";
$input3 = $_REQUEST['input3'];
print_r($input3);

//urlencode
echo <<<HTML
<form method="post">
	<fieldset>
	<legend>form with POST</legend>
	<input type="text" name="input3">
	<input type="submit" name="submit" value="submit">
	</fieldset>
</form>
HTML;

//afmaken



//filter_var
$boolean = "not";
$boolean2 = "no";
$boolean3 = "yes";
$boolean4 = "bla";
var_dump(filter_var($boolean, FILTER_VALIDATE_BOOLEAN));
var_dump(filter_var($boolean2, FILTER_VALIDATE_BOOLEAN));
var_dump(filter_var($boolean3, FILTER_VALIDATE_BOOLEAN));
var_dump(filter_var($boolean4, FILTER_VALIDATE_BOOLEAN));

$email = "jo()hn.doe@example.com";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $email;


if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}

$float = 34.23;
var_dump(filter_var($float, FILTER_VALIDATE_FLOAT));


$int = 34.323;
$int2 = 34;
var_dump(filter_var($int, FILTER_VALIDATE_INT));
var_dump(filter_var($int2, FILTER_VALIDATE_INT));
var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
var_dump(filter_var($int, FILTER_VALIDATE_INT));


$ip = "127.3.5.4";


$url="https://www.w3schoolsÅÅ.com";

$url = filter_var($url, FILTER_SANITIZE_ENCODED);
echo $url;

$string = "test's";
var_dump(filter_var($string, FILTER_SANITIZE_MAGIC_QUOTES));

echo "<hr>";
//convert array to JSON
$array = array("a" => "item1","b" => "item2", "c" => "item3");


$array = json_encode($array);
echo $array;


//convert JSON to xml
$array = json_decode($array);
echo"<br>";
print_r($array);


?>



=======
session_start();

//headers



//sessions
$_SESSION['testdata'] = "This is test data.";

echo $_SESSION['testdata'];

session_destroy();

echo $_SESSION['testdata'];


//cookies


//serialize/unsirialize cookies



//html form using POST


//html form using GET




?>
>>>>>>> origin/master
</html>