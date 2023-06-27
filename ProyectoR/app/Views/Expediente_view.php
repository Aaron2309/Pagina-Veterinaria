<main>

    <body>
        <h1>Tus mascostas</h1>
        <div id="padre">
            <div id="hijo">
                <div id="texto">
                    <h3 class="item">Elige a tu mascota</h3>
                    <select name="mascota" id="mascota" class="item">
                        <option value="">Max</option>
                        <option value="">Miguel</option>
                        <option value="">Pepe</option>
                    </select>
                    <p class="item">Nombre mascota: </p>
                    <p class="item">Raza: </p>
                </div>

                <div id="imagen">
                    <img class="img-fluid rounded-end" src=" <?php echo base_url('assets/img/perroF.jpg') ?>  " id="perro1">
                </div>


                <div id="button">
                    <a href="#miModal">Ver Informacion</a>
                </div>
            </div>
        </div>

        <div id="miModal" class="modal">
            <div class="modal-contenido">
                <header>Informacion de tu mascota</header>
                <a href="#">X</a>
                <div>
                    <h3>Id</h3>
                    <p>001</p>
                    <h3>Nombre mascota:</h3>
                    <p>Max</p>
                    <h3>veterinario:</h3>
                    <p>Mario Lopez</p>
                    <h2>Dianostico:</h2>
                    <p>-----------------</p>
                    <h3>Tratmiento: </h3>
                    <p>-----------------</p>
                    <img class="img-fluid rounded-end" src=" <?php echo base_url('assets/img/perroF.jpg') ?>  " id="perro2">
                </div>
            </div>
        </div>
    </body>
</main>
<link rel="stylesheet" href="<?php echo base_url('assets/css/expediente.css') ?>">

</html>