<?php

include('ejemplo.php');
$sistemarestaurante = new Restaurante();


if(!$_POST){
$sistemarestaurante->head();
$sistemarestaurante->interfaz();

}

switch ($_POST[opc]) 
{
       case 'formnosotros';
      $sistemarestaurante->formnosotros();
      break;  
      case 'acerca1';
      $sistemarestaurante->acerca1();
      break;
      ///////////////////////////////////
      case 'formulEncabezado';
      $sistemarestaurante->formulEncabezado();
      break;
      case 'peru';
      $sistemarestaurante->peru();
      break;
      case 'bebbida';
      $sistemarestaurante->bebbida();
      break;
      case 'arroces';
      $sistemarestaurante->arroces();
      break;
      
//////////////////////////////////////////
      case 'formContacto';
      $sistemarestaurante->formContacto();  
      case 'contactar';
      $sistemarestaurante->contactar();
      break;
//////////////////////////////////////////7
       case 'formpromociones';
      $sistemarestaurante->formpromociones();
      break;  
      case 'promociones';
      $sistemarestaurante->promociones();
      break;
//////////////////////////////////////////////////
      case 'clienteA':
          $sistemarestaurante->clienteA();
      break;
      case 'clienteB':
          $sistemarestaurante->clienteB();
      break;
//////////////////////////////////////////////////
       case 'fIngreso':
          $sistemarestaurante->fIngreso();
       break;  
     
       case 'formulario1_1':
          $sistemarestaurante->formulario1_1();
       break;
 //////////////////////////////////////////////////
        case 'hacerLogout':
          $sistemarestaurante->hacerLogout();
       break;
      
       case 'empleados':
          $sistemarestaurante->empleados();
       break;  
     case 'busqueda2':
         $obj->busqueda2();
         break;
      case 'link5':
         $obj->link5();
         break;
 } 


?>



