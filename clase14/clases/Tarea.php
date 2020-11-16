<?php

class Tarea{

    private $titulo;
    private $categoria;
    private $fechaFin;
    private $descripcion;

    function __construct($titulo, $categoria, $fechaFin,$descripcion){
        $this->titulo = $titulo;
        $this->categoria = $categoria;
        $this->fechaFin = $fechaFin;
        $this->descripcion = $descripcion;
    }

    public function setTitulo($value){
        $this->titulo = $value;
    }    

    public function getTitulo(){
        return $this->titulo;
    }

    public function setCategoria($value){
        $this->categoria = $value;
    }    

    public function getCategoria(){
        return $this->categoria;
    }

    public function setFechaFin($value){
        $this->fechaFin = $value;
    }    

    public function getFechaFin(){
        return $this->fechaFin;
    }

    public function setDescripcion($value){
        $this->descripcion = $value;
    }    

    public function getDescripcion(){
        return $this->descripcion;
    }
    
}