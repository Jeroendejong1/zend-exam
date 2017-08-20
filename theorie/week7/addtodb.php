<?php
include("db.php");


$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO student (name, age) 
VALUES ('$name','$age');";

if (!mysqli_query($link, $sql)) {
	die('Error');
}
mysqli_close($link);

header ('Location: index.php');

?>