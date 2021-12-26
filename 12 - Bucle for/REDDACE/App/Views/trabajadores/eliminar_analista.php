  <?php

$opc='Eliminar';   
$donde='Analista'; 
############  USUARIO  ########################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
$info=strtolower($_POST['sera']); //inicia11

################################################
 // operacion ;
 $controlando= new desiciones($donde,$info,$opc);
 return $respuesta = $convercion =$controlando->realizar(); 
################################################
################################################  
?>