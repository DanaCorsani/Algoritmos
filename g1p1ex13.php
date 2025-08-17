<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
    <link rel="stylesheet" href="./css/g1.css">
</head>
<body>
    <header>
        <h1>Ejercicio 13</h1>
    </header>
    <main>
        <form action="" method="POST">
            <input type="hidden" name="fiveN">
            <?php
            #region first try
            /*13) Ingresar 5 numeros en un formulario (utilizar un bucle para cargar los inputs). Pasar los valores del array a 5
            variables individuales, $a, $b, $c, $d, $e (utillizando list). Luego mostrarlas
            Ejemplo: Numeros ingresados 1,2,3,4,5
            Debe mostrar:
            La variable a vale= 1, la variable b vale 2, la variable c vale 3, la variable d vale 4 y la variable e vale 5*/

            /*$ingresos=0;

            while($ingresos<5){
                ?>
                <input type="number" name="">
                <?php
                $ingresos++;
            }
            if($ingresos=5){
                ?>
                <input type="submit" value="Cargar mis números">
                <?php
            }else{
                echo"<br>Por favor ingrese 5 números";
            }
            */
            #endregion
            for($i=1; $i<=5; $i++){
                echo "Numero $i: <input type='number' name='numeros[]' required"; #supuestamente con los corchetes despues del nombre, php lo recibe como array
                //// list() doesn't work with strings dice en el manual de php, y dice tambien en el manual de php que php recibe todos los valores de formularios sin importar que type sean, como string. por lo tanto tengo que asignarle tipo int, tengo que asignarle el tipo de dato que yo quiero que tenga. creo que esto me lo habia dicho deepseek igual, creckear mas fuentes despues.
            }
            ?>

            <input type="submit" value="Procesar numeros">
            
        </form>
    </main>
    <aside></aside>
    <footer></footer>
</body>
</html>

