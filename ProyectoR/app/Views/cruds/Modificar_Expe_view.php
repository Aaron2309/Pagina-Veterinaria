<div id="encabezado_modif">
    <h2>Informacion de expediente</h2>
</div>
<?php echo form_open("/Crud_Expe/$accion", array("class" => "w-40 m-auto", "enctype" => "multipart/form-data")); ?>

<h3 class="titulo">Id </h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $id, "name" => "id", "id" => "Info", "class" => "form-control", "placeholder" => "id"));
echo '</div>'; ?>

<h3 class="titulo">Mascota</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Mascota, "name" => "Mascota", "id" => "Info", "class" => "form-control", "placeholder" => "Mascota"));
echo '</div>'; ?>

<h3 class="titulo">Veterinario</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Veterinario, "name" => "Veterinario", "id" => "Info", "class" => "form-control", "placeholder" => "Veterinario"));
echo '</div>'; ?>

<h3 class="titulo">Fecha</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Fecha, "name" => "Fecha", "id" => "Info", "class" => "form-control", "placeholder" => "Fecha"));
echo '</div>'; ?>

<h3 class="titulo">Diagnostico</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Diagnostico, "name" => "Diagnostico", "id" => "Info", "class" => "form-control", "placeholder" => "Diagnostico"));
echo '</div>'; ?>

<h3 class="titulo">Tratamiento</h3>
<?php echo '<div class="form-floating mb-3">';
echo form_input(array("value" => $Tratamiento, "name" => "Tratamiento", "id" => "Info", "class" => "form-control", "placeholder" => "Tratamiento"));
echo '</div>';

echo '<div class="form-floating mb-3">';
echo form_submit(array("class" => "btn btn-outline-dark", "value" => "Guardar", "id" => "Boton"));
echo '</div>';

form_close(); ?>
<div id="pie_modif">
    <h2><Button><a  href="<?php echo base_url("index.php/Crud_Expe") ?>">Regresar</a></Button></h2>
</div>

<link rel="stylesheet" href="<?php echo base_url('assets/css/crud.css') ?>">