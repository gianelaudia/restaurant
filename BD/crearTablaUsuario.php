<?php

  $conn = conectar();
  echo "Starting process. Please wait ......<br>"; 

  // sql to create table tipo_producto
  $sql = 'CREATE TABLE usuario(
      id_usu int auto_increment NOT NULL ,
      user_usu VARCHAR(100),
      password_usu  VARCHAR(100),
      ap_usu VARCHAR(50),
      am_usu VARCHAR(50),
      nombre_usu VARCHAR(100),
      privilegio_usu VARCHAR(50),
      PRIMARY KEY  (id_usu)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8';
  
  ejecutar($sql,$conn);

// ingresar un registro
  $sql = "INSERT INTO usuario (user_usu, password_usu, ap_usu, am_usu, nombre_usu, privilegio_usu)
  VALUES ('2018','1234','Chumpitaz','Malasquez','Sofia','Administrador')" ;
  
  ejecutar($sql,$conn);



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
  $dbname = "restaurante";
   
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
