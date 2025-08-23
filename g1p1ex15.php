<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
    <link rel="stylesheet" href="./css/g1.css">
</head>
<body>
    <header>
        <h1>Ejercicio 15</h1>
    </header>
    <main>
        <form action="" method="POST">
            <input type="hidden" name="">
            <button name="inicioTempo" >Click aquí para iniciar temporizador</button>
            <?php
            if(isset($_POST['inicioTempo'])){
                echo date("h:i:s");
                echo"<br><br> <button name='pararTempo'>Click aquí para detener el temporizador</button>" ;
            }
            ?>
        </form>
    </main>
    <aside></aside>
    <footer></footer>
</body>
</html>

<?php

/*15) Crear un temporizador. Debe tener dos botones:
a. Iniciar que imprimirá en pantalla la hora actual.
b. Finalizar(solo debe ser visible cuando se haya iniciado el temporizador)Que imprimirá en pantalla el
tiempo transcurrido*/

?>