<!-- Main -->
<main>
    <div class="logeo">
        <div class="mb-3">
            <img src=<?php echo base_url('assets/img/san-bernardo 1.png') ?> alt="Imagen" id="Imagen">
            <p></p>
            <div class="mb-3">
                <form method="post" action="">
                    <label for="Usuario" class="form-label">Usuario</label>
                    <input type="text" name="Usuario" id="Usuario" class="form-control">
                    <div id="emailHelp" class="form-text">
                    </div>
            </div>
            <div class="mb-3">
                <label for="Contraseña" class="form-label">Contraseña</label>
                <input type="password" name="Contraseña" id="Contraseña" class="form-control">
            </div>
            <div class="BotonEntrar">
                <input id="Boton" class="btn" type="submit"></input>
            </div>
            </form>
            <?php
            if ($_POST) {
                $Usuario = $_POST["Usuario"];
                $Contraseña = $_POST["Contraseña"];
                if (strcasecmp($Usuario, "admin") == 0 && strcmp($Contraseña, "Admin") == 0) {
                    //echo "<h1 class='titulo'>Inicio Exitoso</h1>";
                    header('Location:admin'); 
                    exit;
                } else {
                    echo "<h1 class='titulo'>Contraseña incorrecta</h1>";
                }
            }
            ?>

        </div>

</main>
<!-- footer -->
<link rel="stylesheet" href="<?php echo base_url('assets/css/inicio_sesion.css') ?>">