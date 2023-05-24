<?php
session_start();
include "../functions/config.php";
include "../components/header.php";
include "../components/navbar.php";
?>

<div class="container-fluid mx-auto  d-flex flex-row mt-5 ">

    <div class="g--efecto-background g--efecto-mb p-2 d-flex flex-row g--heigh-50px">
        <h4 class="mb-2 fw-bold text-white ml-1 g--font-size-16px">Información</h4>
    </div>

    <i class="bi bi-caret-left-fill g--icon-flecha "></i>

</div>

<div class="container-fluid mt-4 d-flex flex-row container-mb">
    <div class="col-md-6 mx-auto">
        <h1 class="fw-bold">Bienvenidos a la Biblioteca Pública Municipal de L'Eliana</h1>
        <p>Somos una biblioteca que tiene como objetivo fomentar la cultura y el aprendizaje en nuestra comunidad. Ofrecemos una amplia variedad de recursos y servicios para que puedas disfrutar de la lectura y la investigación.</p>
        <p>En nuestra biblioteca podrás encontrar una gran colección de libros de diferentes géneros, desde novelas hasta libros de texto. Además, también disponemos de revistas y periódicos para estar al día de la actualidad. Para aquellos que prefieren los libros electrónicos, contamos con la plataforma Ebiblio, donde podrás acceder a una amplia selección de libros digitales.</p>
        <p>No solo ofrecemos recursos físicos, sino que también contamos con una plataforma digital llamada Efilm, donde puedes acceder a una variedad de películas, series y documentales.</p>
        <p>Además, nuestra biblioteca ofrece una serie de servicios, como el préstamo de libros, la asistencia para la investigación, el acceso a Internet y la ayuda para la lectura. También organizamos actividades para todas las edades, como clubes de lectura, talleres de escritura y cuentacuentos para niños.</p>
        <p>Visítanos y descubre todo lo que la biblioteca puede ofrecerte. Estamos abiertos de lunes a viernes de 9 a 14h y de 15 a 20h.</p>

        <p>Este proyecto ha sido desarrollado con el objetivo de crear una aplicación web para la Biblioteca Pública Municipal de L'Eliana. La aplicación está diseñada para ser una herramienta útil para la biblioteca y sus usuarios.</p>
        <p>La aplicación ofrece una serie de funciones, como la búsqueda de libros y la reserva de libros en línea. Los usuarios pueden realizar búsquedas por título, autor o tema para encontrar los libros que necesitan. También pueden reservar los libros en línea y recogerlos en la biblioteca cuando estén disponibles.
        </p>
        <p>Además, la aplicación cuenta con una sección de recomendaciones de libros basadas en las preferencias de los usuarios. La aplicación utiliza un algoritmo de recomendación que tiene en cuenta los libros que el usuario ha leído y calificado positivamente para sugerir otros libros que puedan gustarle.</p>
        <p>
            La aplicación también cuenta con una sección de noticias y eventos de la biblioteca, donde los usuarios pueden estar al día de todas las actividades que se organizan en la biblioteca.
        </p>
        <p>Por último, la aplicación ofrece la posibilidad de enviar consultas y sugerencias a la biblioteca a través de un formulario en línea.</p>
    </div>
    <div class="col-md-6 text-center mt-5 d-flex flex-column align-items-center">
        <iframe class="map-mb" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6151.489130393894!2d-0.5294878!3d39.5653668!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6059522b4fa6cf%3A0x62adc208de231c70!2sBiblioteca%20P%C3%BAblica%20Municipal%20de%20l&#39;Eliana%20(Provisional)!5e0!3m2!1ses!2ses!4v1681454628011!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <img class="map-mb" width="600" height="450" src="<?= IMGS_ROOT ?>biblioteca.jpg" alt="">
    </div>
</div>



<?php include  "../components/copyRight-footer.php"; ?>

