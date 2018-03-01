
def asterisco(x): # Esta funcion imprime tan solo * multiplicado por X ( donde X será la longitud mas larga de caracteres )
    a = "*" * x
    return a

def lista(x): # Esta funcion me va a dar la longitud mas larga de caracteres y le sumo 4 ( para el * inicial y final mas espacios )
    c = 0 #contador
    for i in range(len(x)):
        for j in range(len(x[i])):
            if c < len(x[i]):
                c = len(x[i])
    c = c + 4
    return c

def prin(x): # Este es el cuerpo del programa. LLama a las otras funciones e imprime en pantalla
    d = lista(x) #Recojo el tamaño mas largo de caracteres de los arrays ejemplo ray1[]
    print(asterisco(d))

    for i in range(len(x)):
        if len(x[i]) + 4  < d:
            e = d - len(x[i])
            print("*", x[i], (" " * (e - 5)) ,"*")
        else:
            print("*", x[i], "*")

    print(asterisco(d))
    return " "



ray1 = ["Me", "gusta", "la", "pizza", "margherita"]
ray2 = ["Holaaaaaa", "me", "llamo", "Ralph"]
ray3 = ["Uso muchas funciones", "así mola", "muchooo mas"]

print(prin(ray1))
print(prin(ray2))
print(prin(ray3))
