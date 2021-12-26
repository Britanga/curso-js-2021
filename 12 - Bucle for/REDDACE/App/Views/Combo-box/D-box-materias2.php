<?php
error_reporting(0);
$info[0]=$_POST['cedula'];
$info[1]=$_POST['Trayecto1'];
$info[2]=$_POST['fase1'];
// FIN de las Validaciones
################################################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
// operacion 
			$Materias= new desiciones($donde='Materias',$info,$opc='Analista');
			$resultado2 =$Materias->realizar();
			$html= "<option value='0'>Materia</option>";
			$array_s =  mysqli_fetch_assoc($resultado2);
			$prioridad=0;
			do  
			{
				if ($prioridad == 0) 
				{
					$html= "<option value=''>Materia</option>";
					echo $html;	
					$prioridad++;
				}
					$html= "<option value='".$array_s['Codigo_Materias']."'>".$array_s['Nombre']."</option>";
				echo $html;
		}while($array_s = mysqli_fetch_assoc($resultado2)); 
	die();
?> 