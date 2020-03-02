<?php

$enlace  = new mysqli('localhost','root','','restaurante');

if (!$enlace) {
     echo ('No pudo conectarse: ' . mysql_error());
    exit;
}

echo 'Conectado satisfactoriamente<br>';

$sql = 'CREATE TABLE Cliente (
  id_cli int NOT NULL AUTO_INCREMENT,
  ape_cli VARCHAR(100) ,
  nom_cli VARCHAR(100),
  dni_cli VARCHAR(10),
  tel_cli VARCHAR(10),
  dir_cliVARCHAR(100),
  email_cli VARCHAR(200),
  
  PRIMARY KEY  (id_cli)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8';


$consulta=$enlace->query($sql);


echo 'TABLA CLIENTE CREADA SATISFACTORIAMENTE<br>';

?>