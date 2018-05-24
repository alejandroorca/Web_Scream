#/bin/bash
#1. Recoge dos enteros, comprueba que el segundo es el mayor que el primero y si es así imprime el intervalo entre esos dos números.

#Control de errores de introducción de valores
if [[ ${#} -ne 2 ]]; then
echo "Tienes que introducir dos enteros."
exit 1
fi

#Comprobamos los valores introducidos si su segundo valor es mayor que el primero y si es así te imprime el intervalo

function hola(){
	if [ ${1} -lt ${2} ]; then
echo "El segundo valor es mayor."
for (( i=${1}; i<=${2}; i++ )); do
echo ${i}
done
else
echo 'El primer valor es mayor que el segundo'
fi
}

a=${1}
b=${2}

hola $a $b
