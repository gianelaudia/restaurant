<?php


 $enlace = new mysqli('localhost','root','','Restaurante');

if (!$enlace) {
     echo ('No pudo conectarse: ' . mysql_error());
    exit;
}


$sql = 'DROP DATABASE Restaurante';

$consulta=$enlace->query($sql);


echo 'BASE DE DATOS ELIMINADA <br>';

?>