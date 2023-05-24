<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require("inicioBD.php");

    $libros = $db->prepare("SELECT book.id, book.name, book.resumen, book.photo, book.disponible, book.anyo_publication, book.id_autor, writer.name_author   
    FROM libros as book
    INNER JOIN autores as writer ON book.id_autor = writer.id
    GROUP BY book.id");
    $libros->execute();
    $libros = $libros->fetchAll(PDO::FETCH_ASSOC);

    
?>