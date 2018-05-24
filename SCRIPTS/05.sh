#!/bin/bash

#5. Dada una serie de rutas, borra los ficheros o directorios que correspondan a dichas rutas solo si el usuario que ejecuta el script tiene permiso de escritura sobre dichas rutas. Además, si la ruta es un directorio se solicitará confirmación por parte del usuario (usa el comando read).

function funcion(){

for i in ${@}; do

if [[ -f ${i} && -w ${i} ]]; then

  rm ${i}

  echo 'Archivo eliminado'

elif [[ -d ${i} ]]; then

  read -p '¿Desea borrar la carpeta?:' carpeta

  if [[ ${carpeta} = 'Si' ]]; then

    rm -rf ${i}

  else

    echo 'Operación cancelada'

  fi

else

  echo 'No tienes permisos'

fi

done
}

c=$(funcion ${@})

echo ${c}
