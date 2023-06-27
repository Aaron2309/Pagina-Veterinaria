<!-- Main -->
<main>
    <div class="contenedor">
        <div id="encabezado">
            <h2>Mascotas</h2>
            <Button><a href="<?php echo base_url("index.php/Mascotas/nuevo") ?>">Agregar</a></Button>
        </div>
        <?php if (isset($msg)) { ?>
            <div class="alert alert-primary" role="alert">
                <?php echo $msg ?>
            </div>
        <?php } ?>
        <table>
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Raza</th>
                    <th scope="col">Dueño</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody id="mytable">
                <?php echo $filas ?>

            </tbody>
        </table>
        <div id="pie">
            <Button><a href="<?php echo base_url("index.php/admin") ?>">Regresar</a></Button>
        </div>
    </div>

</main>
<!-- footer -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/crud.css') ?>">