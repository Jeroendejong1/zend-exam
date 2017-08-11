<?php
//html form
echo <<<HTML
<form  method="post">
	<input type="file" name="file"><br><br>
	<input type="submit" name="submit">
</form>
HTML;


//get file
if(isset($_POST['submit'])){
	$file = $_POST['file'];
}
else {
	$file = "";
}

//get file data
$name = fopen("test.txt","w");
$mime = mime_content_type($file);
$size = filesize($file);

echo "$name <br> $mime <br> $size";

//create new file
$newFile = fopen('newFile.txt', "w");
$text = "$name <br> $mime <br> $size";

fwrite($newFile, $text);
fclose($newFile);

?>