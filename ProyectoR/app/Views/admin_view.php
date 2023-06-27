<!-- Main -->
<main>
  <div id="contenedor">
    <div class="caja" id="caja1">
      <p id="b">Mascotas</p>
      <img src=<?php echo base_url('assets/img/gato.png') ?> alt="">
      <div>
        <Button class="boton" id="boton2"><a href="<?php echo base_url('index.php/Mascotas') ?>">Ver informacion</a></Button>
      </div>
    </div>
    <div class="caja" id="caja2">
      <p id="b">Veterinarios</p>
      <img src="<?php echo base_url('assets/img/med.png') ?>" alt="">
      <div>
        <Button class="boton" id="boton2"><a href="<?php echo base_url('index.php/Veterinarios') ?>">Ver informacion</a></Button>
      </div>
    </div>
    <div class="caja" id="caja3">
      <p id="b">Expendientes</p>
      <img src="<?php echo base_url('assets/img/exp.png') ?> " alt="">
      <div>
        <Button class="boton" id="boton2"><a href="<?php echo base_url('index.php/Crud_Expe') ?>">Ver informacion</a></Button>
      </div>
    </div>
  </div>
  <div class="BotonRegresar">
    <Button><a id="Boton "href="<?php echo base_url("index.php/Home") ?>">Regresar</a></Button>
  </div>
</main>
<!-- footer -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css') ?>">