<?php
session_start();
include_once("../functions/getUser.php");
include "../functions/config.php";
include "../components/header.php";
include "../components/navbar.php";
?>


<div class="container-fluid mx-auto  d-flex flex-row mt-5 ">

    <div class="g--efecto-background g--efecto-mb p-2 d-flex flex-row g--heigh-50px">
        <h4 class="mb-2 fw-bold text-white ml-1 g--font-size-16px">Contacto</h4>
    </div>

    <i class="bi bi-caret-left-fill g--icon-flecha "></i>

    <!-- <div class="gradient-line"></div> -->

</div>


<div class="container mt-5">
    <h2>CONTACTO GBM</h2>
        <form>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" class="form-control" id="correo" required>
            </div>
            <div class="form-group">
                <label for="asunto">Asunto:</label>
                <input type="text" class="form-control" id="asunto" required>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea class="form-control" id="mensaje" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <p class="text-danger fw-bold">Alerta el mensaje se va a ir al borrador</p>
</div>


<?php include  "../components/copyRight-footer.php"; ?>