<?php
// 09. Localiza y cambia al profesor Oyekunle Olukotun de Sistemas Digitales II por Konstantinos Lambrinoudakis. Guarda los cambios en un nuevo documento XML.

$xml = simplexml_load_file('course_catalog.xml');

$xpath = '//professor[first_name = "Oyekunle"]';

foreach($xml->xpath($xpath) as $professor){
	$professor->first_name = 'Konstantinos';
	$professor->last_name = 'Lambrinoudakis';

}
$xml_new_path = 'new2_course_catalog.xml';
$xml->saveXML($xml_new_path);

?>