import sys

import calculadora

a = int(sys.argv[1])
b = int(sys.argv[2])

c = calculadora.suma1(a,b)

d = calculadora.resta1(a,a)

z = calculadora.cateto(a,b)
print(z)

