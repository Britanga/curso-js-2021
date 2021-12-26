<?php

$info[0]='Carreras';
$info[1]='Activo';
################################################
################################################
class conexion2 
{
    public function realizar($data) 
    { $sql= $data;
		return $mesaje= $this-> conectar($sql); 
    }
    public function conectar($sql)
    {
		#-- -----------------------------------------------------#
		#                     conexion
		#servido 
		$d[0]='localhost';
		#user
		$d[1]='root';
		#ssap
		$d[2]='';
		#BD
		$d[3]='reddace';
		$memory1=mysqli_connect($d[0],$d[1],$d[2],$d[3]);
		return $listo  =  mysqli_query($memory1,$sql);	
		
    }
};
################################################
// operacion 
        $sql="SELECT T.Personas_Cedula , P.Nacionalidad
              FROM trabajador AS T 
              INNER JOIN personas AS P 
              ON P.Cedula = T.Personas_Cedula
              WHERE 1 AND T.Estado ='Espera'";
		$Materias= new conexion2();
		$resultado =$Materias->realizar($sql);
		$array_s =  mysqli_fetch_assoc($resultado);

	$html= "<option value='0'>trabajador</option>";

	$prioridad=0;
	do  
	{
		
		if ($prioridad == 0) 
		{
			$html= "<option value=''>trabajadores</option>";
			echo $html;	
			$prioridad++;
		}
        if ($array_s != null || $array_s != "") 
            {
		$html= "<option value='".$array_s['Personas_Cedula']."'>".$array_s['Nacionalidad']."-".$array_s['Personas_Cedula']."</option>";
        echo $html;		
            }
}while($array_s = mysqli_fetch_assoc($resultado)); 
	

?> 