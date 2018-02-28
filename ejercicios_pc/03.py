# 03. Crea una función que reciba dos parámetros de entrada de tipo númerico y que devuelva un array, o lista, con el máximo, el mínimo y la media de esos dos números. Ejecuta 3 llamadas de ejemplo de la función creada.

import sys

def lista(a,b):
    list = []
    list.append(a)
    list.append(b)
    orden = sorted(list)
    media = (a + b)/2
    list.append(media)
    return list

a = int(sys.argv[1])
b = int(sys.argv[2])

mi_lista = lista(a,b)
print(mi_lista)
