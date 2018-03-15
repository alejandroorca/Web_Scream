<?php
//*03. Localiza e imprime todos los departamentos.*//
$xml = simplexml_load_file('course_catalog.xml');

foreach ($xml->children() as $departamentos) {
	echo $departamentos['code'] . '.'. PHP_EOL;
	echo $departamentos->title . '.'. PHP_EOL;
}
?>