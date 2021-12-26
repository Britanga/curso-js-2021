<?php
  //  variables
  $opc='Cedula';         // 
  $donde ='Usuario';     //_
  $info  = strtolower($_POST['Cedula']); 
################################################
include('../../../database/data1.php');
################################################
 // operacion ;
 $controlando= new desiciones($donde,$info,$opc);
 $respuesta = $convercion =$controlando->realizar();
################################################
################################################ 
// resultados
if ($respuesta == 1) {
  echo 1;
  die();
};
if ($respuesta == 0) {
  echo 0;
  die();
};
################################################
################################################
?>