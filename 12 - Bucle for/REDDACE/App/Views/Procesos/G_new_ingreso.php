<?php
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
 $AI=date('Y/m/d');
 $Qpasa3= substr($AI, 0, 4); 
        $sql1="SELECT ID_Procesos , COUNT(ID_Procesos) AS numero
               FROM procesos 
               WHERE 1 = 1  
               GROUP BY ID_Procesos 
               ORDER BY  ID_Procesos DESC 
               LIMIT 1 ";
		$Proceso= new conexion2();
    $r_Proceso = $Proceso->realizar($sql1);
         $El_proceso =  mysqli_fetch_array($r_Proceso);

        $sql3="SELECT Espesialidad 
               FROM carreras 
               WHERE Estado = 'activo'";
		$Cambios= new conexion2();
		$resultado =$Cambios->realizar($sql3);
        $array_s =  mysqli_fetch_assoc($resultado);
        
           
  do 
  { 
     if ($array_s != null || $array_s != "") 
     {
       $varEE=$array_s['Espesialidad'];
       $La_quemanda=$_POST[$varEE];
                if ( $La_quemanda !='' && $La_quemanda != 0 ) 
                {
                  $sqlINSERT = "INSERT INTO inscripciones VALUES (NULL, '$El_proceso[0]', '$La_quemanda', '$Qpasa3', '$varEE');";
                  $union= new conexion2();
                  $r_union =$union->realizar($sqlINSERT);
                }
             
     };
   }while($array_s = mysqli_fetch_assoc($resultado)); 

return 1; 