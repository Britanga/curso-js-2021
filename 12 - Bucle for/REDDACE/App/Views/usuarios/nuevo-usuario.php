<?php
error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='Nuevo';
$donde='Usuario'; 
############  USUARIO  ########################
$info[0]=strtolower($_POST['Tipo']);
$info[1]=strtolower($_POST['usuarioR']);
$info[2]=strtolower($_POST['ssap2']); 
################################################
// Validacion pequeña
if ($info[0] =='' || $info[1] =='' || $info[2] =='' ) {
    echo('<p class="fracaso_login"> Los Campos No Pueden Estar Vacíos! ');
    die();
  }
// FIN de las Validaciones
################################################
################################################
include('../../../database/data1.php');
################################################
################################################
// operacion  
   $controlando_la_seguridad= new desiciones($donde,$info,$opc);
  $resultado = $controlando_la_seguridad->realizar($verifica); 

################################################
################################################ 
// resultados
if ($resultado == 1) {
    echo 1;
    die();
};
if ($resultado == 0) {
    echo 0;
    die();
};
################################################
################################################
// fin
?>