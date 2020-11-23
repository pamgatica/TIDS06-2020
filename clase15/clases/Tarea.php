<?php

class Tarea{

    private $id;
    private $titulo;
    private $categoria;
    private $fechaFin;
    private $descripcion;

    /*
    function __construct($id,$titulo, $categoria, $fechaFin,$descripcion){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->categoria = $categoria;
        $this->fechaFin = $fechaFin;
        $this->descripcion = $descripcion;
    }*/

    public function setId($value){
        $this->id = $value;
    }    

    public function getId(){
        return $this->id;
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