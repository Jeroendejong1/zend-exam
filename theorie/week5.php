<?php

//header("Location: https://www.google.nl/");
//exit;

?>

<!doctype html>
<html>
<?php
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
</html>