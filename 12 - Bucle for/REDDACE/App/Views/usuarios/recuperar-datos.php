<?php
error_reporting(0);
 //  variables
 $opc='Comparar';         // 
 $donde ='Seguridad';       //
$info[0]=strtolower($_POST['Usuario']);  
$info[1]=strtolower($_POST['cedula']);
################################################
include('../../../database/data1.php');
################################################
################################################
// validacion
if ($info[0] =='' || $info[1] =='') {
  echo'<script> swal ( "Disculpe" ,  "Los Campos No Pueden Estar Vacíos!" ,  "error" ) </script>';
  die();
}
################################################
 // operacion ;
 $controlando= new desiciones($donde,$info,$opc);
 $respuesta = $convercion =$controlando->realizar(); 
################################################
################################################ 

?> 
 