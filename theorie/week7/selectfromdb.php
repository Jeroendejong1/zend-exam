<?php
include("db.php");

$sql = "SELECT studentNo, studentName FROM student"; 
$result = $link->query($sql);
mysqli_close($link);

?>