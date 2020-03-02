<?php

$conn=conectar();
// crear la vista, ahora tabla
  $sql = "CREATE TABLE vst_articulo AS  SELECT B.id_art, B.id_grupo, B.sec_art, CONCAT(A.desc_grupo,' ',B.desc_art,' ',C.desc_und) AS articulo, B.pventa_art, B.stock_art  FROM grupo  AS A, unidad AS C, articulo AS B   WHERE A.id_grupo = B.id_grupo AND  C.id_und = B.id_und";
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