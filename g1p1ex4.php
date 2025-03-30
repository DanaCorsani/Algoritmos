<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="g1.css">
</head>
<body>
    
<h1> Algoritmos y Estructuras de Datos II </h1><br>
    <h2>Paula Giaimo</h2><br>
    <h3>GUIA de ejercicios en PHP</h3><br>
    <h4>Primera Parte:</h4>
    <p>4) Escribir un programa que solo me permita ingresar un numero positivo y me muestre todos los numeros que le anteceden desde el 1.</p><hr>
    <h3>Ingrese un numero positivo para mostrar todos los que le anteceden</h3>

    <form method="POST">
        <input type="number" name="number" required min="1" placeholder="Ingrese un numero positivo">
        <input type="submit" value="Enviar">
    </form>
    <table>
    <?php

        if(isset($_POST['number'])){
        $n=$_POST['number'];

            if($n<=0){
                echo "El numero ingresado debe ser positivo" ;
            }else{
                for($i=$n; $i>=1; $i--){
                    echo "<tr><td>$i</td></tr>";
                }
            }
        }

    ?>
    </table>

</body>
</html>