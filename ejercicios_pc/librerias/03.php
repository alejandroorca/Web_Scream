<?php
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
?>