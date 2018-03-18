<?php

//*05. Localiza e imprime los apellidos de todos los jefes de departamento.*//

$xml = simplexml_load_file('course_catalog.xml');

foreach ($xml->children() as $depart) {
	 echo $depart->chair->professor->last_name . PHP_EOL;
	}
?>