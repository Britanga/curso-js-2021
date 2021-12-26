<?php

$info[0]=$_POST['ct']; //carrera 
$info[1]=$_POST['t1']; //trayecto 
$info[2]=$_POST['f1']; //fase 
################################################
include('../../../database/data1.php'); 
################################################ 
// operacion 
	    $Materias= new desiciones($donde='Materias',$info,$opc='Buscar3');
    	$resultado =$Materias->realizar();
		$array_s =  mysqli_fetch_assoc($resultado);

	$html= "<option value='0'>Materia</option>";
	$prioridad=0;
	do   
	{
		if($prioridad== 0){
			$html= "<option value=''>Elija</option>";
			echo $html;
			$prioridad++;
		}
			$html= "<option value='".$array_s['Codigo_Materias']."'>".$array_s['Nombre']."</option>";
			echo $html;
    }while($array_s = mysqli_fetch_assoc($resultado)); 
?> 