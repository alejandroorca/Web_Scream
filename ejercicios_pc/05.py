# 05.  Crea una función que reciba un parámetro de entrada de tipo numérico y que devuelva un array, o lista, con todos los dígitos de ese número. Por ejemplo, la función devolverá [3, 4, 4] si la entrada es 344.
# Ejecuta 3 llamadas de ejemplo de la función creada.

import sys

def cuenta(a):
	lista = []
	for i in range(len(a)):
		pos = a[i]
		conv = int(pos)
		lista.append(conv)
	return lista


a = sys.argv[1]

print(cuenta(a))