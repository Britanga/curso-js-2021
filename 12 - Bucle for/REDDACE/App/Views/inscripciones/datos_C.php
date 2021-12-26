<?php
// error_reporting(0);
$info[0]=$_POST['cedula'];
$info[1]=$_POST['materia1'];
$info[2]=$_POST['tipo'];
// FIN de las Validaciones
################################################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
// operacion 
			$Recuperacion= new desiciones($donde='Cantidad',$info,$opc='Procesos1E');
			$resultado2 =$Recuperacion->realizar();
            $html= "Solisitudes: ";
            $html.= $resultado2[0];
echo $html;
	