<?php

// error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='Editar';
$donde='Direccione';
############  USUARIO  ########################
$info[0]=strtolower($_POST['r0']);
$info[1]=strtolower($_POST['r1']);
$info[2]=strtolower($_POST['r2']); 
$info[3]=strtolower($_POST['r3']);
$info[4]=strtolower($_POST['r4']);
$info[5]=strtolower($_POST['r5']); 
$info[6]=strtolower($_POST['r6']); 
$info[7]=strtolower($_POST['r7']); 
$info[8]=strtolower($_POST['r8']); 
################################################
################################################
// validacion
if ($info[0]== '' || $info[1]== ''|| $info[2]== '') {
    echo 333;
    die();
};
if ($info[3]== '' || $info[4]== ''|| $info[5]== '') {
    echo 333;
    die();
};
if ($info[6]== '' || $info[7]== ''|| $info[8]== '') {
    echo 333;
    die();
};
################################################
include('../../../database/data1.php');
################################################
################################################
// operacion  
    $controlando= new desiciones($donde,$info,$opc);
$r= $controlando->realizar(); 
################################################
################################################ 
// respuesta
if($r ==1){
 echo 1 ; 
}else{
    echo 2 ;
}
?>