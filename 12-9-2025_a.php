<?php

//programcion orientada  objetos, vamos a programar teniendo en cuenta representaciones de la realidad, donde voy a tenre diferentes objetos de los cuales voY A TENER atributos y a la vez tambien voy a tener un comportamiento
//parecido a un struCT DE c++ O 
// para definir una clase usamos la palabra reservada class

class Persona {
    //actributos
    //PUBLIC, private y protected se llaman atributos de visibilidad
    public $nombre;
    private $apellido; 
    private $edad;

    //metodos

    #region GETTERS y SETTERS       los getters y setters SIEMPRE van a ser publicos. los metodos van a ser privados si los uso en otro metodo que es publico
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
    #endregion

}

$persona1= new Persona();  //creamos una persona (todo null)

$persona1->nombre="Juan";
//$persona1->apellido="Perez"; //esto da error, proque está privado, necesito usar getters y setters. hacer todos los atributos pubLIcos no tiene sentido usando objetos.
var_dump($persona);

$persona1->setNombre("Martin Jose");

echo $persona1->getNombre(); //llamamos al metodo get nombre y lo mostramos. el metodo es simplemente una funcionque esta adentro de una clase

$persona1->setApellido("Perez");
echo "<br><br>";

$persona1->setEdad(34);

echo $persona1->getEdad();

echo "El apellido es ".$persona1->getApellido();
var_dump($persona1);
//que es una javamachine? aprender java, s ies que realmente te gusta la programacion. segun giaimo

$persona2= new Persona();

$persona2 -> setNombre("Julieta");
$persona2 ->setApellido("Podolski");
$persona2 ->setEdad(14);

echo "<br><br>".$persona2->getNombre();
echo $persona2 ->getApellido();
echo $persona2 ->getEdad() ;

echo"<br><br>";
var_dump($persona2);

?>