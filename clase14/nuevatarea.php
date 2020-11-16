<?php include_once 'head.php'; ?>

<body style="padding:20px">
    <h1>Tareas Pendientes</h1>
    <h2>Nueva Tarea</h2>
    <a href="nuevatarea.php">Nueva Tarea</a>
    <hr>
    <div style="width: 450px">
        <form action="nuevatarea2.php" method="POST">
            <div class="form-group">
                <label for="txtTitulo">Titulo</label>
                <input type="text" class="form-control" id="txtTitulo" name="txtTitulo">
            </div>

            <div class="form-group">
                <label for="cboCategoria">Categoría</label>
                <select class="form-control" id="cboCategoria" name="cboCategoria">
                    <option>Seleccione</option>
                    <option>Personal</option>
                    <option>Trabajo</option>
                    <option>Otros</option>
                </select>
            </div>

            <div class="form-group">
                <label for="txtFechaFin">Fecha Término</label>
                <input type="date" class="form-control" id="txtFechaFin" name="txtFechaFin">
            </div>

            <div class="form-group">
                <label for="txtDescripcion">Descripción</label>
                <textarea class="form-control" id="txtDescripcion" name="txtDescripcion"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>

        </form>
    </div>
    <br>
    <strong>Desarrollo de Aplicaciones Web</strong><br>
    INACAP Valparaíso <br>
    Primavera 2020
</body>

</html>