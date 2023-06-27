<div id="encabezado_modif">
    <h2>Eliminar</h2>
</div>

<table class="w-40 m-auto mt-5" class="table">
    <tbody>
        <tr>
            <th scope="row">id:<?php echo $id ?></th>
        </tr>
        <tr>
            <th scope="row">Nombre:<?php echo $Nombre ?> </th>
        </tr>
        <tr>
            <th scope="row">PrimerApellido:<?php echo $Apellido_1 ?></th>
        </tr>
        <tr>
            <th scope="row">Apellido_2:<?php echo $Apellido_2 ?></th>
        </tr>
        <tr>
            <th scope="row">Telefono: <?php echo $Telefono ?></th>
        </tr>
        <tr>
            <th scope="row">Dirección: <?php echo $Direccion ?></th>
        </tr>
    </tbody>

</table>
<div id="pie_modif">
    <h2><Button><a href="<?php echo base_url("index.php/Veterinarios/eliminarVeterinario?id=$id") ?>">Borrar</a></Button></h2>

    <h2><Button><a href="<?php echo base_url("index.php/Veterinarios") ?>">Regresar</a></Button></h2>
</div>
<link rel="stylesheet" href="<?php echo base_url('assets/css/crud.css') ?>">