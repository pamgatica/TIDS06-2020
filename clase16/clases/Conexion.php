<?php

class Conexion{

    private $server = "127.0.0.1:3306";
    private $username = "root";
    private $password = "";
    private $database = "tareaspendientes";

    private $link;

    function __construct(){
        $this->link = mysqli_connect($this->server, $this->username, $this->password, $this->database);
    }

    public function query($sql){
        return $this->link->query($sql);
    }


}