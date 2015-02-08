<?php
$min_multiplicand = htmlspecialchars($_GET["min-multiplicand"]);
$max_multiplicand = htmlspecialchars($_GET["max-multiplicand"]);
$min_multiplier = htmlspecialchars($_GET["min-multiplier"]);
$max_multiplier = htmlspecialchars($_GET["max-multiplier"]);

$errors = 0;

if ($_GET["min-multiplier"] > $_GET["max-multiplier"]) {
	echo 'Minimum multiplier larger than maximum.<br/>';
	$errors ++;
}

if ($_GET["min-multiplicand"]> $_GET["max-multiplicand"]) {
	echo 'Minimum multiplicand larger than maximum.<br/>';
	$errors ++;
}

foreach ($_GET as $key => $value) {
	//source:http://stackoverflow.com/questions/19235746/php-check-to-see-if-variable-is-integer
	if (!ctype_digit($value)) {
		echo "$key must be an integer.<br/>";
	}
}


?>