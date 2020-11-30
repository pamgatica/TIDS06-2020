<?php
include 'sesion.php';
include_once 'clases/TareaService.php';

$id = $_GET["id"];

//echo "Tarea a eliminar id:$id";

$ts = new TareaService();
$ts->eliminar($id);

header("location: listartareas.php");

?>