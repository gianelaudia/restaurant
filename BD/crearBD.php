<?php

/**
 $enlace = new mysqli('localhost','root','11111111');

if (!$enlace) {
     echo ('No pudo conectarse: ' . mysql_error());
    exit;
}


$sql = 'CREATE DATABASE Restaurante';

$consulta=$enlace->query($sql);


echo 'BASE DE DATOS CREADA SASTIFACTORIAMENTE <br>';
*/

function conectar(){
 /*
 $servername = "sql309.eshost.com.ar";
  $username = "eshos_22013449";
  $password = "Sofia16";
  $dbname = "eshos_22013449_ferreteria1";
 */
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ferreteria";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }  else {
    return $conn;
  }
  
}  //fin de la función

function ejecutar($sql,$conn) {
  if ($conn->query($sql) === TRUE) {
        echo "Sql statement executed successfully";
    } else {
        echo "Error when executing sql statement" . $conn->error;
    }
} // fin de la función

?>