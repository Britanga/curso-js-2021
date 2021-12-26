<?php

  //  variables
  $opc='Entrar';         // 
  $donde ='Login';     //
  $info[0]=strtolower($_POST['usuarioE']); // usuario
  $info[1]=strtolower($_POST['ssap']);   //contraseña
// 
if ($info[0] =='' || $info[0] == null) {
  echo('<p class="fracaso_login"> El Campo del Usuario esta Vacío! ');
  die();
}
if ($info[1] =='' || $info[1] == null) {
  echo('<p class="fracaso_login"> El Campo de la contraseña esta Vacío! ');
  die();
}
// FIN de las Validaciones
################################################
include('../../../database/data1.php');
################################################
################################################
// operacion ;
$controlando_login= new desiciones($donde,$info,$opc);
return $respuesta = $convercion1 =$controlando_login->realizar();
################################################
################################################ 
// resultados
// if ($respuesta == 1) {
//   echo 1;
//   die();
// };
// if ($respuesta == 0) {
//   echo 0;
//   die();
// };
################################################
################################################
?>

