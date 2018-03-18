<?php
//10. Localiza y elimina el curso con código CS124. Guarda los cambios en un nuevo documento XML.

$xml = simplexml_load_file('course_catalog.xml');

$xpath = '//course[@number ="CS124"]';

foreach ($xml->xpath($xpath) as $code {
	$delete = $code->removeChild($xpath);
}

$xml_new_path = 'new3_course_catalog.xml';
$xml->saveXML($xml_new_path);

?>
