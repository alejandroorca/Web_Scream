<?php
/*01. Calcula el ángulo que forman dos vectores 2D. Comprueba cómo se resuelve el problema aquí. 
 * Por ejemplo, el ángulo que forman un vector con coordenadas x1 = 5.45 e y1 = 1.12 y otro con coordenadas x2 = -3.86 e y2 = 4.32 es de 2.097 
 * radianes o 120.168 grados. Pista: usa la siguiente implementación propuesta en la página: var angle = Math.atan2(vector2.y, vector2.x)
 *  - Math.atan2(vector1.y, vector1.x). Opcional: puedes usar como parámetros de entrada variables de tipo numérico o instancias de la clase 
 * Punto (realizada en el ejercicio 01 del boletín de ejercicios de Clases).
 */ 
function angulo ($y2,$x2,$y1,$x1){
	$x = atan2($d,$c) - atan2($b,$a);
	$angulo = ($x * 180) / M_PI;
	return $angulo;
	}
	$a = (float)$argv[1];
	$b = (float)$argv[2];
	$c = (float)$argv[3];
	$d = (float)$argv[4];
echo angulo($d,$c,$b,$a)

?>
