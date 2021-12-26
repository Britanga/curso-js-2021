<?php
error_reporting(0);
 $info[0]=$_POST['cedula'];
 $info[1]=$_POST['Trayecto1'];
 $info[2]=$_POST['Finalizado'];
 $info[3]=$_POST['Reparacion'];
 $info[4]=$_POST['Espera'];
// FIN de las Validaciones
################################################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
// operacion 
			$Materias= new desiciones($donde='Materias',$info,$opc='Analista2');
			$resultado2 =$Materias->realizar();
			$html= "";
			$array_s =  mysqli_fetch_assoc($resultado2);
			$prioridad=0;
			do  
			{
				if ($prioridad == 0) 
				{
					$html= "<div>
								<p>Materia: <sup>000</sup></p>
							</div>";
					echo $html;	
					$prioridad++;
				}
					$html= " <div>
                                 <p>".$array_s['mm']." <sup>".$array_s['cantiso']."</sup></p>
                            </div>";
				echo $html;
		}while($array_s = mysqli_fetch_assoc($resultado2)); 
	die();
?> 
