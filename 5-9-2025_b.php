<?php

    class Cliente{
        public $nroCliente;
        public $nombre;
        private $apellido;

        public function getApellido(){
            return $this->apellido;             //En un get es siempre return y el valor que quiero retornar, nunca poner un echo en el get. a lo sumo hacer otro metodo especificamete para eso.
        }

        public function setapellido($ape){
            $this->apellido=$ape;
        }

            public function saludar(){
            echo "Hola!! soy ".$this->nombre . " " . $this->apellido; 
            }
    }

    $cliente1= new Cliente();
    $cliente1->nombre="Juan";
    $cliente1->setApellido("Perez");
    $cliente1->saludar();

    //$cliente1->apellido="Americo";      //este va a dar error, Cannot access private property Cliente::$apellido in 
    $cliente1->saludar();
    
    echo $cliente1->nombre;

    echo $cliente1->getApellido();

    //leer el apunte hasta la pagina 9

?>