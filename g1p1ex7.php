<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="./css/g1.css">
</head>
<body>
    
    <h1>Algoritmos y Estructuras de datos II</h1>
    <h2>Paula Giaimo</h2>
    <h3>Guia de ejercicios en PHP</h3>
    <h4>Primera parte:</h4>
    <p>7) Crear un programa que me permita ingresar 2 numeros, los reste y que me muestre el resultado y me diga si el
    numero obtenido es positivo o negativo.</p><hr>
    <h4>Ingrese 2 numeros separados por un espacio y se le mostrara el resultado de la resta y si este numero es positivo o negativo</h4>
    <form method="POST">
        <input type="text" name="numbers"  required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    
    if(isset($_POST['numbers'])){
        $twoN=explode(" ",$_POST['numbers']);

        if(count($twoN)==2){
            $twoN=$twoN[0]-$twoN[1];
            if($twoN>0){
                echo"<br>El resultado de su resta es: " . $twoN . "<br>siendo este un numero positivo";
            }elseif($twoN<0){
                echo"<br>El resultado de su resta es: " . $twoN . "<br>siendo este un numero negativo";
            }else{
                echo "<br>El resultado de su resta es: " . $twoN . "<br>el cual no es un numero positivo ni negativo.";
            }
        }else{
            echo"<br> Por favor ingrese 2 numeros.";
        }

    }

    ?>


</body>
</html>