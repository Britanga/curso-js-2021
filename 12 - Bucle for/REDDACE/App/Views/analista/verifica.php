<?php
$info[0]=$_POST['cedula'];
$info[1]=$_POST['codigo'];

include('../../../database/data1.php'); 
################################################
if ($info[1] == '' || $info[1] == null || $info[1] == false) {
    echo 333;
    die();
}
   $controlando= new desiciones($donde='Analista',$info,$opc='Verificar');
   return $r= $controlando->realizar();  
   