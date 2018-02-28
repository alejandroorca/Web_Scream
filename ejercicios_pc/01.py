#01. Crea una función que reciba un parámetro de entrada de tipo numérico y que devuelva un booleano con valor true si el número es par y false si es impar. Ejecuta 3 llamadas de ejemplo de la función creada.


import sys



def booleano(num):
	mod = num % 2
	if mod == 0:
		es_par = True
	else:
		es_par = False
	return es_par


result = booleano(int(sys.argv[1]))

if result == True:
	print('Es par')
else:
	print('No es par')
