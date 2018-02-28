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

<<<<<<< HEAD
=======
	a = sorted(lista_orden)
    
    conv = int(lista[0])
    conv1 = int(lista[2])

     lista_media = []

     media = conv / 2
     media1 = conv1 / 2

     lista_media.append(media)
     lista_media.append(media1)
     return lista

     print(lista(lista[1], 45))
>>>>>>> d0d800e32b122b38db35b5d59bd164eb950d8152
	
a = [3, 4, 2, 1, 2, 3.2]
salida = listaa(a)
print(salida)
