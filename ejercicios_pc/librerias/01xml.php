<?php
//*01. Convierte el documento XML dado en un objeto de la clase SimpleXML e imprime en pantalla dicho objeto.*//

$xml_string = file_get_contents('http://milq.github.io/cs/1718/lmsgi/ut/06/course_catalog.xml');
file_put_contents('course_catalog.xml', $xml_string);

$xml = simplexml_load_file('course_catalog.xml');

print_r($xml);

?>