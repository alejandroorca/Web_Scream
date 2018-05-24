#/bin/bash

#2. Dado un nombre de usuario, haz un informe, con nombre informeA.txt, que muestre su nombre de usuario, su UID, su información detallada, su carpeta personal y su shell.

usuario=${1}

grep -E "^$usuario" /etc/passwd | cut -d ':' -f 1 > ~/InformeA.txt
grep -E "^$usuario" /etc/passwd | cut -d ':' -f 3 >> ~/InformeA.txt
grep -E "^$usuario" /etc/passwd | cut -d ':' -f 5 >> ~/InformeA.txt
grep -E "^$usuario" /etc/passwd | cut -d ':' -f 6 >> ~/InformeA.txt
grep -E "^$usuario" /etc/passwd | cut -d ':' -f 7 >> ~/InformeA.txt

