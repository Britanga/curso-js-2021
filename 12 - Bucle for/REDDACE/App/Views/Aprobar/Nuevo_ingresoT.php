<?php
 ################################################
 include('../../../database/data1.php'); 
 ################################################ 
//  variable
$info[0]=strtolower($_POST['cedula']);   // Cedula ana
$info[1]='inscripcion'; // tipo   
 // operacion ;
    $controlando= new desiciones($donde='Inscripcion',$info,$opc='AprobarT');
   return $convercion =$controlando->realizar(); 
    ################################################ 
?>