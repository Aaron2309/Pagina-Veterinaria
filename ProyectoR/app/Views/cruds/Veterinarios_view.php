<!-- Main -->
<main>
    <div class="contenedor">
        <div id="encabezado">
            <h2>Veterinario</h2>
            <Button><a href="<?php echo base_url("index.php/Veterinarios/nuevo") ?>">Agregar</a></Button>
        </div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Cedula</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">PrimerApellido</th>
                    <th scope="col">Apellido2</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
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