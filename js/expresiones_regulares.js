"use strict"
var v1 = /^[a-zA-Z]+[\sa-zA-Z]*$/; //validar letras un espacio en blanco
var v2 = /^[0-9]*$/; //validacion de numeros enteros positivos
var v22 = /^[0-9]+[\.]?[0-9]*$/; //validacion de numeros positivos incluidos los decimales
var v3 = /\s+@\s+\.\s+/; // validacion de correos
var expReg = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;