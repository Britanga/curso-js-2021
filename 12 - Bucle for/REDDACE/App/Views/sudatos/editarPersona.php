<?php

// error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='Editar';
$donde='Persona';
############  USUARIO  ########################
$info[0]=strtolower($_POST['r0']);
$info[1]=strtolower($_POST['r1']);
$info[2]=strtolower($_POST['r2']);
$info[3]=strtolower($_POST['r3']);
$info[4]=strtolower($_POST['r4']);
$info[5]=strtolower($_POST['r5']); // la nueva
$info[6]=strtolower($_POST['r6']); // la vieja
$info[7]=strtolower($_POST['r7']); 
$longitu=strlen($info[7]);
$punto =0;
if($info[7]== '' || $longitu <= 3){ 
   $punto  = 1;
}else {
    $punto = 2;
};
################################################
################################################
// validacion
if ($info[0]== '' || $info[1]== ''|| $info[2]== ''|| $info[3]== '' ) {
    echo 333;
    die();
};
if ($info[4]== '' || $info[5]== ''|| $info[6]== '') {
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
if ($punto == 2) {
    $opc='Editar';
    $donde='Matricula';
    $matri[0]=$info[7] ;$matri[1]=$info[0];
    $controlando= new desiciones($donde,$matri,$opc);
    $controlando->realizar(); 
    
}
################################################
################################################ 
// respuesta
if($r ==1){
 echo 1 ;
}else{
    echo 2 ;
}
?>