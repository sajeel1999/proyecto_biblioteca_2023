<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require("inicioBD.php");

    
    if (isset($_POST["idLibro"])) {
        $id_libro = $_POST["idLibro"];

        $sql = $db->prepare ("UPDATE libros SET disponible = 1 WHERE libros.id = :idLibro");
        $sql->bindParam(':idLibro', $id_libro);
        $sql->execute();

        $devolver = $db->prepare ("UPDATE registro_prestaciones SET estado = 'Finalizado' WHERE registro_prestaciones.id_libro = :idLibro AND registro_prestaciones.estado = 'En curso'");
        $devolver->bindParam(':idLibro', $id_libro);
        $devolver->execute();

        header("Location: http://localhost:8080/proyecto_biblioteca_2023/pages/libros.php");
    }

?>


<!-- var_dump($_POST["idLibro"]); -->