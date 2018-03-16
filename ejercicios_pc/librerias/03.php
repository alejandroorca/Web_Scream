<?php 
/* 01. Convierte el documento XML dado en un objeto de la clase SimpleXML e imprime en pantalla dicho objeto.*/

$xml = file_put_contents('course_catalog.xml', $xml_string);

$xml = simplexml_load_file('course_catalog.xml');

print_r($xml);
