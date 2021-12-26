<?php
    
  //  variables
    $opc='Validar';         // 
    $donde ='Usuario';     //
    $info=strtolower($_POST['usuario']); 
// FIN de las Validaciones
################################################
include('../../../database/data1.php');
################################################
################################################
// operacion 
$Comprovando_user= new desiciones($donde,$info,$opc); 
$respuesta =$Comprovando_user->realizar();
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

