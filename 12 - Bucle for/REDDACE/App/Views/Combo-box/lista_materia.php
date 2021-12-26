<?php

$info=$_POST['Carreras']; //carrera 
################################################
include('../../../database/data1.php'); 
################################################ 
// operacion 
	    $Materias= new desiciones($donde='Materias',$info,$opc='lista');
    	$r =$Materias->realizar();
		$array_s =  mysqli_fetch_assoc($r);
        $html= "";
        $prioridad=0;

do 
{ 

            if ($array_s != null || $array_s != "") 
            {
            $prioridad++;
            $html= "<tr> 
                        <td>".$prioridad." </td>
                        <td>".$array_s['Nombre']." </td>
                        <td>".$array_s['Trayecto']." </td>
                        <td>".$array_s['Fase']." </td>
                        <td>".$array_s['Estado']." </td>
                    </tr>"; 
    echo    $html;
            };
  }while($array_s = mysqli_fetch_assoc($r)); 