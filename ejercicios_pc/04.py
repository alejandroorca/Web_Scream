# 04. Crea una función que reciba un parámetro de entrada de tipo array, o lista, de tipo numérico y que devuelva un array, o lista, 
#con la media y con otro array, o lista, con los números ordenados de mayor a menor. Ejecuta 3 llamadas de ejemplo de la función creada.

def listaa(a):
	lista_ordenada = sorted(a)
	for i in range(len(a)):
		suma = 0
		pos = int(a[i])
		suma = suma + pos
		total = int(len(a))
	media = suma / total
	lista_nueva = [media, lista_ordenada]

	return lista_nueva
	
a = [3, 4, 2, 1, 2, 3.2]
salida = listaa(a)
print(salida)
