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
        $sql="SELECT Espesialidad
		      FROM carreras
		      WHERE Estado = 'Activo' ";
		$Materias= new conexion2();
		$resultado =$Materias->realizar($sql);
		$array_s =  mysqli_fetch_assoc($resultado);
        $html= "<tr> 
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>";
        $prioridad=0;
do 
{ 
            if ($array_s != null || $array_s != "") 
            {
            $prioridad++;
            $html= "<tr>  
                    <td>".$prioridad."</td>
                    <td>".$array_s['Espesialidad']."</td>
                    <td>
                      <input type='number' class='robo' name='".$array_s['Espesialidad']."' id='' max='500' min='1' onkeypress='return soloNumeros(event)'> 
                    </td> </tr>"; 
    echo    $html;
            };
  }while($array_s = mysqli_fetch_assoc($resultado)); 
  
