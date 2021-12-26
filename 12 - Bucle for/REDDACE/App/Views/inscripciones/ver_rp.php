<?php

// error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='rp';
$donde='Historial'; 
############  USUARIO  ########################
$info[0]=strtolower($_POST['r0']);
$info[1]='Reparacion'; 
$info[2]='t%';  
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
$html= "";
        $prioridad=0;

do 
{ 

            if ($array_s != null || $array_s != "") 
            {
            $prioridad++;
            $periodo =$Qpasa3= substr($array_s['Creado'], -0, 4); ;
            $html= "<tr> 
                    <td>".$periodo." </td>
                    <td>".$array_s['ma']." </td>
                    <td>".$array_s['Espesialidad']." </td>
                    <td id='opc-iz'> <a href='javascript: 
                    $.ajax({
                        type:".'"POST"'.",
                        url:".'"../../../Generator/PDF_empresa/tramite_empresa_individual.php"'.",
                        data:".'"sera="'."+".$array_s['Procesos'].",
                        success: function(datos){
                                 setTimeout(function(){
                                     $(".'"#ver-pdf"'.").modal({
                                     show:true,
                                     backdrop:".'"static"'."
                                     }); 
                                 },10);
                                 PDFObject.embed(".'"../../../Temp/reporte.pdf"'.", ".'"#view_pdf"'.");
                     } 
                   });;'> <button class='btn btn-outline-dark elbnt'> <i class='icon icon-eye unamas'></i> </button> </a></td> 
                
                            </tr>"; 
    echo    $html;
            };
  }while($array_s = mysqli_fetch_assoc($r)); 