
var http = http_objeto();
function http_objeto() {
  var xmlhttp;
  if(window.XMLHttpRequest){
    xmlhttp = new XMLHttpRequest();
  } else if (window.ActiveXObject){
    xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
    if (!xmlhttp){
        xmlhttp=new ActiveXObject('Msxml2.XMLHTTP');
      }
  }
  return xmlhttp;
}

////////////////////////////////////////////
function link5() {
  var params = 'opc=link5';
  devolver(params,3) 
}

/* Funciones del formulario de ingreso de usuario y password */
function cambiar(f)  { f.obj.value = 'usuario' }
function cambiar2(f) { f.obj.value = 'clave'   }
function show_coords(event,f) {
    x = event.clientX
    y = event.clientY
    caja = f.obj.value
    xchar = ''
   // f.usuario.value ='x=' + x + ' y=' + y
    if (x>130  && x<164  && y>355 && y<392 )  xchar = '0'       //0
    if (x>130  && x<162  && y>302 && y<342 )  xchar = '1'       //1  
    if (x>181  && x<213  && y>302 && y<339 )  xchar = '2'       // 2
    if (x>234  && x<266  && y>302 && y<341 )  xchar = '3'       // 3
    if (x>131  && x<164  && y>248 && y<285 )  xchar = '4'       // 4
    if (x>183  && x<217  && y>247 && y<286 )  xchar = '5'       // 5
    if (x>237  && x<270  && y>246 && y<285 )  xchar = '6'       // 6
    if (x>134  && x<166  && y>194 && y<235 )  xchar = '7'       // 7
    if (x>188  && x<220  && y>196 && y<233 )  xchar = '8'       // 8
    if (x>239  && x<273  && y>194 && y<233 )  xchar = '9'       // 9
    // backspace
    if (x>193  && x<273  && y>143 && y<178 ){
        sentencia = 'var str = f.m_'+caja+'.value'
        eval(sentencia)
        n = str.length - 1
        sentencia = 'f.m_'+caja+'.value = str.substr(0,n)'
        eval(sentencia)
        sentencia = 'f.'+caja+'.value = str.substr(0,n)'
        eval(sentencia)
  if (caja=='clave') {
    str2 = f.claveM.value
    f.claveM.value = str2.substr(0,n)
  }
  
      }   else {  
        sentencia = 'f.'+caja+'.value += \"' + xchar + '\"'
        eval(sentencia)
        sentencia = 'f.m_'+caja+'.value += \"' + xchar + '\"'
        eval(sentencia)
  if (caja=='clave') {
    f.claveM.value += "*"
  }
    }
   if (x>173 && x<270 && y>357 && y<394 ) {
       //alert("se ha presionado la tecla enter")
       clave = f.clave.value
       usuario = f.usuario.value
       operar1_1(usuario,clave)    // Enter
    }
   if (x>135 && x<181 && y>147 && y<182 )  xchar = 'k'     // logo
}
/* FIN de funciones del formulario de ingreso de usuario y password */

// funciones de ingreso de datos a la ficha de evaluación


function show_coords2(event,f) {
    x = event.clientX
    y = event.clientY
    // 0
      
      
    //f.pantalla.value ="X= " + event.clientX + " Y= " + event.clientY
    

}



// fin de funciones de ficha de evaluación



function operar1_1(usuario,clave){

    var params =  'usuario=' + usuario + '&clave=' + clave + '&opc=formulario1_1';
    devolver(params,3);
}

/////////////////////////////////////////////////

function defFile(){
return 'index.php'
}
////////////////////////////////////////////////////////
function devolver(params,n){
  var url =  defFile() ;
  http.open("POST",url,true);
  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  switch (n){
    case 3:
      http.onreadystatechange=respuesta3;
      break
    case 2:
      http.onreadystatechange=respuesta2;
      break
    
  }
  http.send(params);
}
////////////////////////////////////////////////////////////////////////


////////////////////////////////////

function enviarRestaurante(){
  //alert('hola')
  //return;

	var params = 'opc=formulEncabezado';
	var url = 'index.php';
	http.open('POST',url,true);

	http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	http.setRequestHeader('Content-length', params.length);
	http.setRequestHeader('Connection', 'close');
	
	
	http.onreadystatechange=respuestaRestaurante;
	http.send(params);
}

function mazamorra(){
//  alert("hola")
//  return;

  var params = 'opc=peru';
  var url =  "index.php";
  http.open("POST",url,true);

  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  
  
  http.onreadystatechange=respuestaRestaurante;
  http.send(params);
}

function formulario(){
//  alert("hola")
//  return;

  var params = 'opc=peru';
  var url =  "index.php";
  http.open("POST",url,true);

  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  
  
  http.onreadystatechange=respuestaRestaurante;
  http.send(params);
}

function arroz(){
//  alert("hola")
//  return;

  var params = 'opc=curriculum';
  var url =  "index.php";
  http.open("POST",url,true);

  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  
  
  http.onreadystatechange=respuestaRestaurante;
  http.send(params);
}

function BEBI(){
//  alert("hola")
//  return;

  var params = 'opc=bebbida';
  var url =  "index.php";
  http.open("POST",url,true);

  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  
  
  http.onreadystatechange=respuestaRestaurante;
  http.send(params);
}

function ARRO(){
//  alert("hola")
//  return;

  var params = 'opc=arroces';
  var url =  "index.php";
  http.open("POST",url,true);

  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  
  
  http.onreadystatechange=respuestaRestaurante;
  http.send(params);
}

function suspiro(){
//  alert("hola")
//  return;

  var params = 'opc=carreras';
  var url =  "index.php";
  http.open("POST",url,true);

  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  
  
  http.onreadystatechange=respuestaRestaurante;
  http.send(params);
}
function chocolate(){
//  alert("hola")
//  return;

  var params = 'opc=estaciones';
  var url =  "index.php";
  http.open("POST",url,true);

  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  
  
  http.onreadystatechange=respuestaRestaurante;
  http.send(params);
}
function ACERCA(){
//  alert("hola")
//  return;

  var params = 'opc=acerca1';
  var url =  "index.php";
  http.open("POST",url,true);

  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  
  
  http.onreadystatechange=respuestaRestaurante;
  http.send(params);
}
function LLAMADA(){
//  alert("hola")
//  return;

  var params = 'opc=contactar';
  var url =  "index.php";
  http.open("POST",url,true);

  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  
  
  http.onreadystatechange=respuestaRestaurante;
  http.send(params);
}

function LOGGG(){
//  alert("hola")
//  return;

  var params = 'opc=fIngreso';
  var url =  "index.php";
  http.open("POST",url,true);

  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  
  
  http.onreadystatechange=respuestaRestaurante;
  http.send(params);
}

function PROMOCIONES(){
//  alert("hola")
//  return;

  var params = 'opc=promociones';
  var url =  "index.php";
  http.open("POST",url,true);

  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  
  
  http.onreadystatechange=respuestaRestaurante;
  http.send(params);
}
///////////////////////////////////////
function EMPLEADOS(){
//  alert("hola")
//  return;

  var params = 'opc=empleados';
  var url =  "index.php";
  http.open("POST",url,true);

  http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  http.setRequestHeader("Content-length", params.length);
  http.setRequestHeader("Connection", "close");
  
  
  http.onreadystatechange=respuestaRestaurante;
  http.send(params);
}


function respuestaRestaurante(){
	if (http.readyState == 4) {
    	if(http.status==200) {
			document.getElementById('div_Cuerpo').innerHTML = http.responseText;
        }
    }


}
function link5() {
  var params = 'opc=link5';
  devolver(params,3) 
}

function deysi(F) {
  alert("USTED HA SIDO REGISTRADO CON EXITO, haha saludos")
  a=F.apellidos.value
  alert("APELLIDOS : "+a)

  b=F.nombres.value
  alert("NOMBRES : "+b)

  c=F.dni.value
  alert("DNI :  "+c)

  d=F.telefono.value
  alert("TELEFONO : "+d)

  e=F.direccion.value
  alert("DIRECCION : "+e)

  f=F.correo.value
  alert("CORREO : "+f)
}


function operar2(F,opc){
  nombreproducto = F.nombreproducto.value;
  var params = 'nombreproducto=' + nombreproducto + '&opc=' + opc;
  devolver(params,3) 
}

function operarVinculos2(p,nombreproducto,opc){
  var params = 'nombreproducto=' + nombreproducto +  '&pag=' + p + '&opc=' + opc;
  devolver(params,3)
}


function operacionproducto(i,F) {

  idproducto =   eval('F.id'+i+'.value')
  idcategoria =  eval('F.categoria'+i+'.value')
  nombreproducto = eval('F.nombre'+i+'.value')
  precio =  eval('F.precio'+i+'.value')
  
  var params  = 'idproducto=' + id_cli +
                '&idcategoria=' + ruc_cli +
                '&nombreproducto=' + desc_cli+
                '&precio=' + dir_cli +
  '&opc=productoP';
  devolver(params,3)
 
}

function insertproducto(i,F) {

  idproducto =   eval('F.id'+i+'.value')
  idcategoria =  eval('F.categoria'+i+'.value')
  nombreproducto = eval('F.nombre'+i+'.value')
  precio =  eval('F.precio'+i+'.value')
  var params  = 'idproducto=' + id_cli +
                '&idcategoria=' + ruc_cli +
                '&nombreproducto=' + desc_cli+
                '&precio=' + dir_cli +
  '&opc=productoPP';;
  devolver(params,3)
 
}

