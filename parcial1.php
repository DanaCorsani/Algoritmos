<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>primer parcial</h1>
    <h2>1</h2>
    <p>a, c, e</p>
    <h2>2 constantes</h2>
    <p>quees una constante? uan variable qeu no cambia el valor, que va a mantener el valor durante todo el programa.
    tiene que estar con mayusculas, por convención. en minúsculas funciona, pero no se debería hacer.
    las constantes llevan el signo pesos? no. 
    <br>
    <?php
    define ("IVA", 21);
    const IVA2=25;
    echo IVA;
    ?>
    </p>
    <h2>3</h2>
    <p>htdocs</p>
    <h2>4</h2>
    <p>comentarios en html <!---->
        comentarios de multiples lineas en html <!---->

        comentarios en css de una soa linea y de multiples lineas /**/

        comentarios php una sola linea // y #
        multiples php /**/

        en sql una linea # y --
        multiples lineas /**/
    </p>
    <h2>7</h2>
    <p>como me conecto a la base de datos mysqli_connect()
        cuatos parametros tengo que pasa? 4. primer parametro: el servidor. el segundo parametro: el usuario de la base de datos, es root porque estamos en local pero no siempre es root. el tercer parametro: contraseña. podría dejarlo ahí, y conectarme solamente al servidor. y definir la base de datos en el cuarto parametro o definirla después.
        que me devuelve cuando pongo mysqli_connect()? un objeto, de tipo conexion. me va a devolver la conexion.     
    </p>
    <h2>8</h2>
    <p>como ejecuto una consulta? mysqli_query()
        que es sql? structured query language
        cuantos parametros recibe? 2. 1, la conexion. 2 la consulta que yo quiero hacer, que podria ser cualquier consulta, un insert, un update, un select.
    </p>
    <h2>9</h2>
    <p>actualizar un registro 
        update productos set description = azucar blanca where codigo=2     lo ideal es hacerlo como "where codigo=2", ya que debo cambiar el id y no la descripcion donde diga blanca
        nunca me puedo olvidar del where ni en el update ni en el delete.
        el workbench tiene un safe mode, en donde cuando yo quiero hacer una de estas ganzadas, no me deja
        pero yo lo puedo desactivar
        actualizar datos y borrar, saber si o si para el final. es lo mínimo

</p>
    <h2>10</h2>
    <p>select .... from productos 
                * (todo)
                descripcion, precio</p>
    <h2>11</h2>
        <p>a, y d están bien.
        porque estan mal el segundo yel tercero? al tercero le faltan las comillas. y el segundo tiene mal puestas las comillas pero tambien le falta el values
        </p>
    <h2>12</h2>
        <p>seleccionar solo los alumnos de nacionalidad argentina
            select * from alumnos where nacionalidad="Argentino" solo mostraria a juan perez
            si quiero ver los argentinos y argentinAs, tengo que usar la sentencia
            select * from alumnos where nacionalidad like "Argentin_"       _ es el comodin cuando una letra podria ser distinta
            O   select * from alumnos where nacionalidad like "Argentin%"   acá sería la última letra y todo lo que le siga, sea lo que sea ejemplo: Argentino y sudamericano
        </p>
        <h2>13</h2>
        <p>session_start()
            inicia Y CONTINÚA una sesión.
        </p>
        <h2>14</h2>
        <p>foreach.
            significa para cada, y está hecho especialmente para los arrays esa estructura.
        </p>
        <h2>15</h2>
        <p></p>
        <h2>16</h2>
        <p>
            <form>
                <input type="text" name="nombre" placeholder="Ingrese su nombre">
                <input type="submit" value="Saludar">
                <?php
                if(isset($_GET['nombre'])){
                    $nombre=$_GET['nombre'];
                    echo "Hola ".$nombre."bienvenido!";
                }
                o 
                if(isset($_GET['nombre'])){
                    echo"Hola $_GET['nombre']";
                }

                ?>
            </form>
        </p>
        <h2>17</h2>
        <p>require_once
            <?php
            require_once "conexion.php";
            $con=conectar();
            $sql="select from productos";
            $res=mysqli_connect($conexion, $sql);
            while ($registro=mysqli_fetch_row($res)){
                echo "<br>".$reg['codigo']." ".$reg['descripcion']. " ". $reg['precio'];
            }
            //esta mal, tengo que cambiarlo. corrijo los errores
            
            require_once "conexion.php";
            $con=conectar();
            $sql="select * from productos"; //*
            $res=mysqli_query($con, $sql); //_query      &      $con
            while ($registro=mysqli_fetch_row($res)){
                echo "<br>".$registro[0]." ".$registro[1]. " ". $registro[2];     // $registro    &   [0],[1], [2]
            }


            O

            while($reg=mysqli_fetch_assoc($res)){

            }
            ?>
        </p>

    <h2>tema 2</h2>
    <p>2</p>
    <?Php
    const DB="negocio";
    define("BASEDEDATOS","negocio");
    ?>


<h2>manejo de formularios</h2>
<p>hace falta poner isset para recibir un archivo php (action)? no.</p>
<p>fopen para abrir el archivo, que archivo quiero abrir    fopen($txt, "a")</p>
<p>repasar manejo de archivos!</p>
</body>
</html>