<?php

// error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='ver';
$donde='Peticion'; 
############  USUARIO  ########################
$info[0]=strtolower($_POST['r0']); //cedula
$info[1]=strtolower($_POST['r1']); //solisitud (deque)
$info[2]='Solicitudes'; //peticion 
#r2 = tipo de peticion puedeser (conjelar,ekivalencia, solicitud, recalma)
#r1 = tipo de peticion puedeser (carta,historial,rekor,(puede haber mas))
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
        </tr>";
        $prioridad=0;
do 
{ 
            if ($array_s != null || $array_s != "") 
            {
            $prioridad++;
            $html= "<tr> 
                    <td>".$prioridad." </td>
                    <td>".$array_s['Estado']." </td>
                    <td>".$array_s['Solisitada']." </td>
                    <td id='opc-iz'> <a href='javascript: 
                    $.ajax({
                        type:".'"POST"'.",
                        url:".'"../../../Generator/PDF_empresa/tramite_empresa_individual.php"'.",
                        data:".'"sera="'."+".$array_s['ID_Peticiones'].",
                        success: function(datos){
                                 setTimeout(function(){
                                     $(".'"#ver-pdf"'.").modal({
                                     show:true,
                                     backdrop:".'"static"'."
                                     }); 
                                 },10);
                                 PDFObject.embed(".'"../../../Temp/reporte.pdf"'.", ".'"#view_pdf"'.");
                     } 
                   });;'> <button class='btn btn-outline-dark elbnt'> <i class='icon icon-file-pdf-o unamas'></i> </button> </a></td> 
                
                            </tr>"; 
    echo    $html;
            };
  }while($array_s = mysqli_fetch_assoc($r)); 