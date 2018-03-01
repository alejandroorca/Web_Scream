# 07. Crea una función que reciba dos parámetros de entrada de tipo array, o lista, una de ellas de tipo string o cadena de caracteres y la otra de tipo numérico y que devuelva un array, o lista, donde se combine los dos array, o listas,
# alternativamente. Por ejemplo, la función devolverá ['hola', 3, 'qué', 6, 'tal', -4.5] si las entradas son ['hola', 'qué', 'tal'] y [3, 6, -4.5]. Ejecuta 3 llamadas de ejemplo de la función creada.

import sys

def lista_loca(a,b):
	listaf = []
	for i in range(len(b)):
		pos = a[i]
		pos1 = b[i]
		conv = float(pos1)
		listaf.append(pos)
		listaf.append(conv)
	return listaf

x = ['hola', 'qué', 'tal']
y = ['3', '6', '-4.5']

c = sys.argv[1:]

a = []
b = []

for i in range(len(c)):
	pos = c[i]
	total = int(len(c))
	media = (total / 2)   
	if i < media:
		a.append(pos)
	else:
		b.append(pos)

print(lista_loca(a,b))