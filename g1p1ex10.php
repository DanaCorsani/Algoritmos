<html>
    <head>
        <title>Ejercicio 10</title>
        <link rel="stylesheet" href="./css/g1.css">
        <!-- <style>body{background-color: black;}</style> test-->
    </head>
    <body>
            <header>
            <h1>Ingrese 5 numeros</h1>
        </header>
            <main>
                <form action="" method="POST">
                <input type="hidden" name="moreOrLessThanForm">
                <input type="number" name="num1" required>
                <input type="number" name="num2" required>
                <input type="number" name="num3" required>
                <input type="number" name="num4" required>
                <input type="number" name="num5" required>
                <input type="submit">
            </form>
        </main>    
    </body> 
</html>
<?php
/*10) Ingresar 5 numeros a traves de un formulario y que me diga cual es el mayor y cual el menor.*/            //Corrijo: Intentar mantener separado el código HTML y el código PHP lo más posible.

if(isset($_POST['moreOrLessThanForm'])){    //con ISSET verifico si se envió el formulario.     con $_POST recibo los números del FORM 
    $n1=$_POST['num1'];
    $n2=$_POST['num2'];
    $n3=$_POST['num3'];
    $n4=$_POST['num4'];
    $n5=$_POST['num5'];

// #region firstTry
    /*
    Encontré una forma más fácil
     $numbers= array($n1, $n2, $n3, $n4, $n5);

    foreach($numbers as $n){
        echo "$n <br>";
    }
    */
// #endregion

#Keep It Simple, Stupid

$mayor= max($n1 , $n2 , $n3 , $n4 , $n5);       //PHP tiene la función      max();      que encuentra el numero mas grande automáticamente 

echo "El número mayor es: ".$mayor;

}
?>