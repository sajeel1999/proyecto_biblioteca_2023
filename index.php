<?php
session_start();
include "functions/config.php";
include "components/header.php";
include "components/navbar.php";
?>

<?php
include "functions/getUser.php";


?>

<div class="container-fluid d-flex flex-column justify-content-center align-items-center main-content mt-5 mb-5">
    <div class="container d-flex flex-row text-center mt-5 mx-5 mb-3">
        <div class="col-md-6 text-center d-none d-sm-block">
            <img class="image-animated" src="<?= IMGS_ROOT ?>mainPage.gif" alt="">
        </div>
        <div class="col-md-6 d-flex flex-column mx-auto g--btn-width-400 border-primary border-1">
            <p class="g--page-title">Gestiona tus</p>
            <p class="g--page-title">Libros online</p>
            <div class="form-container mt-2">
                <form method="post">
                    <?php if (isset($errorMsg)) : ?>
                        <div class="alert alert-danger"><?= $errorMsg ?></div>
                    <?php endif; ?>
                    <div class="form-group text-left mt-2 ">
                        <img class="user-icon img-fluid g--icon-border" src="<?= IMGS_ROOT ?>user-icon.webp" alt="">
                    </div>
                    <div class="form-group text-left mt-4">
                        <input type="email" id= "email" name="email" class="form-control mb-2 g--btn-normal-secundary g--btn-normal-secundary--no-hover" id="correo" placeholder="Introduzca su correo electrónico">
                    </div>
                    <div class="form-group text-left">
                        <input type="password" id = "pssword" name="pssword" class="form-control mb-2 g--btn-normal-secundary g--btn-normal-secundary--no-hover" id="password" placeholder="Introduzca su contraseña">
                    </div>

                    <div class="button-group d-flex flex-column mt-2 justify-content-center ">
                        <button type="submit" class="btn-sm py-2 g--btn-normal-secundary">Iniciar sesión</button>
                        <a href="mailto:biblioteca.gbm@gmail.com" class="btn-sm py-2 mt-2 g--btn-normal-primary">Registrarse</a>
                        <a href="mailto:biblioteca.gbm@gmail.com" class="btn-sm py-2 mt-2 g--btn-danger-secundary">¿Olvidó su contraseña?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>






<div class="espacio_arriba">

</div>

<?php include "components/copyRight-footer.php"; ?>