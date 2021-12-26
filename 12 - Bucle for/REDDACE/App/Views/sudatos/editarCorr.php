<?php

// error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='Correo';
$donde='Comunicasion'; 
############  USUARIO  ########################
$info[0]=strtolower($_POST['r0']); //cedula
$info[1]=strtolower($_POST['r1']); //correo
$info[2]=strtolower($_POST['r2']); //dominio
$info[3]=strtolower($_POST['r3']); //ID  
################################################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
// validacion
if ($info[1]== '' || $info[2]== '') 
{
    echo 222;//capos vasio
    die(); 
}
  $controlando= new desiciones($donde,$info,$opc);
  $r= $controlando->realizar();

################################################
################################################ 
// respuesta
if($r ==1){
 echo 1 ; // bien 
} else{
        echo 2 ; // algun error    
    };
?>