<?php

class Animal
{
private $nombre;
private $sonido;
private $num_patas;
private $edad;

public function Animal($nom, $son, $num, $ed){
$this->nombre = $nom;
$this->sonido = $son;
$this->num_patas = $num;
$this->edad = $ed;
}

public function get_nombre(){
	return $this->nombre;
	}
public function set_nombre($n){
	$this->nombre = $n;
	}
public function edads(){
	$this->edad = $this->edad + 1;
	}
public function get_edad(){
	return $this->edad;
	}

}

	
$a1 = new Animal('Blanca', 'ladra', 4, 3);
echo $a1->get_nombre();
$a1->set_nombre('Negri');
echo $a1->get_nombre();
$a1->edads();
echo $a1->get_edad();
?>
