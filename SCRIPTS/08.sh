#!/bin/bash

function a(){
	ps -aux|grep ${1}|wc -l
	}
function b(){
	cat ${1} | grep -E "^(l|L)|(l|L)"
	}
function c(){
	cat ${1} | sed -r "s/(Ubuntu|Mac OS|Windows)/Debian/g"
	}
function d(){
	echo "$(date)" >> b.txt
	}
function e(){
	cat /etc/passwd | grep -E "${1}" | cut -d ':' -f 1,7
	}
