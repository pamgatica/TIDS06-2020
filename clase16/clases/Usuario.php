<?php

class Usuario{
    private $username;
    private $nombre;
    private $apellido;
    private $password;

    public function setUsername($value){
        $this->username = $value;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setNombre($value){
        $this->nombre = $value;
    }

    public function getNombre(){
        return $this->nombre;
    }
    
    public function setApellido($value){
        $this->apellido = $value;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function setPassword($value){
        $this->password = $value;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getNombreCompleto(){
        return $this->nombre." ".$this->apellido;
    }
    
}