# 02. Crea una función que reciba dos parámetros de entrada de tipo númerico y que devuelva el máximo. Ejecuta 3 llamadas de ejemplo de la función creada.

import sys

a = sys.argv[1]
b = sys.argv[2]

def maximo(num):
	if a > b:
		print(a)
	else:
		print(b)
	return 0

print(maximo(a))
print(maximo(b))
print(maximo(a))