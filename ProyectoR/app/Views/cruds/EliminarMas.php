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
            <th scope="row">Edad:<?php echo $Edad ?></th>
        </tr>
        <tr>
            <th scope="row">Raza:<?php echo $Raza ?></th>
        </tr>
        <tr>
            <th scope="row">Dueño: <?php echo $Dueño ?></th>
        </tr>
        <tr>

        </tr>
    </tbody>

</table>

<div id="pie_modif">
    <h2><Button><a href="<?php echo base_url("index.php//Mascotas/eliminarMascota?id=$id") ?>">Borrar</a></Button></h2>

    <h2><Button><a href="<?php echo base_url("index.php/Mascotas") ?>">Regresar</a></Button></h2>
</div>

<link rel="stylesheet" href="<?php echo base_url('assets/css/crud.css') ?>">