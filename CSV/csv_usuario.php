<?php
# ----- pasar los daqtos de archivo CSV a MySQL -----------
# ----- para la tabla grupo ------------------------------

  set_time_limit(36000);  // para dar mayor tiempo a la ejecución de la operación

   $campos="(idusuario,nombreusuario,password,fechacreado) ";
   $tabla = 'usuarios';
   $archivo_csv = 'usuario.csv';
   $conn = conectar();
   echo "iniciando proceso. Espere por favor ......";
   csv_mysql($campos,$tabla,$archivo_csv,$conn);
   $conn->close();
     
function csv_mysql($campos,$tabla,$archivo_csv,$conn) { 
   $fp = fopen ($archivo_csv,"r");
   $j = 0;
   while (( $data = fgetcsv ($fp,1000,",")) !== FALSE ){
        $i = 0;
        $valores ="(";
        foreach($data as $row) {
              if (is_numeric($data[$i])) { $data[$i] = cero($data[$i]) ;} 
              $valores .="'$data[$i]',";       
              $i++ ;
           }
       $valores=substr($valores,0,strlen($valores)-1).") ";
       $sql="insert into $tabla $campos values $valores";
       $j++ ;
   if ($conn->query($sql) === TRUE) {
          echo "Record inserted successfully";
      } else {
          echo "Error inserting record: " . $conn->error;
     }
     }
     
  echo "<br /><br />";
  echo "Records= $j<br />";
  echo "Process finished";
  

}

function cero($n) {
  if ($n < 10) {
    return '0'.$n;
  } else {
    return $n;
  }
}  // fin funcion cero

function conectar(){
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "Restaurante";
  
   /*
  $servername = "sql308.eshost.com.ar";
  $username = "eshos_22658994";
  $password = "1305ga";
  $dbname = "eshos_22658994_ferreteria";
   */
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }  else {
    return $conn;
  }
  
}  //fin de la función


?>
