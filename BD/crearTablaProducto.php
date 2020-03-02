<?php

$enlace  = new mysqli('localhost','root','','restaurante');

if (!$enlace) {
     echo ('No pudo conectarse: ' . mysql_error());
    exit;
}

echo 'Conectado satisfactoriamente<br>';

$sql = 'CREATE TABLE producto (
  idproducto int NOT NULL AUTO_INCREMENT,
  idcategoria int,
  nombreproducto VARCHAR (100),
  precio decimal (10,2),
  
 
  
  PRIMARY KEY  (idproducto,idcategoria)

  ) ENGINE=InnoDB DEFAULT CHARSET=utf8';


$consulta=$enlace->query($sql);


echo 'TABLA PRODUCTO CREADA SATISFACTORIAMENTE<br>';

?>