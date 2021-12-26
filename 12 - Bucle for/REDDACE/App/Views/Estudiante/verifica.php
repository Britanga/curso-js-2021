<?php
$info[0]=$_POST['r0']; // inscrito
$info[1]=$_POST['r1']; // Matricula
$info[2]=$_POST['r2']; // algoNo
$info[3]=$_POST['r3']; // cedula estudiante
$info[4]=$_POST['r4']; // id
$info[5]=$_POST['r5']; // user
include('../../../database/data1.php'); 
################################################
if ($info[0] == '' || $info[0] == null || $info[0] == false) {
    echo 333;
    die();
}
if ($info[0] == 'Si') 
{
    if ($info[1] == '' || $info[2] == '') 
    {
        echo 333;
        die();
    }
    else 
    {
        $controlando= new desiciones($donde='Estudiante',$info,$opc='Verificar');
        return $r= $controlando->realizar(); 
    }
}
else
{
    $controlando= new desiciones($donde='Estudiante',$info,$opc='Verificar');
    return $r= $controlando->realizar();    
}
  
   