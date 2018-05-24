#!/bin/bash
# calcula el número de procesos ejecutándose dado un usuario (comando ps).
function a(){
	ps -aux|grep ${1}|wc -l
	}
	# muestra las líneas que empiecen o terminen por L o l dado un fichero de texto.
function b(){
	cat ${1} | grep -E "^(l|L)|(l|L)"
	}
	# transforma todas las palabras que contengan Ubuntu, Mac OS o Windows por Debian dado un fichero de texto.
function c(){
	cat ${1} | sed -r "s/(Ubuntu|Mac OS|Windows)/Debian/g"
	}
	# añade al final de un fichero de texto la fecha actual.
function d(){
	echo "$(date)" >> b.txt
	}
	# muestra cuántos usuarios tiene registrados GNU/Linux y que shell utilizan.
function e(){
	cat /etc/passwd | grep -E "${1}" | cut -d ':' -f 1,7
	}

if [[ ${#} -eq 2 ]]; then
	if [[ ${1} == '-np' ]]; then
		a ${2}
elif [[ ${1} == '-nl' ]]; then
	b ${2}