<!-- Main -->
<main>
    <div class="contenedor">
        <div id="encabezado">
            <h2>Tus Mascotas</h2>
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
                    <th scope="col">Apellido1</th>
                    <th scope="col">Apellido2</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nombre_Usuario</th>
                    <th scope="col">Contraseña</th>

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