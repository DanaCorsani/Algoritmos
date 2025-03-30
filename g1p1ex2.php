<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="g1.css">
</head>
<body>
    
    <h1> Algoritmos y Estructuras de Datos II </h1><br>
    <h2>Paula Giaimo</h2><br>
    <h3>GUIA de ejercicios en PHP</h3><br>
    <h4>Primera Parte:</h4>
    <p>2) Escribir un programa que muestre los numeros del 1 al 150.</p><hr>
    <h3>Numeros del 1 al 150: </h3>
    <table>

        <?php

            for($i=1; $i<=150; $i++){
                echo "<tr><td>$i</td></tr>" ;                   /*Quiero cambiar esto, agregarle un submit que diga "mostrar todos los numeros del 1 al 150, y que cuando el usuario aprete ese submit, ahi recién muestre los numeros del 1 al 150, me imagino que con un input type submit seria la forma mas facil, y deberia atajarlo con if isset input type submit = true o algo asi"*/
            }

        ?>

    </table>

</body>
</html>