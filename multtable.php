<?php
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
		$errors ++;
	}
}

if ($errors === 0) {
	//Source: http://www.dreamincode.net/forums/topic/219304-multiplication-table/

	echo '<p> <h3> Multiplication Table </h3>';

	echo '<table width="700" border="1" ';
		echo '<tr><th></th>';
			for($i = $_GET["min-multiplier"]; $i <= $_GET["max-multiplier"]; $i++) {
				echo '<th>' . $i . '</th>';
			}
		echo '</tr>';

		for ($i = $_GET["min-multiplicand"]; $i <= $_GET["max-multiplicand"]; $i++) {
			echo '<tr><th>' . $i . '</th>';
			for ($j = $_GET["min-multiplier"]; $j <= $_GET["max-multiplier"]; $j++) {
				echo '<td>' . ($i * $j) . '</td>';
			}
			echo '</tr>';
		}

	echo '</table>';
}

?>