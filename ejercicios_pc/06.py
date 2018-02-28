# 06. Crea una función que actúe como una calculadora simple. Para ello, la función recibirá tres parámetros de entrada, dos de tipo numérico para los valores y un string o cadena de caracteres para la operación (+, -, * o /). La función 
#devolverá el resultado de la operación elegida entre esos dos números. Ejecuta 3 llamadas de ejemplo de la función creada.

import sys

def calculadora(a,b,c):
	if c == '+':
		suma = a + b
		resultado = suma
	if c == '-':
		resta = a - b
		resultado = resta
	if c == '*':
		multi = a * b
		resultado = multi
	if c == '/':
		division = a / b
		resultado = division
	return resultado

a = int(sys.argv[1])
b = int(sys.argv[2])
c = sys.argv[3]

print(calculadora(a,b,c))


