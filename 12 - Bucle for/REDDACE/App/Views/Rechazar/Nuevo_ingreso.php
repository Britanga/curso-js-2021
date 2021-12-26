<?php
 ################################################
 include('../../../database/data1.php'); 
 ################################################ 
//  variable
$info[0]=strtolower($_POST['Cedula']);   // Cedula
$info[1]=strtolower($_POST['Procesos']); // Procesos 
 // operacion ;
    $controlando= new desiciones($donde='Inscripcion',$info,$opc='Rechazar');
    $convercion =$controlando->realizar(); 
    ################################################

?>