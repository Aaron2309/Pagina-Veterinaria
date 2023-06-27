<html lang="es">

<head>

    <meta name="author" content="Franklin Mena Jiménez">
    <!--Diferentes por cada página-->
    <meta name="keywords" content="Veterinaria">
    <meta name="description" content="Pagina principal de Veterinaria">
    <!---->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <body  style="background-color:#FBFAD3;">
        </body>
        <nav class="navbar navbar-expand-lg " style="background-color: #C6E377;">
            <div class="container-fluid ">
                <FOnt FACE=""><a class="navbar-brand" href="<?php echo base_url('index.php/Home') ?>" style="font-size: xx-large" id="Nombre">
                        <img width="70px" height="70px" src="<?php echo base_url('assets/img/vettt.png') ?>" alt="" srcset=""></a></FONT>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/servicio') ?>" style="color:black;">Servicios</a>


                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/mapa') ?>" style="color:black;">Mapa</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/acerca') ?>" style="color:black;">Acerca de nosotros</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('index.php/perfil') ?>" style="color:black;">Perfil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header>