<?php
include("db.php");

$sql = "DELETE FROM student"; 
$result = $link->query($sql);

mysqli_close($link);

header ('Location: index.php');
?>