<?php
    include 'sesion.php';
    include_once "clases/Tarea.php";
    include_once "clases/TareaService.php";

    $id = $_POST["idTarea"];
    $titulo = $_POST["txtTitulo"];
    $categoria =$_POST["cboCategoria"];
    $fechaFin = $_POST["txtFechaFin"];
    $descripcion = $_POST["txtDescripcion"];

    

    $ts = new TareaService();
    $ms = $ts->modificar($id,$titulo, $categoria,$fechaFin,$descripcion);
    
    header("location: listartareas.php");
?>