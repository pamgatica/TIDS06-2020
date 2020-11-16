<?php

include_once "Persona.php";

class Alumno extends Persona{
        public $nroMatricula;

        public function imprimir(){
            echo parent::imprimir().'<br>'.$this->nroMatricula;
        }

}