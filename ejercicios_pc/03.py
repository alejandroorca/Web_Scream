# 03. Crea una función que reciba dos parámetros de entrada de tipo númerico y que devuelva un array, o lista, con el máximo, el mínimo y la media de esos dos números. Ejecuta 3 llamadas de ejemplo de la función creada.

import sys



list = []

def lista(a,b):
    list.append(a)
    list.append(b)
    orden = sorted(list)
    media = a / 2
    media1  = b / 2
    print(list[0], list[1])
    print(media, media1)
    return 0
a = int(sys.argv[1])
b = int(sys.argv[2])
print(lista(a, b))
print(lista(b,a))
print(lista(52,4))
