<?php
$file = "finfo.txt";
$finfo = finfo_open();
echo finfo_file($finfo, $file);
finfo_close($finfo);

?>