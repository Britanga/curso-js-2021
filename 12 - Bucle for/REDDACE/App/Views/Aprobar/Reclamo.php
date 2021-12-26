<?php
 ################################################
 include('../../../database/data1.php'); 
 ################################################ 
//  variable
$info[0]=strtolower($_POST['Cedula']);   // Cedula
$info[1]=strtolower($_POST['Procesos']); // Procesos de los procesos del estudiante 
$info[2]=strtolower($_POST['msg']); // Procesos De la recuperacion
 // operacion ;
    $controlando= new desiciones($donde='Peticion',$info,$opc='Aprobar');
    $convercion =$controlando->realizar(); 
    ################################################

?>
