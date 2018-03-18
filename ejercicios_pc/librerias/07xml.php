<?php
//07. Localiza e imprime los títulos de los cursos cuya inscripción es superior a 500.

$xml = simplexml_load_file('course_catalog.xml');


$xpath = '//course[@enrollment > 500]';

foreach ($xml->xpath($xpath) as $course) {
	echo $course->title . PHP_EOL;
}
?>


