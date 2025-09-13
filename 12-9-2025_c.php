<?php
require "12-9-2025_b"; //esto es para poder usar la clase que hice en el otro archivo
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="POST">
        <input type="hidden" name="formulario">
        Nombre: <input type="text" name="nombre">
        Apellido: <input type="text" name="apellido">
        Edad: <input type="number" name="edad">
        <input type="submit" value="Crear persona">
    </form>

</body>
</html>

<?php
//crear un formulario que me permita ingresaro nombre apellido y edad
if(isset($_POST['formulario'])){
        
    $this->nombre=$nom;
    $this->apellido=$ape;        
    $this->edad=$ed;
    echo "<br>Objeto creado";
    echo"<br><br>Nombre:".getNombre($n)." Apellido: ".getApellido($a)." Edad: ".getEdad($ed);
}
?>