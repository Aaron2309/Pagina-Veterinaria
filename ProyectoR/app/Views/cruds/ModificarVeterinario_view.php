<div id=modif>
<div id="encabezado_modif">
    <h2>Informacion de Veterinarios</h2>
</div>
<?php echo form_open("/Veterinarios/$accion", array("class" => "w-40 m-auto", "enctype" => "multipart/form-data")); ?>

<h3 class="titulo">Id </h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $id, "name" => "id", "id" => "Info", "class" => "form-control", "placeholder" => "id"));
echo '</div>'; ?>

<h3 class="titulo">Nombre</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Nombre, "name" => "Nombre", "id" => "Info", "class" => "form-control", "placeholder" => "Nombre"));
echo '</div>'; ?>

<h3 class="titulo">Apellido_1</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Apellido_1, "name" => "Apellido_1", "Info" => "Apellido_1", "class" => "form-control", "placeholder" => "Apellido_1"));
echo '</div>'; ?>

<h3 class="titulo">Apellido_2</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Apellido_2, "name" => "Apellido_2", "id" => "Info", "class" => "form-control", "placeholder" => "Apellido_2"));
echo '</div>'; ?>

<h3 class="titulo">Telefono</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Telefono, "name" => "Telefono", "id" => "Info", "class" => "form-control", "placeholder" => "Telefono"));
echo '</div>'; ?>

<h3 class="titulo">Direccion</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Direccion, "name" => "Direccion", "id" => "Info", "class" => "form-control", "placeholder" => "Direccion"));
echo '</div>';


echo '<div class="form-floating mb-3">';
echo form_submit(array("class" => "btn btn-outline-dark", "value" => "Guardar"));
echo '</div>';

form_close(); ?>
<div id="pie_modif">
    <h2><Button><a href="<?php echo base_url("index.php/Veterinarios") ?>">Regresar</a></Button></h2>
</div>
</div>
<link rel="stylesheet" href="<?php echo base_url('assets/css/crud.css') ?>">