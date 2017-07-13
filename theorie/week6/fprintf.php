<?php
if (!($fp = fopen('fprintf.txt', 'w'))) {
    return;
}

$string = "blablablalblaba";

$len = fprintf($fp, 'blablab', $string);

echo "wrote $len bytes to fprintf.txt";

?>