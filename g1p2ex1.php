<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio</title>
    <link rel="stylesheet" href="./assets/css/g1.css">
</head>
<body>
    <header>
        <h1>Parte 2 Ejercicio 1</h1>
    </header>
    <main>
        <form action="" method="POST">
            <input type="hidden" name="hidden">
            Edad <input type="number" name="edad" required>
            <input type="submit" value="Enviar">
        </form>
    </main>
    <?php
    /*1) EDAD: Crear una función calcularEdad que reciba una fecha de nacimiento y devuelva la edad actual de la
persona.*/
    if(isset($_POST['hidden'])){
        $edad=$_POST['edad'];
        echo"Usted ha ingresado la edad: ".$edad;
        function($edad){
            e
        }
    }

    ?>
</body>
</html>