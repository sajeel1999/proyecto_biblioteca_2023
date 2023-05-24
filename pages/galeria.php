<?php
session_start();
include_once("../functions/getUser.php");
include "../functions/config.php";
include "../components/header.php";
include "../components/navbar.php";
?>


<!-- <div class="container-fluid  g--portada-galeria "> -->

<div class="accordion g--acordation" id="accordionExample">
  <div class="accordion-item container">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed text-white g--bg-color-darkBlue g--border-color-darkBlue" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Entrada
      </button>
    </h2>

    <div id="collapseOne" class="accordion-collapse collapse ">
      <div class="d-flex flex-row justify-content-end mt-3">
        <button class="btn-close" type="button" data-bs-dismiss="collapse" data-bs-target="#collapseOne" aria-expanded="false"></button>
      </div>
      <div class="card rounded-0 accordion-body d-flex flex-row justify-content-center">
        <img src="<?= IMGS_ROOT ?>galeria/entrada.jpg" alt="" style="width: 500px; margin-right: 15px;">
        <img src="<?= IMGS_ROOT ?>galeria/b-3.jpg" alt="" style="width: 500px">
      </div>
    </div>
  </div>
  <div class="accordion-item container">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed text-white g--bg-color-darkBlue g--border-color-darkBlue" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Nuestras instalaciones
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex flex-row justify-content-center">

        <img src="<?= IMGS_ROOT ?>galeria/b1.jpg" alt="" style="width: 500px; margin-right: 15px;">
        <img src="<?= IMGS_ROOT ?>galeria/b-2.jpg" alt="" style="width: 500px">

      </div>
    </div>
  </div>

  <div class="accordion-item container">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed text-white g--bg-color-darkBlue g--border-color-darkBlue" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
        Biblioteca Actual
      </button>
    </h2>
    <div id="collapse4" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex flex-row justify-content-center">

        <img src="<?= IMGS_ROOT ?>galeria/b7.jpg" alt="" style="width: 500px; margin-right: 15px;">
        <img src="<?= IMGS_ROOT ?>galeria/b8.jpg" alt="" style="width: 500px">

      </div>
    </div>
  </div>

  <div class="accordion-item container">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed text-white g--bg-color-darkBlue g--border-color-darkBlue" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
        Actividades
      </button>
    </h2>
    <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex flex-column">
        <div class="d-flex flex-row justify-content-center">
          <img src="<?= IMGS_ROOT ?>galeria/proyectoModificar.jpg" alt="" style="width: 500px; margin-right: 15px;">
          <img src="<?= IMGS_ROOT ?>galeria/modificar.jpg" alt="" style="width: 500px">
        </div>
        <div class="text-center mt-2">
          <iframe width="500" height="250" src="https://www.youtube.com/embed/r5D7QIF3FGE?autoplay=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="accordion-item container">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed text-white g--bg-color-darkBlue g--border-color-darkBlue" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
        Visitas
      </button>
    </h2>
    <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex flex-column">
        <div class="d-flex flex-row justify-content-center">
          <img src="<?= IMGS_ROOT ?>galeria/proyectoModificar.jpg" alt="" style="width: 500px; margin-right: 15px;">
          <img src="<?= IMGS_ROOT ?>galeria/modificar.jpg" alt="" style="width: 500px">
        </div>
        <div class="text-center mt-2">
          <iframe width="500" height="250" src="https://www.youtube.com/embed/r5D7QIF3FGE?autoplay=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item container">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed text-white g--bg-color-darkBlue g--border-color-darkBlue" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Proyecto renovación
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body d-flex flex-column">
        <div class="d-flex flex-row justify-content-center">
          <img src="<?= IMGS_ROOT ?>galeria/proyectoModificar.jpg" alt="" style="width: 500px; margin-right: 15px;">
          <img src="<?= IMGS_ROOT ?>galeria/modificar.jpg" alt="" style="width: 500px">
        </div>
        <div class="text-center mt-2">
          <iframe width="500" height="250" src="https://www.youtube.com/embed/r5D7QIF3FGE?autoplay=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- </div> -->


<div class="espacio_arriba sticky-bottom">
  <?php include  "../components/copyRight-footer.php"; ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>