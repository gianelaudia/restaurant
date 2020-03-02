<?php

include('csv_clases.php');
$x=new clase_csv_mysql();

   $campos="(idcategoria,nombrecategoria) ";
   $tabla = 'categorias';
   $archivo_csv = 'categoria.csv';

$x ->csv_mysql($campos,$tabla,$archivo_csv);




?>