<?php

	$client = new SoapClient('https://www.w3schools.com/xml/tempconvert.asmx?WSDL');
	$degrees = $_POST['degrees'];
	
	if($_POST['converter'] == "degreesToCel"){
		$fahrenheit = array('Fahrenheit'=>$degrees);
		$conversion = $client->FahrenheitToCelsius($fahrenheit);
		echo 'Degrees in celsius: '.$conversion->FahrenheitToCelsiusResult;
	}
	elseif($_POST['converter'] == "degreesToFah"){
		$celsius = array('Celsius'=>$degrees);
		$conversion = $client->CelsiusToFahrenheit($celsius);
		echo 'Degrees in fahrenheit: '.$conversion->CelsiusToFahrenheitResult;
	}

?>