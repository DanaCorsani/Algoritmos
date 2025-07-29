<?php

//echo "Este es mi archivo PHP";        comentario de una linea PHP
#comentario de una linea en PHP
/*
Comentario 
de múltiples líneas
*/

/*
Variables:

♥ Siempre van a comenzar con el signo "pesos" $ $ $
♥ Las variables por convención siempre van a ir en minúsculas.
♥ No pueden tener caracteres extraños (espacios, letra "ñ")
♥ No pueden empezar con número
♥ Pueden tener "guión bajo"  _ _ _ 
♥ Puedo usar CammelCase o snake_case   $miVariable o $mi_variable 
♥ no necesita tipado (No es necesario aclarar el tipo de dato que la variable va a contener) En versiones anteriores a PHP7 NO se podían tipar las variables. Desde PHP7 se puede. Pero no es necesario hacerlo.
*/

/*
Tipos de datos que pueden tener las variables en PHP:

string
enteros
numeros flotantes
booleanos
arrays
objetos
recursos
*/

$num1 = 123;                #integer
$num2 = 34.67;              #float
$num4 = true ;              #boolean
$num5 = "texto" ;           #string
$num6 = array(1,2,3) ;      #array

/*
Funcion var_dump:
Esta función en PHP me permite identificar que tipo de variable es, y que es lo que tiene adentro.
*/

var_dump($num1);

?>