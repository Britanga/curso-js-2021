<?php

// error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='Telefono';
$donde='Comunicasion'; 
############  USUARIO  ########################
$info[0]=strtolower($_POST['r0']); //cedula
$info[1]=strtolower($_POST['r1']); //codigo
$info[2]=strtolower($_POST['r2']); //numero
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
$longitu=strlen($info[2]);
if ($longitu != 7) 
{
    echo 333;//berifique la longitu de los numero
    die();
};
if ($longitu == 7 && $info[1]!= '') {
    $controlando= new desiciones($donde,$info,$opc);
    $r= $controlando->realizar();  
};
################################################
################################################ 
// respuesta
if($r ==1){ 
 echo 1 ; // bien 
} else{
        echo 2 ; // algun error    
    };
?>