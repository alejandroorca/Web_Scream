# 02. Crea una función que reciba dos parámetros de entrada de tipo númerico y que devuelva el máximo. Ejecuta 3 llamadas de ejemplo de la función creada.

import sys

def maximoo(a,b):
	if a > b:
		maximo = True
	else:
		maximo = False
	return maximo

a = int(sys.argv[1])
b = int(sys.argv[2])

x = maximoo(a,b)

if x == True:
	print(a)
else:
	print(b)

	
