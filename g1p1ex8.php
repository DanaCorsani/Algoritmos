<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="./css/g1.css">
</head>
<body>
    
    <h1>Algoritmos y Estructuras de datos II</h1>
    <h2>Paula Giaimo</h2>
    <h3>Guia de ejercicios en PHP</h3>
    <h4>Primera parte:</h4>
    <p>8) Escribir el programa para que calcule el cuadrado de un numero, y en caso de ingresar un numero negativo me
    muestre “Debe ingresar un nùmero mayor a cero”</p><hr>

    <h4>Ingrese un numero y se le dara el resultado de la potencia de este</h4>
    <form method="POST">
        <input type="number" name="number" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    
        if(isset($_POST['number'])){
            $n=$_POST['number'];
            if($n>0){
                echo"<br>El resultado de la potenciacion es: " . pow($n, 2);
            }else{
                echo"<br>El numero ingresado debe ser mayor a cero";
            }
        }

    ?>
</body>
</html>