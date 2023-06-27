
<!-- Main -->
<main>
<form class="row g-3 " id="formulario" action="https://formsubmit.co/aaronbrenes0923@gmail.com" method="POST">
        <div class="col-md-4">
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="Apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="Apellidos" name="Apellidos" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="Correo" class="form-label">Correo</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="Correo" name="correo" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="Comentarios" class="form-label">Comentarios o preguntas</label>
            <div class="input-group has-validation">
                <textarea name="comentarios" class="form-control" id="Comentarios" rows="4" required></textarea>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="BotonEnviar">
            <input type="submit" value="Enviar">
        </div>
        
    </form>
</main>

<link rel="stylesheet" href="<?php echo base_url('assets/css/contactenos.css') ?>">

