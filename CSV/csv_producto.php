<?php

include('csv_clases.php');
$x=new clase_csv_mysql();

   $campos="(idproducto,idcategoria,nombreproducto,precio) ";
   $tabla = 'producto';
   $archivo_csv = 'producto.csv';

$x ->csv_mysql($campos,$tabla,$archivo_csv);




?>