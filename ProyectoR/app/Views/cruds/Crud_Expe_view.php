<!-- Main -->
<main>
    <div class="contenedor">
        <div id="encabezado">
            <h2>Expediente</h2>
            <Button><a href="<?php echo base_url("index.php/Crud_Expe/nuevo") ?>">Agregar</a></Button>
        </div>
        <?php if (isset($msg)) { ?>
            <div class="alert alert-primary" role="alert">
                <?php echo $msg ?>
            </div>
        <?php } ?>
        <table>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre Mascota</th>
                    <th scope="col">Veterianario</th>
                    <th scope="col">Fecha Consulta</th>
                    <th scope="col">Diagonostico</th>
                    <th scope="col">Tratamiento</th>
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