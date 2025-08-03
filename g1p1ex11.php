<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
    <link rel="stylesheet" href="./css/g1.css">
</head>
<body>
    <header>
        <h1>Ingrese 10 números, separandolos por un espacio.</h1>
    </header>
    <main>
        <form action="" method="post">
            <input type="hidden" name="numbersForm">
            <input type="text" name="numbers" placeholder="1 12 9 87 50 25 66 72 0 55" required>
            <input type="submit">
        </form>
    </main>
    <footer></footer>
</body>
</html>
<?php
/*11) Crear un programa que me permita ingresar 10 numeros a traves de un formulario. Al enviarlos me debe
mostrar:

a) Cuantos de los numeros son positivos y cuantos negativos
b) Cuantos son pares
c) Cuantos son mayores a 10 y menores a 90
d) Cual es la suma total de los numeros ingresados*/

if(isset($_POST['numbersForm'])){
    $numbers=explode(" ",trim($_POST['numbers']));    //♥      trim() funcion que recorta los espacios puestos por user para separar los números.
    
    if(count($numbers)==10){
        #region d) suma total
        /*$total=$numbers[0]+$numbers[1]+$numbers[2]+$numbers[3]+$numbers[4]+$numbers[5]+$numbers[6]+$numbers[7]+$numbers[8]+$numbers[9];
        echo"La suma total de los números ingresados es: ".$total;*/        #encontré una función que lo hace...
        $total= array_sum($numbers);
        // for()
        echo "<h2>La suma de los 10 números ingresados es: ".$total."</h2>";
        #endregion
        
        $positivos=0;
        $negativos=0;
        $pares=0;
        $moreThanTenLessThanNinety=0;
        foreach($numbers as $num){
            if($num>0){
                $positivos++;       #sumo uno a mi variable contador ($positivos), por cada número mayor a cero en el array♥
            }elseif($num<0){
                $negativos++;       #sumo uno a mi variable contador ($negativos), por cada número menor a cero en el array $numbers, apodado como $num
            }

            if($num%2==0){
                $pares++;       #sumo uno a mi variable contador ($pares) por cada número que tiene resto cero en el array $numbers, apodado como $num
            }

            if($num>10 && $num<90){
                $moreThanTenLessThanNinety++;       #sumo uno a mi variable contador ($moreThanTenLessThanNinety) por ccada número que sea mayor a diez y menor a noventa al mismo tiempo.
            }
        }
        echo"<h2>Números Positivos: ".$positivos.
        "</h2><h2>Números Negativos: ".$negativos.
        "</h2><h2>Número Pares: ".$pares.
        "</h2><h2>Números mayores a diez y menores a noventa: ".$moreThanTenLessThanNinety."</h2";
    }

}

?>