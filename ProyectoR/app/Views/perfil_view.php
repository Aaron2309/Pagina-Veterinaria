<header>
    <!-- Main -->
    <main>
        <div class="Cuadro">
            <h2>Registro Usuario</h2>
            <div class="Formulario">
                <form action="/register" method="POST">
                    <div class="mb-3 row">
                        <label for="Usuario" class="col-sm-5 col-form-label">Nombre usuario:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="Usuario" name="Usuario">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Nombre" class="col-sm-3 col-form-label">Nombre:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputPassword" id="Nombre" name="Nombre">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Apellido1" class="col-sm-5 col-form-label">Apellido1:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputPassword" id="Apellidos1" name="Apellidos1">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Apellido2" class="col-sm-5 col-form-label">Apellido2:</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="inputPassword" id="Apellido2" name="Apellido2">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="correo" class="col-sm-3 col-form-label">Correo electrónico:</label>
                        <div class="col-sm-5">
                            <input type="email" class="form-control" id="inputPassword" id="correo" name="correo">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Fecha" class="col-sm-5 col-form-label">Fecha nacimiento:</label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="Fecha" name="Fecha">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Telefono" class="col-sm-3 col-form-label">Teléfono:</label>
                        <div class="col-sm-5">
                            <input type="tel" class="form-control" id="Telefono" name="Telefono">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="formFoto" class="col-sm-5 col-form-label">Foto:</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <p></p>
                    <div class="BotonEnviar">
                        <input type="submit" value="Registrarse" class="btn btn-success">
                    </div>
                    <p></p>
                    <a style="color:white">O</a>
                    <p> </p>
                    <div class="BotonEnviar">
                        <a class="btn btn-primary" id="Boton" href="<?php echo base_url('index.php/inicio') ?>">Iniciar sesión</a>
                    </div>
                </form>

            </div>
        </div>


    </main>
    <!-- footer -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/perfil.css') ?>">