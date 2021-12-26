<?php
// error_reporting(0);
 //  variables
 $opc='Pass';         // 
 $donde ='Seguridad';       //
 
$info[0]=strtolower($_POST['r0']);
$info[1]=strtolower($_POST['r1']);
$info[2]=strtolower($_POST['r2']);
$info[3]=strtolower($_POST['r3']);
$info[4]=strtolower($_POST['r4']);
################################################
include('../../../database/data1.php');
################################################
################################################
// validacion
if ($info[0] =='' ||  $info[1] =='') {
  echo 333;
  die();
}
if ($info[2] ==''  || $info[3] =='') {
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
