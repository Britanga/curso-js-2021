<?php

$info[0]=$_POST['Carreras'];
$info[1]=$_POST['trayecto1'];
$info[2]=$_POST['fase1'];
// $info[1]='t2';
// FIN de las Validaciones
################################################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
// operacion 

 
if ($info[1]!= '' || $info[1]!= false) {
	    $Materias= new desiciones($donde='Materias',$info,$opc='Buscar2');
    	$resultado =$Materias->realizar();
		$array_s =  mysqli_fetch_assoc($resultado);

		  if ($info[2]!= '' || $info[2]!= false) {
					$Materias= new desiciones($donde='Materias',$info,$opc='Buscar3');
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
		  };

	$html= "<option value='0'>Materia</option>";
	 
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
			

}while($array_s = mysqli_fetch_assoc($resultado)); 
	
}

?> 