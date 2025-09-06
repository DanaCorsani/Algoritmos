<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

</body>
</html>
<?php
/*
las variables van a ser atributos 
las funciones van a ser metodos de una clase

Cliente     (Clase)
    nrocliente
    nombre              (atributos o propiedades) [variables]
    apellido
    dni

                    Que va a poder hacer el cliente?
    saludar()
    Copmrar()
    agregaralcarrito(producto)          (metodos)  [funciones]
    comprar()

                como crear un cliente?
    $cliente1 = new Cliente();              (aca le puedo pasar todos los datos, o lo dejo vacio y lo hago despues.)

    $cliente->nombre="Juan";            php usa esta flechita pero la mayoria usa el punto. asi asigno valores a los atributos

    encapsulamiento: tengo el codigo oculto, no se puede acceder asi nomas. 
    visibilidad: cada variable puede estar restringida. public: puedo acceder desde cualquier parte del código. private: priivado, solo puedo acceder desde los atributos de la clase donde estoy. lo que puedo hacer para asignar valores a esta variable, es creando funciones con getters y setters. (los metodos tambien pueden ser public o private)  protected: solo puedo aceder desde la misma clase donde estoy, o dsede las clases hijas.
    la poo no tiene que ver con un lenguaje de programacion si no con una forma de programar, puede ser en varios lenguajes.

    ignorancia selectiva, que cosas voy a poner y que cosas voy a ignorar deliberadamente? esto va a depender de que estoy haciendo en el momento. ejemplo: al cliente, yo le podria poner la cantidad de caries que tiene. pero no me interesa. y si soy dentista? y, ahi me re interesa.
    necesito saber si termino la primaria? no, a menos que lo este inscribiendo a la secundaria.

    encapsulacion: es proteger mi codigo.

    herencia: de la generalizacion a la especializacion. el hijo se va a apropiar de todo lo del padre, pero puede tener ademas atributos o funciones propios.

    class Cliente virtual extends Cliente{
    }

    diff de php con otro lenguajes, por ejemplo java. php no admite herencia multiple. puedo tener un solo padre. si tenemos traits e interfaces

    modularidad: tener el codigo separado en pedacitos
    
    polimorfismo: hace referencia a la capacidad que tiene de tomar muchas formas. ej: tanto un auto, caballo y cohete, pudeden acelerar y frenar, pero tienen metodos diferentes para hacerlo.


    jerarquia: tiene que ver con ir desde lo mas general hasta lo mas especifico, voy heredando y cada vez las clases son mas especializadas en algo


    la palabra this (este) quiere decir el objeto en el que yo estoy parado. porque? porque yo por ejemplo, creo el cliente

    get es para mostrar un atributo privado que ya tiene mi clase.
    set es para es para definir el apellido, por ejemplo.

    las clases pueden estar en cualquier parte del codigo

    protected: las clases hijas si pueden acceder. y private solo puede acceder desde la misma clase

*/

class Auto{
    $modelo,
    $color;
}1

?>