<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Table test</title>
</head>
<body>

<h2> Add Student: </h2>

<form method="post" action="addtodb.php">
	<fieldset>
	<legend>New Student</legend>
		<input type="text" name="name" placeholder="name" required><br><br>
		<input type="date" name="birthday" placeholder="birthday" required><br><br>
		<input type="submit" name="submit">
		<a href="deletefromdb.php">Delete list</a><br>
	</fieldset>
</form>
<br>

<?php include("person.php"); ?>

<div id="table_container">
	<div class="table">
	<h2>Overview Students</h2>
	
	<table>
	<?php 
	include ("selectfromdb.php");
	
	$elementsArray = array();
	foreach($result as $students => $student){
		foreach($student as $key => $student){
			if($key == "name"){$name = $value;}
			if($key == "age"){$age = $value;}
		} 
		$elementsArray[$studentst] = new Sudent($name,$age);
		echo "<th colspan='2'> Role: Student </th>";
		foreach ($elementsArray[$students] as $key => $value){
			echo "<tr><td>".$key."</td><td>". $value . "</td></tr>";
		}
	}	
	?>
	</table>
	</div>
</div>
</body>
</html>
