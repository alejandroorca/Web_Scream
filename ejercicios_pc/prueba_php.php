<?php

class Animal {
	private $nombre;
	private $num_patas;
	private $sonido;
	public function salta(){
		echo '¡El animal salta!'. PHP_EOL;
	}
	public function corre($distancia){
		echo 'El animal corre ' . (string) $distancia . ' metros'. PHP_EOL;
	}
	}
$a1 = new Animal;
$a2 = new Animal;
$a3 = new Animal;
$a1->salta();
$a1->corre(10);

$a1->nombre = 'Blanca';
$a2->nombre = 'Negra';
$a3->nombre = 'Luna';
$a1->sonido = 'Ladra';
$a2->sonido = 'Ladra';
$a3->sonido = 'Ladra';

echo 'Mi perra '. $a2->nombre .' '. $a1->sonido . PHP_EOL;



?>
