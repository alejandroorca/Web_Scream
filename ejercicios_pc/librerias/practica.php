<?php
function prueba($a){

    $array = [];
    $suma = 0;
    for ($i = 0; $i < count($a); $i++){
        $suma = $suma + $a[$i];
        array_push($array, $suma);
    }
    return ($array[count($array) - 1]);
}


array_shift($argv);

$a = $argv;

$x = prueba($a);


if ($x > 10){
	echo 'EL NUMERO ES MAYOR DE 10' . PHP_EOL;
} 
else{
	echo 'NO LO ES'. PHP_EOL;
}

?>