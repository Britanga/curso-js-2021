<?php
// error_reporting(0);
 //  variables
 $opc='Validando';         // 
 $donde ='Seguridad';       //
$info[0]=strtolower($_POST['usr']);  
$info[1]=strtolower($_POST['pass2']);
$info[2]=strtolower($_POST['Respuesta1']);
$info[3]=strtolower($_POST['Respuesta2']);
$info[4]=strtolower($_POST['Respuesta3']);
################################################
include('../../../database/data1.php');
################################################
################################################
// validacion
if ($info[0] =='' || $info[1] ==''|| $info[2] =='' ) {
  echo 333;
  die();
}
if ($info[3] =='' || $info[4] =='' ) {
    echo 333;
    die();
  } 
################################################
 // operacion ;
 $controlando= new desiciones($donde,$info,$opc);
 $respuesta = $convercion =$controlando->realizar(); 
################################################
################################################  
// resultados
if ($respuesta == 0) {
  echo 0;
  die();
};
if ($respuesta == 1) {
  echo 1;
  die();
};

?> 
