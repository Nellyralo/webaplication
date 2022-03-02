<?php

$server = 'localhost'; 
$username = 'root';
$password = '';
$database = 'sistema_estudiantes_cobaep';//Nombre de la base datos 

//Conexion 
try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>

