<?php
    include_once "clases/Tarea.php";


    $titulo = $_POST["txtTitulo"];
    $categoria =$_POST["cboCategoria"];
    $fechaFin = $_POST["txtFechaFin"];
    $descripcion = $_POST["txtDescripcion"];

    $tarea  = new Tarea($titulo, $categoria,$fechaFin, $descripcion);

    // $ts->agregar($tarea);
?>

<?php include_once 'head.php'; ?>

<body style="padding:20px">
    <h1>Tareas Pendientes</h1>
    <h2>Nueva Tarea</h2>
    <a href="nuevatarea.php">Nueva Tarea</a>

    <div class="alert alert-success" role="alert">
        <strong>Éxito!</strong>
        Tarea creada exitosamente.
    </div>

    <div class="list-group">

        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?=$titulo; ?></h5>
                <small class="text-muted"><?=$fechaFin; ?></small>
            </div>
            <p class="mb-1"><?=$descripcion; ?></p>
            <small class="text-muted">Categoria: <?=$tarea->getCategoria(); ?></small>
        </a>
    </div>

    <a href="index.php">Volver al inicio</a>
    <hr>
    <strong>Desarrollo de Aplicaciones Web</strong><br>
    INACAP Valparaíso <br>
    Primavera 2020
</body>

</html>