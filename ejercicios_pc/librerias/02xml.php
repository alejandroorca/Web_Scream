<?php
//* 02. Añade un nuevo departamento, con su correspondiente título y jefe de departamento, con tres nuevos cursos. Guarda los cambios en un nuevo documento XML.*//

$xml = simplexml_load_file('course_catalog.xml');

$department = $xml->addChild('department');
$department->addAttribute('code', 'ISO');
$department->addChild('title', 'Implantacion de sistemas operativos');
$chair = $department->addChild('chair');
$chair->

$department->addChild('jefe');
$department->addChild('first name', 'Alejandro');
$department->addChild('last_name', 'OC');
$department->addChild('course');
$department->addAttribute('number', 'ISO123');
$department->addAttribute('enrollment', '777');
$department->addChild('professor');
$department->addChild('first_name', 'Manuel Ignacio');
$department->addChild('last_name', 'Lopez Quintero');
$department->addChild('course');
$department->addAttribute('number', 'PAR123');
$department->addAttribute( 'enrollment', '888');
$department->addChild('professor');
$department->addChild('first_name', 'Sergio');
$department->addChild('last_name', 'Padilla');
$department->addChild('course');
$department->addAttribute('number', 'SGBD123');
$department->addAttribute('enrollment', '999');
$department->addChild('professor');
$department->addChild('first_name', 'Jose Manuel');
$department->addChild('last_name', 'Lizana');



$xml_new_path = 'new_course_catalog.xml';
$xml->saveXML($xml_new_path);

?>
