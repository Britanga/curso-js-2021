<?php
// error_reporting(0);
 //  variables
 $opc='Editar';         // 
 $donde ='Seguridad';       //
$info[0]=strtolower($_POST['r0']); //user
$info[1]='Verificar';
$info[2]=strtolower($_POST['r4']);
$info[3]=strtolower($_POST['r5']); 
$info[4]=strtolower($_POST['r6']); 
// preguntas
$info[5]=strtolower($_POST['r1']);
$info[6]=strtolower($_POST['r2']); 
$info[7]=strtolower($_POST['r3']); 
$info[8]=strtolower($_POST['r7']); //id
################################################
include('../../../database/data1.php');
################################################
################################################
// validacion
if ($info[2] =='' ||  $info[3] ==''||  $info[4] =='') {
  echo 333;
  die();
}
if ($info[5] ==''  || $info[6] ==''||  $info[7] =='') {
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
