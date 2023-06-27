<?php include "shared/encabezado.php" ?>

<!-- Main -->
<main>
    <form class="row g-3 " id="formulario">
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="validationCustom01" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="validationCustom02" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Correo</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="validationCustomUsername" class="form-label">Comentarios o preguntas</label>
            <div class="input-group has-validation">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn" type="submit">Enviar</button>
        </div>
    </form>
</main>

<!-- footer -->
<link rel="stylesheet" href="css/contactenos.css">

<?php include "shared/pie.php" ?>