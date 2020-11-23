<?php
include_once "clases/TareaService.php";
include_once "clases/Tarea.php";

$ts = new TareaService();

$tareas = $ts->listar();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas Pendientes</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body style="padding:20px">
    <h1>Tareas Pendientes</h1>
    <a href="nuevatarea.php">Nueva Tarea</a>
    <a href="listartareas.php">Ver Tareas</a>
    <h2>Ver Tareas</h2>
    <hr>

  
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Descripción</th>
                <th scope="col">Categoría</th>
                <th scope="col">Fecha Vencimiento</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($tareas as $tarea){ ?>
            <tr>
                <th scope="row"><?=$tarea->getId(); ?></th>
                <td><?=$tarea->getTitulo(); ?></td>
                <td><?=$tarea->getDescripcion(); ?></td>
                <td><?=$tarea->getCategoria(); ?></td>
                <td><?=$tarea->getFechaFin(); ?></td>
                <td><a href="eliminartarea.php?id=<?=$tarea->getId(); ?>"> <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
</svg></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>



    <strong>Desarrollo de Aplicaciones Web</strong><br>
    INACAP Valparaíso <br>
    Primavera 2020
</body>

</html>