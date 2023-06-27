<div id="encabezado_modif">
    <h2>Eliminar</h2>
</div>
        <table class="w-40 m-auto mt-5" class="table">
            <tbody>
                <tr>
                    <th scope="row">id:<?php echo $id ?></th>
                </tr>
                <tr>
                    <th scope="row">NombMascotare:<?php echo $Mascota ?> </th>
                </tr>
                <tr>
                    <th scope="row">Veterinario:<?php echo $Veterinario ?></th>
                </tr>
                <tr>
                    <th scope="row">Fecha:<?php echo $Fecha ?></th>
                </tr>
                <tr>
                    <th scope="row">Diagnostico: <?php echo $Diagnostico ?></th>
                </tr>
                <tr>
                    <th scope="row">Tratamiento: <?php echo $Tratamiento ?></th>
                </tr>
            </tbody>

        </table>

        <div id="pie_modif">
    <h2><Button><a href="<?php echo base_url("index.php//Crud_Expe/eliminarExpediente?id=$id") ?>">Borrar</a></Button></h2>

    <h2><Button><a href="<?php echo base_url("index.php/Crud_Expe") ?>">Regresar</a></Button></h2>
</div>
    </div>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/crud.css') ?>">
