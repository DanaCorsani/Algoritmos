<?php
#PHP 1 - Variables, Constantes, Ambito de las variables

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

#La función var_dump() es para desarrollar, el usuario final nunca tiene que verlo ni debe estar dentro de ningun sistema

#Diferentes formas de usar echo:

echo "<br>num1 vale ".$num1;
Echo "<br>num1 vale ".$num1;
echo ("<br>num1 vale ".$num1);
Echo ("<br>num1 vale ".$num1);
ECHO "<br>num1 vale ".$num1;
ECHO ("<br>num1 vale ".$num1);

#Además del Echo, para imprimir en pantalla también podemos usar el print. La diferencia es que print ma va a retornar un valor 1

print "<br><br>Con print, num1 vale ".$num1;

#También tenemos la función printf() que va a devolver la cantidad de caracteres

printf("<br><br>Con printf num1 vale ".$num1);

#Formas de concatenar

echo "<br><br>Punto num1 vale".$num1;       #Lo ideal es usar este por similitud con los demás lenguajes de programación, pero va a depender de cada caso.
echo "<br>Coma num1 vale",$num1;
echo "<br>Sin concatenar num1 vale$num1";

#Ámbito de las variables (Scope)

$texto="Julietta";      #Las variables que están por fuera de cualquier función están en un ámbito que se considera GLOBAL

echo $texto;
decirQueHayEnTexto();       #Ejecuto la función. Onbrowser"Warning: Undefined variable $texto in C:\xampp\htdocs\php\PHPguia1\variables.php on line 80 \n En texto hay"     Las variables pueden ser llamadas desde cualquier parte del código, independientemente de donde se haya declarado la función. (En PHP)
                            #Las variables que están declaradas en un ámbito GLOBAL, solamente se pueden utilizar desde el mismo ámbito
echo $texto;

function decirQueHayEnTexto(){      #creo una función.
    global $texto;      #Agrego, para poder usar la variable global dentro de el ambito local.
    $texto="Pepe";
    echo"<br>En texto hay ".$texto."<br>";     #Ésta variable que declare acá está en el ámbito LOCAL
    $texto="Juanito";
}

?>