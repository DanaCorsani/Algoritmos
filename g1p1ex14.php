<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
    <link rel="stylesheet" href="./assets/css/g1.css">
</head>
<body>
    
    <header>
        <h1>Ejercicio 14</h1>
    </header>
    <main>
        <form action="" method="get">
                    <div class="clock">
                    <button type="submit" name="clock">Clock</button> <!--cual es la diferencia entre un button type submit y un input type submit-->
                    </div>
        </form>
    </main>
    <aside></aside>
    <footer></footer>

</body>
</html>

<?php

/*14) Crear un programa que al presionar un botón me muestre la fecha y hora actual en español.
Ejemplo: Hoy es Lunes 8 de Abril de 2024, son las 12:35*/

if(isset($_GET['clock'])){
    echo"Hoy es ".date("d/m/y");
}

?>