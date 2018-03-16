<?php
//* 02. Añade un nuevo departamento, con su correspondiente título y jefe de departamento, con tres nuevos cursos. Guarda los cambios en un nuevo documento XML.*//

$xml = simplexml_load_file('course_catalog.xml');

$department = $xml->addChild('department');
$department->addAttribute('code', 'ISO');
$department->addChild('title', 'Implantacion de sistemas operativos');
$department->addChild('chair');
$department->addChild('jefe');
$department->addChild('first name', 'Alejandro');
$department->addChild('last_name', 'OC');
$department->addChild('course');
$department->addAttribute('number', 'ISO123');
$department->addAttribute('enrollment', '777');
$department->addChild('professor');
$department->addChild('first_name', 'Manuel Ignacio');
$department->addChild('last_name', 'Lopez Quintero');
$course = $department->addChild('course');
$course->addAttribute('number', 'PAR123');
$course->addAttribute( 'enrollment', '888');
$course->addChild('professor');
$course->addChild('first_name', 'Sergio');
$course->addChild('last_name', 'Padilla');
$course1 = $department->addChild('course');
$course1->addAttribute('number', 'SGBD123');
$course1->addAttribute('enrollment', '999');
$course1->addChild('professor');
$course1->addChild('first_name', 'Jose Manuel');
$course1->addChild('last_name', 'Lizana');



$xml_new_path = 'new_course_catalog.xml';
$xml->saveXML($xml_new_path);

?>
