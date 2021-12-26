<?php
$donde='Municipios';
$info=$_POST['Codigo_Estado'];
$opc='buscar';

// FIN de las Validaciones
################################################
################################################
include('../../../database/data1.php'); 
################################################
################################################
// operacion 
$combo_box_direccion= new desiciones($donde,$info,$opc);
$resultado =$combo_box_direccion->realizar($verifica='');

 
	$array_s =  mysqli_fetch_assoc($resultado);

	$html= "<option value='0'>Seleccionar Municipio</option>";
	$prioridad=0;
	do  
	{
		if($prioridad== 0){
			$html= "<option value=''>Elija</option>";
			echo $html;
			$prioridad++;
		}
		$html= "<option value='".$array_s['C_P_M']."'>".$array_s['Municipio']."</option>";
	
        echo $html;
			

}while($array_s = mysqli_fetch_assoc($resultado)); 
	


?>