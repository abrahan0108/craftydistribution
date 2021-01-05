<!DOCTYPE html>
<html lang="en">

<head>
    <!--meta tags-->
    <meta charset="UTF-8">
    <meta name="description" content=" Construction Business Website">
    <meta name="keywords" content="HTML,CSS,Bootstrap,JavaScript,Jquery">
    <meta name="author" content="Template.net">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crafty Distribution</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <!-- Script for fontawesome -->
    <script defer src="js/all.js"></script>
</head>

<body>
    <!-- header start -->
    <header>
        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="side-bar"></div>
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <span> - </span>
                        <li class="nav-item">
                            <a class="nav-link" href="#Services">servicios</a>
                        </li>
                        <span> - </span>
                        <li class="nav-item">
                            <a class="nav-link" href="#Projects">Proyectos</a>
                        </li>
                        <span> - </span>
                        <li class="nav-item">
                            <a class="nav-link" href="#customers">clientes</a>
                        </li>
                        <span> - </span>
                        <li class="nav-item">
                            <a class="nav-link" href="#Contact">contactanos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- header end -->

    <!-- banner start -->
    <section class="banner">
        <div class="gradient"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 col-md-12">
                    <div class="banner-inner">
                        <h1>Contrucción, remodelación y mantenimiento.</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- features start -->
    <section class="features">
        <div class="container">
            <div class="row nogap">
                <div class="col-lg-4 col-12 col">
                    <div class="box">
                        <img src="images/feature-01.png" alt="feature">
                        <h3>Experiencia</h3>
                        <p>Contamos con experiencia y permanencia en el mercado mexicano, sirviendo a la empresa tanto
                            publica como privada.</p>
                        <button type="button" class="btn btn-features" data-toggle="modal"
                            data-target="#modalExperience">Ver mas...</button>
                    </div>
                </div>

                <div class="col-lg-4 col-12 col">
                    <div class="box">
                        <!-- <img src="images/feature-02.png" alt="feature"> -->
                        <img class="fa fa-tachometer-alt fa-2x">
                        <h3>Velocidad</h3>
                        <p>Velocidad de respuesta técnica, comercial, operacional inigualable para darle la mejor
                            atención al cliente.
                            La velocidad de Crafty Distribution es lo mas cercano a lo instantáneo.</p>
                        <button type="button" class="btn btn-features" data-toggle="modal" data-target="#modalSpeed">Ver
                            mas...</button>
                    </div>
                </div>

                <div class="col-lg-4 col-12 col">
                    <div class="box">
                        <i class="fa fa-globe-americas fa-2x"></i>
                        <h3>Orgullosamente Mexicana</h3>
                        <p>Crafty Distribution, opera en todo el mercado
                            nacional con infraestructura propia y un
                            equipo de profesionales capacitados y
                            especializados en las diferentes ramas
                            que nuestros servicios abarcan.</p>
                        <button type="button" class="btn btn-features" data-toggle="modal"
                            data-target="#modalNationality">Ver mas...</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features end -->

    <!-- Modal sections -->

    <!-- Modal for experience -->
    <div class="modal fade" id="modalExperience" tabindex="-1" aria-labelleby="modalExperience" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="experienceModalTitle">Experiencia</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Somos una empresa dedicada a la construcción,
                    remodelación y mantenimiento. Así mismo,
                    otorgamos soluciones integrales que garanticen
                    seguridad y confort en su hogar o empresa.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    <!-- <button type="button" class="btn btn-primary"></button>  -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for responce speed-->
    <div class="modal fade" id="modalSpeed" tabindex="-1" aria-labelleby="modalSpeed" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="speedModalTitle">Velocidad de respuesta</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Crafty Distribution garantiza equipos y
                    herramientas de trabajo en optimas condiciones, y
                    también, personal capacitado para la realización y
                    ejecución de nuestros servicios.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    <!-- <button type="button" class="btn btn-primary"></button>  -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for nationality -->
    <div class="modal fade" id="modalNationality" tabindex="-1" aria-labelleby="modalNationality" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nationalityModalTitle">Orgullosamente Mexicana</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Todo el equipo Crafty cuenta con experiencia
                    laboral en planeación objetiva, análisis económico
                    y en aplicación de logística con el propósito de
                    apegarse en todo momento al presupuesto
                    contemplado de la inversión.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                    <!-- <button type="button" class="btn btn-primary"></button>  -->
                </div>
            </div>
        </div>
    </div>