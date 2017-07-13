<?php

$myfile = fopen("create.txt", "w+");
$txt = "This text should be added inside the text file.";

fwrite($myfile, $txt);

$currentDate = date("d/m/Y");

fwrite($myfile, "Last edited on $currentDate");

echo "text from file: <br>";
echo file_get_contents("create.txt");

file_put_contents("create.txt", "This is the new text.");

echo "<br> new text: <br>";
echo file_get_contents("create.txt");


//fpassthru

// Send rest of the file to the output buffer
echo fpassthru($myfile);

fclose($myfile);

?>