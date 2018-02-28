# 08. Crea una función que reciba un parámetro de entrada de tipo numérico que sea mayor que 5 (la función devolverá 0 si el número es 5 o más pequeño) y que devuelva la suma de todos los números desde 1 hasta n sin contar con los elementos 
# n - 1 ni n - 3. Por ejemplo, la función devolverá 24 si la entrada es 8. Ejecuta 3 llamadas de ejemplo de la función creada.

import sys

def funcion(a):
	suma = 0
	if a >= 5:
		for i in range(a+1):
			if i != (a - 1) and i != (a - 3):
				suma = i + suma
				valor = suma 
	else:
		valor = 0

	return valor

a = int(sys.argv[1])

print(funcion(a))