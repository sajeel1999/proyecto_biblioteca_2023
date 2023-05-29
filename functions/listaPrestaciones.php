<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require("inicioBD.php");
    include_once("getUser.php");

    // session_start();

    // var_dump("hola");die;

    if(isset($_SESSION["userLogeado"])){
       

        $usuario = $_SESSION["userLogeado"]['id'];

        $prestaciones = $db->prepare("SELECT *  FROM registro_prestaciones as registro WHERE registro.id_user = :usuario AND (registro.estado = 'En curso' OR registro.estado = 'En espera') ");

        $prestaciones->bindParam(':usuario', $usuario);
        $prestaciones->execute();
        
        $prestaciones = $prestaciones->fetchAll(PDO::FETCH_ASSOC);

    }
?>