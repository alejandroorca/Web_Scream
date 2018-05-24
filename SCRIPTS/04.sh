#/bin/bash

#4. Dada una serie de rutas, muestra si es un fichero o un directorio. Además, si es un fichero muestra su tipo (comando file) y si es un directorio muestra el tamaño que ocupa (comando du).

lista=[${a},${b},${c}]

for i in ${@}; do

if [[ -f ${i} ]]; then
echo 'Es un fichero'
file ${i}
else
echo 'Es un directorio'
du -hs ${i}

fi
done
