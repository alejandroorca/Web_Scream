#Salva la ruta del directorio actual (pwd) en un archivo, muévete a otro directorio y añade la dirección actual al archivo creado

#Haz fallar el comando mkdir y salva el mensaje de error en un fichero

#¿Cuántas líneas tiene el manual de ps?

#Para el comando pwd salva el standard error en un archivo y redirige el standard output también a ese archivo

pwd > ~/pwd.txt
cd /
pwd >> ~/pwd.txt
cd ~

mkdir &> error

man ps | wc 

pwd 2 &> error.log >> error.log
