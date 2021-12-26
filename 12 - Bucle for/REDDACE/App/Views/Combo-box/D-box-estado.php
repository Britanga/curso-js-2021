
<?php
$donde='Estados';
$info='todo';
$opc='buscar';
// FIN de las Validaciones
################################################
################################################
include('../../../database/data1.php');
################################################
################################################
// operacion 

$combo_box_direccion= new desiciones($donde,$info,$opc);
$resultado =$combo_box_direccion->realizar($verifica='');
?>