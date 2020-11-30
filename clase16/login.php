<?php
include_once 'clases/UsuarioService.php';
$mensaje = "";

if(isset($_POST["txtUsername"])){
    $user  = $_POST["txtUsername"];
    $pass =  $_POST["txtPassword"];

    $us = new UsuarioService();

    if($us->validar($user,$pass)){
       session_start();     
       $_SESSION["username"] = $user;
       header("location: listartareas.php");


    }else{
        $mensaje = "Nombre de usuario o contraseña incorrecta";        
    }




}
?>



<?php include_once 'head.php'; ?>

<body style="padding:20px">
<a href="index.php"><h1>Tareas Pendientes</h1></a>
    <h2>Iniciar Sesión</h2>
    <a href="nuevatarea.php">Nueva Tarea</a>
    <hr>

    <div id="login">
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="txtUsername">Nombre de Usuario</label>
                    <input type="text" class="form-control" id="txtUsername" name="txtUsername" >
                </div>
                <div class="form-group">
                    <label for="txtPassword">Contraseña</label>
                    <input type="password" class="form-control" id="txtPassword" name="txtPassword">
                </div>
                <?php if($mensaje != ""){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?=$mensaje; ?>
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>