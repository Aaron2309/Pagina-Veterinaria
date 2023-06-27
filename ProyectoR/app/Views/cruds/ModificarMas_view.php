<div id="encabezado_modif">
    <h2>Informacion de tu mascota</h2>
</div>
<?php echo form_open("/Mascotas/$accion", array("class" => "w-40 m-auto", "enctype" => "multipart/form-data")); ?>

<h3 class="titulo">Id </h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $id, "name" => "id", "id" => "Info", "class" => "form-control", "placeholder" => "id"));
echo '</div>'; ?>

<h3 class="titulo">Nombre</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Nombre, "name" => "Nombre", "id" => "Info", "class" => "form-control", "placeholder" => "Nombre"));
echo '</div>'; ?>

<h3 class="titulo">Edad</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Edad, "name" => "Edad", "id" => "Info", "class" => "form-control", "placeholder" => "Edad"));
echo '</div>'; ?>

<h3 class="titulo">Raza</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Raza, "name" => "Raza", "id" => "Info", "class" => "form-control", "placeholder" => "Raza"));
echo '</div>'; ?>

<h3 class="titulo">Dueño</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Dueño, "name" => "Dueño", "id" => "Info", "class" => "form-control", "placeholder" => "Dueño"));
echo '</div>'; ?>

<h3 class="titulo">Estado</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Estado, "name" => "Estado", "id" => "Info", "class" => "form-control", "placeholder" => "Estado"));
echo '</div>';

echo '<div class="form-floating mb-3">';
echo form_submit(array("class" => "btn btn-outline-dark", "value" => "Guardar"));
echo '</div>';


form_close(); ?>
<div id="pie_modif">
    <h2><Button><a href="<?php echo base_url("index.php/Mascotas") ?>">Regresar</a></Button></h2>
</div>

<link rel="stylesheet" href="<?php echo base_url('assets/css/crud.css') ?>">