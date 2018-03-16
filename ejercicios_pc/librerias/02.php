<?php
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
?>
