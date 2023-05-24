<?php

include "../functions/config.php";
include "../components/header.php";
include "../components/navbar.php";
?>


<div class="container-fluid d-flex flex-column justify-content-center align-items-center main-content mt-5 mb-5">
    <div class="container d-flex flex-row text-center mt-5 mx-5 mb-3">
        <div class="col-md-6 text-center d-none d-sm-block py-5">
            <img class="image-animated " src="<?= IMGS_ROOT ?>r.webp" alt="">
        </div>
        <div class="col-md-6 d-flex flex-column mx-auto g--btn-width-400 border-primary border-1">
            <p class="g--page-title">Comienza tú Gestión</p>
            <p class="g--page-title">De libros online</p>
            <div class="form-container mt-4">
                <form>
                    <div class="form-group text-left mt-2">
                        <input type="text" class="form-control mb-2 g--btn-normal-secundary g--btn-normal-secundary--no-hover" id="nombre" placeholder="Introduzca su nombre">
                    </div>
                    <div class="form-group text-left mt-2">
                        <input type="text" class="form-control mb-2 g--btn-normal-secundary g--btn-normal-secundary--no-hover" id="nombre" placeholder="Introduzca su apellido">
                    </div>
                    <div class="form-group text-left mt-2">
                        <input type="email" class="form-control mb-2 g--btn-normal-secundary g--btn-normal-secundary--no-hover" id="correo" placeholder="Introduzca su correo electrónico">
                    </div>
                    <div class="form-group text-left">
                        <input type="password" class="form-control mb-3 g--btn-normal-secundary g--btn-normal-secundary--no-hover" id="password" placeholder="Introduzca su contraseña">
                    </div>
                </form>
                <div class="button-group d-flex flex-column mt-1 justify-content-center ">
                    <button type="submit" class="btn-sm py-2 g--btn-normal-primary">Registrar</button>
                </div>

                <div class="button-group d-flex flex-column mt-1 justify-content-center ">
                    <a class="btn-sm py-2 mt-1 text-decoration-none g--btn-normal-secundary" href="<?= SITE_ROOT ?>pages/login.php">ya tienes una cuenta <b> pincha aquí</b></a>
                </div>
            </div>
        </div>
    </div>
</div>






<div class="espacio_arriba">
    
</div>

<?php include "../components/copyRight-footer.php"; ?>