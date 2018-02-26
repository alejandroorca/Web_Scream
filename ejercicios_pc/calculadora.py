# calculadora, suma, restas, division y multiplicacion, log nep, sin, cos
import math

def suma1(a,b):
	suma = a + b
	return suma

def resta1(a,b):
	resta = a - b
	return resta

def multi(a,b):
	multiplicacion = a * b
	return multiplicacion


def division1(a):
	division = a / b
	return division

def logaritmo1(a):
	logaritmo = math.log(a) 
	return logaritmo

def seno(a):
	senito = math.sin(a)
	return senito       

def coseno(a):
	cosenito = math.cos(a)
	return cosenito

def hypo(a,b):
	hipotenusa = (a * a) + (b * b)
	hipotenusa1 = math.sqrt(hipotenusa)
	return hipotenusa1 

def cateto(a,b):
	cateto1 = (b * b) - (a * a)
	cateto2 = math.sqrt(cateto1)
	return cateto2
