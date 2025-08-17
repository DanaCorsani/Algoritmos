<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
    <link rel="stylesheet" href="./assets/css/g1.css">
</head>
<body>
    
    <header>
        <h1>Ejercicio 12</h1>
    </header>
    <main>
        <form action="" method="POST">
            <input type="hidden" name="middleForm">
            a: <input type="number" name="a" required><br>
            b: <input type="number" name="b" required><br>
            c: <input type="number" name="c" required><br>
            <input type="submit" value="Calcular el valor del medio">
        </form>
    </main>
    <aside></aside>
    <footer></footer>

</body>
</html>

<?php

/*12) Crear una aplicación que dados 3 numeros enteros ($a $b y $c) diga cual tiene el valor del medio, y en el caso
que no exitiera me lo informe por pantalla.
Ejemplos:
$a=10; $b=5; $c=1; muestra “el valor del medio es b=5”
$a=10; $b=5; $c=10; muestra “no existe valor del medio”*/

if(isset($_POST['middleForm'])){
    $a=$_POST['a'];
    $b=$_POST['b'];     //agarro los valores del form
    $c=$_POST['c'];

    $resultado= "";     //aca pongo el valor del medio si es que hay

    if(($a>$b && $a<$c)||($a<$b && $a>$c)){
        echo"<br><br>Para a=".$a." b=".$b." c=".$c;
        echo $resultado="<br>El resultado es: ".$a." es el número del medio";
    }elseif(($b>$a && $b<$c)||($b<$a && $b>$c)){
        echo"<br><br>Para a=".$a." b=".$b." c=".$c;
        echo $resultado="<br>El resultado es: ".$b." es el número del medio";
    }elseif(($c>$a && $c<$b)|| ($c>$a && $c<$b)){
        echo $resultado="<br>El resultado es: ".$c." es el número del medio";
    }else{
        echo "No existe un único valor que se posicione al medio";
        echo"<br><br>Para a=".$a." b=".$b." c=".$c;
    }

}

?>