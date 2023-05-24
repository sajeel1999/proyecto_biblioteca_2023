<?php
include_once("../functions/getUser.php");
include_once("../functions/registrarPrestacion.php");
include_once("../functions/devolver.php");
include_once("../functions/getPrestaciones.php");
include "../functions/config.php";
include "../components/header.php";
include "../components/navbar.php";


?>
<div class="container-fluid mx-auto  d-flex flex-row mt-5 ">
    <div class="g--efecto-background g--efecto-mb p-2 d-flex flex-row g--heigh-50px">
        <h4 class="mb-2 fw-bold text-white ml-1 g--font-size-16px">Libros</h4>
    </div>
    <i class="bi bi-caret-left-fill g--icon-flecha "></i>
</div>
<?php
include_once("../functions/getLibros.php");


// var_dump($libros); die;
?>
<div class="container-fluid mx-auto d-flex flex-row flex-wrap mt-2 justify-content-center g--contenedor-panel">

    <?php
    for ($posLibro = 0; $posLibro < count($libros); $posLibro++) {
    ?>
        <div class="w-auto c-card text-center mt-4" data-bs-toggle="modal" data-bs-target="#<?php echo $libros[$posLibro]['id'] ?>">
            <img class="c-card__img" src="<?php echo $libros[$posLibro]['photo']; ?>" alt="sin imagen">
            <p class="c-card__title mt-3"><?php echo $libros[$posLibro]['name']; ?></p>
            <!-- <p class="c-card__text ">leer resumen</p> -->
        </div>

        <div class="modal fade g--background-color-orange-tranparent" id="<?php echo $libros[$posLibro]['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo $libros[$posLibro]['name']; ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>

                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?php echo $libros[$posLibro]['photo']; ?>" alt="<?php echo $libros[$posLibro]['name']; ?>" class="w-100">
                            </div>
                            <div class="col-8">
                                <textarea disabled class="form-control g--height-30vh" autofocus><?php echo $libros[$posLibro]['resumen']; ?></textarea>
                                <p class="g--fs-20 fw-bold text-center"><?php echo $libros[$posLibro]['name_author']; ?></p>
                                <p class="g--fs-20 fw-bold">Publicada en el año: <?php echo $libros[$posLibro]['anyo_publication']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <?php
                        
                            
                        if (!isset($_SESSION["userLogeado"])) {
                        ?>

                            
                            <a class="text-decoration-none btn btn-primary " href="<?= SITE_ROOT ?>index.php" class="mail">login</a>
                            <?php

                        } else {
                            $habilitado = false; 
                            if ($libros[$posLibro]['disponible'] == 0) {
                                for ($posRegistro = 0; $posRegistro < count($prestaciones); $posRegistro++) {
                                    if ($prestaciones[$posRegistro]['id_libro'] == $libros[$posLibro]['id'] && $habilitado == false) {
                                        $habilitado = true;
                            ?>
                                <form action="../functions/devolver.php" method="post">
                                    <input hidden type="number" name="idLibro" value="<?php echo $libros[$posLibro]['id'] ?>">
                                    <div class="btn-group">
                                        <button class="btn btn-primary" type="submit">   
                                            Devolver
                                        </button>
                                    </div>
                                </form>
                                <?php


                                    }
                                }
                            } else {
                                ?>
                                <form action="../functions/registrarPrestacion.php" method="post">
                                    <input hidden type="number" name="registroLibro" value="<?php echo $libros[$posLibro]['id'] ?>">
                                    <div class="btn-group">
                                        <button class="btn btn-primary" type="submit">
                                            
                                            Prestar
                                        </button>
                                    </div>
                                </form>
                                <!-- <a class="text-decoration-none btn btn-primary " href="mailto:s.sahmed21fpmislata@gmail.com" class="mail">Prestar</a>  -->
                        <?php
                            }
                        }
                        ?>
                        <button type="button" class="btn btn-primary " data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php include  "../components/copyRight-footer.php"; ?>