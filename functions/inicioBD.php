<?php
	global $db;
	//Local
	$dbDNS = 'mysql:host=localhost; dbname=backend_biblioteca_2023; port=3311;charset=utf8';
	$dbUser = 'root';
	$dbPassword = 'root';

	
	try {
		$db = new PDO($dbDNS, $dbUser, $dbPassword);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  } catch (PDOException $e) {
		echo 'Error 500 al conectarse a la base de datos: ' . $e->getMessage();
		exit;
	  }


?>