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
        $sql="SELECT T.Personas_Cedula , 
            P.Nacionalidad , P.Nombre1 , P.Nombre2 , P.Apellido1 , P.Apellido2 , 
            A.Area , A.Estado  
            FROM trabajador AS T 
            INNER JOIN personas AS P 
            ON P.Cedula = T.Personas_Cedula
            INNER JOIN analistas AS A
            ON A.Analista_Cedula = T.Personas_Cedula
            WHERE 1 ";
		$Materias= new conexion2();
		$resultado =$Materias->realizar($sql);
		$array_s =  mysqli_fetch_assoc($resultado);

	$html= "";

	$prioridad=0;
	do  
	{
		
			$prioridad++;
	
        if ($array_s != null || $array_s != "") 
            {
     
                $html= "<tr>  
                            <td>".$prioridad."</td>
                            <td>".$array_s['Nacionalidad']."-".$array_s['Personas_Cedula']."</td>
                            <td>".$array_s['Apellido1']." ".$array_s['Apellido2']." ".$array_s['Nombre1']." ".$array_s['Nombre2']."</td>
                            <td>".$array_s['Area']."</td>
                            <td>".$array_s['Estado']."</td>
                            <td id='opc-iz'> 
                             <button class='btn btn-outline-dark elbnt' onClick=' 
                                $.ajax({
                                    type:".'"POST"'.",
                                    url:".'"../trabajadores/eliminar_analista.php"'.",
                                    data:".'"sera="'."+".$array_s['Personas_Cedula'].",
                                    success: function(data1){
                                        console.log(data1); 
    
                                             } 
                               });'> <i class='icon  icon-close unamas'></i> </button> 

                                
                        
        
        
        
        
                             <button class='btn btn-outline-dark elbnt' onClick=' 
                            $.ajax({
                                type:".'"POST"'.",
                                url:".'"../../../Generator/PDF_empresa/tramite_empresa_individual.php"'.",
                                data:"."sera="."+".$array_s['Personas_Cedula'].", 
                                success: function(data){
                                         setTimeout(function(){
                                             $(".'"#ver-pdf"'.").modal({
                                             show:true,
                                             backdrop:".'"static"'."
                                             }); 
                                         },20);
                                         PDFObject.embed(".'"../../../Temp/reporte.pdf"'.", ".'"#view_pdf"'.");
                             } 
                           });;'> <i class='icon icon-file-pdf-o unamas'></i> </button> </td> 
                        
                                    </tr>";  
		
        echo $html;	
            }
}while($array_s = mysqli_fetch_assoc($resultado)); 
	

?> 