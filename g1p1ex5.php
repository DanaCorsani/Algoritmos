<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="g1.css">
</head>
<body>
    
    <h1>Algoritmos y Estructuras de datos II</h1>
    <h2>Paula Giaimo</h2>
    <h3>Guia de ejercicios en PHP</h3>
    <h4>Primera parte:</h4>
    <p>5) Crear un programa que me permita ingresar 5 numeros y me muestre su promedio.</p><hr>
    <h4>Ingrese 5 numeros separados por un espacio entre cada uno y se le mostrara el promedio</h4>
    <form method="POST">
        <input type="text" name="numbers"  required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    
        if(isset($_POST['numbers'])){
            $fiveN= explode(" ", $_POST['numbers']);       /*Necesito checkear que sean 5 numeros ingresados si o si*/
            /*(explode(" ", $fiveN));*/
            //var_dump($fiveN);
            if(count($fiveN)==5){
                $fiveN=$fiveN[0]+$fiveN[1]+$fiveN[2]+$fiveN[3]+$fiveN[4];
                $fiveN=$fiveN/5;
                echo " <br>El promedio de los 5 numeros ingresados es: ".$fiveN;
            }else{
                echo" <br>Por favor, asegurese de ingresar 5 numeros. ";
            }

        }

    ?>

</body>
</html>