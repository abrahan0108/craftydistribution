<!-- construction-projects start -->
<section class="construction-projects" id="Projects">
    <div class="container inner">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <div class="construction-projects-header">
                        <h2>Nuestro proyectos</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 projects">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h4>Richs (Toluca)</h4>
                            <p class="projectDescription">Diseño, suministro e instalación de estructura metálica
                                con funciones de encapsulamiento de máquinas en el proceso, para
                                empresa de grado alimenticio ubicada en Toluca </p>
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#project-1">
                                Ver más...
                            </button>
                        </div>
                        <div class="carousel-item ">
                            <h4>Casas de interés social Oaxaca</h4>
                            <p class="projectDescription">Remodelaciones en casas de interés social en Oaxaca</p>
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#project-2">
                                Ver más...
                            </button>
                        </div>
                        <div class="carousel-item ">
                            <h4>Casas de interés social Zacatecas</h4>
                            <p class="projectDescription">Construcción de 22 casas de interés social en Zacatecas</p>
                            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#project-3">
                                Ver más...
                            </button>
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- construction-projects end -->


<!-- modals projects area  -->

<!-- Project 1 modal -->
<div class="modal fade" id="project-1" tab-index="-1" aria-labelledby="project-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="project-1-h">Estructura Metálica Richs Toluca
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="richsCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            $rDirectory = "images/projects/richs/";
                            $rImages = glob($rDirectory . "*.jpg");
                        ?>
                        <?php foreach($rImages as $image): ?>
                        <?php if($image == "images/projects/richs/1.jpg"):?>
                        <div class="carousel-item active">
                            <img src="<?= $image?>" class="d-block w-100" alt="...">
                        </div>
                        <?php else: ?>
                        <div class="carousel-item">
                            <img src="<?= $image?>" class="d-block w-100" alt="...">
                        </div>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#richsCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#richsCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <p>Diseño, suministro e instalación de estructura metálica con funciones de encapsulamiento de máquinas
                    en el proceso, para empresa de grado alimenticio ubicada en Toluca</p>
            </div>
        </div>
    </div>
</div>

<!-- Project 2 modal -->
<div class="modal fade" id="project-2" tab-index="-1" aria-labelledby="project-2" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="project-2-h">Casas de Interés Social Oaxaca
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="oaxacaCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                            $directory = "images/projects/oaxaca/";
                            $images = glob($directory . "*.jpg");
                        ?>
                        <?php foreach($images as $image):?>
                        <?php if($image == "images/projects/oaxaca/1.jpg"):?>
                        <div class="carousel-item active">
                            <img src="<?= $image?>" class="d-block w-100" alt="...">
                        </div>
                        <?php else:?>
                        <div class="carousel-item">
                            <img src="<?= $image?>" class="d-block w-100" alt="...">
                        </div>
                        <?php endif;?>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#oaxacaCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#oaxacaCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <p>Remodelaciones en casas de interés social en Oaxaca</p>
            </div>
        </div>
    </div>
</div>

<!-- Project 3 modal -->
<div class="modal fade" id="project-3" tab-index="-1" aria-labelledby="project-3" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="project-3-h">Casas de Interés Social Zacatecas
                </h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="zCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php 
                            $zDirectory = "images/projects/zacatecas/";
                            $zimages = glob($zDirectory . "*.jpg");
                        ?>
                        <?php foreach($zimages as $image):?>
                            <?php if($image == "images/projects/zacatecas/1.jpg"): ?>
                                <div class="carousel-item active">
                                    <img src="<?= $image ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php else: ?>
                                <div class="carousel-item">
                                    <img src="<?= $image ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <a class="carousel-control-prev" href="#zCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#zCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <p>Construcción de 22 casas de interés social en Zacatecas</p>
            </div>
        </div>
    </div>
</div>


<!-- team-leaders start -->
<section class="team-leaders">
    <div class="container inner">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h2>Nuestro Equipo</h2>
                    <p>Nuestro equipo....</p>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <!--Carousel Wrapper-->
                <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">


                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                        <li data-target="#multi-item-example" data-slide-to="1"></li>
                        <li data-target="#multi-item-example" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">
                            <div class="carousel-item-inner">
                                <div class="col-md-5">
                                    <figure>
                                        <img src="https://dummyimage.com/310x337/000000/fff" alt="carousel">
                                    </figure>
                                </div>
                                <div class="col-md-7">
                                    <h3>Ing. Alan Valenzuela</h3>
                                    <h5>Director General</h5>
                                    <p>Experiencia del director general...</p>
                                    <span>
                                        <a href="">
                                            <i class="fab fa-facebook-square"></i>
                                        </a>
                                        <a href="">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                        <a href="">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                        <a href="">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--/.First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">
                            <div class="carousel-item-inner">
                                <div class="col-md-5">
                                    <figure>
                                        <img src="https://dummyimage.com/310x337/000000/fff" alt="carousel">
                                    </figure>
                                </div>
                                <div class="col-md-7">
                                    <h3>Ing. Tomás Reyes</h3>
                                    <h5>Director de obra</h5>
                                    <p>Experiencia del director de obra.</p>
                                    <span>
                                        <a href="">
                                            <i class="fab fa-facebook-square"></i>
                                        </a>
                                        <a href="">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                        <a href="">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                        <a href="">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--/.Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">
                            <div class="carousel-item-inner">
                                <div class="col-md-5">
                                    <figure>
                                        <img src="https://dummyimage.com/310x337/000000/fff" alt="carousel">
                                    </figure>
                                </div>
                                <div class="col-md-7">
                                    <h3>Ing. Fernando Córdoba</h3>
                                    <h5>Gerente de nuevos proyectos</h5>
                                    <p>Experiencia del gerente de nuevos proyectos</p>
                                    <span>
                                        <a href="">
                                            <i class="fab fa-facebook-square"></i>
                                        </a>
                                        <a href="">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                        <a href="">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                        <a href="">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--/.Third slide-->

                    </div>
                    <!--/.Slides-->

                    <!--Controls-->
                    <div class="controls-bottom">
                        <a class="btn-left" href="#multi-item-example" data-slide="prev"><i
                                class="fas fa-chevron-left"></i></a>
                        <a class="btn-right" href="#multi-item-example" data-slide="next"><i
                                class="fas fa-chevron-right"></i></a>
                    </div>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
            </div>
        </div>
    </div>
</section>
<!-- team-leaders end -->