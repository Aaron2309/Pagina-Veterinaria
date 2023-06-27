        <!-- Main -->


        <head>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
        </head>
        <main>
            <img class="img-fluid rounded-end" src=" <?php echo base_url('assets/img/Perro.jpg') ?>  " id="Perro">


            <div class="container-fluid centrar">
                <section class="row p-3" id="info">
                    <div class="col-md-6 col-lg-4 mb-2">
                        <h5 class="card-title">Instalaciones</h5>
                        <p class="card-text">Poseemos unas instalaciones de primer nivel y listas para cualquier tipo de emergencia.</p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-2">
                        <h5 class="card-title">Medicos</h5>
                        <p class="card-text">Personal medico capacitado y comprometidos con la empresa y el cuidado de sus mascotas </p>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-2">
                        <h5 class="card-title">servicios</h5>
                        <p class="card-text">Tenemos una gran variedad de servicios para poder atender todas las necesidades de las mascotas.</p>
                    </div>

                </section>
            </div>

            <p></p>




            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid rounded-end" src=" <?php echo base_url('assets/img/veterinaria.jpg') ?>  " id="imagen">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid rounded-end" src=" <?php echo base_url('assets/img/doc.jpg') ?>  " id="imagen">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid rounded-end" src=" <?php echo base_url('assets/img/beagle.jpg') ?>  " id="imagen">
                    </div>
                </div>

                <div class="container-fluid centrar">
                    <section class="row p-3" id="info">
                        <div class="col-md-6 col-lg-4 mb-2">
                            <h5 class="card-title">Francisco Lopez Quesada</h5>
                            <p class="card-text"> "Super recomendado, excelente servicio, todo es muy accesible con unos medicos geniales".</p>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-2">
                            <h5 class="card-title">Miguel Mora Fernandez</h5>
                            <p class="card-text">"La verdad muy contento con todo el servicio, simepre un trato muy especial para las mascotas, muy satisfecho."</p>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-2">
                            <h5 class="card-title">Maria Rojas Quiros</h5>
                            <p class="card-text">"Atencion, instalaciones de primer nivel, asi como los medicos que realizaron una gran labor, con mucha confiana para proximas consultas."</p>
                        </div>
                    </section>
                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="Botoncontacto">
                <a class="btn btn-primary" id="Contactenos" href="<?php echo base_url('index.php/contactenos') ?>">Contáctenos</a>
            </div>
        </main>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/index.css') ?>">