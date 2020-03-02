<?php

$enlace  = new mysqli('localhost','root','','restaurante');

if (!$enlace) {
     echo ('No pudo conectarse: ' . mysql_error());
    exit;
}

echo 'Conectado satisfactoriamente<br>';

$sql = 'CREATE TABLE Promociones (
  idpromociones int NOT NULL AUTO_INCREMENT,
  tipoMenuProducto VARCHAR(100) ,
  
 
  
  PRIMARY KEY  (id)

  ) ENGINE=InnoDB DEFAULT CHARSET=utf8';


$consulta=$enlace->query($sql);


echo 'TABLA PROMOCIONES CREADA SATISFACTORIAMENTE<br>';

?>