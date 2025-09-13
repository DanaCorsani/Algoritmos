<?php

//el constructor no es otra cosa que un metodo, pero es un metodo especial.
class Persona {
    //atributos
    private $apellido; 
    private $edad;

    public function __construct($nom, $ape, $ed){
        $this->nombre=$nom;
        $this->apellido=$ape;
        $this->edad=$ed;
        echo "<br>Objeto creado";
    }

    //metodos
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($n){
        $this->nombre=$n;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($a){
        $this->apellido=$a;
    }
    public function  getEdad(){
        return $this->edad;
    }
    public function setEdad($ed){
        $this->edad=$ed;
    }

    public function mostrarDatos($a,$p,$ed){
        //crear un metodo para mostrar todos los atributos  de la persona
        echo"<br><br>".$this->nombre."<br>".$this->apellido."<br>".$this->edad;
    }
}

$persona3= new persona("José", "Gomez", 33);
var_dump($persona3);

$persona4 = new persona("Romina", "Sanles", 42);
var_dump($persona4);

mostrarDatos();
?>