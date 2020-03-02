<?php

$enlace  = new mysqli('localhost','root','','restaurante');

if (!$enlace) {
     echo ('No pudo conectarse: ' . mysql_error());
    exit;
}

echo 'Conectado satisfactoriamente<br>';

$sql = 'CREATE TABLE reservas (
  idreserva int NOT NULL AUTO_INCREMENT,
  idusuario VARCHAR(15) ,
  cantidadpersonas VARCHAR(50),
  telefono VARCHAR(50),
  diallegada DATE ,
  horallegada TEXT,
  observaciones TEXT,
 
  
  PRIMARY KEY  (id)

  ) ENGINE=InnoDB DEFAULT CHARSET=utf8';


$consulta=$enlace->query($sql);


echo 'TABLA RESERVAS CREADA SATISFACTORIAMENTE<br>';

?>