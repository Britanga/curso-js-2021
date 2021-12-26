<?php

// error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='Trayecto';
$donde='Historial'; 
############  USUARIO  ########################
$info[0]=strtolower($_POST['r0']); //cedula del analista
$info[1]=strtolower($_POST['r1']); // tipo  =t1
$info[2]='Adelanto'; // tipo  =t1
// Carrera 

################################################
################################################ 
include('../../../database/data1.php'); 
################################################ 
################################################ 
$controlando= new desiciones($donde,$info,$opc);
$r= $controlando->realizar(); 
################################################
################################################ 
$array_s =  mysqli_fetch_assoc($r);
################################################ 
// echo "<script> swal ('Disculpe' , '$r' , 'warning');</script>";
$html= "<tr> 
        <td></td>
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
            $p1=$array_s['Apellido1']; 
            $n1=$array_s['Nombre1']; 
            $nombre=  $p1.' '.$n1;
            $cedula= $array_s['Cedula'];
            $html= "<tr id="."a".$array_s['Cedula']."> 
                    <td>".$prioridad." </td>
                    <td>".$array_s['Cedula']." </td>
                    <td>".$nombre." </td>
                    <td id='opc-iz'> 
                            <button class='btn btn-outline-dark elbnt icon icon-eye unamas' onClick=' 
                            $.ajax({
                                type:".'"POST"'.",
                                url:".'"../../../Generator/PDF_empresa/tramite_empresa_individual.php"'.",
                                data:".'"sera="'."+".$array_s['Procesos'].", 
                                success: function(data){
                                         setTimeout(function(){
                                             $(".'"#ver-pdf"'.").modal({
                                             show:true,
                                             backdrop:".'"static"'."
                                             }); 
                                         },20);
                                         PDFObject.embed(".'"../../../Temp/reporte.pdf"'.", ".'"#view_pdf"'.");
                             } 
                           });;'>  </button> 
                        
                        
                        <button class='btn btn-outline-dark elbnt icon icon-check unamas' onClick=' 
                        $.ajax({
                            type:".'"POST"'.",
                            url:".'"../Aprobar/Nuevo_ingreso.php"'.",
                            data:".'"Procesos="'."+".$array_s['Procesos']."+".'"&Cedula="'."+".$info[0]." ,
                            success: function(data){
                             swal (".'"Listo"'." , ".'"La Solicitud fue Aprobada"'." , ".'"success"'.");  
                              $(".'"#a'.$cedula.'"'.").addClass(".'"invi"'.");  
                            } 
                       });;'>  </button>
              
                    <button class='btn btn-outline-dark elbnt icon icon icon-close unamas' onClick=' 
                   $.ajax({
                       type:".'"POST"'.",
                       url:".'"../Rechazar/Nuevo_ingreso.php"'.",
                       data:".'"Procesos="'."+".$array_s['Procesos']."+".'"&Cedula="'."+".$info[0]." ,
                       success: function(data){
                        swal (".'"Listo"'." , ".'"La Solicitud fue Rechasada"'." , ".'"success"'.");  
                         $(".'"#a'.$cedula.'"'.").addClass(".'"invi"'.");  
                       } 
                  });;'>  </button>  </td>
                            </tr>"; 
    echo    $html;
            };
  }while($array_s = mysqli_fetch_assoc($r)); 

   
 