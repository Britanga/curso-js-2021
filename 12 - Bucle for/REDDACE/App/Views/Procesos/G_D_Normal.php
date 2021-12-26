<?php

// ////////////////////////////////////////////////////////////////
$opc='Abrir';   
$donde='Procesos'; 
############  USUARIO  ########################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
$info[0]=strtolower($_POST['r0']); //inicia11
$info[1]=strtolower($_POST['r1']); //Edita11
$info[2]=strtolower($_POST['r2']); //Culmuna11
$info[3]=strtolower($_POST['r3']); //Cedula
$info[4]='Adelanto'; //tipo
// validacion 
if ($info[0]== '' || $info[1]== '') 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
if ($info[2]== '' || $info[3]== '' || $info[4]== '') 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
################################################
 // operacion ;
 $controlando= new desiciones($donde,$info,$opc);
 $respuesta = $convercion =$controlando->realizar(); 
################################################
################################################  
// resultados
if ($respuesta == 0) {
  return 0; //mal
  die();
};
if ($respuesta == 1) {
  return 1; // bien
  die();
};


 ?>