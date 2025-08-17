<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar tipos de datos con PHP en vez de usar HTML.</title>
</head>
<body>
    <header>
        <h1>Verificar tipos de datos con PHP en vez de usar HTML.</h1>
    </header>
    <main>
        <div>
            <form action="" method="GET">
            <input type="hidden" name="form">
            
            Ingrese su nombre:<input type="text" name="nombre"><br>
            Ingrese su edad:<input type="number" name="edad"><br><br>

            <input type="submit">
            </form>
        </div>
    </main>
</body>
</html>
<?php

if(isset($_GET['form'])){
    $nombre=$_GET['nombre'];
    $edad=$_GET['edad'];

#region segundo intento, el primero era mejor. voy a ir de nuevo por ese lado...
/*
    switch($nombre){
        case (!=""):
            //verifico que no sea null
                echo"<br>Se ha ingresado correctamente el nombre: ".$nombre;
                }else{
                    echo "<br>Por favor no deje el campo nombre vacío";
                }
            break;
        case is_string($nombre):
            echo "<br>Se ha ingresado correctamenet el nombre:".$nombre;
            break;
        default:
            echo"<br>Algo salió mal<br>";
    }
*/
#endregion

    #region first try
    /*if(is_string($nombre) && !is_null($nombre) && $nombre!=""){    //la condición is null no está funcionando correctamente
        echo "<br>Se ha ingresado correctamente el nombre:" .$nombre."<br>" ;
    }else{
        echo"Ingrese caracteres de tipo afanuméricos por favor, gracias.";
    }*/
    #endregion
    
    
    if(is_numeric($edad)){      //no funciona ): ): ):  funcion: is_integer() no funciona en este if, no se porque. y is_int() tampoco. tampoco se porque
        echo"Se ha ingresado correctamente la edad: ".$edad;
    }else{
        echo"Ingrese caracteres de tipo numérico por favor";
    }
}

?>