<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="g1.css">
</head>
<body>
    

    <?php
    
    echo "<h1> Algoritmos y Estructuras de Datos II </h1><br><h2>Paula Giaimo</h2><br><h3>GUIA de ejercicios en PHP</h3><br><h4>Primera Parte:</h4><p>1) Crear un programa que me permita ingresar 1 numero y me diga si es par o impar.</p><hr>";

    echo "<h3>Ingrese un numero: </h3><form method='POST'><input type='number' name='number'><br><br><input type='submit' value='Enviar'></form>";

    if (isset ($_POST['number'])){
    $n=$_POST['number'];

        if( $n % 2 == 0){
            echo "El numero ingresado es par";
        }else{
            echo "El numero ingresado es impar";
        }
    }

    echo "<footer> Dana Corsani - 2025 </footer>";
    ?>

</body>
</html>