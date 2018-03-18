<?php
/*01. Calcula el ángulo que forman dos vectores 2D. Comprueba cómo se resuelve el problema aquí. 
 * Por ejemplo, el ángulo que forman un vector con coordenadas x1 = 5.45 e y1 = 1.12 y otro con coordenadas x2 = -3.86 e y2 = 4.32 es de 2.097 
 * radianes o 120.168 grados. Pista: usa la siguiente implementación propuesta en la página: var angle = Math.atan2(vector2.y, vector2.x)
 *  - Math.atan2(vector1.y, vector1.x). Opcional: puedes usar como parámetros de entrada variables de tipo numérico o instancias de la clase 
 * Punto (realizada en el ejercicio 01 del boletín de ejercicios de Clases).
 */ 
function angulo ($a,$b,$c,$d){
	$x = atan2($d,$c) - atan2($b,$a);
	$angulo = ($x * 180) / M_PI;
	return $angulo;
	}
	$a = (float)$argv[1];
	$b = (float)$argv[2];
	$c = (float)$argv[3];
	$d = (float)$argv[4];
echo angulo($a,$b,$c,$d)


/*02. En la web oficial del lenguaje de programación (si no existe, en una web no oficial), entra en su documentación y 
 * ejecuta 3 ejemplos donde se usen sus librerías internas/estándar.
 */
 
 function calculadora($a,$b,$c){
	 if ($c === '+'){
	 $suma = $a + $b;
	 $resultado = $suma;
	 }
	 elseif ($c === '-'){
		 $resta = $a - $b;
		 $resultado = $resta;
	 }
	 elseif ($c === 'x'){
		 $multiplicacion = $a * $b;
		 $resultado = $multiplicacion;
	 }
	 elseif ($c === 'infinito'){
		 $infinito = is_infinite($a);
		 $resultado = $infinito;}
     else{
		 $resultado = 'Proximamente';
}
return $resultado;
} 

$a = (int)$argv[1];
$b = (int)$argv[2];
$c = $argv[3];

var_dump(calculadora($a,$b,$c));

// 03. Usando librerías internas, abre y lee los siguientes archivos de texto: 1 y 2. Almacena cada texto en una variable de tipo cadena de caracteres o string. Luego, concatena las dos variables de tipo string en una nueva variable de tipo string denominada textos_concatenados. Por último, crea un nuevo fichero y escribe en él el contenido de textos_concatenados.
$filename1 = 'project-history.es.txt';
$filename2 = 'Countries-Europe.csv';
$fichero_concatenado = 'textos_concatenados.txt';
    
$textos_concatenados = '';

$file1 = fopen($filename1, 'r');
$content1 = fread($file1, filesize($filename1));
fclose($file1);

$file2 = fopen($filename2, 'r');
$content2 = fread($file2, filesize($filename2));  
fclose($file2); 

$textos_concatenados = $content1 . $content2;

$file3 = fopen($fichero_concatenado, 'w');     // Create a new text file (or override if a file with the same name already exists)
fwrite($file3, $textos_concatenados);               // Write a string in a text file
fclose($file3);



echo $textos_concatenados;

//04. Usando librerías internas, crea una simulación de 10000 tiradas de 2D6 (2 dados de 6 caras) (por ejemplo, un dado da 5 y otro 2 y el resultado es 7) y escribe en un fichero de texto del número de ocurrencias (número de doses, treses... hasta número de doces) de esas 10000 tiradas. ¿Cuál es el resultado que más se repite? ¿Y los dos siguientes? Pista: usar librería interna random y el de escribir ficheros de texto.

$cont=[0,0,0,0,0,0,0,0,0,0,0];
$cont_s = '';

for($i=1; $i < 10001; $i++){
    for($j=2; $j < 12; $j++){
        $x= rand(1,6);
        $y = rand(1,6);
        $z = $x + $y;
        
        if($z === $j){
            $cont[$j-2]++;
        }
    }
}
print_r($cont);
for($i=0; $i<count($cont); $i++){
    $cont_s = $cont_s . "El numero de " . (string) ($i+2) . " es " . $cont[$i] . PHP_EOL;
}

$filename = 'tiradas.txt';

$file = fopen($filename, 'w');
fwrite($file, $cont_s);
fclose($file);


//SIMPLEXML

//*01. Convierte el documento XML dado en un objeto de la clase SimpleXML e imprime en pantalla dicho objeto.*//

$xml_string = file_get_contents('http://milq.github.io/cs/1718/lmsgi/ut/06/course_catalog.xml');
file_put_contents('course_catalog.xml', $xml_string);

$xml = simplexml_load_file('course_catalog.xml');

print_r($xml);


//* 02. Añade un nuevo departamento, con su correspondiente título y jefe de departamento, con tres nuevos cursos. Guarda los cambios en un nuevo documento XML.*//

$xml = simplexml_load_file('course_catalog.xml');

$department = $xml->addChild('department');
$department->addAttribute('code', 'ISO');
$department->addChild('title', 'Implantacion de sistemas operativos');
$department->addChild('chair');
$department->addChild('first_name', 'Alejandro');
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

//*03. Localiza e imprime todos los departamentos.*//
$xml = simplexml_load_file('course_catalog.xml');

foreach ($xml->children() as $departamentos) {
	echo $departamentos['code'] . '.'. PHP_EOL;
	echo $departamentos->title . '.'. PHP_EOL;
}

// 04. Localiza e imprime el nombre completo del jefe del Departamento de Computer Science.
$xml = simplexml_load_file('course_catalog.xml');

foreach($xml->children() as $paj) {
	if ($paj->title == 'Computer Science'){
  echo $paj->chair->professor->first_name . ' ';
  echo $paj->chair->professor->last_name . PHP_EOL;
	}
}

$xml = simplexml_load_file('course_catalog.xml');

//*05. Localiza e imprime los apellidos de todos los jefes de departamento.*//

$xml = simplexml_load_file('course_catalog.xml');

foreach ($xml->children() as $depart) {
	 echo $depart->chair->professor->last_name . PHP_EOL;
	}

// 06. Localiza e imprime los títulos de los cursos que tengan como prerrequisito haber superado el curso CS106B.
$xml = simplexml_load_file('course_catalog.xml');

$xpath = '//prerequisites[prereq ="CS106B"]//..//title';
foreach($xml->xpath($xpath) as $course) {
		echo $course . PHP_EOL;

}

 // 06. Localiza e imprime los títulos de los cursos que tengan como prerrequisito haber superado el curso CS106B.
$xml = simplexml_load_file('course_catalog.xml');

$courses = $xml->xpath("//course[prerequisites/prereq/text()='CS106B']");
foreach ( $courses as $course ) {
    echo $course->title . PHP_EOL;
}


//07. Localiza e imprime los títulos de los cursos cuya inscripción es superior a 500.

$xml = simplexml_load_file('course_catalog.xml');


$xpath = '//course[@enrollment > 500]';

foreach ($xml->xpath($xpath) as $course) {
	echo $course->title . PHP_EOL;
}

// 08. Localiza y cambia al jefe de departamento de Lingüística por Christopher Potts. Guarda los cambios en un nuevo documento XML.


$xml = simplexml_load_file('course_catalog.xml');

$xpath = '//department[@code="LING"]';

foreach ($xml->xpath($xpath) as $department){
	$department->chair->professor->first_name = 'Christopher';
	$department->chair->professor->last_name = 'Potts';
}

$xml_new_path = 'new1_course_catalog.xml';
$xml->saveXML($xml_new_path);


// 09. Localiza y cambia al profesor Oyekunle Olukotun de Sistemas Digitales II por Konstantinos Lambrinoudakis. Guarda los cambios en un nuevo documento XML.

$xml = simplexml_load_file('course_catalog.xml');

$xpath = '//professor[first_name = "Oyekunle"]';

foreach($xml->xpath($xpath) as $professor){
	$professor->first_name = 'Konstantinos';
	$professor->last_name = 'Lambrinoudakis';

}
$xml_new_path = 'new2_course_catalog.xml';
$xml->saveXML($xml_new_path);


// ARRAYS
//
// An array is a data structure consisting of a collection of elements (values or variables)

$food = ['oranges', 'strawberries', 'lemons'];

$x = $food[0];      // The first element is at index 0
$y = $food[1];      // The second element is at index 1
$z = $food[2];      // The third element is at index 2

echo 'I like ' . $x . ', ' . $y . ', and ' . $z . PHP_EOL;



// COUNT ELEMENTS IN AN ARRAY

$fruits = ['Apple', 'Banana', 'Watermelon', 'Peach', ' Nectarine'];
$num_fruits = count($fruits);     // The variable 'num_fruits' is 5 (the number of elements of the array 'fruits')
echo 'Number of fruits: ' . $num_fruits . PHP_EOL;



// MODIFY AN ARRAY ELEMENT

$ages = [43, 72, 32, 22, 65];

$ages[3] = 57;                 // Modify the element at index 3. Result: [43, 72, 32, 57, 65]
$ages[0] = 6;                  // Modify the first element.      Result: [6, 72, 32, 57, 65]
$ages[count($ages) - 1] = 12;  // Modify the last element.       Result: [6, 72, 32, 57, 12]

print_r($ages);
echo '<br />';


// AÑADIR AN ELEMENT TO AN ARRAY

$names = ['Nacho', 'Lola', 'David'];

array_splice($names, 2, 0, 'Alba');  // Add 'Alba' at index 2.         Result: ['Nacho', 'David', 'Alba', 'Lola']
array_unshift($names, 'Álvaro');     // Add 'Álvaro' at the beginning. Result: ['Álvaro', 'Nacho', 'David', 'Alba', 'Lola']
array_push($names, 'Marta');         // Add 'Marta' at the end.        Result: ['Álvaro', 'Nacho', 'David', 'Alba', 'Lola', 'Marta']

print_r($names);
echo '<br />';


// ELIMINAR AN ARRAY ELEMENT

$colours = ['Blue', 'Orange', 'Green', 'Yellow', 'White'];

array_splice($colours, 2, 1);  // Remove the element at index 2. Result: ['Blue', 'Orange', 'Yellow', 'White']
array_shift($colours);         // Remove the first element.      Result: ['Orange', 'Yellow', 'White']
array_pop($colours);           // Remove the last element.       Result: ['Orange', 'Yellow']

print_r($colours);
echo '<br />';


// SUBARRAYS: the 'array_slice(array, offset, length)' method returns the selected elements in an array, as a new array object.

$vegetables = ['Onions', 'Tomatoes', 'Spinach', 'Eggplants', 'Radishes'];

$veg1 = array_slice($vegetables, 0);        // Result: ['Onions', 'Tomatoes', 'Spinach', 'Eggplants', 'Radishes']
$veg2 = array_slice($vegetables, 2);        // Result: ['Spinach', 'Eggplants', 'Radishes']
$veg3 = array_slice($vegetables, 2, 2);     // Result: ['Spinach', 'Eggplants']
$veg4 = array_slice($vegetables, -3, -2);   // Result: ['Spinach']



// REVERSE ELEMENTS IN AN ARRAY

$numbers = [4, 5.6, -2.4, 20];
$animals = ['Dog', 'Whale', 'Cat', 'Fox'];

$numbers_reversed = array_reverse($numbers);
$animals_reversed = array_reverse($animals);

print_r($numbers_reversed); echo '<br />';
print_r($animals_reversed); echo '<br />';



// SORT ELEMENTS IN AN ARRAY

$numbers_sorted = $numbers;
sort($numbers_sorted);
$animals_sorted = $animals;
sort($animals_sorted);
print_r($numbers_sorted); echo '<br />';
print_r($animals_sorted); echo '<br />';



// MULTIDIMENSIONAL ARRAYS

$a = [8, 1];
$b = [3, 5, 7, 6];
$c = [4, [10, 9], 2];

$multi = [$a, $b, $c];

$d = $multi[1][3];                          // Get the element at [1][3]. Variable 'd' is 6
$multi[2][1][0] = -1;                       // Modify the element at index [2][1][0]
print_r($multi); echo '<br />';



// CREATE EMPTY ARRAYS

$empty_1d_list = [];                    // Create an empty array
$empty_2d_list = [[]];                  // Create an empty two-dimensional array
$empty_3d_list = [[[]]];                // Create an empty three-dimensional array

$my_list = [[], []];
array_push($my_list[0], 2);
array_push($my_list[0], 'Marta');
array_push($my_list[1], 'Hi!');
array_push($my_list[1], 3.4);
print_r($my_list); echo '<br />';                       // Prints [[2, 'Marta'], ['Hi!', 3.4]]



// STRINGS AS ARRAYS OF CHARACTERS - SUBSTRINGS

$phrase = 'Oranges are round, and oranges are juicy.';

$num_chars = strlen($phrase);               // The number of characters of the string 'phrase'. Result: 41.

$p1 = substr($phrase, 23);                  // Result: 'oranges are juicy.' substr(string, start, length)
$p2 = substr($phrase, 12, 5);               // Result: 'round'
$p3 = substr($phrase, -6, -1);              // Result: 'juicy'
$p4 = substr($phrase, 17, 1);               // Result: ','
$p5 = substr($phrase, -1);                  // Result: '.'

PILLA LOS EXTREMOS EL SUBSTR
// XML

/bookstore/*	Selects all the child element nodes of the bookstore element
//*	Selects all elements in the document
//title[@*]	Selects all title elements which have at least one attribute of any kind

/bookstore/book[1]	Selects the first book element that is the child of the bookstore element.
Note: In IE 5,6,7,8,9 first node is[0], but according to W3C, it is [1]. To solve this problem in IE, set the SelectionLanguage to XPath:

In JavaScript: xml.setProperty("SelectionLanguage","XPath");
/bookstore/book[last()]	Selects the last book element that is the child of the bookstore element
/bookstore/book[last()-1]	Selects the last but one book element that is the child of the bookstore element
/bookstore/book[position()<3]	Selects the first two book elements that are children of the bookstore element
//title[@lang]	Selects all the title elements that have an attribute named lang
//title[@lang='en']	Selects all the title elements that have a "lang" attribute with a value of "en"
/bookstore/book[price>35.00]	Selects all the book elements of the bookstore element that have a price element with a value greater than 35.00
/bookstore/book[price>35.00]/title	Selects all the title elements of the book elements of the bookstore element that have a price element with a value greater than 35.00