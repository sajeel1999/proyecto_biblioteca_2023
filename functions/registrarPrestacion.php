
<?php
//    session_destroy();
   session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require("inicioBD.php");
    
    include_once("getUser.php");


    if (isset($_SESSION["userLogeado"])) {
        if (isset($_POST["registroLibro"])) {
            $usuario = $_SESSION["userLogeado"]['id'];
            $fecha_prestacion = date('d/m/Y');
            $fecha_devolucion = date('d/m/Y', strtotime('+2 week'));
            $estado = "En curso";
            $id_libro = $_POST["registroLibro"];
            $id_user = $usuario;


            $registrar = $db->prepare("INSERT INTO registro_prestaciones (fecha_prestacion, fecha_devolucion, estado, id_libro, id_user) VALUES (:fecha_prestacion, :fecha_devolucion, :estado, :id_libro, :id_user)");

            try {
                $stmt = $registrar;
                $stmt->bindParam(':fecha_prestacion', $fecha_prestacion);
                $stmt->bindParam(':fecha_devolucion', $fecha_devolucion);
                $stmt->bindParam(':estado', $estado);
                $stmt->bindParam(':id_libro', $id_libro);
                $stmt->bindParam(':id_user', $id_user);
                $stmt->execute();

                $sql = $db->prepare ("UPDATE libros SET disponible = 0 WHERE libros.id = :idLibro");
                $sql->bindParam(':idLibro', $id_libro);
                $sql->execute();

                header("Location: http://localhost:8080/proyecto_biblioteca_2023/pages/libros.php");

            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

 
