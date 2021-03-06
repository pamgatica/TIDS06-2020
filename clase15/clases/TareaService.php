<?php
include_once 'Conexion.php';
include_once 'Tarea.php';

class TareaService{

    private $con;

    function __construct(){
        $this->con = new Conexion();
    }

    //agregar
    public function agregar($titulo, $categoria, $fecha, $descripcion){

        $fecha = strtotime($fecha);
        $fecha = date('Y-m-d',$fecha);

        $sql = "INSERT INTO tarea (titulo, categoria, fechaTermino, descripcion) VALUES ('$titulo', '$categoria','$fecha', '$descripcion')";
       
        if( $this->con->query($sql)){
           return 1; //EXITO
       }else{
            printf("Errormessage: %s\n", $this->con->error);
           return 2; //FALLO
       }
    }

    //listar
    public function listar(){
        $sql =  "SELECT * FROM tarea";
        $result = $this->con->query($sql);

        $tareas = array();

        while($fila = $result->fetch_array()){
            $tarea = new Tarea();
            $tarea->setId($fila["idTarea"]);
            $tarea->setTitulo($fila["titulo"]);
            $tarea->setCategoria($fila["categoria"]);
            $tarea->setFechaFin($fila["fechaTermino"]);
            $tarea->setDescripcion($fila["descripcion"]);

          //  $tarea = new Tarea($fila["idTarea"], $fila["titulo"]....);

          array_push($tareas,$tarea);
        }

        return $tareas;

    }

    //eliminar
    public function eliminar($id){
        $sql = "DELETE FROM tarea WHERE idTarea = $id";
        if( $this->con->query($sql)){
            return 1; //EXITO
        }else{
             printf("Errormessage: %s\n", $this->con->error);
            return 2; //FALLO
        }

    }

}