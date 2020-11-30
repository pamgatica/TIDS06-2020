<?php session_start(); 

if(isset($_SESSION["username"])){
    $bienvenida = "Bienvenido ". $_SESSION["username"];
}else{
    $bienvenida = "Bienvenido";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas Pendientes</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    
</head>
<body style="padding:20px"> 
    <a href="index.php"><h1>Tareas Pendientes</h1></a>
    <h3><?=$bienvenida; ?></h3>
    
    <?php    if(!isset($_SESSION["username"])){  ?> 
    
        <a href="login.php">Iniciar Sesión</a>

    <?php }else{ ?>
        <a href="nuevatarea.php">Nueva Tarea</a>
        <a href="listartareas.php">Ver Tareas</a>
        <a href="logout.php">Cerrar Sesión</a>
    <?php } ?>
   
    <hr>
    <strong>Desarrollo de Aplicaciones Web</strong><br>
    INACAP Valparaíso <br>
    Primavera 2020
</body>
</html>