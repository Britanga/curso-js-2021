<?php

$info=$_POST['m1']; //carrera 
################################################
include('../../../database/data1.php'); 
################################################ 
// operacion 
	    $Materias= new desiciones($donde='Materias',$info,$opc='Buscar4');
    	$resultado =$Materias->realizar();
        echo json_encode($resultado); 
        die();
?> 