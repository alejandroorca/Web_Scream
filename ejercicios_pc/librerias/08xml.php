<?php
// 08. Localiza y cambia al jefe de departamento de Lingüística por Christopher Potts. Guarda los cambios en un nuevo documento XML.


$xml = simplexml_load_file('course_catalog.xml');

$xpath = '//department[@code="LING"]';

foreach ($xml->xpath($xpath) as $department){
	$department->chair->professor->first_name = 'Christopher';
	$department->chair->professor->last_name = 'Potts';
}

$xml_new_path = 'new1_course_catalog.xml';
$xml->saveXML($xml_new_path);

?>
