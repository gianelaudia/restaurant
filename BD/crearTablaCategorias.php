<?php

$enlace  = new mysqli('localhost','root','','restaurante');

if (!$enlace) {
     echo ('No pudo conectarse: ' . mysql_error());
    exit;
}

echo 'Conectado satisfactoriamente<br>';

$sql = 'CREATE TABLE categorias (
  idcategoria int NOT NULL,
  nombrecategoria VARCHAR(50),
  
  
  PRIMARY KEY  (idcategoria)

  ) ENGINE=InnoDB DEFAULT CHARSET=utf8';


$consulta=$enlace->query($sql);


echo 'TABLA CATEGORIAS CREADA SATISFACTORIAMENTE <br>';

?>