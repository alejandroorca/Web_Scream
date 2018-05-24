#!/bin/bash

#La interrogación es un solo caracter



function num_lineas(){

wc -l ${1} | cut -d ' ' -f 1

}

function estadistica(){
	stat ${1}
}

function orden(){
	ls ~ -R  --format=single-column | grep -E "^${1}.*${2}$"
	}


function propietario(){
	stat -c %U ${1}
}

function fecha(){
	stat -c %y ${1}
}

function mostrar_ayuda(){
	echo "Ayuda: -ls, -n, -s, owner, -m"
}
	
if [[ ${1} == '-n' ]]; then

num_lineas ${2}

elif [[ ${1} == '-s' ]]; then

estadistica ${2} 

elif [[ ${1} == '-ls' ]]; then

orden ${3} ${4}

elif [[ ${1} == '-owner' ]]; then

propietario ${2}

elif [[ ${1} == '-m' ]]; then

fecha ${2}

else

mostrar_ayuda

fi

