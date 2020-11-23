<?php

/**
 * Description of Conexion
 *
 * @author Pamela
 */
class Conexion {

    private $server = "localhost:3306";
    private $username = "root";
    private $password = "";
    private $database = "tareaspendientes";
    private $link;

    function __construct() {
        $this->link = mysqli_connect($this->server, $this->username, $this->password, $this->database);
    }

    public function query($sql) {
        return $this->link->query($sql);
    }

}
