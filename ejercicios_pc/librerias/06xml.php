<?php
// 06. Localiza e imprime los títulos de los cursos que tengan como prerrequisito haber superado el curso CS106B.
$xml = simplexml_load_file('course_catalog.xml');

$xpath = '//prerequisites[prereq ="CS106B"]//..//title';
foreach($xml->xpath($xpath) as $course) {
		echo $course . PHP_EOL;

}

?>

