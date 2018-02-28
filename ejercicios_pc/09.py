 '''
 09.  Crea una función que reciba un parámetro de entrada de tipo array, o lista, de tipo string o cadena de caracteres y que imprima los strings dentro de un rectángulo. Por ejemplo, para el array, o lista,
 ['Me', 'gusta', 'la', 'pizza', 'margherita'] se imprimirá el siguiente rectángulo:

**************
* Me         *
* gusta      *
* la         *
* pizza      *
* margherita *
**************
'''

def funcion(a):
	simb = '*'
	
	for i in range(len(a)):
		pos = a[i]
		pos1 = '* ', pos''

