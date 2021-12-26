<?php
$donde='Parroquias';
$info=$_POST['Codigo_Municipio'];
$opc='buscar';

// FIN de las Validaciones
################################################
################################################
include('../../../database/data1.php');
################################################
################################################
$combo_box_direccion= new desiciones($donde,$info,$opc);
$resultado =$combo_box_direccion->realizar($verifica='');
// operacion 

	$array_s =  mysqli_fetch_assoc($resultado);

	$html= "<option value='0'>Seleccionar Municipio</option>";
	
	$prioridad=0;
	do  
	{
		if($prioridad== 0){
			$html= "<option value=''>Elija</option>";
			echo $html;
			$prioridad++;
		}$html= "<option value='".$array_s['IDP']."'>".$array_s['Parroquia']."</option>";
	
        echo $html;
			

}while($array_s = mysqli_fetch_assoc($resultado)); 
	


?>