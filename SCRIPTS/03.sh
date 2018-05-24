#/bin/bash

#3. Dado un nombre de usuario, haz un informe, con nombre informeB.txt, que muestre los grupos a los que pertenece dicho usuario así como el GID de dichos grupos.

usuario=${1}

funcion1=$(grep -E "^$usuario" /etc/group | cut -d ':' -f 1)

funcion2=$(grep -E "^$usuario" /etc/group | cut -d ':' -f 3)

exportar= echo 'Grupo del usuario' $usario 'es:' $funcion1 > ~/InformeB.txt

exportar= echo 'El GID del grupo es:' $funcion2 >> ~/InformeB.txt
