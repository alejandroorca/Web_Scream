<?php
// 04. Localiza e imprime el nombre completo del jefe del Departamento de Computer Science.
$xml = simplexml_load_file('course_catalog.xml');

foreach($xml->children() as $paj) {
	if ($paj->title == 'Computer Science'){
  echo $paj->chair->professor->first_name . ' ';
  echo $paj->chair->professor->last_name . PHP_EOL;
	}
}

?>
