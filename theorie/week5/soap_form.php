<html>
    <body>
        <legend>Celsius / Fahrenheit converter</legend>
        <form action='soap.php' method='post'>
		<input type="radio" name="converter" value="degreesToCel" required>degrees To Celsius
		<br>
		<input type="radio" name="converter" value="degreesToFah" required>degrees To Fahrenheit
		<br>
		<input type='text' name="degrees">
        <input type='submit'>
        </form>
    </body>
</html>