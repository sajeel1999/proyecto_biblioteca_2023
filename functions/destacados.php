<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require("inicioBD.php");

    // Obtener los libros y contar los préstamos
    $librosDestacados = $db->prepare("SELECT book.id, book.name, book.resumen, book.photo, book.disponible, book.anyo_publication, book.id_autor, writer.name_author,
        COUNT(registro.id) AS num_prestamos   
        FROM libros AS book
        INNER JOIN autores AS writer ON book.id_autor = writer.id
        LEFT JOIN registro_prestaciones AS registro ON book.id = registro.id_libro
        GROUP BY book.id
        ORDER BY num_prestamos DESC
        LIMIT 14");
    $librosDestacados->execute();
    $librosDestacados = $librosDestacados->fetchAll(PDO::FETCH_ASSOC);

    
?>