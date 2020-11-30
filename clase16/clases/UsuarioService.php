<?php
include_once 'Conexion.php';
include_once 'Usuario.php';

class UsuarioService{

    private $con;

    function __construct(){
        $this->con = new Conexion();
    }


    public function validar($user, $pass){
        $pass = md5($pass);
        $sql = "SELECT * FROM usuario WHERE username = '$user' AND password = '$pass'";

        $datos = $this->con->query($sql);
        $filasAfectadas = $datos->num_rows;

        if ($filasAfectadas == 1){
            return true;
        }else{
            return false;
        }
    }


}