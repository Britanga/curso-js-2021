<?php

$info=$_POST['Carreras'];
// FIN de las Validaciones
################################################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
 $combo_box_Materias= new desiciones($donde='Materias',$info,$opc='Buscar');
 $resMateria =$combo_box_Materias->realizar();
 echo json_encode($resMateria); 
die();


?> 