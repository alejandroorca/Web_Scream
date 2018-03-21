<?php 

$mail='alejandro96esp@gmail.com'; 


$nombre = $_POST['Nombre']; 
$telefono = $_POST['Teléfono']; 
$email = $_POST['Email']; 
$mensaje = $_POST['Mensaje']; 

$thank="index.html"; 

$message = " 
nombre:".$nombre." 
telefono:".$telefono." 
email:".$email." 
mensaje:".$mensaje.""; 

if (mail($mail,"Formulario de Consulta",$message)) 
Header ("Location: $thank"); 

?> 