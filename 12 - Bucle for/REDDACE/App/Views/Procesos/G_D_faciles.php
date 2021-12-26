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
############  USUARIO  ########################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
$d[0]=strtolower($_POST['r0']); //inicia11
$d[1]=strtolower($_POST['r1']); //Edita11
$d[2]=strtolower($_POST['r2']); //Culmuna11
$d[3]=strtolower($_POST['r3']); //Cedula
$d[4]=strtolower($_POST['r4']); //tipo
$d[5]=strtolower($_POST['r5']); //todos
// validacion
if ($d[0]== '' || $d[1]== '' || $d[2]== '') 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
if ($d[3]== '' || $d[4]== '' || $d[5]== '') 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
################################################
 // operacion ;
 $sql="INSERT INTO procesos VALUES ( null, 'En Espera', '$d[4]', now(), '$d[0]', '$d[1]', '$d[2]', '$d[3]');";
 $Proceso= new conexion2();
 $r_Proceso = $Proceso->realizar($sql);
################################################
################################################  
// resultados
if ($r_Proceso == 0) {
  echo 0; //mal
  die();
};
if ($r_Proceso == 1) {
//   echo 1; // bien
    $AI=date('Y/m/d');
    $Qpasa3= substr($AI, 0, 4); 
        $sql1="SELECT ID_Procesos , COUNT(ID_Procesos) AS numero
                FROM procesos 
                WHERE 1 = 1  
                GROUP BY ID_Procesos 
                ORDER BY  ID_Procesos DESC 
                LIMIT 1 ";
        $Proceso1= new conexion2();
    $r_Proceso1 = $Proceso1->realizar($sql1);
            $El_proceso1 =  mysqli_fetch_array($r_Proceso1);

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
        
                $sqlINSERT = "INSERT INTO inscripciones VALUES (NULL, '$El_proceso1[0]', '$d[5]', '$Qpasa3', '$varEE');";
                $union= new conexion2();
                $r_union =$union->realizar($sqlINSERT);
        };
    }while($array_s = mysqli_fetch_assoc($resultado)); 

    return 1; 

  die();
};












