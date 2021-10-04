<?php
$host='localhost';
$bd='sitio-php';
$user='root';
$pass='';



try {
   $conexion = new PDO("mysql:host=$host;dbname=$bd",$user,$pass); 
} catch (PDOException $e) {
    die('error: '.$e->getMessage());
}

?>