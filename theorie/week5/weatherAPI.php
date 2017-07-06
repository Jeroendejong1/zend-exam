<?php
// $city = "London";
// $country = "uk";

$request = "http://samples.openweathermap.org/data/2.5/weather?q=London,uk&appid=b1b15e88fa797225412429c1c50c122a1";
$json = file_get_contents($request);

$decode = json_decode($json);

var_dump($decode);

?>