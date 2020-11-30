<?php
    include 'sesion.php';
    include_once 'clases/Tarea.php';
    include_once 'clases/TareaService.php';

    $id = $_GET["id"];

    $ts = new TareaService();
    
    $tarea = $ts->getTarea($id);


    $c= $tarea->getCategoria();

?>



<?php include_once 'head.php'; ?>

<body style="padding:20px">
<a href="index.php"><h1>Tareas Pendientes</h1></a>
    <h2>Modificar Tarea</h2>
    <a href="nuevatarea.php">Nueva Tarea</a>
    <hr>
    <div style="width: 450px">
        <form action="editartarea2.php" method="POST">
            <div class="form-group">
                <label for="txtTitulo">Titulo</label>
                <input type="text" class="form-control" id="txtTitulo" name="txtTitulo" value="<?=$tarea->getTitulo(); ?>">
            </div>

            <div class="form-group">
                <label for="cboCategoria">Categoría</label>
                <select class="form-control" id="cboCategoria" name="cboCategoria">
                    <option <?php if($c == 'Seleccione') echo 'selected';  ?>>Seleccione</option>
                    <option <?php if($c == 'Personal') echo 'selected';  ?>>Personal</option>
                    <option <?php if($c == 'Trabajo') echo 'selected';  ?>>Trabajo</option>
                    <option <?php if($c == 'Otros') echo 'selected';  ?>>Otros</option>
                </select>
            </div>

            <div class="form-group">
                <label for="txtFechaFin">Fecha Término</label>
                <input type="date" class="form-control" id="txtFechaFin" name="txtFechaFin" value="<?php echo date('Y-m-d', strtotime($tarea->getFechaFin())); ?>">
            </div>

            <div class="form-group">
                <label for="txtDescripcion">Descripción</label>
                <textarea class="form-control" id="txtDescripcion" name="txtDescripcion"><?=$tarea->getDescripcion(); ?></textarea>
            </div>

            <input type="hidden" name="idTarea" value="<?=$tarea->getId(); ?>">

            <button type="submit" class="btn btn-primary">Guardar</button>

        </form>
    </div>
    <br>
    <strong>Desarrollo de Aplicaciones Web</strong><br>
    INACAP Valparaíso <br>
    Primavera 2020
</body>

</html>