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
			$Recuperacion= new desiciones($donde='Recuperacion',$info,$opc='Procesos');
			$resultado2 =$Recuperacion->realizar();
			$array_s =  mysqli_fetch_assoc($resultado2);
			$html= "";
			$prioridad=0;
	do 
	{ 
				if ($array_s != null || $array_s != "") 
				{
					$prioridad++;
					$p1=$array_s['Apellido1']; 
					$n1=$array_s['Nombre1']; 
					$nombre=  $p1.' '.$n1;
					$cedula= $array_s['Cedula'];
					$html= "<tr id="."a".$array_s['Cedula']."> 
							<td>".$prioridad." </td>
							<td>".$array_s['Cedula']." </td>
							<td>".$nombre." </td>
							<td id='opc-iz'> 
                        
                        <button class='btn btn-outline-dark elbnt icon icon-check unamas' onClick=' 
                        $.ajax({
                            type:".'"POST"'.",
                            url:".'"../Aprobar/Recuperacion.php"'.",
                            data:".'"Procesos="'."+".$array_s['Procesos']."+".'"&Cedula="'."+".$info[0]."+".'"&recuperacion="'."+".$array_s['ID_Recuperaciones']." ,
                            success: function(data){
								console.log(data);
                             swal (".'"Listo"'." , ".'"La Solicitud fue Aprobada"'." , ".'"success"'.");  
                              $(".'"#a'.$cedula.'"'.").addClass(".'"invi"'.");  
                            }  
                       });;'>  </button>
              
                    <button class='btn btn-outline-dark elbnt icon icon icon-close unamas' onClick=' 
                   $.ajax({
                       type:".'"POST"'.",
                       url:".'"../Rechazar/Recuperacion.php"'.",
                       data:".'"Procesos="'."+".$array_s['Procesos']."+".'"&Cedula="'."+".$info[0]."+".'"&recuperacion="'."+".$array_s['ID_Recuperaciones'].",
                       success: function(data){
                        swal (".'"Listo"'." , ".'"La Solicitud fue Rechasada"'." , ".'"success"'.");  
                         $(".'"#a'.$cedula.'"'.").addClass(".'"invi"'.");  
                       } 
                  });;'>  </button>  </td>
                            </tr>"; 
    echo    $html;
				};
	  }while($array_s = mysqli_fetch_assoc($r)); 