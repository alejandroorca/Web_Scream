#!/bin/bash

function encontrar_IBAN(){
	cat ${1} | grep -E "[A-Z][A-Z][0-9][0-9]-"
}
function transformar_IBAN(){
	cat ${1} | sed -r "s/[A-Z][A-Z][0-9][0-9]-/IBAN/g"
}
function comprobar_fecha(){
	cat ${1} | grep -E "[0-9]{4}-([01][0-9]|[1-9])[0-9]{2}"
