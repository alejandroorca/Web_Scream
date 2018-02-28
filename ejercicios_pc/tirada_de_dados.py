import random

numero = []
repeticiones = [0,0,0,0,0,0,0,0,0,0,0]


for i in range(10001):
	x = 1
	y = 6
	z1 = random.randint(x,y)
	z2 = random.randint(x,y)
	
	#numero.append(z)
	#suma = numero[i] + numero[i] + 1
	suma = z1 + z2
	
	if suma == 2:
		repeticiones[0] = repeticiones[0] + 1
	if suma == 3:
		repeticiones[1] = repeticiones[1] + 1
	if suma == 4:
		repeticiones[2] = repeticiones[2] + 1
	if suma == 5:
		repeticiones[3] = repeticiones[3] + 1
	if suma == 6:
		repeticiones[4] = repeticiones[4] + 1
	if suma == 7:
		repeticiones[5] = repeticiones[5] + 1
	if suma == 8:
		repeticiones[6] = repeticiones[6] + 1
	if suma == 9:
		repeticiones[7] = repeticiones[7] + 1
	if suma == 10:
		repeticiones[8] = repeticiones[8] + 1
	if suma == 11:
		repeticiones[9] = repeticiones[9] + 1
	if suma == 12:
		repeticiones[10] = repeticiones[10] + 1

repeticiones[0] = str(repeticiones[0])
repeticiones[1] = str(repeticiones[1])
repeticiones[2] = str(repeticiones[2])
repeticiones[3] = str(repeticiones[3])
repeticiones[4] = str(repeticiones[4])
repeticiones[5] = str(repeticiones[5])
repeticiones[6] = str(repeticiones[6])
repeticiones[7] = str(repeticiones[7])
repeticiones[8] = str(repeticiones[8])
repeticiones[9] = str(repeticiones[9])
repeticiones[10] = str(repeticiones[10])

filename = 'repeticiones.txt'
txt = 'El número 2 aparece '+ repeticiones[0] +' veces' + '\n' + 'El número 3 aparece '+ repeticiones[1] + ' veces' + '\n' + 'El número 4 aparece '+ repeticiones[2] + ' veces' + '\n' + 'El número 5 aparece '+ repeticiones[3] + ' veces' + '\n' + 'El número 6 aparece '+ repeticiones[4] +' veces' + '\n' + 'El número 7 aparece '+ repeticiones[5] +' veces' + '\n' + 'El número 8 aparece '+ repeticiones[6] + ' veces' + '\n' + 'El número 9 aparece '+ repeticiones[7] + ' veces' + '\n' + 'El número 10 aparece '+ repeticiones[8] + ' veces' + '\n' + 'El número 11 aparece '+ repeticiones[9] + ' veces' + '\n' + 'El número 12 aparece '+ repeticiones[10] +' veces'

file1 = open(filename, 'w')     
file1.write(txt)                
file1.close()                   

 


