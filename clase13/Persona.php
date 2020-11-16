<?php

 class Persona {
    private $nombre;
    public $apellido;


    function __construct(){
        $this->nombre = "";
        $this->apellido = "";
    }
/*
    function __construct($nombre, $apellido){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    */

    public function imprimir(){
        return $this->nombre." ".$this->apellido;
    }

    public function setNombre($value){
        $this->nombre = $value;
    }    

    public function getNombre(){
        return $this->nombre;
    }

    public static function saludar(){
        return "Hola mundo";
    }
}


?>