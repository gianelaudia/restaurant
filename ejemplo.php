<?php
class Restaurante {

  # variables
  var $query;
  var $registros_hoja;  // define cuántos registros se van a mostrar en la página
  var $campos_mostrar;  // contiene la relación de campos a mostrar
  var $reg_ini;         // registro de inicio de la consulta con limit. Al inicio si página no tiene valor es uno
  var $hoja;  // controla la página que se muestra
  var $nc;   // número de campos de una consulta
  var $tabla;  // la tabla del cuál se realiza la consulta
  var $sql;    // consulta del total de registros que cumplen una determinada condición
  var $sql2;   // consulta que se mostrara, pero por páginas
  var $alias;  // el alias de los campos
  var $ancho;  // el ancho de las columnas
  var $total;  // total de registros de la consulta
  var $tot_pag;  // total de páginas a mostrar (total/registros_hoja)
  var $campos_buscar;  // campos en la condición de búsqueda
  var $width;  // ancho de las celdas
  var $index;
  var $funcion;
  var $funcion2;
  var $funcion3;
  
  var $campo_llave;
  var $operar_vinculos;

  public function __construct(){
       // acción inicial
   }


function interfaz(){

$salida="";
$salida .=


"
<div id = div_Bordes style ='position:absolute;

top:0px;
left:0px;
width:1250px;
height:50px;
background:#BA0606'>

</div>

<div id= div_Menu style= 'position:absolute;
top:55px;
left:0px;
width:250px;
height:1150px;
background:Silver'>

<map name = 'A'>

<area shape ='poly'
coords = '11,178,236,178,236,220,11,220'
href=javascript:ACERCA()
target='_parent'>


<area shape ='poly'
coords = '11,255,236,255,236,295,11,295'
href=javascript:enviarRestaurante()
target='_parent'>


<area shape ='poly'
coords = '11,321,236,321,236,365,11,365'
href=javascript:enviarRestaurante2()
target='_parent'>

<area shape ='poly'
coords = '11,388,236,388,236,435,11,435'
href=javascript:LLAMADA()
target='_parent'>


<area shape ='poly'
coords = '11,457,236,457,236,506,11,506'
href=javascript:enviarRestaurante4()
target='_parent'>

<area shape ='poly'
coords = '11,524,236,573,236,573,11,573'
href=javascript:enviarRestaurante5()
target='_parent'>

<area shape ='poly'
coords = '11,526,236,526,236,576,11,576'
href=javascript:PROMOCIONES()
target='_parent'>

<area shape ='poly'
coords = '11,630,234,630,234,676,11,676'
href=javascript:LOGGG()
target='_parent'>

<area shape ='poly'
coords = '11,726,234,726,234,770,11,770'
href=javascript:link5()
target='_parent'>

<area shape ='poly'
coords = '11,786,234,786,234,830,11,830'
href=javascript:PRODUCTOS()
target='_parent'>

<area shape ='poly'
coords = '11,849,234,849,234,892,11,892'
href=javascript:PROMOCIONES2()
target='_parent'>

<area shape ='poly'
coords = '11,903,234,903,234,948,11,948'
href=javascript:EMPLEADOS()
target='_parent'>

<area shape ='poly'
coords = '11,975,234,975,234,1021,11,1021'
href=javascript:CERRARSESION()
target='_parent'>
<area shape =default nohref>

</map>

<img src= menu.jpg usemap=#A>
</div>

<div id = div_Cabecera style ='position:absolute;

top:55px;
left:250px;
width:1000px;
height:150px;
background:#8A8787'
>

<center><h1><font color= white> &nbsp   RESTAURANTE </font></h1> <img src=IMAGENES/uno.png width=250px height=70px></center>

</div>

<div id = div_Cuerpo style='position:absolute;

top:205px;
left:250px;
width:1000px;
height:850px;
background:white'>

</div>";

echo $salida;

		}

function head(){

	$b ="";
	$b .="<script src=http_restaurante.js></script>";
	echo $b;

	}
////////////////////////////////////
	function conectar(){
  
$dato = $this->leerFile();
$servername = $dato[0];
$username = $dato[1];
$password = $dato[2];
$dbname = $dato[3];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
       exit;
  } else {
       //$conn->query("SET NAMES 'utf8'");
       if (!$conn->set_charset("utf8")) {
              printf("Error cargando el conjunto de caracteres utf8: %s\n", $mysqli->error);
              exit();
        } else {
             // printf("Conjunto de caracteres actual: %s\n", $conn->character_set_name());
       }
       return $conn ;
  }
  
}  // fin de función conectar


function leerFile(){

  if (!file_exists("conn.txt")){
        echo "There is no File with connection data";
        exit;
   } else {
        $file = fopen("conn.txt", "r") or exit("Unable to open file!");
        //Output a line of the file until the end is reached
        $i=0;
        $dato=array("","");
        while(!feof($file))
          {
            $dato[$i] =  trim(fgets($file));
            $i +=1;
          }
        fclose($file);
        return $dato;
   }
} // fin de la función leerFile


//////////////////////////////////////
function CERRARSESION() {
  echo " Cerrando  sesi&oacute;n";
  session_start();
  $_SESSION['loggedin'] = 0 ;
}

////////////////

function PROMOCIONES2() {
   echo "libre";
} // fin de la función
/////////////////////////////////////
function formnosotros()
{
	
	$salida="";
	$salida .=
	"<div id = div_Cuerpo style='position:absolute;

top:25px;
left:25px;
width:950px;
height:100px;
background:white'
<br><br>

	<A href=javascript:enviarRestaurante1()>


	<A href = javascript:ACERCA()
		style='text-decoration:none;'>
	<img src ='IMAGENES/chicha.png' width=100px height=40px>
	</A>


	</div>
	";
	echo $salida;

}


	//////////////////////////////////////////
function formulEncabezado()
{
	$salida="";
	$salida .=
	"<div id = div_Cuerpo style='position:absolute;

top:25px;
left:25px;
width:950px;
height:100px;
background:white'
<br><br>

	<A href=javascript:enviarRestaurante()>

	<A href = javascript:ARRO()
		style='text-decoration:none;'>
	<img src ='IMAGENES/arroces.png' width=100px height=40px>
	</A>
	<A href = javascript:mazamorra()
		style='text-decoration:none;'>
	<img src ='IMAGENES/ensaladas.png' width=100px height=40px>
	</A>
	<A href = javascript:mazamorra()
		style='text-decoration:none;'>
	<img src ='IMAGENES/entradas.png' width=100px height=40px>
	</A>
	<A href = javascript:mazamorra()
		style='text-decoration:none;'>
	<img src ='IMAGENES/fritos.png' width=100px height=40px>
	</A>
	<A href = javascript:mazamorra()
		style='text-decoration:none;'>
	<img src ='IMAGENES/mar.png' width=100px height=40px>
	</A>
	<A href = javascript:mazamorra()
		style='text-decoration:none;'>
	<img src ='IMAGENES/pastas.png' width=100px height=40px>
	</A>
	<A href = javascript:mazamorra()
		style='text-decoration:none;'>
	<img src ='IMAGENES/sopas.png' width=100px height=40px>
	</A>
	<A href = javascript:link5()
		style='text-decoration:none;'>
	<img src ='IMAGENES/tacu tacus.png' width=100px height=40px>
	</A>
	<A href = javascript:mazamorra()
		style='text-decoration:none;'>
	<img src ='IMAGENES/porciones.png' width=100px height=40px>
	</A>
	<A href = javascript:mazamorra()
		style='text-decoration:none;'>
	<img src ='IMAGENES/postres.png' width=100px height=40px>
	</A>
	<A href = javascript:BEBI()
		style='text-decoration:none;'>
	<img src ='IMAGENES/bebidas.png' width=100px height=40px>
	</A>
	<A href = javascript:mazamorra()
		style='text-decoration:none;'>
	<img src ='IMAGENES/especiales.png' width=100px height=40px>
	</A>
	
	</div>
	";
	echo $salida;

}

///////////////////////////////////////////
function formulContacto()
{
	$salida="";
	$salida .=
	"<div id = div_Cuerpo style='position:absolute;

top:25px;
left:25px;
width:950px;
height:100px;
background:white'
<br><br>


	<A href = javascript:LLAMADA()
		style='text-decoration:none;'>
	<img src ='IMAGENES/chicha.png' width=100px height=40px>
	</A>
	
	</div>
	";
	echo $salida;

}
////////////////////////////////////////////////////////////////

function formpromociones()
{
	
	$salida="";
	$salida .=
	"<div id = div_Cuerpo style='position:absolute;

top:25px;
left:25px;
width:950px;
height:100px;
background:white'
<br><br>


	<A href = javascript:PROMOCIONES()
		style='text-decoration:none;'>
	<img src ='IMAGENES/chicha.png' width=100px height=40px>
	</A>


	</div>
	";
	echo $salida;

}
////////////////////////////////////////////////////
function hacerLogout()
{
	
	$salida="";
	$salida .=
	"<div id = div_Cuerpo style='position:absolute;

top:25px;
left:25px;
width:950px;
height:100px;
background:white'
<br><br>


	<A href = javascript:Emple()
		style='text-decoration:none;'>
	<img src ='IMAGENES/chicha.png' width=100px height=40px>
	</A>


	</div>
	";
	echo $salida;

}
/////////////////////////////////////////////////////



function bebbida(){

 	$salida="";
 	$salida.="

	<title> CLIENTE </title>
<form name= cliente>
<img src='IMAGENES/chicha.jpg'>

</form>";

echo $salida;



 }
function contactar(){

 	$salida="";
 	$salida.="

	<div id = div_Cuerpo style='position:absolute;

top:25px;
left:25px;
width:950px;
height:100px;
background:white'
<br><br>

		
<br><h1> <center><i><b>CONSULTAS Y SUGERENCIAS</b></h1></i><center>
<br>
<br>

<br><b><h3> Rosario de Asia - Playa Pasamayito</b></h3> 
<br>
<br> 
<img src= 'IMAGENES/celular.png' width='50px' height='auto' /><b> &nbsp &nbspT&EacuteLEFONO:</b>&nbsp &nbsp 221-5678 / 221-5789 </a>
<br>
<br>
&nbsp &nbsp &nbsp <img src= 'IMAGENES/email.png' width='50px' height='auto' /><b>  &nbsp &nbsp CORREO:&nbsp &nbsp </b> comentarios@miramar.com</a>
<br>
<br>
<br>
<br>
<div>

<a title = 'Facebook' href='http://es-la.facebook.com style=text-decoration:none;'>
<img src= 'IMAGENES/face.png' width='50px' height='auto' /></a>  &nbsp &nbsp  &nbsp &nbsp
<a title = 'Instagram' href='http://www.Instagram.com style=text-decoration:none;' >
<img src= 'IMAGENES/inst.jpg' width='50px' height='auto' /></a>  &nbsp &nbsp  &nbsp &nbsp
<a title = 'Whatsapp' href='http://www.Whatsapp.com style=text-decoration:none;'>
<img src= 'IMAGENES/watt.jpg' width='50px' height='auto' /></a>


</div>
";

echo $salida;



 }
function arroces(){

 	$salida="";
 	$salida.="

	<title> CLIENTE </title>
<form name= cliente>
<img src='IMAGENES/asado.jpg'>

</form>";

echo $salida;
}
///////////////////////////////////////
function acerca1(){
	$salida="";
 	$salida.="
	<h1> <center><i><b>Acerca de Nosotros</b></h1></i><center>


<font color= red><h2><i><b>Misi&oacuten:</b></i></h2></font>
<br>Ofrecer un concepto innovador que combina los ricos platos y bebidas y un ambiente &uacutenico, que le har&aacute sentir la experiencia de estar como en casa.



<font color= red><h2><i><b>Misi&oacuten:</b></i></h2></font>
<br>Ser reconocidos como un restaurante original y s&oacutelido, con calidad humana y principios &eacuteticos, que ofrece servicios y productos de excelencia. 
<br>Lograr una empresa altamente productiva, innovadora, competitiva y dedicada para la satisfacci&oacuten plena de nuestros clientes.


<font color= red><h2><i><b>Valores:</b></i></h2></font>

<br>*Respeto
<br>*Cortes&iacutea
<br>*Amabilidad
<br>*Confianza
<br>*Responsabilidad
<font color= red><h2><i><b>Organigrama:</b></i></h2></font>
<center><img src='IMAGENES/organigrama.png' height='40%' width='60%'>";
echo $salida;

}
///////////////////////////////////////
function promociones(){
	$salida="";
 	$salida.="
 	<div id = promocion style='position:absolute;

top:0px;
left:0px;
width:1000px;
height:1000px;
background:white'>

</div>

<div id = promocion1 style='position:absolute;

top:0px;
left:0px;
width:500px;
height:1000px;
background:skyblue'>



<CENTER> <BR>---------------------------------------------------------------------</CENTER>

<CENTER><img src='IMAGENES/cumple.jpg' align='center' width='350' height='200'></img></CENTER>
<CENTER> <BR> <B> <H2>EL CUMPLEA&NtildeERO <B></H2></CENTER>
<CENTER> <BR> <B> <H1><font color='RED'> NO PAGA</font> </CENTER>  </B> </H1>
<CENTER><img src='IMAGENES/trio.jpg'  width='220' height='180'></img></CENTER>
<CENTER> <BR></CENTER>
<CENTER> <BR></CENTER>

<B> <H3><font color='RED'> &nbsp &nbsp  &nbsp CONDICIONES:</font> </H3></B>
<B> <H4> &nbsp &nbsp  &nbsp  Previa Reservaci&oacuten
<BR><B> <H4> &nbsp &nbsp  &nbspPresentar su DNI

<BR><B> <H4> &nbsp &nbsp  &nbspNo v&aacutelida para otras promociones</H4>
<BR>
<CENTER><BR><H4><font color='white'>&nbsp &nbsp  &nbsp No es v&aacutelida para cuentas separadas
<BR> &nbsp &nbsp  &nbsp M&iacutenimo 7 personas por Cumplea&ntildeero
<BR> &nbsp &nbsp  &nbspPromoci&oacuten v&aacutelida dentro de la semana del Cumplea&ntildeero</font></H4></CENTER>
</div>
<div id = promocion2 style='position:absolute;

top:0px;
left:500px;
width:500px;
height:1000px;
background:skyblue'>

<H1><CENTER>  <B> <font color='gray'>PLATOS DEL D&IacuteA</font> </CENTER>  </B> </H1>




<CENTER> <TABLE align='rigth' width='400' BORDER=0 bordercolor='white' cellpadding='30'>

 <TR ALIGN=center><TD> <B><img src='IMAGENES/mariscos.jpg' align='left' width='160' height='100'></img><font color='yellow'>LUNES </font></B>
 <BR>
 <HR>	
 <BR>ARROZ CON MARISCOS
 <BR>y ceviche
 <BR>
 <HR><BR></TD></TR> 
 

 <TR ALIGN=center><TD> <img src='IMAGENES/verdes.jpg' align='left' width='160' height='100'></img><B><font color='yellow'>MARTES </font></B>
 <BR>
 <HR>
 <BR>TALLARINES VERDES
 <BR>con bisteck apanado 
 <BR>
 <HR><BR></TD> </TR> 
 
<TR ALIGN=center><TD> <img src='IMAGENES/lomo.jpg' align='left' width='160' height='100'></img>  <B><font color='yellow'>MIERCOLES </font></B>
<BR>
<HR>
<BR>LOMO SALTADO
<BR>a lo pobre 
<BR>
<HR><BR></TD> </TR> 

 <TR ALIGN=center><TD> <img src='IMAGENES/seco.jpg' align='left' width='160' height='100'></img>  <B><font color='yellow'>JUEVES </font></B>
 <BR>
 <HR>
 <BR>SECO DE CARNE
 <BR>con frejoles 
 <BR>
 <HR><BR></TD> </TR> 
 
<TR ALIGN=center><TD> <img src='IMAGENES/asado.jpg' align='left' width='160' height='100'></img>  <B><font color='yellow'>VIERNES </font></B>
<BR>
<HR>
<BR>ASADO
<BR>con pure 
<BR>
<HR><BR></TD> </TR> 
</TABLE>  

</div>

	";
echo $salida;

}

///////////////////////////
 function peru(){

 	$salida="";
 	$salida.="

	<title> CLIENTE </title>
<form name= cliente>
<img src='IMAGENES/cliente.jpg'>

<div id=div_apellido style='position: absolute;
	top: 100px;
	left: 150px;
	width: 0px;
	height: 0px;
'>
<textarea name = apellidos></textarea>	
</div>

<div id=div_nombre style='position: absolute;
	top: 140px;
	left: 150px;
	width: 0px;
	height: 0px;
'>
<textarea name = nombres></textarea>	
</div>

<div id=div_dni style='position: absolute;
	top: 180px;
	left: 150px;
	width: 0px;
	height: 0px;
'>
<textarea name = dni></textarea>	
</div>

<div id=div_telefono style='position: absolute;
	top:225px;
	left: 150px;
	width: 0px;
	height: 0px;
'>
<textarea name = telefono></textarea>
</div>


<div id=div_direccion style='position: absolute;
	top: 270px;
	left: 150px;
	width: 0px;
	height: 0px;
'>
<textarea name = direccion></textarea>	
</div>

<div id=div_correo style='position: absolute;
	top: 310px;
	left: 150px;
	width: 0px;
	height: 0px;
'>
<textarea name = correo></textarea>
</div>

<input type='button' style=' position: absolute;
top:350px;
left:150px;
width:80px;
height:40px;'

 value='Registrar' name='registrar' onclick='javascript:deysi(cliente)'> 

<input type='button' style='position: absolute;
top:350px;
left:250px;
width:60px;
height:40px;' value='Salir' name='salir' onclick='javascript:deysi(cliente) '>

</form>";

echo $salida;

 }

//////////////////////////////////////
 function carreras(){

 	$salida="";
 	$salida.="
 	<head>
<title>FOTOS</title>
</head>
<body>

<body style='background-color:WHITE;'>
<center> <H1><FONT COLOR='#000000'>I.E.S.T.P. San Pedro del Valle de Mala </H1></center>
<center><h2> CLIENTES </h2></center><br>

<center><img src='CEI.png' width='180px' height='auto'></center>

<center><img src='DCI.png' width='180px' height='auto'></center>

<li> Contabilidad
<center><img src='C.png' width='180px' height='auto'></center>

<center><img src='E.png' width='180px' height='auto'></center>

</body>";

echo $salida;

}

function empleados(){

 	$salida="";
 	$salida.="

	<title> CLIENTE </title>
<form name= cliente>
<img src='IMAGENES/asado.jpg'>

</form>";

echo $salida;
}/////////////////////
// funciones de ingreso de usuario y clave.

function fIngreso() {
  $salida = "";
  $salida .= "
    <img src='fg.jpg' onmousedown='javascript:show_coords(event,gol)' >
    <div class=capaPantalla >
    <form name=gol id=gol >
    <table border=0>
      <tr><td>User</td><td> <input class =normal type=text id=usuario size=38 onfocus=javascript:cambiar(gol)  readonly > <br>
      </td></tr>
      <tr><td>Password</td><td> <input type=hidden id=clave >  <input class =normal2 type=text id=claveM onfocus=javascript:cambiar2(gol) size=38  readonly >   <br>
      
      </td></tr>
    </table>  
    <input type=hidden id=m_usuario value=''>
    <input type=hidden id=m_clave value=''>
    <input type=hidden id=obj value='usuario'>
    </form>
    </div>

    ";
  echo $salida;
}

//funciones de ingreso de usuario y password


function formulario1_1(){  // despues de subir foto
	
	$usuario = $_POST[usuario];
	$clave = $_POST[clave];
	//echo "Usuario: ".$usuario."  clave: ".$clave;
	if ($usuario != "" && $clave != "") {
	    $this->checklogin($usuario,$clave);
	  } else {
		echo "<img src=vacio.jpg>";
		session_start();
                $_SESSION['loggedin'] = 0;
		return;
	  }
}

function  link5(){

  echo "link5";

  $this->busqueda2();

}


/////////////////////////////////////////////////////////////

 function checklogin($usuario,$password) {
      
        $conn = $this->conectar();
        $sql="SELECT * FROM usuario WHERE user_usu = '$usuario' ";
	//echo "sql: ".$sql."<br>";
        $rs = $conn->query($sql);
	
       // determinar el número de filas del resultado 
        $total = $rs->num_rows;

        if ($total == 0) {
            //echo "El usuario no existe";
	    echo "<img src=jpg/inexistente.jpg>";
	    session_start();
            $_SESSION['loggedin'] = 0;
            exit;
         } else {
  	      // el usuario existe
	      $fila = $rs->fetch_array(MYSQLI_ASSOC);
	 };
       

        $clave = $fila[password_usu];  
        if ($password == $clave) {
	    session_start();
	    $_SESSION['loggedin'] = 1;
	    $this->loggedin = 1;	    
	    // echo "Bienvenido! " . $_SESSION['usu_nombre']." ".$_SESSION['usu_ap']." ".$_SESSION['usu_am'];
	    //echo "<img src=jpg/congratulaciones.jpg><br>";
	    echo "Bienvenido al sistema ";
	    
            $_SESSION['id_usu'] = $fila[id_usu];                  // llave
            $_SESSION['user_usu'] = $fila[user_usu];              // usuario
            $_SESSION['password_usu'] = $fila[password_usu];      // password
            $_SESSION['ap_usu'] = $fila[ap_usu];                  // apellido paterno del usuario
            $_SESSION['am_usu'] = $fila[am_usu];                  // apellido materno 
            $_SESSION['nombre_usu'] = $fila[nombre_usu];          //  nombre
            $_SESSION['privilegio_usu'] = $fila[privilegio_usu] ; // semejante al Rol
            $_SESSION['start'] = time();                          // hora de ingreso al sistema
            $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);  // tiempo que puede estar en el sistema
            
          } else {
               //echo "El usuario existe, pero el password es incorrecto.";
	       echo "<img src=passwordIncorrecto.jpg>";
	       session_start();
               $_SESSION['loggedin'] = 0;
          }  //fin del if que compara password con clave
} 


function busqueda2() {
    
  $this->tabla = 'cliente';
  $this->campos_mostrar = "idproducto, idcategoria, nombreproducto,precio";
  $this->alias = array ("idproducto"=>"ID","idcategoria"=>"RUC","nombreproducto"=>"DESCRIPCION","precio"=>"DIRECCION");
  $this->ancho = array ("idproducto"=>"4","idcategoria"=>"10","nombreproducto"=>"20","precio"=>"20");
  $this->campos_buscar = array('nombreproducto'=>'Descripcion');
  $this->registros_hoja = 10;
  $this->width = array("80px","100px","350px","200px");
  $this->funcion = 'busqueda2';
  $this->funcion2 = 'operacionproducto';
  $this->funcion3 = 'insertproducto';
  $this->campo_llave = 'idproducto';
  $this->operar_vinculos = 'operarVinculos2';
  
  
  //$this->index = "USE INDEX idx_descripcion_articuloVenta ";
     
  if (!$_POST["nombreproducto"]) {
      $nombreproducto = "";
  } else {
      $nombreproducto = $_POST["nombreproducto"];
  }   
    
  $salida = "";
  $salida .= "
      <form name=frm_params>
        Cliente<input type=text class=stext name=nombreproducto value='".$nombreproducto."'  '> 
        <input type=button class= sbutton value=Buscar... onclick=javascript:operar2(document.forms.frm_params,'busqueda2')><br>
      </form> ";
    
  echo $salida;
  $this->defcriterios();

}
function defcriterios() { 
   
	foreach($this->campos_buscar as $subindice=>$dato){  
             if ($_POST[$subindice] == "" ) {
    		return 0;  // retorna y no ejecuta el resto de instrucciones
              }  
	}
   
	$this->query=array();
	$salida="";
	// echo "hola busqueda";
	foreach($_POST as $subindice=>$dato){
		if ($dato<>""){
			switch ($subindice) {
				case 'opc':
       					break;
                                case 'pag':
                                        $this->hoja=$dato;
        				break;
                                default:
					$this->query["$subindice"]=$dato;
					break;
			}				
		}
	} 
	
	# al inicio no debe mostrar consulta
	if (count($_POST)< 1 ) {
		return 0;
	}
 
       	# Definir criterios de búsqueda de la consulta
	foreach ($this->query as $subindice => $dato){
		$this->criterios.="$subindice like '%$dato%' and ";
	}
        # Recortar el último "and" de la cadena (5 caracteres)
	$this->criterios=" where " . substr($this->criterios,0,strlen($criterios)-5);
        $this->defconsulta();
}

#------------- DEFINIR LAS CONSULTAS -------------------------------------------

function defconsulta(){
        # Para calcular el total de registros que cumplen la condición
        $this->sql2="select count(*) as total from $this->tabla $this->criterios ";
        $this->registro_inicial();  // que da valor aa la propiedad reg_ini
        # Definir la consulta para la página. Se obtiene la página inicial y se muetra la camtidad de registros por página. 
	$this->sql ="select $this->campos_mostrar from $this->tabla $this->criterios limit $this->reg_ini,$this->registros_hoja";
	$salida = "";
	$salida .=  $this->verconsulta();
}

#------------- VER CONSULTA -------------------------------------------------
function verconsulta(){

    $width = $this->width;
    $operacion = $this->funcion2;
    $operacionI = $this->funcion3;
    $id = $this->campo_llave;
    
    $js = "onkeypress=\"if (event.keyCode==13 )  {event.keyCode=9;} \"";  // PARA ENTER 
    $conn = $this->conectar();
    $rs = $conn->query($this->sql);

    $this->nc = $conn->field_count;  // "numero de campos: "
    $salida = "";
    $salida .= "<form name='ingresodatos' method='post' action=''>";
    $salida .= "<div style='overflow-x:auto;'>";
    $salida .= "<table class=tablaPag >";
    $salida .= $this->total_registros();
    if ($this->total == 0) return;
    $salida .= "<tr> ";

    # El encabezado de la tabla
    $rs->fetch_array(MYSQLI_ASSOC);
    $info_campo = $rs->fetch_fields();
    $nombre = array();
    $i=0;
    foreach ($info_campo as $valor) {
            $nombre_campo = $valor->name;
	    $nombre[$i] = $nombre_campo;
	    $alias_campo = $this->alias[$nombre_campo];
            $salida .= "<td align=center >$alias_campo</td>\n";
	    $i++;
        }
     $salida .= "<td align=center >Ver</td>\n";
    $salida .= "</tr>";
    
    # El contenido de la tabla
    $i = 0;
    while($fila = $rs->fetch_array(MYSQLI_ASSOC)){   
        $i++;
        $salida .= "<tr>";
	$j=0;
        //$d = new Array();
	foreach ($fila as $valor) {
            $nombre_campo = $nombre[$j];
	    $valor_campo = $fila[$nombre_campo];
	    $estilo = " style='width:$width[$j];height:25px;color=#212f3d' ";
	    if ( $nombre_campo == $this->campo_llave ) {
	          $salida .= "<td><textarea  rows=1  name=$nombre_campo$i $estilo $j READONLY>$valor_campo</textarea></td>\n";
	      } else {
	    	   $salida .= "<td><textarea  rows=1  name=$nombre_campo$i $estilo $j >$valor_campo</textarea></td>\n";
	      }
            $j++;
        }
	
        $salida .= "<td><a href=\"javascript:$operacion($i,ingresodatos)\"><IMG SRC=\"jpg/mnt/update.jpg\" title=\"Update registro\"></td>\n";
	$salida .= "<td><a href=\"javascript:$operacionI($i,ingresodatos)\"><IMG SRC=\"jpg/mnt/insert.jpg\" title=\"Insert registro\"></td>\n";
        $salida .= "</tr>";
    }
    $salida .= $this->hipervinculos_parte_inferior();
    $salida .= "</table>";
    $salida .= "</div>";
    $salida .="</form>";  
    $rs->close;
    echo $salida;
    return;
 }


function registro_inicial(){
  if (!$this->hoja){
        $this->hoja=1;
        $reg_ini=0;
    } else {
	$reg_ini=($this->hoja-1)*$this->registros_hoja;
      }
  $this->reg_ini = $reg_ini;
  return  $this->reg_ini;
} // Fin de función registro inicial


#------- CALCULAR TOTAL DE REGISTROS Y TOTAL DE PAGINAS A MOSTRAR --------------
function total_registros(){
	$nc = $this->nc + 1;
        $conn = $this->conectar();
        $rs = $conn->query($this->sql2);  // solo devuelve un registro, el resultado de contar los registro de la consulta
	$row = $rs->fetch_array(MYSQLI_NUM);
	$this->total=$row[0];
	$this->tot_pag=ceil($this->total/$this->registros_hoja);   // ceil Redondea las fracciones hacia arriba  ceil(3.14) = 4
  
	$salida = "";
	$salida .= "<tr>";
        $salida .= "<td colspan=$nc align=left>";
	$salida .= "<b>".$this->total."</b> registros en <b>".$this->tot_pag."</b> hojas" ;
        $salida .= "</td></tr>";
	return $salida;
}
function hipervinculos_parte_inferior(){
        $operarVinculos = $this->operar_vinculos;
        $funcion = $this->funcion;
	$nc = $this->nc + 1;
	$text="";
 	for ($p=1;$p<=$this->tot_pag;$p++){
		if ($p==$this->hoja){
			$text .=  "[$p]&nbsp;&nbsp\n";
		} else {
			$param="";
  			foreach ($this->query as $subindice => $dato){
				$param.="&$subindice=".$dato;
			}
                        $text .= "<a href=\"javascript:$operarVinculos($p,'$param','$funcion')\">$p</a>&nbsp;&nbsp;&nbsp\n";
		}
	}
        $salida = "<tr><td colspan=$nc>";
        $salida .= $text;
        $salida .= "</td></tr>";
	return $salida;

}



	} //cierra la clase

	
?>
