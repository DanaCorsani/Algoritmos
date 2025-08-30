<!DOCTYPE html>
<html lang="ES">
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
    // setlocale(LC_TIME, 'ES');     
    setlocale(LC_TIME, 'es_ES.utf8', 'spa', 'es_ES', 'es', 'spanish');
    date_default_timezone_set('America/Argentina/Buenos_Aires');      //https://www.php.net/manual/en/function.date-default-timezone-set.php        https://www.w3schools.com/php/php_ref_timezones.asp
    //echo"Hoy es ".strftime(%l %j \of F \of Y);
    //echo "Hoy es: " . strftime('%A');     así lo hacía la profe pero está deprecada la funcion strftime

    echo"Hoy es ".date('l j \of F \of Y').", son las: ".date('H:i:s');    //https://www.php.net/manual/en/function.date.php h:i:s=>G para que diga 21 y no 9 H parece hacer lo mismo
}

    $dias = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

?>